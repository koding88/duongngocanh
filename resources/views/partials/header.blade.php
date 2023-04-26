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
                        <li class="{{ request()->is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="{{ request()->is('about') ? 'active' : '' }}">
                            <a href="{{ url('about') }}">About</a>
                        </li>
                        <li class="{{ request()->is('news') ? 'active' : '' }}">
                            <a href="{{ url('news') }}">News</a>
                        </li>
                        <li class="{{ request()->is('shop') ? 'active' : '' }}">
                            <a href="{{ url('shop') }}">Shop</a>
                        </li>
                        <li class="{{ request()->is('contact') ? 'active' : '' }}">
                            <a href="{{ url('contact') }}">Contact</a>
                        </li>
                    </ul>
                </nav>

                <!-- Action -->
                <ul class="action">
                    <li class="{{ request()->is('search') ? 'active' : '' }}">
                        <a href="{{ url('search') }}" class="icon">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </li>
                    <li class="{{ request()->is('cart') ? 'active' : '' }}">
                        <a href="{{ url('cart') }}" class="icon">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                    @if (Auth::check())
                        <li>
                            <a href="{{ route('logout') }}" class="icon"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-sign-in"></i>
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        @if (Route::has('login'))
                            <li>
                                <a href="{{ route('login') }}" class="icon">
                                    <i class="fa-solid fa-user-tie"></i>
                                </a>
                            </li>
                        @endif
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="icon">
                                    <i class="fa-solid fa-user-plus"></i>
                                </a>
                            </li>
                        @endif
                    @endif
                </ul>

            </div>
        </div>
    </header>
