<?php session_start();?>
<?php
 require_once("connection.php");
 $query = "select * from post";
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
          if(isset($_SESSION['user_id'])){
             require_once("sidepart.php");
          }
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">post</h4>
                    </div>
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="table-responsive">
                                 <?php
                                   while($row=mysqli_fetch_assoc($result)){
                                      $id = $row['id'];
                                      $title = $row['title'];
                                      $category = $row['category_id'];
                                      $created_date = $row['created_date'];
                                      $tag = $row['tag'];
                                      $content = $row['content'];
                                      $updated_date = $row['update_date'];
                                 ?>
                                 <table class="table">
                                   <thead>
                                        <tr>
                                            <th><h2><?php echo $title ?></h2></th>
                                  <?php
                                    if(isset($_SESSION['user_id'])){ ?>
                                            <th><a href="editpost.php?GetID=<?php echo $id ?>"><h4>Edit</h4></a></th>
                                  <?php }?>
                                        </tr>
                                        <tr>
                                            <th><?php echo $created_date ?></th>
                                            <th><?php echo $updated_date ?></th>                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       <tr>
                                        <td><h4><?php echo $content ?></h4></td>    
                                       </tr>
                                       <tr>
                                        <td><h4><?php echo $tag ?></h4></td>
                                       </tr>
                                    </tbody>
                                </table>
                                <?php } ?>
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
