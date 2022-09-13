<?php include 'sidebar-staff.php';
?>
 <div class="wrapper">

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
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
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#"
                                role="button" aria-haspopup="false" aria-expanded="false">
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
                                    <a href="blotter.html" class="dropdown-item notify-item">
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
                                    <a href="blotter.html" class="dropdown-item notify-item">
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
                            <a class="nav-link" href="../../BITBo/admin/index.html">
                                <i class="noti-icon"><button type="button" class="btn btn-primary">Switch to
                                        <strong>BITBo.</strong></button></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown"
                                href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="account-user-avatar">
                                    <img src="../../assets/images/users/profile1.png" alt="user-image"
                                        class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Juan Dela Cruz</span>
                                    <span class="account-position">Admin</span>
                                </span>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="/BITBo/login-admin.html" class="dropdown-item notify-item">
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
                                        <img class="d-flex me-2 rounded-circle"
                                            src="../../assets/images/users/profile1.png" alt="Generic placeholder image"
                                            height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Juan Dela Cruz</h5>
                                            <span class="font-12 mb-0">Brgy. Official</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle"
                                            src="../../assets/images/users/profile2.png" alt="Generic placeholder image"
                                            height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Maria Clara</h5>
                                            <span class="font-12 mb-0">Helpdesk</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle"
                                            src="../../assets/images/users/profile3.png" alt="Generic placeholder image"
                                            height="32">
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
                                <div class="page-title-right">
                                    <form class="d-flex">
                                        <a href="javascript:void(0);" class="btn btn-primary mb-2"
                                            data-bs-toggle="modal" data-bs-target="#info-header-modal-addcert"><i
                                                class="mdi mdi-plus-circle me-2"></i> Add Certificate</a>
                                    </form>
                                </div>
                                <h4 class="page-title">Manage Certificates</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="buttons-table-pending">
                                            <table id="scroll-vertical-datatable"
                                                class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Certificate ID.</th>
                                                        <th>Type</th>
                                                        <th>Amount</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    <tr>
                                                        <td>CERT-0001</td>
                                                        <td>Barangay Certificate of Residency</td>
                                                        <td>50</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#danger-alert-modal"><i
                                                                        class="mdi mdi-delete"></i> </button></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#info-header-modal"><i
                                                                        class="mdi mdi-file-document-edit-outline"></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CERT-0002</td>
                                                        <td>Barangay Clearance</td>
                                                        <td>120</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#danger-alert-modal"><i
                                                                        class="mdi mdi-delete"></i> </button></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#info-header-modal"><i
                                                                        class="mdi mdi-file-document-edit-outline"></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CERT-0003</td>
                                                        <td>Barangay Indigency</td>
                                                        <td>50</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#danger-alert-modal"><i
                                                                        class="mdi mdi-delete"></i> </button></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#info-header-modal"><i
                                                                        class="mdi mdi-file-document-edit-outline"></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>CERT-0004</td>
                                                        <td>Business Permit</td>
                                                        <td>200</td>
                                                        <td class="table-action">
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-danger"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#danger-alert-modal"><i
                                                                        class="mdi mdi-delete"></i> </button></a>
                                                            <a href="javascript: void(0);" class="action-icon"> <button
                                                                    type="button" class="btn btn-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#info-header-modal"><i
                                                                        class="mdi mdi-file-document-edit-outline"></i>
                                                                </button></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end certificates-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->
        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

        <!--MODALS-->

        <!--Decline Modal-->
        <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-danger">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="dripicons-question h1"></i>
                            <h4 class="mt-2">Delete Certificate Confirmation</h4>
                            <p class="mt-3">Are you sure you want to delete this type of certificate?</p>
                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-outline-light my-2" data-bs-dismiss="modal"
                                id="toastr-deletecert">Delete</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content modal-filled bg-success">
                    <div class="modal-body p-4">
                        <div class="text-center">
                            <i class="dripicons-question h1"></i>
                            <h4 class="mt-2">Confirm Approve Request</h4>
                            <p class="mt-3">Are you sure you want to approve Juan Dela Cruz's request?</p>
                            <button type="button" class="btn btn-outline-light my-2"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal"
                                id="toastr-three">Confirm</button>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Info Header Modal -->
        <div id="info-header-modal" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="info-header-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-primary">
                        <h4 class="modal-title" id="info-header-modalLabel">Request Details</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Blotter ID</label>
                                        <input type="text" class="form-control" id="certid"
                                            placeholder="Certificate ID">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Certificate Name</label>
                                        <input type="text" class="form-control" id="certtype"
                                            placeholder="Certificate Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="certamount" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                            id="toastr-updatecert">Save
                            changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- Info Header Add Certificate -->
        <div id="info-header-modal-addcert" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="info-header-modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-primary">
                        <h4 class="modal-title" id="info-header-modalLabel">Add Certificate</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Blotter ID</label>
                                        <input type="text" class="form-control" id="certid"
                                            placeholder="Certificate ID">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Certificate Name</label>
                                        <input type="text" class="form-control" id="certtype"
                                            placeholder="Certificate Name">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Amount</label>
                                        <input type="number" class="form-control" id="certamount" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="toastr-addcert">Save
                            changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
    <!-- END wrapper -->

   <!-- bundle -->
   <script src="../../assets/js/vendor.min.js"></script>
   <script src="../../assets/js/app.min.js"></script>

   <!-- third party js -->
   <script src="../../assets/js/vendor/apexcharts.min.js"></script>
   <script src="../../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="../../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
   <!-- third party js ends -->

   <!-- demo app -->
   <script src="../../assets/js/pages/demo.dashboard.js"></script>
   <!-- end demo js-->
</body>

</html>