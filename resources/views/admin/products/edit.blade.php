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
                        <h1 style="font-weight: 500; margin-bottom: 15px;">Edit PRODUCT</h1>
                        <a href="{{ url('admin/products') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Back
                        </a>

                        <form action="/admin/products/{{ $products->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="image">Image</label>
                                <img src="{{ asset('images/' . $products->image_path) }}" alt="" width="50px"
                                    height="50px" style="object-fit: cover">
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $products->name }}"
                                    placeholder="Name...">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" name="quantity"
                                    value="{{ $products->quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" value="{{ $products->price }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $products->description }}" placeholder="Desc...">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-select" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $products->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
