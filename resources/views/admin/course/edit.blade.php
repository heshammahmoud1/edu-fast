<?php
?>
@extends("admin.layout.app")
@section("breadCrumb")
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Add Course</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Course</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#" class="active">Add New</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("content")
    <div class="card">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger"> {{ $error }} </li>

            @endforeach

        @endif
{{--        @if (session()->has('msg'))--}}

{{--            <p class="alert alert-success">{{session('msg')}}</p>--}}

{{--        @endif--}}
        <form class="form-horizontal" action="{{route('admin.course.update',$course->id)}}"
              enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group row">
                    <label
                        for="crsName" class="col-sm-3 text-end control-label col-form-label">Course Name</label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            id="crsName"
                            placeholder="First Name Here"
                            name="name"
                            value="{{$course['name']}}"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="teacherName"
                        class="col-sm-3 text-end control-label col-form-label">Select a Teacher :</label
                    >
                    <div class="col-sm-9">

                        <select name="teacher_id" id="teacher">
                            <option value="">Select a Teacher </option>
                            @foreach ($teachers as $teacher)
{{--                                <option value="{{$teacher['id']}}">{{$teacher['username']}}</option>--}}
                                <option value="{{$teacher->id}}" @if($course->teacher_id == $teacher->id )  selected @endif>
                                    {{$teacher->username}}</option>

                            @endforeach

                        </select>

                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="price"
                        class="col-sm-3 text-end control-label col-form-label"
                    >Price</label
                    >
                    <div class="col-sm-9">
                        <input
                            type="number"
                            class="form-control"
                            id="price"
                            placeholder="Enter Price Here"
                            name="price"
                            value="{{$course['price']}}"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="image"
                        class="col-sm-3 text-end control-label col-form-label"
                    >Image</label
                    >
                    <div class="col-sm-9">
                        <input
                            type="file"
                            class="form-control"
                            id="image"
                            placeholder="First Name Here"
                            name="image"
                        />
                    </div>
                </div>

            </div>

            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        Add
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
