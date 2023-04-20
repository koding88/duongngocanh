@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'EXQUISITE & LUXURY'], ['heading' => 'Shop'])

        <!-- Shop- Product -->
        <div class="shop">
            <div class="main-content">
                <div class="row">
                    <div class="body">
                        <h3 class="title">Category</h3>
                        <ul class="shop-filter">
                            <li class="active">All</li>
                            @foreach ($category as $item)
                                <li>{{ $item->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="product-list">
                    {{-- Product items --}}
                    @if (request()->is('shop'))
                        {{-- {{ dd($products) }} --}}
                        @foreach ($productss as $products)
                            @include('components.product')
                        @endforeach
                    @endif
                </div>

                <ul class="pagination">
                    <li>
                        <a href="">
                            <i class="fa-solid fa-arrow-left"></i>
                            Prev
                        </a>
                    </li>

                    <li>
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>

                    <li>
                        <a href="">
                            Next
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>

            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
