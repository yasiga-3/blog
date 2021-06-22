<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $id = $_SESSION['user_id'];
 $query = "select * from user where user_id ='".$id."'";
 $result = mysqli_query($con,$query);

 while($row=mysqli_fetch_assoc($result))
 {
  $user = $row['username'];
  $useremail = $row['useremail'];
  $password = $row['password'];
  $profile = $row['profile'];
  $date_of_birth = $row['date_of_birth'];
 }

?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>Edit Profile</title>
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
                        <h4 class="page-title">Edit Profile</h4> 
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
                <form action="userupdate.php?id=<?php echo $id ?>"method="post" enctype="multipart/form-data">
                 <div class="form-group">
                  <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Profile:</lable>
                  <div class="col-sm-10">
                   <input type="file"class="form-control" placeholder="Enter name"name="image"style="font-size:13px;"value="<?php echo $profile ?>">
                  </div>
                 </div>
                 <img vspace="20px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Name:</lable>
                  <div class="col-sm-10">
                   <input type="text"class="form-control"placeholder="Enter name"name="name"style="font-size:13px;"value="<?php echo $user?>">
                  </div> 
                 </div>
                 <img vspace="20px"/>
                 <div class="form-group">
                  <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Email:</lable>
                  <div class="col-sm-10">
                   <input type="email"class="form-control"placeholder="Enter email"name="email"style="font-size:13px;"value="<?php echo $useremail?>">
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Password:</lable>
                 <div class="col-sm-10">
                  <input type="password"class="form-control"placeholder="Enter password"name="pass"style="font-size:13px;"value="<?php echo $password?>">
                 </div>
                </div>
                <img vspace="20px"/>
                <div class="form-group">
                 <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">DOB:</lable>
                 <div class="col-sm-10">
                  <input type="date" class="form-control" placeholder="Enter dob" name="dob" style="font-size:13px;" value="<?php echo $date_of_birth ?>">
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
