<?php
?>
@extends('admin.layout.app')

@section("breadCrumb")
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Courses</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#" class="active">Courses</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("content")
    @if (session()->has('msg'))

        <p class="alert alert-success">{{session('msg')}}</p>

    @endif
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
                    <th>Course_id</th>
                    <th>CourseName</th>
                   <th>photo</th>
                 {{-- <th>Teacher_name</th>
                    <th>Control</th> --}}

                </tr>
                </thead>
                @if($data->isEmpty())
                    <tr>
                        <p  class="text-center alert alert-danger">No data found.</p>

                    </tr>
                @else
                    @foreach($data as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->name}}</td>

                          
                            <td>
                                @if ($course->image)
                                <img src="{{ asset('storage') . "/$course->image" }}" width="270px" alt="Course Image">
                                @else
                               <p>No image</p>
                                @endif
                            </td>

                            
                               {{-- <td>{{$course->price}}</td> --}}
{{--                            <td>{{$course->price}}</td>--}}
{{--                            <td>{{$course->teacher->username}}</td>--}}

                            <td><a href="{{ route('admin.course.show',['id' => $course->id])}}" class="btn btn-outline-primary">Show</a>
                                <a href="{{ route('admin.course.edit',['id' => $course->id])}}" class="btn btn-outline-primary">Edit</a>
                                                        <form class="d-inline" method="post" action="{{ route('admin.course.destroy',$course->id)  }}">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" class="btn btn-danger delete" value = "Delete" >
                                                        </form>
                            </td>
                    @endforeach
                @endif
                <tbody>
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
