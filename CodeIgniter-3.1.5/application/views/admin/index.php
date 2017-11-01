<?php include "includes/header.php" ?>


        <!--main content start-->
        <section class="main-content">



            <!--page header start-->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h4><marquee>Welcome <?php echo $this->session->userdata('email'); ?></marquee></h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ol class="breadcrumb">
                            <li><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                            <li>Dashboard Beta</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--page header end-->


            <!--start page content-->

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-chart white-bg padding-0">
                        <div class="widget-title">
                            <span class="label label-primary pull-right">Monthly</span>
                            <h5 class="margin-b-0">Income</h5>
                        </div>
                        <div class="widget-content">
                            <h1 class="no-margins">49,5493</h1>
                            <div class="font-500 text-primary pull-right">98% <i class="fa fa-bolt"></i></div>
                            <small>Total income</small>                            
                        </div>
                        <div id="sparkline1" class="sparkline-chart"></div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-chart white-bg padding-0">
                        <div class="widget-title">
                            <span class="label label-success pull-right">Monthly</span>
                            <h5 class="margin-b-0">Orders</h5>
                        </div>
                        <div class="widget-content">
                            <h1 class="no-margins">5393</h1>
                            <div class="font-500 text-success pull-right">28% <i class="fa fa-level-up"></i></div>
                            <small>Total orders</small>                            
                        </div>
                        <div id="sparkline2" class="sparkline-chart"></div>
                    </div>
                </div><!--end col-->
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-chart white-bg padding-0">
                        <div class="widget-title">
                            <span class="label label-warning pull-right">Monthly</span>
                            <h5 class="margin-b-0">Visitors</h5>
                        </div>
                        <div class="widget-content">
                            <h1 class="no-margins">39,5493</h1>
                            <div class="font-500 text-warning pull-right">18% <i class="fa fa-level-up"></i></div>
                            <small>Total visitor</small>                            
                        </div>
                        <div id="sparkline3" class="sparkline-chart"></div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widget-chart white-bg padding-0">
                        <div class="widget-title">
                            <span class="label label-danger pull-right">Low</span>
                            <h5 class="margin-b-0">Active users</h5>
                        </div>
                        <div class="widget-content">
                            <h1 class="no-margins">5393</h1>
                            <div class="font-500 text-danger pull-right">8% <i class="fa fa-level-down"></i></div>
                            <small>Total active users</small>                            
                        </div>
                        <div id="sparkline4" class="sparkline-chart"></div>
                    </div>
                </div><!--end col-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sales Statics
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-9">
                                    <div>
                                        <canvas id="sharpLinechart" height="90"></canvas>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <ul class="stat-list list-unstyled">
                                        <li>
                                            <h2 class="margin-b-0 font-300">1234</h2>
                                            <small>Total orders in period</small>
                                            <div class="stat-percent">48% <i class="fa fa-level-up text-primary"></i></div>
                                            <div class="progress progress-xs">
                                                <div style="width: 48%;" class="progress-bar"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="margin-b-0  font-300">5433</h2>
                                            <small>Orders in last month</small>
                                            <div class="stat-percent">60% <i class="fa fa-level-down text-success"></i></div>
                                            <div class="progress progress-xs">
                                                <div style="width: 60%;" class="progress-bar progress-bar-success"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <h2 class="margin-b-0 font-300">7654</h2>
                                            <small>Monthly income from orders</small>
                                            <div class="stat-percent">22% <i class="fa fa-bolt text-danger"></i></div>
                                            <div class="progress progress-xs">
                                                <div style="width: 22%;" class="progress-bar progress-bar-danger"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--col-md-12-->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-rounded btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu panel-dropdown" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                            Project States

                        </div>
                        <div class="panel-body">
                            <div class="scrollDiv">
                                <ul class="sidebar-list projects-list">                           
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

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default collapsed">
                        <div class="panel-heading">
                            World Map 
                        </div>
                        <div class="panel-body">
                            <div id="world-map-markers" style="height: 250px"></div>
                        </div>
                    </div><!--end panel-->
                </div>

            </div>

            <!--end page content-->


            <!--Start footer-->
            <footer class="footer">
                <span>Copyright &copy; 2016. Float</span>
            </footer>
            <!--end footer-->

        </section>
        <!--end main content-->



        <!--Common plugins-->
        <script src="<?php echo base_url("admin_resources/plugins/jquery/dist/jquery.min.js"); ?>"></script>
        <script src=<?php echo base_url("admin_resources/plugins/bootstrap/js/bootstrap.min.js"); ?>></script>
        <script src="<?php echo base_url("admin_resources/plugins/pace/pace.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/slimscroll/jquery.slimscroll.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/nano-scroll/jquery.nanoscroller.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/metisMenu/metisMenu.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/js/float-custom.js"); ?>"></script>
        <!--page script-->
        <script src="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-world-mill-en.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-in-mill.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-us-aea-en.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-uk-mill-en.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/vectormap/jquery-jvectormap-au-mill.js"); ?>"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/chartJs/Chart.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/sparkline/jquery.sparkline.min.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/js/dashboard-beta.js"); ?>"></script>
    </body>

<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/index-beta.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 01:52:25 GMT -->
</html>