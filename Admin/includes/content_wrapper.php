  <?php 
   require 'connection.php';


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
                            <h3 class="title-4">
                                <span class="text-info">Admin Panel</span>
                            </h3>
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
                          <table class="table table-hover table-bordered" style="width: 80%; background-color: #ffff;">
                            <!--  <h3 class="title-4"  style="font-size: 16px;"><span class="text-info">Project Progress Report</span></h3><br> -->
                             <h3 class="text-info">Project Progress Report</h3>
                              <thead>
                                  <tr>
                                     <th></th>
                                      <th class="text-info">CFP</th>
                                      <th class="text-info">OCT</th>
                                    
                                  </tr>
                              </thead>
                              <?php 
                                $s="SELECT * FROM oct_fp_sum";
                              
                                $run=mysqli_query($con,$s);
                                while ($row=mysqli_fetch_array($run)) {
                                  # code...
                                


                               ?>
                              <tbody>
                                  <tr>

                                      <td style="width: 36%;"><?php  echo $row['message']?></td>
                                      <td><?php echo $row['fp_total'] ?></td>
                                      <td ><?php echo $row['oct_total'] ?></td>
                                     
                                      
                                      
                                  </tr>

                              </tbody>
                            <?php } ?>
                          </table>
                      </div> 
                       <div class="col-sm-6" style="margin:auto;">
                   <h3 class="text-info ">User Data</h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" style="width: 80%;background-color: #ffff;">
                            <thead>
                                <tr>
                                    <th class="text-info">ID</th>
                                    <th class="text-info">User Name</th>
                                    <th class="text-info">Role</th>   
                                   
                                </tr>
                            </thead>
                            <tbody>

                                <?php 

                                 $con = mysqli_connect('localhost','root','','kalvista');


                                 $select="SELECT * FROM user";
                                 $query=mysqli_query($con,$select);
                                 while ($row= mysqli_fetch_array($query)) {
                                               
                                           

                                ?>
                                <tr>
                                    <td><?php echo $row['user_id'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['type'] ?></td>
                                  
                                   
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