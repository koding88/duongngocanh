<div class="item">
    <a href="product/detail/{{ $products->id }}">
        <img src="{{ asset('images/' . $products->image_path) }}" alt="product" class="thumb">
    </a>
    <div class="info">
        <h3 class="title">
            <a href="product/detail/{{ $products->id }}">{{ $products->name }}</a>
        </h3>
        <p class="category">{{ $products->category->name }}</p>
        <span class="price">{{ $products->price }}$</span>
        <a href="#!" class="btn btn-cart">
            <i class="fas fa-shopping-cart"></i>
            Add to Cart
        </a>
    </div>
</div>
