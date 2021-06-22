<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
  require_once("connection.php");
  $id = $_SESSION['user_id'];
?>
<html>
<head>
 <?php
   require_once("head.php");
 ?>
 <title>Add Post</title>
</head>
<body class="fix-header">
 <div class="preloader">
     <svg class="circular" viewBox="25 25 50 50">
         <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
     </svg>
 </div>
 <div id="wrapper">
        <?php
          require_once("logo.php");
          require_once("sidepart.php");
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Post</h4> 
                    </div>
                </div>
                <form action="postinsert.php" method="POST" enctype="multipart/form-data">
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Title:</lable>
                     <div class="col-sm-8">
                       <input type="text"class="form-control"placeholder="Title"name="title"style="font-size:13px;">
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">post:</lable>
                     <div class="col-sm-8">
                       <input type="file" name="file" class="form-control" style="font-size:13px;"/>
                     </div>
                   </div>   
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Content:</lable>
                     <div class="col-sm-8">
                       <textarea type="text" class="form-control" placeholder="Content"name="content"style="font-size:13px;height:80px"></textarea>
                     </div> 
                   </div>
                   <img vspace="50px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Tags:</lable>
                     <div class="col-sm-8">
                       <input type="text"placeholder="Tags"name="tag"class="form-control"style="font-size:13px;"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <label type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Category:</label>
                     <div class="col-sm-8">
                       <select type="number" class="form-control" name="category" style="font-weight:500;font-size:13px;">
                         <option value="">select category</option>
                         <?php
                           $query = "select ID,CATEGORY from category";
                           $result = mysqli_query($con,$query);

                           while($row=mysqli_fetch_assoc($result))
                           {
                                $id = $row['ID'];
                                $category = $row['CATEGORY'];
                         ?>
                         <option value="<?php echo $id ?>"><?php echo $category ?></option>
                         <?php } ?>
                    </select>
                  </div>
                 </div>
                 <img vspace="30px"/>
                 <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-8">
                   <input type="submit"name="upload"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"/>
                  </div>
                 </div> 
                </form>
            </div>
        </div> 
    </div>   
    <?php
      require_once("viewlink.php");
    ?>
</body>
</html>
