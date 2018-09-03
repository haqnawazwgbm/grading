<?php 


    session_start();
     
     if($_SESSION['loged']!=true)
     {
          header('Location:../index.php?Msg');
      // echo "<script>alert('please Login First')</script>";
      // echo "<script>window.open('../index.php', '_self')</script>";
     }    
      

     ?>

<!DOCTYPE html>
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<?php require 'includes/topheader.php'; ?>

<body class="animsition">
 
    <div class="page-wrapper">
 <?php 
  if(isset($_GET['success'])){

 ?>
    
<script>
swal({
  title: "Success!",
  text: "Record is Successfully Inserted .",
  className:"red-bg"
});


</script>
<?php }
?>
        <!-- HEADER DESKTOP-->
         <?php require 'includes/desktopheader.php'; ?>
        <!-- END HEADER DESKTOP-->
        
        <!-- HEADER MOBILE-->
       <?php require 'includes/mobileheader.php' ?>
        <?php require 'includes/mobilesubheader.php'; ?>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
      <?php require 'includes/content_wrapper.php'; ?>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->