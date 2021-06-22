<?php session_start();?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
  require_once("connection.php");
  $id = $_SESSION['user_id'];
  $query = "select roll from user where user_id = '".$id."'";
  $result = mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result)){
     $roll = $row['roll'];
  }
?>
<?php if($roll == 'user'): header("location:404.html"); ?>
<?php else: ?>
<?php endif ?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>Add Category</title>
</head>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <?php
          require_once("sidepart.php");
          require_once("logo.php");          
        ?>
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
                        <h4 class="page-title">Add Category</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <form action="insertcat.php"method="post">
                  <div class="form-group">
                   <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Category:</lable>
                   <div class="col-sm-8">
                    <input type="text"class="form-control"placeholder="Category"name="category"style="font-size:13px;">
                   </div> 
                  </div>
                  <img vspace="30px"/>
                  <div class="form-group">
                   <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Description:</lable>
                   <div class="col-sm-8">
                    <textarea type="text"class="form-control"placeholder="Password"name="description"style="font-size:13px;height:80px;"></textarea>
                   </div> 
                  </div>
                  <img vspace="50px"/>
                  <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-8">
                    <button name="submit"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"href="login.php">submit</button>
                   </div>
                  </div>
                 </form>
            </div>
        </div>
    </div>
    <?php
      require_once("link.php");
    ?>    
</body>

</html>    
