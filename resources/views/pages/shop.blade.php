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
                            <li>Furniture</li>
                            <li>Bathroom</li>
                            <li>Kitchen</li>
                            <li>Lighting</li>
                            <li>Outdoor</li>
                            <li>Office</li>
                            <li>Contract</li>
                            <li>Wellness</li>
                            <li>Decor</li>
                            <li>Finishes</li>
                            <li>Lifestyle</li>
                        </ul>
                    </div>
                </div>

                <div class="product-list">
                    @php
                        $itemsPerPage = 9;
                        $totalItems = 27;
                        $totalPages = ceil($totalItems / $itemsPerPage);
                        $currentPage = request()->get('page', 1);
                        $currentPage = max(1, min($currentPage, $totalPages));
                        $startIndex = ($currentPage - 1) * $itemsPerPage;
                    @endphp
                    {{-- Product items --}}
                    @if (request()->is('shop'))
                        @for ($i = $startIndex; $i < $startIndex + $itemsPerPage && $i < $totalItems; $i++)
                            @include('components.product')
                        @endfor
                    @else
                        {{-- Default items --}}
                        @include('components.product')
                    @endif
                </div>

                <ul class="pagination">
                    <li>
                        <a href="{{ $currentPage == 1 ? '#' : '?page=' . ($currentPage - 1) }}">
                            <i class="fa-solid fa-arrow-left"></i>
                            Prev
                        </a>
                    </li>

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <li>
                            <a href="?page={{ $i }}"
                                class="{{ $i == $currentPage ? 'active' : '' }}">{{ $i }}</a>
                        </li>
                    @endfor

                    <li>
                        <a href="{{ $currentPage == $totalPages ? '#' : '?page=' . ($currentPage + 1) }}">
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
