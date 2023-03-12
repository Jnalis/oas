@extends('student.layouts.student_msater')

@section('title', 'View Profile')


@section('student')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Profile Details</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('student.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Profile Details</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        {{-- Personal Details --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">


                    <div class="card-body">

                        <h4 class="card-title">Profile Details</h4>


                        <table class="table table-bordered table-striped mb-0" >

                            <thead>
                                <tr>
                                    <th class="font-weight-bold text-uppercase">Particular</th>
                                    <th class="font-weight-bold text-uppercase">Value</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="font-weight-bold text-uppercase">Firstname</td>
                                    <td>{{ $personal_info->first_name }}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold text-uppercase">Middlename</td>
                                    <td>{{ $personal_info->middle_name }}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold text-uppercase">Surname</td>
                                    <td>{{ $personal_info->surname }}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold text-uppercase">Gender</td>
                                    <td>{{ $personal_info->gender }}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold text-uppercase">Date of Birth</td>
                                    <td>{{ $personal_info->dob }}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold text-uppercase">Place of Birth</td>
                                    <td>{{ $personal_info->place_of_birth }}</td>
                                </tr>

                                <tr>
                                    <td class="font-weight-bold text-uppercase">Action</td>
                                    <td>
                                        <a href="{{ route('student.show_application', $personal_info->id) }}"
                                            class="btn btn-primary">
                                            <i class=" ri-eye-line"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->

        </div>


        {{-- Contact and Address Details --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Contact and Address Details</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th>P.o.box</th>
                                        <th>City</th>
                                        <th>District</th>
                                        <th>Region</th>
                                        <th>Country</th>
                                        <th>Phone No</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $personal_info->pobox }}</td>
                                        <td>{{ $personal_info->town_city }}</td>
                                        <td>{{ $personal_info->district }}</td>
                                        <td>{{ $personal_info->region }}</td>
                                        <td>{{ $personal_info->country }}</td>
                                        <td>{{ $personal_info->phone_no }}</td>
                                        <td>{{ $personal_info->email }}</td>
                                        <td>
                                            <a href="{{ route('student.show_application', $personal_info->id) }}"
                                                class="btn btn-primary">
                                                <i class=" ri-edit-2-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

        {{-- Next of Details --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Next of Kin Details</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone No</th>
                                        <th>Relationship</th>
                                        <th>District</th>
                                        <th>City</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($student_kin_info))
                                    @foreach ($student_kin_info as $info)
                                    <tr>
                                        <td>{{ $info->name_kin }}</td>
                                        <td>{{ $info->phone_kin }}</td>
                                        <td>{{ $info->relationship_kin }}</td>
                                        <td>{{ $info->district_kin }}</td>
                                        <td>{{ $info->town_city_kin }}</td>
                                        <td>
                                            <a href="{{ route('student.show_application', $info->personal_id) }}"
                                                class="btn btn-primary">
                                                <i class=" ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text text-center">No Data</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>


        {{-- Student Details/Working Details --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Working Details</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th>Working Place</th>
                                        <th>Position</th>
                                        <th>Ward</th>
                                        <th>District</th>
                                        <th>Region</th>
                                        <th>No of Years Worked</th>
                                        <th>Employer Phone No</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($student_working_info))
                                    @foreach ($student_working_info as $info)
                                    <tr>
                                        <td>{{ $info->current_work_place }}</td>
                                        <td>{{ $info->position_title }}</td>
                                        <td>{{ $info->ward }}</td>
                                        <td>{{ $info->district_council }}</td>
                                        <td>{{ $info->region_applicant }}</td>
                                        <td>{{ $info->appointment_years }}</td>
                                        <td>{{ $info->employer_phone }}</td>
                                        <td>
                                            <a href="{{ route('student.show_application', $info->id) }}"
                                                class="btn btn-primary">
                                                <i class=" ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="text text-center">No Data</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>


        {{-- Student Education Background --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Education Background Details</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th>Level</th>
                                        <th>Program Name</th>
                                        <th>Institution</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                {{-- <tbody>
                                    @if (count($application))
                                    @foreach ($application as $info)
                                    <tr>
                                        <td>{{ $info->reg_no }}</td>
                                        <td>{{ $info->campuses_name }}</td>
                                        <td>{{ $info->application_type }}</td>
                                        <td>
                                            <a href="{{ route('student.show_application', $info->id) }}"
                                                class="btn btn-primary">
                                                <i class=" ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="3" class="text text-center">No Data</td>
                                    </tr>
                                    @endif
                                </tbody> --}}
                            </table>
                        </div>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>


    </div>

</div>
</div>

@endsection
