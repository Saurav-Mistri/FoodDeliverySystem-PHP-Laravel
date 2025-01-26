@extends('admin.app')
@section('content')
@if( auth()->check() )
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">PostData</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
    <th>ID</th>
		<th>Title</th>
		<th>Discription</th>
		<th class="text-right">Action</th>
    </tr>
</thead>
<tbody>
	<tr id="datamodal">
        <td></td>
        <td></td>
        <td></td>
        <td class="text-right">
		    
		</td>
</tr>
</tbody>
</table>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <li class="nav-item">
        <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">{{ auth()->user()->email }}</a>
    </li>
@else
    <meta http-equiv='refresh' content='0; url=login'>
@endif
@endsection