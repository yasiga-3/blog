<?php
  session_start(); 
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
                        <h4 class="page-title">Log In</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                 <form action="login.php"method="post">
                  <div class="form-group">
                   <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">UserName:</lable>
                   <div class="col-sm-8">
                    <input type="text"class="form-control"placeholder="User"name="user"style="font-size:13px;">
                   </div> 
                  </div><br />
                  <img vspace="30px"/>
                  <div class="form-group">
                   <lable class="control-lable col-sm-2" style="font-weight:800;font-size:13px;">UserPassword:</lable>
                   <div class="col-sm-8">
                    <input type="password"class="form-control"placeholder="Password"name="pass"style="font-size:13px;">
                   </div> 
                  </div><br />
                  <img vspace="30px"/>
                  <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-8">
                    <button name="check"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 25%;font-size:13px;"href="login.php">Log In</button>
                   </div>
                  </div>
                 </form>
                 <img vspace="20px"/>
                 <form action="sign.php"method="post">
                  <img hspace="85px"/>
                  <button name="signup"class="btn btn-default"style="background-color: #25274d;color: #fff;font-weight: 600;width: 16%;font-size:13px;"href="sign.php">SignUp</button>
                 </form>
            </div>
        </div>
    </div>
    <?php
      require_once("link.php");
    ?>    
</body>

</html>    
