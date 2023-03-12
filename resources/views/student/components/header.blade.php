<div id="header_div">

    <nav class="navbar navbar-static-top" role="navigation">

        <div id="header_logo">
            <img src="{{ asset('logo/logo.png') }}">
        </div>
        <div id="header_content">
            <div id="header_content_college">
                AGENCY FOR THE DEVELOPMENT OF EDUCATIONAL MANAGEMENT [ADEM]
            </div>
            <div id="header_content_sims">
                ONLINE APPLICATION SYSTEM
            </div>
        </div>
        <div style="clear: both;"></div>
    </nav>
</div>

<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="text text-uppercase btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#welcome_note">
                        Welecome Note
                    </span>
                </div>
                <div class="col-md-4">
                    <span class="text text-uppercase btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#instructions">
                        Instructions
                    </span>
                </div>
                {{-- <div class="col-md-3">
                    <span class="text text-uppercase btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#application_tips">
                        Applications Tips
                    </span>
                </div> --}}
                <div class="col-md-4">
                    <span class="text text-uppercase btn btn-info" data-bs-toggle="modal" data-bs-target="#contact_us">
                        Contact US
                    </span>
                </div>
            </div>


            <div class="row mt-4" style="font-size: 18px">
                <div class="col-md-4">
                    @php
                    $year_now = date('Y');
                    $prev_year = $year_now - 1;
                    @endphp
                    <span>March Intake</span>
                    <i class="fa fa-minus"></i>
                    <b>{{$prev_year}}/{{$year_now}}</b>

                </div>
                <div class="col-md-4">
                    <span>Deadline</span>
                    <i class="fa fa-minus"></i>
                    <span style="font-weight: bold;">
                        March 30, 2023.
                    </span>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('student.apply_form') }}" style="font-weight: bold; text-decoration: underline;">
                        Start Application Here
                    </a>.
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="welcome_note" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">
                    Welcome to ADEM – Online Application System (OAS)
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    The Agency for the Development of Educational Management invites applications for admission
                    from
                    qualified candidates into its Diploma programmes at The Agency for the Development of
                    Educational
                    Management for March, 2023 intake for Academic Year <b>{{$prev_year}}/{{$year_now}}</b>.
                </p>
                <br>
                <p>
                    Once admitted into The Agency for the Development of Educational Management (ADEM),
                    successful
                    applicants will be expected to report for studies on April, <b>{{$year_now}}</b> for
                    Academic Year
                    <b>{{$prev_year}}/{{$year_now}}</b>.

                    {{-- <b>Payment can be done via mobile money (M-Pesa, Tigo Pesa and Airtel Money) or
                        directly
                        into NIT bank
                        account - after getting control number</b>. --}}
                </p>
                <br>
                <p>
                    Applicants are reminded to register their names as they appear in Ordinary Certificate of
                    Secondary
                    Education (CSE) and Advanced Certificate of Secondary Education (ACSE) including index
                    numbers where
                    prompted.
                </p>
                <br>
                <p>
                    Applicants with foreign certificates are required to first present their certificates to the
                    National Examinations Council of Tanzania (NECTA) for verification at: <a
                        href="https://www.necta.go.tz/">NECTA</a> NECTA will issue them letters showing
                    equivalence
                    numbers and grades. Applicants with equivalent qualifications (e.g. holders of diplomas and
                    certificates) are advised to obtain an award verification number (AVN) from the National
                    Council for
                    Technical Education (NACTE) at <a href="https://www.nacte.go.tz/">NACTE</a>
                </p>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>





<div class="modal fade" id="instructions" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">ADEM Instruction</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td class="no-borders">1. Your name must be the same as in Form IV
                            Certificate</td>
                    </tr>
                    <tr>
                        <td> 2. Date of Birth must be the same as in Birth Certificate</td>
                    </tr>
                    <tr>
                        <td> 3. Form IV index Number must be the same as in Form IV Certificate</td>
                    </tr>
                    <tr>
                        <td> 4. <span class="apply_form_bold">Failure to any of the above, Your application will
                                be
                                disqualified </span></td>
                    </tr>
                    <tr>
                        <td> 5. Make sure <b>Application Type</b> and <b>Entry Type</b> are correct
                            before submit form in the right side because you will not be able to
                            start any new application</td>
                    </tr>
                    <tr>
                        <td> 6. Once Form IV Index Number Registered, you will not be able to change
                            it.</td>
                    </tr>
                    <tr>
                        <td> 7. <strong>Application fee must be paid within four (4) days from the
                                first day of filling an application, otherwise your account will be
                                deleted permanent.</strong></td>
                    </tr>
                    <tr>
                        <td> 8. <strong>Make sure you read Admission requirement before
                                selecting/Choose programmes.</strong></td>
                    </tr>

                </table>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>





{{-- <div class="modal fade" id="application_tips" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Terms &amp; Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <tr>
                        <td class="no-borders">1. Your name must be the same as in Form IV
                            Certificate</td>
                    </tr>
                    <tr>
                        <td> 2. Date of Birth must be the same as in Birth Certificate</td>
                    </tr>
                    <tr>
                        <td> 3. Form IV index Number must be the same as in Form IV Certificate</td>
                    </tr>
                    <tr>
                        <td> 4. <span class="apply_form_bold">Failure to any of the above, Your application will
                                be
                                disqualified </span></td>
                    </tr>
                    <tr>
                        <td> 5. Make sure <b>Application Type</b> and <b>Entry Type</b> are correct
                            before submit form in the right side because you will not be able to
                            start any new application</td>
                    </tr>
                    <tr>
                        <td> 6. Once Form IV Index Number Registered, you will not be able to change
                            it.</td>
                    </tr>
                    <tr>
                        <td> 7. <strong>Application fee must be paid within four (4) days from the
                                first day of filling an application, otherwise your account will be
                                deleted permanent.</strong></td>
                    </tr>
                    <tr>
                        <td> 8. <strong>Make sure you read Admission requirement before
                                selecting/Choose programmes.</strong></td>
                    </tr>

                </table>
            </div>
        </div><!-- /.modal-content -->
    </div>
</div> --}}





<div class="modal fade" id="contact_us" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">For Any Enquires Please Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

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
            </div>
        </div><!-- /.modal-content -->
    </div>
</div>

