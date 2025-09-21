<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Product;
use App\Models\ProductOut;
use App\Models\ProductOutItem;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;

class ProductOutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');

        $customers = Customer::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        return view('product_out.index', compact('products','customers'));
    }

    /**
     * Get data for DataTable
     */
  // Update only the getData method in your ProductOutController

public function getData(Request $request)
{
    if ($request->ajax()) {
        $query = ProductOut::with(['customer', 'items.product'])->select('product_outs.*');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('total_products', function($row) {
                return $row->items->count() . ' items';
            })
            ->addColumn('total_quantity', function($row) {
                return $row->items->sum('qty');
            })
            ->addColumn('total_amount', function($row) {
                return '₹ ' . number_format($row->items->sum('total_price'), 2);
            })
            ->addColumn('customer_name', function($row) {
                return $row->customer->nama ?? $row->customer->name ?? '-';
            })
            ->addColumn('products_list', function($row) {
                $products = $row->items->map(function($item) {
                    $price = number_format($item->total_price, 2);
                    return $item->product->nama . ' (Qty: ' . $item->qty . ', Total: ₹' . $price . ')';
                })->implode('<br>');
                return $products;
            })
            ->addColumn('action', function($row) {
                $btn  = '<div class="btn-group" role="group">';
                $btn .= '<button type="button" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light me-1 editOutgoing" data-id="'.$row->id.'" title="Edit"><i class="bi bi-pencil-square"></i></button> ';
                $btn .= '<button type="button" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light me-1 viewOutgoing" data-id="'.$row->id.'" title="View"><i class="bi bi-eye"></i></button> ';
                $btn .= '<button type="button" class="btn btn-icon btn-sm btn-success-light btn-wave waves-effect waves-light me-1 printReceipt" data-id="'.$row->id.'" title="Print Receipt"><i class="bi bi-printer"></i></button> ';
                $btn .= '<button type="button" class="btn btn-icon btn-sm btn-danger-light btn-wave waves-effect waves-light deleteOutgoing" data-id="'.$row->id.'" title="Delete"><i class="bi bi-trash"></i></button>';
                $btn .= '</div>';
                return $btn;
            })
            ->rawColumns(['action', 'products_list'])
            ->make(true);
    }
}

    /**
     * Store or update outgoing products with multiple items
     */
    public function store(Request $request)
    {
        // Validate main data
        $request->validate([
            'customer_id' => 'required|integer|exists:customers,id',
            'date_out' => 'required|date',
            'products' => 'required|array|min:1',
            'products.*.product_id' => 'required|integer|exists:products,id',
            'products.*.qty' => 'required|integer|min:1',
        ], [
            'products.required' => 'At least one product is required',
            'products.*.product_id.required' => 'Product selection is required',
            'products.*.qty.required' => 'Quantity is required',
            'products.*.qty.min' => 'Quantity must be at least 1',
        ]);

        DB::beginTransaction();
        try {
            $id = $request->id;
            $totalAmount = 0;
            
            if ($id) {
                // UPDATE MODE
                $productOut = ProductOut::findOrFail($id);
                
                // Restore stock from old items
                foreach ($productOut->items as $oldItem) {
                    $product = Product::findOrFail($oldItem->product_id);
                    $product->qty += $oldItem->qty;
                    $product->save();
                }
                
                // Delete old items
                $productOut->items()->delete();
            } else {
                // CREATE MODE - Create parent record first
                $productOut = ProductOut::create([
                    'customer_id' => $request->customer_id,
                    'date_out' => $request->date_out,
                    'total_amount' => 0, // Will update after processing items
                ]);
            }

            // Process new items
            foreach ($request->products as $productData) {
                $product = Product::findOrFail($productData['product_id']);
                $qty = (int) $productData['qty'];
                
                // Check stock availability
                if ($qty > $product->qty) {
                    throw new Exception("Insufficient stock for product: {$product->nama}. Available: {$product->qty}, Requested: {$qty}");
                }
                
                // Create product out item with current product price
                $itemTotal = $product->price * $qty;
                $totalAmount += $itemTotal;
                
                ProductOutItem::create([
                    'product_out_id' => $productOut->id,
                    'product_id' => $productData['product_id'],
                    'qty' => $qty,
                    'unit_price' => $product->price, // Store current price
                    'total_price' => $itemTotal, // Calculate total
                ]);
                
                // Reduce stock
                $product->qty -= $qty;
                $product->save();
            }

            // Update parent record with total amount
            $productOut->update([
                'customer_id' => $request->customer_id,
                'date_out' => $request->date_out,
                'total_amount' => $totalAmount,
            ]);

            DB::commit();
            return response()->json([
                'success' => true, 
                'message' => $id ? 'Product Out updated successfully.' : 'Product Out created successfully.',
                'total_amount' => $totalAmount
            ]);
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('ProductOut Store Error: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $productOut = ProductOut::with(['items.product', 'customer'])->findOrFail($id);
            
            $data = [
                'id' => $productOut->id,
                'customer_id' => $productOut->customer_id,
                'date_out' => $productOut->date_out,
                'total_amount' => $productOut->total_amount,
                'items' => $productOut->items->map(function($item) {
                    return [
                        'product_id' => $item->product_id,
                        'product_name' => $item->product->nama,
                        'qty' => $item->qty,
                        'unit_price' => $item->unit_price,
                        'total_price' => $item->total_price,
                    ];
                })
            ];
            
            return response()->json($data);
        } catch (Exception $e) {
            return response()->json(['error' => 'Record not found'], 404);
        }
    }

    /**
     * View details of a specific product out record
     */
    public function show($id)
    {
        try {
            $productOut = ProductOut::with(['items.product', 'customer'])->findOrFail($id);
            return response()->json($productOut);
        } catch (Exception $e) {
            return response()->json(['error' => 'Record not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $productOut = ProductOut::with('items')->findOrFail($id);
            
            // Restore stock for each item
            foreach ($productOut->items as $item) {
                $product = Product::findOrFail($item->product_id);
                $product->qty += $item->qty;
                $product->save();
            }
            
            // Delete items first (foreign key constraint)
            $productOut->items()->delete();
            
            // Delete main record
            $productOut->delete();

            DB::commit();
            return response()->json([
                'success' => true, 
                'message' => 'Record deleted and stock restored successfully.'
            ]);
            
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('ProductOut Delete Error: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Server error while deleting.'
            ], 500);
        }
    }

    /**
     * Get product details with current price
     */
    public function getProduct($id)
    {
        try {
            $product = Product::findOrFail($id);
            return response()->json([
                'id' => $product->id,
                'name' => $product->nama,
                'price' => $product->price,
                'stock' => $product->qty,
                'formatted_price' => '₹ ' . number_format($product->price, 2)
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    /**
     * Get available products with stock and price
     */
    public function getProducts()
    {
        $products = Product::where('qty', '>', 0)
            ->orderBy('nama', 'ASC')
            ->select('id', 'nama', 'qty', 'price')
            ->get()
            ->map(function($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->nama,
                    'stock' => $product->qty,
                    'price' => $product->price,
                    'formatted_price' => '₹ ' . number_format($product->price, 2)
                ];
            });
            
        return response()->json($products);
    }
}