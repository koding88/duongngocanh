@extends('layouts/home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'EXQUISITE & LUXURY'], ['heading' => 'Cart'])
        <!-- Cart -->
        <div class="cart">
            <div class="main-content">
                <div class="body">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">SubTotal</th>
                            </tr>
                        </thead>
                        <form action="pages/cart" method="POST">
                            @csrf
                            <tbody>
                                @php $total = 0 @endphp
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $items)
                                        @php $total += $items['price'] * $items['quantity'] @endphp
                                        <tr data-id="{{ $id }}" class="table-body-row">
                                            <td class="product-remove">
                                                <form action="{{ route('cart.remove', $items->id) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit"><i class="far fa-window-close"></i></button>
                                                </form>
                                            </td>
                                            <td data-th="Image" class="product-image"><img
                                                    src="{{ asset('images/' . $items->image_path) }}" alt="">
                                            </td>
                                            <td data-th="Name" class="product-name">{{ $items['name'] }}</td>
                                            <td data-th="Price" class="product-price">{{ $items['price'] }}</td>
                                            <td data-th="Quantity" class="product-quantity"><input
                                                    value="{{ $items['quantity'] }}" class="quantity cart_update"
                                                    type="number" placeholder="1">
                                            </td>
                                            <td data-th="SubTotal" class="product-total">
                                                {{ $items['price'] * $items['quantity'] }}</td>
                                        </tr>
                                    @endforeach
                                @endif
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
                                    <td>{{ $total }}</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Shipping: </strong></td>
                                    <td>Freeship</td>
                                </tr>
                                <tr class="total-data">
                                    <td><strong>Total: </strong></td>
                                    <td>{{ $total }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cart-buttons">
                            <a href="{{ url('cart') }}" class="btn btn-cart">Update Cart</a>
                            <a href="{{ url('checkout') }}" class="btn btn-cart">Check Out</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- @else --}}
        <h3>No items in Cart!</h3>
            <a href="{{route('home')}}" class="btn btn-cart">Continue Shopping</a>
        @endif

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
