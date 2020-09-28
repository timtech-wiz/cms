<?php include "includes/headers.php" ?>
<?php include "includes/nav.php" ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
               <?php if($posts) : ?>
                <?php foreach($posts as $post) : ?>
                 
                <h2>
                    <a href="#"><?php echo $post->post_title; ?></a>
                </h2>
                <p class="lead">
                    by <a href="#"><?php echo $post->post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post->post_title; ?></p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p><?php echo $post->post_content; ?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                <hr>
                <?php endforeach; ?>
               
                <?php else :
                   echo "<h1>No Result Found!!!</h1>"; ?>
                <?php endif; ?>
      
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search">
                        <span class="input-group-btn">
                             <input type="submit" name="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                         
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>
                
                 <!-- Login -->
                <div class="well">
                    <h4>Login</h4>
                  <form action="" method="post">
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required>
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                            
                      </div>
                       <div class="form-group">
                           <input type="submit" class="btn btn-primary center" name="submit" value="Submit">
                       </div>
                      
                  </form>
                    <!--User Login -->
                </div>


                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                               <?php foreach($categories as $category) : ?>
                                <li><a href="#"><?php echo $category->cat_title; ?> </a>
                                </li>
                                 
                                 <?php endforeach; ?>
                            </ul>
                        </div>
                       
                      
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


<?php include "includes/footers.php" ?>