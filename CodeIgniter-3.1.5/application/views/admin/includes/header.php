<?php 
if(!(isset($_SESSION['email']))) {
    $title = "Please Sign In";
    redirect('login');
}
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/index-beta.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 01:51:53 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Float-Admin</title>

        <!-- Common plugins -->
        <link href="<?php echo base_url("admin_resources/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet">
         <link href="<?php echo base_url("admin_resources/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/pace/pace.css"); ?>" rel="stylesheet">
         <link href="<?php echo base_url("admin_resources/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css"); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url("admin_resources/plugins/nano-scroll/nanoscroller.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("admin_resources/plugins/metisMenu/metisMenu.min.css"); ?>">
        <link href="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-2.0.2.css"); ?>" rel="stylesheet" />
        
        <!--wysihtml5-->
        <link href="<?php echo base_url("admin_resources/plugins/wysihtml5/bootstrap-wysihtml5.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/summernote/summernote.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/summernote/summernote-bs3.css"); ?>" rel="stylesheet">

        <!--template css-->
        <link href="<?php echo base_url("admin_resources/css/style.css"); ?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!--top bar start-->
        <div class="top-bar bg-primary"><!--by default top bar is dark, add .light-top-bar class to make it light-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html" class="admin-logo">
                            <h1><img src="<?php echo base_url("admin_resources/images/logo-default.png"); ?>" alt=""></h1>
                        </a>
                        <div class="left-nav-toggle visible-xs visible-sm">
                            <a href="#">
                                <i class="glyphicon glyphicon-menu-hamburger"></i>
                            </a>
                        </div><!--end nav toggle icon-->
                        <!--start search form-->
                        <div class="search-form hidden-xs">
                            <form>
                                <input type="text" class="form-control" placeholder="Search for...">
                                <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--end search form-->
                    </div>
                    <div class="col-xs-6">
                        <ul class="list-inline top-right-nav">
                            <li class="dropdown hidden-xs icon-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    <span class="badge badge-warning">4</span>
                                </a>
                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                    <li>
                                        <div class="dropdown-header"><a href="#" class="pull-right text-muted"><small>View All</small></a> Messages </div>
                                        <div class="scrollDiv">

                                            <div class="notification-list">
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon">
                                                        <img src="images/avtar-2.jpg" alt="" class="img-circle" width="50">
                                                    </span>                                                 
                                                    <span class="notification-title">John Doe <label class="label label-primary pull-right">Office</label></span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon">
                                                        <img src="images/avtar-3.jpg" alt="" class="img-circle" width="50">
                                                    </span>                                                 
                                                    <span class="notification-title">Emily Doe  <label class="label label-info pull-right">Marketing</label></span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon">
                                                        <img src="images/avtar-4.jpg" alt="" class="img-circle" width="50">
                                                    </span>                                                 
                                                    <span class="notification-title">Michael Clark <label class="label label-warning pull-right">Support</label> </span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon">
                                                        <img src="images/avtar-5.jpg" alt="" class="img-circle" width="50">
                                                    </span>                                                 
                                                    <span class="notification-title">Ronaldo <label class="label label-success pull-right">Metting</label> </span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown hidden-xs icon-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-bell"></i>
                                    <span class="badge badge-danger">6</span>
                                </a>
                                <ul class="dropdown-menu top-dropdown lg-dropdown notification-dropdown">
                                    <li>
                                        <div class="dropdown-header"><a href="#" class="pull-right text-muted"><small>View All</small></a> Notifications </div>
                                        <div class="scrollDiv">
                                            <div class="notification-list">
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon"><i class="icon-cloud-upload text-primary"></i></span>                                                 
                                                    <span class="notification-title">Upload Complete</span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon"><i class="icon-info text-warning"></i></span>                                                 
                                                    <span class="notification-title">Storage Space low</span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                                <a href="javascript: void(0);" class="clearfix">
                                                    <span class="notification-icon"><i class="icon-check text-success"></i></span>                                                 
                                                    <span class="notification-title">Project Task Complete </span>
                                                    <span class="notification-description">Praesent dictum nisl non est sagittis luctus.</span>
                                                    <span class="notification-time">40 minutes ago</span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript: void(0);" class="right-sidebar-toggle"><i class="glyphicon glyphicon-align-right"></i></a>
                            </li>
                            <li class="dropdown avtar-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/avtar-1.jpg" class="img-circle" width="30" alt="">

                                </a>
                                <ul class="dropdown-menu top-dropdown">
                                    <li><a href="javascript: void(0);"><i class="icon-bell"></i> Activities</a></li>
                                    <li><a href="javascript: void(0);"><i class="icon-user"></i> Profile</a></li>
                                    <li><a href="javascript: void(0);"><i class="icon-settings"></i> Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="javascript: void(0);"><i class="icon-logout"></i> Logout</a></li>
                                </ul>
                            </li>

                        </ul> 
                    </div>
                </div>
            </div>
        </div>
        <!-- top bar end-->

        <!--right side bar panel-->
        <nav id="right-sidebar-toggle" class="right_sidebar">
            <div class="nano">
                <div class="nano-content">
                    <div>
                        <!-- Nav tabs -->
                        <ul class="list-inline nav-tab-panel clearfix" role="tablist">
                            <li role="presentation" class="active"><a href="#projects" aria-controls="projects" role="tab" data-toggle="tab">Projects</a></li>
                            <li role="presentation"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab">Contacts</a></li>

                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="projects">
                                <ul class="sidebar-list">
                                    <li class="sidebar-title">
                                        <h3 class="font-100"> Current projects</h3>
                                        <small>There are <strong>7</strong> Current project</small>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-primary pull-right">New</span>
                                            <h4>YII with material design</h4>
                                            <p>
                                                It is a long established fact that a reader will be distracted.
                                            </p>

                                            <div class="small">Completion with: 42%</div>
                                            <div class="progress progress-mini">
                                                <div style="width: 42%;" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                            <div class="small text-danger">Deadline - September 15, 2016</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-primary pull-right">New</span>
                                            <h4>HTML to AngularJs</h4>
                                            <p>
                                                It is a long established fact that a reader will be distracted.
                                            </p>

                                            <div class="small">Completion with: 12%</div>
                                            <div class="progress progress-mini">
                                                <div style="width: 12%;" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                            <div class="small text-danger">Deadline - September 15, 2016</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">Company</span>
                                            <h4>Website Re-design</h4>
                                            <p>
                                                It is a long established fact that a reader will be distracted.
                                            </p>

                                            <div class="small">Completion with: 84%</div>
                                            <div class="progress progress-mini">
                                                <div style="width: 84%;" class="progress-bar progress-bar-success"></div>
                                            </div>
                                            <div class="small text-danger">Deadline - September 15, 2016</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success pull-right">Metting</span>
                                            <h4>Business Consultancy</h4>
                                            <p>
                                                It is a long established fact that a reader will be distracted.
                                            </p>

                                            <div class="small">Completion with: 54%</div>
                                            <div class="progress progress-mini">
                                                <div style="width: 54%;" class="progress-bar progress-bar-info"></div>
                                            </div>
                                            <div class="small text-danger">Deadline - September 15, 2016</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-primary pull-right">New</span>
                                            <h4>YII with material design</h4>
                                            <p>
                                                It is a long established fact that a reader will be distracted.
                                            </p>

                                            <div class="small">Completion with: 42%</div>
                                            <div class="progress progress-mini">
                                                <div style="width: 42%;" class="progress-bar progress-bar-warning"></div>
                                            </div>
                                            <div class="small text-danger">Deadline - September 15, 2016</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-primary pull-right">New</span>
                                            <h4>HTML to AngularJs</h4>
                                            <p>
                                                It is a long established fact that a reader will be distracted.
                                            </p>

                                            <div class="small">Completion with: 12%</div>
                                            <div class="progress progress-mini">
                                                <div style="width: 12%;" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                            <div class="small text-danger">Deadline - September 15, 2016</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="contacts">

                                <ul class="list-unstyled sidebar-contact-list">
                                    <li class="clearfix">
                                        <a href="#" class="media-box">
                                            <span class="pull-right">
                                                <span class="circle circle-success circle-lg"></span>
                                            </span>
                                            <span class="pull-left">
                                                <!-- Contact avatar-->
                                                <img src="images/avtar-1.jpg" alt="user" class="media-box-object img-circle" width="50">
                                            </span>
                                            <!-- Contact info-->
                                            <span class="media-box-body">
                                                <span class="media-box-heading">
                                                    <strong>Angelina</strong>
                                                    <br>
                                                    <small class="text-muted">Designer</small>
                                                </span>
                                            </span>
                                        </a>
                                    </li><!--li end-->
                                    <li class="clearfix">
                                        <a href="#" class="media-box">
                                            <span class="pull-right">
                                                <span class="circle circle-success circle-lg"></span>
                                            </span>
                                            <span class="pull-left">
                                                <!-- Contact avatar-->
                                                <img src="images/avtar-2.jpg" alt="user" class="media-box-object img-circle" width="50">
                                            </span>
                                            <!-- Contact info-->
                                            <span class="media-box-body">
                                                <span class="media-box-heading">
                                                    <strong>John doe</strong>
                                                    <br>
                                                    <small class="text-muted">Designer</small>
                                                </span>
                                            </span>
                                        </a>
                                    </li><!--li end-->
                                    <li class="clearfix">
                                        <a href="#" class="media-box">
                                            <span class="pull-right">
                                                <span class="circle circle-danger circle-lg"></span>
                                            </span>
                                            <span class="pull-left">
                                                <!-- Contact avatar-->
                                                <img src="images/avtar-3.jpg" alt="user" class="media-box-object img-circle" width="50">
                                            </span>
                                            <!-- Contact info-->
                                            <span class="media-box-body">
                                                <span class="media-box-heading">
                                                    <strong>Eluga Smith</strong>
                                                    <br>
                                                    <small class="text-muted">Designer</small>
                                                </span>
                                            </span>
                                        </a>
                                    </li><!--li end-->
                                    <li class="clearfix">
                                        <a href="#" class="media-box">
                                            <span class="pull-right">
                                                <span class="circle circle-lg"></span>
                                            </span>
                                            <span class="pull-left">
                                                <!-- Contact avatar-->
                                                <img src="images/avtar-4.jpg" alt="user" class="media-box-object img-circle" width="50">
                                            </span>
                                            <!-- Contact info-->
                                            <span class="media-box-body">
                                                <span class="media-box-heading">
                                                    <strong>Jonathan Doe</strong>
                                                    <br>
                                                    <small class="text-muted">Designer</small>
                                                </span>
                                            </span>
                                        </a>
                                    </li><!--li end-->
                                    <li class="clearfix">
                                        <a href="#" class="media-box">
                                            <span class="pull-right">
                                                <span class="circle circle-success circle-lg"></span>
                                            </span>
                                            <span class="pull-left">
                                                <!-- Contact avatar-->
                                                <img src="images/avtar-5.jpg" alt="user" class="media-box-object img-circle" width="50">
                                            </span>
                                            <!-- Contact info-->
                                            <span class="media-box-body">
                                                <span class="media-box-heading">
                                                    <strong>Angelina</strong>
                                                    <br>
                                                    <small class="text-muted">Designer</small>
                                                </span>
                                            </span>
                                        </a>
                                    </li><!--li end-->
                                    <li>
                                        <div class=" text-center">
                                            <!-- Optional link to list more users-->
                                            <a href="javascript:void(0);" title="See more contacts" class="btn btn-teal">
                                                Load more..
                                            </a>
                                        </div>
                                    </li>
                                </ul><!--end sidebar contacts-list-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
        <!--end right side bar panel-->

        <!--left navigation start-->
        <aside class="float-navigation">
            <div class="nano">
                <div class="nano-content">
                    <ul class="metisMenu nav" id="menu">
                        <li class="nav-heading"><span>Main Navigation</span></li>
                        <li><?php echo anchor("home/index/", 'Home'); ?></li>
                        <li><?php echo anchor("home/form/", 'Form'); ?></li>
                        <li><?php echo anchor("home/product", 'See All News') ?></li>
                         <li><?php echo anchor("home/category/", 'Category'); ?></li>
                        <li><a href="user.php">Client Bought </a></li>
                        <li class="nav-heading"><span>More</span></li>
                        <li><?php echo anchor("register/index/", 'Register'); ?></li>
                        <li><?php echo anchor("login/logout/", 'Logout'); ?></li>
                        <!--<li><a href="landing/index.html" target="_blank" class="bg-primary"><i class="icon-star"></i>Landing page</a></li>-->
                    </ul>
                </div><!--nano content-->
            </div><!--nano scroll end-->
        </aside>
        <!--left navigation end-->