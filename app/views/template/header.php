<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?=BASE_URL;?>/frontend/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="SaktiDev">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title><?=$data['title']?></title>
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/linearicons.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/themify-icons.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/bootstrap.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/nice-select.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/nouislider.min.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>/frontend/css/main.css">
</head>

<body>
    <!-- Start Header Area -->
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="home"><img src="<?=BASE_URL;?>/frontend/img/logo.png" width="150px" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="<?=BASE_URL;?>/home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=BASE_URL;?>/category">Category</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=BASE_URL;?>/contact">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?=BASE_URL;?>/company">Company Profile</a></li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?=BASE_URL?>/member">
                                    <?=is_null(Flasher::getMemberLog())?'Login':'Dashboard'?>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="<?=BASE_URL?>/cart" class="cart"><span class="ti-bag">
                        <?php 
                        if(Flasher::getMemberLog()['id']){
                            if(!empty($data['countcart'])){
                                foreach($data['countcart'] as $item){
                                    echo '('.$item['count'].')';
                                }
                            }else{
                                echo '(0)';
                            }
                        }else{
                            echo '(0)';
                         } ?>
                        </span></a></li>
                            <li class="nav-item">
                                <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" action="<?=BASE_URL?>/home/show" method="post">
                    <input type="text" name="search" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
