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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <td>Created_at</td>
                    <td>Control</td>

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
                    <td>{{ $teacher->email }}</td>
                    <td>{{$teacher->phone}}</td>
                    <td>{{ $teacher ->created_at}}</td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">
                            <a >Delete</a>
                        </button>
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
@endsection
