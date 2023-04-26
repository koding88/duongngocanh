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
                        <img src="{{ asset('images/' . $products->image_path) }}" loading="lazy" alt="product" class="thumb">
                    </div>
                    <div class="product-info">
                        <h3 class="title">{{ $products->name }}</h3>
                        <p class="category">
                            <strong>Category:</strong>{{ $products->category->name }}
                        </p>
                        <span class="quantity">
                            <strong>Quantity:</strong>{{ $products->quantity }}
                        </span>
                        <span class="price">{{ $products->price }}$</span>
                        <p class="desc">
                            {{ $products->description }}
                        </p>
                        <div class="content-form">
                            <form action="{{ route('cart.add', ['id' => $products->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-cart">
                                    <i class="fas fa-shopping-cart"></i> Add to Cart
                                </button>
                            </form>
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
                    @if (collect($products)->count() > 0)
                        @foreach ($products->take(3)->get() as $product)
                            <div class="item">
                                <a href="product/detail/{{ $product->id }}">
                                    <img src="{{ asset('images/' . $product->image_path) }}" alt="product" class="thumb"
                                        loading="lazy">
                                </a>
                                <div class="info">
                                    <h3 class="title">
                                        <a href="product/detail/{{ $product->id }}">{{ $product->name }}</a>
                                    </h3>
                                    <p class="category">{{ $product->category->name }}</p>
                                    <span class="price">{{ $product->price }}$</span>
                                    <form action="{{ route('cart.add', ['id' => $product->id]) }}" method="POST"
                                        class="toast__product">
                                        @csrf
                                        <button type="submit" class="btn btn-cart">
                                            <i class="fas fa-shopping-cart"></i> Add to Cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
