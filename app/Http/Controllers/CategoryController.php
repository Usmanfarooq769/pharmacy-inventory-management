<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Exports\ExportCategories;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

use PDF;

class CategoryController extends Controller
{

    public function index(Request $request)
    {    

        if ($request->ajax()) {
        $categories = Category::query();
    

        return DataTables::eloquent($categories) 
         ->addIndexColumn() 
            ->addColumn('created_at', function ($category) {
                return Carbon::parse($category->created_at)->format('Y-m-d');
            })
            ->addColumn('action', function ($category) {
                return '
                    <button class="btn btn-primary-light btn-view" data-id="' . $category->id . '">
                        <i class="bi bi-eye"></i>
                    </button>
                    <button class="btn btn-success-light btn-edit" data-id="' . $category->id . '">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button class="btn btn-danger-light delete-category" data-id="' . $category->id . '">
                        <i class="bi bi-trash"></i>
                    </button>
                ';
            })
           
            ->make(true);
    }

    return view('categories.index');
    
    }

  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
                $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create category
        $category = Category::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully!',
            'data' => $category,
        ]);
    
    }


    public function show($id)
{
     $category = Category::find($id);

    if (!$category) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    return response()->json($category); 
}

public function edit($id)
{
     $category = Category::find($id);

    if (!$category) {
        return response()->json(['message' => 'Category not found'], 404);
    }

    return response()->json($category);
}

public function update(Request $request, Category $category)
{
    $request->validate([
        'name' => 'required|string|max:255'
    ]);
    
    $category->update([
        'name' => $request->name,
    ]);

    return response()->json(['success' => true]);
}


    public function destroy($id)
    {
        Category::destroy($id);

        return response()->json([
            'success'    => true,
            'message'    => 'Categories Delete'
        ]);
    }



public function getCategories(Request $request)
{
    $categories = Category::all(); 
    return response()->json([
        'data' => $categories
    ]);
}

    public function exportCategoriesAll()
    {
        $categories = Category::all();
        $pdf = PDF::loadView('categories.CategoriesAllPDF',compact('categories'));
        return $pdf->download('categories.pdf');
    }

    public function exportExcel()
    {
        return (new ExportCategories())->download('categories.xlsx');
    }
}