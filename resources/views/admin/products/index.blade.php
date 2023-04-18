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
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-lg">
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
                                                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                                    alt="" width="50px" height="50px" style="object-fit: cover">
                                            </th>
                                            <th>{{ $product->name }}</th>
                                            <th>Category</th>
                                            <th>{{ $product->description }}</th>
                                            <th>{{ $product->quantity }}</th>
                                            <th>{{ $product->price }}</th>
                                            <td>
                                                <a href="">
                                                    <button class="btn btn-info btn-sm">Detail</button>
                                                </a>

                                                <a href="">
                                                    <button class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pencil-square"></i>
                                                        Edit
                                                    </button>
                                                </a>

                                                <form method="POST" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm("Confirm delete?")">
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
