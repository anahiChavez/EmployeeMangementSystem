@extends('layout')
@section('title', 'View Teacher')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
            View Teacher
        <a href="{{url('employee')}}" class="float-end btn btn-sm btn-success">View All</a>
    </div>
    <div class="card-body">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <p class="text-danger">{{$error}}</p>
            @endforeach
        @endif
    
        @if(session('msg'))
            <p class="text-success">{{ session('msg') }}</p>
        @endif

        <form method="post" action="{{url('employee/'.$data->id)}}" enctype="multipart/form-data">
        @method('put')    
        @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Department</th>
                    <td>
                        {{$data->department->title}}
                    </td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>
                        {{$data->full_name}}
                    </td>
                </tr>
                <tr>
                    <th>Photo</th>
                    <td>
                        <img src="{{asset('public/images/'.$data->photo)}}" width="200" alt="">
                    </td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>
                       {{$data->address}}
                    </td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>
                        {{$data->mobile}}
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if($data->status=='1') Activate @else Inactive @endif
                    </td>
                </tr>
            </table>
        </form>
        
    </div>
</div>

                        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('public')}}/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('public')}}/js/datatables-simple-demo.js"></script>





@endsection