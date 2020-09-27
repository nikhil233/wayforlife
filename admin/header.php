<?php
include_once("../classes/Crud.php");
include_once("../classes/Validation.php");
include_once("../classes/DbConfig.php");
include_once("../classes/constant.php");
include_once("../classes/functions.php");
include_once("./scripts.php");
$crud = new Crud();
$validation = new Validation();
$db = new DbConfig();
$script= new script();

$curStr=$_SERVER['REQUEST_URI'];
$curArr=explode('/',$curStr);
$cur_path=$curArr[count($curArr)-1];

if(!isset($_SESSION['IS_LOGIN'])){
  redirect('login');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Way for Life Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.html"><img src="assets/images/logo-new.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-new.png" alt="logo"/></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><?php echo $_SESSION['user_name'] ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="profile.php?id=<?php echo $_SESSION['user_session'] ?> ">
                <i class="mdi mdi-logout text-primary"></i>
                Profile
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
             
            </div>
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php 
					 if($_SESSION['admin_role']==0){
            echo"  <li class='nav-item'>
                <a class='nav-link' href='Admin_management.php'>
                  <i class='mdi mdi-view-headline menu-icon'></i>
                  <span class='menu-title'>ADMIN MANAGMENT</span>
                </a>
              </li>";
           }?>
          <li class="nav-item">
            <a class="nav-link" href="join-us">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">join-us Submission</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="internship">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Internship Submission</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="events">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Events</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog_list">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Blog</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gallery_img">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact_sub">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Contact Submission</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="newsletter">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Newsletter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="interns_data">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Interns Data</span>
            </a>
          </li>
          
         
          
        </ul>
      </nav>

       <!-- partial -->
       <div class="main-panel">
        <div class="content-wrapper">