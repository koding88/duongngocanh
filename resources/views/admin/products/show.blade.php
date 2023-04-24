@extends('layouts.master')

@section('title')
    Dashboard | Meme
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <h1 style="font-weight: 500; margin-bottom: 15px;">Detail product</h1>
                        <a href="{{ url('admin/products') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Back
                        </a>

                        <div class="product-detail">
                            <div class="product-img">
                                <img loading="lazy" src="{{ asset('images/' . $products->image_path) }}">
                            </div>
                            <div class="product-info">
                                <h3 class="title">
                                    <strong>Name: </strong> {{ $products->name }}
                                </h3>
                                <p class="category">
                                    <strong>Category: </strong> {{ $products->category->name }}
                                </p>
                                <span class="quantity">
                                    <strong>Quantity:</strong> {{ $products->quantity }}
                                </span>
                                <span class="price">
                                    <strong>Price:</strong> {{ $products->price }}$</span>
                                <p class="desc">
                                    <strong>Description:</strong> {{ $products->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
