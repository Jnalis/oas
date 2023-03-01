@extends('admin.layouts.admin_msater')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Change Password</h4>
                        <hr>

                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger alert-dismissible fade show">
                                    {{ $error }}
                                </p>
                            @endforeach
                        @endif

                        <form action="{{ route('admin.update_password') }}" method="post">
                            @csrf

                            <div class="row mb-3">
                                <label for="old_password" class="col-sm-2 col-form-label">Old Password</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="password" placeholder="Enter Your Old Password Here" id="old_password" name="old_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="new_password" class="col-sm-2 col-form-label">New Password</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="password" placeholder="Enter Your New Password Here" id="new_password" name="new_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="confirm_password" class="col-sm-2 col-form-label">Confirm Password</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="password" placeholder="Re Type Your Password Here" id="confirm_password" name="confirm_password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" class="btn btn-dark btn-rounded waves-effect waves-light"
                                        value="Change Password">
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
