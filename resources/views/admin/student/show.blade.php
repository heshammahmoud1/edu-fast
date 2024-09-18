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
                            <li class="breadcrumb-item"><a href="#">Students</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#" class="active">Show Student</a></li>
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
            <td>{{$student->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$student->username}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$student->email}}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{$student->phone}}</td>
        </tr>
    </table>
@endsection
