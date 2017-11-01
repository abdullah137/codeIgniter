
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 02:00:31 GMT -->
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
        <!--for checkbox-->
    <link href="<?php echo base_url("admin_resources/css/style.css"); ?>" rel="stylesheet">
        <!--template css-->
    <link href="<?php echo base_url("admin_resources/plugins/iCheck/blue.css"); ?>" rel="stylesheet">
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
                                <img src="images/logo-default.png" alt="">
                            </div>
                            <div class="misc-box">   
                                <p class="text-center text-uppercase pad-v">Sign up to get instant access.</p>
                                <?php echo form_open('register/save'); ?>
                                   
                                    <div class="form-group">
                                         <label class="text-muted" for="eampleuser1">Name</label>
                                         <div class="group-icon">
                                        <input id="eampleuser1" name="name"  type="text" placeholder="Enter Your Name"
                                             value="<?php echo set_value('name'); ?>"  class="form-control">
                                        <span class="icon-envelope text-muted icon-input"></span>
                                             <?php echo form_error('name', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                         </div>
                                    </div>
                                    
                                    <div class="form-group">
                                         <label class="text-muted" for="eampleuser1">Username</label>
                                         <div class="group-icon">
                                        <input id="eampleuser1" name="username" type="text"
                                          value="<?php echo set_value('username'); ?>" placeholder="Enter Username" class="form-control">
                                        <span class="icon-user text-muted icon-input"></span>
                                             <?php echo form_error('username', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                         </div>
                                    </div>
                                    
                                     <div class="form-group">
                                         <label class="text-muted" for="eampleuser1">Email Id</label>
                                         <div class="group-icon">
                                        <input id="eampleuser1" name="email" value="<?php echo set_value('email'); ?>" type="text" placeholder="Enter Email" class="form-control"  >
                                        <span class="icon-briefcase text-muted icon-input"></span>
                                             <?php echo form_error('email', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                         </div>
                                    </div>
                                    <div class="form-group group-icon">
                                         <label class="text-muted" for="exampleInputPassword1">Password</label>
                                         <div class="group-icon">
                                        <input id="exampleInputPassword1" name="password" type="password" placeholder="Password" class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                             <?php echo form_error('password', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                         </div>
                                    </div>
                                     <div class="form-group group-icon">
                                         <label class="text-muted" for="exampleInputPassword2">Confirm Password</label>
                                         <div class="group-icon">
                                        <input id="exampleInputPassword2" name="pass2" type="password" placeholder="Confirm Password" class="form-control">
                                        <span class="icon-lock text-muted icon-input"></span>
                                             <?php echo form_error('pass2', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                         </div>
                                    </div>
                                    <div class="clearfix">
                                        <div class="pull-right">
                                            <button type="submit" name="register" class="btn btn-block btn-primary">Register Now</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                                if($error = $this->session->flashdata('response')):
                                ?>
                                <br /><div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <?php echo $error; ?>
                                </div>
                                <?php endif; ?>
                                    <hr>
                                    <p class=" text-center">Have an account?</p>
                                    <?php echo anchor('login', 'Login') ?>
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

<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 02:00:31 GMT -->
</html>
