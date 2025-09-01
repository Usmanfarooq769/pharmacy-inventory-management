<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        return view('products.index', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'qty'         => 'required|integer|min:0',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->only(['nama', 'price', 'qty', 'category_id']);

        // Handle image upload - Make it optional
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->nama) . '.' . $image->getClientOriginalExtension();
            $imagePath = 'upload/products/' . $imageName;
            
            // Create directory if it doesn't exist
            if (!file_exists(public_path('upload/products/'))) {
                mkdir(public_path('upload/products/'), 0755, true);
            }
            
            $image->move(public_path('upload/products/'), $imageName);
            $input['image'] = $imagePath;
        }

        Product::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Product created successfully.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'qty'         => 'required|integer|min:0',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp,svg|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $input = $request->only(['nama', 'price', 'qty', 'category_id']);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && file_exists(public_path($product->image))) {
                unlink(public_path($product->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . Str::slug($request->nama) . '.' . $image->getClientOriginalExtension();
            $imagePath = 'upload/products/' . $imageName;
            
            // Create directory if it doesn't exist
            if (!file_exists(public_path('upload/products/'))) {
                mkdir(public_path('upload/products/'), 0755, true);
            }
            
            $image->move(public_path('upload/products/'), $imageName);
            $input['image'] = $imagePath;
        } else {
            // Keep existing image if no new image uploaded
            $input['image'] = $product->image;
        }

        $product->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Product updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete image file if exists
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        $product->delete();

        return response()->json([
            'success' => true,
            'message' => 'Product deleted successfully'
        ]);
    }

    /**
     * Get products data for DataTables
     */
    public function apiProducts()
    {
        $products = Product::with('category')->get();

        return Datatables::of($products)
            ->addColumn('category_name', function ($product) {
                return $product->category ? $product->category->name : 'No Category';
            })
            ->addColumn('show_photo', function($product) {
                if (!$product->image) {
                    return '<span class="badge bg-secondary">No Image</span>';
                }
                return '<img class="rounded" width="50" height="50" src="'. url($product->image) .'" alt="Product Image" style="object-fit: cover;">';
            })
            ->addColumn('action', function($product) {
                return '<button data-id="' . $product->id . '" class="btn btn-success-light btn-sm btn-edit me-1" title="Edit"> 
                            <i class="bi bi-pencil-square"></i>
                        </button>' .
                       '<button data-id="' . $product->id . '" class="btn btn-danger-light btn-sm delete-product" title="Delete">
                            <i class="bi bi-trash"></i>
                        </button>';
            })
            ->rawColumns(['show_photo', 'action'])
            ->make(true);
    }
}