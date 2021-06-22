<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
$id = $_SESSION['user_id'];
$admin = "select roll from user where user_id = '".$id."'";
$permission = mysqli_query($con,$admin);
while($row=mysqli_fetch_assoc($permission)){
      $roll = $row['roll'];
}
?>
<?php if($roll != 'admin'); header("location:404.html");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $id = $_GET['GetID'];
 $query = "select * from user where user_id='".$id."'";
 $editlist = mysqli_query($con,$query);

 while($list=mysqli_fetch_assoc($editlist))
 {
  $id = $list['user_id'];
  $roll = $list['roll'];
  $Username = $list['username'];
 }
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>Edit</title>
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
          require_once("logo.php");
          require_once("sidepart.php");
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
                        <h4 class="page-title">Edit</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <form action="update.php?ID=<?php echo $id ?>"method="post">
                 <div class="form-group">
                  <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Roll:</lable>
                  <div class="col-sm-10">
                   <input type="text"class="form-control"placeholder="Enter name"name="roll"style="font-size:13px;"value="<?php echo $roll?>">
                  </div> 
                 </div>
                 <img vspace="20px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Name:</lable>
                  <div class="col-sm-10">
                   <input type="text"class="form-control"placeholder="Enter phone no"name="name"style="font-size:13px;"value="<?php echo $Username?>">
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                  <button name="update"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;">Update</button>
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
