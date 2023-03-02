@extends('admin.layouts.admin_msater')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header pb-4">
                        <div class="">
                            <h5 class="text-center" style="color: brown;"> Application Details for {{
                                $application->reg_no }}</h5>

                        </div>
                    </div>
                    {{-- justify-content-md-center --}}
                    <div class="card-body">


                        <form action="{{ route('student.application.store') }}" method="post" class="employee-form">
                            @csrf
                            {{-- campuses and program --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Campus</label>
                                        <input type="text" class="form-control" value="{{ old('first_name') }}">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for="first_name">
                                            First name
                                        </label>

                                        <input type="text" name="first_name" id="first_name" class="form-control"
                                            value="{{ old('first_name') }}">
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="text-uppercase">
                            Personal Information
                        </h6>
                    </div>
                    <div class="card-body">
                        {{-- personal info --}}
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
                                        <input type="radio" class="form-check-input" name="gender" value="Female">Female
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

                                    <input type="text" name="place_of_birth" id="place_of_birth" class="form-control"
                                        value="{{ old('place_of_birth') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="text-uppercase">
                            Working Mail Address
                        </h6>
                    </div>
                    <div class="card-body">
                        {{-- Address --}}
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
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h6 class="text-uppercase">
                            Next of Kin Details
                        </h6>
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="text-uppercase">
                            Applicant's Details
                        </h6>
                    </div>
                    <div class="card-body">
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

                                    <input type="text" name="position_title" id="position_title" class="form-control"
                                        value="{{ old('position_title') }}">
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

                                    <input type="text" name="employer_phone" id="employer_phone" class="form-control"
                                        value="{{ old('employer_phone') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="text-uppercase">
                            Education Background
                        </h6>
                    </div>
                    <div class="card-body">
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

                                    <input type="text" name="year_completed" id="year_completed" class="form-control"
                                        value="{{ old('year_completed') }}">
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
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h6 class="text-uppercase">
                            Education Background
                            <small>
                                College / Institution attended
                            </small>
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-form-label" for="name_of_college">
                                        Name of college
                                    </label>

                                    <input type="text" name="name_of_college" id="name_of_college" class="form-control"
                                        value="{{ old('name_of_college') }}">
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

                                    <input type="text" name="course_attended" id="course_attended" class="form-control"
                                        value="{{ old('course_attended') }}">
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
                    </div>
                </div>


                <div class="mt-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                </div>

                </form>


            </div>


        </div> <!-- end col -->
    </div>

</div>

{{-- starts jquery to load image --}}
<script src="{{ asset('backend/plugins/jquery-3.5.1.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#image').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_image').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
{{-- ends jquery --}}
@endsection
