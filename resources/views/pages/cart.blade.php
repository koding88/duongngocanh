@extends('layouts/home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'EXQUISITE & LUXURY'], ['heading' => 'Cart'])

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        @if (session('cart'))

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

                                <tbody>
                                    @php $total = 0 @endphp
                                    @foreach (session('cart') as $product => $items)
                                    {{-- @foreach (session('cart') as $id => $items) --}}
                                        @php $total += $items['price'] * $items['quantity'] @endphp
                                        <tr class="table-body-row">
                                            <td class="product-remove actions">
                                                <form action="{{ route('cart.remove', $product) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onchange="this.form.submit()"><i class="far fa-window-close"></i></button>
                                                </form>
                                            </td>
                                            <td class="product-image">
                                                <img
                                                {{-- src="{{ asset('images/' . $items['image_path']) }}" --}}
                                                    alt="" name="image_path">
                                            </td>
                                            <td class="product-name" name="name">{{ $items['name'] }}</td>
                                            <td class="product-price" name="price">{{ $items['price'] }}
                                            </td>
                                            <form action="{{ route('cart.update', $product) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                            <td class="product-quantity" name="quantity">
                                                    <input type="number"  name="quantity"
                                                    value="{{ $items['quantity'] }}" onchange="this.form.submit()"> 
                                            </td>
                                            <td class="product-total">
                                                ${{ $items['subtotal'] }}
                                            </td>
                                        </form>
                                        </tr>
                                </tbody>
                                @endforeach
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
                                    <a href="{{ url('checkout') }}" class="btn btn-cart">Check Out</a>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        @endif
        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
@section('scripts')

@endsection
