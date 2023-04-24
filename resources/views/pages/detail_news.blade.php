@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'READ THE DETAILS'], ['heading' => 'Single Article'])

        <!-- New detail -->
        <div class="new-detail">
            <div class="main-content">
                <div class="body">
                    <div class="news-article">
                        <div class="img-news">
                            <img src="{{ asset('images/' . $news->image_path) }}" loading="lazy" alt="" class="thumb">
                        </div>
                        <p class="blog-meta">
                            <span class="author">
                                <i class="fas fa-user"></i>
                                Admin</span>
                            <span class="date">
                                <i class="fas fa-calendar"></i>
                                27 December, 2019</span>
                        </p>
                        <div class="info">
                            <h2>{{ $news->title }}</h2>
                            <p>{{ $news->content }}</p>
                        </div>
                    </div>
                    <div class="sidebar-section">
                        <div class="recent-posts">
                            <h4>Recent Posts</h4>
                            <ul>
                                <li><a href="#!">You will vainly look for fruit on it in autumn.</a></li>
                                <li><a href="#!">A man's worth has its season, like tomato.</a></li>
                                <li><a href="#!">Good thoughts bear good fresh juicy fruit.</a></li>
                                <li><a href="#!">Fall in love with the fresh orange</a></li>
                                <li><a href="#!">Why the berries always look delecious</a></li>
                            </ul>
                        </div>
                        <div class="archive-posts">
                            <h4>Archive Posts</h4>
                            <ul>
                                <li><a href="#!">JAN 2019 (5)</a></li>
                                <li><a href="#!">FEB 2019 (3)</a></li>
                                <li><a href="#!">MAY 2019 (4)</a></li>
                                <li><a href="#!">SEP 2019 (4)</a></li>
                                <li><a href="#!">DEC 2019 (3)</a></li>
                            </ul>
                        </div>
                        <div class="tag-section">
                            <h4>Tags</h4>
                            <ul>
                                <li><a href="#!">Furniture</a></li>
                                <li><a href="#!">Bathroom</a></li>
                                <li><a href="#!">Kitchen</a></li>
                                <li><a href="#!">Lighting</a></li>
                                <li><a href="#!">Outdoor</a></li>
                                <li><a href="#!">Office</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
