@extends('student.layouts.student_msater')
@section('title', 'Dashboard')
@section('student')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">OSA</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">

                        {{-- @php
                        $num = count($application_type);
                        $num2 = count($campuses);
                        @endphp --}}

                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate font-size-12 mb-2">Total Application</p>
                                <h4 class="mb-2">1452</h4>
                                {{-- <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i
                                            class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from
                                    previous period</p> --}}
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-shopping-cart-2-line font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->


    </div>

</div>
@endsection
