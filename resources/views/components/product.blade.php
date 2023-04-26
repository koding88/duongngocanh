<div class="item">
    <a href="product/detail/{{ $products->id }}">
        <img src="{{ asset('images/' . $products->image_path) }}" alt="product" loading="lazy" class="thumb">
    </a>
    <div class="info">
        <h3 class="title">
            <a href="product/detail/{{ $products->id }}">{{ $products->name }}</a>
        </h3>
        <p class="category">{{ $products->category->name }}</p>
        <span class="price">{{ $products->price }}$</span>
        <form action="{{ route('cart.add', ['id' => $products->id]) }}" method="POST" class="toast__product">
            @csrf
            <button type="submit" class="btn btn-cart">
                <i class="fas fa-shopping-cart"></i> Add to Cart
            </button>
        </form>
    </div>
</div>
