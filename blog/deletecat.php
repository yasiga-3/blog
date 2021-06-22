<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:index.php");?>
<?php else: ?>
<?php endif ?>
<?php
  require_once("connection.php");
  if(isset($_GET['GetID']))
  {
     $id = $_GET['GetID'];
     $query = "delete from category where ID = '$id'";
     $result = mysqli_query($con,$query);

     if($result)
     {
       header("location:viewcat.php");
     }
     else
     {
       echo"please check your query";
     }
  }
  else
  {
    header("location:viewcat.php");
  }
?>
