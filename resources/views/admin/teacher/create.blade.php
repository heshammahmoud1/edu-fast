@extends('admin.layout.app');
@section('breadcrumb')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">teachers</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="#">Add teacher</a></li>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="card">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li class="alert alert-danger"> {{ $error }} </li>

            @endforeach

        @endif
        @if (session()->has('msg'))

     <p class="alert alert-success">{{session('msg')}}</p>

        @endif
        <form class="form-horizontal" action="{{ route('admin.teacher.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group row">



                    <div class="form-group row">
                        <label
                            for="username"
                            class="col-sm-3 text-end control-label col-form-label"
                        >username</label
                        >
                        <div class="col-sm-9">
                            <input value="{{ old('username') }}"
                                   type="text"
                                   class="form-control"
                                   id="username"
                                   placeholder="username Here"
                                   name="username"
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
                            <input value="{{ old('email') }}"
                                   type="email"
                                   class="form-control"
                                   id="email"
                                   placeholder="email Here"
                                   name="email"
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
                            <input value="{{ old('phone') }}"
                                   type="text"
                                   class="form-control"
                                   id="phone"
                                   placeholder="phone Here"
                                   name="phone"
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
                            <input value="{{ old('password') }}"
                                   type="password"
                                   class="form-control"
                                   id="password"
                                   placeholder="password Here"
                                   name="password"
                            />
                        </div>
                    </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">
                                Add
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
