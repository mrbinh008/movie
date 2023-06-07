<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./view/assets/images/favicon.png">
    <title>Matrix Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <!-- <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet"> -->
    <!-- Custom CSS -->
    <link href="./view/dist/css/style.min.css" rel="stylesheet">
<!--    <link href="./view/dist/css/seat.css" rel="stylesheet">-->
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./view/assets/extra-libs/multicheck/multicheck.css">
    <link href="./view/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

     <!-- Custom CSS -->

     <link rel="stylesheet" type="text/css" href="./view/assets/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="./view/assets/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="./view/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="./view/assets/libs/quill/dist/quill.snow.css">

    <!-- Custom CSS Jquery -->
    <link href="./view/assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="./view/assets/libs/jquery-steps/steps.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <!--    fontawesome icon-->
    <script src="https://kit.fontawesome.com/95ecdda2aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="?ctr=home">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="./view/assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="./view/assets/images/logo-text.png" alt="homepage" class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown ">
                            <h6 class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic">Xin chào <?=$_SESSION['user_admin']->full_name?></h6>
                        </li>


                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="./view/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
<!--                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>-->
<!--                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>-->
<!--                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>-->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?ctr=admin_member_edit&id=<?=$_SESSION['user_admin']->id?>"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?ctr=logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
<!--                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="?ctr=home" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-user-secret"></i><span class="hide-menu">Thành viên quản trị</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?ctr=admin_member_add" class="sidebar-link"><i class="fa-solid fa-user-plus"></i><span class="hide-menu"> Thêm thành viên </span></a></li>
                                <li class="sidebar-item"><a href="?ctr=admin_member_list" class="sidebar-link"><i class="fa-solid fa-list"></i><span class="hide-menu"> Danh sách thành viên </span></a></li>
                            </ul>
                        </li>

                            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Quản lý chi nhánh</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?ctr=chi_nhanh_add" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Thêm chi nhánh </span></a></li>
                                <li class="sidebar-item"><a href="?ctr=add_film_chi_nhanh" class="sidebar-link"><i class="fa-solid fa-list"></i><span class="hide-menu"> Thêm phim của chi nhánh </span></a></li>
                                <li class="sidebar-item"><a href="?ctr=chi_nhanh_list" class="sidebar-link"><i class="fa-solid fa-list"></i><span class="hide-menu"> Danh sách chi nhánh </span></a></li>
                            </ul>
                        </li>

<!--                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-film"></i><span class="hide-menu">Quản lý phòng chiếu</span></a>-->
<!--                            <ul aria-expanded="false" class="collapse  first-level">-->
<!--                                <li class="sidebar-item"><a href="?ctr=phong_add" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Thêm phòng chiếu </span></a></li>-->
<!--                                <li class="sidebar-item"><a href="?ctr=phong_list" class="sidebar-link"><i class="fa-solid fa-list"></i><span class="hide-menu"> Danh sách phòng </span></a></li>-->
<!--                            </ul>-->
<!--                        </li>-->

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-light fa-list"></i><span class="hide-menu">Lịch chiếu</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?ctr=lich_chieu_add" class="sidebar-link"><i class="fa-solid fa-user-plus"></i><span class="hide-menu"> Thêm lịch chiếu </span></a></li>
<!--                                <li class="sidebar-item"><a href="?ctr=lich_chieu_list" class="sidebar-link"><i class="fa-solid fa-list"></i></i><span class="hide-menu"> Danh sách Lịch chiếu </span></a></li>-->
                            </ul>
                        </li>


<!--                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-file-invoice-dollar"></i><span class="hide-menu">Quản lý hóa đơn</span></a>-->
<!--                            <ul aria-expanded="false" class="collapse  first-level">-->
<!--                                <li class="sidebar-item"><a href="?ctr=ve_list" class="sidebar-link"><i class="fa-solid fa-list"></i><span class="hide-menu"> Danh sách hóa đơn </span></a></li>-->
<!--                            </ul>-->
<!--                        </li>-->


                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-film"></i><span class="hide-menu">Thể loại phim</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?ctr=the_loai_add" class="sidebar-link"><i class="fa-solid fa-user-plus"></i><span class="hide-menu"> Thêm thể loại </span></a></li>
                                <li class="sidebar-item"><a href="?ctr=the_loai_list" class="sidebar-link"><i class="fa-solid fa-list"></i></i><span class="hide-menu"> Danh sách thể loại phim </span></a></li>
                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Quản lý phim</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="?ctr=phim_add" class="sidebar-link"><i class="fa-solid fa-user-plus"></i><span class="hide-menu"> Thêm phim </span></a></li>
                                <li class="sidebar-item"><a href="?ctr=phim_list" class="sidebar-link"><i class="fa-solid fa-list"></i></i><span class="hide-menu"> Danh sách phim </span></a></li>
                            </ul>
                        </li>


                          </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->