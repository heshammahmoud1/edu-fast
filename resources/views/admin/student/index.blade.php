<?php
?>
@extends('admin.layout.app')

@section("breadCrumb")
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Students</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#" class="active">Students</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("content")
    <div class="card">

        <div class="card-body">
            <h5 class="card-title">Basic Datatable</h5>
            <div class="table-responsive">
                <table
                    id="zero_config"
                    class="table table-striped table-bordered"
                >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created_at</th>
                        <th>Control</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($data->isEmpty())
                        <tr>
                            <p  class="text-center alert alert-danger">No data found.</p>

                        </tr>
                    @else
                        @foreach($data as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->username}}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{ $student ->created_at}}</td>
                                <td>
                                    {{-- <a href="{{ route('admin.student.show',['id' => $student->id])}}" class="btn btn-outline-primary">Show</a> --}}
                                    <a href="{{ route('admin.student.edit',['id' => $student->id])}}" class="btn btn-outline-primary">Edit</a>
                                                            <form class="d-inline" method="post" action="{{ route('admin.student.destroy',$student->id)  }}">
                                                                @csrf
                                                                @method('delete')
                                                                <input type="submit" class="btn btn-danger delete" value = "Delete" >
                                                            </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    <tr>
                    </tr>
                    </tbody>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>

    <script>
        const deleteBtn = document.querySelectorAll('.delete');
        for(let i = 0 ; i < deleteBtn.length;i++){
            deleteBtn[i].onclick = function (e){
                let conf = confirm("are you sure :");
                if(!conf){e.preventDefault();}
            }
    
        }
    </script>   

@endsection
