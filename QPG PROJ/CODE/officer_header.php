<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Question Paper Generator</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
  <style>
	.sidebar{
		background:#78C9E9 !important;
		height:900px;
	}
	

  </style>
  <?php
  include('config.php');

  ?>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
         <a  style="color:#000;" href="index.php"><h1 style="font-family:poppins;font-size:25px;padding-left:10px;">Question Paper Generator</h1>
       </a> </div>
        <ul class="nav">
       
           <li class="nav-item">
            <a class="nav-link" href="add.php">
              <i class="mdi mdi-plus menu-icon"></i>
              <span class="menu-title">Add Question</span>
            </a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="view_question.php">
              <i class="mdi mdi-eye menu-icon"></i>
              <span class="menu-title">View Question</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="gen_ques.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Generate Question</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="request_sub.php">
              <i class="mdi mdi-tab-plus menu-icon"></i>
              <span class="menu-title">Request</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="requested.php">
              <i class="mdi mdi-content-copy menu-icon"></i>
              <span class="menu-title">All Request</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Sign Out</span>
            </a>
          </li>
        
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
           
          
           
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>