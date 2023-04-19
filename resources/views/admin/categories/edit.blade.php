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
                        <h1 style="font-weight: 500; margin-bottom: 15px;">Edit Category</h1>
                        <a href="{{ url('admin/categories') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Back
                        </a>

                        <form method="post" action="/admin/categories/{{ $categories->id }}">
                            @csrf
                            @method('PUT')
                            <label>Name</label><br>
                            <input type="text" name="name" id="name" value="{{ $categories->name }}"
                                class="form-control"><br>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
