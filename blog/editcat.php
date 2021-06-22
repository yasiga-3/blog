<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $id = $_GET['GetID'];
 $query = "select * from category where ID = '$id'";
 $result = mysqli_query($con,$query);

 while($row = mysqli_fetch_assoc($result))
 {
       $id = $row['ID'];
       $category = $row['CATEGORY'];
       $description = $row['DESCRIPTION'];                                
 }
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php");
    ?>
    <title>Edit Category</title>
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
                        <h4 class="page-title">Edit Category</h4> 
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
               <form action="updatecat.php?id=<?php echo $id ?>" method="post">
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Category:</lable>
                     <div class="col-sm-8">
                       <input type="text"class="form-control"placeholder="Category"name="category"style="font-size:13px;"value="<?php echo $category ?>">
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Description:</lable>
                     <div class="col-sm-8">
                       <textarea type="text" class="form-control" placeholder="Description"name="description"style="font-size:13px;height:80px"><?php echo $description ?></textarea>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                     <input type="submit"name="update"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"/>
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
