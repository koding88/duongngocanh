@extends('layouts.home')

@section('content')
    <main>
        <!-- Hero-about -->
        @include('components.heading', ['desc' => 'We sale furniture decor'], ['heading' => 'About Us'])

        <!-- Features-about -->
        <div class="features-about">
            <div class="main-content">
                <div class="body">
                    <h2 class="title">
                        WHY <strong class="highlight">MEME</strong>
                    </h2>
                    <div class="features-list">
                        <div class="feature-item">
                            <div class="icon">
                                <i class="fa-solid fa-truck-fast"></i>
                            </div>
                            <div class="content">
                                <h3 class="sub-heading-features">
                                    Home Delivery
                                </h3>
                                <p class="desc">
                                    sit voluptatem accusantium dolore mque
                                    laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo.
                                </p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon">
                                <i class="fas fa-money-bill-alt"></i>
                            </div>
                            <div class="content">
                                <h3 class="sub-heading-features">
                                    Best Price
                                </h3>
                                <p class="desc">
                                    sit voluptatem accusantium dolore mque
                                    laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo.
                                </p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="content">
                                <h3 class="sub-heading-features">
                                    Custom Box
                                </h3>
                                <p class="desc">
                                    sit voluptatem accusantium dolore mque
                                    laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo.
                                </p>
                            </div>
                        </div>

                        <div class="feature-item">
                            <div class="icon">
                                <i class="fas fa-sync"></i>
                            </div>
                            <div class="content">
                                <h3 class="sub-heading-features">
                                    Quick Refund
                                </h3>
                                <p class="desc">
                                    sit voluptatem accusantium dolore mque
                                    laudantium, totam rem aperiam, eaque
                                    ipsa quae ab illo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Discount --}}
        @include('components.discount')

        <!-- Team -->
        <div class="team">
            <div class="main-content">
                <div class="row">
                    <div class="body">
                        <h3 class="sub-heading">
                            <span class="highlight">Our</span> Team
                        </h3>
                        <p class="desc line-clamp line-2">
                            Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit. Aliquid, fuga quas itaque
                            eveniet beatae optio.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="team-list">
                        <div class="team-item">
                            <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80"
                                alt="" loading="lazy" class="thumb" />
                            <div class="info">
                                <h4 class="team-name">Jimmy Doe</h4>
                                <span class="role">Manager</span>
                            </div>
                            <ul class="social-team">
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="team-item">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                                loading="lazy" class="thumb" />
                            <div class="info">
                                <h4 class="team-name">Simon Joe</h4>
                                <span class="role">Manager</span>
                            </div>
                            <ul class="social-team">
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="team-item">
                            <img src="https://images.unsplash.com/photo-1503342394128-c104d54dba01?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2787&q=80"
                                loading="lazy" class="thumb" />
                            <div class="info">
                                <h4 class="team-name">Marry Doe</h4>
                                <span class="role">Manager</span>
                            </div>
                            <ul class="social-team">
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Founder -->
        <div class="founder">
            <div class="main-content">
                <div class="founder-list autoplay">
                    <div class="founder-item">
                        <div class="founder-avatar">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="" loading="lazy"
                                class="avatar" />
                        </div>
                        <div class="founder-info">
                            <h3 class="founder-name">
                                Duong Ngoc Anh
                                <span>Local shop owner</span>
                            </h3>
                            <p class="desc">
                                " Sed ut perspiciatis unde omnis iste natus
                                error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore
                                Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="founder-item">
                        <div class="founder-avatar">
                            <img src="https://randomuser.me/api/portraits/men/97.jpg" alt="" loading="lazy"
                                class="avatar" />
                        </div>
                        <div class="founder-info">
                            <h3 class="founder-name">
                                Thai Van Chien
                                <span>Local shop owner</span>
                            </h3>
                            <p class="desc">
                                " Sed ut perspiciatis unde omnis iste natus
                                error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore
                                Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                    <div class="founder-item">
                        <div class="founder-avatar">
                            <img src="https://images.unsplash.com/photo-1510227272981-87123e259b17?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=3759e09a5b9fbe53088b23c615b6312e"
                                alt="" loading="lazy" class="avatar" />
                        </div>
                        <div class="founder-info">
                            <h3 class="founder-name">
                                Ho Thi Quynh Nga
                                <span>Local shop owner</span>
                            </h3>
                            <p class="desc">
                                " Sed ut perspiciatis unde omnis iste natus
                                error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore
                                Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="quote-icon">
                                <i class="fa-solid fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Brands --}}
        @include('components.brands')
    </main>
@endsection
