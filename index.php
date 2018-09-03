<?php 

  require 'includes/connection.php';





 ?>


<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
          <?php 
            if(isset($_GET['Msg'])){

           ?>
           <div class="alert alert-danger col-sm-4 col-lg-offset-4" >
           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
           <strong>!!! Please Login First </strong> 
         </div>>
        
       <?php } ?>
        <div class="card card-container" style="background-color: black;">
         
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img src="image/logo.png" class="center-block" style="width: 70%;">
            <!-- <p id="profile-name" class="profile-name-card"></p> -->
            <h3 class="text-center" style="color: #fff;">OIRRC</h3>
            
            <form class="form-signin"   method="post" action="">
              <div class="form-group">
                  <input type="text" name="username" placeholder="Username" class="form-control" required="enter username">
                     
              </div>
               <div class="form-group">
                  <input type="password" name="password" placeholder="password" class="form-control" required="enter correct password">
                  
              </div>
              <div class="form-group">
                  <input type="submit" name="login"  class="btn btn-primary btn-block" value="Login">
              </div>
             
            </form>
           <?php require 'function/login.php'; ?>
        </div><!-- /card-container -->

    </div><!-- /container -->

   











