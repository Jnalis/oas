@extends('admin.layouts.admin_msater')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
                <div class="card">

                    <center class="mt-5">
                        <img class="rounded-circle avatar-xl" src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg') }}" alt="{{ $adminData->name }} image">
                    </center>

                    <div class="card-body">
                        <h4 class="card-title">Name : {{ $adminData->name }}</h4>
                        <hr>
                        <h4 class="card-title">User Email : {{ $adminData->email }}</h4>
                        <hr>
                        <h4 class="card-title">Username : {{ $adminData->username }}</h4>
                        <hr>
                        <a href="{{ route('admin.edit_profile') }}" class="btn btn-dark btn-rounded waves-effect waves-light">
                            Edit Profile
                        </a>


                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
@endsection
