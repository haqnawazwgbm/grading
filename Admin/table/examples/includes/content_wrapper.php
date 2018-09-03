  <?php 
   require 'connection.php';

   $q="SELECT * FROM user";
   $run=mysqli_query($con,$q);
    $row=mysqli_fetch_array($run);

   ?>


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
                        
                      <div class="col-sm-6">
                          <table class="table table-hover table-bordered">
                             <h3>Summary</h3>
                              <thead>
                                  <tr>
                                      <th class="text-info">Total Subject Enrollment</th>
                                      <th class="text-info">Total visits</th>
                                     
                                  </tr>
                              </thead>
                              <?php 
                           $con=mysqli_connect('localhost','root','','kalvista');
                           $query="SELECT subject_id FROM subject";
                           $run=mysqli_query($con,$query);

                           $count=mysqli_num_rows($run);


                         ?>

                         <?php 
                          $con=mysqli_connect('localhost','root','','kalvista');
                           $query="SELECT visit_name FROM subject";
                           $run=mysqli_query($con,$query);
                           $visit=mysqli_num_rows($run);


                          ?>
                              <tbody>
                                  <tr>
                                      <td><?php echo $count; ?></td>
                                      <td><?php  echo $visit?></td>
                                  </tr>
                              </tbody>
                          </table>
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