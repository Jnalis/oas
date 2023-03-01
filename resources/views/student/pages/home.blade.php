@extends('student.layouts.student_layout_1')
@section('title', 'Student | OAS')

@section('content')
<div class="row container-fluid" style=" margin-top: 20px; margin-bottom: 150px;  ">
    <div class="col-md-8">
        <div style="color: #000; font-size: 14px;">
            <h3>Welcome to ADEM – Online Application System (OAS)</h3>
            <hr>
            <ul>
                <li>The Rector National Institute of Transport (NIT) invites suitably qualified candidates for
                    admission
                    into various programmes for the academic year 2022/2023.
                </li>
                <br>
                <li>Applicants are required to apply online through this portal and follow instructions given to
                    complete their
                    applications.
                    <b>Payment can be done via mobile money (M-Pesa, Tigo Pesa and Airtel Money) or directly
                        into NIT bank
                        account - after getting control number</b>.
                </li>
                <br>
                <li>In case of Technical Problems during the application process please contact our IT Staff at
                    <strong>0623918484/0629226409/0783203065/0755885771/0656635699</strong>. For issues to deal
                    with courses of
                    study and clarifications of Entry requirements please contact our Admissions office at
                    <strong>0658858058/0755380075/0782422199 /0762202215/0684757774</strong>
                    .<br>
                    <strong>Applicants must</strong>: Carefully read and understand the Programmes
                    {{-- <a download="16221090486497.pdf" href="https://oas.nit.ac.tz/./uploads/docs/16221090486497.pdf"
                        style=" font-weight: bold; text-decoration: underline;">Admission Requirements</a> --}}
                </li>
                <br>
                <li>
                    <strong>DEADLINE :</strong><br>
                    <i class="fa fa-minus"></i>
                    <span style="font-weight: bold;">
                        &nbsp; October 04, 2022 for Certificate &amp; Diploma &nbsp; Round II</span>
                    <br>
                    <i class="fa fa-minus"></i>
                    <span style="font-weight: bold;">
                        &nbsp; November 08, 2022 for Postgraduate &nbsp; Round
                        I</span>
                    <br>
                </li>
                <br>
                <li>Click link to start application:
                    <a href="{{ route('student.apply_form') }}" style="font-weight: bold; text-decoration: underline;">
                        Start Application
                    </a>.
                </li>
                <!--   <li>Click link to re-apply: <a href="https://oas.nit.ac.tz/index.php/application_reapply"  style="font-weight: bold; text-decoration: underline;">Start Re-Application</a></li> -->


                <br>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <h4 class="text-muted text-center font-size-18">
            <b>Student Login</b>
        </h4>

        <div class="p-3">
            <form method="POST" action="" class="form-horizontal mt-3">
                @csrf

                <div class="form-group mb-3 row">
                    <div class="col-12">
                        <input class="form-control" type="text" required placeholder="Username" id="username"
                            name="username" value="{{ old('username') }}" autofocus>
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <div class="col-12">
                        <input class="form-control" type="password" required placeholder="Password" id="password"
                            name="password" autocomplete="current-password">
                    </div>
                </div>

                <div class="form-group mb-3 row">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="form-label ms-1" for="customCheck1">Remember me</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3 text-center row mt-3 pt-1">
                    <div class="col-12">
                        <button class="btn btn-info w-100 waves-effect waves-light" type="submit">
                            Log In
                        </button>
                    </div>
                </div>

                <div class="form-group mb-0 row mt-2">
                    <div class="col-sm-7 mt-3">
                        <a href="{{ route('password.request') }}" class="text-muted">
                            <i class="mdi mdi-lock"></i>
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
