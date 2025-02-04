<style> 
    .custom-hover {
    color: black;
    background-color: white;
    transition: background-color 0.3s ease-in-out;
}

.custom-hover:hover {
    background-color: #5D9CEC; /* Background changes on hover */
    color: black; /* Keep text color the same */
}

</style>


<header id="page-topbar" style="background-color: #5D9CEC;">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('logo/logo.png') }}" alt="logo-sm" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('logo/logo.png') }}" alt="logo-dark" height="20">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('logo/logo.png') }}" alt="logo-sm-light" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('logo/logo1.png') }}" alt="logo-light" height="50">
                               
                                </span>
                                
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>

                        <!-- App Search-->
                        <!-- <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form> -->

                      
                    </div>

                    <div class="d-flex">

                       

                      

                      

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                      

                        <div class="dropdown d-inline-block user-dropdown">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('backend/assets/images/commissioner_rmp.jpeg') }}" 
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1">Web Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- User details -->
                                
                                <div class="user-profile text-center" style="background-color: #5D9CEC; margin-top: -3px; padding: 15px; border-radius: 10px;">
                                    <div>
                                        <img src="{{ asset('backend/assets/images/commissioner_rmp.jpeg') }}" alt="User Avatar" class="avatar-md rounded-circle">
                                    </div>
                                    <div class="mt-2">
                                        <h4 class="font-size-16 mb-1 text-white">Super Admin</h4>
                                    </div>
                                </div>

                                
                                <!-- item-->
                                <a class="dropdown-item custom-hover mt-2" href="#">
                                    <i class="ri-user-line align-middle me-1"></i> Profile
                                </a>

                                <!-- <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a> -->
                            
                             
                              
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('admin.logout') }}"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="ri-settings-2-line"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>