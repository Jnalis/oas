@extends('student.layouts.student_layout_1')
@section('title', 'Student | OAS')

@section('content')


<div class="container" id="home">

    <div class="row">
        <div class="col-lg-4">
            @include('student.includes.application_tips')
        </div>


        <div class="col-lg-8">

            <div class="card" id="application_tips">

                <div class="col-12 align-self-center pt-4" style="text-align: center;">
                    <span style=" font-size:18px;
                            text-shadow:1px 1px 1px #084F88;
                            font-family: 'Seta Reta NF';
                            font-weight: bold;
                            color: #084F88; !important">
                        Application Form
                    </span>
                </div>
                <p class="col-12 align-self-center">
                    <sup style="color: red;
                                font-size:18px;">*</sup> Means Required
                </p>

                <div class="card-body">


                    <form method="POST" action="{{ route('student.apply_form_submit') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="secondary_education_id">
                                        Secondary Education <sup style="color: red; font-size: 18px;">*</sup>
                                    </label>

                                    <select class="form-select form-control" id="secondary_education_id"
                                        name="secondary_education_id"
                                        onchange="getSecondaryEducationSelection($(this).val())">

                                        <option value="1">CSEE Award from NECTA - After 1987</option>
                                        <option value="2">Foreign Certificate /CSEE Equivalent /GCE</option>
                                    </select>

                                    @error('secondary_education_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="fiv_index_num">

                                <label class="col-form-label" for="FIVIndexNumber">
                                    Form IV Index No <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="index_number" class="form-control" id="fiv_index_num_input"
                                    aria-describedby="FIVIndexNumber" required="" autocomplete="off"
                                    onfocus="this.value=''" placeholder="S0110/0064/1964" inputmode="text"
                                    value="{{ old('index_number') }}">

                                <div style="display: none;" class="fiv-loader-check">

                                    <img src="{{ asset('logo/loading.gif') }}"
                                        style="width: 24px; height: 24px; position: relative; float: left; margin: 4px auto;">
                                    <div style="position: relative; margin: 1px 10px; float: left; font-size: 10px;">
                                        Checking...</div>
                                </div>


                                @error('index_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group col-md-6" id="fiv_equivalent_index_num">

                                <label class="col-form-label" for="FIVEquivalentIndexNumber">
                                    Equivalent Award Index NO <sup style="color: red; font-size: 18px;">*</sup>
                                </label>

                                <input type="text" name="eq_number" class="form-control"
                                    id="fiv_equivalent_index_num_input" aria-describedby="FIVEquivalentIndexNumber"
                                    autocomplete="off" onfocus="this.value=''" placeholder="EQ2019000001/2021"
                                    inputmode="text" value="{{ old('eq_number') }}">

                                <div style="display: none;" class="fiv-equivalent-loader-check">
                                    <img src="{{  asset('logo/loading.gif') }}"
                                        style="width: 24px; height: 24px; position: relative; float: left; margin: 4px auto;">
                                    <div style="position: relative; margin: 1px 10px; float: left; font-size: 10px;">
                                        Checking...</div>
                                </div>


                                @error('eq_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label" for="campuses_name">
                                        Select Campuses <sup style="color: red; font-size: 18px;">*</sup>
                                    </label>

                                    <select
                                        class="form-select form-control @error('campuses_name') is-invalid @enderror"
                                        name="campuses_name">
                                        <option></option>

                                        @foreach ($campuses as $item)

                                        <option value="{{ $item->id }}" {{ old('campuses_name')=="$item->campuses_name"
                                            ? "selected" : "" }}>
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
                                        Select Program <sup style="color: red; font-size: 18px;">*</sup>
                                    </label>

                                    <select
                                        class="form-control form-select @error('application_type') is-invalid @enderror"
                                        name="application_type">
                                        <option></option>

                                        @foreach ($application as $item)

                                        <option value="{{ $item->id }}" {{
                                            old('application_type')=="$item->application_type" ? "selected" : "" }}>
                                            {{ $item->application_type }}</option>


                                        @endforeach
                                    </select>

                                    @error('application_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-form-label" for="first_name">
                                        First name <sup style="color: red; font-size: 18px;">*</sup>
                                    </label>

                                    <input type="text" name="first_name" id="first_name"
                                        class="form-control @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name') }}">

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                        Surname <sup style="color: red; font-size: 18px;">*</sup>
                                    </label>

                                    <input type="text" name="surname" id="surname"
                                        class="form-control @error('surname') is-invalid @enderror"
                                        value="{{ old('surname') }}">

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="form-row">
                            <div class="form-group col-md-9 float-center" style="position:relative;left:10%; width:80%">
                                <span>By clicking Register, you're confirming that you've read our
                                    <a href="#" class="text-primary" data-bs-toggle="modal"
                                        data-bs-target="#registration-info">Terms
                                        &amp; Conditions
                                    </a>
                                </span>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>

                        <div class="modal fade" id="registration-info" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">


                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Terms &amp; Conditions</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h4 style="color: #00b050;">
                                            Please!
                                        </h4>
                                        <p> Verify that all information you provide is true and correct.</p>
                                        <p> Submission of forged certificates or any false information is a criminal
                                            offence and it will be handled according to the law.
                                        </p>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>



</div>

@endsection

@section('js_wizard')

<script src="{{ asset('backend/plugins/jquery.inputmask.min.js') }}"></script>

<script>
    $("[data-mask]").inputmask();

    $(function () {
        $("#fiv_equivalent_index_num").hide();
        $("#fiv_equivalent_index_num_input").prop("required", false);
    });

    function getSecondaryEducationSelection(option) {
        if (option == 1) {
            $("#fiv_index_num").show();
            $("#fiv_index_num_input").prop("required", true);
            $("#fiv_equivalent_index_num").hide();
            $("#fiv_equivalent_index_num_input").prop("required", false);
        } else {
            $("#fiv_equivalent_index_num").show();
            $("#fiv_index_num").hide();
            $("#fiv_equivalent_index_num_input").prop("required", true);
            $("#fiv_index_num_input").prop("required", false);
        }
    }


    $("#fiv_index_num_input").keyup(function (e) {
        this.value = this.value.toUpperCase();
        let cseeNumber = $("#fiv_index_num_input").val();
        $("fiv_equivalent_index_num_input").html("");

        $(".fiv-loader-check").show();

        if (cseeNumber.length > 14) {
            if (cseeNumber.includes('_') === false) {
                // let request = $.post("i think this shoul be an api link", {
                let request = $.post("/admission/csee/verify", {
                    csee_number: cseeNumber,
                    csrf: "f34iWVgX1lhY2aryiyGhhDQYgqDwQXXD",
                });

                request.done(function (e) {
                    if (e.status === "1") {
                        $(".fiv-loader-check").html(
                            "<span class='text-success'><i class='fa fa-check'></i>&nbsp;" + e
                            .school + "</span>");
                    } else {
                        $(".fiv-loader-check").html(
                            "<span class='text-danger'><i class='fa fa-times'></i>&nbsp;Invalid Index Number</span>"
                            );
                    }
                });
                request.fail(function (jqXHR, exception) {
                    $(".fiv-loader-check").html(
                        "<span class='text-danger'></i>&nbsp;Invalid Index Number</span>");
                    $("fiv_index_num_input").html("");
                    var msg = "";
                    if (jqXHR.status === 0) {
                        msg = '<span style="color:red;"><b>Not connected.\n Verify Network.</b></span>';
                    } else if (jqXHR.status == 401) {
                        msg = '<span style="color:red;"><b>Unauthorized.[401] Refresh page</b></span>';
                    } else if (jqXHR.status == 403) {
                        msg =
                            '<span style="color:red;"><b>This action is unauthorized.[403(Forbidden)] Refresh page</b></span>';
                    } else if (jqXHR.status == 404) {
                        msg = '<span style="color:red;"><b>Requested page not found.[404]</b></span>';
                    } else if (jqXHR.status == 500) {
                        msg = '<span style="color:red;"><b>Internal Server Error [500].</b></span>';
                    } else if (exception === "parsererror") {
                        msg = '<span style="color:red;"><b>Requested JSON parse failed.</b></span>';
                    } else if (exception === "timeout") {
                        msg = '<span style="color:red;"><b>Time out error.</b></span>';
                    } else if (exception === "abort") {
                        msg = '<span style="color:red;"><b>Ajax request aborted.</b></span>';
                    } else {
                        msg = '<span style="color:red;"><b>Uncaught Error.\n' + jqXHR.responseText +
                            "</b></span>";
                    }
                    $("#request-control-number").html(msg);
                });

                request.always(function (jqXHR) {

                });
            }
        }
    });


    $("#fiv_equivalent_index_num_input").keyup(function (e) {
        this.value = this.value.toUpperCase();
        let cseeEQNumber = $("#fiv_equivalent_index_num_input").val();
        $("fiv_index_num_input").html("");

        $(".fiv-equivalent-loader-check").show();

        if (cseeEQNumber.length > 16) {
            if (cseeEQNumber.includes('_') === false) {
                let request = $.post("/admission/csee-equivalent/verify", {
                    csee_number: cseeEQNumber,
                    csrf: "f34iWVgX1lhY2aryiyGhhDQYgqDwQXXD",
                });

                request.done(function (e) {
                    if (e.status === "1") {

                        let verified = "Verified";
                        $(".fiv-equivalent-loader-check").html(
                            "<span class='text-success'><i class='fa fa-check'></i>&nbsp;" +
                            verified + "</span>");
                    } else {
                        $(".fiv-equivalent-loader-check").html(
                            "<span class='text-danger'><i class='fa fa-times'></i>&nbsp;Invalid Equivalent Number</span>"
                            );
                    }
                });
                request.fail(function (jqXHR, exception) {
                    $(".fiv-equivalent-loader-check").html(
                        "<span class='text-danger'></i>&nbsp;Invalid Equivalent Number</span>");
                    $("fiv_equivalent_index_num_input").html("");
                    var msg = "";
                    if (jqXHR.status === 0) {
                        msg = '<span style="color:red;"><b>Not connected.\n Verify Network.</b></span>';
                    } else if (jqXHR.status == 401) {
                        msg = '<span style="color:red;"><b>Unauthorized.[401] Refresh page</b></span>';
                    } else if (jqXHR.status == 403) {
                        msg =
                            '<span style="color:red;"><b>This action is unauthorized.[403(Forbidden)] Refresh page</b></span>';
                    } else if (jqXHR.status == 404) {
                        msg = '<span style="color:red;"><b>Requested page not found.[404]</b></span>';
                    } else if (jqXHR.status == 500) {
                        msg = '<span style="color:red;"><b>Internal Server Error [500].</b></span>';
                    } else if (exception === "parsererror") {
                        msg = '<span style="color:red;"><b>Requested JSON parse failed.</b></span>';
                    } else if (exception === "timeout") {
                        msg = '<span style="color:red;"><b>Time out error.</b></span>';
                    } else if (exception === "abort") {
                        msg = '<span style="color:red;"><b>Ajax request aborted.</b></span>';
                    } else {
                        msg = '<span style="color:red;"><b>Uncaught Error.\n' + jqXHR.responseText +
                            "</b></span>";
                    }
                    $("#request-control-number").html(msg);
                });

                request.always(function (jqXHR) {

                });
            }
        }
    });
</script>

@endsection
