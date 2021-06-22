<?php
  session_start();
  require_once("connection.php");
  $view_query = "select * from trash where thing = 'views'";
  $view_result = mysqli_query($con,$view_query);
  while($view = mysqli_fetch_assoc($view_result))
  {
   $view_value = $view['value'];
  }
  $views = $view_value + 1;
  $view_insert = "update trash set value = '".$views."'where thing ='views'";
  $view_result = mysqli_query($con,$view_insert);
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
             
        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="first-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_01.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Place</a></span>
                                        <h4><a href="tech-single.html" title="">Say hello to real handmade office furniture! Clean & beautiful design</a></h4>
                                        <small><a href="tech-single.html" title="">24 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end first-side -->

                    <div class="second-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_02.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                                        <h4><a href="tech-single.html" title="">Do not make mistakes when choosing web hosting</a></h4>
                                        <small><a href="tech-single.html" title="">03 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->

                    <div class="last-slot">
                        <div class="masonry-box post-media">
                             <img src="upload/tech_03.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <span class="bg-orange"><a href="tech-category-01.html" title="">Technology</a></span>
                                        <h4><a href="tech-single.html" title="">The most reliable Galaxy Note 8 images leaked</a></h4>
                                        <small><a href="tech-single.html" title="">01 July, 2017</a></small>
                                        <small><a href="tech-author.html" title="">by Jessica</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end second-side -->
                </div><!-- end masonry -->
            </div>
        </section>
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                               <h4 class="pull-left">Recent Post <a href="#"><i class="fa fa-rss"></i></a></h4>
                            </div><!-- end blog-top -->              
        <?php
          $query="select * from post";
          $result = mysqli_query($con,$query);
          while($row = mysqli_fetch_assoc($result))
          {
            $id = $row['id']; 
            $author_id = $row['author_id'];
            $post = $row['post'];
            $title = $row['title'];
            $category_id = $row['category_id'];
            $created_date = $row['created_date'];
            $tag = $row['tag'];
            $content = $row['content'];
            $length = strlen($content);
            $update_date = $row['update_date'];
            
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

                            <div class="blog-list clearfix">
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="tech-single.html" title="">
                                                <img src="<?php echo $post; ?>" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="tech-single.html" title=""><?php echo"$title";?></a></h4>
                                        <p><?php
            if($length > 200){
              echo substr($content,0,200);
            ?>
              <a href=onlypost.php?id=<?php echo $id ;?>>Read more</a>
            <?php }
              else{
                echo $content ;
              } 
            ?>  </p>
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
                      <?php }?>
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
