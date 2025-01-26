@extends('admin.app')
@section('content')

<div class="main-content">
  <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                          <strong>Add Cuisines</strong> 
                          <em></em>
                      </div>
                      <form action="{{ url('add-cuisine') }}" method="POST">
                        @csrf
                      <div class="card-body card-block">
                          @include('formerror')
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Name</label>
                                  <input type="text" name="name" id="inputWarning2i" class="form-control-warning form-control">
                              </div>
                              <div class="has-warning form-group">
                                  <label for="inputWarning2i" class=" form-control-label">Discription</label>
                                  <input type="text" name="discription" id="inputWarning2i" class="form-control-warning form-control">
                              </div>
                      </div>
                      <div class="card-footer">
                      <button type="submit" class="btn btn-success btn-sm">
                              <i class="fa fa-dot-circle-o"></i> Add
                          </button>
                          <a href="/main-cuisine" class="btn btn-danger btn-sm">
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
