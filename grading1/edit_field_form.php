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
   require '../includes/connection.php';

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
<?php 
  if (isset($_GET)) {
     $id = $_GET['ID'];
     $query = "SELECT * FROM user_id_subject_g1 INNER JOIN qec_fp ON user_id_subject_g1.subject_id = qec_fp.subject_id WHERE user_id_subject_g1.subject_id='$id'";
     $result = mysqli_query($con,$query);
     $qec_fp = mysqli_fetch_array($result);
  } 

?>
<body>
  <div style="display: none" step="0" id="step-tab"></div>
    <div class="container" style="border: 1px solid">
<form action="field_form.php" id="form-wizard" method="post" data-toggle="validator" accept-charset="utf-8" role="form">
        <!-- SmartWizard html -->
        <div id="smartwizard" >
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Subject Details</small></a></li>
                <li id="od-tab"><a href="#step-2"
                  >Step 2<br /><small>DRSS– OD</small></a></li>
                <li id="os-tab"><a href="#step-3">Step 3 <br /><small>DRSS-OS</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Submit Form</small></a></li>
            </ul>
          
            <div>
                  <div id="step-1" class="" >
                  <div id="form-step-0" role="form" data-toggle="validator">
                    <h4 class="text-info text-center" style="margin-left: 15%" >Color Fundus Photography  Quality  Control</h4>
                    
                    <div class="form-group">

                              <label  class="text-info">Subject ID:</label>
                              <select name="sub" class="form-control" style="width: 10%" required>
                               

                           <option value="<?= $qec_fp['subject_id']; ?>"><?php echo $qec_fp['subject_id'] ?></option>

                         

                              </select>
                              
                            </div>
                        
 
                            <div class="form-group " >
                              <label class="text-info">Visit Name:</label>
                              <select name="visitname" class="form-control" style="width: 20%;" required>

                          
                           <option value="<?php echo $qec_fp['visit_name'] ?>"><?php echo $qec_fp['visit_name'] ?></option>

                               
                              </select>
                           
                            </div>
                         


                           <input type="hidden" name="userid" value="<?php echo $row['user_id'];?>">
                           <div class="form-group">
                             <label for="" class="text-info">Visit Date</label>
                             <input type="date" name="visitDate" value="<?= date('Y-m-d', strtotime($qec_fp['Date_visit'])); ?>" class="form-control" style="width: 20%"; required>
                             
                           </div>
                           <div class="form-group">
                             <label for="" class="text-info">Study Site</label>
                             <input type="text" name="studysite" value="<?= $qec_fp['study_site']; ?>" required id="studysite" class="form-control" style="width:20%;">
                            
                           </div>
                           <table class="table-bordered">
                              <thead>
                                 

                                    <th colspan="3" style="padding: 10px; background-color: #008398;
                                      color: #fff;">Images Recived</th>
                              </thead>
                               
                              <tbody>
                               <tr >
                                      <td> <span>OD </span>  <input type="checkbox" <?= $qec_fp['images_received_od'] == 'OD' ? 'checked' : ''; ?> name="image_recived_oct" class="RH3" value="OD" id="myCheck" onchange="myFunction()">
                                      </td>
                                      <td> <span>OS </span> <input type="checkbox" <?= $qec_fp['images_received_od'] == 'OS' ? 'checked' : ''; ?> name="image_recived_oct" class="RH3" value="OS" id="myCheck1" onchange="myFunction1()">
                                      </td>
                                      <td> <span>OU </span><input class="RH3" <?= $qec_fp['images_received_od'] == 'OU' ? 'checked' : ''; ?> type="checkbox" name="image_recived_oct" id="myCheck2" onchange="myFunction2()" value="OU">
                                      </td>
                                      <td> <span>Not </span><input class="RH3" <?= $qec_fp['images_received_od'] == 'not' ? 'checked' : ''; ?> type="checkbox" name="image_recived_oct" id="myCheck3" onchange="myFunction3()" value="not">
                                      </td>

                                      
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
                                          

                                          <input type="radio" <?= $qec_fp['fundus_photos_od'] == 'Yes' ? 'checked' : ''; ?> name="fundusphoto_od"  value="Yes" class="child2"  >   YES
                                        
                                       
                                       
                                          <input type="radio" <?= $qec_fp['fundus_photos_od'] == 'No' ? 'checked' : ''; ?> name="fundusphoto_od" value="No" class="child2" >   No
                                          
                                          
                                          </div>

                                         </td>
                                         <td>
                                         <input type="radio" <?= $qec_fp['fundus_photos_os'] == 'Yes' ? 'checked' : ''; ?> name="fundusphoto_os"  value="Yes" class="child1 "  >   YES
                                          <input type="radio" <?= $qec_fp['fundus_photos_os'] == 'No' ? 'checked' : ''; ?> name="fundusphoto_os" value="No" class="child1 " >   No

                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>Was fundus reflex image obtained?</label></td> 
                                        <td>
                                          <input type="radio" <?= $qec_fp['reflex_image_od'] == 'Yes' ? 'checked' : ''; ?> name="reflex_od" value="Yes"class="child2"  > YES
                                            <input type="radio" name="reflex_od" <?= $qec_fp['reflex_image_od'] == 'No' ? 'checked' : ''; ?> value="No" class="child2" > No

                                          </td>

                                          <td>
                                          <input type="radio" <?= $qec_fp['reflex_image_os'] == 'Yes' ? 'checked' : ''; ?> name="reflex_os" value="Yes"  class="child1 child3"> YES
                                            <input type="radio" <?= $qec_fp['reflex_image_os'] == 'No' ? 'checked' : ''; ?> name="reflex_os" value="No" class="child1 child3"> No

                                          </td>
                                          

                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label> Any media opacities that obscure the view of the retina?</label></td>
                                       <td>
                                          <input type="radio" <?= $qec_fp['media_opacities_od'] == 'Yes' ? 'checked' : ''; ?> name="media_od" value="Yes"class="child2" >  YES
                                          <input type="radio" <?= $qec_fp['media_opacities_od'] == 'No' ? 'checked' : ''; ?> name="media_od" value="No"class="child2" >  No

                                         </td>
                                          <td>
                                          <input type="radio" <?= $qec_fp['media_opacities_os'] == 'Yes' ? 'checked' : ''; ?> name="media_os" value="Yes" class="child1"> YES
                                          <input type="radio" <?= $qec_fp['media_opacities_os'] == 'No' ? 'checked' : ''; ?> name="media_os" value="No" class="child1">  No

                                         </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>If the answer to the previous question is yes, <br>please specify the level the opacity  interferes with view:</label>
                                       </td>
                                       <td>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_od'] == 'Negligible' ? 'checked' : ''; ?> name="opeacity_interefer_od" value="Negligible" class="child2" >  Negligible <br>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_od'] == 'Minimal' ? 'checked' : ''; ?> name="opeacity_interefer_od" value="Minimal" class="child2" >  Minimal <br>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_od'] == 'Moderate' ? 'checked' : ''; ?> name="opeacity_interefer_od" value="Moderate" class="child2" >  Moderate <br>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_od'] == 'Significant' ? 'checked' : ''; ?> name="opeacity_interefer_od" value="Significant" class="child2" >  Significant <br>

                                         </td>
                                          <td>
                                           <input type="radio" <?= $qec_fp['opacity_interferes_with_view_os'] == 'Negligible' ? 'checked' : ''; ?> name="opeacity_interefer_os" value="Negligible" class="child1">  Negligible <br>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_os'] == 'Minimal' ? 'checked' : ''; ?> name="opeacity_interefer_os" value="Minimal"    class="child1">  Minimal <br>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_os'] == 'Moderate' ? 'checked' : ''; ?> name="opeacity_interefer_os" value="Moderate"    class="child1">  Moderate <br>
                                          <input type="radio" <?= $qec_fp['opacity_interferes_with_view_os'] == 'Significant' ? 'checked' : ''; ?> name="opeacity_interefer_os" value="Significant"  class="child1">  Significant <br>

                                         </td>
                                    </tr>
                                     <td>
                                          <label>Confidence score on FP?</label>
                                       </td>
                                       <td>
                                          <input type="radio" <?= $qec_fp['confidence_score_on_fp_od'] == 'Gradable' ? 'checked' : ''; ?> name="confidence_od" value="Gradable" class="child2" > Gradable <br>
                                          <input type="radio" <?= $qec_fp['confidence_score_on_fp_od'] == 'Partially Gradable' ? 'checked' : ''; ?> name="confidence_od" value="Partially Gradable" class="child2" > Partially Gradable <br>
                                          <input type="radio" <?= $qec_fp['confidence_score_on_fp_od'] == 'Ungradable' ? 'checked' : ''; ?> name="confidence_od" value="Ungradable" class="child2" > Ungradable <br>
                                        

                                         </td>
                                          <td>
                                         <input type="radio" <?= $qec_fp['confidence_score_on_fp_os'] == 'Gradable' ? 'checked' : ''; ?> name="confidence_os" value="Gradable" class="child1"> Gradable <br>
                                          <input type="radio" <?= $qec_fp['confidence_score_on_fp_os'] == 'Partially Gradable' ? 'checked' : ''; ?> name="confidence_os" value="Partially Gradable" class="child1"> Partially Gradable <br>
                                          <input type="radio" <?= $qec_fp['confidence_score_on_fp_os'] == 'Ungradable' ? 'checked' : ''; ?> name="confidence_os" value="Ungradable" class="child1"> Ungradable <br>
                               

                                         </td>
                                    </tr>
                                    <tr>
                                        <td><label>Comments:</label></td>
                                        <td>
                                            <textarea name="comments_od" class="child2" ><?= $qec_fp['comments_od']; ?></textarea>
                                        </td>


                                        <td>
                                            <textarea name="comments_os" class="child1"><?= $qec_fp['comments_os']; ?></textarea>
                                        </td>
                                    </tr>

                                     <tr>
                                         <td>Location</td>
                                         <td>
                                          <input type="radio" <?= $qec_fp['location_od'] == '4 Field' ? 'checked' : ''; ?> name="location_od" value="4 Field" class="child2" > 4 Field <br>
                                          <input type="radio" <?= $qec_fp['location_od'] == '7 Field' ? 'checked' : ''; ?> name="location_od" value=" 7 Field" class="child2" > 7 Field

                                         </td>
                                         <td>
                                          <input type="radio" <?= $qec_fp['location_os'] == '4 Field' ? 'checked' : ''; ?> name="location_os" value="4 Field" class="child1"> 4 Field <br>
                                          <input type="radio" <?= $qec_fp['location_os'] == '7 Field' ? 'checked' : ''; ?> name="location_os" value="7 Field" class="child1"> 7 Field
                                         </td>
                                     </tr>
                                      <tr>
                                          <td>Magnification</td>
                                          <td><input type="radio" <?= $qec_fp['magnification_od'] == '50' ? 'checked' : ''; ?> name="maginfication_od" value="50" class="child2" > 50<sup>o</sup> <br>
                                              <input type="radio" <?= $qec_fp['magnification_od'] == '60' ? 'checked' : ''; ?> name="maginfication_od" value="60" class="child2" > 60<sup>o</sup> <br>
                                              <input type="radio" <?= $qec_fp['magnification_od'] == '30' ? 'checked' : ''; ?> name="maginfication_od" value="30" class="child2" > 30<sup>o</sup>/35<sup>o</sup> <br>
                                              <input type="radio" <?= $qec_fp['magnification_od'] == '45' ? 'checked' : ''; ?> name="maginfication_od" value="45" class="child2" > 45<sup>o</sup> <br>

                                          </td>
                                          <td><input type="radio" <?= $qec_fp['magnification_os'] == '50' ? 'checked' : ''; ?> name="maginfication_os" value="50" class="child1"> 50<sup>o</sup> <br>
                                              <input type="radio" <?= $qec_fp['magnification_os'] == '60' ? 'checked' : ''; ?> name="maginfication_os" value="60" class="child1"> 60<sup>o</sup> <br>
                                              <input type="radio" <?= $qec_fp['magnification_os'] == '30' ? 'checked' : ''; ?> name="maginfication_os" value="30" class="child1"> 30<sup>o</sup>/35<sup>o</sup> <br>
                                              <input type="radio" <?= $qec_fp['magnification_os'] == '45' ? 'checked' : ''; ?> name="maginfication_os" value="45" class="child1"> 45<sup>o</sup> <br>

                                          </td>
                                          
                                          
                                      </tr>
                                 </tbody>
                                 
                               
                            </table>
                  </div>
                </div>
                <div id="step-2" class="">
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
                </div>
                <div id="step-3" class="">
                    <br>
                    <div id="form-step-2" role="form" data-toggle="validator">
                  <div class="container-fluid">
                       <div class="row">
                         <div class="col-sm-8">
                            <table class="table-bordered" style="font-size: 10px; ">
                                 <h4 class="text-info text-center "  ">Diabetic Retinopathy (DR) Grading Severity Scale -OS</h4>
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
                                          
                                          <input type="checkbox" name="RH3" value="Questionable" class="RH3"> Questionable <br>
                                          <input type="checkbox" name="RH3" value="Definite" class="RH3"> Definite <br>
                                          <input type="checkbox" name="RH3" value="Moderate" class="RH3"> Moderate <br>
                                          <input type="checkbox" name="RH3" value="Sever" class="RH3"> Sever <br>
                                          <input type="checkbox" name="RH3" value="Very Sever" class="RH3"> Very Sever 

                                        </td>

                                        <td> 
                                         
                                          <input type="checkbox" name="RH4" value="Questionable" class="RH4"> Questionable <br>
                                          <input type="checkbox" name="RH4" value="Definite" class="RH4"> Definite <br>
                                          <input type="checkbox" name="RH4" value="Moderate" class="RH4"> Moderate <br>
                                          <input type="checkbox" name="RH4" value="Sever" class="RH4"> Sever <br>
                                          <input type="checkbox" name="RH4" value="Very Sever" class="RH4"> Very Sever <br></td>
                                        <td> 
                                        
                                          <input type="checkbox" name="RH5" value="Questionable" class="RH5"> Questionable <br>
                                          <input type="checkbox" name="RH5" value="Definite" class="RH5"> Definite <br>
                                          <input type="checkbox" name="RH5" value="Moderate" class="RH5"> Moderate <br>
                                          <input type="checkbox" name="RH5" value="Sever" class="RH5"> Sever <br>
                                          <input type="checkbox" name="RH5" value="Very Sever" class="RH5"> Very Sever <br></td>

                                        <td>
                                        
                                          <input type="checkbox" name="RH6" value="Questionable" class="RH6"> Questionable <br>
                                          <input type="checkbox" name="RH6" value="Definite" class="RH6"> Definite <br>
                                          <input type="checkbox" name="RH6" value="Moderate" class="RH6"> Moderate <br>
                                          <input type="checkbox" name="RH6" value="Sever" class="RH6"> Sever <br>
                                          <input type="checkbox" name="RH6" value="Very Sever" class="RH6"> Very Sever <br></td>
                                          <td>
                                           
                                            <input type="checkbox" name="RH7" value="Questionable" class="RH7"> Questionable <br>
                                          <input type="checkbox" name="RH7" value="Definite" class="RH7"> Definite <br>
                                          <input type="checkbox" name="RH7" value="Moderate" class="RH7"> Moderate <br>
                                          <input type="checkbox" name="RH7" value="Sever" class="RH7"> Sever <br>
                                          <input type="checkbox" name="RH7" value="Very Sever" class="RH7"> Very Sever <br></td>
                                         
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
                                           
                                          <input type="checkbox" name="IRMA3" value="Questionable" class="RH3"> Questionable <br>
                                          <input type="checkbox" name="IRMA3" value="Definite" class="RH3"> Definite <br>
                                          <input type="checkbox" name="IRMA3" value="Moderate" class="RH3"> Moderate <br>
                                          <input type="checkbox" name="IRMA3" value="Sever" class="RH3"> Sever <br>
                                          <input type="checkbox" name="IRMA3" value="Very Sever" class="RH3"> Very Sever 

                                        </td>
                                        <td>
                                        
                                         <input type="checkbox" name="IRMA4" value="Questionable"  class="RH4"> Questionable <br>
                                          <input type="checkbox" name="IRMA4" value="Definite" class="RH4"> Definite <br>
                                          <input type="checkbox" name="IRMA4" value="Moderate" class="RH4"> Moderate <br>
                                          <input type="checkbox" name="IRMA4" value="Sever" class="RH4"> Sever <br>
                                          <input type="checkbox" name="IRMA4" value="Very Sever" class="RH4"> Very Sever <br></td>
                                        <td> 
                                         
                                          <input type="checkbox" name="IRMA5" value="Questionable" class="RH5"> Questionable <br>
                                          <input type="checkbox" name="IRMA5" value="Definite"class="RH5"> Definite <br>
                                          <input type="checkbox" name="IRMA5" value="Moderate"class="RH5"> Moderate <br>
                                          <input type="checkbox" name="IRMA5" value="Sever"class="RH5"> Sever <br>
                                          <input type="checkbox" name="IRMA5" value="Very Sever"class="RH5"> Very Sever <br></td>

                                        <td>
                                         
                                          <input type="checkbox" name="IRMA6" value="Questionable" class="RH6"> Questionable <br>
                                          <input type="checkbox" name="IRMA6" value="Definite"class="RH6"> Definite <br>
                                          <input type="checkbox" name="IRMA6" value="Moderate"class="RH6"> Moderate <br>
                                          <input type="checkbox" name="IRMA6" value="Sever"class="RH6"> Sever <br>
                                          <input type="checkbox" name="IRMA6" value="Very Sever"class="RH6"> Very Sever <br></td>
                                          <td>
                                           
                                            <input type="checkbox" name="IRMA7" value="Questionable" class="RH7"> Questionable <br>
                                          <input type="checkbox" name="IRMA7" value="Definite" class="RH7"> Definite <br>
                                          <input type="checkbox" name="IRMA7" value="Moderate" class="RH7"> Moderate <br>
                                          <input type="checkbox" name="IRMA7" value="Sever" class="RH7"> Sever <br>
                                          <input type="checkbox" name="IRMA7" value="Very Sever" class="RH7"> Very Sever <br></td>
                                       
                                    </tr>

                                     <tr>
                                         <td><label>Venous Bleeding</label></td>
                                         <td><input type="checkbox" name="VB1" value="Definite"> Present <br>
                                          

                                         </td>
                                        <td>
                                          <input type="checkbox" name="VB2" value="Definite"> Present <br>
                                       

                                        </td>
                                        <td>
                                          
                                          <input type="checkbox" name="VB3" value="Questionable" class="RH3"> Questionable <br>
                                          <input type="checkbox" name="VB3" value="Definite" class="RH3"> Definite <br>
                                          <input type="checkbox" name="VB3" value="Moderate" class="RH3"> Moderate <br>
                                          <input type="checkbox" name="VB3" value="Sever" class="RH3"> Sever <br>
                                          <input type="checkbox" name="VB3" value="Very Sever" class="RH3"> Very Sever 

                                        </td>
                                        <td> 
                                          
                                          <input type="checkbox" name="VB4" value="Questionable" class="RH4"> Questionable <br>
                                          <input type="checkbox" name="VB4" value="Definite" class="RH4"> Definite <br>
                                          <input type="checkbox" name="VB4" value="Moderate" class="RH4"> Moderate <br>
                                          <input type="checkbox" name="VB4" value="Sever" class="RH4"> Sever <br>
                                          <input type="checkbox" name="VB4" value="Very Sever" class="RH4"> Very Sever <br></td>
                                        <td>
                                         
                                          <input type="checkbox" name="VB5" value="Questionable" class="RH5"> Questionable <br>
                                          <input type="checkbox" name="VB5" value="Definite" class="RH5"> Definite <br>
                                          <input type="checkbox" name="VB5" value="Moderate" class="RH5"> Moderate <br>
                                          <input type="checkbox" name="VB5" value="Sever" class="RH5"> Sever <br>
                                          <input type="checkbox" name="VB5" value="Very Sever" class="RH5"> Very Sever <br></td>

                                        <td>
                                           
                                          <input type="checkbox" name="VB6" value="Questionable" class="RH6"> Questionable <br>
                                          <input type="checkbox" name="VB6" value="Definite" class="RH6"> Definite <br>
                                          <input type="checkbox" name="VB6" value="Moderate" class="RH6"> Moderate <br>
                                          <input type="checkbox" name="VB6" value="Sever" class="RH6"> Sever <br>
                                          <input type="checkbox" name="VB6" value="Very Sever" class="RH6"> Very Sever <br></td>
                                          <td>
                                            
                                            <input type="checkbox" name="VB7" value="Questionable" class="RH7"> Questionable <br>
                                          <input type="checkbox" name="VB7" value="Definite" class="RH7"> Definite <br>
                                          <input type="checkbox" name="VB7" value="Moderate" class="RH7"> Moderate <br>
                                          <input type="checkbox" name="VB7" value="Sever" class="RH7"> Sever <br>
                                          <input type="checkbox" name="VB7" value="Very Sever" class="RH7"> Very Sever <br></td>
                                     </tr>
                                       <tr>
                                          <td><label>NPDR LEVEL OD</label></td>
                                          <td colspan="5"><select class="form-control" name="levelos">
                                            <option>Select NPDR</option>

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
                                          <option value="PDR Level ≥ 60">
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
                      <h5 class="text-info text-danger text-center"  >DRSS Grading Key</h5>
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
                </div>
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
     <script type="text/javascript">
                                    $(document).ready(function() {
                                      <?php if ($qec_fp['images_received_od'] == 'OD') { ?>
                                        $('#myCheck').trigger('change');
                                      <?php } elseif ($qec_fp['images_received_od'] == 'OS') { ?>
                                        $('#myCheck1').trigger('change');
                                        <?php } elseif ($qec_fp['images_received_od'] == 'OU') { ?>
                                          $('#myCheck2').trigger('change');
                                          <?php } elseif ($qec_fp['images_received_od'] == 'not') { ?>
                                            $('#myCheck3').trigger('change');
                                         <?php } else { ?>
                                             $('#myCheck3').trigger('change');
                                        <?php } ?>
                                    })
                                  </script>

</body>
</html>

<?php 



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


// $PdrOD=htmlentities($_POST['pdr_od']);
// $ActiveRetinalOD=htmlentities($_POST['active_retinal_od']);
// $VitreousOD=htmlentities($_POST['vitreous_od']);
// $FbFindingOD=htmlentities($_POST['fb_finding_od']);
// $CommentsOD1=htmlentities($_POST['comments_od1']);


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
// $PdrOS=htmlentities($_POST['pdr_os']);
// $ActiveRetinalOS=htmlentities($_POST['active_retinal_os']);
// $VitreousOS=htmlentities($_POST['vitreous_os']);
// $FbFindingOS=htmlentities($_POST['fb_finding_os']);



// Field OD

$MA1OD=htmlentities($_POST['MA1_od']) == '' ? 'Absent' : htmlentities($_POST['MA1_od']);

$MA2OD=htmlentities($_POST['MA2_od']) == '' ? 'Absent' : htmlentities($_POST['MA2_od']);

$MA3OD=htmlentities($_POST['MA3_od']) == '' ? 'Absent' : htmlentities($_POST['MA3_od']);

$MA4OD=htmlentities($_POST['MA4_od']) == '' ? 'Absent' : htmlentities($_POST['MA4_od']);

$MA5OD=htmlentities($_POST['MA5_od']) == '' ? 'Absent' : htmlentities($_POST['MA5_od']);

$MA6OD=htmlentities($_POST['MA6_od']) == '' ? 'Absent' : htmlentities($_POST['MA6_od']);

$MA7OD=htmlentities($_POST['MA7_od']) == '' ? 'Absent' : htmlentities($_POST['MA7_od']);

$RH1OD=htmlentities($_POST['RH1_od']) == '' ? 'Absent' : htmlentities($_POST['RH1_od']);
$RH2OD=htmlentities($_POST['RH2_od']) == '' ? 'Absent' : htmlentities($_POST['RH2_od']);
$RH3OD=htmlentities($_POST['RH3_od']) == '' ? 'Absent' : htmlentities($_POST['RH3_od']);
$RH4OD=htmlentities($_POST['RH4_od']) == '' ? 'Absent' : htmlentities($_POST['RH4_od']);
$RH5OD=htmlentities($_POST['RH5_od']) == '' ? 'Absent' : htmlentities($_POST['RH5_od']);
$RH6OD=htmlentities($_POST['RH6_od']) == '' ? 'Absent' : htmlentities($_POST['RH6_od']);
$RH7OD=htmlentities($_POST['RH7_od']) == '' ? 'Absent' : htmlentities($_POST['RH7_od']);



$HE1OD=htmlentities($_POST['HE1_od']) == '' ? 'Absent' : htmlentities($_POST['HE1_od']);
$HE2OD=htmlentities($_POST['HE2_od']) == '' ? 'Absent' : htmlentities($_POST['HE2_od']);
$HE3OD=htmlentities($_POST['HE3_od']) == '' ? 'Absent' : htmlentities($_POST['HE3_od']);
$HE4OD=htmlentities($_POST['HE4_od']) == '' ? 'Absent' : htmlentities($_POST['HE4_od']);
$HE5OD=htmlentities($_POST['HE5_od']) == '' ? 'Absent' : htmlentities($_POST['HE5_od']);
$HE6OD=htmlentities($_POST['HE6_od']) == '' ? 'Absent' : htmlentities($_POST['HE6_od']);
$HE7OD=htmlentities($_POST['HE7_od']) == '' ? 'Absent' : htmlentities($_POST['HE7_od']);



$SE1OD=htmlentities($_POST['SE1_od']) == '' ? 'Absent' : htmlentities($_POST['SE1_od']);
$SE2OD=htmlentities($_POST['SE2_od']) == '' ? 'Absent' : htmlentities($_POST['SE2_od']);
$SE3OD=htmlentities($_POST['SE3_od']) == '' ? 'Absent' : htmlentities($_POST['SE3_od']);
$SE4OD=htmlentities($_POST['SE4_od']) == '' ? 'Absent' : htmlentities($_POST['SE4_od']);
$SE5OD=htmlentities($_POST['SE5_od']) == '' ? 'Absent' : htmlentities($_POST['SE5_od']);
$SE6OD=htmlentities($_POST['SE6_od']) == '' ? 'Absent' : htmlentities($_POST['SE6_od']);
$SE7OD=htmlentities($_POST['SE7_od']) == '' ? 'Absent' : htmlentities($_POST['SE7_od']);



$VL1OD=htmlentities($_POST['VL1_od']) == '' ? 'Absent' : htmlentities($_POST['VL1_od']);
$VL2OD=htmlentities($_POST['VL2_od']) == '' ? 'Absent' : htmlentities($_POST['VL2_od']);
$VL3OD=htmlentities($_POST['VL3_od']) == '' ? 'Absent' : htmlentities($_POST['VL3_od']);
$VL4OD=htmlentities($_POST['VL4_od']) == '' ? 'Absent' : htmlentities($_POST['VL4_od']);
$VL5OD=htmlentities($_POST['VL5_od']) == '' ? 'Absent' : htmlentities($_POST['VL5_od']);
$VL6OD=htmlentities($_POST['VL6_od']) == '' ? 'Absent' : htmlentities($_POST['VL6_od']);
$VL7OD=htmlentities($_POST['VL7_od']) == '' ? 'Absent' : htmlentities($_POST['VL7_od']);



$IRMA1OD=htmlentities($_POST['IRMA1_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA1_od']);
$IRMA2OD=htmlentities($_POST['IRMA2_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA2_od']);
$IRMA3OD=htmlentities($_POST['IRMA3_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA3_od']);
$IRMA4OD=htmlentities($_POST['IRMA4_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA4_od']);
$IRMA5OD=htmlentities($_POST['IRMA5_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA5_od']);
$IRMA6OD=htmlentities($_POST['IRMA6_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA6_od']);
$IRMA7OD=htmlentities($_POST['IRMA7_od']) == '' ? 'Absent' : htmlentities($_POST['IRMA7_od']);




$VB1OD=htmlentities($_POST['VB1_od']) == '' ? 'Absent' : htmlentities($_POST['VB1_od']);
$VB2OD=htmlentities($_POST['VB2_od']) == '' ? 'Absent' : htmlentities($_POST['VB2_od']);
$VB3OD=htmlentities($_POST['VB3_od']) == '' ? 'Absent' : htmlentities($_POST['VB3_od']);
$VB4OD=htmlentities($_POST['VB4_od']) == '' ? 'Absent' : htmlentities($_POST['VB4_od']);
$VB5OD=htmlentities($_POST['VB5_od']) == '' ? 'Absent' : htmlentities($_POST['VB5_od']);
$VB6OD=htmlentities($_POST['VB6_od']) == '' ? 'Absent' : htmlentities($_POST['VB6_od']);
$VB7OD=htmlentities($_POST['VB7_od']) == '' ? 'Absent' : htmlentities($_POST['VB7_od']);



// OS FIELD



$MA1OS=htmlentities($_POST['MA1']) == '' ? 'Absent' : htmlentities($_POST['MA1']);

$MA2OS=htmlentities($_POST['MA2']) == '' ? 'Absent' : htmlentities($_POST['MA2']);

$MA3OS=htmlentities($_POST['MA3']) == '' ? 'Absent' : htmlentities($_POST['MA3']);

$MA4OS=htmlentities($_POST['MA4']) == '' ? 'Absent' : htmlentities($_POST['MA4']);

$MA5OS=htmlentities($_POST['MA5']) == '' ? 'Absent' : htmlentities($_POST['MA5']);

$MA6OS=htmlentities($_POST['MA6']) == '' ? 'Absent' : htmlentities($_POST['MA6']);

$MA7OS=htmlentities($_POST['MA7']) == '' ? 'Absent' : htmlentities($_POST['MA7']);

$RH1OS=htmlentities($_POST['RH1']) == '' ? 'Absent' : htmlentities($_POST['RH1']);
$RH2OS=htmlentities($_POST['RH2']) == '' ? 'Absent' : htmlentities($_POST['RH2']);
$RH3OS=htmlentities($_POST['RH3']) == '' ? 'Absent' : htmlentities($_POST['RH3']);
$RH4OS=htmlentities($_POST['RH4']) == '' ? 'Absent' : htmlentities($_POST['RH4']);
$RH5OS=htmlentities($_POST['RH5']) == '' ? 'Absent' : htmlentities($_POST['RH5']);
$RH6OS=htmlentities($_POST['RH6']) == '' ? 'Absent' : htmlentities($_POST['RH6']);
$RH7OS=htmlentities($_POST['RH7']) == '' ? 'Absent' : htmlentities($_POST['RH7']);



$HE1OS=htmlentities($_POST['HE1']) == '' ? 'Absent' : htmlentities($_POST['HE1']);
$HE2OS=htmlentities($_POST['HE2']) == '' ? 'Absent' : htmlentities($_POST['HE2']);
$HE3OS=htmlentities($_POST['HE3']) == '' ? 'Absent' : htmlentities($_POST['HE3']);
$HE4OS=htmlentities($_POST['HE4']) == '' ? 'Absent' : htmlentities($_POST['HE4']);
$HE5OS=htmlentities($_POST['HE5']) == '' ? 'Absent' : htmlentities($_POST['HE5']);
$HE6OS=htmlentities($_POST['HE6']) == '' ? 'Absent' : htmlentities($_POST['HE6']);
$HE7OS=htmlentities($_POST['HE7']) == '' ? 'Absent' : htmlentities($_POST['HE7']);



$SE1OS=htmlentities($_POST['SE1']) == '' ? 'Absent' : htmlentities($_POST['SE1']);
$SE2OS=htmlentities($_POST['SE2']) == '' ? 'Absent' : htmlentities($_POST['SE2']);
$SE3OS=htmlentities($_POST['SE3']) == '' ? 'Absent' : htmlentities($_POST['SE3']);
$SE4OS=htmlentities($_POST['SE4']) == '' ? 'Absent' : htmlentities($_POST['SE4']);
$SE5OS=htmlentities($_POST['SE5']) == '' ? 'Absent' : htmlentities($_POST['SE5']);
$SE6OS=htmlentities($_POST['SE6']) == '' ? 'Absent' : htmlentities($_POST['SE6']);
$SE7OS=htmlentities($_POST['SE7']) == '' ? 'Absent' : htmlentities($_POST['SE7']);



$VL1OS=htmlentities($_POST['VL1']) == '' ? 'Absent' : htmlentities($_POST['VL1']);
$VL2OS=htmlentities($_POST['VL2']) == '' ? 'Absent' : htmlentities($_POST['VL2']);
$VL3OS=htmlentities($_POST['VL3']) == '' ? 'Absent' : htmlentities($_POST['VL3']);
$VL4OS=htmlentities($_POST['VL4']) == '' ? 'Absent' : htmlentities($_POST['VL4']);
$VL5OS=htmlentities($_POST['VL5']) == '' ? 'Absent' : htmlentities($_POST['VL5']);
$VL6OS=htmlentities($_POST['VL6']) == '' ? 'Absent' : htmlentities($_POST['VL6']);
$VL7OS=htmlentities($_POST['VL7']) == '' ? 'Absent' : htmlentities($_POST['VL7']);

$IRMA1OS=htmlentities($_POST['IRMA1']) == '' ? 'Absent' : htmlentities($_POST['IRMA1']);
$IRMA2OS=htmlentities($_POST['IRMA2']) == '' ? 'Absent' : htmlentities($_POST['IRMA2']);
$IRMA3OS=htmlentities($_POST['IRMA3']) == '' ? 'Absent' : htmlentities($_POST['IRMA3']);
$IRMA4OS=htmlentities($_POST['IRMA4']) == '' ? 'Absent' : htmlentities($_POST['IRMA4']);
$IRMA5OS=htmlentities($_POST['IRMA5']) == '' ? 'Absent' : htmlentities($_POST['IRMA5']);
$IRMA6OS=htmlentities($_POST['IRMA6']) == '' ? 'Absent' : htmlentities($_POST['IRMA6']);
$IRMA7OS=htmlentities($_POST['IRMA7']) == '' ? 'Absent' : htmlentities($_POST['IRMA7']);




$VB1OS=htmlentities($_POST['VB1']) == '' ? 'Absent' : htmlentities($_POST['VB1']);
$VB2OS=htmlentities($_POST['VB2']) == '' ? 'Absent' : htmlentities($_POST['VB2']);
$VB3OS=htmlentities($_POST['VB3']) == '' ? 'Absent' : htmlentities($_POST['VB3']);
$VB4OS=htmlentities($_POST['VB4']) == '' ? 'Absent' : htmlentities($_POST['VB4']);
$VB5OS=htmlentities($_POST['VB5']) == '' ? 'Absent' : htmlentities($_POST['VB5']);
$VB6OS=htmlentities($_POST['VB6']) == '' ? 'Absent' : htmlentities($_POST['VB6']);
$VB7OS=htmlentities($_POST['VB7']) == '' ? 'Absent' : htmlentities($_POST['VB7']);
$SubjectID=$_POST['sub'];
$UserId=$_POST['userid'];
$VisitName=$_POST['visitname'];
$levelOD=htmlentities($_POST['levelod']);
$levelOS=htmlentities($_POST['levelos']);
$VisitDate=htmlentities($_POST['visitDate']);
$StudySite=htmlentities($_POST['studysite']);




 $Sql="INSERT INTO grading1_fp (subject_id,user_id,visit_name,Date_visit,study_site,images_received_od,fundus_photos_od,reflex_image_od,media_opacities_od, opacity_interferes_with_view_od,confidence_score_on_fp_od,comments_od,location_od,magnification_od,fundus_photos_os,reflex_image_os,media_opacities_os,opacity_interferes_with_view_os,confidence_score_on_fp_os,comments_os,location_os,magnification_os,F1_MA_OD,F1_HE_OD,F1_SE_OD,F1_VL_OD,F1_RH_OD,F1_VB_OD,F1_IRMA_OD,F2_MA_OD,F2_HE_OD,F2_SE_OD,F2_VL_OD,F2_RH_OD,F2_VB_OD,F2_IRMA_OD,F3_MA_OD,F3_HE_OD,F3_SE_OD,F3_VL_OD,F3_RH_OD,F3_VB_OD,F3_IRMA_OD,F4_MA_OD,F4_HE_OD,F4_SE_OD,F4_VL_OD,F4_RH_OD,F4_VB_OD,F4_IRMA_OD,F5_MA_OD,F5_HE_OD,F5_SE_OD,F5_VL_OD,F5_RH_OD,F5_VB_OD,F5_IRMA_OD,F6_MA_OD,F6_HE_OD,F6_SE_OD,F6_VL_OD,F6_RH_OD,F6_VB_OD,F6_IRMA_OD,F7_MA_OD,F7_HE_OD,F7_SE_OD,F7_VL_OD,F7_RH_OD,F7_VB_OD,F7_IRMA_OD,od_level,F1_MA_OS,F1_HE_OS,F1_SE_OS,F1_VL_OS,F1_RH_OS,F1_VB_OS,F1_IRMA_OS,F2_MA_OS,F2_HE_OS,F2_SE_OS,F2_VL_OS,F2_RH_OS,F2_VB_OS,F2_IRMA_OS,F3_MA_OS,F3_HE_OS,F3_SE_OS,F3_VL_OS,F3_RH_OS,F3_VB_OS,F3_IRMA_OS,F4_MA_OS,F4_HE_OS,F4_SE_OS,F4_VL_OS,F4_RH_OS,F4_VB_OS,F4_IRMA_OS,F5_MA_OS,F5_HE_OS,F5_SE_OS,F5_VL_OS,F5_RH_OS,F5_VB_OS,F5_IRMA_OS,F6_MA_OS,F6_HE_OS,F6_SE_OS,F6_VL_OS,F6_RH_OS,F6_VB_OS,F6_IRMA_OS,F7_MA_OS,F7_HE_OS,F7_SE_OS,F7_VL_OS,F7_RH_OS,F7_VB_OS,F7_IRMA_OS,os_level
) VALUES('$SubjectID','$UserId','$VisitName','$VisitDate','$StudySite','$ImageRecived','$FundusPhotoOD','$ImageReflexOD','$MediaOD','$OpacityIntereferOD','$ConfidenceOD','$CommentsOD','$LocationOD','$MagnificationOD','$FundusPhotoOS','$ImageReflexOS','$MediaOS','$OpacityIntereferOS','$ConfidenceOS','$CommentsOS','$LocationOS','$MagnificationOS','$MA1OD','$HE1OD','$SE1OD','$VL1OD','$RH1OD','$VB1OD','$IRMA1OD','$MA2OD','$HE2OD','$SE2OD','$VL2OD','$RH2OD','$VB2OD','$IRMA2OD','$MA3OD','$HE3OD','$SE3OD','$VL3OD','$RH3OD','$VB3OD','$IRMA3OD','$MA4OD','$HE4OD','$SE4OD','$VA4OD','$RH4OD','$VB4OD','$IRMA4OD','$MA5OD','$HE5OD','$SE5OD','$VA5OD','$RH5OD','$VB5OD','$IRMA5OD','$MA6OD','$HE6OD','$SE6OD','$VA6OD','$RH6OD','$VB6OD','$IRMA6OD','$MA7OD','$HE7OD','$SE7OD','$VA7OD','$RH7OD','$VB7OD','$IRMA7OD','$levelOD','$MA1OS','$HE1OS','$SE1OS','$VL1OS','$RH1OS','$VB1OS','$IRMA1OS','$MA2OS','$HE2OS','$SE2OS','$VL2OS','$RH2OS','$VB2OS','$IRMA2OS','$MA3OS','$HE3OS','$SE3OS','$VL3OS','$RH3OS','$VB3OS','$IRMA3OS','$MA4OS','$HE4OS','$SE4OS','$VA4OS','$RH4OS','$VB4OS','$IRMA4OS','$MA5OS','$HE5OS','$SE5OS','$VA5OS','$RH5OS','$VB5OS','$IRMA5OS','$MA6OS','$HE6OS','$SE6OS','$VA6OS','$RH6OS','$VB6OS','$IRMA6OS','$MA7OS','$HE7OS','$SE7OS','$VA7OS','$RH7OS','$VB7OS','$IRMA7OS','$levelos'
)";

 $run=mysqli_query($con,$Sql);


  $Sql="INSERT INTO assign_subject (subject_id,user_id,visit_name) VALUES('$SubjectID','$UserId','$VisitName')";

 $run =mysqli_query($con,$Sql);





if($run)

{
    echo "<script>alert('Successfully inserted')</script>";
    echo "<script>window.open('index.php','_self')</script>";
   
}

else
 {
   echo "<script>alert('Insertion is failed')</script>";
}




}













 ?>

