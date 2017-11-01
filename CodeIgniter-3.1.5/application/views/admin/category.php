<?php include "includes/header.php"; ?>
        <!--main content start-->
        <section class="main-content">



            <!--page header start-->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Basic elements</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ol class="breadcrumb">
                            <li><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                            <li>pages</li>
                            <li>Forms</li>
                            <li>Basic</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--page header end-->


            <!--start page content-->

            <div class="row">
                <div class="col-sm-6">
                    <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="text-center"> Category form</h3>
                        </div>
                        <div class="panel-body">
                            <?php echo form_open('home/cat_ins'); ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Category</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Category Name" name="category" class="form-control">
                                        <?php echo form_error('category', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                        <?php
                                        if($error = $this->session->flashdata('response')):
                                            ?>
                                            <br /><div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <?php echo $error; ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <br />
                                        <button type="submit" name="insert" class="btn btn-sm btn-primary">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END panel-->
                </div>
                
                <div class="col-md-6">
                    <h3 class="text-center">All Categories</h3>
                    <ol style="font-size: 20px;color: white">
                        <?php

                        $query = $this->db->query('SELECT * FROM category');

                        foreach ($query->result_array() as $row)
                        {
                        echo $row['category'].'<br />';
                        ?>
                            <?php
                            }
                            ?>
                    </ol>
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
        <script src="plugins/jquery/dist/jquery.min.js"></script>
        <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/pace/pace.min.js"></script>
        <script src="plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="plugins/metisMenu/metisMenu.min.js"></script>
        <script src="js/float-custom.js"></script>
        <!-- iCheck for radio and checkboxes -->
        <script src="plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue'
                });
            });
        </script>
         <!--editor wysihtml5 and summernote-->
        <script src="plugins/wysihtml5/wysihtml5-0.3.0.js"></script>
        <script src="plugins/wysihtml5/bootstrap-wysihtml5.js"></script>
        <script src="plugins/summernote/summernote.min.js"></script>
        <script>
            $(document).ready(function () {
                //wysihtml5
                $('#textarea').wysihtml5({});

                //summernote
                $(function () {

                    // Initialize summernote plugin
                    $('.summernote').summernote();

                    var sHTML = $('.summernote').code();

                    console.log(sHTML);

                    $('.summernote1').summernote({
                        toolbar: [
                            ['headline', ['style']],
                            ['style', ['bold', 'italic', 'underline', 'superscript', 'subscript', 'strikethrough', 'clear']],
                            ['textsize', ['fontsize']],
                            ['alignment', ['ul', 'ol', 'paragraph', 'lineheight']]
                        ]
                    });

                    $('.summernote2').summernote({
                        airMode: true
                    });

                });

            });
        </script>

    </body>

<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/form-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 01:59:41 GMT -->
</html>