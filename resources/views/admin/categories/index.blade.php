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
                        <h1 style="font-weight: 500; margin-bottom: 15px;">CATEGORY</h1>
                        <a href="/admin/categories/create" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Create new
                        </a>

                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $category->id }}</th>
                                            <th>{{ $category->name }}</th>
                                            <td class="custom-flex">
                                                <a href="categories/{{ $category->id }}" class="btn btn-info btn-sm">
                                                    Detail
                                                </a>

                                                <a href="categories/{{ $category->id }}/edit"
                                                    class="btn btn-warning btn-sm">
                                                    <i class="bi bi-pencil-square"></i>
                                                    Edit</a>

                                                <form action="categories/{{ $category->id }}" method="post">
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
