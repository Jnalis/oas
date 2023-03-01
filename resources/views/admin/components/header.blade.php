<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- Start Logo -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo-dark" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo-sm-light" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="logo-light" height="20">
                    </span>
                </a>
            </div>
            {{-- Ends Logo --}}

            {{-- Start Toggle Button --}}
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="ri-menu-2-line align-middle"></i>
            </button>
            {{-- Ends Toggle Button --}}

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="ri-search-line"></span>
                </div>
            </form>
            {{-- Ends App Search --}}


        </div>

        <div class="d-flex">


            {{-- Start Fullscreen Mode --}}

            {{-- <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="ri-fullscreen-line"></i>
                </button>
            </div> --}}

            {{-- End Fullscreen Mode --}}

            @php
            $id = Auth::user()->id;
            $adminData = App\Models\User::find($id);
            @endphp


            {{-- User Dropdown Menu --}}
            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <img class="rounded-circle header-profile-user"
                        src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.jpg') }}"
                        alt="{{ $adminData->name }} image">

                    <span class="d-none d-xl-inline-block ms-1">{{ Auth::user()->username }}</span>

                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.view_profile') }}">
                        <i class="ri-user-line align-middle me-1"></i>
                        Profile
                    </a>

                    <a class="dropdown-item" href="{{ route('admin.change_password') }}">
                        <i class="ri-wallet-2-line align-middle me-1"></i>
                        Change Password
                    </a>

                    <a class="dropdown-item d-block" href="#">
                        <span class="badge bg-success float-end mt-1">
                            11
                        </span>
                        <i class="ri-settings-2-line align-middle me-1"></i>
                        Settings
                    </a>

                    <a class="dropdown-item" href="#">
                        <i class="ri-lock-unlock-line align-middle me-1"></i>
                        Lock screen
                    </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}">
                        <i class="ri-shut-down-line align-middle me-1 text-danger"></i>
                        Logout
                    </a>
                </div>
            </div>
            {{-- Ends User Dropdown Menu --}}


        </div>
    </div>
</header>
