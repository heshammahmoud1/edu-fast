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
                    <th>Course_id</th>
                    <th>CourseName</th>
                    <th>Price</th>
                    <th>Teacher_name</th>

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
                            <td>{{$course->price}}</td>
                            <td>{{$course->teacher->username}}</td>

                            <td>
                                <button class="btn btn-primary">Edit</button>
                                <button class="btn btn-danger">
                                    <a >Delete</a>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
                <tbody>
                <tr>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
