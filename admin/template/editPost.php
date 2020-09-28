 <?php include "include/headers.php" ?>

    <div id="wrapper">

      
        
   <?php include "include/nav.php" ?>      
        

<div id="page-wrapper">
 
 <?php foreach($edit_p as $edit_p) : ?>
<form action="" method="post" enctype="multipart/form-data">
     
<div class="form-group">
<label for="title">Post Title</label>
<input type="text" class="form-control" name="title" value="<?php echo $edit_p->post_title; ?>">
</div>
    
    
     
<div class="form-group">
 <select name="category">
   
   <option value='0'>Choose Category</option>
   
   <?php foreach($categories as $category) : ?>
   <?php if($edit_p->category == $category->cat_id) : ?>
    <option value='<?php echo $category->cat_id; ?>' selected><?php echo $category->cat_title; ?></option>
    
<?php else : ?>
    <option value='<?php echo $category->cat_id; ?>'><?php echo $category->cat_title; ?>
    </option>  
<?php endif; ?>
   
    
    
    <?php endforeach; ?>    
    
    
    
</select>
</div>
    
    
    
<div class="form-group">
<label for="post_author">Post Author</label>
<input type="text" class="form-control" name="author" value="<?php echo $edit_p->post_author; ?>" >
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
<textarea type="text" class="form-control" name="content" id="" cols="30" rows="10">
     <?php echo $edit_p->post_content; ?>
</textarea>
</div>
   
<div class="form-group">
 
<input type="submit" class="btn btn-primary" name="submit" value="Publish post">
</div>
 
</form>
                         
<?php endforeach; ?>                          
                         

                 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


 <?php include "include/footers.php" ?>