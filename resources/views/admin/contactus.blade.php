@extends('admin.app')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 class="title-1 m-b-25">Contact Us</h2>                                
                                
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25"></h2>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($contactus->count())
                                        @foreach($contactus as $key=>$row)
                                            <tr id="datamodal">
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $row->c_name }}</td>
                                                <td>{{ $row->c_email }}</td>
                                                <td>{{ $row->c_subject }}</td>
                                                <td>{{ $row->c_msg }}</td>
                                                <td class="text-right">
                                                    <a href="{{ url('/delete-contact-us/'.$row->c_id) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                {!! $contactus->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
$(document).ready(function(){

 $(document).on('click', '.admin.contactus a', function(event){
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