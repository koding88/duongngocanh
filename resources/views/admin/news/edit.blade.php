@extends('layouts.master')

@section('title')
    Edit News | Meme
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
             @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif 
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> Edit News                       
                    </h4>
                </div>
                {{-- <form action="{{url('create-news')}}" method ="POST" enctype="multipart/form-data"> --}}
                <form action="{{url('news-update/'.$news->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            <input type="file" value ="{{ $news -> image }}"  name="image" class="form-control" aria-label="file example">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Title</label>
                            <input type="title" value ="{{ $news -> title }}" name="title" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contents</label>
                            <textarea type="contents" value ="{{ $news -> contents }}"  name="contents" class="form-control" id="recipient-name"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href = "{{url('admin/news')}}" class="btn btn-secondary">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection