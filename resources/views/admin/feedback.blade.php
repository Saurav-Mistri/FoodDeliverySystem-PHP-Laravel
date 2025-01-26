@extends('admin.app')
@section('content')
<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Feedback</h2>
                                @if(session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>ID</th>
                                                <th>User Name</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th class="text-right">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($data->count())
                                        @foreach($data as $key=>$row)
                                            <tr id="datamodal">
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $row->u_id }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->f_msg }}</td>
                                                <td>{{ $row->f_date }}</td>
                                                <td class="text-right">
                                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                                    <a href="/delete-feedback/{{ $row->f_id }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection