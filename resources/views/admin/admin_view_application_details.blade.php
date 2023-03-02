@extends('admin.layouts.admin_msater')
@section('title', 'Application Details')


@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Application Details</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Application Details</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Application Details</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Registration No</th>
                                        <th>Campus</th>
                                        <th>Program Selected</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @if (count($application))
                                    @foreach ($application as $info)
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $info->reg_no }}</td>
                                        <td>{{ $info->campuses_name }}</td>
                                        <td>{{ $info->application_type }}</td>
                                        <td>
                                            @if ($info->application_status == 'not approved')
                                            <span class="p-1"
                                                style="background-color: rgba(255, 0, 0, 0.750); border-radius:5px; color: white">
                                                {{ $info->application_status }}
                                            </span>
                                            @else
                                            <span class="p-1"
                                            style="background-color: rgba(0, 128, 0, 0.750); border-radius:5px; color: white">
                                            {{ $info->application_status }}
                                        </span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.show_application', $info->id) }}"
                                                class="btn btn-primary">
                                                <i class=" ri-eye-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @php
                                    $no++;
                                    @endphp
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

    </div>

</div>
</div>

@endsection
