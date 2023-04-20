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
                        {{-- News-item --}}
                        @foreach ($newss as $news)
                            @include('components.newsitem')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
