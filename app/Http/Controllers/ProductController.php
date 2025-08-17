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
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');

        $producs = Product::all();
        return view('products.index', compact('category'));
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
    
    public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'nama'        => 'required|string',
                    'harga'       => 'required|numeric',
                    'qty'         => 'required|integer',
                    'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp,webp,svg|max:2048',
                    'category_id' => 'required|exists:categories,id',
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'success' => false,
                        'errors' => $validator->errors()
                    ], 422);
                }

                $input = $request->only(['nama', 'harga', 'qty', 'category_id']);

                // Handle image upload
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = Str::slug($request->nama) . '.' . $image->getClientOriginalExtension();
                    $imagePath = 'upload/products/' . $imageName;
                    $image->move(public_path('upload/products/'), $imageName);
                    $input['image'] = $imagePath;
                }

                Product::create($input);

                return response()->json([
                   'status' => 'success',
                    'message' => 'Product created successfully.',
                
                ]);
            }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($id)
{
    $product = Product::findOrFail($id);

    return response()->json($product);
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::orderBy('name','ASC')
            ->get()
            ->pluck('name','id');
        $product = Product::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

  public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $input = $request->all();

    // If new image uploaded
    if ($request->hasFile('image')) {
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }

        $image = $request->file('image');
        $imageName = Str::slug($request->nama) . '.' . $image->getClientOriginalExtension();
        $imagePath = 'upload/products/' . $imageName;
        $image->move(public_path('upload/products/'), $imageName);
        $input['image'] = $imagePath;
    } else {
        // Keep old image path from hidden input
        $input['image'] = $request->old_image ?? $product->image;
    }

    $product->update($input);

    return response()->json([
        'success' => true,
        'message' => 'Product updated successfully'
    ]);
}


    // public function update(Request $request, $id)
    // {
    //     $category = Category::orderBy('name','ASC')
    //         ->get()
    //         ->pluck('name','id');

    //     $this->validate($request , [
    //         'nama'          => 'required|string',
    //         'harga'         => 'required',
    //         'qty'           => 'required',
    //         'category_id'   => 'required',
    //     ]);

    //     $input = $request->all();
    //     $produk = Product::findOrFail($id);

    //     $input['image'] = $produk->image;

    //     if ($request->hasFile('image')){
    //         if (!$produk->image == NULL){
    //             unlink(public_path($produk->image));
    //         }
    //         $input['image'] = '/upload/products/'.str_slug($input['nama'], '-').'.'.$request->image->getClientOriginalExtension();
    //         $request->image->move(public_path('/upload/products/'), $input['image']);
    //     }

    //     $produk->update($input);

    //     return response()->json([
    //         'success' => true,
    //         'message' => 'Products Update'
    //     ]);
    // }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if (!$product->image == NULL){
            unlink(public_path($product->image));
        }

        Product::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Products Deleted'
        ]);
    }

    public function apiProducts(){
        $product = Product::all();

        return Datatables::of($product)
            ->addColumn('category_name', function ($product){
                return $product->category->name;
            })
            ->addColumn('show_photo', function($product){
                if ($product->image == NULL){
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'. url($product->image) .'" alt="">';
            })
            ->addColumn('action', function($product){
                return'<a data-id="' . $product->id . '" class="btn btn-success-light btn-edit" > <i class="bi bi-pencil-square"></i></a> ' .
                    '<a  data-id="' . $product->id . '" class="btn btn-danger-light delete-product"><i class="bi bi-trash"></i></a>';
            })
            ->rawColumns(['category_name','show_photo','action'])->make(true);

    }
}
