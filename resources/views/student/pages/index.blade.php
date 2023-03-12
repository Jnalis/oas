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
            <div class="col-lg-12">

                @if ($application_status == 'temporally')

                @include('student.includes.multstepform')

                @elseif ($application_status == 'not approved')
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <marquee behavior="scroll" direction="left" scrollamount="5" width="1020"
                                onmouseover="this.stop();" onmouseout="this.start();">
                                <a href="" class="btn btn-success btn-md" data-bs-toggle="modal"
                                    data-bs-target="#popout">
                                    Click Me to See Your Application
                                </a>
                            </marquee>
                        </div>
                    </div>
                </div>
                @endif

            </div><!-- end col -->
        </div>

    </div>
</div>


<div class="modal fade" id="popout" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">
                    Make Sure To Pay Application Fee which is Tzs. 10,000/=
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    To See Your Application Please Make Payment to this Controll Number
                    <span style="font-weight: bold; font-size: 20px;">
                        991250024470
                    </span>
                </p>

                <br>

                <p style="color: black">
                    You can pay through:
                    <br>
                    ( i ) NMB BANK BY FILLING PAY-SLIP and quote CONTROL NUMBER 991250024470
                    <br>
                    ( ii ) M-PESA,TIGO-PESA or Airtel-Money under Government payment CONTROL NUMBER 991250024470
                </p>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
@endsection
