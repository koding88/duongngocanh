@extends('layouts.master')

@section('title')
    Dashboard | Meme
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
           <h4>Add News
            <a href="{{ url ('admin/news/create')}}" class="btn btn-primary btn-sm text -white float-end"> Back </a>
        </h4>
        </div>
        <div class="card-body">
            </div> 
      </div>
    </div>
</div>
@endsection