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

    public function search(Request $request)
    {
        $query = $request->input('query');
        if ($query) {
            $results = Product::where('name', 'LIKE', "%$query%")
                ->orWhere('description', 'LIKE', "%$query%")
                ->get();
        } else {
            $results = Product::all();
        }
        $category = Category::all();
        return view('pages.search', compact('results', 'category', 'query'));
    }
}