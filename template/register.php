<?php include "includes/headers.php" ?>
<?php include "includes/nav.php" ?>
<div class="container">
 <div class="well">
     <h2>Register</h2>
     <form action="" method="post">
         <div class="form-group">
            <label for="username">Username:</label>
             <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
         </div>
         <div class="form-group">
            <label for="email">Email:</label>
             <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
         </div>
         
         <div class="form-group">
            <label for="password">Password:</label>
             <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
         </div>
         <div class="form-group">
             <input type="submit" class="btn btn-primary" name="submit" value="Submit">
         </div>
     </form>
 </div>
   </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


<?php include "includes/footers.php" ?>