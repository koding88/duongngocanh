@extends('layouts.master')

@section('title')
    Dashboard | Meme
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>NEWS
                        <a href="{{ url('admin/news/create') }}" class="btn btn-primary float-end"> Add News </a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" />

                        </div>
                        <div class="mb-3">
                            <label>Content</label>
                            <input type="text" name="title" class="form-control" />

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
