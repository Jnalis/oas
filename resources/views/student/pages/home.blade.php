@extends('student.layouts.student_layout_1')
@section('title', 'Student | OAS')

@section('content')
<div class="row container-fluid" id="home">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">


                <div style="color: #000; font-size: 14px;">
                    <h3>Welcome to ADEM – Online Application System (OAS)</h3>
                    <br>
                    <h6>
                        @php
                        $year_now = date('Y');
                        $prev_year = $year_now - 1;
                        @endphp
                        INVITATION TO APPLY FOR ADMISSION INTO DIPLOMA PROGRAMMES FOR MARCH,
                        <b>{{$prev_year}}/{{$year_now}}</b>
                        INTAKE
                    </h6>
                    <hr>
                    <ul>

                        <li>
                            The Agency for the Development of Educational Management invites applications for admission
                            from
                            qualified candidates into its Diploma programmes at The Agency for the Development of
                            Educational
                            Management for March, 2023 intake for Academic Year <b>{{$prev_year}}/{{$year_now}}</b>.
                        </li>
                        <br>
                        <li>
                            Once admitted into The Agency for the Development of Educational Management (ADEM),
                            successful
                            applicants will be expected to report for studies on April, <b>{{$year_now}}</b> for
                            Academic Year
                            <b>{{$prev_year}}/{{$year_now}}</b>.

                            {{-- <b>Payment can be done via mobile money (M-Pesa, Tigo Pesa and Airtel Money) or
                                directly
                                into NIT bank
                                account - after getting control number</b>. --}}
                        </li>
                        <br>
                        <li>
                            Applicants are reminded to register their names as they appear in Ordinary Certificate of
                            Secondary
                            Education (CSE) and Advanced Certificate of Secondary Education (ACSE) including index
                            numbers where
                            prompted.
                        </li>
                        <br>
                        <li>
                            Applicants with foreign certificates are required to first present their certificates to the
                            National Examinations Council of Tanzania (NECTA) for verification at: <a
                                href="https://www.necta.go.tz/">NECTA</a> NECTA will issue them letters showing
                            equivalence
                            numbers and grades. Applicants with equivalent qualifications (e.g. holders of diplomas and
                            certificates) are advised to obtain an award verification number (AVN) from the National
                            Council for
                            Technical Education (NACTE) at <a href="https://www.nacte.go.tz/">NACTE</a>
                        </li>
                        <br>
                        <li>
                            <strong>DEADLINE :</strong><br>
                            <i class="fa fa-minus"></i>
                            <span style="font-weight: bold;">
                                March 30, 2023.
                            </span>
                            <br>
                        </li>
                        <br>
                        <li>Click link to start application:
                            <a href="{{ route('student.apply_form') }}"
                                style="font-weight: bold; text-decoration: underline;">
                                Start Application
                            </a>.
                        </li>
                        <br>
                        <li>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>HELP DESK</th>
                                        <th>MBEYA CAMPUS</th>
                                        <th>MWANZA CAMPUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>+255-23-2440022/2440216</td>
                                        <td>+255787226552</td>
                                        <td>+255679649443</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">+255754573871
                                            <br>
                                            +255672751145
                                        </td>

                                    </tr>
                                    <tr>
                                        <td><a href="mailto:adem@adme.ac.tz">Email Us</a></td>
                                        <td><a href="mailto:ademby@adem.ac.tz">Email Us</a></td>
                                        <td><a href="mailto:ademwz@adem.ac.tz">Email Us</a></td>
                                    </tr>


                                </tbody>
                            </table>
                        </li>

                        <!--   <li>Click link to re-apply: <a href="https://oas.nit.ac.tz/index.php/application_reapply"  style="font-weight: bold; text-decoration: underline;">Start Re-Application</a></li> -->


                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="text-muted text-center font-size-18">
                    <b>Login Here</b>
                </h4>

                <div class="p-3">
                    <form method="POST" action="{{ route('login') }}" class="form-horizontal mt-3">
                        @csrf

                        <div class="form-group mb-3 row">
                            <div class="col-12">
                                <label class="col-form-label" for="username">
                                    Username
                                </label>
                                <input class="form-control" type="text" required placeholder="Username" id="username"
                                    name="username" value="{{ old('username') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group mb-3 row">
                            <div class="col-12">
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
                            <div class="col-12">
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

    </div>
</div>
@endsection
