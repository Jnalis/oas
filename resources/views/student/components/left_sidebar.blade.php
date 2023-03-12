<div class="vertical-menu">

    <div data-simplebar class="h-100">

        @php
        $id = Auth::user()->id;
        $adminData = App\Models\User::find($id);

        $app_status = App\Models\ApplicationDetails::firstWhere('index_no',$adminData->username)->application_status;



        @endphp

        <!-- Starts User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg') }}"
                    alt="{{ $adminData->name }} image" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">{{ Auth::user()->name }}</h4>
                <span class="text-muted">
                    <i class="ri-record-circle-line align-middle font-size-14 text-success">
                    </i>
                    Online
                </span>
            </div>
        </div>
        {{-- Ends User details --}}

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('student.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('student.profile') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        {{-- <span class="badge rounded-pill bg-success float-end">3</span> --}}
                        <span>My Profile</span>
                    </a>
                </li>

                <li>

                    @if ( $app_status == 'temporally' )
                    <a href="{{ route('student.dashboard') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>My Application</span>
                    </a>
                    @elseif ( $app_status == 'not approved' )
                    <a href="{{ route('student.dashboard') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>My Application</span>
                    </a>
                    @else
                    <a href="{{ route('student.application') }}" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>My Application</span>
                    </a>
                    @endif
                </li>



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
