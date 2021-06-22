<?php 
  session_start();
  require_once"connection.php";
  if(isset($_POST['check'])){
   
     $password = $_POST['pass'];
     $user = $_POST['user'];

     try 
     {  
        $SQLQuery = "select * from user where username = '".$user."'";
        $check = mysqli_query($con,$SQLQuery);
        
        while($assigning=mysqli_fetch_assoc($check))
        {
          $id = $assigning['user_id'];
          $user = $assigning['username'];
          $password = $assigning['password'];

          if($_SESSION['username'] = $user) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $user;
            header("location:index.php");
          }
          else{
             echo "Error: Invalid username or password";
          }
        }
     }
     catch(PDOException $e){
      echo"Error: " .$e->getMessage();
     }    
  }
?>
