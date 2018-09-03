  <?php 
   require 'includes/connection.php';

   $q="SELECT * FROM user where type='grader1'";
   $run=mysqli_query($con,$q);
    $row=mysqli_fetch_array($run);

   ?>
 
 <?php require 'includes/topheader.php'; ?>
 <?php require 'includes/desktopheader.php'; ?>

  <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
           
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome To
                                <span><?php echo $row['username'];?></span>
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
                        <div class="col-sm-4">
                            <form>
                                <div class="form-group">
                                    <label>Subject ID:</label>
                                   <select class="form-control">
                                       <?php 
                                         $select=mysqli_query($con,"SELECT * FROM subject");
                                         while($row=mysqli_fetch_object($select)){

                                        ?>
                                       <option>---Select Subject for Data Entry---</option>
                                       <option><?php echo $row->subject_id ?></option>
                                   <?php } ?>
                                   </select>

                                    <div class="form-group">
                                    <label>Visit Name:</label>
                                   <select class="form-control">
                                       <?php 
                                         $select=mysqli_query($con,"SELECT * FROM subject");
                                         while($row=mysqli_fetch_object($select)){

                                        ?>
                                       <option>---Select VIsit Name for Data Entry---</option>
                                       <option><?php echo $row->visit_name ?></option>
                                   <?php } ?>
                                   </select>
                                  
                                </div>

                                  <div class="form-group">
                                    <label>Visit Date:</label>
                                   <select class="form-control">
                                       <?php 
                                         $select=mysqli_query($con,"SELECT * FROM subject");
                                         while($row=mysqli_fetch_object($select)){

                                        ?>
                                       <option>---Select VIsit Date for Data Entry---</option>
                                       <option><?php echo $row->visit_date ?></option>
                                   <?php } ?>
                                   </select>
                                  
                                </div>

                               <!--  -->
                                 <a href="index.php" class="btn btn-info" >Next to form Grading</a>
                            </form>
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