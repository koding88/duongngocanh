<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{

    public function placeorder(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->id(),
            'fullname' => $request->input('fullname'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'note' => $request->input('note'),
        ]);

        
        $cart = session()->get('cart');

        foreach ($cart as $id => $item) {
            $product = Product::findOrFail((int)$id);
            OrderDetail::create([
                'order_id' => $order->id,
                'product_id' => (int)$id,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }        

        session()->forget('cart');

        return redirect()->back()->with('success', 'Order placed successfully');
    }
}