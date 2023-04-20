<div class="news-item">
    <div class="img-news">
        <a href="new/detail/{{ $news->id }}">
            <img src="{{ asset('images/' . $news->image_path) }}" alt="" class="thumb">
        </a>
    </div>
    <div class="news-info">
        <h3 class="title line-clamp line-2">
            <a href="new/detail/{{ $news->id }}">
                {{ $news->title }}
            </a>
        </h3>
        <p class="blog-meta">
            <span class="author">
                <i class="fas fa-user"></i>
                Admin</span>
            <span class="date">
                <i class="fas fa-calendar"></i>
                27 December, 2019</span>
        </p>
        <p class="desc line-clamp">
            {{ $news->content }}
        </p>
        <a href="" class="btn-news">read more
            <i class="fas fa-angle-right"></i>
        </a>
    </div>
</div>
