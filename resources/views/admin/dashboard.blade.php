@extends('layouts.master')

@section('title')
    Dashboard | Meme
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dashboard</h4>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <hr>

                <div class="card-body">
                  <div class="table-responsive">
                      <div class="col-x1-3 col-md-6">
                          <div class="card bg-primary text-white mb-4">
                              <div class="card-body"> Total User
                                  <h2>{{ $totalUser }}</h2>
                              </div>
                              <div class="card-footer d-flex align-items-center justify-content-between">
                                  <a class="small text-white stretched-link" href="role-register">View Details</a>
                                  <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                              </div>
                          </div>

                          <div class="card bg-warning text-white mb-4">
                            <div class="card-body"> Total Admin
                                <h2>{{ $totalAdmin }}</h2>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="role-register">View Details</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>

                        <div class="card bg-primary text-white mb-4">
                          <div class="card-body"> Total Order
                              {{-- <h2>{{ $totalUsers }}</h2> --}}
                          </div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <a class="small text-white stretched-link" href="role-register">View Details</a>
                              <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                          </div>
                      </div>
                      </div>
                  </div>
              </div>
              
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
