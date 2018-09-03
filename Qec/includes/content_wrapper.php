  

  <?php 

   require 'connection.php';
                

                   
   $q="SELECT * FROM user where type='QEC'";
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
                             <div class="col-sm-4">
                                <h3 class="text-info">Subjects CFP</h3>
                                 <table class="table table-hover table-bordered">
                                     <thead>
                                         <tr>
                                             <th class="text-info">Subject ID</th>
                                             <th class="text-info">Study Name</th>
                                             <th class="text-info">Visit Name</th>
                                             <th class="text-info">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php 
                                          $con = mysqli_connect('localhost','root','','kalvista');
                                        $query="SELECT * FROM qec_fp";
             
                                        $run=mysqli_query($con,$query);

                                        while ($row=mysqli_fetch_array($run)) {
                                            # code...
                                        




                                         ?>
                                         <tr>
                                             <td><?php echo $row['subject_id'] ?></td>
                                             <td><?php echo $row['study_site'] ?></td>
                                             <td><?php echo $row['visit_name'] ?></td>
                                             <td><a href="edit_field_form.php?ID=<?php echo $row['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></td>
                                         </tr>
                                     </tbody>
                                 <?php } ?>
                                 </table>
                             </div>
                             <div class="col-sm-4">
                                <h3 class="text-info">Subjects OCT</h3>
                                 <table class="table table-hover table-bordered">
                                     <thead>
                                         <tr>
                                             <th class="text-info">Subject ID</th>
                                             <th class="text-info">Study Name</th>
                                             <th class="text-info">Visit Name</th>
                                             <th class="text-info">Action</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                        <?php 
                                          $con = mysqli_connect('localhost','root','','kalvista');
                                        $query="SELECT * FROM qec_oct";
             
                                        $run=mysqli_query($con,$query);

                                        while ($row=mysqli_fetch_array($run)) {
                                            # code...
                                        




                                         ?>
                                         <tr>
                                             <td><a href="edit_oct_form.php?ID=<?php echo $row['subject_id'] ?>"><?php echo $row['subject_id'] ?></a></td>
                                             <td><?php echo $row['study_site'] ?></td>
                                             <td><?php echo $row['visit_name'] ?></td>
                                             <td><a href="edit_oct_form.php?ID=<?php echo $row['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></td>
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