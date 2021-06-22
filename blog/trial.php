<?php session_start();
  $user_id = $_SESSION['user_id'];
  require_once("connection.php");
  $query = "select * from category where CATEGORY = 'place'";
  $result = mysqli_query($con,$query);
  while($yasi = mysqli_fetch_assoc($result)){
       $category_id = $yasi['ID'];
  }
  $sql = "select * from post where category_id = '".$category_id."'";

  echo $sql;
  
  $execute = mysqli_query($con,$sql);
  while($row = mysqli_fetch_assoc($execute)){
   print_r($row);
   $id  = $row['id'];
   $author_id = $row['author_id'];
   $title = $row['title'];
   $category_id = $row['category_id'];
   $created_date = $row['created_date'];
   $tag = $row['tag'];
   $content = $row['conten'];
   $update_date = $row['update_date']; 
  }
?>
