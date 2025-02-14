<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>User Admin | Fikti Space 2022</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/png" href="../../images/favicon.png" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/themify-icons.css" />
    <link rel="stylesheet" href="../assets/css/metisMenu.css" />
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../assets/css/slicknav.min.css" />
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../assets/css/typography.css" />
    <link rel="stylesheet" href="../assets/css/default-css.css" />
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- modernizr css -->
    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
      <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
      <!-- sidebar menu area start -->
      <div class="sidebar-menu">
        <div class="sidebar-header">
          <div class="logo py-0 my-0">
            <a href="../../index.php"><img src="../../images/fspace-logo-op.png" alt=""/></a>
          </div>
        </div>
        <div class="main-menu">
          <div class="menu-inner">
            <nav>
              <ul class="metismenu" id="menu">
                <li class="<?php $active = $page == 'home' ? 'active' : ''; echo $active;?>">
                  <a href="./index.php" aria-expanded="true"><i class="fa-solid fa-house"></i><span>Home</span></a>
                </li>
                <li class="<?php $active = $page == 'my team' ? 'active' : ''; echo $active;?>">
                  <a href="./users.php" aria-expanded="true"><i class="fa-solid <?php $class=$comp=='sport'?'fa-people-group':'fa-user'; echo $class;?>"></i><span><?php $text=$comp=='sport'?'My Team':'My Profile'; echo $text;?></span></a>
                </li>
                <li class="<?php $active = $page == 'payment' ? 'active' : ''; echo $active;?>">
                  <a href="./payment.php" aria-expanded="true"><i class="fa-solid fa-money-bill-1-wave"></i><span>Payment</span></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- sidebar menu area end -->
      <!-- main content area start -->
      <div class="main-content">
        <!-- header area start -->
        <div class="header-area">
          <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-4 clearfix">
              <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <!-- profile info & task notification -->
            <div class="col-md-6 col-8 clearfix">
              <ul class="notification-area pull-right">

                <li><h6>Hello, <?=$username?></h6></li>

                <li class="dropdown">
                  <i class="fa-solid fa-user dropdown-toggle" data-toggle="dropdown"></i>
                  <div class="dropdown-menu" style="box-shadow: 0 0 2px black;">
                    <a href="../../index.php" class="px-4"><i class="fa-solid fa-arrow-right-from-bracket"></i> Homepage</a>
                  </div>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        <!-- header area end -->




        <div class="main-content-inner" style="min-height: 80vh;">