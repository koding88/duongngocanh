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
                        <h1 style="font-weight: 500; margin-bottom: 15px;">Show detaild Category</h1>
                        <a href="{{ url('admin/categories') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Back
                        </a>
                        <h3>Name: {{ $categories->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
