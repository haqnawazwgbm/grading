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
     $query = "SELECT * FROM qec_fp WHERE id='$id'";
     $result = mysqli_query($con,$query);
     $qec_fp = mysqli_fetch_array($result);
  } 

?>
<body>
  <div style="display: none" step="0" id="step-tab"></div>
    <div class="container" style="border: 1px solid">
<form action="" id="form-wizard" method="post" data-toggle="validator" accept-charset="utf-8" role="form">
        <!-- SmartWizard html -->
        <div id="smartwizard" >
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Subject Details</small></a></li>
                
                <li><a href="#step-4">Step 4<br /><small>Submit Form</small></a></li>
            </ul>
          <input type="hidden" value="<?php echo $qec_fp['id'] ?>" name="fp_id">
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
                                      <td> <span>OD </span>  <input type="checkbox" <?= $qec_fp['images_received_od'] == 'OD' ? 'checked' : ''; ?> name="image_recived_od" class="RH3" value="OD" id="myCheck" onchange="myFunction()">
                                      </td>
                                      <td> <span>OS </span> <input type="checkbox" <?= $qec_fp['images_received_od'] == 'OS' ? 'checked' : ''; ?> name="image_recived_od" class="RH3" value="OS" id="myCheck1" onchange="myFunction1()">
                                      </td>
                                      <td> <span>OU </span><input class="RH3" <?= $qec_fp['images_received_od'] == 'OU' ? 'checked' : ''; ?> type="checkbox" name="image_recived_od" id="myCheck2" onchange="myFunction2()" value="OU">
                                      </td>
                                      <td> <span>Not </span><input class="RH3" <?= $qec_fp['images_received_od'] == 'not' ? 'checked' : ''; ?> type="checkbox" name="image_recived_od" id="myCheck3" onchange="myFunction3()" value="not">
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
              
                <div id="step-4" class="">
                      <h2>Update Form</h2>
                        <input type="submit" name="submit" class="btn btn-info submit" value="Update form">
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
$FundusPhotoOD=htmlentities($_POST['fundusphoto_od']);
$ImageReflexOD=htmlentities($_POST['reflex_od']);
$MediaOD=htmlentities($_POST['media_od']);
$OpacityIntereferOD=htmlentities($_POST['opeacity_interefer_od']);
$ConfidenceOD=htmlentities($_POST['confidence_od']);
$CommentsOD=htmlentities($_POST['comments_od']);
$LocationOD=htmlentities($_POST['location_od']);
$MagnificationOD=htmlentities($_POST['maginfication_od']);

// OS


$ImageRecived=htmlentities($_POST['image_recived_od']);
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
$fp_id = htmlentities($_POST['fp_id']);



 $Sql="UPDATE qec_fp SET subject_id='$SubjectID',user_id='$UserId',visit_name='$VisitName',Date_visit='$VisitDate',study_site='$StudySite',images_received_od='$ImageRecived',fundus_photos_od='$FundusPhotoOD',reflex_image_od='$ImageReflexOD',media_opacities_od='$MediaOD', opacity_interferes_with_view_od='$OpacityIntereferOD',confidence_score_on_fp_od='$ConfidenceOD',comments_od='$CommentsOD',location_od='$LocationOD',magnification_od='$MagnificationOD',fundus_photos_os='$FundusPhotoOS',reflex_image_os='$ImageReflexOS',media_opacities_os='$MediaOS',opacity_interferes_with_view_os='$OpacityIntereferOS',confidence_score_on_fp_os='$ConfidenceOS',comments_os='$CommentsOS',location_os='$LocationOS',magnification_os='$MagnificationOS' WHERE id='$fp_id'";

 $run=mysqli_query($con,$Sql);

/*
  $Sql="INSERT INTO assign_subject (subject_id,user_id,visit_name) VALUES('$SubjectID','$UserId','$VisitName')";

 $run =mysqli_query($con,$Sql);*/





if($run)

{
    echo "<script>alert('Record updated successfully')</script>";
    echo "<script>window.open('list_cfp.php?tab=cfp','_self')</script>";
   
}

else
 {
   echo "<script>alert('Insertion is failed')</script>";
}




}













 ?>

