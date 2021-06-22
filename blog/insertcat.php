<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $id = $_SESSION['user_id'];
?>
<?php
  if(isset($_POST['submit'])){
    if(empty($_POST['category']) || empty($_POST['description'])){
      echo"please fill in the blank";
    }
    else{
      
      $category = $_POST['category'];
      $description = $_POST['description'];

      $insertcat = "insert into category(CATEGORY,DESCRITION,CREATED_DATE) values('$category','$description')";
      $cat = mysqli_query($con,$insertcat);

      if($cat){
        header("location:viewcat.php");
      }
      else{
        echo"please fill in the blank";
      }
    }
  }
?>
