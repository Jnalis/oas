@extends('student.layouts.student_layout_1')
@section('title', 'Student | OAS')

@section('content')
<div class="container" id="" style="margin-bottom: 90px">
    <div class="row">
        <div class="col-md-12">
            <marquee behavior="scroll" direction="left" scrollamount="5" width="">
                <h3>Welcome to ADEM – Online Application System (OAS)</h3>
            </marquee>
        </div>
    </div>
    <div class="row">

        <div class="col-md-2"></div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-muted text-center font-size-18">
                        <b>Login Here</b>
                    </h4>

                    <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-3">
                        @csrf

                        <div class="form-group mb-3 row">
                            <div class="col-md-12">
                                <label class="col-form-label" for="username">
                                    Username
                                </label>
                                <input class="form-control" type="text" required placeholder="Username" id="username"
                                    name="username" value="{{ old('username') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-md-12">
                                <label class="col-form-label" for="password">
                                    Password
                                </label>
                                <input class="form-control" type="password" required placeholder="Password"
                                    id="password" name="password" autocomplete="current-password">
                            </div>
                        </div>

                        {{-- <div class="form-group mb-3 row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="form-label ms-1" for="customCheck1">Remember me</label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group mb-3 text-center row mt-3 pt-1">
                            <div class="col-md-12">
                                <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                                    Log In
                                </button>
                            </div>
                        </div>

                        {{-- <div class="form-group mb-0 row mt-2">
                            <div class="col-sm-7 mt-3">
                                <a href="{{ route('password.request') }}" class="text-muted">
                                    <i class="mdi mdi-lock"></i>
                                    Forgot your password?
                                </a>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>

        </div>

        <div class="col-md-2"></div>
    </div>
</div>
@endsection
