<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.checkout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request -> validate([
        'fullname'=> 'required',
        'email'=> 'required',
        'address'=>'required',
        'phone'=>'required',
        'note'=>'required'
       ]);
       //Create the order
       $order = new Order();
       $order->fullname = $request->input('fullname');
       $order->email = $request->input('email');
       $order->address = $request->input('address');
       $order->phone = $request->input('phone');
       $order->note = $request->input('note');
       $order->save();

       //create order detail
       foreach ($request->input('products') as $product)
       {
        $detail = new OrderDetail();
        $detail->order_id=$order->id;
        $detail->order_id=$order->product;
        $detail->product_id=$product['id'];
        $detail->quantity=$order->id;
        $detail->order_id=$order->id;
        $detail->order_id=$order->id;
        
       }


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
