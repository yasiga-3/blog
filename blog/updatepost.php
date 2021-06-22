<?php session_start(); ?>
<?php if(!isset($_SESSION['user_id'])): header("location:log.php"); ?>
<?php else: ?>
<?php endif ?>
<?php 
  require_once("connection.php");
  if(isset($_POST['update']))
  {    
    $id = $_GET['id'];
    $post = $_POST['file'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $tag = $_POST['tags'];
    $category = $_POST['category'];

    $file_name = $_FILES['file']['name'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $file_store = "../profile/$file_name";

    move_uploaded_file($file_temp_loc,$file_store);

    $query = "update post set title='".$title."',post='".$file_store."',category_id='".$category."',tag='".$tag."',content='".$content."'where id ='".$id."'";
    $result = mysqli_query($con,$query);
    echo $query;

    if($result){
       header("location:index.php");
    }
    else{
        echo "please check your query";
    }
  }
  else{
    header("location:editpost.php");
  }
?>
