<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewinter.com/html/news247/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 11 Aug 2017 00:06:50 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>News247 - News Magazine Newspaper HTML Template</title>

    <!-- Mobile Specific Metas
    ================================================== -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <!-- CSS
    ================================================== -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/bootstrap.min.css");?>">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/style.css");?>">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/responsive.css");?>">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/font-awesome.min.css");?>">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/animate.css");?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/owl.carousel.min.css");?>">
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/owl.theme.default.min.css");?>">
    <!-- Colorbox -->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/colorbox.css");?>">
    <!-- Skin -->
    <link rel="stylesheet" href="<?php echo base_url("user_resources/css/skin.css");?>">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('user_resources/js/html5shiv.js');?>"></script>
    <script src="<?php echo base_url('user_resources/js/respond.min.js');?>"></script>
    <![endif]-->

</head>

<body>

<div class="body-inner">

    <div class="trending-bar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="trending-title">Trending Now</h3>
                    <div id="trending-slide" class="owl-carousel owl-theme trending-slide">
                        <?php
                        $query = $this->db->query("SELECT * FROM news ORDER BY id DESC");
                        $row = $query->row();
                        foreach ($query->result_array() as $row):
                            ?>
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-small">
                                    <?php echo anchor("user_index/post/{$row['id']}", "{$row['title']}", array('title' => 'News title')); ?>
                                </h2>
                            </div><!-- Post content end -->
                        </div><!-- Item 1 end -->
                        <?php endforeach; ?>
                    </div><!-- Carousel end -->
                </div><!-- Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </div><!--/ Trending end -->

    <div id="top-bar" class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="ts-date">
                        <i class="fa fa-calendar-check-o"></i>May 29, 2017
                    </div>
                    <ul class="unstyled top-nav">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Write for Us</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div><!--/ Top bar left end -->

                <div class="col-md-4 col-sm-4 col-xs-12 top-social text-right">
                    <ul class="unstyled">
                        <li>
                            <a title="Facebook" href="#">
                                <span class="social-icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a title="Twitter" href="#">
                                <span class="social-icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a title="Google+" href="#">
                                <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                            </a>
                            <a title="Linkdin" href="#">
                                <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                            <a title="Rss" href="#">
                                <span class="social-icon"><i class="fa fa-rss"></i></span>
                            </a>
                            <a title="Skype" href="#">
                                <span class="social-icon"><i class="fa fa-skype"></i></span>
                            </a>
                        </li>
                    </ul><!-- Ul end -->
                </div><!--/ Top social col end -->
            </div><!--/ Content row end -->
        </div><!--/ Container end -->
    </div><!--/ Topbar end -->

    <!-- Header start -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="logo">
                        <a href="index-2.html">
                            <img src="<?php echo base_url("user_resources/images/logos/logo.png"); ?>" alt="">
                        </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <a href="#"><img src="<?php echo base_url("user_resources/images/banner-ads/ad-top-header.png"); ?>" class="img-responsive" alt=""></a>
                    </div>
                </div><!-- header right end -->
            </div><!-- Row end -->
        </div><!-- Logo and banner area end -->
    </header><!--/ Header end -->

    <div class="main-nav clearfix">
        <div class="container">
            <div class="row">
                <nav class="site-navigation navigation">
                    <div class="site-nav-inner pull-left">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">

                                <li class="dropdown">
                                    <?php echo anchor("user_index", 'Home'); ?>
                                </li>
                                <?php
                                $query = $this->db->query("SELECT * FROM category");
                                $row = $query->row();
                                foreach ($query->result_array() as $row):
                                ?>

                                    <li class="dropdown">
                                        <?php echo anchor("user_index/category/{$row['category']}", "{$row['category']}", array('record'=>"{$row['category']}")); ?>
                                    </li>

                                <?php endforeach; ?>
                            </ul><!--/ Nav ul end -->
                        </div><!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->
                </nav><!--/ Navigation end -->

                <div class="nav-search">
                    <span id="search"><i class="fa fa-search"></i></span>
                </div><!-- Search end -->

                <div class="search-block" style="display: none;">
                    <input type="text" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->