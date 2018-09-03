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
                            <h1 style="font-size: 16px;">View Subject Data</h1><br>
                            <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                            <th>Subject ID</th>
                            <th>Enrollment Date</th>

                            <th>Study Name</th>
                            <th>Visit Name</th>
                            <th>Visit Date</th>
                            <th>Assign Date</th>
                            
                            </tr>
                            </thead>
                            <tbody>

                            <?php 

                            $con = mysqli_connect('localhost','root','','kalvista');


                            $select="SELECT * FROM subject";
                            $query=mysqli_query($con,$select);
                            while ($row= mysqli_fetch_array($query)) {



                            ?>
                            <tr>
                            <td><?php echo $row['subject_id'] ?></td>
                            <td><?php echo $row['enrollment_date'] ?></td>

                            <td><?php echo $row['study_name'] ?></td>
                            <td><?php echo $row['visit_name'] ?></td>
                            <td><?php echo $row['visit_date'] ?></td>
                            <td><?php echo $row['insert_date'] ?></td>

                           
                          
                            </tr>
                            </tbody>
                            <?php } ?>
                            </table>
                            </div>
                            </div>
                            </div>
                            </div>


                            <!-- COPYRIGHT-->
                            <?php include 'includes/footer.php'; ?>

                            </body>
                            </html>
