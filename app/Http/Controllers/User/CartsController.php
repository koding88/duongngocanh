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
    }
    public function addToCart($id)
    {
        $products = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "image" => $products->image,
                "name" => $products->name,
                "price" => $products->price,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('Success', 'Added to Cart Successfully!');
    }
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"]=$request->quantity;
            session()->put('cart', $cart);
            session()->flash('Succesfully', 'Updated Cart Succesfully!');
        }
    }
    public function remove(Request $request)
    {
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])){
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('Succesfully', 'Removed Succesfully!');
        }

    }
}