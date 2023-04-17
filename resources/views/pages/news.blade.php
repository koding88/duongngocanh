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
                    <div class="news-item">
                        <div class="img-news">
                            <a href="#!">
                                <img
                                    src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                    class="thumb"
                                />
                            </a>
                        </div>
                        <div class="news-info">
                            <h3 class="title line-clamp line-2">
                                <a href="#!">
                                    You will vainly look for fruit on it
                                    in autumn.
                                </a>
                            </h3>
                            <p class="blog-meta">
                                <span class="author">
                                    <i class="fas fa-user"></i>
                                    Admin</span
                                >
                                <span class="date">
                                    <i class="fas fa-calendar"></i>
                                    27 December, 2019</span
                                >
                            </p>
                            <p class="desc line-clamp">
                                Vivamus lacus enim, pulvinar vel nulla
                                sed, scelerisque rhoncus nisi. Praesent
                                vitae mattis nunc, egestas viverra eros.
                            </p>
                            <a href="" class="btn-news"
                                >read more
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="img-news">
                            <a href="#!">
                                <img
                                    src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                    class="thumb"
                                />
                            </a>
                        </div>
                        <div class="news-info">
                            <h3 class="title line-clamp line-2">
                                <a href="#!">
                                    A man's worth has its season, like
                                    tomato.
                                </a>
                            </h3>
                            <p class="blog-meta">
                                <span class="author">
                                    <i class="fas fa-user"></i>
                                    Admin</span
                                >
                                <span class="date">
                                    <i class="fas fa-calendar"></i>
                                    27 December, 2019</span
                                >
                            </p>
                            <p class="desc line-clamp">
                                Vivamus lacus enim, pulvinar vel nulla
                                sed, scelerisque rhoncus nisi. Praesent
                                vitae mattis nunc, egestas viverra eros.
                            </p>
                            <a href="" class="btn-news"
                                >read more
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="img-news">
                            <a href="#!">
                                <img
                                    src="https://images.unsplash.com/photo-1592506119503-c0b18879bd5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                    class="thumb"
                                />
                            </a>
                        </div>
                        <div class="news-info">
                            <h3 class="title line-clamp line-2">
                                <a href="#!">
                                    Good thoughts bear good fresh juicy
                                    fruit.
                                </a>
                            </h3>
                            <p class="blog-meta">
                                <span class="author">
                                    <i class="fas fa-user"></i>
                                    Admin</span
                                >
                                <span class="date">
                                    <i class="fas fa-calendar"></i>
                                    27 December, 2019</span
                                >
                            </p>
                            <p class="desc line-clamp">
                                Vivamus lacus enim, pulvinar vel nulla
                                sed, scelerisque rhoncus nisi. Praesent
                                vitae mattis nunc, egestas viverra eros.
                            </p>
                            <a href="" class="btn-news"
                                >read more
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="img-news">
                            <a href="#!">
                                <img
                                    src="https://images.unsplash.com/photo-1592506119503-c0b18879bd5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                    class="thumb"
                                />
                            </a>
                        </div>
                        <div class="news-info">
                            <h3 class="title line-clamp line-2">
                                <a href="#!">
                                    Good thoughts bear good fresh juicy
                                    fruit.
                                </a>
                            </h3>
                            <p class="blog-meta">
                                <span class="author">
                                    <i class="fas fa-user"></i>
                                    Admin</span
                                >
                                <span class="date">
                                    <i class="fas fa-calendar"></i>
                                    27 December, 2019</span
                                >
                            </p>
                            <p class="desc line-clamp">
                                Vivamus lacus enim, pulvinar vel nulla
                                sed, scelerisque rhoncus nisi. Praesent
                                vitae mattis nunc, egestas viverra eros.
                            </p>
                            <a href="" class="btn-news"
                                >read more
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="img-news">
                            <a href="#!">
                                <img
                                    src="https://images.unsplash.com/photo-1592506119503-c0b18879bd5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                    class="thumb"
                                />
                            </a>
                        </div>
                        <div class="news-info">
                            <h3 class="title line-clamp line-2">
                                <a href="#!">
                                    Good thoughts bear good fresh juicy
                                    fruit.
                                </a>
                            </h3>
                            <p class="blog-meta">
                                <span class="author">
                                    <i class="fas fa-user"></i>
                                    Admin</span
                                >
                                <span class="date">
                                    <i class="fas fa-calendar"></i>
                                    27 December, 2019</span
                                >
                            </p>
                            <p class="desc line-clamp">
                                Vivamus lacus enim, pulvinar vel nulla
                                sed, scelerisque rhoncus nisi. Praesent
                                vitae mattis nunc, egestas viverra eros.
                            </p>
                            <a href="" class="btn-news"
                                >read more
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="news-item">
                        <div class="img-news">
                            <a href="#!">
                                <img
                                    src="https://images.unsplash.com/photo-1592506119503-c0b18879bd5a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt=""
                                    class="thumb"
                                />
                            </a>
                        </div>
                        <div class="news-info">
                            <h3 class="title line-clamp line-2">
                                <a href="#!">
                                    Good thoughts bear good fresh juicy
                                    fruit.
                                </a>
                            </h3>
                            <p class="blog-meta">
                                <span class="author">
                                    <i class="fas fa-user"></i>
                                    Admin</span
                                >
                                <span class="date">
                                    <i class="fas fa-calendar"></i>
                                    27 December, 2019</span
                                >
                            </p>
                            <p class="desc line-clamp">
                                Vivamus lacus enim, pulvinar vel nulla
                                sed, scelerisque rhoncus nisi. Praesent
                                vitae mattis nunc, egestas viverra eros.
                            </p>
                            <a href="" class="btn-news"
                                >read more
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="news-more">
                    <a href="#!" class="btn btn-news-desc">More news</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Brands --}}
    @include('components.brands')
</main>
@endsection