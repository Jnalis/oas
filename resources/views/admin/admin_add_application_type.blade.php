@extends('admin.layouts.admin_msater')
@section('title', 'Application Type')


@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Application Type</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">Application Type</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url()->previous() }}" class="btn btn-dark">
                            <i class=" ri-arrow-left-fill"></i>
                            <span>
                                Back
                            </span>
                        </a>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Application Type</h4>
                        <hr>

                        <form action="{{ route('admin.application_type.store') }}" method="post">
                            @csrf

                            <div class="row mb-3">
                                <label for="application_type" class="col-sm-3 col-form-label">Application Type</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text"
                                        placeholder="Eg: Certificates" id="application_type"
                                        name="application_type">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <input type="submit"
                                        class="btn btn-dark btn-rounded btn-lg waves-effect waves-light" value="Save">
                                </div>
                            </div>

                        </form>



                    </div>
                </div>
            </div> <!-- end col -->
        </div>

    </div>

</div>
</div>

@endsection