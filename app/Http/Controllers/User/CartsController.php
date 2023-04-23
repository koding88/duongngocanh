<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.cart', compact('products'));
        // $cart = session()->get('cart', []);

        // return view('pages.cart', [
        //     'cartItems' => $cart,
        // ]);
    }
    public function cart()
    {
        return view('pages.cart');
    }
    // public function show($id)
    // {
    //     // Logic to retrieve cart items goes here
    //     // You can retrieve the cart items from the session or database
    //     // and pass them to the view for display

    //     $cartItem = session()->get('cart', []);

    //     return view('pages.cart', [
    //         'cartItem' => $cartItem,
    //     ]);
    // }

    public function addCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart');

        // Nếu giỏ hàng trống
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $product->price,
                    "image" => $product->image_path,
                    "subtotal" => $product->price
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, tăng số lượng sản phẩm lên 1
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            $cart[$id]['subtotal'] = $cart[$id]['quantity'] * $cart[$id]['price'];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // Nếu sản phẩm chưa có trong giỏ hàng, thêm sản phẩm vào giỏ hàng
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "image" => $product->image_path,
            "subtotal" => $product->price
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        if ($quantity && ctype_digit($quantity)) {
            $cart = session()->get('cart');
            $cart[$id]['quantity'] = $quantity;
            $cart[$id]['subtotal'] = $quantity * $cart[$id]['price'];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Cart updated successfully!');
        }

        return redirect()->back()->with('error', 'Invalid quantity!');
    }
    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }

}