@extends('layouts.master')

@section('title')
    Edit - Register | Meme
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Edit Role for Register User</h4>
        </div>
        <div class="card-body">
            <div class="row"><div class="col-md-6">
                <form action="/role-register-update/{{$users->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$users->name}}">
                    </div>
                    <div class="form-group">
                        <label class="form-select">Give Role</label>
                        <select name="usertype" class="form-control" aria-label="Default select example">
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/role-register" class="btn btn-danger">Cancel</a>
                </form>
            </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection


@section('scripts')
    
@endsection