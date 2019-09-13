<?php 
session_start();
require_once("../dev/autoload.php");
$login = new Login;
$registration = new Customer;
$general = new General;
$statement = new Statement;
if(!isset($_SESSION['id'])){ ?> 
<script> window.location=(".././")</script><?php 

}

$username = $_SESSION['username'];


?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- Meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="keywords" content="">
<!-- /meta tags -->
<title>STATEMENT PAL</title>

	<!-- Site favicon -->
	<link rel="shortcut icon" href="assets/images/log.jpg" type="image/x-icon">
	<link rel="stylesheet" href="node_modules/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/gaxon-icon/styles.css">
    <link rel="stylesheet" href="node_modules/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/chartist/dist/chartist.min.css">
    <link rel="stylesheet" href="assets/css/semidark-style-1.min.css">
    <link href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="vendors/gaxon-icon/styles.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/Toast/css/Toast.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/summernote/dist/summernote-bs4.css" rel="stylesheet">
   
</head>
<div class="dt-loader-container">
    <div class="dt-loader">
      
    </div>
</div>
<body class="dt-sidebar--fixed dt-header--fixed">
    <div class="dt-root">
    <div class="dt-root__inner">
        <!-- Header -->
		<header class="dt-header">

		<!-- Header container -->
			<div class="dt-header__container">

				<!-- Brand -->
				<div class="dt-brand">

				<!-- Brand tool -->
				<div class="dt-brand__tool" data-toggle="main-sidebar">
					<div class="hamburger-inner"></div>
				</div>
				<!-- /brand tool -->

				<!-- Brand logo -->
				<!-- <span class="dt-brand__logo">
					<a class="dt-brand__logo-link" href="index.html">
					<img class="dt-brand__logo-img d-none d-sm-inline-block" src="assets/images/logo.png" alt="Drift">
					<img class="dt-brand__logo-symbol d-sm-none" src="assets/images/logo-symbol.png" alt="Drift">
					</a>
				</span> -->
				<!-- /brand logo -->

				</div>
				<!-- /brand -->

				<!-- Header toolbar-->
				<div class="dt-header__toolbar">

				<!-- Search box -->
				<form class="search-box d-none d-lg-block">
					<div class="input-group">
					<input class="form-control" placeholder="Search in app..." value="" type="search">
					<span class="search-icon"><i class="icon icon-search icon-lg"></i></span>
					<div class="input-group-append">
						<button class="btn btn-primary " type="button" data-toggle="" aria-haspopup=""
								aria-expanded="false">Search
						</button>

						
					</div>
					</div>
				</form>
				

				</div>
				<!-- /header toolbar -->

			</div>
		<!-- /header container -->

		</header>