<?php

namespace App\Http\Controllers;


use App\Exports\ExportProdukMasuk;
use App\Models\Product;
use App\Models\Product_Masuk;
use App\Models\Supplier;
use PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;


class ProductMasukController extends Controller
{
   
    public function index()
    {
        $products = Product::orderBy('nama','ASC')
            ->get()
            ->pluck('nama','id');
            $suppliers = Supplier::orderBy('name','ASC')
    ->pluck('name','id');


        $invoice_data = Product_Masuk::all();
        return view('product_masuk.index', compact('products','suppliers','invoice_data'));
    }


    public function invoiceData()
{
    $query = Product_Masuk::with(['product', 'supplier']);
    return DataTables::of($query)
        ->addColumn('product_name', fn($row) => $row->product->nama ?? '-')
        ->addColumn('supplier_name', fn($row) => $row->supplier->name ?? '-')
        ->make(true);
}


       public function getData(Request $request)
    {
        if ($request->ajax()) {
            $query = Product_Masuk::with(['product', 'supplier'])->select('product_masuk.*');

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
            'tanggal'     => 'required|date',
        ]);

        DB::beginTransaction();
        try {
            $id = $request->id; // present when editing

            if ($id) {
                // UPDATE
                $row = Product_Masuk::findOrFail($id);
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

                $row->update($request->only(['product_id', 'supplier_id', 'qty', 'tanggal']));
            } else {
                $product = Product::findOrFail($request->product_id);
                $product->qty += (int) $request->qty;
                $product->save();

                Product_Masuk::create($request->only(['product_id', 'supplier_id', 'qty', 'tanggal']));
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
        $row = Product_Masuk::findOrFail($id);
        return response()->json($row);
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $row = Product_Masuk::findOrFail($id);
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
        $product = Product_Masuk::all();

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

    public function exportProductMasukAll()
    {
        $product_masuk = Product_Masuk::all();
        $pdf = PDF::loadView('product_masuk.productMasukAllPDF',compact('product_masuk'));
        return $pdf->download('product_enter.pdf');
    }

    public function exportProductMasuk($id)
    {
        $product_masuk = Product_Masuk::findOrFail($id);
        $pdf = PDF::loadView('product_masuk.productMasukPDF', compact('product_masuk'));
        return $pdf->download($product_masuk->id.'_product_enter.pdf');
    }

    public function exportExcel()
    {
        return (new ExportProdukMasuk)->download('product_masuk.xlsx');
    }
}
