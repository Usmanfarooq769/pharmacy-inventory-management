<?php

namespace App\Http\Controllers;


use App\Models\Customer;
use App\Exports\ExportCustomers;
use App\Imports\CustomersImport;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Excel;
use PDF;

class CustomerController extends Controller
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
        // $customers = Customer::all();
        return view('customers.index');
    }

    
 public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Customer::select(['id', 'name', 'address', 'email', 'number', 'created_at']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    return '
                        <button class="btn btn-sm btn-primary-light editCustomer" data-id="'.$row->id.'"> <i class="bi bi-pencil-square"></i></button>
                        <button class="btn btn-sm btn-danger-light deleteCustomer" data-id="'.$row->id.'"> <i class="bi bi-trash"></i></button>
                    ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }


      public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'address' => 'required|string',
            'email'   => 'nullable|email|unique:customers,email,' . $request->id,
            'number'  => 'nullable|string|max:20'
        ]);

        Customer::updateOrCreate(
            ['id' => $request->id],
            $request->only(['name', 'address', 'email', 'number'])
        );

        return response()->json(['success' => true, 'message' => 'Customer saved successfully']);
    }

     public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return response()->json($customer);
    }

    public function destroy($id)
    {
        Customer::findOrFail($id)->delete();
        return response()->json(['success' => true, 'message' => 'Customer deleted successfully']);
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
            Excel::import(new CustomersImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Upload file data customers !']);
        }

        return redirect()->back()->with(['error' => 'Please choose file before!']);
    }

    
   
}
