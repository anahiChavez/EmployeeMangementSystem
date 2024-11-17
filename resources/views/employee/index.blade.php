@extends('layout')
@section('title', 'All Teachers')
@section('content')
<div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                All Teachers
                                <a href="{{url('employee/create')}}" class="float-end btn btn-sm btn-success">Add New</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Department</th>
                                            <th>Full Name</th>
                                            <th>Photo</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Department</th>
                                            <th>Full Name</th>
                                            <th>Photo</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @if($data)
                                            @foreach($data as $d)
                                            <tr>
                                                <td>{{$d->id}}</td>
                                                <td>{{$d->department->title}}</td>
                                                <td>{{$d->full_name}}</td>
                                                <td><img src="{{asset('public/images/'.$d->photo)}}" width="80" alt=""></td>
                                                <td>{{$d->address}}</td>
                                                <td>
                                                    <a href="{{url('employee/'.$d->id)}}" class="btn btn-warning btn-sm">Show</a>
                                                    <a href="{{url('employee/'.$d->id.'/edit')}}" class="btn btn-info btn-sm">Update</a>
                                                    <a onclick="return confirm('Are you sure to delete this record?')" href="{{url('employee/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('public')}}/js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('public')}}/js/datatables-simple-demo.js"></script>





@endsection