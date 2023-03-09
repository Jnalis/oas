@extends('student.layouts.student_layout_1')
@section('title', 'Student | OAS')

@section('content')


<div class="container" id="home">


    <div class="col-lg-12 text-center">
        <h1>APPLICATION PROCESS</h1>
        <hr>
    </div>


    <div class="row">
        <div class="col-md-4">
            @include('student.includes.application_tips')
        </div>


        <div class="col-md-8">

            <div class="card">
                <div class="card-header pb-4">
                    <div class="">
                        <h5 style="color: brown;"> PLEASE FILL THIS FORM CORRECTLY</h5>

                    </div>
                </div>
                {{-- justify-content-md-center --}}
                <div class="card-body">


                    <form method="POST" action="" id="multi-step-form" >
                        @csrf
                        {{-- campuses and program --}}
                        <div id="step-1">
                            <P>SELECT CAMPUS AND PROGRAM</P>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="campuses_name">
                                            Select Campuses
                                        </label>

                                        <select
                                            class="form-control select2bs4 @error('campuses_name') is-invalid @enderror"
                                            name="campuses_name" required>
                                            <option></option>

                                            @foreach ($campuses as $item)

                                            <option value="{{ $item->id }}" {{
                                                old('campuses_name')=="$item->campuses_name" ? "selected" : "" }}>
                                                {{ $item->campuses_name }}</option>

                                            @endforeach
                                        </select>

                                        @error('campuses_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="application_type">
                                            Select Program
                                        </label>

                                        <select class="form-control select2" name="application_type" required>
                                            <option></option>

                                            @foreach ($application as $item)

                                            <option value="{{ $item->id }}" {{
                                                old('application_type')=="$item->application_type" ? "selected" : "" }}>
                                                {{ $item->application_type }}</option>



                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary next-step" onclick="validateStep()">Next</button>
                            </div>
                        </div>

                        <div id="step-2">
                            <P>PERSONAL INFORMATIONS</P>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="first_name">
                                            First name
                                        </label>

                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            value="{{ old('first_name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="middle_name">
                                            Middle name
                                        </label>

                                        <input type="text" name="middle_name" id="middle_name" class="form-control"
                                            value="{{ old('middle_name') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="surname">
                                            Surname
                                        </label>

                                        <input type="text" name="surname" id="surname" class="form-control"
                                            value="{{ old('surname') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="Male">Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender"
                                                value="Female">Female
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="dob">
                                            Date of Birth
                                        </label>

                                        <input type="date" name="dob" id="dob" class="form-control"
                                            value="{{ old('dob') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="place_of_birth">
                                            Place of Birth
                                        </label>

                                        <input type="text" name="place_of_birth" id="place_of_birth"
                                            class="form-control" value="{{ old('place_of_birth') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning prev-step">Previous</button>
                                <button class="btn btn-primary next-step">Next</button>
                            </div>
                        </div>

                        <div id="step-3">
                            <P>WORKING ADDRESS</P>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="pobox">
                                            P.O.Box
                                        </label>

                                        <input type="text" name="pobox" id="pobox" class="form-control"
                                            value="{{ old('pobox') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="town_city">
                                            Town/City
                                        </label>

                                        <input type="text" name="town_city" id="town_city" class="form-control"
                                            value="{{ old('town_city') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="district">
                                            District
                                        </label>

                                        <input type="text" name="district" id="district" class="form-control"
                                            value="{{ old('district') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="region">
                                            Region
                                        </label>

                                        <input type="text" name="region" id="region" class="form-control"
                                            value="{{ old('region') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="country">
                                            Country
                                        </label>

                                        <input type="text" name="country" id="country" class="form-control"
                                            value="{{ old('country') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="phone_no">
                                            Phone No
                                        </label>

                                        <input type="text" name="phone_no" id="phone_no" class="form-control"
                                            value="{{ old('phone_no') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="email">
                                            Email
                                        </label>

                                        <input type="email" name="email" id="email" class="form-control"
                                            value="{{ old('email') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning prev-step">Previous</button>
                                <button class="btn btn-primary next-step">Next</button>
                            </div>
                        </div>

                        <div id="step-4">
                            <P>NEXT OF KIN INFORMATIONS</P>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="name_kin">
                                            Name
                                        </label>

                                        <input type="text" name="name_kin" id="name_kin" class="form-control"
                                            value="{{ old('name_kin') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="phone_kin">
                                            Phone
                                        </label>

                                        <input type="text" name="phone_kin" id="phone_kin" class="form-control"
                                            value="{{ old('phone_kin') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="relationship_kin">
                                            Relationship
                                        </label>

                                        <input type="text" name="relationship_kin" id="relationship_kin"
                                            class="form-control" value="{{ old('relationship_kin') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="district_kin">
                                            District
                                        </label>

                                        <input type="text" name="district_kin" id="district_kin" class="form-control"
                                            value="{{ old('district_kin') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="town_city_kin">
                                            Town/City
                                        </label>

                                        <input type="text" name="town_city_kin" id="town_city_kin" class="form-control"
                                            value="{{ old('town_city_kin') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning prev-step">Previous</button>
                                <button class="btn btn-primary next-step">Next</button>
                            </div>
                        </div>

                        <div id="step-5">
                            <P>APPLICANT'S DETAILS</P>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="current_work_place">
                                            Current Working Place
                                        </label>

                                        <input type="text" name="current_work_place" id="current_work_place"
                                            class="form-control" value="{{ old('current_work_place') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="position_title">
                                            Position/Title
                                        </label>

                                        <input type="text" name="position_title" id="position_title"
                                            class="form-control" value="{{ old('position_title') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="ward">
                                            Ward
                                        </label>

                                        <input type="text" name="ward" id="ward" class="form-control"
                                            value="{{ old('ward') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="district_council">
                                            District/Council
                                        </label>

                                        <input type="text" name="district_council" id="district_council"
                                            class="form-control" value="{{ old('district_council') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="region_applicant">
                                            Region
                                        </label>

                                        <input type="text" name="region_applicant" id="region_applicant"
                                            class="form-control" value="{{ old('region_applicant') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="appointment_years">
                                            Number of Years From first Appointment
                                        </label>

                                        <input type="text" name="appointment_years" id="appointment_years"
                                            class="form-control" value="{{ old('appointment_years') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="employer_phone">
                                            Employer Phone
                                        </label>

                                        <input type="text" name="employer_phone" id="employer_phone"
                                            class="form-control" value="{{ old('employer_phone') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning prev-step">Previous</button>
                                <button class="btn btn-primary next-step">Next</button>
                            </div>
                        </div>

                        <div id="step-6">
                            <P>EDUCATION BACKGROUND</P>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="primary_school_name">
                                            Primary School Name
                                        </label>

                                        <input type="text" name="primary_school_name" id="primary_school_name"
                                            class="form-control" value="{{ old('primary_school_name') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="level_of_education">
                                            Level of Education
                                        </label>

                                        <input type="text" name="level_of_education" id="level_of_education"
                                            class="form-control" value="{{ old('level_of_education') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="award">
                                            Award
                                        </label>

                                        <input type="text" name="award" id="award" class="form-control"
                                            value="{{ old('award') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="year_completed">
                                            Year Compleated
                                        </label>

                                        <input type="text" name="year_completed" id="year_completed"
                                            class="form-control" value="{{ old('year_completed') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="index_number">
                                            Index Number
                                        </label>

                                        <input type="text" name="index_number" id="index_number" class="form-control"
                                            value="{{ old('index_number') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="examination_center">
                                            Examination Center
                                        </label>

                                        <input type="text" name="examination_center" id="examination_center"
                                            class="form-control" value="{{ old('examination_center') }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="remarks">
                                            Remarks
                                        </label>

                                        <input type="text" name="remarks" id="remarks" class="form-control"
                                            value="{{ old('remarks') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning prev-step">Previous</button>
                                <button class="btn btn-primary next-step">Next</button>
                            </div>
                        </div>


                        <div id="step-7">

                            <P>EDUCATION BACKGROUND
                                <br>
                                <small>College / Institution attended</small>
                            </P>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="name_of_college">
                                            Name of college
                                        </label>

                                        <input type="text" name="name_of_college" id="name_of_college"
                                            class="form-control" value="{{ old('name_of_college') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="certificate_index_number">
                                            Certificate Number/Index Number
                                        </label>

                                        <input type="text" name="certificate_index_number" id="certificate_index_number"
                                            class="form-control" value="{{ old('certificate_index_number') }}">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="year_completed_college">
                                            Year Compleated
                                        </label>

                                        <input type="text" name="year_completed_college" id="year_completed_college"
                                            class="form-control" value="{{ old('year_completed_college') }}">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label" for="course_attended">
                                            Course attended
                                        </label>

                                        <input type="text" name="course_attended" id="course_attended"
                                            class="form-control" value="{{ old('course_attended') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-form-label" for="award_college">
                                            Award
                                        </label>

                                        <input type="text" name="award_college" id="award_college" class="form-control"
                                            value="{{ old('award_college') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-warning prev-step">Previous</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>



                        {{-- <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div> --}}

                    </form>

                </div>
            </div>
        </div>
    </div>



</div>



@endsection

@section('js_wizard')

<script>
    $(document).ready(function() {
        var currentStep = 1;
        var stepsCount = $('#multi-step-form > div').length;

        // console.log(stepsCount);

        showStep(currentStep);

        $('.next-step').click(function() {
            // if (validateStep(currentStep)) {
            if (currentStep) {
                currentStep++;
                showStep(currentStep);
            }
        });

        $('.prev-step').click(function() {
            currentStep--;
            showStep(currentStep);
        });

        $('form button').on("click",function(e){
            e.preventDefault();
        });

        $('#multi-step-form').submit(function(event) {

            event.preventDefault();

            var formData = $(this).serialize();

            $.ajax({
                url: 'student/application/form/submit',
                type: 'POST',
                data: formData,
                success: function(data) {
                    console.log(data);
                }
            });
        });

        function showStep(step) {
            $('#multi-step-form > div').hide();
            $('#step-' + step).show();
            if (step == 1) {
                $('.prev-step').hide();
            } else {
                $('.prev-step').show();
            }
            if (step == stepsCount) {
                $('.next-step').hide();
                $('input[type="submit"]').show();
            } else {
                $('.next-step').show();
            }
        }

        function validateStep(step){
            alert('you clicked me');
            // this.el.checkValidity && !this.el.checkValidity()
        }


    });
</script>

@endsection
