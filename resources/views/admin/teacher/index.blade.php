<?php
?>
@extends('admin.layout.app')

@section("breadCrumb")
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-techers-center">
                <h4 class="page-title">Teachers</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-techer"><a href="#">Home</a></li>
                            <li class="breadcrumb-techer active" aria-current="page">
                                <a href="#" class="active">teacher</a>
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
                    <th>Name</th>
                    <td>Action</td>

                </tr>
                </thead>
                <tbody>
                @if($data->isEmpty())
                    <tr>
                        <p  class="text-center alert alert-danger">No data found.</p>

                    </tr>
                @else
                    @foreach($data as $teacher)
                        <tr>
                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->username}}</td>
{{--                            <i class="fa-regular fa-eye"></i>--}}
                            <td><a href="{{ route('admin.teacher.show',['id' => $teacher->id])}}" class="btn btn-primary">Show</a>
                                <a href="{{ route('admin.teacher.edit',['id' => $teacher->id])}}" class="btn btn-outline-primary">Edit</a>

                                                        <form class="d-inline" method="post" action="{{ route('admin.teacher.destroy',$teacher->id)  }}">
                                                            @csrf
                                                            @method('delete')
                                                            <input type="submit" class="btn btn-danger delete" value = "Delete" >
                                                        </form>
                            </td>
                        </tr>
                    @endforeach
                @endif
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
