@extends('layouts/home')
@section('content')
    <main>
        <!-- Hero-about -->
        @include(
            'components.heading',
            ['desc' => 'EXQUISITE & LUXURY'],
            ['heading' => 'Check Out Product']
        )
        <!-- Checkout -->
        <div class="checkout">
            <div class="main-content">
                <div class="body">
                    <div class="checkout-info">
                        <div class="title">
                            <h4>
                                <i class="fa-solid fa-circle-check"></i>
                                Delivery address
                            </h4>
                        </div>
                        <form action="{{url ('place-order') }}" method="POST" class="checkout-form" enctype="multipart/form-data">
                            @csrf
                            <p>
                                <input type="text" name="fullname" placeholder="Name" required>
                            </p>
                            <p>
                                <input type="text" name="email" placeholder="Email" required>
                            </p>
                            <p>
                                <input type="text" name="address" placeholder="Address" required>
                            </p>
                            <p>
                                <input type="text" name="phone" placeholder="Phone" required>
                            </p>
                            <p>
                                <textarea name="note" cols="30" rows="10" placeholder="Say Something" required></textarea>
                            </p>
                            <button type="submit" class="btn btn-cart">Place Order</button>
                        </form>
                    </div>
                    <div class="checkout-oder">
                       
                        <table class="order-details">
                            <thead>
                                <tr>
                                    <th>Your order Details</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody class="order-details-body">
                                <tr>
                                    <td>Product</td>
                                    <td>Total</td>
                                </tr>
                                @if (session('cart'))
                                @php $total = 0 @endphp
                                @foreach (session('cart') as $product => $items)
                                @php $total += $items['price'] * $items['quantity'] @endphp
                                <tr>
                                    <td name="name">{{ $items['name'] }}</td>
                                    <td class="product-total">
                                        ${{ $items['subtotal'] }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            
                            <tbody class="checkout-details">
                                <tr>
                                    <td>Shipping</td>
                                    <td>Freeship</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>${{$total}}</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                    @endif
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
