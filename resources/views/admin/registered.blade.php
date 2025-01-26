@extends('admin.app')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Registered Roles</h2>
                                @if(session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Address</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>Phnoe No</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $key=>$row)
                                            <tr id="datamodal">
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <style> img{border-radius:0%;}</style>									
										            <img src="{{ url('/img/uploaded/'.$row->u_img) }}" width="150"/>
                                                </td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->usertype }}</td>
                                                <td>{{ $row->address }}</td>
                                                <td>{{ $row->gender }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phn_no }}</td>
                                                <td class="text-right">
                                                    <a href="/role-edit{{$row->id}}" class="btn btn-success">Edit</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="/role-delete{{ $row->id }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
$(document).ready(function(){

 $(document).on('click', '.admin.registered a', function(event){
  event.preventDefault(); 
  var page = $(this).attr('href').split('page=')[1];
  fetch_data(page);
 });

 function fetch_data(page)
 {
  $.ajax({
   url:"/view/fetch_data?page="+page,
   success:function(data)
   {
    $('#table_data').html(data);
   }
  });
 }
 
});
</script>
@endsection