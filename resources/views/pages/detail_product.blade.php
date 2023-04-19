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
                        <h3 class="title">{{$products->title}}</h3>
                        <p class="category">
                            <strong>Category:</strong>{{$products->category}}
                        </p>
                        <span class="quantity">
                            <strong>Quantity:</strong>{{$products->quantity}}
                        </span>
                        <span class="price">{{$products->price}}</span>
                        <p class="desc">
                            {{$products->desc}}
                        </p>
                        <div class="content-form">
                            <form action="{{route('cart.store')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="id" value="{{$product->id}}" placeholder="ID" />
                                <input type="file" type="hidden" value="{{$product->image}}" name="image" placeholder="Image" />
                                <input type="hidden" name="name" value="{{$product->name}}" placeholder="Name" />
                                <input type="hidden" name="price" value="{{$product->price}}" placeholder="Price" />
                                <button type="submit" class="btn btn-cart">
                                    <i class="fas fa-shopping-cart"></i>
                                    Add to Cart
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
                    @include('components.product')
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
