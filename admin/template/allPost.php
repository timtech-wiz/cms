 <?php include "include/headers.php" ?>

    <div id="wrapper">

      
        
   <?php include "include/nav.php" ?>      
        

<div id="page-wrapper">
 




<form action="" method="post">

<table class="table table-bordered table-hover">

<div id="bulkOptionContainer" class="col-xs-4">

<select class="form-control" name="bulk_options" id="">

<option value="">Bulk Options</option>
<option value="publish">Publish</option>
<option value="draft">Draft</option>
<option value="delete">Delete</option>
<option value="clone">Clone</option>


</select>  



</div>
                        
   <div class="col-xs-4">
    
  <input type="submit" name="submit" class="btn btn-success" value="Apply">
   <a class="btn btn-primary" href="add_p.php">Add New</a>  
  </div>
 
                        
                        <thead>
                         
<!--
                        <tr>
                         <th><input id="selectAllbox" type="checkbox"></th>
-->
                        <tr>
                         <th>Id</th>
                         <th>Author</th>
                         <th>Title</th>
                         <th>Category</th>
<!--
                         <th>Category</th>
                         <th>Status</th>
                         <th>Image</th>
                         <th>Tags</th>
                          <th>Comments</th>
                          <th>Post Comments Count</th>
                          <th>Dates</th>
                          <th>View Post</th>
-->
                         <th>Dates</th>
                          <th>Edit</th>
                          <th>Delete</th>
                            
                            
                            
                        </tr>
                         
                         
                         </thead>
                         
                         <tbody>
                         <?php foreach($posts as $post) : ?>
                        <tr>
                            <td><?php echo $post->post_id; ?></td>
                            <td><?php echo $post->post_author; ?></td>
                            <td><?php echo $post->post_title; ?></td>
                            <td><?php echo $post->cname; ?></td>
                            <td><?php echo $post->post_date; ?></td>
        <td><a href="edit_post.php?edit_post=<?php echo $post->post_id; ?>">Edit</a></td>
                            <td><a href="posts.php?delete_post=<?php echo $post->post_id; ?>">Delete</a></td>
                        </tr>
                     <?php endforeach; ?>
                         
                         </tbody>
                        
                        </table> 
                        </form>  
                         

                 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


 <?php include "include/footers.php" ?>