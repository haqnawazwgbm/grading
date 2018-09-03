                     <?php
                     session_start();

                     if($_SESSION['loged']!=true)
                     {
                            header('location:../index.php?Msg');
                     // echo "<script>alert('please Login First')</script>";
                     // echo "<script>window.open('../index.php', '_self')</script>";
                     }    


                     ?>





       <!DOCTYPE html>
       <html lang="en">
       <head>
       <meta charset="UTF-8">
       <title>View User Data</title>
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/regular.css" integrity="sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I" crossorigin="anonymous">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

       </head>
       <style type="text/css">
              

     .scroll-table-container {border:0px solid green; height: 200px; overflow: scroll; table-layout: fixed;}
      .scroll-table,td, th{border-collapse:collapse; border:1px solid #777; min-width: 100px; text-align: center;
      height: 30px; padding: 0px !important; font-size: 12px; }
       </style>
       <body style="background-color: #f7f7f7;">


       <?php require 'includes/topheader.php'; ?>
       <?php require 'includes/desktopheader.php'; ?>
       <!-- END HEADER DESKTOP-->

       <!-- HEADER MOBILE-->
       <?php require 'includes/mobileheader.php';?>
       <?php require 'includes/mobilesubheader.php'; ?>
       <!-- END HEADER MOBILE -->

       <!-- PAGE CONTENT-->
       <div class="page-content--bgf7">
       <!-- BREADCRUMB-->

       <!-- END BREADCRUMB-->

       <!-- WELCOME-->
       <section class="welcome p-t-10">
       <div class="container">
       <div class="row">
       <div class="col-md-12">
       <h1 class="title-4">
       <span>Admin Panel</span>
       </h1>
       <hr class="line-seprate">
       </div>

       </div>
       </div>
       </section>
       </div>
       <br>

       <!-- END WELCOME-->
       <!-- Table -->
       <div class="container">
       <div class="row">
       <div class="col-sm-12" >
         
       <h1 style="font-size: 16px;">View Fb Grader1 Log </h1><br>
         <button id="excel" class="btn btn-primary"><i class="fa fa-download"> Download as Excel</i> </button>      
         <br>
       <div class="table-responsive" id="employee_table"><br>
        <div class="scroll-table-container">
       <table class="table table-hover table-bordered"  class="scroll-table">
       <thead>
       <tr>
        <th>UserID</th> 
        <th>Username</th>     
       <th>Subject ID</th>       
       <th>Study Name</th>       
       <th>Visit Name</th>
       <th>Assign Visit Date</th>
       <th>Entry Date</th>
       <th>Message</th>
           
      
      
       
       </tr>
       </thead>
       <tbody>
 
       <?php 

       $con = mysqli_connect('localhost','root','','kalvista');


       $select="SELECT * FROM log_fp_g1";
       $query=mysqli_query($con,$select);
       while ($row= mysqli_fetch_array($query)) {



       ?>
       <tr>
       <td><?php echo $row['user_id'] ?></td>
       <td><?php echo $row['username'] ?></td>
       <td><?php echo $row['subject_id'] ?></td>
       <td><?php echo $row['Study_Name'] ?></td>
       <td><?php echo $row['Visit_Name'] ?></td>
       <td><?php echo $row['Assign_Visit_Date'] ?></td>
       <td><?php echo $row['Entry_Date'] ?></td>
       <td class="text-info"><?php echo $row['Message'] ?></td>
        
       
       </tr>
       </tbody>
       <?php } ?>
       </table>
       </div>
       </div>
       </div>
       </div>
       </div>


                            <!-- COPYRIGHT-->
<?php include 'includes/footer.php'; ?>
<!-- Latest compiled and minified CSS & JS -->


<script type="text/javascript"  src="export/tableExport.js"></script>
<script type="text/javascript"  src="export/jquery.base64.js"></script>
<script type="text/javascript" src="export/html2canvas.js"></script>
<script type="text/javascript" src="export/jspdf/jspdf.js"></script>
<script type="text/javascript" src="export/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="export/jspdf/libs/base64.js"></script>
<!-- for export -->
<!-- <script src="//cdn.kik.com/app/2.0.1/app.min.js"></script>
<script src="//cdn.jsdelivr.net/morris.js/0.4.1/morris.min.js"></script> -->
<script type="text/javascript">

$(document).ready(function(e){

$("#excel").click(function(e){

$("#employee_table").tableExport({
type:'excel',
escape:'flase'

});

});


});

</script>


       </body>
       </html>
