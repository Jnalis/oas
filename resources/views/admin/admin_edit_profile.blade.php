@extends('admin.layouts.admin_msater')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Profile</h4>

                        <form action="{{ route('admin.update_profile') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Enter Your Name Here" id="name" name="name"
                                        value="{{ $editData->name }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="email" placeholder="Enter Your Email Here"
                                        id="email" name="email" value="{{ $editData->email }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="text" placeholder="Enter Your Username Here"
                                        id="username" name="username" value="{{ $editData->username }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="profile_image" class="col-sm-2 col-form-label">Profile Image</label>
                                <div class="col-sm-6">
                                    <input class="form-control" type="file" id="image" name="profile_image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <img class="rounded avatar-lg"
                                    src="{{ (!empty($editData->profile_image)) ? url('upload/admin_images/'.$editData->profile_image) : url('upload/no_image.jpg') }}" alt="{{ $editData->name }} image" id="show_image">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-6">
                                    <input type="submit" class="btn btn-dark btn-rounded waves-effect waves-light"
                                        value="Update Profile">
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
