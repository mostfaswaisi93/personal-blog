@extends('layouts.admin')

@section('title') Editing {{ $user->name }} @endsection

@section('content')
  <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header bg-light">
                          Editing {{ $user->name }}
                      </div>
                      @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                      @endif
                      @if ($errors->any())
                        <div class="alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </div>
                      @endif
                      <form action="{{ route('adminEditUserPost', $user->id) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Name</label>
                                        <input id="normal-input" name="name" class="form-control" value="{{ $user->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Email</label>
                                        <input id="normal-input" name="email" type="email" class="form-control" value="{{ $user->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                        <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Permissions</label>
                                        <br>
                                        <input type="checkbox"  name="auther" value=1 {{ $user->auther == true ? 'checked' : '' }}>
                                        Auther
                                        <br>
                                        <input type="checkbox"  name="admin" value=1 {{ $user->admin == true ? 'checked' : '' }}>
                                        Admin
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success">Update user</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
