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
                    <h1 style="font-weight: 500; margin-bottom: 15px;"> News</h1>
                    <a href="{{ url('admin/news') }}" class="btn btn-success btn-lg">
                        <i class="bi bi-plus-circle"></i>
                        Back
                    </a>
    
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <strong>Image:</strong>
            <img src="/images/{{$new->image}}" width="250px">
        </div>
    </div>
    
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{$new->title}}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    {{$new->content}}
                </div>
            </div>
        </div>
                </div>
            </div>
            


@endsection