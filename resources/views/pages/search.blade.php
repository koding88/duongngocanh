@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'EXQUISITE & LUXURY'], ['heading' => 'Search'])

        <div class="search">
            <form action="{{ url('/search') }}" method="GET" class="search-form">
                <input type="text" name="query" class="search-input" placeholder="Search..." value="{{ $query ?? '' }}">
                <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <div class="result">
                @if (count($results) > 0)
                    <div class="product-list">
                        {{-- Product items --}}
                        @foreach ($results as $products)
                            @include('components.product')
                        @endforeach
                    </div>
                @else
                    <div class="notfound">
                        <img src="https://user-images.githubusercontent.com/24848110/33519396-7e56363c-d79d-11e7-969b-09782f5ccbab.png"
                            alt="">
                    </div>
                @endif
            </div>
        </div>
    </main>
@endsection
