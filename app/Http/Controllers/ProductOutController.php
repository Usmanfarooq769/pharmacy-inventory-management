<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Exports\ExportProdukKeluar;
use App\Models\Product;
use App\Models\ProductOut;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;
use PDF;


class ProductOutController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('role:admin,staff');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $products = Product::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');

        $customers = Customer::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $invoice_data = ProductOut::all();
        return view('product_out.index', compact('products','customers', 'invoice_data'));
    }

     public function getData(Request $request)
    {
        if ($request->ajax()) {
            $query = ProductOut::with(['product', 'customer'])->select('product_outs.*');

            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('product_name', function($row) {
                    return $row->product->name ?? '-';
                })
                ->addColumn('customer_name', function($row) {
                    return $row->customer->nama ?? $row->customer->name ?? '-';
                })
                ->addColumn('action', function($row) {
                    $btn  = '<button type="button" class="btn btn-primary-light editOutgoing" data-id="'.$row->id.'"><i class="bi bi-pencil-square"></i></button> ';
                    $btn .= '<button type="button" class="btn btn-danger-light deleteOutgoing" data-id="'.$row->id.'"><i class="bi bi-trash"></i></button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id'  => 'required|integer|exists:products,id',
            'customer_id' => 'required|integer|exists:customers,id',
            'qty'         => 'required|integer|min:1',
            'date_out'     => 'required|date'
        ]);

        DB::beginTransaction();
        try {
            $id = $request->id; // present when editing

            if ($id) {
                // ---- UPDATE logic ----
                $pk = ProductOut::findOrFail($id);
                $oldProductId = $pk->product_id;
                $oldQty       = (int) $pk->qty;
                $newProductId = (int) $request->product_id;
                $newQty       = (int) $request->qty;

                if ($oldProductId === $newProductId) {
                    // same product -> adjust by difference
                    $product = Product::findOrFail($newProductId);
                    $diff = $newQty - $oldQty; // positive => need to reduce more stock
                    if ($diff > 0 && $diff > $product->qty) {
                        return response()->json(['success' => false, 'message' => 'Insufficient stock for this product.'], 400);
                    }
                    $product->qty -= $diff;
                    $product->save();
                } else {
                    // product changed: restore old product stock, then reduce new product stock
                    $oldProduct = Product::findOrFail($oldProductId);
                    $oldProduct->qty += $oldQty;
                    $oldProduct->save();

                    $newProduct = Product::findOrFail($newProductId);
                    if ($newQty > $newProduct->qty) {
                        return response()->json(['success' => false, 'message' => 'Insufficient stock for the new product.'], 400);
                    }
                    $newProduct->qty -= $newQty;
                    $newProduct->save();
                }

                $pk->update($request->only(['product_id','customer_id','qty','date_out']));
            } else {
                // ---- CREATE logic ----
                $product = Product::findOrFail($request->product_id);
                $qty = (int) $request->qty;
                if ($qty > $product->qty) {
                    return response()->json(['success' => false, 'message' => 'Insufficient stock for this product.'], 400);
                }

                // create outgoing record
                ProductOut::create($request->only(['product_id','customer_id','qty','date_out']));

                // subtract from product stock
                $product->qty -= $qty;
                $product->save();
            }

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Products Out saved successfully.']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error. Please try again.'], 500);
        }
    }

    public function edit($id)
    {
        $row = ProductOut::findOrFail($id);
        return response()->json($row);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $row = ProductOut::findOrFail($id);
            $product = Product::findOrFail($row->product_id);

            // restore stock
            $product->qty += $row->qty;
            $product->save();

            $row->delete();

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Record deleted and stock restored.']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error while deleting.'], 500);
        }
    }

    public function data()
{
    $invoices = ProductOut::with(['product', 'customer'])->latest();

    return DataTables::of($invoices)
        ->addIndexColumn()
        ->addColumn('product_name', fn($row) => $row->product->nama)
        ->addColumn('customer_name', fn($row) => $row->customer->name)
        ->make(true);
    }


 

    
}
