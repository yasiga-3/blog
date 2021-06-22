        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">view Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                 <thead>
                                        <tr>
                                            <th><h4>Roll</h4></th>
                                            <th><h4>UserName</h4></th>
                                            <th><h4>Edit</h4></th>
                                        </tr>
                                    </thead>
                                    <?php
                                      while($list=mysqli_fetch_assoc($selected))
                                      {
                                       $id = $list['user_id'];
                                       $roll = $list['roll'];
                                       $UserName = $list['username'];
                                    ?>
                                    <tbody>
                                       </tr>
                                        <td><h4><?php echo $UserName ?></h4></td>
                                        <td><h4><?php echo $roll ?></h4></td>    
                                        <td><a href="edit.php?GetID=<?php echo $id ?>"><h4>Edit</h4></a></td>
                                       </tr>
                                    </tbody>
                                    <?php } ?>   
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
