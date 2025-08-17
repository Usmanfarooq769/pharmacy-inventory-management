<?php

namespace App\Http\Controllers;

use App\Exports\ExportSuppliers;
use App\Imports\SuppliersImport;
use App\Models\Supplier;
use Excel;
use Illuminate\Http\Request;
use PDF;
use Yajra\DataTables\DataTables;

class SupplierController extends Controller {
	
	public function index() {
		$suppliers = Supplier::all();
		return view('suppliers.index');
	}


	public function data(Request $request)
    {
        if ($request->ajax()) {
            $query = Supplier::select(['id','name','address','email','phone','created_at']);
            return DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $edit = '<button class="btn btn-sm btn-primary-light editSupplier" data-id="'.$row->id.'"><i class="bi bi-pencil-square"></i></button>';
                    $del  = ' <button class="btn btn-sm btn-danger-light deleteSupplier" data-id="'.$row->id.'"><i class="bi bi-trash"></i></button>';
                    return $edit.$del;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        // Use unique rule that ignores current id on update
        $id = $request->id;
        $request->validate([
            'name'    => 'required|string|max:255',
            'address' => 'required|string',
            'email'   => 'required|email|unique:suppliers,email,' . ($id ?? 'NULL') . ',id',
            'phone'   => 'required'
        ]);

        try {
            Supplier::updateOrCreate(
                ['id' => $id],
                $request->only(['name','address','email','phone'])
            );

            return response()->json(['success' => true, 'message' => 'Supplier saved successfully.']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success'=>false, 'message'=>'Server error.'], 500);
        }
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return response()->json($supplier);
    }

    public function destroy($id)
    {
        try {
            $supplier = Supplier::findOrFail($id);
            $supplier->delete();
            return response()->json(['success'=>true, 'message'=>'Supplier deleted successfully.']);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['success'=>false, 'message'=>'Server error.'], 500);
        }
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	
	public function show($id) {
		//
	}



	public function ImportExcel(Request $request) {
		//Validasi
		$this->validate($request, [
			'file' => 'required|mimes:xls,xlsx',
		]);

		if ($request->hasFile('file')) {
			//UPLOAD FILE
			$file = $request->file('file'); //GET FILE
			Excel::import(new SuppliersImport, $file); //IMPORT FILE
			return redirect()->back()->with(['success' => 'Upload file data suppliers !']);
		}

		return redirect()->back()->with(['error' => 'Please choose file before!']);
	}

	
}