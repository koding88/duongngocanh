@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'LUXURY INFORMATION'], ['heading' => 'News Article'])

        <!-- News Artical -->
        <div class="news news-article">
            <div class="main-content">
                <div class="row">
                    <div class="body">
                        @include('components.subheading', ['our' => 'Our'], ['subheading' => 'News'])
                    </div>
                </div>
                <div class="row">
                    <div class="news-list">
                        @if (request()->is('news'))
                            {{-- News-item --}}
                            @for ($i = 0; $i < 3; $i++)
                                @include('components.newsitem')
                            @endfor
                        @else
                            {{-- Default items --}}
                            @include('components.newsitem')
                        @endif
                    </div>
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
