<!DOCTYPE html>
<!--
Template Name: Movie Pro
Version: 1.0.0
Author: Webstrot
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8"/>
    <title>Movie-Categories</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Movie Pro"/>
    <meta name="keywords" content="Movie Pro"/>
    <meta name="author" content=""/>
    <meta name="MobileOptimized" content="320"/>
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="view/asset/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/bootstrap.css"/>
<!--    <link rel="stylesheet" type="text/css" href="view/asset/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" type="text/css" href="view/asset/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/owl.theme.default.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/dl-menu.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/nice-select.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/css/venobox.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/js/plugin/rs_slider/layers.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/js/plugin/rs_slider/navigation.css"/>
    <link rel="stylesheet" type="text/css" href="view/asset/js/plugin/rs_slider/settings.css"/>
<!--    <link rel="stylesheet" type="text/css" href="view/asset/js/multicheck/multicheck.css"/>-->
    <link rel="stylesheet" type="text/css" href="view/asset/css/style.css"/>
<!--    <link rel="stylesheet" type="text/css" href="view/asset/css/style.min.css"/>-->
    <link rel="stylesheet" type="text/css" href="view/asset/css/responsive.css"/>
<!--    <link rel="stylesheet" type="text/css" href="view/asset/css/datatables.net-bs4/css/dataTables.bootstrap4.css"/>-->

<!--    <link href="view/asset/css/jqueryStep/jquery.steps.css" rel="stylesheet">-->
<!--    <link href="view/asset/css/jqueryStep/steps.css" rel="stylesheet">-->
<!--    <link rel="stylesheet" id="theme-color" type="text/css" href="#"/>-->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="view/asset/images/header/favicon.ico"/>
</head>

<body>
<!-- preloader Start -->
<div id="preloader">
    <div id="status">
        <img src="view/asset/images/header/horoscope.gif" id="preloader_image" alt="loader">
    </div>
</div>

<!-- prs navigation Start -->
<div class="prs_navigation_main_wrapper">
    <div class="container-fluid">
        <div id="search_open" class="gc_search_box">
            <input type="text" placeholder="Search here">
            <button><i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </div>
        <div class="prs_navi_left_main_wrapper">
            <div class="prs_logo_main_wrapper">
                <a href="?ctr=home">
                    <img src="view/asset/images/header/logo.png" alt="logo"/>
                </a>
            </div>
            <div class="prs_menu_main_wrapper">
                <nav class="navbar navbar-default">
                    <div id="dl-menu" class="xv-menuwrapper responsive-menu">
                        <button class="dl-trigger">
                            <img src="view/asset/images/header/bars.png" alt="bar_png">
                        </button>
                        <div class="prs_mobail_searchbar_wrapper" id="search_button"><i class="fa fa-search"></i>
                        </div>
                        <div class="clearfix"></div>
                        <ul class="dl-menu">
                            <li class="parent"><a href="?ctr=home">Danh sách phim</a></li>
<!--                            <li class="parent"><a href="?ctr=contact">Liên hệ</a></li>-->
                        </ul>
                    </div>
                    <!-- /dl-menuwrapper -->
                </nav>
            </div>
        </div>
        <div class="prs_navi_right_main_wrapper">
            <div class="prs_slidebar_wrapper">

            </div>
            <div class="prs_top_login_btn_wrapper" style="display: <?=!isset($_SESSION['user'])?'block':'none'?>" >
                <div class="prs_animate_btn1">
                    <ul>
                        <li><a href="#" class="button button--tamaya" data-text="Login" data-toggle="modal"
                               data-target="#myModal"><span>Đăng nhập</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="prs_top_login_btn_wrapper" style="display: <?=isset($_SESSION['user'])?'block':'none'?>">
                <div class="dropdown">
                    <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?=$_SESSION['user']->full_name?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" >
                        <a class="dropdown-item" href="http://localhost/movie/client/user/">Thông tin tài khoản</a>
                        <a class="dropdown-item" href="?ctr=logout">Đăng xuất</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>