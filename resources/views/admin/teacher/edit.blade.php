<?php
?>
@extends("admin.layout.app")
@section("breadCrumb")
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">edit teacher</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">teacher</a></li>
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
        <form class="form-horizontal" action="{{route('admin.teacher.update',$teacher->id)}}"
              enctype="multipart/form-data" method="post">
            @csrf
            @method('PUT')
            <div class="card-body">

                <div class="form-group row">
                    <label
                        for="crsName" class="col-sm-3 text-end control-label col-form-label">teacher username</label>
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            id="crsName"
                            placeholder="First Name Here"
                            name="username"
                            value="{{$teacher['username']}}"
                        />
                    </div>
                </div>
         
                <div class="form-group row">
                    <label
                        for="email"
                        class="col-sm-3 text-end control-label col-form-label"
                    >email</label
                    >
                    <div class="col-sm-9">
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter email Here"
                            name="email"
                            value="{{$teacher['email']}}"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="phone"
                        class="col-sm-3 text-end control-label col-form-label"
                    >phone</label
                    >
                    <div class="col-sm-9">
                        <input
                            type="text"
                            class="form-control"
                            id="phone"
                            placeholder="Enter phone Here"
                            name="phone"
                            value="{{$teacher['phone']}}"
                        />
                    </div>
                </div>
                <div class="form-group row">
                    <label
                        for="password"
                        class="col-sm-3 text-end control-label col-form-label"
                    >password</label
                    >
                    <div class="col-sm-9">
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            placeholder="Enter password Here"
                            name="password"
                            value="{{$teacher['password']}}"
                        />
                    </div>
                </div>
                

            </div>

            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">
                        edit
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
