<?php include "include/headers.php" ?>


    <div id="wrapper">
        
        
        
        

        <!-- Navigation -->
       <?php include "include/nav.php" ?>
        
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME!!!
                            <small>JOE CIPHER</small>
                        </h1>
                        
                    </div>
                        <div class="col-xs-6">
                       
                            
                            
                            
                        <form action="" method="post">
                        <?php Messages::displayMsg(); ?>
                        <div class="form-group">
                        <label for="cat-title">Add Category</label>
                        <input class="form-control" type="text" name= "cat_title" required>
                        </div>
                            
                        <div class="form-group">
                        <input class="btn btn-primary" type="submit" name= "submit" value="Add category">
                              
                        </div> 
                         </form>
                            
                        <?php // UPDATE AND INCLUDE QUERY
                            
                        if(isset($_GET["edit"])){
                        $cat_id = $_GET["edit"];
                        
                        include "includes/update_categories.php";
                        }    
                            
                            
                            
                        ?>
     
                            </div>
                        
                            <!-- add category form -->
                            
                         
                        <div class="col-xs-6">
                            
                        
                        
                        <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                        <th>Id</th>  
                        <th>Category title</th> 
                            
                            
                        </tr>    
                            
                        </thead> 
                        <tbody>
                         <?php foreach($categories as $category) : ?> 
                         <tr> 
                          <td><?php echo $category->cat_id; ?></td>
                           <td><?php echo $category->cat_title; ?></td>
                           <td><a href="#">Edit</a></td>
                           <td><a href="category.php?delete_cat=<?php echo $category->cat_id; ?>">Delete</a></td>
                            </tr>
                            
                        <?php endforeach; ?>    
                        </tbody>
                          
                            <?php 
                            if(isset($_GET['edit'])){
                                include "edit.php";
                            }
                            
                            
                            
                            ?>  
                            
                            
                            
                        </table>
                            
                            
                            
                            
                            </div>
                            
                            
                             
                           
                        
                     </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include "include/footers.php"; ?>