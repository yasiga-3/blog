<?php
 session_start();
 require_once("connection.php");
?>
<html>
<head>
 <?php
   require_once("head.php");
 ?>
 <title>Sign Up</title>
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
        ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Sign Up</h4> 
                    </div>
                </div>
                <form action="signup.php" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Profile:</lable>
                     <div class="col-sm-8">
                       <input type="file" name="image" class="form-control" style="font-size:13px;"/>
                     </div>
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Name:</lable>
                     <div class="col-sm-8">
                       <input type="text"class="form-control"placeholder="Enter name"name="name"style="font-size:13px;">
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">Email:</lable>
                     <div class="col-sm-8">
                       <input type="text" class="form-control" placeholder="Enter email"name="email"style="font-size:13px;"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">DOB:</lable>
                     <div class="col-sm-8">
                       <input type="date"placeholder="Enter dob"name="dob"class="form-control"style="font-size:13px;"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                     <lable type="text"class="control-lable col-sm-2"style="font-weight:800;font-size:13px;">Password:</lable>
                     <div class="col-sm-8">
                       <input type="password"class="form-control"style="font-size:13px;"placeholder="Enter password"name="pass"/>
                     </div> 
                   </div>
                   <img vspace="30px"/>
                   <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                     <input type="submit"name="submit"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"/>
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
