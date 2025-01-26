@extends('admin.app')
@section('content')

<div class="main-content">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <strong>Edit Dishes</strong> 
                          <em></em>
                      </div>
                      <form action="{{ url('/update-dish'.$dishes->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body card-block">
                          @include('formerror')
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Name</label>
                                  <input type="text" name="d_name" id="inputWarning2i" class="form-control-warning form-control" value="{{ $dishes->d_name }}">
                              </div>
                              <div class="has-warning form-group">
                                    <label for="inputWarning2i" class=" form-control-label">Image</label>
                                    <div>
                                        <style> img{border-radius:10%;}</style>									
									    <img src="{{ url('/img/dishes/'.$dishes->d_img) }}" width="10%"/><br><br>
                                        <input type="file" name="d_img" class="@error('d_img') is-invalid @enderror form-control-warning form-control" value="{{ $dishes->d_img }}" placeholder="Select Image" width="60%">
                                    </div>
                              </div>
                              <div class="form-group">
                                  <label class=" form-control-label">Select Category</label>
                                  <select name="c_id" class="form-control">
                                  @foreach($cuisines as $r)
                                        <option value="{{ $r->c_id }}">{{ $r->name }}</option>
                                  @endforeach
                                  </select>
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Discription</label>
                                  <input type="text" name="d_discription" id="inputWarning2i" class="form-control-warning form-control" value="{{ $dishes->d_discription}}">
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Quantity</label>
                                  <input type="text" name="qty" id="inputWarning2i" class="form-control-warning form-control" value="{{ $dishes->qty}}">
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Price</label>
                                  <input type="text" name="price" id="inputWarning2i" class="form-control-warning form-control" value="{{ $dishes->price}}">
                              </div>
                      </div>
                      <div class="card-footer">
                      <button type="submit" class="btn btn-success btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Update
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
