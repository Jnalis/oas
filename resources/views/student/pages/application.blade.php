@extends('student.layouts.student_layout_1')
@section('title', 'Student | OAS')

@section('css_wizard')


@endsection

@section('content')


{{-- <div class="row container-fluid" style=" margin-top: 20px; color: #000;"> --}}
    <div class="container-fluid">


        <div class="col-lg-12 text-center">
            <h1 style="margin-top: 0px; padding-top: 0px;">APPLICATION PROCESS</h1>
            <hr>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 style="color: brown;">
                            <span>
                                IMPORTANT NOTE
                            </span>
                            <a href="{{ route('student.home') }}" class="back_login btn btn-warning">
                                Back to Login
                            </a>
                        </h5>
                    </div>
                    <div class="card-body">
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
                </div>
            </div>


            <div class="col-md-8">

                <div class="card">
                    <div class="card-header pb-4">
                        <div class="">
                            <h5 style="color: brown;"> PLEASE SELECT CORRECT OPTION BELOW</h5>

                        </div>
                    </div>
                    <div class="card-body">

                        <form action="" class="form-horizontal ng-pristine ng-valid" method="post"
                            accept-charset="utf-8">


                            <div class="form-group row"><label class="col-md-5 col-form-label">Application
                                    Type : <span class="required">*</span></label>

                                <div class="col-md-6">
                                    <select class="form-control" name="app_category" id="app_category">
                                        <option value="">[ Select Type ]</option>
                                        <option app_round="2" value="1">Certificate</option>
                                        <option app_round="2" value="2">Diploma</option>
                                        <option app_round="1" value="4">Postgraduate Diploma</option>
                                        <option app_round="1" value="5">Masters</option>
                                    </select>
                                    <input type="hidden" value="" id="app_round" name="app_round">
                                </div>
                            </div>












                        </form>
                    </div>
                </div>




            </div>


            
        </div>

    </div>
    {{--
</div> --}}

@endsection

@section('js_wizard')

@endsection
