<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $id = $_SESSION['user_id'];
 $query = "SELECT * FROM user";
 $selected = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <?php
      require_once("head.php"); 
    ?>
    <title>phonebook</title>
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
          require_once("viewmain.php");
        ?>
    </div>
    <?php
      require_once("viewlink.php");
    ?>
</body>

</html>
