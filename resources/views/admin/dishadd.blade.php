@extends('admin.app')
@section('content')

<div class="main-content">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <strong>Add Dishes</strong> 
                          <em></em>
                      </div>
                      <form action="{{ url('add-dish') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body card-block">
                          @include('formerror')
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Name</label>
                                  <input type="text" name="d_name" id="inputWarning2i" class="form-control-warning form-control @error('d_name') is-invalid @enderror" required>
                                    @error('d_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Image</label>
                                  <style> img{border-radius:10%;}</style>
                                  <input name="d_img" class="form-control-warning" placeholder="Select Image" type="file" width="60%" required>
                                    
                              </div>
                              <div class="form-group">
                                  <label class=" form-control-label">Select Category</label>
                                  <select name="c_id" class="form-control">
                                  @foreach($cuisines as $row)
                                        <option value="{{ $row->c_id }}">{{ $row->name }}</option>
                                  @endforeach
                                  </select>
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Discription</label>
                                  <input type="text" name="d_discription" id="inputWarning2i" class="form-control-warning form-control @error('d_discription') is-invalid @enderror" required>
                                    @error('d_discription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Quantity</label>
                                  <input type="text" name="qty" id="inputWarning2i" class="form-control-warning form-control @error('qty') is-invalid @enderror" required>
                                    @error('qty')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Price</label>
                                  <input type="text" name="price" id="inputWarning2i" class="form-control-warning form-control @error('price') is-invalid @enderror" required>
                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                              </div>
                      </div>
                      <div class="card-footer">
                      <button type="submit" class="btn btn-success btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Add
                          </button>
                          <a href="/main-dishes" class="btn btn-danger btn-sm">
                              <i class="fa fa-ban"></i> Cancel
                          </a>
                      </div>
                      </form>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="copyright">
                      <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
