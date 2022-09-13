<?php include 'sidebar-resident.php';
?>
 <div class="wrapper">

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-end">
                                        <a href="javascript: void(0);" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div style="max-height: 230px;" data-simplebar="">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">5 hours ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="blotter.php" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../../assets/images/users/profile1.png"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="notify-details">Juan Dela Cruz</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Requested a vaccination.</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="blotter.php" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../../assets/images/users/profile2.png"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="notify-details">Maria Clara</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Requested a booster.</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../../assets/images/users/profile3.png"
                                            class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="notify-details">Sisa Usisa</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Requested a vaccine.</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary notify-item notify-all">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link" href="../../BITBo/admin/index.php">
                            <i class="noti-icon"><button type="button" class="btn btn-primary">Switch to
                                    <strong>BITBo.</strong></button></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                            role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="../../assets/images/users/profile2.png" alt="user-image"
                                    class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">Liza Soberano</span>
                                <span class="account-position">Resident</span>
                            </span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="myaccount-resident.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="/BITBo/login-admin.php" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>

                </ul>
                <button class="button-menu-mobile open-left">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="app-search dropdown d-none d-lg-block">

                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-1">Found <span class="text-danger">17</span> results</h5>
                        </div>

                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>

                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../../assets/images/users/profile1.png"
                                        alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Juan Dela Cruz</h5>
                                        <span class="font-12 mb-0">Brgy. Official</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../../assets/images/users/profile2.png"
                                        alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Maria Clara</h5>
                                        <span class="font-12 mb-0">Helpdesk</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../../assets/images/users/profile3.png"
                                        alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Sisa Usisa</h5>
                                        <span class="font-12 mb-0">Staff</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Welcome to iHealth</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <thead>
                                    <h4>Please choose your desired Service.</h4>
                                </thead>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start of Dashboard card-->

                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">
                            <button type="button" class="block" style="border-color:#eeecec"><a
                                    href="vaccination-resident.php">
                                    <br><br>
                                    <i class="uil-syringe widget-icon-icon"></i>
                                    <br><br>
                                    <h5>Vaccination Services</h5>
                                    <br><br>
                                </a>
                            </button>
                            </a>
                        </div>
                    </div>



                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">

                            <button type="button" class="block" style="border-color:#eeecec">
                                <br><br><a href="clinic-resident.php">
                                    <i class="uil-clipboard-alt widget-icon-icon"></i>
                                    <br><br>
                                    <h5>Clinic Services</h5>
                                    <br><br>
                                </a>
                            </button>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">

                            <button type="button" class="block" style="border-color:#eeecec">
                                <br><br><a href="dental-resident.php">
                                    <i class="mdi mdi-hospital widget-icon-icon"></i>
                                    <br><br>
                                    <h5>Dental Services</h5>
                                    <br><br></button></a>

                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card">

                            <button type="button" class="block" style="border-color:#eeecec">
                                <br><br><a href="medicine-resident.php">
                                    <i class="mdi mdi-account-multiple widget-icon-icon"></i>
                                    <br><br>
                                    <h5>Medicine Services</h5>
                                    <br><br></button></a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>
    <!-- /Page Wrapper -->

    </div>
    </div>

    <!-- End of Dashboard card-->
    </div> <!-- end col -->
    </div>
    <!-- end row -->





    </div>
    <!-- container -->

    </div>
    <!-- content -->



    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

    <!-- bundle -->
    <script src="../../assets/js/vendor.min.js"></script>
    <script src="../../assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="../../assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="../../assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="../../assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="../../assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="../../assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="../../assets/js/vendor/buttons.php5.min.js"></script>
    <script src="../../assets/js/vendor/buttons.flash.min.js"></script>
    <script src="../../assets/js/vendor/buttons.print.min.js"></script>
    <script src="../../assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="../../assets/js/vendor/dataTables.select.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="../../assets/js/pages/demo.datatable-init.js"></script>
    <script src="../../assets/js/pages/demo.toastr.js"></script>
    <!-- end demo js-->
</body>

</html>