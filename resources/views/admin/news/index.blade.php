@extends('layouts.master')

@section('title')
    News | Meme
@endsection

@section('content')
    <!-- Modal -->
       <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"> 
                     <h1 class="modal-title fs-5" id="exampleModalLabel">News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/add-news" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Image</label>
                            <input type="file" name="image" class="form-control" aria-label="file example">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contents</label>
                            <textarea name="contents" rows ='6' class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="close" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div> 
         </div>
    </div> 

    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">News
                        <a href ="{{url('admin/news/add')}}" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#myModal">
                            ADD
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    <div class="table table-bordered table-striped">
                        <table class="table">
                            <thead class=" text-primary">
                                <th width="5%">ID</th>
                                <th width="15%">Image</th>
                                <th width="20%">Title</th>
                                <th width="40%">Contents</th>
                                <th width="10%">EDIT</th>
                                <th width="5%">DELETE</th>
                            </thead>
                            <tbody>
                                 @foreach ($news as $row)
                                <tr>
                                    <td>{{ $row->id }}</td>
                                    <td><img src="/images/news/{{ $row->image }}" class="img-thumbnail" width="40%"
                                        height="150px"></td>
                                    <td>{{ $row->title }}</td>
                                    <td>{{ $row->contents }}</td>
                                    <td>
                                        <a href="news-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                                    </td>
                                    <td>
                                        <form action="news-delete/{{ $row->id }}" method="POST">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger">DELETE</button>
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

@section('scripts')
@endsection
