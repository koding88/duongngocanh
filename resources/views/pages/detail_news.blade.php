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
                            <img src="https://images.unsplash.com/photo-1681238339140-7fa1654fb6ad?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1513&q=80"
                                alt="">
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
                            <h2>Pomegranate can prevent heart disease</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint soluta, similique quidem fuga
                                vel voluptates amet doloremque corrupti. Perferendis totam voluptates eius error fuga
                                cupiditate dolorum? Adipisci mollitia quod labore aut natus nobis. Rerum perferendis, nobis
                                hic adipisci vel inventore facilis rem illo, tenetur ipsa voluptate dolorem, cupiditate
                                temporibus laudantium quidem recusandae expedita dicta cum eum. Quae laborum repellat a ut,
                                voluptatum ipsa eum. Culpa fugiat minus laborum quia nam!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, praesentium, dicta. Dolorum
                                inventore molestias velit possimus, dolore labore aliquam aperiam architecto quo
                                reprehenderit excepturi ipsum ipsam accusantium nobis ducimus laudantium.</p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum est aperiam voluptatum id
                                cupiditate quae corporis ex. Molestias modi mollitia neque magni voluptatum, omnis
                                repudiandae aliquam quae veniam error! Eligendi distinctio, ab eius iure atque ducimus id
                                deleniti, vel alias sint similique perspiciatis saepe necessitatibus non eveniet, quo nisi
                                soluta.
                            </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt beatae nemo quaerat,
                                doloribus obcaecati odio!</p>
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
