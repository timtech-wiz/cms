 <?php include "include/headers.php" ?>

    <div id="wrapper">

      
        
   <?php include "include/nav.php" ?>      
        

<div id="page-wrapper">
 
 
<form action="" method="post" enctype="multipart/form-data">
     
<div class="form-group">
<label for="title">Post Title</label>
<input type="text" class="form-control" name="title" required>
</div>
    
    
     
<div class="form-group">
 <select name="category">
   
   <option value='0'>Choose Category</option>
   
   <?php foreach($categories as $category) : ?>
    
    <option value='<?php echo $category->cat_id; ?>'><?php echo $category->cat_title; ?></option>
    <?php endforeach; ?>    
    
    
    
</select>
</div>
    
    
    
<div class="form-group">
<label for="post_author">Post Author</label>
<input type="text" class="form-control" name="author" required>
</div>
   
<!--
<div class="form-group">
             
  <select name="post_status" id="">
     
     <option value="draft">Post Status</option>
     <option value="publish">Publish</option>
     <option value="draft">Draft</option>
      
</select>   
       
</div>
<div class="form-group">
<label for="post_image">Post Image</label>
<input type="file"   name="image">
</div>
   
<div class="form-group">
<label for="post_tags">Post Tags</label>
<input type="text" class="form-control" name="tags">
</div>
    
<div class="form-group">
<label for="post_comment_counts">Post comment count</label>
<input type="text" class="form-control" name="post_comment_count">
</div>
-->
   
   
<div class="form-group">
<label for="post_content">Post Content</label>
<textarea type="text" class="form-control" name="content" id="" cols="30" rows="10" required></textarea>
</div>
   
<div class="form-group">
 
<input type="submit" class="btn btn-primary" name="submit" value="Publish post">
</div>
   

     







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