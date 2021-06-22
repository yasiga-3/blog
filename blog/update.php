<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php"); ?>
<?php else: ?>
<?php endif ?>
<?php 
  require_once("connection.php");
  if(isset($_POST['update']))
  {
    $id = $_GET['ID'];
    $roll = $_POST['roll'];
    $username = $_POST['name'];

    $query = "update user set roll = '".$roll."'where  user_id = '".$id."'";
    $result = mysqli_query($con,$query);
  
    if($result)
    {
      header("location:userlist.php");
    }
    else{
      echo "please check your query";
    }
  }
  else{
    header("location:edit.php");
  }
?>
