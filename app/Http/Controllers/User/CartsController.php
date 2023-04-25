<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.cart', compact('products'));
    }
    public function cart()
    {
        return view('pages.cart');
    }
    public function addCart(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart');
        if ($request->hasFile('image')) {
            $generatedImageName = 'image' . time() . '-' . $product->name . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $generatedImageName);
            $product->image_path = $generatedImageName;
        }
        // Nếu giỏ hàng trống
        if (!$cart) {
            $cart = [
                $id => [
                    "product_id" => $product->id,
                    "name" => $product->name,
                    "price" => $product->price,
                    "quantity" => 1,
                    "image_path" => $product->image_path,
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
            "product_id" => $product->id,
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => 1,
            "image_path" => $product->image_path,
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
    public function destroy($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }
    public function checkout()
    {
        $products = Product::lazy();
        $cart = session()->get('cart');
        $user = Auth::user();
        return view('pages.checkout', compact('cart', 'user', 'products'));
    }
}