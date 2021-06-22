<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php");?>
<?php else: ?>
<?php endif ?>
<?php
 require_once("connection.php");
 $id = $_SESSION['user_id'];
?>
<?php
  if(isset($_POST['upload'])){
    if(empty($_POST['title']) || empty($_POST['content']) || empty($_POST['tag']) || empty($_POST['category'])){
       echo "please fill in the blank";
    }
    else{
       $title = $_POST['title'];
       $content = $_POST['content'];
       $tags = $_POST['tag'];
       $category = $_POST['category'];
      
       $file_name = $_FILES['file']['name'];
       $file_temp_loc = $_FILES['file']['tmp_name'];
       $file_store = "../blog/profile/$file_name";
       move_uploaded_file($file_temp_loc,$file_store);
      
       $insertpost = "insert into post (author_id,post,title,category_id,created_date,tag,content) values ('$id','$file_store','$title','$category',current_timestamp(),'$tags','$content')";
       $post = mysqli_query($con,$insertpost);

       if($post){
          header("location:index.php");
       }
       else{
          echo"please check your query";
       }
    }
  }
?>
