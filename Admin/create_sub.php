
<?php 



session_start();
     
     if($_SESSION['loged']!=true)
     {
          header('location:../index.php?Mesg');
      // echo "<script>alert('please Login First')</script>";
      // echo "<script>window.open('../index.php', '_self')</script>";
     }    
      

     ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Subject</title>
</head>
<style type="text/css">
    input{
        border:1px solid #17a2b8 !important;
    }
    select{
         border:1px solid #17a2b8 !important;
    }
    .fa,.fas {
    font-weight: 600 !important;
    color: #17a2b8 !important;
}
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
                            <span class="text-info">Admin Panel</span>
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
                    <div class="container-fluid">
                    <div class="row">
                         <div class="col-lg-6" style="margin: 0 auto;">
                            <div class="card">
                                <div class="card-header">Create Subject</div>
                                <div class="card-body card-block">
                                    <form action="" method="post" class="">
                                       
                            <?php 
                              $con = mysqli_connect('localhost','root','','kalvista');
                              $select="SELECT user_id FROM user where type='admin'";
                               $run=mysqli_query($con,$select);

                              $row=mysqli_fetch_array($run);
                                 # code...
                               

                           ?>

                           <input type="hidden" name="userid" value="<?php echo $row['user_id'];?>">
                                       
                                 
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Enrollment Date</div>
                                                <input type="date" id="username3" name="enrollment" class="form-control"  placeholder="Enrollement Date">
                                                <div class="input-group-addon">
                                                    <i class="far fa-calendar-alt" style="color:#17a2b8"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                       
                                         <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Study Name</div>
                                                <select name="studyname" id="type" class="form-control">
                                                	<option value="">---Select Study---</option>
                                                	<option>Kalvista</option>
                                                	
                                                </select>
                                                <div class="input-group-addon">
                                                   <i class="fas fa-arrow-alt-circle-down" style="color:#17a2b8"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    Visit Name
                                                </div>
                                                <input type="text" name="visitname" id="username3" class="form-control" placeholder="Visit Name">
                                                 <div class="input-group-addon">
                                                    <i class="far fa-calendar-alt"  style="color:#17a2b8"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    Visit Date
                                                </div>
                                                <input type="date" name="visitdate" id="username3" class="form-control">
                                                <div class="input-group-addon">
                                                    <i class="far fa-calendar-alt"  style="color:#17a2b8"></i>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                
                                                <input type="hidden" name="assigndate" id="username3" class="form-control">
                                               
                                            </div>
                                            
                                        </div>
                                         

                                        
                                        
                                        </div>
                                        <div class="form-actions form-group">
                                            <button type="submit" class="btn btn-primary btn-sm btn-block" name="submit">Register</button>
                                        </div>
                                    </form>
                                   <?php include 'function/insert_sub.php'; ?>
                                </div>
                            </div>
                        </div>                     
                       
                       
                        
                    </div>
                    
                </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- END STATISTIC-->

        <!-- STATISTIC CHART-->
        
        <!-- END STATISTIC CHART-->

        <!-- DATA TABLE-->
       
        <!-- END DATA TABLE-->

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                       
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>
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

