<header class="header">
    <div class="main-content">
        <div class="body">
            <!-- Logo -->
            <a href="#">
                <img src="{{ asset('images/logo.svg') }}" alt="Meme" class="logo" />
            </a>

            <!-- Nav -->
            <nav class="nav">
                <ul>
                    <li class="{{ request()-> is('index') ? 'active' : '' }}">
                        <a href="/index">Home</a>
                    </li>
                    <li {{ request()-> is('about') ? 'active' : '' }}>
                        <a href="./about.html">About</a>
                    </li>
                    <li {{ request()-> is('news') ? 'active' : '' }}>
                        <a href="./news.html">News</a>
                    </li>
                    <li {{ request()-> is('shop') ? 'active' : '' }}>
                        <a href="./shop.html">Shop</a>
                    </li>
                    <li {{ request()-> is('contact') ? 'active' : '' }}>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Action -->
            <div class="action">
                <a href="" class="icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
                <a href="./checkout.html" class="icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <a href="home" class="icon">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
        </div>
    </div>
</header>
