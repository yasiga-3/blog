<?php
  session_start();
  require_once("connection.php");
  if(isset($_POST['submit'])){
     if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['dob']) || empty($_POST['pass']))
     { 
       echo "please fill in the blank";
     }
     else{
       $file_name = $_FILES['image']['name'];
       $file_temp_loc = $_FILES['image']['tmp_name'];
       $file_store = "../web/$file_name";

       move_uploaded_file($file_temp_loc,$file_store);

       $user = $_POST['name'];
       $email = $_POST['email'];
       $dateofbirth = $_POST['dob'];
       $password = $_POST['pass'];

       $query = "insert into user (username,useremail,password,profile,date_of_birth) values('$user','$email','$password','$file_store','$dateofbirth')";
       $insert = mysqli_query($con,$query);

       $SQLQuery = "select * from user where username = '".$user."'";
       $check = mysqli_query($con,$SQLQuery);
        
       while($assigning=mysqli_fetch_assoc($check))
       {
         $id = $assigning['user_id'];       

        if($_SESSION['user_id'] = $id)
        { 
          $_SESSION['username'] = $user;
          $_SESSION['user_id'] = $id;
          header("location:index.php");
        } 
        else
        {
          echo"check your query";
        }
       }
     }
  }
  else{
       header("location:sign.php");
  }
?>

