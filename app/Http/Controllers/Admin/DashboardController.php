<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;


class DashboardController extends Controller
{
    public function index()
    {
        $totalUser = User::where('usertype', '0')->count();
        $totalAdmin = User::where('usertype', '1')->count();
        $totalProducts = Product::count();
        $totalCategory = Category::count();
        $totalNews = News::count();
        $totalOrders = Order::count();

        return view('admin.dashboard', ['totalUser' => $totalUser, 'totalAdmin' => $totalAdmin, 
        'totalProducts' => $totalProducts, 'totalCategory' => $totalCategory, 'totalNews' => $totalNews, 'totalOrders' => $totalOrders]);

    }
}
