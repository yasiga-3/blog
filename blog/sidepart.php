<?php if(!isset($_SESSION['user_id'])):?>
<?php else: ?>
<?php endif ?>
<!-- End Top Navigation -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
        </div>
        <img vspace="10px"/>
        <ul class="nav" id="side-menu">
            <li>
                <a href="#" class="waves-effect"><h4><i class="fa fa-plus fa-fw" aria-hidden="true"></i>#</h4></a>
            </li>
            <li>
                <a href="useredit.php" class="waves-effect"><h4><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Edit Profile</h4></a>
            </li>
            <li>
                <a href="addpost.php" class="waves-effect"><h4><i class="fa fa-plus fa-fw" aria-hidden="true"></i>Add Post</h4></a>
            </li>
            <?php
              if(isset($_SESSION['user_id'])) {
              require_once("connection.php");
              $id = $_SESSION['user_id'];
              $admin = "select roll from user where user_id = '".$id."'";
              $permission = mysqli_query($con,$admin);
              while($row=mysqli_fetch_assoc($permission)){
                   $roll = $row['roll'];
              }
               if($roll != 'user'){ ?>
                  <li>
                      <a href="cat.php" class="waves-effect"><h4><i class="fa fa-database fa-fw" aria-hidden="true"></i> Add Category</h4></a>
                  </li>
                  <li>
                      <a href="viewcat.php" class="waves-effect"><h4><i class="fa fa-database fa-fw" aria-hidden="true"></i>Category</h4></a>
                  </li>
            <?php  }  
              }?>
            <?php
              if(isset($_SESSION['user_id'])) {
              require_once("connection.php");
              $id = $_SESSION['user_id'];
              $admin = "select roll from user where user_id = '".$id."'";
              $permission = mysqli_query($con,$admin);
              while($row=mysqli_fetch_assoc($permission)){
                   $roll = $row['roll'];
              }
               if($roll == 'admin'){ ?>
                 <li>
                   <a href="userlist.php" class="waves-effect"><h4><i class="fa fa-mail-forward fa-fw" aria-hidden="true"></i>userlist</h4></a>
                 </li>
        <?php  }  
              }?>
           <li>
                <a href="logout.php" class="waves-effect"><h4><i class="fa fa-mail-forward fa-fw" aria-hidden="true"></i>logout out</h4></a>
            </li>
        </ul>
    </div>
        
</div>
