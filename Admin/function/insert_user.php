<?php 
 
   require 'includes/connection.php';

   // Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors (see changelog)
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


   if(isset($_POST['submit']))

   {


    $Username=htmlentities($_POST['username']);
    $Password=htmlentities($_POST['password']);
    $Email=htmlentities($_POST['email']);
    
    $Role=htmlentities($_POST['type']);


    $query=mysqli_query($con,"INSERT INTO user (username,password,type,email) VALUES('$Username','$Password','$Role','$Email')");
    if($query)
    {
      echo "<script>alert('Successfully Inserted')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
    

    }

    else 

    {
    	echo "insert failed";


   }
}


 ?>