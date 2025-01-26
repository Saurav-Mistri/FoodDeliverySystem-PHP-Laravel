@extends('admin.app')
@section('content')
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Admin </strong> Profile
                                    </div>
                                    @include('formerror')
                                    <div class="card-body card-block">
                                        <form action="{{url('/admin-profile'.$users->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">
                                                    <input type="email" id="text-input" name="email" placeholder="Email" class="form-control" value="{{ $users->email }}" readonly></p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Role</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">
                                                    <input type="text" id="text-input" name="usertype" placeholder="Role" class="form-control" value="{{ $users->usertype }}" readonly>
                                                    </p>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="edit-img" class=" form-control-label">Image</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <img src="{{ url('/img/uploaded/'.$users->u_img) }}" width="10%"/><br><br>
                                                    <input name="u_img" class="@error('u_img') is-invalid @enderror" placeholder="Select Image" type="file" width="60%">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="name" placeholder="Name" class="form-control" value="{{$users->name}}">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="address" rows="4" placeholder="Address" class="form-control">{{$users->address}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Phone No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="phn_no" placeholder="Phone" class="form-control" value="{{$users->phn_no}}">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Gender</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="gender" id="select" class="form-control">
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="login-checkbox">
                                                <label>
                                                <a href="#">Reset Password?</a>
                                                </label>
                                                <label>
                                                    <a href="#">Forgot Password?</a>
                                                </label>
                                            </div>
                                             <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Update
                                                </button>
                                                <button type="reset" class="btn btn-danger btn-sm">
                                                    <i class="fa fa-ban"></i> Reset
                                                </button>
                                            </div>
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