<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\News;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::lazy();
        $category = Category::lazy();
        $news = News::lazy();
        return view('pages.home', compact('products', 'category', 'news'));
    }

    public function news()
    {
        $newss = News::lazy();
        return view('pages.news', compact('newss'));
    }

    public function shop(Request $request)
    {
        $category = Category::lazy();
        $categoryId = $request->input('category_id');
        $productss = $categoryId ? Product::where('category_id', $categoryId)->get() : Product::lazy();
        return view('pages.shop', compact('productss', 'category', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function showNew(string $id)
    {
        $news = News::findOrFail($id);
        $items = News::lazy();
        return view('pages.detail_news', compact('news', 'items'));
    }

    public function showProduct(string $id)
    {
        $products = Product::findOrFail($id);
        $items = Product::lazy();
        $category = Category::findOrFail($products->category_id);
        return view('pages.detail_product', compact('products', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
