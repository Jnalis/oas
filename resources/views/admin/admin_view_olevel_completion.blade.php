@extends('admin.layouts.admin_msater')
@section('title', 'O-Level Completion Status')


@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">O-Level Completion Status</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item active">O-Level Completion Status</li>
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

                        <h4 class="card-title">O-Level Completion Status</h4>
                        <p class="card-title-desc">
                            <a href="{{ route('admin.olevel_completion_status.create') }}"
                                class="btn btn-outline-dark waves-effect waves-light">
                                Add O-Level Completion Status
                            </a>
                        </p>

                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>O-Level Completion Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @if (count($status))
                                    @foreach ($status as $info)
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $info->level_completion_status }}</td>
                                        <td>
                                            <a href="{{ route('admin.olevel_completion_status.edit', $info->id) }}" class="btn btn-warning">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                onclick="$(this).parent().find('form').submit()" class="btn btn-danger">
                                                <i class="ri-delete-bin-line"></i>
                                            </a>
                                            <form action="{{ route('admin.olevel_completion_status.destroy', $info->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                            </form>
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