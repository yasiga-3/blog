        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="../plugins/images/admin-logo.png" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="../plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <?php
                      require_once("connection.php");
                      if(!isset($_SESSION['user_id'])){
                    ?>   
                      <img vspace="10px"/>
                      <form action="log.php"> 
                       <button type="submit"name="Log In"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 100%;font-size:13px;">Log In</button>
                      </form>
                    <?php } ?>
                    <?php
                      if(isset($_SESSION['user_id'])) {
                      $id = $_SESSION['user_id'];
                      $profile = "select * from user where user_id = '".$id."'";
                      $value = mysqli_query($con,$profile); 
                      while($row=mysqli_fetch_assoc($value)){
                          $user = $row['username'];
                          $path = $row['profile'];
                      }?>
                       <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo $path ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $user ?></b></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
