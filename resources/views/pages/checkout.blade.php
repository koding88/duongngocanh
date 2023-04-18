@extends('layouts.home')

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
                        <form action="" method="post" class="checkout-form">
                            <p>
                                <input type="text" name="name" placeholder="Name">
                            </p>
                            <p>
                                <input type="text" name="email" placeholder="Email">
                            </p>
                            <p>
                                <input type="text" name="address" placeholder="Address">
                            </p>
                            <p>
                                <input type="text" name="phone" placeholder="Phone">
                            </p>
                            <p>
                                <textarea name="description" cols="30" rows="10" placeholder="Say Something"></textarea>
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
                                <tr>
                                    <td>Strawberry</td>
                                    <td>$85.00</td>
                                </tr>
                                <tr>
                                    <td>Berry</td>
                                    <td>$70.00</td>
                                </tr>
                                <tr>
                                    <td>Lemon</td>
                                    <td>$35.00</td>
                                </tr>
                            </tbody>
                            <tbody class="checkout-details">
                                <tr>
                                    <td>Subtotal</td>
                                    <td>$190</td>
                                </tr>
                                <tr>
                                    <td>Shipping</td>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$240</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
