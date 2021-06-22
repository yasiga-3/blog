<?php
  session_start();
  $user_id = $_SESSION['user_id'];
  require_once("connection.php");
  $id = $_GET['id'];
  $view_query = "select * from trash where thing = 'views'";
  $view_result = mysqli_query($con,$view_query);
  while($view = mysqli_fetch_assoc($view_result))
  {
   $view_value = $view['value'];
  }
  $views = $view_value + 1;
  $view_insert = "insert into trash (value) values($views) where thing  = 'views'";
  $view_result = mysqli_query($con,$view_insert);

  $select_query = "select * from post where id = '$id'";
  $select_result = mysqli_query($con,$select_query);
  while($select_row = mysqli_fetch_assoc($select_result))
  {
   $id =  $select_row['id'];
   $author_id = $select_row['author_id'];
   $title = $select_row['title'];
   $category_id = $select_row['category_id'];
   $created_date = $select_row['created_date'];
   $tag = $select_row['tag'];
   $content = $select_row['content'];
   $update_date = $select_row['update_date'];
   }

   $author_select = "select * from user where user_id = '$author_id'";
   $author_selected = mysqli_query($con,$author_select);
   while($author=mysqli_fetch_assoc($author_selected))
   {
    $user = $author['username'];
   }

   $category_select = "select * from category where ID = '$category_id'";
   $category_selected = mysqli_query($con,$category_select);
   while($category=mysqli_fetch_assoc($category_selected))
   {
     $cat = $category['CATEGORY'];
     $description = $category['DESCRIPTION'];
   }
?>
<!DOCTYPE html>
<html lang="en">
 <?php
    require_once("head2.php");
 ?>
</head>
<body>
    <div id="wrapper">    
    <?php
      require_once("indexbar.php");
    ?>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                               <h4 class="pull-left">Recent Post <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->
                            <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="upload/tech_blog_01.jpg" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title=""><?php echo"$title";?></a></h4>
                                        <p><?php echo $content ; ?></p> 
                                        <p><?php echo"$tag";?></p>
                                        <small class="firstsmall"><a class="bg-orange" href="tech-category-01.html" title=""><?php echo"$cat";?></a></small>
                                        <small><a href="tech-single.html" title=""><?php echo"$created_date";?></a></small>
                                        <small><a href="tech-author.html" title=""><?php echo"$user";?></a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i><?php echo $views ?></a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                </div><!-- end blog-box -->
                            </div><!-- end blog-list -->
                      
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <?php
          require_once("footer.php");   
        ?>
        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
