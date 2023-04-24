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
                        <h1 style="font-weight: 500; margin-bottom: 15px;">Edit News</h1>
                        <a href="{{ url('admin/news') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Back
                        </a>
                        <form action="/admin/news/{{ $news->id }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <img src="{{ asset('images/' . $news->image_path) }}" alt="" height="50px"
                                        style="object-fit: cover" loading="lazy">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <strong>Title:</strong>

                                        <input type="text" class="form-control" name="title"
                                            value="{{ $news->title }}" placeholder="Title...">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <strong>Content:</strong>
                                            <input type="text" class="form-control" name="content"
                                                value="{{ $news->content }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-dark">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
