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
                    <h1 style="font-weight: 500; margin-bottom: 15px;">New</h1>
                    <a href="{{ url('admin/news/create') }}" class="btn btn-success btn-lg">
                        <i class="bi bi-plus-circle"></i>
                        Create new
                    </a>
                    <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Content</th>                                  
                                       </tr>
                                    </thead>
                         <tbody>
                            @foreach ($news as $new)
                         <tr>
                        <th scope="row">{{ $new->id }}</th>
                        <td><img src="/public/images/news/{{$new->image}}" width="200px"></td>
                        <td>{{$new->title}}</td>
                        <td>{{$new->content}}</td>
                        <td class="custom-flex">
                            <a href="news/{{ $new->id }}">
                                <button class="btn btn-info btn-sm">Detail</button>
                            </a>

                            <a href="news/{{ $new->id }}/edit">
                                <button class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                    Edit
                                </button>
                            </a>>

                            <form action="/admin/news/{{ $new->id }}" method="post">
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

@endsection