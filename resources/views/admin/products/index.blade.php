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
                        <h1 style="font-weight: 500; margin-bottom: 15px;">PRODUCT</h1>
                        <a href="{{ url('admin/products/create') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Create new
                        </a>

                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">{{ $product->id }}</th>
                                            <th>
                                                <img src="{{ asset('images/' . $product->image_path) }}" alt=""
                                                    width="50px" height="50px" style="object-fit: cover" loading="lazy">
                                            </th>
                                            <th>{{ $product->name }}</th>
                                            <th>{{ $product->category->name }}</th>
                                            <th>{{ $product->description }}</th>
                                            <th>{{ $product->quantity }}</th>
                                            <th>{{ $product->price }}</th>
                                            <td class="custom-flex">
                                                <a href="products/{{ $product->id }}">
                                                    <button class="btn btn-info btn-sm">Detail</button>
                                                </a>

                                                <a href="products/{{ $product->id }}/edit">
                                                    <button class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                        Edit
                                                    </button>
                                                </a>

                                                <form action="/admin/products/{{ $product->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="bi bi-trash"></i>
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
