@extends('layouts.home')

@section('content')
<main>
    <!-- Hero -->
    <div class="hero hero-bg">
        <div class="main-content">
            <div class="body">
                <div class="hero-info">
                    <p class="desc">EXQUISITE & LUXURY</p>
                    <h1 class="heading">Stylish Seasonal Decor</h1>
                </div>
                <div class="hero-btn">
                    <a href="shop" class="btn btn-hero-left">
                        Furniture Collection
                    </a>
                    <a href="contact" class="btn btn-hero-right">Contact Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Features -->
    <div class="features">
        <div class="main-content">
            <div class="body">
                <div class="features-list">
                    <div class="feature-item">
                        <div class="icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-heading-features">
                                Free Shipping
                            </h3>
                            <p class="desc">When order over $75</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-heading-features">
                                24/7 Support
                            </h3>
                            <p class="desc">Get support all day</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3 class="sub-heading-features">Refund</h3>
                            <p class="desc">
                                Get refund within 3 days!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product -->
    <div class="product">
        <div class="main-content">
            <div class="row">
                <div class="body">
                    @include('components.subheading', ['our' => 'Our'], ['subheading' => 'Product'])
                </div>
            </div>
            <div class="product-list">
                <div class="item">
                    <a href="#!">
                        <img
                            src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                            alt="Pepsi"
                            class="thumb"
                        />
                    </a>
                    <div class="info">
                        <h3 class="title">
                            <a href="#!"> Pepsi </a>
                        </h3>
                        <p class="category">Water</p>
                        <span class="price">85$</span>
                        <a href="#!" class="btn btn-cart">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </a>
                    </div>
                </div>

                <div class="item">
                    <a href="#!">
                        <img
                            src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                            alt="Pepsi"
                            class="thumb"
                        />
                    </a>
                    <div class="info">
                        <h3 class="title">
                            <a href="#!"> Pepsi </a>
                        </h3>
                        <p class="category">Water</p>
                        <span class="price">85$</span>
                        <a href="#!" class="btn btn-cart">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </a>
                    </div>
                </div>

                <div class="item">
                    <a href="#!">
                        <img
                            src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                            alt="Pepsi"
                            class="thumb"
                        />
                    </a>
                    <div class="info">
                        <h3 class="title">
                            <a href="#!"> Pepsi </a>
                        </h3>
                        <p class="category">Water</p>
                        <span class="price">85$</span>
                        <a href="#!" class="btn btn-cart">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </a>
                    </div>
                </div>

                <div class="item">
                    <a href="#!">
                        <img
                            src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                            alt="Pepsi"
                            class="thumb"
                        />
                    </a>
                    <div class="info">
                        <h3 class="title">
                            <a href="#!"> Pepsi </a>
                        </h3>
                        <p class="category">Water</p>
                        <span class="price">85$</span>
                        <a href="#!" class="btn btn-cart">
                            <i class="fas fa-shopping-cart"></i>
                            Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <div class="main-content">
            <div class="body">
                <div class="row-left">
                    <div class="img-block">
                        <img
                            src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="chair"
                            class="thumb"
                        />
                        <div class="img-price">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong>
                                    <br />
                                    off per kg
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-right">
                    <h3 class="sub-heading">
                        <strong class="highlight">Deal</strong> of the
                        month
                    </h3>
                    <h4 class="sub-title">Hikan Strwaberry</h4>
                    <p class="desc">
                        Quisquam minus maiores repudiandae nobis, minima
                        saepe id, fugit ullam similique! Beatae, minima
                        quisquam molestias facere ea. Perspiciatis unde
                        omnis iste natus error sit voluptatem accusant
                    </p>

                    <!-- Countdown -->
                    <div class="time-counter">
                        <div
                            class="time-countdown clearfix"
                            data-countdown="2023/5/05"
                        >
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>Days
                                </div>
                            </div>
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>Hours
                                </div>
                            </div>
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>Mins
                                </div>
                            </div>
                            <div class="counter-column">
                                <div class="inner">
                                    <span class="count">00</span>Secs
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="btn btn-cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Add to Cart</a
                    >
                </div>
            </div>
        </div>
    </div>

    {{-- Founder --}}
    @include('components.founder')

    <!-- About -->
    <div class="about">
        <div class="main-content">
            <div class="row">
                <div class="about-left">
                    <a
                        href="https://www.youtube.com/watch?v=MYyN8DLBZdg"
                        class="btn btn-video"
                        target="_blank"
                    >
                        <i class="fas fa-play"></i>
                    </a>
                </div>
                <div class="about-right">
                    <p class="top-sub">Since Year 1999</p>
                    <h2 class="title">
                        We are <strong class="highlight">MEME</strong>
                    </h2>
                    <p class="desc">
                        Etiam vulputate ut augue vel sodales. In
                        sollicitudin neque et massa porttitor vestibulum
                        ac vel nisi. Vestibulum placerat eget dolor sit
                        amet posuere. In ut dolor aliquet, aliquet
                        sapien sed, interdum velit. Nam eu molestie
                        lorem.
                    </p>
                    <p class="desc">
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Sapiente facilis illo repellat
                        veritatis minus, et labore minima mollitia qui
                        ducimus.
                    </p>
                    <a href="about" class="btn btn-about">Know More</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Discount -->
    <div class="discount">
        <div class="main-content">
            <div class="body">
                <h3 class="title">
                    December sale is on! with big
                    <strong class="highlight">Discount...</strong>
                </h3>
                <div class="discount-info">
                    <p class="desc">
                        Sale! <br />
                        Upto
                    </p>
                    <strong class="highlight">50%</strong>
                    <p class="desc">off</p>
                </div>
                <a href="#!" class="btn btn-cart">Shop now</a>
            </div>
        </div>
    </div>

    <!-- News -->
    <div class="news">
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