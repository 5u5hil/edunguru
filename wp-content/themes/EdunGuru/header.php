
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<!-- Favicon and Touch Icons -->
<link href="<?= get_template_directory_uri(); ?>/images/edu-favicon.png" rel="shortcut icon" type="image/png">
<link href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?= get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?= get_template_directory_uri(); ?>/css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="<?= get_template_directory_uri(); ?>/css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?= get_template_directory_uri(); ?>/css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?= get_template_directory_uri(); ?>/css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?= get_template_directory_uri(); ?>/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?= get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
 <link href="<?= get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css"> 

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?= get_template_directory_uri(); ?>/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?= get_template_directory_uri(); ?>/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?= get_template_directory_uri(); ?>/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?= get_template_directory_uri(); ?>/css/colors/theme-skin-color-set-1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->

<script src="<?= get_template_directory_uri(); ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?= get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php  wp_head(); ?>
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="<?= get_template_directory_uri(); ?>/images/preloaders/5.gif">
    </div>
    <!--<div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>-->
  </div>
 <header id="header" class="header">
            <div class="header-top bg-white-f1 sm-text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="widget no-border m-0">
                                <ul class="list-inline sm-text-center mt-5">
                                    <li> <i class="fa fa-phone text-theme-colored"></i> Call Us at <a href="#">0124-4600130</a> </li>
                                    <li> <i class="fa fa-envelope-o text-theme-colored"></i> <a href="#">vikram@edunguru.com</a> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="widget no-border m-0">
                                <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li style="width:auto !important;"><a href="login.php" style="width:auto !important;">Login / Register</a></li>
                                    <!--<li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-nav">
                <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
                    <div class="container">
                        <nav id="menuzord-right" class="menuzord default">
                            <a class="menuzord-brand pull-left flip" href="javascript:void(0)">
                                <img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="">
                            </a>
                            <ul class="menuzord-menu">
                                <li class="active"><a href="#">Home</a>
                                </li>
                                <li><a href="#">About</a>
                                </li>
                                <li><a href="#">Our Concept</a>
                                </li>
                                <li><a href="#">Delivery Methods</a>
                                </li>
                                <li><a href="#">Courses / Packages</a>
                                </li>
                                <li><a href="#">Student’s journey</a>
                                </li>
                                <li><a href="#">Salient Features</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
