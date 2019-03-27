@extends('layouts.admin')

@section('title') New product @endsection

@section('content')
  <div class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header bg-light">
                          New Product
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

                      <form action="{{ route('adminNewProductPost') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Thumbnail</label>
                                        <input type="file" name="thumbnail" class="form-control" placeholder="Product thumbnail">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Title</label>
                                        <input id="normal-input" name="title" class="form-control" placeholder="Product title">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="placeholder-input" class="form-control-label">Description</label>
                                        <textarea class="form-control" name="description" id="" cols="30" placeholder="Product description" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Price</label>
                                        <input name="price" class="form-control" placeholder="10.00">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success">Create product</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
