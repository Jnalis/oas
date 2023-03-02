@extends('student.layouts.student_msater')
@section('title', 'Application Details')

@section('student')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header pb-4">
                        <div class="">
                            <h5 class="text-center" style="color: brown;"> Application Details</h5>

                        </div>
                    </div>
                    {{-- justify-content-md-center --}}
                    <div class="card-body">


                        <form action="" method="post"
                            class="employee-form">
                            @csrf
                            {{-- campuses and program --}}

                            <input type="text" name="id" value="{{ $application->id }}" hidden>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">Campus</label>
                                        <input type="text" class="form-control"
                                            value="{{ $application->campuses_name }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">
                                            Program Selected
                                        </label>

                                        <input type="text" class="form-control"
                                            value="{{ $application->application_type }}" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="col-form-label">
                                            Registration Number
                                        </label>

                                        <input type="text" class="form-control" value="{{$application->reg_no }}"
                                            readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="col-form-label" for="application_status">
                                            Chose Application Status
                                        </label>

                                        <select class="form-control select2" name="application_status" style="pointer-events: none;">
                                            <option>Select</option>

                                            <option value="approved" @if (old('application_status', $application->application_status) === "approved") {{ 'selected' }} @endif>Approved
                                            </option>

                                            <option value="not approved" @if (old('application_status', $application->application_status) === "not approved") {{ 'selected' }} @endif>Not
                                                Approved
                                            </option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    @if ($application->application_status == 'not approved')
                                    <button type="submit" class="btn btn-danger" style="margin-top: 11%" disabled>
                                        Not Yet Changed Status
                                    </button>
                                    @else
                                    <button type="submit" class="btn btn-success" style="margin-top: 11%" disabled>
                                        Status Alredy Changed
                                    </button>
                                    @endif

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
                                    <label class="col-form-label">
                                        First name
                                    </label>

                                    <input type="text" name="first_name" class="form-control"
                                        value="{{ $application->first_name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label">
                                        Middle name
                                    </label>

                                    <input type="text" name="middle_name" class="form-control"
                                        value="{{ $application->middle_name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="surname">
                                        Surname
                                    </label>

                                    <input type="text" name="surname" id="surname" class="form-control"
                                        value="{{ $application->surname }}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="gender">
                                        Gender
                                    </label>

                                    <input type="text" name="gender" id="gender" class="form-control"
                                        value="{{ $application->gender }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="dob">
                                        Date of Birth
                                    </label>

                                    <input type="date" name="dob" id="dob" class="form-control"
                                        value="{{ $application->dob }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="place_of_birth">
                                        Place of Birth
                                    </label>

                                    <input type="text" name="place_of_birth" id="place_of_birth" class="form-control"
                                        value="{{ $application->place_of_birth }}" readonly>
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
                                        value="{{ $application->pobox }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="town_city">
                                        Town/City
                                    </label>

                                    <input type="text" name="town_city" id="town_city" class="form-control"
                                        value="{{ $application->town_city }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="district">
                                        District
                                    </label>

                                    <input type="text" name="district" id="district" class="form-control"
                                        value="{{ $application->district }}" readonly>
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
                                        value="{{ $application->region }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="country">
                                        Country
                                    </label>

                                    <input type="text" name="country" id="country" class="form-control"
                                        value="{{ $application->country }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="phone_no">
                                        Phone No
                                    </label>

                                    <input type="text" name="phone_no" id="phone_no" class="form-control"
                                        value="{{ $application->phone_no }}" readonly>
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
                                        value="{{ $application->email }}" readonly>
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
                                        value="{{ $application->name_kin }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="phone_kin">
                                        Phone
                                    </label>

                                    <input type="text" name="phone_kin" id="phone_kin" class="form-control"
                                        value="{{ $application->phone_kin }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="relationship_kin">
                                        Relationship
                                    </label>

                                    <input type="text" name="relationship_kin" id="relationship_kin"
                                        class="form-control" value="{{ $application->relationship_kin }}" readonly>
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
                                        value="{{ $application->district_kin }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="town_city_kin">
                                        Town/City
                                    </label>

                                    <input type="text" name="town_city_kin" id="town_city_kin" class="form-control"
                                        value="{{ $application->town_city_kin }}" readonly>
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
                                        class="form-control" value="{{ $application->current_work_place }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="position_title">
                                        Position/Title
                                    </label>

                                    <input type="text" name="position_title" id="position_title" class="form-control"
                                        value="{{ $application->position_title }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="ward">
                                        Ward
                                    </label>

                                    <input type="text" name="ward" id="ward" class="form-control"
                                        value="{{ $application->ward }}" readonly>
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
                                        class="form-control" value="{{ $application->district_council }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="region_applicant">
                                        Region
                                    </label>

                                    <input type="text" name="region_applicant" id="region_applicant"
                                        class="form-control" value="{{ $application->region_applicant }}" readonly>
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
                                        class="form-control" value="{{ $application->appointment_years }}" readonly>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="employer_phone">
                                        Employer Phone
                                    </label>

                                    <input type="text" name="employer_phone" id="employer_phone" class="form-control"
                                        value="{{ $application->employer_phone }}" readonly>
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
                                        class="form-control" value="{{ $application->primary_school_name }}" readonly>
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
                                        class="form-control" value="{{ $application->level_of_education }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="award">
                                        Award
                                    </label>

                                    <input type="text" name="award" id="award" class="form-control"
                                        value="{{ $application->award }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="year_completed">
                                        Year Compleated
                                    </label>

                                    <input type="text" name="year_completed" id="year_completed" class="form-control"
                                        value="{{ $application->year_completed }}" readonly>
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
                                        value="{{ $application->index_number }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="examination_center">
                                        Examination Center
                                    </label>

                                    <input type="text" name="examination_center" id="examination_center"
                                        class="form-control" value="{{ $application->examination_center }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="remarks">
                                        Remarks
                                    </label>

                                    <input type="text" name="remarks" id="remarks" class="form-control"
                                        value="{{ $application->remarks }}" readonly>
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
                                        value="{{ $application->name_of_college }}" readonly>
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
                                        class="form-control" value="{{ $application->certificate_index_number }}"
                                        readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="year_completed_college">
                                        Year Compleated
                                    </label>

                                    <input type="text" name="year_completed_college" id="year_completed_college"
                                        class="form-control" value="{{ $application->year_completed_college }}"
                                        readonly>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="course_attended">
                                        Course attended
                                    </label>

                                    <input type="text" name="course_attended" id="course_attended" class="form-control"
                                        value="{{ $application->course_attended }}" readonly>
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
                                        value="{{ $application->award_college }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
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
