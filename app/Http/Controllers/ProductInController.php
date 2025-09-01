<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductIn;
use App\Models\Supplier;
use PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;


class ProductInController extends Controller
{
   
    public function index()
    {
        $products = Product::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');
            $suppliers = Supplier::orderBy('name','ASC')->pluck('name','id');
        $invoice_data = ProductIn::all();
        return view('product_in.index', compact('products','suppliers','invoice_data'));
    }


    public function invoiceData()
{
    $query = ProductIn::with(['product', 'supplier']);
    return DataTables::of($query)
        ->addColumn('product_name', fn($row) => $row->product->nama ?? '-')
        ->addColumn('supplier_name', fn($row) => $row->supplier->name ?? '-')
        ->make(true);
}


       public function getData(Request $request)
    {
        if ($request->ajax()) {
            $query = ProductIn::with(['product', 'supplier'])->select('Product_ins.*');

            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('product_name', function ($row) {
                    return $row->product->nama ?? $row->product->name ?? '-';
                })
                ->addColumn('supplier_name', function ($row) {
                    return $row->supplier->name ?? '-';
                })
                ->editColumn('created_at', function ($row) {
                return $row->created_at
                    ? $row->created_at->format('Y-m-d H:i')
                    : '';
            })
                ->addColumn('action', function ($row) {
                    $edit = '<button class="btn btn-sm btn-primary-light editIn" data-id="'.$row->id.'"><i class="bi bi-pencil-square"></i></button>';
                    $del  = ' <button class="btn btn-sm btn-danger-light deleteIn" data-id="'.$row->id.'"><i class="bi bi-trash"></i></button>';
                    return $edit . $del;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id'  => 'required|integer|exists:products,id',
            'supplier_id' => 'required|integer|exists:suppliers,id',
            'qty'         => 'required|integer|min:1',
            'date_in'     => 'required|date',
        ]);

        DB::beginTransaction();
        try {
            $id = $request->id; // present when editing

            if ($id) {
                // UPDATE
                $row = ProductIn::findOrFail($id);
                $oldProductId = (int) $row->product_id;
                $oldQty = (int) $row->qty;
                $newProductId = (int) $request->product_id;
                $newQty = (int) $request->qty;

                if ($oldProductId === $newProductId) {
                    // same product: adjust by difference
                    $product = Product::findOrFail($newProductId);
                    $diff = $newQty - $oldQty; 
                    if ($product->qty + $diff < 0) {
                        return response()->json(['success' => false, 'message' => 'Operation would make product stock negative.'], 400);
                    }
                    $product->qty += $diff;
                    $product->save();
                } else {
                    $oldProduct = Product::findOrFail($oldProductId);
                    if ($oldProduct->qty - $oldQty < 0) {
                        return response()->json(['success' => false, 'message' => 'Cannot revert old product stock.'], 400);
                    }
                    $oldProduct->qty -= $oldQty;
                    $oldProduct->save();

                    $newProduct = Product::findOrFail($newProductId);
                    $newProduct->qty += $newQty;
                    $newProduct->save();
                }

                $row->update($request->only(['product_id', 'supplier_id', 'qty', 'date_in']));
            } else {
                $product = Product::findOrFail($request->product_id);
                $product->qty += (int) $request->qty;
                $product->save();

                ProductIn::create($request->only(['product_id', 'supplier_id', 'qty', 'date_in']));
            }

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Products In saved successfully.']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error.'], 500);
        }
    }

    public function edit($id)
    {
        $row = ProductIn::findOrFail($id);
        return response()->json($row);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $row = ProductIn::findOrFail($id);
            $product = Product::findOrFail($row->product_id);

            // subtract incoming quantity (we are removing a previous 'in' record)
            if ($product->qty - $row->qty < 0) {
                return response()->json(['success' => false, 'message' => 'Cannot delete: would make stock negative.'], 400);
            }

            $product->qty -= $row->qty;
            $product->save();

            $row->delete();

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Record deleted and stock adjusted.']);
        } catch (Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response()->json(['success' => false, 'message' => 'Server error while deleting.'], 500);
        }
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
    
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   



    public function apiProductsIn(){
        $product = ProductIn::all();

        return Datatables::of($product)
            ->addColumn('products_name', function ($product){
                return $product->product->nama;
            })
            ->addColumn('supplier_name', function ($product){
                return $product->supplier->nama;
            })
            ->addColumn('action', function($product){
                return '<a onclick="editForm('. $product->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a onclick="deleteData('. $product->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Delete</a> ';


            })
            ->rawColumns(['products_name','supplier_name','action'])->make(true);

    }

   

    

   
}