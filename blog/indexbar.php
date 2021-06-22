
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="tech-index.html"><img src="images/version/tech-logo.png" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="tech-index.html">Home</a>
                            </li>
                            <?php 
                              require_once("connection.php");
                              $sql = "select CATEGORY from category";
                              $result = mysqli_query($con,$sql);
                              while($row = mysqli_fetch_assoc($result)) 
                              {
                               $category = $row['CATEGORY'];                              
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="category.php?cat=<?php echo $category ?>"><?php echo $category ?></a>
                            </li>  
                            <?php } ?>                                            
                            <li class="nav-item">
                                <a class="nav-link" href="tech-category-03.html">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tech-contact.html">Contact Us</a>
                            </li>
                        </ul>
                        <?php
                          require_once("connection.php");
                          if(!isset($_SESSION['user_id'])){
                        ?>
                        <ul class="navbar-nav mr-2">
                            <li class="nav-item">
                                <a class="nav-link" href="log.php"><i>Log in</i></a>
                            </li>
                        </ul>
                         <?php } ?>
                        <ul class = "navbar-nav mr-2">
                         <?php if(isset($_SESSION['user_id'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="post.php"><i>Edit post</i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php"><i>Log out</i></a>
                            </li>
                         <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
