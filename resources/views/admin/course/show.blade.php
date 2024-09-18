@extends('admin.layout.app')
@section("breadCrumb")
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Show Student</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Teachers</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#" class="active">Show Teacher</a></li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("content")
    <table id="zero_config" class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <td>{{$course->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$course->name}}</td>
        </tr>
        <tr>
            <th>Price</th>
            <td>{{$course->price}}</td>
        </tr>
        <tr>
            <td>Teacher_name</td>
            <td>{{$course->teacher->username}}</td>
        </tr>

    </table>

@endsection
