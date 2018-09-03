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
      <script
                       src="https://code.jquery.com/jquery-3.3.1.js"
                       integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                       crossorigin="anonymous"></script> 

       </head>

      <!--  <style type="text/css">
              

     .scroll-table-container {border:0px solid green; height: 200px; overflow: scroll; table-layout: fixed;}
      .scroll-table,td, th{border-collapse:collapse; border:1px solid #777; min-width: 100px; text-align: center;
      height: 30px; padding: 0px !important; font-size: 12px; }
       </style> -->
       <body style="background-color: #f7f7f7;"  dir="ltr">


       <?php require '../includes/connection.php'; ?>
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
       <span class="text-info">Admin Panel</span>
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
         
       <h1 style="font-size: 16px;">View Final Data CFP</h1><br>
         <button id="excel" class="btn btn-primary"><i class="fa fa-download"> Download as Excel</i> </button>      
         <br>
       <div class="table-responsive" id="employee_table"><br>
       <div class="sticky-table sticky-ltr-cells">
        <table class="table table-striped">
            <thead>
                <tr class="sticky-header">
                    
                    <th class="sticky-cell">Subject ID</th>       
       <th>Visit Name</th>
       <th>Images Recived OD</th>
       <th>Fundus Photo OD</th>
       <th>Reflex image OD</th>
       <th>Media opacities OD</th>       
       <th>Opacity interferes OD </th>
       <th>Confidence score  OD</th>
       <th>Comments: OD</th>
       <th>Location  OD</th>
       <th>Magnification OD</th>       
        <th>Images Recived OS</th>
       <th>Fundus Photo OS</th>
       <th>Reflex image OS</th>
       <th>Media opacities OS</th>       
       <th>Opacity interferes OS </th>
       <th>Confidence score  OS</th>
       <th>Comments: OS</th>
       <th>Location  OS</th>
       <th>Magnification OS</th>
       <th>F1_MA OD</th> 
       <th>F1_HE OD</th> 
       <th>F1_SE OD</th> 
       <th>F1_VL OD</th> 
       <th>F1_RH OD</th> 
       <th>F1_VB OD</th> 
       <th>F1_IRMA OD</th> 
        <th>F2_MA OD</th> 
       <th>F2_HE OD</th> 
       <th>F2_SE OD</th> 
       <th>F2_VL OD</th> 
       <th>F2_RH OD</th> 
       <th>F2_VB OD</th> 
       <th>F2_IRMA OD</th> 
        <th>F3_MA OD</th> 
       <th>F3_HE OD</th> 
       <th>F3_SE OD</th> 
       <th>F3_VL OD</th> 
       <th>F3_RH OD</th> 
       <th>F3_VB OD</th> 
       <th>F3_IRMA OD</th>      
       <th>F4_MA OD</th> 
       <th>F4_HE OD</th> 
       <th>F4_SE OD</th> 
       <th>F4_VL OD</th> 
       <th>F4_RH OD</th> 
       <th>F4_VB OD</th> 
       <th>F4_IRMA OD</th> 
       <th>F5_MA OD</th> 
       <th>F5_HE OD</th> 
       <th>F5_SE OD</th> 
       <th>F5_VL OD</th> 
       <th>F5_RH OD</th> 
       <th>F5_VB OD</th> 
       <th>F5_IRMA OD</th> 
       <th>F6_MA OD</th> 
       <th>F6_HE OD</th> 
       <th>F6_SE OD</th> 
       <th>F6_VL OD</th> 
       <th>F6_RH OD</th> 
       <th>F6_VB OD</th> 
       <th>F6_IRMA OD</th> 
       <th>F7_MA OD</th> 
       <th>F7_HE OD</th> 
       <th>F7_SE OD</th> 
       <th>F7_VL OD</th> 
       <th>F7_RH OD</th> 
       <th>F7_VB OD</th> 
       <th>F7_IRMA OD</th> 
       <th><b>NPDR Level OD</b></th>     
       <th>F1_MA OS</th> 
       <th>F1_HE OS</th> 
       <th>F1_SE OS</th>            
       <th>F1_VL OS</th> 
       <th>F1_RH OS</th> 
       <th>F1_VB OS</th> 
       <th>F1_IRMA OS</th> 
       <th>F2_MA OS</th> 
       <th>F2_HE OS</th> 
       <th>F2_SE OS</th> 
       <th>F2_VL OS</th> 
       <th>F2_RH OS</th> 
       <th>F2_VB OS</th> 
       <th>F2_IRMA OS</th> 
       <th>F3_MA OS</th> 
       <th>F3_HE  OS</th> 
       <th>F3_SE OS</th> 
       <th>F3_VL OS</th> 
       <th>F3_RH OS</th> 
       <th>F3_VB OS</th> 
       <th>F3_IRMA OS</th> 
       <th>F4_MA OS</th> 
       <th>F4_HE OS</th> 
       <th>F4_SE OS</th> 
       <th>F4_VL OS</th> 
       <th>F4_RH OS</th> 
       <th>F4_VB OS</th> 
       <th>F4_IRMA OS</th> 
       <th>F5_MA OS</th> 
       <th>F5_HE OS</th> 
       <th>F5_SE OS</th> 
       <th>F5_VL OS</th> 
       <th>F5_RH OS</th> 
       <th>F5_VB OS</th> 
       <th>F5_IRMA OS</th> 
       <th>F6_MA OS</th> 
       <th>F6_HE OS</th> 
       <th>F6_SE OS</th> 
       <th>F6_VL OS</th> 
       <th>F6_RH OS</th> 
       <th>F6_VB OS</th> 
       <th>F6_IRMA OS</th> 
       <th>F7_MA OS</th> 
       <th>F7_HE OS</th> 
       <th>F7_SE OS</th> 
       <th>F7_VL OS</th> 
       <th>F7_RH OS</th> 
       <th>F7_VB OS</th> 
       <th>F7_IRMA OS</th> 
       <th><b>NPDR Level OS</b></th>
       </tr>
            </thead>
            <tbody>
               <?php 


       $select="SELECT * FROM adjudication_fp_g";
       $query=mysqli_query($con,$select);
       while ($row= mysqli_fetch_array($query)) {



       ?>
                <tr>
                    <td class="sticky-cell"><?php echo $row['subject_id'] ?></td>
                    <td><?php echo $row['visit_name'] ?></td>
                     <td><?php echo $row['images_received_od'] ?></td>
                     <td><?php echo $row['fundus_photos_od'] ?></td>
                     <td><?php echo $row['reflex_image_od'] ?></td>
                     <td><?php echo $row['media_opacities_od'] ?></td>
                     <td><?php echo $row['opacity_interferes_with_view_od'] ?></td>
                     <td><?php echo $row['confidence_score_on_fp_od'] ?></td>
                     <td><?php echo $row['comments_od'] ?></td>
                     <td><?php echo $row['location_od'] ?></td>
                     <td><?php echo $row['magnification_od'] ?></td>
                     <td><?php echo $row['fundus_photos_os'] ?></td>
                     <td><?php echo $row['reflex_image_os'] ?></td>
                     <td><?php echo $row['media_opacities_os'] ?></td>
                     <td><?php echo $row['opacity_interferes_with_view_os'] ?></td>
                     <td><?php echo $row['confidence_score_on_fp_os'] ?></td>
                     <td><?php echo $row['comments_os'] ?></td>
                     <td><?php echo $row['location_os'] ?></td>
                     <td><?php echo $row['magnification_os'] ?></td>
                     <td><?php echo $row['F1_MA_OD'] ?></td>
                     <td><?php echo $row['F1_HE_OD'] ?></td>
                     <td><?php echo $row['F1_SE_OD'] ?></td>
                     <td><?php echo $row['F1_VL_OD'] ?></td>
                     <td><?php echo $row['F1_RH_OD'] ?></td>
                     <td><?php echo $row['F1_VB_OD'] ?></td>
                     <td><?php echo $row['F1_IRMA_OD'] ?></td>   
                     <td><?php echo $row['F2_MA_OD'] ?></td>
                     <td><?php echo $row['F2_HE_OD'] ?></td>
                     <td><?php echo $row['F2_SE_OD'] ?></td>
                     <td><?php echo $row['F2_VL_OD'] ?></td>
                     <td><?php echo $row['F2_RH_OD'] ?></td>
                     <td><?php echo $row['F2_VB_OD'] ?></td>
                     <td><?php echo $row['F2_IRMA_OD'] ?></td>
                     <td><?php echo $row['F3_MA_OD'] ?></td>
                     <td><?php echo $row['F3_HE_OD'] ?></td>
                     <td><?php echo $row['F3_SE_OD'] ?></td>
                     <td><?php echo $row['F3_VL_OD'] ?></td>
                     <td><?php echo $row['F3_RH_OD'] ?></td>
                     <td><?php echo $row['F3_VB_OD'] ?></td>
                     <td><?php echo $row['F3_IRMA_OD'] ?></td>       
                     <td><?php echo $row['F4_MA_OD'] ?></td>
                     <td><?php echo $row['F4_HE_OD'] ?></td>
                     <td><?php echo $row['F4_SE_OD'] ?></td>
                     <td><?php echo $row['F4_VL_OD'] ?></td>
                     <td><?php echo $row['F4_RH_OD'] ?></td>
                     <td><?php echo $row['F4_VB_OD'] ?></td>
                     <td><?php echo $row['F4_IRMA_OD'] ?></td>
                     <td><?php echo $row['F5_MA_OD'] ?></td>
                     <td><?php echo $row['F5_HE_OD'] ?></td>
                     <td><?php echo $row['F5_SE_OD'] ?></td>
                     <td><?php echo $row['F5_VL_OD'] ?></td>
                     <td><?php echo $row['F5_RH_OD'] ?></td>
                     <td><?php echo $row['F5_VB_OD'] ?></td>
                     <td><?php echo $row['F5_IRMA_OD'] ?></td>
                     <td><?php echo $row['F6_MA_OD'] ?></td>
                     <td><?php echo $row['F6_HE_OD'] ?></td>
                     <td><?php echo $row['F6_SE_OD'] ?></td>
                     <td><?php echo $row['F6_VL_OD'] ?></td>
                     <td><?php echo $row['F6_RH_OD'] ?></td>
                     <td><?php echo $row['F6_VB_OD'] ?></td>
                     <td><?php echo $row['F6_IRMA_OD'] ?></td>
                     <td><?php echo $row['F7_MA_OD'] ?></td>
                     <td><?php echo $row['F7_HE_OD'] ?></td>
                     <td><?php echo $row['F7_SE_OD'] ?></td>
                     <td><?php echo $row['F7_VL_OD'] ?></td>
                     <td><?php echo $row['F7_RH_OD'] ?></td>
                     <td><?php echo $row['F7_VB_OD'] ?></td>
                     <td><?php echo $row['F7_IRMA_OD'] ?></td>
                     <td><?php echo $row['od_level'] ?></td>   
                     <td><?php echo $row['F1_MA_OS'] ?></td>
                     <td><?php echo $row['F1_HE_OS'] ?></td>
                     <td><?php echo $row['F1_SE_OS'] ?></td>
                     <td><?php echo $row['F1_VL_OS'] ?></td>
                     <td><?php echo $row['F1_RH_OS'] ?></td>
                     <td><?php echo $row['F1_VB_OS'] ?></td>
                     <td><?php echo $row['F1_IRMA_OS'] ?></td>
                     <td><?php echo $row['F2_MA_OS'] ?></td>
                     <td><?php echo $row['F2_HE_OS'] ?></td>
                     <td><?php echo $row['F2_SE_OS'] ?></td>
                     <td><?php echo $row['F2_VL_OS'] ?></td>
                     <td><?php echo $row['F2_RH_OS'] ?></td>
                     <td><?php echo $row['F2_VB_OS'] ?></td>
                     <td><?php echo $row['F2_IRMA_OS'] ?></td>
                     <td><?php echo $row['F3_MA_OS'] ?></td>
                     <td><?php echo $row['F3_HE_OS'] ?></td>
                     <td><?php echo $row['F3_SE_OS'] ?></td>
                     <td><?php echo $row['F3_VL_OS'] ?></td>
                     <td><?php echo $row['F3_RH_OS'] ?></td>
                     <td><?php echo $row['F3_VB_OS'] ?></td>
                     <td><?php echo $row['F3_IRMA_OS'] ?></td>     
                     <td><?php echo $row['F4_MA_OS'] ?></td>
                     <td><?php echo $row['F4_HE_OS'] ?></td>
                     <td><?php echo $row['F4_SE_OS'] ?></td>
                     <td><?php echo $row['F4_VL_OS'] ?></td>
                     <td><?php echo $row['F4_RH_OS'] ?></td>
                     <td><?php echo $row['F4_VB_OS'] ?></td>
                     <td><?php echo $row['F4_IRMA_OS'] ?></td>  
                     <td><?php echo $row['F5_MA_OS'] ?></td>
                     <td><?php echo $row['F5_HE_OS'] ?></td>
                     <td><?php echo $row['F5_SE_OS'] ?></td>
                     <td><?php echo $row['F5_VL_OS'] ?></td>
                     <td><?php echo $row['F5_RH_OS'] ?></td>
                     <td><?php echo $row['F5_VB_OS'] ?></td>
                     <td><?php echo $row['F5_IRMA_OS'] ?></td>
                     <td><?php echo $row['F6_MA_OS'] ?></td>
                     <td><?php echo $row['F6_HE_OS'] ?></td>
                     <td><?php echo $row['F6_SE_OS'] ?></td>
                     <td><?php echo $row['F6_VL_OS'] ?></td>
                     <td><?php echo $row['F6_RH_OS'] ?></td>
                     <td><?php echo $row['F6_VB_OS'] ?></td>
                     <td><?php echo $row['F6_IRMA_OS'] ?></td>
                     <td><?php echo $row['F7_MA_OS'] ?></td>
                     <td><?php echo $row['F7_HE_OS'] ?></td>
                     <td><?php echo $row['F7_SE_OS'] ?></td>
                     <td><?php echo $row['F7_VL_OS'] ?></td>
                     <td><?php echo $row['F7_RH_OS'] ?></td>
                     <td><?php echo $row['F7_VB_OS'] ?></td>
                     <td><?php echo $row['F7_IRMA_OS'] ?></td>
                     <td><?php echo $row['os_level'] ?></td>     

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
 <script src="table/jquery.stickytable.js" type="text/javascript"></script>
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
