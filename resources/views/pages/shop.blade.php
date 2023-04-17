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
                    <div class="item">
                        <a href="./detail.html">
                            <img
                                src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                                alt="Pepsi"
                                class="thumb"
                            />
                        </a>
                        <div class="info">
                            <h3 class="title">
                                <a href="./detail.html"> Pepsi </a>
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
                        <a href="./detail.html">
                            <img
                                src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                                alt="Pepsi"
                                class="thumb"
                            />
                        </a>
                        <div class="info">
                            <h3 class="title">
                                <a href="./detail.html"> Pepsi </a>
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
                        <a href="./detail.html">
                            <img
                                src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                                alt="Pepsi"
                                class="thumb"
                            />
                        </a>
                        <div class="info">
                            <h3 class="title">
                                <a href="./detail.html"> Pepsi </a>
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
                        <a href="./detail.html">
                            <img
                                src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                                alt="Pepsi"
                                class="thumb"
                            />
                        </a>
                        <div class="info">
                            <h3 class="title">
                                <a href="./detail.html"> Pepsi </a>
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
                        <a href="./detail.html">
                            <img
                                src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                                alt="Pepsi"
                                class="thumb"
                            />
                        </a>
                        <div class="info">
                            <h3 class="title">
                                <a href="./detail.html"> Pepsi </a>
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
                        <a href="./detail.html">
                            <img
                                src="https://images.unsplash.com/photo-1553456558-aff63285bdd1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80g"
                                alt="Pepsi"
                                class="thumb"
                            />
                        </a>
                        <div class="info">
                            <h3 class="title">
                                <a href="./detail.html"> Pepsi </a>
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

                <ul class="pagination">
                    <li>
                        <a href="#!">
                            <i class="fa-solid fa-arrow-left"></i>
                            Prev
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="active">1</a>
                    </li>
                    <li>
                        <a href="#!">2</a>
                    </li>
                    <li>
                        <a href="#!">3</a>
                    </li>
                    <li>
                        <a href="#!">
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
