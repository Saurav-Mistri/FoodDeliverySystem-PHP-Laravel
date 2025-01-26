@extends('admin.app')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10">
                                <h2 class="title-1 m-b-25">Dishes</h2>                                
                                
                            </div>
                            <div class="col-lg-2">
                            <a href="add-dish" class="btn btn-success text-right"> + Add Item</a>
                                
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
                                                <th>Image</th>
                                                <th>Dish</th>
                                                <th>Cuisine</th>                                                
                                                <th>Discription</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        @foreach($data as $key=>$row)
                                        
                                            <tr id="datamodal">
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <style> img{border-radius:10%;}</style>									
										            <img src="{{ url('/img/dishes/'.$row->d_img) }}"/><br><br>
                                                </td>
                                                <td>{{ $row->d_name }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->d_discription }}</td>
                                                <td class="text-center">{{ $row->qty }}
                                                <td>{{ $row->price }}</td>
                                                <td class="text-center">
                                                    <a href="{{ url('/edit-dish'.$row->id) }}" class="btn btn-success">Edit</a>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="{{ url('/delete-dish/'.$row->id) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                                {!! $data->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
$(document).ready(function(){

 $(document).on('click', '.dish a', function(event){
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