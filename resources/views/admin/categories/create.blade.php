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
                        <a href="{{ url('admin/categories') }}" class="btn btn-success btn-lg">
                            <i class="bi bi-plus-circle"></i>
                            Back
                        </a>

                        <form action={{ url('admin/categories') }} method="post">
                            {!! csrf_field() !!}
                            <label>Name</label><br>
                            <input type="text" name="name" id="name" class="form-control"><br>
                            <input type="submit" value="Save" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
