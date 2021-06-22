<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php"); ?>
<?php else: ?>
<?php endif ?>
<?php 
  require_once("connection.php");
  if(isset($_POST['update']))
  {
    $id = $_GET['id'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $query = "update category set CATEGORY = '".$category."',DESCRIPTION = '".$description."',UPDATED_DATE = '' where ID = '$id'";
    $result = musqli_query($con,$query);

    if($result){
      header("location:viescat.php");
    }
    else{
      echo"please check your query";
    }
  }
  else{
     header("location:editcat.php");
  }
?>
