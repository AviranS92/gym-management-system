<?php
    ini_set("display_errors",1);
    error_reporting(E_ERROR);
	session_start();
	include_once("db_connect.php");
	include_once("functions.php");
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
     Gym Management System
    </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css"/>
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="./css/jquery-ui.css">
    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js">
    </script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">G<span>ym</span> M<span>anagement</span> S<span>ystem</span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <?php if($_SESSION['user_details']['user_level_id'] == 1) {?>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Administration <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="package.php">Add New Package</a></li>
                          <li><a href="attendance.php">Add New Attandance</a></li>
                          <li><a href="user.php">Add New Employee</a></li>
                          <li><a href="payment.php">Add Subsriber Payment</a></li>
                          <li><a href="payment.php">Add Employee Salary</a></li>
                          <li><a href="equipment.php">Add New Equipment</a></li>
                          <li><a href="supplier.php">Add New Supplier</a></li>
                          <li><a href="send_message.php">Send Message</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Reports <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="report-package.php">Package Report</a></li>
                          <li><a href="report-attendance.php">Attandance Report</a></li>
                          <li><a href="report-user.php">All Employee Report</a></li>
                          <li><a href="report-payment.php">Subscriber Payment Report</a></li>
                          <li><a href="report-salary.php">Employee Salary Report</a></li>
                          <li><a href="report-equipment.php">Equipment Report</a></li>
                          <li><a href="report-supplier.php">Supplier Report</a></li>
                          <li><a href="inbox-message.php">Message Report</a></li>
                      </ul>
                  </li>
                  <li><a href="change-password.php">Change Password</a></li>

                  <?php } ?>
                  <?php if($_SESSION['user_details']['user_level_id'] == 2) {?>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Administration <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="subscriber.php">Add Subscriber</a></li>
                          <li><a href="attendance.php">Add New Attandance</a></li>
                          <li><a href="payment.php">Add New Payment</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Reports <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="report-subscriber.php">Subscriber Report</a></li>
                          <li><a href="report-attendance.php">Attandance Report</a></li>
                          <li><a href="report-payment.php">Payment Report</a></li>
                      </ul>
                  </li>
                  <li><a href="change-password.php">Change Password</a></li>
                  <?php } ?>
                  <?php if($_SESSION['user_details']['user_level_id'] == 3) {?>
                        <li><a href="send_message.php">Send Message</a></li>
                        <li><a href="inbox-message.php">All Message</a></li>
                        <li><a href="report-payment.php">My Payments</a></li>
                        <li><a href="report-attendance.php">My Attandance</a></li>
                  <?php } ?>
					<?php if($_SESSION['login'] == 1) {?>
					<li><a href="./lib/login.php?act=logout">Logout</a></li>
					<?php } else { ?>
                        <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Login <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li><a href="login.php">Admin Login</a></li>
                          <li><a href="login.php">Employee Login</a></li>
                          <li><a href="subscriber-login.php">Subscriber Login</a></li>
                      </ul>
                  </li>
					<li><a href="./contact.php">Contact Us</a></li>
					<?php }?>
					</ul>
              </ul>
          </div>
      </div>
    </header>
    <!--header end-->
