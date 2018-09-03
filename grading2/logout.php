<?php 
 session_start();
  $con=mysqli_connect("localhost", "root", "", "kalvista") or die(mysqli_errno($con));

  $_SESSION['username']=NULL;
  $_SESSION['ID']=NULL;
  $_SESSION['loged']=false;
  session_destroy();

  header('location:../index.php?Msg');





 ?>