<?php

$con=mysqli_connect('localhost','root','','ERP');


if(!$con){


}
else{

}
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Departments | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logoIIITK.svg" alt="" /></a>
            <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">
                    <li class="active">
                        <a class="has-arrow" href="index.html">
                            <span class="educate-icon educate-home icon-wrap"></span>
                            <span class="mini-click-non">Profile</span>
                        </a>
                        <ul class="submenu-angle" aria-expanded="true">
                            <li><a title="Dashboard v.1" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li>
                            <li><a title="Dashboard v.2" href="view.html"><span class="mini-sub-pro">View</span></a></li>
                            <li><a title="Dashboard v.3" href="update-profile.html"><span class="mini-sub-pro">Update Profile</span></a></li>
                            <li><a title="Analytics" href="internships.html"><span class="mini-sub-pro">Internships</span></a></li>
                            <li><a title="Widgets" href="skills.html"><span class="mini-sub-pro">Achievements/Skills</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Event</span></a>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Professors</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Professors" href="all-professors.html"><span class="mini-sub-pro">All Professors</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Registrations</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Students" href="all-students.html"><span class="mini-sub-pro">Pre-Registration</span></a></li>
                            <li><a title="Add Students" href="add-student.html"><span class="mini-sub-pro">Regular-Registration</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Courses</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="All Courses" href="all-courses.html"><span class="mini-sub-pro">All Courses</span></a></li>
                            <li><a title="Courses Profile" href="course-info.html"><span class="mini-sub-pro">Courses Info</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Departments</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Departments List" href="departments.html"><span class="mini-sub-pro">Departments List</span></a></li>
                        </ul>
                    </li>
                    </li>
                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap"></span> <span class="mini-click-non">Payment</span></a>
                        <ul class="submenu-angle page-mini-nb-dp" aria-expanded="false">
                            <li><a title="Payment" href="payment.html"><span class="mini-sub-pro">Fees Payment</span></a></li>
                            <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                            <li><a title="500 Page" href="500.html"><span class="mini-sub-pro">Payment Receipt</span></a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </nav>
</div>
<!-- End Left menu area -->
    <!-- Start Welcome area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                        <i class="educate-icon educate-nav"></i>
                                                    </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                            <div class="header-top-menu tabl-d-n">
                                                <ul class="nav navbar-nav mai-top-nav">
                                                    <li class="nav-item"><a href="dashboard.html" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="about.html" class="nav-link">About</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                    </li>
                                                    <li class="nav-item"><a href="mailto:'office@iiitkota.ac.in'" class="nav-link">Support</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                                <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                    <li class="nav-item">
                                                        <a href="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                <span class="admin-name">LogOut</span>
                                                            </a>
                                                       
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu start -->
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">
                                            <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">
                                                    <li><a href="index.html">Dashboard v.1</a></li>
                                                    <li><a href="index-1.html">Dashboard v.2</a></li>
                                                    <li><a href="index-3.html">Dashboard v.3</a></li>
                                                    <li><a href="analytics.html">Analytics</a></li>
                                                    <li><a href="widgets.html">Widgets</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="events.html">Event</a></li>
                                            <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demoevent" class="collapse dropdown-header-top">
                                                    <li><a href="all-professors.html">All Professors</a>
                                                    </li>
                                                    <li><a href="add-professor.html">Add Professor</a>
                                                    </li>
                                                    <li><a href="edit-professor.html">Edit Professor</a>
                                                    </li>
                                                    <li><a href="professor-profile.html">Professor Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">
                                                    <li><a href="all-students.html">All Students</a>
                                                    </li>
                                                    <li><a href="add-student.html">Add Student</a>
                                                    </li>
                                                    <li><a href="edit-student.html">Edit Student</a>
                                                    </li>
                                                    <li><a href="student-profile.html">Student Profile</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="democrou" class="collapse dropdown-header-top">
                                                    <li><a href="all-courses.html">All Courses</a>
                                                    </li>
                                                    <li><a href="add-course.html">Add Course</a>
                                                    </li>
                                                    <li><a href="edit-course.html">Edit Course</a>
                                                    </li>
                                                    <li><a href="course-profile.html">Courses Info</a>
                                                    </li>
                                                    <li><a href="course-payment.html">Courses Payment</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demolibra" class="collapse dropdown-header-top">
                                                    <li><a href="library-assets.html">Library Assets</a>
                                                    </li>
                                                    <li><a href="add-library-assets.html">Add Library Asset</a>
                                                    </li>
                                                    <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demodepart" class="collapse dropdown-header-top">
                                                    <li><a href="departments.html">Departments List</a>
                                                    </li>
                                                    <li><a href="add-department.html">Add Departments</a>
                                                    </li>
                                                    <li><a href="edit-department.html">Edit Departments</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demo" class="collapse dropdown-header-top">
                                                    <li><a href="mailbox.html">Inbox</a>
                                                    </li>
                                                    <li><a href="mailbox-view.html">View Mail</a>
                                                    </li>
                                                    <li><a href="mailbox-compose.html">Compose Mail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                    <li><a href="google-map.html">Google Map</a>
                                                    </li>
                                                    <li><a href="data-maps.html">Data Maps</a>
                                                    </li>
                                                    <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                    </li>
                                                    <li><a href="x-editable.html">X-Editable</a>
                                                    </li>
                                                    <li><a href="code-editor.html">Code Editor</a>
                                                    </li>
                                                    <li><a href="tree-view.html">Tree View</a>
                                                    </li>
                                                    <li><a href="preloader.html">Preloader</a>
                                                    </li>
                                                    <li><a href="images-cropper.html">Images Cropper</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                    <li><a href="bar-charts.html">Bar Charts</a>
                                                    </li>
                                                    <li><a href="line-charts.html">Line Charts</a>
                                                    </li>
                                                    <li><a href="area-charts.html">Area Charts</a>
                                                    </li>
                                                    <li><a href="rounded-chart.html">Rounded Charts</a>
                                                    </li>
                                                    <li><a href="c3.html">C3 Charts</a>
                                                    </li>
                                                    <li><a href="sparkline.html">Sparkline Charts</a>
                                                    </li>
                                                    <li><a href="peity.html">Peity Charts</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                    <li><a href="static-table.html">Static Table</a>
                                                    </li>
                                                    <li><a href="data-table.html">Data Table</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="formsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                    <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                    </li>
                                                    <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                    </li>
                                                    <li><a href="password-meter.html">Password Meter</a>
                                                    </li>
                                                    <li><a href="multi-upload.html">Multi Upload</a>
                                                    </li>
                                                    <li><a href="tinymc.html">Text Editor</a>
                                                    </li>
                                                    <li><a href="dual-list-box.html">Dual List Box</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="Pagemob" class="collapse dropdown-header-top">
                                                    <li><a href="login.html">Login</a>
                                                    </li>
                                                    <li><a href="register.html">Register</a>
                                                    </li>
                                                    <li><a href="lock.html">Lock</a>
                                                    </li>
                                                    <li><a href="password-recovery.html">Password Recovery</a>
                                                    </li>
                                                    <li><a href="404.html">404 Page</a></li>
                                                    <li><a href="500.html">500 Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu end -->
                <div class="breadcome-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcome-list single-page-breadcome">
                                    <div class="row">
                                        <h1 style="margin-left: 020px">Departments List</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Departments List</h4>
                            <div class="add-product">
                                <a href="add-department.html">Add Departments</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Name of Dept.</th>
                                        <th>Status</th>
                                        <th>Head</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>No. of Students</th>
                                        <th>Setting</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Computer</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mechanical</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>sql
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1700</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>MBA</td>
                                        <td>
                                            <button class="ds-setting">Disabled</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>BBA</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1200</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>CSE</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1800</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>MBA</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1000</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                    <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="product-status-wrap drp-lst">
            <table>
            <tr>
                <th>No</th>
                <th>Name of Dept.</th>
                <th>Head</th>
                <th>Email</th>
                <th>No. of Students</th>
            </tr>
            <?php
        
        $query="select * from Departments";
        $result = mysqli_query($con ,$query);
        while($data=mysqli_fetch_assoc($result)){

            echo "<tr>
            <td> " . $data['No'] . "  </td>
            <td> "   . $data['Name of Dept.'] . "</td>
            <td>" . $data['Head'] . "</td>
            <td> " . $data['Email'] . "</td>
            <td> " . $data['No. of Students'] . " </td>   
        </tr>"; 
        }
        if(!$result){
            echo "query failed";
        }
        
        ?>
            </table>
            </div>
            </div>
            </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. All rights reserved. ERP managed and maintained by ERP-CSP-201.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
