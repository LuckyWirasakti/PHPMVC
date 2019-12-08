<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$data['title']?></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo BASE_URL; ?>/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo BASE_URL; ?>/backend/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo BASE_URL; ?>/backend/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="admindashboard">Start Bootstrap</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow mx-1">
            <a href="<?=BASE_URL?>/adminauthentication/logout" class="btn btn-danger btn-sm">Logout</a>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="<?=BASE_URL?>/admindashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=BASE_URL?>/admincontact">
                <i class="fas fa-file-signature"></i>
                <span>Contact Me</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cogs"></i>
                <span>Setting</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <h6 class="dropdown-header">Frontend Management :</h6>
                <a class="dropdown-item" href="<?=BASE_URL?>/adminhome">Home</a>
                <a class="dropdown-item" href="#">Profile</a>
                <h6 class="dropdown-header">Backend Management :</h6>
                <a class="dropdown-item" href="adminuser">User</a>
                <h6 class="dropdown-header">Leave:</h6>
                <a class="dropdown-item" href="<?=BASE_URL?>/adminauthentication/logout">Logout</a>
            </div>
        </li>
    </ul>

    <div id="content-wrapper">

        <div class="container-fluid">