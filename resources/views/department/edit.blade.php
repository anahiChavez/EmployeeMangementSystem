@extends('layout')
@section('title', 'Update Deparment')
@section('content')
<div class="card mb-4 mt-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Create Department
        <a href="{{url('depart')}}" class="float-end btn btn-sm btn-success">View All</a>
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

        <form method="post" action="{{url('depart/'.$data->id)}}">
            @method('put')    
            @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <td>
                            <input type="text" value="{{$data->title}}" name="title" class="form-control"/>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary" value="Submit">
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