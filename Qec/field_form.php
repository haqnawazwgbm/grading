<?php
// Turn off error reporting

session_start();
     
     if($_SESSION['loged']!=true)
     {
          header('Location:../index.php?Msg');
      // echo "<script>alert('please Login First')</script>";
      // echo "<script>window.open('../index.php', '_self')</script>";
     }    
      

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

   $q="SELECT * FROM user where type='QEC'";
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
      border: 1px solid #17a3c3 !important;
  }
 select
 {
  border: 1px solid #17a3c3 !important;
 }

td{
  color:black;
}
label{
  font-weight: 400 !important;
}

input[type=textarea]:disabled {
   background-color: red;
}

</style>


<!doctype html>
<html lang="en">
<head>
    <title>CFP</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Include SmartWizard CSS -->
    <link href="../dist/css/smart_wizard.css" rel="stylesheet" type="text/css" />

    <!-- Optional SmartWizard theme -->
    <link href=".dist/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/smart_wizard_theme_arrows.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/smart_wizard_theme_dots.css" rel="stylesheet" type="text/css" />
</head>
<?php require '../includes/topheader.php' ?>
<?php require '../includes/desktopheader.php' ?>
<body>
  <div style="display: none" step="0" id="step-tab"></div>
    <div class="container" style="border: 1px solid">
<form action="field_form.php" id="form-wizard" method="post" data-toggle="validator" accept-charset="utf-8" role="form">
        <!-- SmartWizard html -->
        <div id="smartwizard" >
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Subject Details</small></a></li>
                
                <li><a href="#step-4">Step 4<br /><small>Submit Form</small></a></li>
            </ul>
          
            <div>
                <div id="step-1" class="" >
                  <div id="form-step-0" role="form" data-toggle="validator">
                    <h4 class="text-info text-center" style="margin-left: 15%" >Color Fundus Photography  Quality  Control</h4>
                    
                    <div class="form-group">

                              <label  class="text-info">Subject ID:</label>
                              <select name="sub" class="form-control" style="width: 10%" required>
                               
                              
                                 <?php 
                               $iD=$_GET['ID'];
                               $select="SELECT * FROM user_id_subject_qec_fp";
                               $run=mysqli_query($con,$select);

                               while ($row=mysqli_fetch_array($run)) {
                                
                               

                           ?>
                           <option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_id'] ?></option>

                         <?php } ?>
                         

                              </select>
                              
                            </div>
                        
 
                            <div class="form-group " >
                              <label class="text-info">Visit Name:</label>
                              <select name="visitname" class="form-control" style="width: 20%;" required>

                                
                                 <?php 
                              mysqli_data_seek($run,0);

                               while ($row=mysqli_fetch_array($run)) {
                                 # code...
                               

                           ?>
                           <option value="<?php echo $row['visit_name'] ?>"><?php echo $row['visit_name'] ?></option>

                         <?php } ?>
                               
                              </select>
                           
                            </div>
                         

                            <?php 
                              $select="SELECT user_id FROM user where type='QEC'";
                               $run=mysqli_query($con,$select);

                              $row=mysqli_fetch_array($run);
                                 # code...
                               

                           ?>

                           <input type="hidden" name="userid" value="<?php echo $row['user_id'];?>">
                           <div class="form-group">
                             <label for="" class="text-info">Visit Date</label>
                             <input type="date" name="visitDate" class="form-control" style="width: 20%"; required>
                             
                           </div>
                           <div class="form-group">
                             <label for="" class="text-info">Study Site</label>
                           
                             <input type="text" name="studysite" required id="studysite" class="form-control" style="width:20%;">
                            
                           </div>
                           <table class="table-bordered">
                              <thead>
                                 

                                    <th colspan="3" style="padding: 10px; background-color: #008398;
                                      color: #fff;">Images Recived</th>
                              </thead>
                               
                              <tbody>
                                  <tr style="padding: 10px">
                                      <td> 

                                        <div class="form-group"><span>OD </span>  <input type="checkbox" name="imgrecived" value="OD"  id="myCheck" onChange="myFunction()"  class="RH3">
                                           <!-- <div class="help-block with-errors text-danger"></div> -->

                                        </div>
                                      </td>
                                      <td>
                                       <div class="form-group"><span>OS </span> <input type="checkbox" name="imgrecived" value="OS"  id="myCheck1" onchange="myFunction1()" class="RH3"  >
                                         <div class="help-block with-errors text-danger"></div>
                                      </div>
                                      </td>
                                      <td> <div class="form-group"><span>OU </span><input type="checkbox" name="imgrecived" value="OU"  class="RH3" id="myCheck2" onchange="myFunction2();">
                                        <!--  <div class="help-block with-errors text-danger"></div> -->
                                        </div>
                                      </td>
                                       <td><div class="form-group"> <span>Not </span><input class="RH3"  type="checkbox" name="image_recived_oct" id="myCheck3" onchange="myFunction3()" value="not">
                                      </div></td>


                                  </tr>
                              </tbody>

                                
                            </table><br>
                             <br>

                             <!--  -->
                            
                      <table class="table-bordered" style="font-size: 12px; margin-top: -41em; margin-left: 42em;">
                                 
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
                                          

                                          <input type="radio" name="fundusphoto_od"  value="Yes" class="child2"  >   YES
                                        
                                       
                                       
                                          <input type="radio" name="fundusphoto_od" value="No" class="child2" >   No
                                          
                                          
                                          </div>

                                         </td>
                                         <td>
                                         <input type="radio" name="fundusphoto_os"  value="Yes" class="child1 "  >   YES
                                          <input type="radio" name="fundusphoto_os" value="No" class="child1 " >   No

                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>Was fundus reflex image obtained?</label></td> 
                                        <td>
                                          <input type="radio" name="reflex_od" value="Yes"class="child2"  > YES
                                            <input type="radio" name="reflex_od" value="No"class="child2" > No

                                          </td>

                                          <td>
                                          <input type="radio" name="reflex_os" value="Yes"  class="child1 child3"> YES
                                            <input type="radio" name="reflex_os" value="No" class="child1 child3"> No

                                          </td>
                                          

                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label> Any media opacities that obscure the view of the retina?</label></td>
                                       <td>
                                          <input type="radio" name="media_od" value="Yes"class="child2" >  YES
                                          <input type="radio" name="media_od" value="No"class="child2" >  No

                                         </td>
                                          <td>
                                          <input type="radio" name="media_os" value="Yes" class="child1"> YES
                                          <input type="radio" name="media_os" value="No" class="child1">  No

                                         </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>If the answer to the previous question is yes, <br>please specify the level the opacity  interferes with view:</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="opeacity_interefer_od" value="Negligible"class="child2" >  Negligible <br>
                                          <input type="radio" name="opeacity_interefer_od" value="Minimal"class="child2" >  Minimal <br>
                                          <input type="radio" name="opeacity_interefer_od" value="Moderate"class="child2" >  Moderate <br>
                                          <input type="radio" name="opeacity_interefer_od" value="Significant"class="child2" >  Significant <br>

                                         </td>
                                          <td>
                                           <input type="radio" name="opeacity_interefer_os" value="Negligible" class="child1">  Negligible <br>
                                          <input type="radio" name="opeacity_interefer_os" value="Minimal"    class="child1">  Minimal <br>
                                          <input type="radio" name="opeacity_interefer_os" value="Moderate"    class="child1">  Moderate <br>
                                          <input type="radio" name="opeacity_interefer_os" value="Significant"  class="child1">  Significant <br>

                                         </td>
                                    </tr>
                                     <td>
                                          <label>Confidence score on FP?</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="confidence_od" value="Gradable"class="child2" > Gradable <br>
                                          <input type="radio" name="confidence_od" value="Partially Gradable" class="child2" > Partially Gradable <br>
                                          <input type="radio" name="confidence_od" value="Ungradable" class="child2" > Ungradable <br>
                                        

                                         </td>
                                          <td>
                                         <input type="radio" name="confidence_os" value="Gradable" class="child1"> Gradable <br>
                                          <input type="radio" name="confidence_os" value="Partially Gradable" class="child1"> Partially Gradable <br>
                                          <input type="radio" name="confidence_os" value="Ungradable" class="child1"> Ungradable <br>
                               

                                         </td>
                                    </tr>
                                    <tr>
                                        <td><label>Comments:</label></td>
                                        <td>
                                            <textarea name="comments_od" class="child2" ></textarea>
                                        </td>


                                        <td>
                                            <textarea name="comments_os" class="child1"></textarea>
                                        </td>
                                    </tr>

                                     <tr>
                                         <td>Location</td>
                                         <td>
                                          <input type="radio" name="location_od" value="4 Field"class="child2" > 4 Field <br>
                                          <input type="radio" name="location_od" value=" 7 Field"class="child2" > 7 Field

                                         </td>
                                         <td>
                                          <input type="radio" name="location_os" value="4 Field" class="child1"> 4 Field <br>
                                          <input type="radio" name="location_os" value=" 7 Field" class="child1"> 7 Field
                                         </td>
                                     </tr>
                                      <tr>
                                          <td>Magnification</td>
                                          <td><input type="radio" name="maginfication_od" value="50" class="child2" > 50<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_od" value="60" class="child2" > 60<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_od" value="30" class="child2" > 30<sup>o</sup>/35<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_od" value="45" class="child2" > 45<sup>o</sup> <br>

                                          </td>
                                          <td><input type="radio" name="maginfication_os" value="50" class="child1"> 50<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_os" value="60" class="child1"> 60<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_os" value="30" class="child1"> 30<sup>o</sup>/35<sup>o</sup> <br>
                                              <input type="radio" name="maginfication_os" value="45" class="child1"> 45<sup>o</sup> <br>

                                          </td>
                                          
                                          
                                      </tr>
                                 </tbody>
                                 
                               
                            </table>
                  </div>
                </div>
               <!--  <div id="step-2" class="">
                  <div id="form-step-1" role="form" data-toggle="validator">


                   <br><br>
                     <div class="container-fluid">
                       <div class="row">
                         <div class="col-sm-8">
                           <table class="table-bordered" style="font-size: 10px; ">
                                 <h4 class="text-info text-center" >Diabetic Retinopathy (DR) Grading Severity Scale– OD</h4>
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
                                          
                                          <input type="checkbox" name="RH3_od" value="Questionable" class="RH3"> Questionable <br>
                                          <input type="checkbox" name="RH3_od" value="Definite" class="RH3"> Definite <br>
                                          <input type="checkbox" name="RH3_od" value="Moderate" class="RH3"> Moderate <br>
                                          <input type="checkbox" name="RH3_od" value="Sever"class="RH3" > Sever <br>
                                          <input type="checkbox" name="RH3_od" value="Very Sever" class="RH3"> Very Sever 

                                        </td>

                                        <td> 
                                         
                                          <input type="checkbox" name="RH4_od" value="Questionable"  class="RH4"> Questionable <br>
                                          <input type="checkbox" name="RH4_od" value="Definite"  class="RH4"> Definite <br>
                                          <input type="checkbox" name="RH4_od" value="Moderate"  class="RH4"> Moderate <br>
                                          <input type="checkbox" name="RH4_od" value="Sever"  class="RH4"> Sever <br>
                                          <input type="checkbox" name="RH4_od" value="Very Sever"  class="RH4"> Very Sever <br></td>
                                        <td> 
                                        
                                          <input type="checkbox" name="RH5_od" value="Questionable"  class="RH5"> Questionable <br>
                                          <input type="checkbox" name="RH5_od" value="Definite" class="RH5"> Definite <br>
                                          <input type="checkbox" name="RH5_od" value="Moderate" class="RH5"> Moderate <br>
                                          <input type="checkbox" name="RH5_od" value="Sever" class="RH5"> Sever <br>
                                          <input type="checkbox" name="RH5_od" value="Very Sever" class="RH5"> Very Sever <br></td>

                                        <td>
                                        
                                          <input type="checkbox" name="RH6_od" value="Questionable"  class="RH6"> Questionable <br>
                                          <input type="checkbox" name="RH6_od" value="Definite" class="RH6"> Definite <br>
                                          <input type="checkbox" name="RH6_od" value="Moderate" class="RH6"> Moderate <br>
                                          <input type="checkbox" name="RH6_od" value="Sever" class="RH6"> Sever <br>
                                          <input type="checkbox" name="RH6_od" value="Very Sever" class="RH6"> Very Sever <br></td>
                                          <td>
                                           
                                            <input type="checkbox" name="RH7_od" value="Questionable" class="RH7"> Questionable <br>
                                          <input type="checkbox" name="RH7_od" value="Definite" class="RH7"> Definite <br>
                                          <input type="checkbox" name="RH7_od" value="Moderate" class="RH7"> Moderate <br>
                                          <input type="checkbox" name="RH7_od" value="Sever" class="RH7"> Sever <br>
                                          <input type="checkbox" name="RH7_od" value="Very Sever" class="RH7"> Very Sever <br></td>
                                         
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
                                          <input type="checkbox" name="IRMA3_od" value="Questionable" class="RH3"> Questionable <br>
                                          <input type="checkbox" name="IRMA3_od" value="Definite" class="RH3"> Definite <br>
                                          <input type="checkbox" name="IRMA3_od" value="Moderate" class="RH3"> Moderate <br>
                                          <input type="checkbox" name="IRMA3_od" value="Sever" class="RH3"> Sever <br>
                                          <input type="checkbox" name="IRMA3_od" value="Very Sever" class="RH3"> Very Sever 

                                        </td>
                                        <td>
                                         
                                         <input type="checkbox" name="IRMA4_od" value="Questionable" class="RH4"> Questionable <br>
                                          <input type="checkbox" name="IRMA4_od" value="Definite" class="RH4"> Definite <br>
                                          <input type="checkbox" name="IRMA4_od" value="Moderate" class="RH4"> Moderate <br>
                                          <input type="checkbox" name="IRMA4_od" value="Sever" class="RH4"> Sever <br>
                                          <input type="checkbox" name="IRMA4_od" value="Very Sever" class="RH4"> Very Sever <br></td>
                                        <td> 
                                          
                                          <input type="checkbox" name="IRMA5_od" value="Questionable" class="RH5"> Questionable <br>
                                          <input type="checkbox" name="IRMA5_od" value="Definite" class="RH5"> Definite <br>
                                          <input type="checkbox" name="IRMA5_od" value="Moderate" class="RH5"> Moderate <br>
                                          <input type="checkbox" name="IRMA5_od" value="Sever" class="RH5"> Sever <br>
                                          <input type="checkbox" name="IRMA5_od" value="Very Sever" class="RH5"> Very Sever <br></td>

                                        <td>
                                          
                                          <input type="checkbox" name="IRMA6_od" value="Questionable" class="RH6"> Questionable <br>
                                          <input type="checkbox" name="IRMA6_od" value="Definite" class="RH6"> Definite <br>
                                          <input type="checkbox" name="IRMA6_od" value="Moderate" class="RH6"> Moderate <br>
                                          <input type="checkbox" name="IRMA6_od" value="Sever" class="RH6"> Sever <br>
                                          <input type="checkbox" name="IRMA6_od" value="Very Sever" class="RH6"> Very Sever <br></td>
                                          <td>
                                            
                                            <input type="checkbox" name="IRMA7_od" value="Questionable" class="RH7"> Questionable <br>
                                          <input type="checkbox" name="IRMA7_od" value="Definite" class="RH7"> Definite <br>
                                          <input type="checkbox" name="IRMA7_od" value="Moderate" class="RH7"> Moderate <br>
                                          <input type="checkbox" name="IRMA7_od" value="Sever" class="RH7"> Sever <br>
                                          <input type="checkbox" name="IRMA7_od" value="Very Sever" class="RH7"> Very Sever <br></td>
                                       
                                    </tr>

                                     <tr>
                                         <td><label>Venous Bleeding</label></td>
                                         <td><input type="checkbox" name="VB1_od" value="Definite"> Present <br>
                                          

                                         </td>
                                        <td>
                                          <input type="checkbox" name="VB2_od" value="Definite"> Present <br>
                                       

                                        </td>
                                        <td>
                                          
                                          <input type="checkbox" name="VB3_od" value="Questionable" class="RH3"> Questionable <br>
                                          <input type="checkbox" name="VB3_od" value="Definite" class="RH3"> Definite <br>
                                          <input type="checkbox" name="VB3_od" value="Moderate" class="RH3"> Moderate <br>
                                          <input type="checkbox" name="VB3_od" value="Sever" class="RH3"> Sever <br>
                                          <input type="checkbox" name="VB3_od" value="Very Sever" class="RH3"> Very Sever 

                                        </td>
                                        <td> 
                                           
                                          <input type="checkbox" name="VB4_od" value="Questionable" class="RH4"> Questionable <br>
                                          <input type="checkbox" name="VB4_od" value="Definite" class="RH4"> Definite <br>
                                          <input type="checkbox" name="VB4_od" value="Moderate" class="RH4"> Moderate <br>
                                          <input type="checkbox" name="VB4_od" value="Sever" class="RH4"> Sever <br>
                                          <input type="checkbox" name="VB4_od" value="Very Sever" class="RH4"> Very Sever <br></td>
                                        <td>
                                         
                                          <input type="checkbox" name="VB5_od" value="Questionable" class="RH5"> Questionable <br>
                                          <input type="checkbox" name="VB5_od" value="Definite" class="RH5"> Definite <br>
                                          <input type="checkbox" name="VB5_od" value="Moderate" class="RH5"> Moderate <br>
                                          <input type="checkbox" name="VB5_od" value="Sever" class="RH5"> Sever <br>
                                          <input type="checkbox" name="VB5_od" value="Very Sever" class="RH5"> Very Sever <br></td>

                                        <td>
                                          
                                          <input type="checkbox" name="VB6_od" value="Questionable" class="RH6"> Questionable <br>
                                          <input type="checkbox" name="VB6_od" value="Definite" class="RH6"> Definite <br>
                                          <input type="checkbox" name="VB6_od" value="Moderate" class="RH6"> Moderate <br>
                                          <input type="checkbox" name="VB6_od" value="Sever" class="RH6"> Sever <br>
                                          <input type="checkbox" name="VB6_od" value="Very Sever" class="RH6"> Very Sever <br></td>
                                          <td>
                                            
                                            <input type="checkbox" name="VB7_od" value="Questionable" class="RH7"> Questionable <br>
                                          <input type="checkbox" name="VB7_od" value="Definite" class="RH7"> Definite <br>
                                          <input type="checkbox" name="VB7_od" value="Moderate" class="RH7"> Moderate <br>
                                          <input type="checkbox" name="VB7_od" value="Sever" class="RH7"> Sever <br>
                                          <input type="checkbox" name="VB7_od" value="Very Sever" class="RH7"> Very Sever <br></td>
                                     </tr>
                                      <tr>
                                          <td><label>NPDR LEVEL OD</label></td>
                                          <td colspan="5"><select class="form-control" name="levelod">
                                            <option value="">Select NPDR</option>

                                          <option value="NPDR Level 10 ">
                                            NPDR Level 10 
                                          </option>
                                           <option value="NPDR Level 14*">
                                            NPDR Level 14*
                                          </option>
                                           <option value="NPDR Level 15*">
                                            NPDR Level 15*
                                          </option>
                                           <option value="NPDR Level 20">
                                         NPDR Level 20
                                          </option>
                                           <option value="NPDR Level 35**">
                                            NPDR Level 35**
                                          </option>
                                           <option value=" NPDR Level 43">
                                            NPDR Level 43
                                          </option>
                                          <option value="NPDR Level 47"> 
                                          NPDR Level 47
                                          </option>
                                          <option value=" NPDR Level 53">
                                          NPDR Level 53
                                          </option>
                                          <option value="NPDR Level ≥ 60">
                                          PDR Level ≥ 60
                                          </option>
                                        </select>
                                      </td>
                                          
                                      </tr>


                                 </tbody>
                                 

                    </table>

                         </div>

                         <div class="col-sm-4">
                            <table class="table table-bordered table-hover" style="font-size:10px; color:black; ">
                      <h5 class="text-info text-danger text-center" ">DRSS Grading Key</h5>
                       <thead>
                        
                       </thead>
                       <tbody>
                         <tr>
                           <td><b>NPDR Level 10</b> </td>
                            <td>DR Absent</td>
                             <td>MA and other characteristics absent</td>
                         </tr>

                         <tr>
                           <td><b>NPDR Level 14* </b> </td>
                            <td>DR Questionable</td>
                             <td><b>One or more of:</b>
                              HE definite; MA absent <br>
                              IRMA definite; MA absent <br>
                              Venous loops >D/1; MA absent 
                              </td>
                         </tr>

                         <tr>
                           <td><b>NPDR Level 15* </b> </td>
                            <td>DR Questionable</td>
                            <td>Hemorrhage Definite <br>
                              MAs Absent
                               
                            </td>
                            
                            <tr>
                              <td><b>NPDR Level 20 </b></td>
                              <td>MAs Only</td>
                              <td>Microaneurysms definite, other characteristics absent</td>
                            </tr>
                            <tr>
                            <td><b>NPDR Level 35** </b></td>
                            <td>Mild NPDR</td>
                            <td><b>One or more of:</b><br>
                                Venous loops definite ≥1 <br>
                                SE, IRMA or VB = Questionable <br>
                                RH = present (< STD 1) <br>
                                HE Definite ≥ 1 (STD 3, 4 and 5 in any field) <br>
                                SE Definite ≥ 1 (STD 8A and 5)



                            </td>
                          </tr>

                          <tr>
                            <td><b>NPDR Level 43</b></td>
                          <td>Moderate NPDR</td>
                          <td>
                             H/Ma = Moderate in 4-5 fields (≥ STD 1 and < STD 2A) <br>
                             H/Ma = Severe = 1 Field (≥ STD 2A)<br>
                              <b style="margin-left: 50%;">or</b><hr>
                              IRMA = Definite in 1-3 fields (< STD 8A)

                          </td>
                        </tr>

                         <tr>
                          <td><b>NPDR Level 47</b></td>
                         <td>Moderately Severe NPDR</td>
                         <td>Both Level 43 characteristics <br>
                           <b> and/or one of</b><br>
                            1.IRMA=Definite in 4-5 fields (< STD 8A)
                            or <br>
                            2. H/Ma=Severe in 2-3 fields (≥ STD 2A and < STD 2B)
                            or <br>
                            3.VB=Definite in 1 field
                             </td>
                       </tr>

                       <tr>
                        <td><b>NPDR Level 53 </b></td>
                        <td>Severe NPDR</td>
                        <td><b>One or More of the following</b><br>
                            ≥2 of 3 L47 Characteristics <br>
                            H/Ma=Severe ≥ 4+ fields (≥ STD 2A and STD <2B) <br>
                            H/Ma= Very Severe in 1 field (≥ STD 2B)  <br>
                            IRMA ≥ Moderate in 1 field (≥ STD 8A/8B)  <br>
                            VB ≥ Definite in 2+ fields (< STD 6) <br>
                            VB ≥ Moderate or greater in 1 field (≥ 6A/6B)

                        </td>
                       </tr>
                       <tr>
                        <td><b>PDR Level ≥ 60</b></td>
                       <td>PDR</td>
                       <td>Neovascularization/PDR in any field <br>
                        <b>and/or</b> <br>
                        Pan retinal photocoagulation
                        </td>
                      </tr>        
                            
                      <tr>
                        <td colspan="5" style="font-size: 13px;font-family:Calibri;">DR = diabetic retinopathy, HE = hard exudates, SE = soft exudates, IRMA = intraretinal microvascular abnormalities, NPDR = non-proliferative DR, VB = venous beading, H/Ma = hemorrhages/microaneurysms, PDR = proliferative DR, NVE = new vessels elsewhere (> 1 DO from disc), NVD = new vessels disc (within 1 DO of disc margin), FPD = fibrous proliferations disc, FPE = fibrous proliferations elsewhere, VH = vitreous hemorrhage, PRH = preretinal hemorrhage. 
                      * Levels 14 and 15 are not considered separate steps in the scale, but are pooled with level 10 or 20.
                      ** NPDR levels 35 and above all require presence of microaneurysms.
                      </td></tr>
                            

                      </tbody>
                     </table>
                         </div>

                       </div>
                     </div>
                  </div>
                </div> -->
              
                <div id="step-4" class="">
                      <h2>Submit Form</h2>
                        <input type="submit" name="submit" class="btn btn-info submit" value="Submit form">
                </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>


    </div>

    <!-- Include jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include SmartWizard JavaScript source -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="dist/js/jquery.smartWizard.min.js"></script>
    <script type="text/javascript" src="../js/field_form.js"></script>
    <script type="text/javascript" src="../js/disabled_checkbox.js"></script>

</body>
</html>

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

$SubjectID=htmlentities($_POST['sub']);
$VisitName=htmlentities($_POST['visitname']);
$UserId=htmlentities($_POST['userid']);
$VisitDate=htmlentities($_POST['visitDate']);
$StudySite=htmlentities($_POST['studysite']);


// $PdrOD=htmlentities($_POST['pdr_od']);
// $ActiveRetinalOD=htmlentities($_POST['active_retinal_od']);
// $VitreousOD=htmlentities($_POST['vitreous_od']);
// $FbFindingOD=htmlentities($_POST['fb_finding_od']);
// $CommentsOD1=htmlentities($_POST['comments_od1']);


// OS




 $Sql="INSERT INTO qec_fp (subject_id,user_id,visit_name,Date_visit,study_site,images_received_od,fundus_photos_od,reflex_image_od,media_opacities_od, opacity_interferes_with_view_od,confidence_score_on_fp_od,comments_od,location_od,magnification_od,fundus_photos_os,reflex_image_os,media_opacities_os,opacity_interferes_with_view_os,confidence_score_on_fp_os,comments_os,location_os,magnification_os)
 VALUES('$SubjectID','$UserId','$VisitName','$VisitDate','$StudySite','$ImageRecived','$FundusPhotoOD','$ImageReflexOD','$MediaOD','$OpacityIntereferOD','$ConfidenceOD','$CommentsOD','$LocationOD','$MagnificationOD','$FundusPhotoOS','$ImageReflexOS','$MediaOS','$OpacityIntereferOS','$ConfidenceOS','$CommentsOS','$LocationOS','$MagnificationOS'
)";

 $run=mysqli_query($con,$Sql);


  







if($run)

{
    echo "<script>alert('Successfully inserted')</script>";
     echo "<script>window.open('list_cfp.php?tab=cfp','_self')</script>";
   
}

else
 {
   echo "<script>alert('Insertion is failed')</script>";
}




}














 ?>

