@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'SEE MORE DETAILS'], ['heading' => 'Single Product'])

        <!-- Product-detail -->
        <div class="product-detail">
            <div class="main-content">
                <div class="body">
                    <div class="product-img">
                        <img src="https://plus.unsplash.com/premium_photo-1668046135207-061641d36b13?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80"
                            alt="" class="thumb" />
                    </div>
                    <div class="product-info">
                        <h3 class="title">Green apples have polyphenols</h3>
                        <p class="category">
                            <strong>Category: </strong>Fruits, Organic
                        </p>
                        <span class="quantity">
                            <strong>Quantity:</strong>10
                        </span>
                        <span class="price">$50</span>
                        <p class="desc">
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Dicta sint dignissimos, rem
                            commodi cum voluptatem quae reprehenderit
                            repudiandae ea tempora incidunt ipsa, quisquam
                            animi perferendis eos eum modi! Tempora, earum.
                        </p>
                        <div class="content-form">
                            <form action="" method="post">
                                <input type="number" name="quantity" placeholder="0" />
                            </form>
                            <a href="#!" class="btn btn-cart">
                                <i class="fas fa-shopping-cart"></i>
                                Add to Cart
                            </a>
                        </div>
                        <h4>Share:</h4>
                        <ul class="social-share">
                            <li>
                                <a href="">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Product --}}
        <div class="product">
            <div class="main-content">
                <div class="row">
                    <div class="body">
                        @include(
                            'components.subheading',
                            ['our' => 'Related'],
                            ['subheading' => 'Products']
                        )
                    </div>
                </div>
                <div class="product-list">
                    {{-- Product item --}}
                    @include('components.product')
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
