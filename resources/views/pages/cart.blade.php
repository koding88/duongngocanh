@extends('layouts/home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'EXQUISITE & LUXURY'], ['heading' => 'Cart'])
        @if(Cart::count() > 0)

        <h2>{{Cart::count}}</h2>
        <!-- Cart -->
        <div class="cart">
            <div class="main-content">
                <div class="body">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $items)
                            <tr class="table-body-row">
                                <td class="product-remove">
                                    <form action="{{route('cart.destroy', $items->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit"><i class="far fa-window-close"></i></button>
                                    </form>
                                </td>
                                <td class="product-image"><img
                                        src="{{ asset('images/' . $items->image_path) }}"
                                        alt=""></td>
                                <td class="product-name">{{$items->name}}</td>
                                <td class="product-price">{{$items->price}}</td>
                                <td class="product-quantity"><input type="number" placeholder="0"></td>
                                <td class="product-total">{{$items->quantity}}</td>
                            </tr>
                            {{-- <tr class="table-body-row">
                                <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img
                                        src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                        alt=""></td>
                                <td class="product-name">Berry</td>
                                <td class="product-price">$70</td>
                                <td class="product-quantity"><input type="number" placeholder="0"></td>
                                <td class="product-total">1</td>
                            </tr>
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img
                                        src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1399&q=80"
                                        alt=""></td>
                                <td class="product-name">Lemon</td>
                                <td class="product-price">$35</td>
                                <td class="product-quantity"><input type="number" placeholder="0"></td>
                                <td class="product-total">1</td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <div class="total-section">
                        <table class="total-table">
                            <thead class="total-table-head">
                                <tr class="table-total-row">
                                    <th>Total</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="total-data">
                                    <td><strong>Subtotal: </strong></td>
                                    <td>{{ Cart::subtotal()}}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Shipping: </strong></td>
                                    <td>Freeship</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Total: </strong></td>
                                    <td>{{ Cart::total()}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="{{ url('cart') }}" class="btn btn-cart">Update Cart</a>
                            <a href="{{ url('checkout') }}" class="btn btn-cart">Check Out</a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @else
        <h3>No items in Cart!</h3>
            <a href="{{route('home')}}" class="btn btn-cart">Continue Shopping</a>
        @endif

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
