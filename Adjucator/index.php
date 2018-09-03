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
<?php require '../includes/topheader.php'; ?>

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
         <?php require '../includes/desktopheader.php'; ?>
        <!-- END HEADER DESKTOP-->
        
        <!-- HEADER MOBILE-->
       <?php require 'includes/mobileheader.php' ?>
        <?php require 'includes/mobilesubheader.php'; ?>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
      <?php 

   require '../includes/connection.php';
                

                   
   $q="SELECT * FROM user where type='grader1'";
   $run=mysqli_query($con,$q);
    $row=mysqli_fetch_array($run);



   ?>
 <style type="text/css">
     
     .table-bordered td, .table-bordered th {

    border: 1px solid #17a2b8 !important;

}
.table td, .table th {

    padding: 5px !important;
    vertical-align: top;
    border-top: 1px solid #dee2e6;

}
   </style>



  <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
           
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">
                                <span><?php echo$_SESSION['username']?></span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                         <div class="row">
                             <div class="col-sm-6">
                                <h3 class="text-info">Subjects CFP</h3>
                                 <table class="table table-hover table-bordered">
                                     <thead>
                                         <tr>
                                             <th class="text-info">Subject ID</th>
                                             <th class="text-info">Study Site</th>
                                             <th class="text-info">Visit Name</th>
                                             <th class="text-info">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php 
                                          $con = mysqli_connect('localhost','root','','kalvista');
                                        $query="SELECT * FROM user_view_sub_adju_fp";
             
                                        $run=mysqli_query($con,$query);

                                        while ($row=mysqli_fetch_array($run)) {
                                            # code...
                                        




                                         ?>
                                         <tr>
                                             <td><?php echo $row['subject_id'] ?></td>
                                             <td><?php echo $row['study_name'] ?></td>
                                             <td><?php echo $row['visit_name'] ?></td>
                                             <td><a href="field_form.php?ID=<?php echo $row['subject_id'] ?>"><i class="fa fa-plus-square" aria-hidden="true"></i>Create</a></td>
                                         </tr>
                                     </tbody>
                                 <?php } ?>
                                 </table>
                             </div>
                             <div class="col-sm-6">
                                <h3 class="text-info">Subjects OCT</h3>
                                 <table class="table table-hover table-bordered">
                                     <thead>
                                         <tr>
                                             <th class="text-info">Subject ID</th>
                                             <th class="text-info">Study Site</th>
                                             <th class="text-info">Visit Name</th>
                                             <th class="text-info">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php 
                                          $con = mysqli_connect('localhost','root','','kalvista');
                                        $query="SELECT * FROM user_view_sub_adju_oct";
             
                                        $run=mysqli_query($con,$query);

                                        while ($row=mysqli_fetch_array($run)) {
                                            # code...

                                         ?>
                                         <tr>
                                             <td><?php echo $row['subject_id'] ?></td>
                                             <td><?php echo $row['study_name'] ?></td>
                                             <td><?php echo $row['visit_name'] ?></td>
                                             <td><a href="oct_form.php?ID=<?php echo $row['subject_id'] ?>"><i class="fa fa-plus-square" aria-hidden="true"></i>Create</a></td>
                                         </tr>
                                     </tbody>
                                 <?php } ?>
                                 </table>
                             </div>
                         </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                   
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                              
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

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

     <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="../js/field_form.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
           // Initialize datatables
        $('table').DataTable();
      })
    </script>

</body>

</html>
<!-- end document-->


