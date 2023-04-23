<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $category = Category::all();
        return view('admin.products.index',compact('products','category'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // insert new product
        $categories = Category::all();
        return view('admin.products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:products',
            'quantity' => 'required|integer|min:0|max:200',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        // client img name and server img must be diff
        $generatedImageName = 'image' . time() . '-'
            . $request->name . '.'
            . $request->image->extension();

        // move to a folder
        $request->image->move(public_path('images'), $generatedImageName);

        $products = Product::create([
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        // Save to database
        $products->save();
        return redirect('admin/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);
        $category = Category::find($products->category_id);
        $products->category = $category;
        return view('admin.products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::find($id);
        $categories = Category::all();
        return view('admin.products.edit', compact('products', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products = Product::findOrFail($id);

        // Update image if a new one is uploaded
        if ($request->hasFile('image')) {
            $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $generatedImageName);
            $products->image_path = $generatedImageName;
        }

        // Update other product fields
        $products->name = $request->input('name');
        $products->quantity = $request->input('quantity');
        $products->price = $request->input('price');
        $products->description = $request->input('description');
        $products->category_id = $request->input('category_id');

        // Save changes
        $products->save();
        return redirect('admin/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect('admin/products');
    }

   
}