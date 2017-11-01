<?php

include "includes/header.php";

?>

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
                <div class="col-sm-12">
                    <!-- START panel-->
                    <div class="panel panel-default">
                        <div class="panel-heading">Horizontal form</div>
                        <div class="panel-body">
                            <?php echo form_open_multipart('home/form_ins', array('class'=>"form-horizontal", 'enctype'=>'multipart/form-data')); ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" value="<?php echo set_value('title'); ?>" placeholder="News Title" name="title" class="form-control">
                                        <?php echo form_error('title', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Product Category</label>
                                    <div class="col-lg-10">
                        <select class="form-control" name="category" style="width: 20%; color: black;">
                                <option>Select Your Category</option>
                                <?php

                                $query = $this->db->query("SELECT category FROM category");
                                $row = $query->row();
                                foreach ($query->result_array() as $row): ?>


                                    <option><?=$row['category']?></option>

                                <?php endforeach; ?>
                                        </select>

                                        <?php echo @$message; ?>
                                    </div>
                                    </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Product Image</label>
                                    <div class="col-lg-10">
                                        <input type="file" style="width: 20%;" name="image" class="form-control" />
                                       <span class="text-danger"> <?php echo @$error; ?> </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Date</label>
                                    <div class="col-lg-10">
                                        <input type="date" value="<?php echo set_value('date'); ?>" style="width: 20%;" class="form-control" name="date" />
                                        <?php echo form_error('date', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Description</label>
                                    <div class="col-lg-10">
                                <div class="panel panel-default">
                                     <div class="panel-body">
                                         <textarea class="summernote" name="desc" cols="40" rows="10"  style="height: 300px !important;">

                                        <?php echo set_value('desc'); ?>

                                             </textarea>
                                         </div>
                                </div>
                                        <?php echo form_error('desc', '<br /><div class="alert alert-danger">', '</div>'); ?>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button type="submit" name="insert" class="btn btn-sm btn-primary">Sign in</button>
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
                        </div>
                    </div>
                    <!-- END panel-->
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
        <!-- iCheck for radio and checkboxes -->
        <script src="<?php echo base_url("admin_resources/plugins/iCheck/icheck.min.js"); ?>"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue'
                });
            });
        </script>
         <!--editor wysihtml5 and summernote-->
        <script src="<?php echo base_url("admin_resources/plugins/wysihtml5/wysihtml5-0.3.0.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/wysihtml5/bootstrap-wysihtml5.js"); ?>"></script>
        <script src="<?php echo base_url("admin_resources/plugins/summernote/summernote.min.js"); ?>"></script>
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