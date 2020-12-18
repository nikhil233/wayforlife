<?php
    //including the database connection file
include_once("classes/Crud.php");
include_once("classes/Validation.php");
include_once("classes/DbConfig.php");
include_once("classes/constant.php");
$crud = new Crud();
$validation = new Validation();
$db = new DbConfig();

include_once("config.php");


$curStr=$_SERVER['REQUEST_URI'];
$curArr=explode('/',$curStr);
$cur_path=$curArr[count($curArr)-1];
$page_title='';
if($cur_path=='' || $cur_path=='index' || $cur_path=='aboutus' ){
	$page_title='Way For Life – #StartsWithYou';
}elseif($cur_path=='csr'){
  $page_title='CSR – Way For Life ';
}elseif($cur_path=='activities' ){
	$page_title='Our Activities– Way For Life ';
}elseif($cur_path=='blog'){
	$page_title='Bolg– Way For Life';
}elseif($cur_path=='contact'){
	$page_title='Get in Touch – Way For Life';
}elseif($cur_path=='events' ){
	$page_title='Upcoming Activities – Way For Life';
}elseif($cur_path=='faq' ){
	$page_title='FAQ– Way For Life';
}elseif($cur_path=='gallery'){
	$page_title='Gallery– Way For Life';
}elseif($cur_path=='internship'){
	$page_title='Internship– Way For Life';
}elseif($cur_path=='Joinus'){
	$page_title='Join us – Way For Life';
}elseif($cur_path=='policies'){
	$page_title='Policies– Way For Life';
}
else{
    $page_title='Way For Life – #StartsWithYou';
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $page_title?></title>
    <link rel="icon" href="<?php echo FRONT_SITE_PATH?>img/logo new.jpg">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>css/owl.carousel.min.css">
    <!-- themify CSS -->
    <!-- <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>css/themify-icons.css"> -->
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>css/magnific-popup.css">
    <!-- nice select CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <!-- swiper CSS -->
    
    <!-- style CSS -->
    <link rel="stylesheet" href="<?php echo FRONT_SITE_PATH?>css/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108799455-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108799455-1');
    </script>
    
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo FRONT_SITE_PATH?>"> <img src="<?php echo FRONT_SITE_PATH?>img/logo.svg" alt="logo" style="max-width:150px;"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="ti-menu"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end topmenu"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo FRONT_SITE_PATH?>aboutus">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo FRONT_SITE_PATH?>csr">CSR</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Activities
                                        </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" role="menu">
                                        <a class="dropdown-item" href="<?php echo FRONT_SITE_PATH?>events">Upcoming Activities</a>
                                        <a class="dropdown-item" href="<?php echo FRONT_SITE_PATH?>activities">Our Activities</a>
                                        <a class="dropdown-item" href="<?php echo FRONT_SITE_PATH?>blog">Blog</a>
                                        <a class="dropdown-item" href="<?php echo FRONT_SITE_PATH?>gallery">Gallery</a>

                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo FRONT_SITE_PATH?>Joinus">Join us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo FRONT_SITE_PATH?>internship">Internship</a>
                                </li>
                        
                               

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo FRONT_SITE_PATH?>contact">Get in Touch</a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->