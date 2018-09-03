 
<?php
// Turn off error reporting
error_reporting(0);

// Report runtime errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Report all errors
error_reporting(E_ALL);

// Same as error_reporting(E_ALL);
ini_set("error_reporting", E_ALL);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
?> 














  <?php 
   require 'includes/connection.php';

   $q="SELECT * FROM user where type='grader1'";
   $run=mysqli_query($con,$q);
    $row=mysqli_fetch_array($run);

   ?>
<style type="text/css">
  

  .table-bordered td, .table-bordered th {

      border: 1px solid #008398 !important;
      padding: 5px;

  }
  textarea{
       border: 1px solid #008398;
  }
  /*#panel{
      display: none;
  }*/
  .form-filed{
     border: 1px solid #008398 !important;
      padding: 18px;

  }
  input{
      border: 1px solid #008398;
  }
</style>
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
                                <span><?php echo $row['username'];?>
                                  
                                </span>
                                <span class="badge" class="btn btn-info" style="font-size: 22px !important; background-color: #008398; color: #ffff "><?php echo $row['type']; ?></span>
                            </h1>
                            <h3 class="text-info pull-right"> Study Name:Kalvista</h3>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
           
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                         
                          <form action="fields_form.php" method="post">
                            
                            <div class="form-group">
                              <label>Subject ID:</label>
                              <select name="sub">

                                <option>--Select subject</option>
                                 <?php 

                               $select="SELECT subject_id FROM subject";
                               $run=mysqli_query($con,$select);

                               while ($row=mysqli_fetch_array($run)) {
                                 # code...
                               

                           ?>
                           <option><?php echo $row['subject_id'] ?></option>

                         <?php } ?>

                              </select>
                            </div>

                            <div class="form-group">
                              <label>Visit Name:</label>
                              <select name="visitname">

                                <option>--Select Visit Name</option>
                                 <?php 

                               $select="SELECT visit_name FROM subject";
                               $run=mysqli_query($con,$select);

                               while ($row=mysqli_fetch_array($run)) {
                                 # code...
                               

                           ?>
                           <option><?php echo $row['visit_name'] ?></option>

                         <?php } ?>

                              </select>
                            </div>
                         

                            <?php 
                              $select="SELECT user_id FROM user where type='grader1'";
                               $run=mysqli_query($con,$select);

                              $row=mysqli_fetch_array($run);
                                 # code...
                               

                           ?>

                           <input type="hidden" name="userid" value="<?php echo $row['user_id'];?>">

                             

                          <table class="table-bordered">
                              <thead>
                                 

                                    <th colspan="3" style="padding: 20px; background-color: #008398;
                                      color: #fff;">Images Recived</th>
                              </thead>
                               
                              <tbody>
                                  <tr style="padding: 10px">
                                      <td> <span>OD </span>  <input type="checkbox" name="imgrecived" value="OD">
                                      </td>
                                      <td> <span>OS </span> <input type="checkbox" name="imgrecived" value="OS" >
                                      </td>
                                      <td> <span>OU </span><input type="checkbox" name="imgrecived" value="OU">
                                      </td>


                                  </tr>
                              </tbody>

                                
                            </table>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                         <table class="table-bordered" style="font-size: 12px;">
                                 <h3>COLOR FUNDUS PHOTOGRAPHY  QUALITY CONTROL</h3>
                                 <thead colspan="3" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" > OD</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;"> OS</th>
                                 </thead>
                                 <tbody> 
                                     <tr>
                                         <td>
                                             <label>Were fundus photos were received?</label>

                                         </td>
                                         <td>
                                          <input type="radio" name="fundusphoto_od"  value="Yes">   YES
                                          <input type="radio" name="fundusphoto_od" value="No">   No

                                         </td>
                                         <td>
                                         <input type="radio" name="fundusphoto_os"  value="Yes">   YES
                                          <input type="radio" name="fundusphoto_os" value="No">   No

                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>Was fundus reflex image obtained?</label></td> 
                                        <td>
                                          <input type="radio" name="reflex_od" value="Yes"> YES
                                            <input type="radio" name="reflex_od" value="No"> No

                                          </td>

                                          <td>
                                          <input type="radio" name="reflex_os" value="Yes"> YES
                                            <input type="radio" name="reflex_os" value="No"> No

                                          </td>
                                          

                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label> Any media opacities that obscure the view of the retina?</label></td>
                                       <td>
                                          <input type="radio" name="media_od" value="Yes">  YES
                                          <input type="radio" name="media_od" value="No">  No

                                         </td>
                                          <td>
                                          <input type="radio" name="media_os" value="Yes"> YES
                                          <input type="radio" name="media_os" value="No">  No

                                         </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>If the answer to the previous question is yes, <br>please specify the level the opacity  interferes with view:</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="opeacity_interefer_od" value="Negligible">  Negligible <br>
                                          <input type="radio" name="opeacity_interefer_od" value="Minimal">  Minimal <br>
                                          <input type="radio" name="opeacity_interefer_od" value="Moderate">  Moderate <br>
                                          <input type="radio" name="opeacity_interefer_od" value="Significant">  Significant <br>

                                         </td>
                                          <td>
                                           <input type="radio" name="opeacity_interefer_os" value="Negligible">  Negligible <br>
                                          <input type="radio" name="opeacity_interefer_os" value="Minimal">  Minimal <br>
                                          <input type="radio" name="opeacity_interefer_os" value="Moderate">  Moderate <br>
                                          <input type="radio" name="opeacity_interefer_os" value="Significant">  Significant <br>

                                         </td>
                                    </tr>
                                     <td>
                                          <label>Confidence score on FP?</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="confidence_od" value="Gradable"> Gradable <br>
                                          <input type="radio" name="confidence_od" value="Partially Gradable"> Partially Gradable <br>
                                          <input type="radio" name="confidence_od" value="Ungradable"> Ungradable <br>
                                          <input type="radio" name="confidence_od" value="Significant"> Significant <br>

                                         </td>
                                          <td>
                                         <input type="radio" name="confidence_os" value="Gradable"> Gradable <br>
                                          <input type="radio" name="confidence_os" value="Partially Gradable"> Partially Gradable <br>
                                          <input type="radio" name="confidence_os" value="Ungradable"> Ungradable <br>
                                          <input type="radio" name="confidence_os" value="Significant"> Significant <br>

                                         </td>
                                    </tr>
                                    <tr>
                                        <td><label>Comments:</label></td>
                                        <td>
                                            <textarea name="comments_od"></textarea>
                                        </td>


                                        <td>
                                            <textarea name="comments_os"></textarea>
                                        </td>
                                    </tr>

                                     <tr>
                                         <td>Location</td>
                                         <td>
                                          <input type="radio" name="location_od" value="4 Field"> 4 Field <br>
                                          <input type="radio" name="location_od" value=" 7 Field"> 7 Field

                                         </td>
                                         <td>
                                          <input type="radio" name="location_os" value="4 Field"> 4 Field <br>
                                          <input type="radio" name="location_os" value=" 7 Field"> 7 Field
                                         </td>
                                     </tr>
                                      <tr>
                                          <td>Magnification</td>
                                          <td><input type="radio" name="maginfication_od" value="50"> 50<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_od" value="60"> 60<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_od" value="30"> 30<sup>o</sup>/35<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_od" value="45"> 45<sup>o</sup> <br>

                                          </td>
                                          <td><input type="radio" name="maginfication_os" value="50"> 50<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_os" value="60"> 60<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_os" value="30"> 30<sup>o</sup>/35<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_os" value="45"> 45<sup>o</sup> <br>

                                          </td>
                                          
                                          
                                      </tr>


                                 </tbody>
                            </table><br><br>
                      </div>
                      <div class="col-sm-12">
                         <table class="table-bordered" style="font-size: 12px;">
                                 <h3>ELIGIBILITY OF THE EYES</h3>
                                 <p> (All the items must be completed, missing or incorrectly completed items will require additional follow-up)</p>
                                 <thead colspan="3" style="padding: 10px">
                                     <h4 class="">Evaluation of the Images</h4>
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" > OD</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;"> OS</th>
                                 </thead>
                                 <tbody> 
                                      <tr>                                       <td>
                                             <label>Evidence of current active proliferative diabetic retinopathy (PDR) (Exclusion)</label>

                                         </td>
                                         <td>
                                          <input type="radio" name="pdr_od" value="Yes">YES
                                          <input type="radio" name="pdr_od" value="No"> No <br>
                                          <input type="radio" name="pdr_od" value="No">Cannot Grade

                                         </td>
                                         <td>
                                         <input type="radio" name="pdr_os" value="Yes">YES
                                          <input type="radio" name="pdr_os" value="No"> No <br>
                                          <input type="radio" name="pdr_os" value="Cannot Grade">Cannot Grade

                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>Evidence of current active retinal neovascularization? (Exclusion)</label></td> 
                                        <td><input type="radio" name="active_retinal_od" value="Yes">  YES
                                            <input type="radio" name="active_retinal_od" value="No">  No <br>
                                             <input type="radio" name="active_retinal_od" value="Cannot Grade"> Cannot Grade
                                        </td>
                                          <td><input type="radio" name="active_retinal_os" value="Yes">  YES
                                            <input type="radio" name="active_retinal_os" value="No">  No <br>
                                             <input type="radio" name="active_retinal_os" value="Cannot Grade"> Cannot Grade
                                      </td>
                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label> Presence of vitreous hemorrhage? (Exclusion</label></td>
                                       <td>
                                          <input type="radio" name="vitreous_od" value="YES">  YES
                                          <input type="radio" name="vitreous_od" value="No">  No <br>
                                          <input type="radio" name="vitreous_od" value=" Cannot Grade">  Cannot Grade

                                         </td>
                                          <td>
                                         <input type="radio" name="vitreous_os" value="YES">  YES
                                          <input type="radio" name="vitreous_os" value="No">  No <br>
                                          <input type="radio" name="vitreous_os" value=" Cannot Grade">  Cannot Grade


                                         </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>Is the eye eligible based on the FP findings?</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="fb_finding_od" value="Yes">  Yes 
                                          <input type="radio" name="fb_finding_od" value="No">  No
                                        

                                         </td>
                                          <td>
                                          <input type="radio" name="fb_finding_os" value="Yes">  Yes 
                                          <input type="radio" name="fb_finding_os" value="No">  No
                                         

                                         </td>
                                    </tr>

                                    <tr>
                                        <td><label>Comments:</label></td>
                                        <td colspan="2">
                                            <textarea name="comments_od1"></textarea>
                                        </td>


                                        
                                    </tr>
                            

                                 </tbody>
                            </table>
                      </div>
                    </div><br>
                     <table class="table-bordered" style="font-size: 10px; ">
                                 <h3>DIABETIC RETINOPATHY (DR) GRADING FORM – OD</h3>
                                 <thead colspan="4" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" >Field 1</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 2</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 3</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 4</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 5</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 6</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 7</th>
                                 </thead>
                                 <tbody> 
                                     <tr>
                                         <td>
                                             <label>Microaneurysms</label>

                                         </td>
                                         <td>
                                           <input type="checkbox" name="MA1_od" value="Definite"> Present <br>
                                            

                                         </td>
                                         <td>
                                         <input type="checkbox" name="MA2_od" value="Definite"> Present <br>
                                          
                                         </td>
                                          <td>
                                         <input type="checkbox" name="MA3_od" value=Definitet"> Present <br>
                                         
                                         </td> 
                                         <td>
                                         <input type="checkbox" name="MA4" value="Definite"> Present <br>
                                         
                                         </td> 
                                         <td>
                                         <input type="checkbox" name="MA5_od" value="Definite"> Present <br>
                                        
                                         </td>

                                         <td>
                                         <input type="checkbox" name="MA6_od" value="Definite"> Present <br>
                                         
                                         </td>
                                          <td>
                                         <input type="checkbox" name="MA7_od" value="Definite"> Present <br>
                                         
                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td>
                                        <label>Retinal Hemorrhages</label>
                                      </td> 
                                        <td><input type="checkbox" name="RH1_od" value="Present"> Present <br>
                                           
                                        </td>

                                        <td><input type="checkbox" name="RH2_od" value="Present"> Present <br>
                                        
                                        </td>
                                        <td>
                                          
                                          <input type="checkbox" name="RH3_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH3_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH3_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH3_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH3_od" value="Very Sever"> Very Sever 

                                        </td>

                                        <td> 
                                         
                                          <input type="checkbox" name="RH4_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH4_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH4_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH4_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH4_od" value="Very Sever"> Very Sever <br></td>
                                        <td> 
                                        
                                          <input type="checkbox" name="RH5_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH5_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH5_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH5_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH5_od" value="Very Sever"> Very Sever <br></td>

                                        <td>
                                        
                                          <input type="checkbox" name="RH6_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH6_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH6_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH6_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH6_od" value="Very Sever"> Very Sever <br></td>
                                          <td>
                                           
                                            <input type="checkbox" name="RH7_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH7_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH7_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH7_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH7_od" value="Very Sever"> Very Sever <br></td>
                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label>Hard Exudates</label></td>
                                       <td><input type="checkbox" name="HE1_od" value="Definite"> Present <br>
                                        

                                       </td>
                                        <td><input type="checkbox" name="HE2_od" value="Definite"> Present <br>
                                       

                                        </td>
                                        <td>
                                           <input type="checkbox" name="HE3_od" value="Definite"> Present <br>
                                         

                                        </td>
                                        <td> 
                                          <input type="checkbox" name="HE4_od" value="Definite"> Present <br>
                                         
                                        <td> 
                                          <input type="checkbox" name="HE5_od" value="Definite"> Present <br>
                                         

                                        <td>
                                          <input type="checkbox" name="HE6_od" value="Definite"> Present <br>

                                          </td>
                                          <td>
                                            <input type="checkbox" name="HE7_od" value="Definite"> Present <br>
                                            </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>Soft Exudates</label>
                                       </td>
                                       <td><input type="checkbox" name="SE1_od" value="Definite"> Present <br>
                                         

                                       </td>
                                        <td><input type="checkbox" name="SE2_od" value="Definite"> Present <br>
                                        


                                        </td>
                                        <td>
                                         <input type="checkbox" name="SE3_od" value=Definitet"> Present <br>
                                         

                                        </td>
                                        <td>
                                           <input type="checkbox" name="SE4_od" value="Definite"> Present <br>
                                        </td>
                                        <td> 
                                          <input type="checkbox" name="SE5_od" value="Definite"> Present <br>
                                          </td>


                                        <td>
                                           <input type="checkbox" name="SE6_od" value="Definite"> Present <br>
                                          </td>
                                          <td>
                                            <input type="checkbox" name="SE7_od" value="Definite"> Present <br>
                                           </td>
                                    </tr>
                                    <tr>
                                     <td>
                                          <label>Venous Looping</label>
                                       </td>
                                      <td><input type="checkbox" name="VL1_od" value="Definite"> Present <br>
                                       
                                         


                                      </td>
                                        <td>

                                          <input type="checkbox" name="VL2_od" value="Definite"> Present <br>

                                         

                                        </td>
                                        <td>
                                          <input type="checkbox" name="VL3_od" value="Definite"> Present <br> 
                                          

                                        </td>
                                        <td> 
                                          <input type="checkbox" name="VL4_od" value="Definite"> Present <br>
                                          </td>
                                        <td> 
                                          <input type="checkbox" name="VL5_od" value="Definite"> Present <br>
                                          </td>
                                        <td>
                                           <input type="checkbox" name="VL6_od" value="Definite"> Present <br>
                                          </td>
                                          <td>
                                            <input type="checkbox" name="VL7_od" value="Definite"> Present <br>
                                            </td>
                                    </tr>
                                    <tr>  
                                        <td><label>Intraretinal Microvascular Abnormalities</label></td>

                                        <td><input type="checkbox" name="IRMA1_od" value="Definite"> Present <br>
                                         
                                        </td>
                                        <td>
                                          <input type="checkbox" name="IRMA2_od" value="Definite"> Present <br>
                                         

                                        </td>
                                        <td>
                                          <input type="checkbox" name="IRMA3_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA3_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA3_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA3_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA3_od" value="Very Sever"> Very Sever 

                                        </td>
                                        <td>
                                         
                                         <input type="checkbox" name="IRMA4_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA4_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA4_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA4_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA4_od" value="Very Sever"> Very Sever <br></td>
                                        <td> 
                                          
                                          <input type="checkbox" name="IRMA5_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA5_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA5_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA5_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA5_od" value="Very Sever"> Very Sever <br></td>

                                        <td>
                                          
                                          <input type="checkbox" name="IRMA6_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA6_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA6_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA6_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA6_od" value="Very Sever"> Very Sever <br></td>
                                          <td>
                                            
                                            <input type="checkbox" name="IRMA7_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA7_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA7_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA7_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA7_od" value="Very Sever"> Very Sever <br></td>
                                       
                                    </tr>

                                     <tr>
                                         <td><label>Venous Bleeding</label></td>
                                         <td><input type="checkbox" name="VB1_od" value="Definite"> Present <br>
                                          

                                         </td>
                                        <td>
                                          <input type="checkbox" name="VB2_od" value="Definite"> Present <br>
                                       

                                        </td>
                                        <td>
                                          
                                          <input type="checkbox" name="VB3_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB3_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB3_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB3_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB3_od" value="Very Sever"> Very Sever 

                                        </td>
                                        <td> 
                                           
                                          <input type="checkbox" name="VB4_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB4_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB4_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB4_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB4_od" value="Very Sever"> Very Sever <br></td>
                                        <td>
                                         
                                          <input type="checkbox" name="VB5_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB5_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB5_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB5_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB5_od" value="Very Sever"> Very Sever <br></td>

                                        <td>
                                          
                                          <input type="checkbox" name="VB6_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB6_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB6_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB6_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB6_od" value="Very Sever"> Very Sever <br></td>
                                          <td>
                                            
                                            <input type="checkbox" name="VB7_od" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB7_od" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB7_od" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB7_od" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB7_od" value="Very Sever"> Very Sever <br></td>
                                     </tr>
                                      <tr>
                                          
                                          
                                      </tr>


                                 </tbody>
                                 <thead colspan="4" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" >Field 1</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 2</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 3</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 4</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 5</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 6</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 7</th>
                                 </thead>

                            </table><br>
                            <div class="col-sm-12">
                            
                            <table class="table-bordered" style="font-size: 10px; ">
                                 <h3>DIABETIC RETINOPATHY (DR) GRADING FORM – OS</h3>
                                 <thead colspan="4" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" >Field 1</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 2</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 3</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 4</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 5</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 6</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 7</th>
                                 </thead>
                                 <tbody> 
                                     <tr>
                                         <td>
                                             <label>Microaneurysms</label>

                                         </td>
                                         <td>
                                           <input type="checkbox" name="MA1" value="Definite"> Present <br>
                                            

                                         </td>
                                         <td>
                                         <input type="checkbox" name="MA2" value="Definite"> Present <br>
                                          
                                         </td>
                                          <td>
                                         <input type="checkbox" name="MA3" value="Definite"> Present <br>
                                         
                                         </td> 
                                         <td>
                                         <input type="checkbox" name="MA4" value="Definite"> Present <br>
                                         
                                         </td> 
                                         <td>
                                         <input type="checkbox" name="MA5" value="Definite"> Present <br>
                                        
                                         </td>

                                         <td>
                                         <input type="checkbox" name="MA6" value="Definite"> Present <br>
                                         
                                         </td>
                                          <td>
                                         <input type="checkbox" name="MA7" value="Definite"> Present <br>
                                         
                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td>
                                        <label>Retinal Hemorrhages</label>
                                      </td> 
                                        <td><input type="checkbox" name="RH1" value="Present"> Present <br>
                                           
                                        </td>

                                        <td><input type="checkbox" name="RH2" value="Present"> Present <br>
                                        
                                        </td>
                                        <td>
                                          
                                          <input type="checkbox" name="RH3" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH3" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH3" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH3" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH3" value="Very Sever"> Very Sever 

                                        </td>

                                        <td> 
                                         
                                          <input type="checkbox" name="RH4" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH4" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH4" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH4" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH4" value="Very Sever"> Very Sever <br></td>
                                        <td> 
                                        
                                          <input type="checkbox" name="RH5" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH5" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH5" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH5" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH5" value="Very Sever"> Very Sever <br></td>

                                        <td>
                                        
                                          <input type="checkbox" name="RH6" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH6" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH6" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH6" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH6" value="Very Sever"> Very Sever <br></td>
                                          <td>
                                           
                                            <input type="checkbox" name="RH7" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="RH7" value="Definite"> Definite <br>
                                          <input type="checkbox" name="RH7" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="RH7" value="Sever"> Sever <br>
                                          <input type="checkbox" name="RH7" value="Very Sever"> Very Sever <br></td>
                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label>Hard Exudates</label></td>
                                       <td><input type="checkbox" name="HE1" value="Definite"> Present <br>
                                        

                                       </td>
                                        <td><input type="checkbox" name="HE2" value="Definite"> Present <br>
                                       

                                        </td>
                                        <td>
                                           <input type="checkbox" name="HE3" value="Definite"> Present <br>
                                         

                                        </td>
                                        <td> 
                                          <input type="checkbox" name="HE4" value="Definite"> Present <br>
                                         
                                        <td> 
                                          <input type="checkbox" name="HE5" value="Definite"> Present <br>
                                         

                                        <td>
                                          <input type="checkbox" name="HE6" value="Definite"> Present <br>

                                          </td>
                                          <td>
                                            <input type="checkbox" name="HE7" value="Definite"> Present <br>
                                            </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>Soft Exudates</label>
                                       </td>
                                       <td><input type="checkbox" name="SE1" value="Definite"> Present <br>
                                         

                                       </td>
                                        <td><input type="checkbox" name="SE2" value="Definite"> Present <br>
                                        


                                        </td>
                                        <td>
                                         <input type="checkbox" name="SE3" value="Definite"> Present <br>
                                         

                                        </td>
                                        <td>
                                           <input type="checkbox" name="SE4" value="Definite"> Present <br>
                                        </td>
                                        <td> 
                                          <input type="checkbox" name="SE5" value="Definite"> Present <br>
                                          </td>


                                        <td>
                                           <input type="checkbox" name="SE6" value="Definite"> Present <br>
                                          </td>
                                          <td>
                                            <input type="checkbox" name="SE7" value="Definite"> Present <br>
                                           </td>
                                    </tr>
                                    <tr>
                                     <td>
                                          <label>Venous Looping</label>
                                       </td>
                                      <td><input type="checkbox" name="VL1" value="Definite"> Present <br>
                                       
                                         


                                      </td>
                                        <td>

                                          <input type="checkbox" name="VL2" value="Definite"> Present <br>

                                         

                                        </td>
                                        <td>
                                          <input type="checkbox" name="VL3" value="Definite"> Present <br> 
                                          

                                        </td>
                                        <td> 
                                          <input type="checkbox" name="VL4" value="Definite"> Present <br>
                                          </td>
                                        <td> 
                                          <input type="checkbox" name="VL5" value="Definite"> Present <br>
                                          </td>
                                        <td>
                                           <input type="checkbox" name="VL6" value="Definite"> Present <br>
                                          </td>
                                          <td>
                                            <input type="checkbox" name="VL7" value="Definite"> Present <br>
                                            </td>
                                    </tr>
                                    <tr>
                                        <td><label>Intraretinal Microvascular Abnormalities</label></td>

                                        <td><input type="checkbox" name="IRMA1" value="Definite"> Present <br>
                                         
                                        </td>
                                        <td>
                                          <input type="checkbox" name="IRMA2" value="Definite"> Present <br>
                                         

                                        </td>
                                        <td>
                                           
                                          <input type="checkbox" name="IRMA3" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA3" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA3" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA3" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA3" value="Very Sever"> Very Sever 

                                        </td>
                                        <td>
                                        
                                         <input type="checkbox" name="IRMA4" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA4" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA4" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA4" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA4" value="Very Sever"> Very Sever <br></td>
                                        <td> 
                                         
                                          <input type="checkbox" name="IRMA5" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA5" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA5" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA5" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA5" value="Very Sever"> Very Sever <br></td>

                                        <td>
                                         
                                          <input type="checkbox" name="IRMA6" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA6" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA6" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA6" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA6" value="Very Sever"> Very Sever <br></td>
                                          <td>
                                           
                                            <input type="checkbox" name="IRMA7" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="IRMA7" value="Definite"> Definite <br>
                                          <input type="checkbox" name="IRMA7" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="IRMA7" value="Sever"> Sever <br>
                                          <input type="checkbox" name="IRMA7" value="Very Sever"> Very Sever <br></td>
                                       
                                    </tr>

                                     <tr>
                                         <td><label>Venous Bleeding</label></td>
                                         <td><input type="checkbox" name="VB1" value="Definite"> Present <br>
                                          

                                         </td>
                                        <td>
                                          <input type="checkbox" name="VB2" value="Definite"> Present <br>
                                       

                                        </td>
                                        <td>
                                          
                                          <input type="checkbox" name="VB3" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB3" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB3" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB3" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB3" value="Very Sever"> Very Sever 

                                        </td>
                                        <td> 
                                          
                                          <input type="checkbox" name="VB4" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB4" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB4" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB4" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB4" value="Very Sever"> Very Sever <br></td>
                                        <td>
                                         
                                          <input type="checkbox" name="VB5" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB5" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB5" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB5" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB5" value="Very Sever"> Very Sever <br></td>

                                        <td>
                                           
                                          <input type="checkbox" name="VB6" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB6" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB6" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB6" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB6" value="Very Sever"> Very Sever <br></td>
                                          <td>
                                            
                                            <input type="checkbox" name="VB7" value="Questionable"> Questionable <br>
                                          <input type="checkbox" name="VB7" value="Definite"> Definite <br>
                                          <input type="checkbox" name="VB7" value="Moderate"> Moderate <br>
                                          <input type="checkbox" name="VB7" value="Sever"> Sever <br>
                                          <input type="checkbox" name="VB7" value="Very Sever"> Very Sever <br></td>
                                     </tr>
                                      <tr>
                                          
                                          
                                      </tr>


                                 </tbody>
                                 <thead colspan="4" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" >Field 1</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 2</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 3</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 4</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 5</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 6</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;">Field 7</th>
                                 </thead>

                            </table>
                            <br>
                            <input type="submit" name="submit" class="btn btn-info" value="Submit All Data">
                           
                  </form>
                    </div>
                </div>
            </section><br>

            <section class="view">
              <div class="row">
                <div class="col-sm-4">
             <div class="container-fluid">
                 <table class="table table-bordered table-hover">
                   <thead>
                     <tr>
                       <th>SubjectID</th>
                       <th>Level OD</th>
                       <th>Level OS</th>
                       
                     </tr>
                   </thead>
                   <tbody>
                   
                    
                     




                     
                     <tr>
                        
                      
                      
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
           <!--  <section class="p-t-20">
                <div class="container">
                   
                </div>
            </section> -->
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

<?php 

require 'includes/connection.php';




if(isset($_POST['submit']))

{

// OD
$ImageRecived=htmlentities($_POST['imgrecived']);
$FundusPhotoOD=htmlentities($_POST['fundusphoto_od']);
$ImageReflexOD=htmlentities($_POST['reflex_od']);
$MediaOD=htmlentities($_POST['media_od']);
$OpacityIntereferOD=htmlentities($_POST['opeacity_interefer_od']);
$ConfidenceOD=htmlentities($_POST['confidence_od']);
$CommentsOD=htmlentities($_POST['comments_od']);
$LocationOD=htmlentities($_POST['location_od']);
$MagnificationOD=htmlentities($_POST['maginfication_od']);


$PdrOD=htmlentities($_POST['pdr_od']);
$ActiveRetinalOD=htmlentities($_POST['active_retinal_od']);
$VitreousOD=htmlentities($_POST['vitreous_od']);
$FbFindingOD=htmlentities($_POST['fb_finding_od']);
$CommentsOD1=htmlentities($_POST['comments_od1']);


// OS

$ImageRecived=htmlentities($_POST['imgrecived']);
$FundusPhotoOS=htmlentities($_POST['fundusphoto_os']);
$ImageReflexOS=htmlentities($_POST['reflex_os']);
$MediaOS=htmlentities($_POST['media_os']);
$OpacityIntereferOS=htmlentities($_POST['opeacity_interefer_os']);
$ConfidenceOS=htmlentities($_POST['confidence_os']);
$CommentsOS=htmlentities($_POST['comments_os']);
$LocationOS=htmlentities($_POST['location_os']);
$MagnificationOS=htmlentities($_POST['maginfication_os']);

// Os
$PdrOS=htmlentities($_POST['pdr_os']);
$ActiveRetinalOS=htmlentities($_POST['active_retinal_os']);
$VitreousOS=htmlentities($_POST['vitreous_os']);
$FbFindingOS=htmlentities($_POST['fb_finding_os']);



// Field OD

$MA1OD=htmlentities($_POST['MA1_od']);

$MA2OD=htmlentities($_POST['MA2_od']);

$MA3OD=htmlentities($_POST['MA3_od']);

$MA4OD=htmlentities($_POST['MA4_od']);

$MA5OD=htmlentities($_POST['MA5_od']);

$MA6OD=htmlentities($_POST['MA6_od']);

$MA7OD=htmlentities($_POST['MA7_od']);

$RH1OD=htmlentities($_POST['RH1_od']);
$RH2OD=htmlentities($_POST['RH2_od']);
$RH3OD=htmlentities($_POST['RH3_od']);
$RH4OD=htmlentities($_POST['RH4_od']);
$RH5OD=htmlentities($_POST['RH5_od']);
$RH6OD=htmlentities($_POST['RH6_od']);
$RH7OD=htmlentities($_POST['RH7_od']);



$HE1OD=htmlentities($_POST['HE1_od']);
$HE2OD=htmlentities($_POST['HE2_od']);
$HE3OD=htmlentities($_POST['HE3_od']);
$HE4OD=htmlentities($_POST['HE4_od']);
$HE5OD=htmlentities($_POST['HE5_od']);
$HE6OD=htmlentities($_POST['HE6_od']);
$HE7OD=htmlentities($_POST['HE7_od']);



$SE1OD=htmlentities($_POST['SE1_od']);
$SE2OD=htmlentities($_POST['SE2_od']);
$SE3OD=htmlentities($_POST['SE3_od']);
$SE4OD=htmlentities($_POST['SE4_od']);
$SE5OD=htmlentities($_POST['SE5_od']);
$SE6OD=htmlentities($_POST['SE6_od']);
$SE7OD=htmlentities($_POST['SE7_od']);



$VL1OD=htmlentities($_POST['VL1_od']);
$VL2OD=htmlentities($_POST['VL2_od']);
$VL3OD=htmlentities($_POST['VL3_od']);
$VL4OD=htmlentities($_POST['VL4_od']);
$VL5OD=htmlentities($_POST['VL5_od']);
$VL6OD=htmlentities($_POST['VL6_od']);
$VL7OD=htmlentities($_POST['VL7_od']);



$IRMA1OD=htmlentities($_POST['IRMA1_od']);
$IRMA2OD=htmlentities($_POST['IRMA2_od']);
$IRMA3OD=htmlentities($_POST['IRMA3_od']);
$IRMA4OD=htmlentities($_POST['IRMA4_od']);
$IRMA5OD=htmlentities($_POST['IRMA5_od']);
$IRMA6OD=htmlentities($_POST['IRMA6_od']);
$IRMA7OD=htmlentities($_POST['IRMA7_od']);




$VB1OD=htmlentities($_POST['VB1_od']);
$VB2OD=htmlentities($_POST['VB2_od']);
$VB3OD=htmlentities($_POST['VB3_od']);
$VB4OD=htmlentities($_POST['VB4_od']);
$VB5OD=htmlentities($_POST['VB5_od']);
$VB6OD=htmlentities($_POST['VB6_od']);
$VB7OD=htmlentities($_POST['VB7_od']);



// OS FIELD



$MA1OS=htmlentities($_POST['MA1']);

$MA2OS=htmlentities($_POST['MA2']);

$MA3OS=htmlentities($_POST['MA3']);

$MA4OS=htmlentities($_POST['MA4']);

$MA5OS=htmlentities($_POST['MA5']);

$MA6OS=htmlentities($_POST['MA6']);

$MA7OS=htmlentities($_POST['MA7']);

$RH1OS=htmlentities($_POST['RH1']);
$RH2OS=htmlentities($_POST['RH2']);
$RH3OS=htmlentities($_POST['RH3']);
$RH4OS=htmlentities($_POST['RH4']);
$RH5OS=htmlentities($_POST['RH5']);
$RH6OS=htmlentities($_POST['RH6']);
$RH7OS=htmlentities($_POST['RH7']);



$HE1OS=htmlentities($_POST['HE1']);
$HE2OS=htmlentities($_POST['HE2']);
$HE3OS=htmlentities($_POST['HE3']);
$HE4OS=htmlentities($_POST['HE4']);
$HE5OS=htmlentities($_POST['HE5']);
$HE6OS=htmlentities($_POST['HE6']);
$HE7OS=htmlentities($_POST['HE7']);



$SE1OS=htmlentities($_POST['SE1']);
$SE2OS=htmlentities($_POST['SE2']);
$SE3OS=htmlentities($_POST['SE3']);
$SE4OS=htmlentities($_POST['SE4']);
$SE5OS=htmlentities($_POST['SE5']);
$SE6OS=htmlentities($_POST['SE6']);
$SE7OS=htmlentities($_POST['SE7']);



$VL1OS=htmlentities($_POST['VL1']);
$VL2OS=htmlentities($_POST['VL2']);
$VL3OS=htmlentities($_POST['VL3']);
$VL4OS=htmlentities($_POST['VL4']);
$VL5OS=htmlentities($_POST['VL5']);
$VL6OS=htmlentities($_POST['VL6']);
$VL7OS=htmlentities($_POST['VL7']);

$IRMA1OS=htmlentities($_POST['IRMA1']);
$IRMA2OS=htmlentities($_POST['IRMA2']);
$IRMA3OS=htmlentities($_POST['IRMA3']);
$IRMA4OS=htmlentities($_POST['IRMA4']);
$IRMA5OS=htmlentities($_POST['IRMA5']);
$IRMA6OS=htmlentities($_POST['IRMA6']);
$IRMA7OS=htmlentities($_POST['IRMA7']);




$VB1OS=htmlentities($_POST['VB1']);
$VB2OS=htmlentities($_POST['VB2']);
$VB3OS=htmlentities($_POST['VB3']);
$VB4OS=htmlentities($_POST['VB4']);
$VB5OS=htmlentities($_POST['VB5']);
$VB6OS=htmlentities($_POST['VB6']);
$VB7OS=htmlentities($_POST['VB7']);
$SubjectID=$_POST['sub'];
$UserId=$_POST['userid'];
$VisitName=$_POST['visitname'];





   $Sql="INSERT INTO grading1_fp (subject_id,user_id,visit_name,images_received_od,fundus_photos_od,reflex_image_od,media_opacities_od, opacity_interferes_with_view_od,confidence_score_on_fp_od,comments_od,location_od,magnification_od,fundus_photos_os,reflex_image_os,media_opacities_os,opacity_interferes_with_view_os,confidence_score_on_fp_os,comments_os,location_os,magnification_os,pdr_od,active_retinal_neovascularization_od,vitreous_hemorrhage_od,fp_findings_od,pdr_os,active_retinal_neovascularization_os,vitreous_hemorrhage_os,fp_findings_os,comments,F1_MA_OD,F1_HE_OD,F1_SE_OD,F1_VL_OD,F1_RH_OD,F1_VB_OD,F1_IRMA_OD,F2_MA_OD,F2_HE_OD,F2_SE_OD,F2_VL_OD,F2_RH_OD,F2_VB_OD,F2_IRMA_OD,F3_MA_OD,F3_HE_OD,F3_SE_OD,F3_VL_OD,F3_RH_OD,F3_VB_OD,F3_IRMA_OD,F4_MA_OD,F4_HE_OD,F4_SE_OD,F4_VL_OD,F4_RH_OD,F4_VB_OD,F4_IRMA_OD,F5_MA_OD,F5_HE_OD,F5_SE_OD,F5_VL_OD,F5_RH_OD,F5_VB_OD,F5_IRMA_OD,F6_MA_OD,F6_HE_OD,F6_SE_OD,F6_VL_OD,F6_RH_OD,F6_VB_OD,F6_IRMA_OD,F7_MA_OD,F7_HE_OD,F7_SE_OD,F7_VL_OD,F7_RH_OD,F7_VB_OD,F7_IRMA_OD,F1_MA_OS,F1_HE_OS,F1_SE_OS,F1_VL_OS,F1_RH_OS,F1_VB_OS,F1_IRMA_OS,F2_MA_OS,F2_HE_OS,F2_SE_OS,F2_VL_OS,F2_RH_OS,F2_VB_OS,F2_IRMA_OS,F3_MA_OS,F3_HE_OS,F3_SE_OS,F3_VL_OS,F3_RH_OS,F3_VB_OS,F3_IRMA_OS,F4_MA_OS,F4_HE_OS,F4_SE_OS,F4_VL_OS,F4_RH_OS,F4_VB_OS,F4_IRMA_OS,F5_MA_OS,F5_HE_OS,F5_SE_OS,F5_VL_OS,F5_RH_OS,F5_VB_OS,F5_IRMA_OS,F6_MA_OS,F6_HE_OS,F6_SE_OS,F6_VL_OS,F6_RH_OS,F6_VB_OS,F6_IRMA_OS,F7_MA_OS,F7_HE_OS,F7_SE_OS,F7_VL_OS,F7_RH_OS,F7_VB_OS,F7_IRMA_OS
) VALUES('$SubjectID','$UserId','$VisitName','$ImageRecived','$FundusPhotoOD','$ImageReflexOD','$MediaOD','$OpacityIntereferOD','$ConfidenceOD','$CommentsOD','$LocationOD','$MagnificationOD','$FundusPhotoOS','$ImageReflexOS','$MediaOS','$OpacityIntereferOS','$ConfidenceOS','$CommentsOS','$LocationOS','$MagnificationOS','$PdrOD','$ActiveRetinalOD','$VitreousOD','$FbFindingOD','$PdrOS','$ActiveRetinalOS','$VitreousOS','$FbFindingOS','$CommentsOD1','$MA1OD','$HE1OD','$SE1OD','$VL1OD','$RH1OD','$VB1OD','$IRMA1OD','$MA2OD','$HE2OD','$SE2OD','$VL2OD','$RH2OD','$VB2OD','$IRMA2OD','$MA3OD','$HE3OD','$SE3OD','$VL3OD','$RH3OD','$VB3OD','$IRMA3OD','$MA4OD','$HE4OD','$SE4OD','$VA4OD','$RH4OD','$VB4OD','$IRMA4OD','$MA5OD','$HE5OD','$SE5OD','$VA5OD','$RH5OD','$VB5OD','$IRMA5OD','$MA6OD','$HE6OD','$SE6OD','$VA6OD','$RH6OD','$VB6OD','$IRMA6OD','$MA7OD','$HE7OD','$SE7OD','$VA7OD','$RH7OD','$VB7OD','$IRMA7OD','$MA1OS','$HE1OS','$SE1OS','$VL1OS','$RH1OS','$VB1OS','$IRMA1OS','$MA2OS','$HE2OS','$SE2OS','$VL2OS','$RH2OS','$VB2OS','$IRMA2OS','$MA3OS','$HE3OS','$SE3OS','$VL3OS','$RH3OS','$VB3OS','$IRMA3OS','$MA4OS','$HE4OS','$SE4OS','$VA4OS','$RH4OS','$VB4OS','$IRMA4OS','$MA5OS','$HE5OS','$SE5OS','$VA5OS','$RH5OS','$VB5OS','$IRMA5OS','$MA6OS','$HE6OS','$SE6OS','$VA6OS','$RH6OS','$VB6OS','$IRMA6OS','$MA7OS','$HE7OS','$SE7OS','$VA7OS','$RH7OS','$VB7OS','$IRMA7OS'
)";

 $run =mysqli_query($con,$Sql);



  $Sql="INSERT INTO assign_subject (subject_id,user_id,visit_name) VALUES('$SubjectID','$UserId','$VisitName')";

 $run =mysqli_query($con,$Sql);





if($run)

{
    echo "<script>alert('Successfully inserted')</script>";
   
}

else
 {
  echo "Failed";
}




}














 ?>


