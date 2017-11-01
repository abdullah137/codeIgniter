<?php include "includes/header.php" ?>

        <!--main content start-->
        <section class="main-content">



            <!--page header start-->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Data Tables</h4>
                    </div>
                    <div class="col-sm-6 text-right">
                        <ol class="breadcrumb">
                            <li><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
                            <li>tables</li>
                            <li>data tables</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--page header end-->


            <!--start page content-->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default collapsed">
                        <div class="panel-heading">
                          Responsive  Data tables
                        </div>

                        <?php
                        if($error = $this->session->flashdata('response')):
                            ?>
                            <br /><div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <?php echo $error; ?>
                        </div>
                        <?php endif; ?>

                        <div class="panel-body">
                            <table id="datatable" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Category</th>
                                                    <th>Image</th>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th>Functions</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                             <?php
                             $id = $this->session->userdata('id');

                             $query = $this->db->query("SELECT * FROM news WHERE admin_id = '$id'");

                             foreach ($query->result_array() as $row)
                             {


                                               ?>
                                                  <tr>
                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['category']; ?></td>
                                                    <td><?php echo $row['image']; ?></td>
                                                    <td>
                                                       <?php echo $row['date']; ?>
                                                    </td>
                                                    <td><?php echo substr($row['description'], 0, 200); ?></td>
                                                    <td><?php echo anchor("home/edit/{$row['id']}", 'Edit', ['class'=>'btn btn-success']); ?>
                                                        <br  />
                                                        &nbsp;  <?php echo anchor("home/delete/{$row['id']}", 'Delete', ['class'=>'btn btn-danger']); ?></td>
                                                </tr>
                        <?php 
                         
                        }

                                          
                        
                        ?>
                                            </tbody>
                                        </table>

                        </div>
                    </div>
                </div>
            </div><!--end row-->

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
        <script src="plugins/pace/pace.min.js"></script><script src="plugins/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="plugins/metisMenu/metisMenu.min.js"></script>
        <script src="js/float-custom.js"></script>

        <!-- Datatables-->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.responsive.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
            });
        </script>

    </body>

<!-- Mirrored from bootstraplovers.com/themeforest-html/float-v1.2/dark-version/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Dec 2016 02:00:22 GMT -->
</html>