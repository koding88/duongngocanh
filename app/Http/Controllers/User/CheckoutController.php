<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\News;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        //
    }
    public function placeorder(Request $request)
    {
        $products = Product::lazy();
        $news = News::lazy();
        $cart = session()->get('cart');
        $total = 0; // initialize the total variable
        // Tạo mảng chứa thông tin sản phẩm từ giỏ hàng
        $products = [];
        if (!is_null($cart)) {
            foreach ($cart as $id => $item) {
                $total += $item['price'] * $item['quantity'];
                $products[] = [
                    'name' => $item['name'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price'],
                    'subtotal' => $item['subtotal']
                ];
            }
        }
        // Chuyển đổi mảng sản phẩm thành chuỗi JSON
        $productName = json_encode($products);
        $productArray = json_decode($productName, true);
        $names = [];
        foreach ($productArray as $product) {
            $names[] = $product['name'];
        }
        $order = Order::create([
            'user_id' => auth()->id(),
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'note' => $request->input('note'),
            'product_name' => implode(', ', $names),
            'total' => $total,
        ]);
        session()->forget('cart');
        return view('pages.home', compact('products', 'news'))->with('success', 'Order placed successfully');
    }
}