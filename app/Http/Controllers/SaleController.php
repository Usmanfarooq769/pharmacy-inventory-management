<?php

namespace App\Http\Controllers;


use App\Exports\ExportSales;
use App\Imports\SalesImport;
use App\Models\Sale;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Excel;
use PDF;


class SaleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();
        return view('sales.index');
    }

    


     public function getData(Request $request)
    {
        if ($request->ajax()) {
            $sales = Sale::select(['id', 'name', 'address', 'email', 'phone', 'created_at']);
            return DataTables::of($sales)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '
                        <button class="btn btn-sm btn-primary-light editBtn" data-id="'.$row->id.'"><i class="bi bi-pencil-square"></i></button>
                        <button class="btn btn-sm btn-danger-light deleteBtn" data-id="'.$row->id.'"><i class="bi bi-trash"></i></button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'address' => 'required',
            'email'   => 'required|email',
            'phone'   => 'required'
        ]);

        Sale::updateOrCreate(
            ['id' => $request->id],
            $request->only('name', 'address', 'email', 'phone')
        );

        return response()->json(['success' => true, 'message' => 'Record saved successfully']);
    }

    public function edit($id)
    {
        return response()->json(Sale::findOrFail($id));
    }

    public function destroy($id)
    {
        Sale::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Record deleted successfully']);
    }

    
  
    

    public function ImportExcel(Request $request)
    {
        //Validasi
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            //UPLOAD FILE
            $file = $request->file('file'); //GET FILE
            Excel::import(new SalesImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Upload file data sales !']);
        }

        return redirect()->back()->with(['error' => 'Please choose file before!']);
    }

    public function exportSalesAll()
    {
        $sales = Sale::all();
        $pdf = PDF::loadView('sales.SalesAllPDF',compact('sales'));
        return $pdf->download('sales.pdf');
    }

    public function exportExcel()
    {
        return (new ExportSales())->download('sales.xlsx');
    }
}
