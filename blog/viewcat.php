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
<?php
  $query = "select * from category";
  $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php"); 
    ?>
    <title>Blog</title>
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
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">category</h4>
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
                                            <th><h2>Category</h2></th>
                                            <th><h2>Description</h2></th>
                                            <th><h2>Created date</h2></th>
                                            <th><h2>Update date</h2></th>
                                            <th><h2>Edit</h2></th>
                                            <th><h2>Delete</h2></th>
                                        </tr>
                                    </thead>
                                    <?php
                                      while($row=mysqli_fetch_assoc($result)){
                                         $id = $row['ID'];
                                         $category = $row['CATEGORY'];
                                         $description = $row['DESCRIPTION'];
                                         $created_date = $row['CREATED_DATE'];
                                         $update_date = $row['UPDATED_DATE'];                           
                                    ?>
                                    
                                    <tbody style="text-align:center;">
                                       <tr>
                                        <td><h4><?php echo $category ?></h4></td>
                                        <td><h4><?php echo $description ?></h4></td>
                                        <td><h4><?php echo $created_date ?></h4></td>
                                        <td><h4><?php echo $update_date ?></h4></td> 
                                        <td><a href="editcat.php?GetID=<?php echo $id ?>"><h4>Edit</h4></a></td>
                                        <td><a href="deletecat.php?GetID=<?php echo $id ?>"><h4>Delete</h4></a></td>
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
    </div>
    <?php
      require_once("viewlink.php");
    ?>
</body>

</html>

