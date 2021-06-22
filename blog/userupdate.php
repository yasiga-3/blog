<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 if(isset($_POST['update']))
 {
  $id = $_GET['id'];
  $user = $_POST['name'];
  $useremail = $_POST['email'];
  $password = $_POST['pass'];
  $date_of_birth = $_POST['dob'];
 
  $file_name = $_FILES['image']['name'];
  $file_temp_loc = $_FILES['image']['tmp_name'];
  $file_store = "../web/$file_name";

  move_uploaded_file($file_temp_loc,$file_store);

  $query = "update user set username = '".$user."',useremail = '".$email."',password = '".$password."',profile = '".  $file_store."',date_of_birth = '".$date_of_birth."'where user_id = '".$id."'";
  $result = mysqli_query($con,$query);
 
  if($result)
  {
   header("location:useredit.php");
  }
  else
  {
   echo 'please check your query';
  }
 }
 else
 {
  header("location:useredit.php");
 }
?>
