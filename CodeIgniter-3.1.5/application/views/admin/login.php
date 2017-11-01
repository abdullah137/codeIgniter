<?php
$title = "Please Sign In";
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 02:00:31 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title; ?></title>

        <!-- Common plugins -->
        <link href="<?php echo base_url("admin_resources/plugins/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/simple-line-icons/simple-line-icons.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/pace/pace.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("admin_resources/plugins/jasny-bootstrap/css/jasny-bootstrap.min.css"); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url("admin_resources/plugins/nano-scroll/nanoscroller.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("admin_resources/plugins/metisMenu/metisMenu.min.css"); ?>">
        <!--for checkbox-->
        <link href="<?php echo base_url("admin_resources/plugins/iCheck/blue.css"); ?>" rel="stylesheet">
        <!--template css-->
        <link href="<?php echo base_url("admin_resources/css/style.css"); ?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            html,body{
                height: 100%;
            }
        </style>
    </head>
    <body>

        <div class="misc-wrapper">
            <div class="misc-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                            <div class="misc-header text-center">
                                <img src="<?php echo base_url("admin_resources/images/logo-default.png"); ?>" alt="">
                            </div>
                            <div class="misc-box">   
                                <p class="text-center text-uppercase pad-v">Login to continue.</p>
                               <?php echo form_open('login/validate'); ?>
                                    <div class="form-group">                                      
                                        <label class="text-muted" for="exampleuser1">Email</label>
                                        <div class="group-icon">
                                        <input id="exampleuser1" name="email" type="text" placeholder="Email" class="form-control" required="">
                                        <span class="icon-user text-muted icon-input"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="exampleInputPassword1">Password</label>
                                        <div class="group-icon">
                                        <input id="exampleInputPassword1" name="password" type="password" placeholder="Password" class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-right">
                                            <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
                                        </div>
                                    </div>

                                <?php echo @$message; ?>
                                    <hr>
                                    <p class=" text-center">Need to Signup?</p>
                                    <?php echo anchor("register/index",'Register', ['class'=>"btn btn-block btn-default"]); ?>
                                </form>
                            </div>
                            <div class="text-center misc-footer">
                                <span>&copy; Copyright 2016 - 2017. Float Admin<br>Bootstrap admin template</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Common plugins-->
        <script src="plugins/jquery/dist/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/pace/pace.min.js"></script>
        <script src="plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="plugins/metisMenu/metisMenu.min.js"></script>
        <script src="js/float-custom.js"></script>
        <!--ichecks-->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue'
                });
            });
        </script>
    </body>

<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 02:00:31 GMT -->
</html>
