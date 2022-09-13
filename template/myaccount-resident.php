<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Schedule| iHealth</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../../assets/images/brgyms-icon-white.png">

    <!-- third party css -->
    <link href="../../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/app-i.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="../../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <header>
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">

            <!-- LOGO -->
            <a href="admin-index.php" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="../../assets/images/ihealth-logo-with-text.png" alt="" height="40">
                </span>
            </a>
            <div class="h-100" id="leftside-menu-container" data-simplebar="">

                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Menu</li>

                    <li class="side-nav-item">
                        <a href="index-resident.php" class="side-nav-link">
                            <i class="uil-chart-pie"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>


                    <li class="side-nav-item">
                        <a href="vaccination-resident.php" class="side-nav-link">
                            <i class="uil-syringe"></i>
                            <span> Vaccination Service</span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="clinic-resident.php" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Clinic Service </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="dental-resident.php" class="side-nav-link">
                            <i class="mdi mdi-hospital"></i>
                            <span> Dental Service </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="medicine-resident.php" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span>Medicine Pick-up</span>
                    </li>
                </ul>

         
            <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

        </div>
        <!-- END wrapper -->
</header>
   
 <div class="wrapper">

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
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
                                        <img src="../../assets/images/users/profile1.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="notify-details">Juan Dela Cruz</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Requested a vaccination.</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="blotter.php" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../../assets/images/users/profile2.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="notify-details">Maria Clara</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Requested a booster.</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon">
                                        <img src="../../assets/images/users/profile3.png" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <p class="notify-details">Sisa Usisa</p>
                                    <p class="text-muted mb-0 user-msg">
                                        <small>Requested a vaccine.</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
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
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="../../assets/images/users/profile1.png" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">Juan Dela Cruz</span>
                                <span class="account-position">Resident</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
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
                                    <img class="d-flex me-2 rounded-circle" src="../../assets/images/users/profile1.png" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Juan Dela Cruz</h5>
                                        <span class="font-12 mb-0">Brgy. Official</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../../assets/images/users/profile2.png" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Maria Clara</h5>
                                        <span class="font-12 mb-0">Helpdesk</span>
                                    </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="../../assets/images/users/profile3.png" alt="Generic placeholder image" height="32">
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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">My Account Details</h4>
                        </div>
                    </div>

                    <!-- end page title -->




                    <!-- start table content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="tab-content">


                                    <div class="card-body">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="simpleinput" class="form-label">Schedule
                                                        Name:&nbsp;<span style="color:#ff0000">*</span></label>
                                                    <input type="text" id="schedulename" class="form-control">
                                                    </span>
                                                </td>
                                                <td class="col-sm-6">
                                                    <label for="example-time" class="form-label">Time:&nbsp;<span style="color:#ff0000">*</span></label>
                                                    <input class="form-control" id="time" type="time" name="time">
                                                    </span>
                                                </td><br>
                                                <td>
                                                    <a href="clinic.php">
                                                        <button class="btn btn-secondary" type="submit">Cancel</button>
                                                    </a>

                                                    <a href="">
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Edit Details Modal -->
                    </div> <!-- container -->
                </div><!-- content -->

            </div><!-- end row-->

            <!--MODALS-->

            <!-- Edit Patient Modal -->
            <div id="edit-patient-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal-colored-header bg-primary">
                            <h4 class="modal-title" id="warning-header-modalLabel">Edit Patient Details</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="resident_fname" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" id="resident_mname" placeholder="Enter middle name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="resident_lname" placeholder="Enter last name">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Suffix</label>
                                            <input type="text" class="form-control" id="resident_suffix" placeholder="Suffix">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Birthday</label>
                                            <input type="date" class="form-control" id="resident_bday" placeholder="Enter birthday">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Phone No.</label>
                                            <input type="number" class="form-control" id="resident_phone" placeholder="Enter phone no.">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="resident_username" placeholder="Enter username">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="resident_emailadd" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="resident_pass" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Address</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" id="resident_street" placeholder="House No./Street">
                                                </div>
                                                <div class="col">
                                                    <select class="form-select" id="example-select">
                                                        <option>Purok Katakutan</option>
                                                        <option>Purok Kakirutan</option>
                                                        <option>Purok Kalanturan</option>
                                                        <option>Purok Kakurian</option>
                                                        <option>Purok Karasyahan</option>
                                                        <option>Purok Kakuriputan</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="resident_barangay" placeholder="Barangay" value="Brgy. BITBo" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Educational
                                                Attainment</label>
                                            <select class="form-select" id="resident_educ">
                                                <option>No schooling completed</option>
                                                <option>Elementary</option>
                                                <option>High School Undergrad</option>
                                                <option>High School Graduate</option>
                                                <option>College Undergad</option>
                                                <option>Vocational</option>
                                                <option>Bachelor's Degree</option>
                                                <option>Master's Degree</option>
                                                <option>Doctorate Degree</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Gender</label>
                                            <select class="form-select" id="resident_gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Blood Type</label>
                                            <select class="form-select" id="resident_bloodtype">
                                                <option>Unknown</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Civil Status</label>
                                            <select class="form-select" id="resident_civilstat">
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Separated</option>
                                                <option>Divorced</option>
                                                <option>Widowed</option>
                                                <option>Single Parent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Condition
                                                Status</label>
                                            <select class="form-select" id="resident_condition">
                                                <option>None</option>
                                                <option>Senior Citizen</option>
                                                <option>PWD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="resident_occupation" placeholder="Occupation">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Religion</label>
                                                <input type="text" class="form-control" id="resident_religion" placeholder="Religion">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">House Ownership
                                                Status</label>
                                            <select class="form-select" id="resident_howner">
                                                <option>Owned</option>
                                                <option>Rent</option>
                                                <option>Living with Parents</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Profile
                                                Picture</label>
                                            <input type="file" class="form-control" id="resident_profile_pic" placeholder="Upload Photo">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="toastr-updatepatient">Save
                                changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <!-- Edit Senior Modal -->
            <div id="edit-senior-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header modal-colored-header bg-primary">
                            <h4 class="modal-title" id="warning-header-modalLabel">Edit Senior Citizen
                                Details</h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="resident_fname" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Middle Name</label>
                                            <input type="text" class="form-control" id="resident_mname" placeholder="Enter middle name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="resident_lname" placeholder="Enter last name">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Suffix</label>
                                            <input type="text" class="form-control" id="resident_suffix" placeholder="Suffix">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Birthday</label>
                                            <input type="date" class="form-control" id="resident_bday" placeholder="Enter birthday">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Phone No.</label>
                                            <input type="number" class="form-control" id="resident_phone" placeholder="Enter phone no.">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="resident_username" placeholder="Enter username">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="resident_emailadd" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="resident_pass" placeholder="Enter password">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Address</label>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control" id="resident_street" placeholder="House No./Street">
                                                </div>
                                                <div class="col">
                                                    <select class="form-select" id="example-select">
                                                        <option>Purok Katakutan</option>
                                                        <option>Purok Kakirutan</option>
                                                        <option>Purok Kalanturan</option>
                                                        <option>Purok Kakurian</option>
                                                        <option>Purok Karasyahan</option>
                                                        <option>Purok Kakuriputan</option>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" id="resident_barangay" placeholder="Barangay" value="Brgy. BITBo" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Educational
                                                Attainment</label>
                                            <select class="form-select" id="resident_educ">
                                                <option>No schooling completed</option>
                                                <option>Elementary</option>
                                                <option>High School Undergrad</option>
                                                <option>High School Graduate</option>
                                                <option>College Undergad</option>
                                                <option>Vocational</option>
                                                <option>Bachelor's Degree</option>
                                                <option>Master's Degree</option>
                                                <option>Doctorate Degree</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Gender</label>
                                            <select class="form-select" id="resident_gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Blood Type</label>
                                            <select class="form-select" id="resident_bloodtype">
                                                <option>Unknown</option>
                                                <option>O+</option>
                                                <option>O-</option>
                                                <option>A+</option>
                                                <option>A-</option>
                                                <option>B+</option>
                                                <option>B-</option>
                                                <option>AB+</option>
                                                <option>AB-</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Civil Status</label>
                                            <select class="form-select" id="resident_civilstat">
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Separated</option>
                                                <option>Divorced</option>
                                                <option>Widowed</option>
                                                <option>Single Parent</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">Condition
                                                Status</label>
                                            <select class="form-select" id="resident_condition">
                                                <option>None</option>
                                                <option>Senior Citizen</option>
                                                <option>PWD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="resident_occupation" placeholder="Occupation">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Religion</label>
                                                <input type="text" class="form-control" id="resident_religion" placeholder="Religion">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label for="lastname" class="form-label">House Ownership
                                                Status</label>
                                            <select class="form-select" id="resident_howner">
                                                <option>Owned</option>
                                                <option>Rent</option>
                                                <option>Living with Parents</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Profile
                                                Picture</label>
                                            <input type="file" class="form-control" id="resident_profile_pic" placeholder="Upload Photo">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="toastr-updatesenior">Save
                                changes</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div> <!-- container -->
    </div><!-- content -->

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
    <script src="../../assets/js/vendor/apexcharts.min.js"></script>
    <script src="../../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/js/vendor/dropzone.min.js"></script>
    <script src="../../assets/js/vendor/list.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="../../assets/js/pages/demo.datatable-init.js"></script>
    <script src="../../assets/js/pages/demo.toastr.js"></script>
    <script src="../../assets/js/pages/demo.datatable-init.js"></script>
    <script src="../../assets/js/pages/demo.toastr.js"></script>
    <script src="../../assets/js/pages/list.js"></script>
    <!-- end demo js-->
</body>

</html>