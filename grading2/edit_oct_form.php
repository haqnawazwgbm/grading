 
<?php 
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

   $q="SELECT * FROM user where type='grader1'";
   $run=mysqli_query($con,$q);
    $row=mysqli_fetch_array($run);

    if (isset($_GET['ID'])) {
      $id = $_GET['ID'];
      $query = "SELECT * FROM grading2_oct WHERE id='$id'";
      $result = mysqli_query($con,$query);
      $oct = mysqli_fetch_array($result);
    }

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

#panel {
    padding: 50px;
    display: none;
}
td{
  color:black;
}
label{
   font-family: Calibri;font-size: 14px;
   font-weight: 200px;
}
h3{
  font-family: Calibri;
}
</style>


<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="../js/disabled_checkbox.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>



<script type="text/javascript">


    </script>


<!-- <script >
  
 function showtxt() {
  alert($('#retinalod').val());
  
   $('#disp').show();
 }


</script> -->
<script>
function showOD() {
    var x = document.getElementById("retinalod").value;
    if(x>=320)
    {  var message="Eligible";

       document.getElementById("demo").innerHTML=message;

     
    
    }
    else if(x < 305 )
    {
     var message="Not Eligible";
       document.getElementById("demo").innerHTML=message;
     
}
   else if(x>=305 || x <=320){
      var message="Eligible only if subject is female";
      document.getElementById("demo").innerHTML=message;
      
   }
   
   else 
   {
     var message="Not Eligible";

     // document.getElementById("demo").innerHTML=message;
   }
}



function showOS() {
    var x = document.getElementById("retinalos").value;
    if(x>=320)
    {  var message="Eligible";

       document.getElementById("demo1").innerHTML=message;

     
    
    }
    else if(x < 305 )
    {
     var message="Not Eligible";

     document.getElementById("demo1").innerHTML=message;
}
   else if(x>=305 || x <=320){
      var message="Eligible only if subject is female";
      document.getElementById("demo1").innerHTML=message;
   }
   
   else 
   {
     var message="Not Eligible";

     // document.getElementById("demo").innerHTML=message;
   }
}
</script>

<script>
function Hide(){
var x=document.getElementById("namevisit").value;
if(x!="Screening")
{
  document.getElementById("hide").style.display = "block";

}

else if(x=="")
{
  document.getElementById("hide").style.display = "none";
}
else
{
   document.getElementById("hide").style.display = "none";
}
}

</script>



<?php require '../includes/topheader.php'; ?>
 <?php require '../includes/desktopheader.php'; ?>
  <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
           
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">
                                <span><?php echo $_SESSION['username'];?>
                                  
                                </span>

                                <span class="badge" class="btn btn-info" style="font-size: 14px !important; background-color: #008398; color: #ffff "><?php echo $row['type']; ?></span>
                            </h1>
                            <h4 class="text-info pull-right "> Study Name: Kalvista</h4>
                            <hr class="line-seprate">
                        </div> 
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
               <!-- Start 7 Field Form  -->

               <div class="container">
                <div class="row">
                   <div class="col-sm-12">
                     <div class="col-sm-12">
                         
                          <form action="" method="post">
                            <input type="hidden" name="oct_id" value="<?= $oct['id']; ?>">
                            <div class="form-group">
                              <label>Subject ID:</label>
                              <select name="sub" class="form-control" style="width: 10%">
              
                           
                           <option  value="<?php echo $oct['subject_id'] ?>"><?php echo $oct['subject_id'] ?></option>


                              </select>
                            </div>
 
                            <div class="form-group">
                              <label>Visit Name:</label>
                              <select name="visitname" class="form-control" style="width: 10%;" id="namevisit" onblur="Hide()" >

                           <!--      <option value="">--Select Visit Name</option> -->
                          
                           <option value="<?php echo $oct['visit_name'];?>"><?php echo $oct['visit_name'];?></option>


                              </select>
                            </div>
                      

                           <div class="form-group">
                             <label for="" class="text-info">Visit Date</label>
                             <input type="date" name="visitDate" value="<?php echo date('Y-m-d', strtotime($oct['Date_visit']));?>" class="form-control" style="width: 20%"; required>
                             
                           </div>
                           <div class="form-group">
                             <label for="" class="text-info">Study Site</label>
                             <input type="text" name="studysite" value="<?php echo $oct['study_site'];?>" required id="studysite" class="form-control" style="width:20%;">
                            
                           </div>
                             <br>

                          <table class="table-bordered">
                              <thead>
                                 

                                    <th colspan="3" style="padding: 10px; background-color: #008398;
                                      color: #fff;">Images Recived</th><br>
                                      
                              </thead>
                              <tbody>
                                  <tr >
                                      <td> <span>OD </span>  <input type="checkbox" <?= $oct['images_received'] == 'OD' ? 'checked' : ''; ?> name="image_recived_oct" class="RH3" value="OD" id="myCheck" onchange="myFunction()">
                                      </td>
                                      <td> <span>OS </span> <input type="checkbox" <?= $oct['images_received'] == 'OS' ? 'checked' : ''; ?> name="image_recived_oct" class="RH3" value="OS" id="myCheck1" onchange="myFunction1()">
                                      </td>
                                      <td> <span>OU </span><input class="RH3" <?= $oct['images_received'] == 'OU' ? 'checked' : ''; ?> type="checkbox" name="image_recived_oct" id="myCheck2" onchange="myFunction2()" value="OU">
                                      </td>
                                      <td> <span>Not </span><input class="RH3" <?= $oct['images_received'] == 'not' ? 'checked' : ''; ?> type="checkbox" name="image_recived_oct" id="myCheck3" onchange="myFunction3()" value="not">
                                      </td>

                                      
                                  </tr>
                                  <script type="text/javascript">
                                    $(document).ready(function() {
                                      <?php if ($oct['images_received'] == 'OD') { ?>
                                        $('#myCheck').trigger('change');
                                      <?php } elseif ($oct['images_received'] == 'OS') { ?>
                                        $('#myCheck1').trigger('change');
                                        <?php } elseif ($oct['images_received'] == 'OU') { ?>
                                          $('#myCheck2').trigger('change');
                                          <?php } elseif ($oct['images_received'] == 'not') { ?>
                                            $('#myCheck3').trigger('change');
                                         <?php }  ?>
                                    })
                                  </script>
                                  <!-- <tr><td colspan="3" style="padding: 20px;background-color: #008398;color:#fff;"><b>Patient Gender</b></td>

                                  </tr> -->
                                  <!-- <tr> 
                                    <td><span>Male</span> <input type="radio" name="gender" value="Male"></td>
                                    <td colspan="2"><span >Female</span> <input type="radio" name="gender" value="Female"></td>
                                  </tr> -->

                              </tbody>

                                
                            </table>
                        </div>

                   </div>
                    </div>
                <br>
                 <!-- COlor Photo Fundus -->
                 <div class="row">
                   <div class="col-sm-6">
                      <table class="table-bordered" style="font-size: 12px;">
                                 <h3 class="text-info text-center">SPECTRALIS OCT GRADING FORM</h3>
                                 <thead colspan="3" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" > OD</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;"> OS</th>
                                 </thead>
                                 <tbody> 
                                     <tr>
                                         <td>
                                             <label>Are the OCT images gradable?</label>

                                         </td>
                                         <td>
                                          <input type="radio"  <?= $oct['images_gradable'] == 'Yes' ? 'checked' : ''; ?> name="image_gradable_od"   value="Yes" class="child2">   YES
                                          <input type="radio" <?= $oct['images_gradable'] == 'No' ? 'checked' : ''; ?> name="image_gradable_od" value="No" class="child2">   No

                                         </td>
                                         <td>
                                         <input type="radio" <?= $oct['images_gradable_os'] == 'Yes' ? 'checked' : ''; ?> name="image_gradable_os"  value="Yes" class="child1 ">   YES
                                          <input type="radio" <?= $oct['images_gradable_os'] == 'No' ? 'checked' : ''; ?> name="image_gradable_os" value="No" class="child1" >   No

                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>ETDRS grid centered on the fovea</label></td> 
                                        <td>
                                          <input type="radio" <?= $oct['etdrs_grid'] == 'Yes' ? 'checked' : ''; ?> name="etrs_gird_od" value="Yes" class="child2"> YES
                                            <input type="radio" <?= $oct['etdrs_grid'] == 'No' ? 'checked' : ''; ?>  name="etrs_gird_od" value="No" class="child2"> No

                                          </td>

                                          <td>
                                          <input type="radio" <?= $oct['etdrs_grid_os'] == 'Yes' ? 'checked' : ''; ?> name="etrs_gird_os" value="Yes" class="child1"> YES
                                            <input type="radio" <?= $oct['etdrs_grid_os'] == 'No' ? 'checked' : ''; ?> name="etrs_gird_os" value="No" class="child1"> No

                                          </td>
                                          

                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label>Was the imaging protocol followed?</label></td>
                                       <td>
                                          <input type="radio" <?= $oct['imaging_protocol'] == 'Yes' ? 'checked' : ''; ?> name="image_protocol_od" value="Yes" class="child2">  YES
                                          <input type="radio" <?= $oct['imaging_protocol'] == 'No' ? 'checked' : ''; ?> name="image_protocol_od" value="No" class="child2">  No

                                         </td>
                                          <td>
                                          <input type="radio" <?= $oct['imaging_protocol_os'] == 'Yes' ? 'checked' : ''; ?> name="image_protocol_os" value="Yes" class="child1"> YES
                                          <input type="radio" <?= $oct['imaging_protocol_os'] == 'No' ? 'checked' : ''; ?> name="image_protocol_os" value="No" class="child1">  No

                                         </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>If the answer to the previous question is No, <br>please explain the deficiencies:</label>
                                       </td>
                                       <td>
                                          <textarea class="form-control child2" name="no_explain_od"><?= $oct['no_please_explain']; ?></textarea>


                                         </td>
                                          <td>
                                           <textarea class="form-control child1" name="no_explain_os" ><?= $oct['no_please_explain_os']; ?></textarea>
                                         </td>
                                    </tr>
                                     <td>
                                          <label>Was it required to fix the segmentation to RPE& ILM?</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="rpe_ilm_od" <?= $oct['rpe_ilm'] == 'Yes' ? 'checked' : ''; ?> value="Yes" class="child2">Yes 
                                          <input type="radio" name=rpe_ilm_od"" <?= $oct['rpe_ilm'] == 'No' ? 'checked' : ''; ?> value="No" class="child2">No 
                                          
                                        

                                         </td>
                                          <td>
                                         <input type="radio" name="rpe_ilm_os" <?= $oct['rpe_ilm_os'] == 'Yes' ? 'checked' : ''; ?> value="Yes" class="child1"> Yes 
                                          <input type="radio" name="rpe_ilm_os" <?= $oct['rpe_ilm_os'] == 'No' ? 'checked' : ''; ?> value="No" class="child1"> No
                                          
                               

                                         </td>
                                    </tr>
                                   

                                     <tr>
                                         <td><label>If the answer to previous question is Yes, please specify the level of segmentation errors:</label></td>
                                         <td>
                                          <input type="radio" name="yes_please_specify"  <?= $oct['yes_please_specify'] == 'Mid' ? 'checked' : ''; ?> value="Mid" class="child2"> Mild <br>
                                          <input type="radio" <?= $oct['yes_please_specify'] == 'Moderate' ? 'checked' : ''; ?> name="yes_please_specify" value="Moderate " class="child2">Moderate 
                                          <input type="radio" <?= $oct['yes_please_specify'] == 'Severe' ? 'checked' : ''; ?> name="yes_please_specify" value=" Severe" class="child2">Severe 

                                         </td>
                                         <td>
                                          <input type="radio" name="yes_please_specify_os" <?= $oct['yes_please_specify_os'] == 'Mid' ? 'checked' : ''; ?> value="Mid"    class="child1"> Mild <br>
                                          <input type="radio" name="yes_please_specify_os" <?= $oct['yes_please_specify_os'] == 'Moderate' ? 'checked' : ''; ?> value="Moderate" class="child1">Moderate 
                                          <input type="radio" name="yes_please_specify_os"  <?= $oct['yes_please_specify_os'] == 'Severe' ? 'checked' : ''; ?> value=" Severe" class="child1">Severe 
                                         </td>
                                     </tr>
                                      
                                 </tbody>
                                 
                               
                            </table>

                   </div>

                    <div class="col-sm-6">
                      <table class="table-bordered" style="font-size: 12px;">
                                 <h3 class="text-info text-center">THICKNESS MAP REPORT</h3>
                                 <thead colspan="3" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" > OD</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;"> OS</th>
                                 </thead>
                                 <tbody> 
                                     <tr>
                                         <td>
                                             <label>Retinal thickness (thickness map) center 1mm (µm):</label>

                                         </td>
                                         <td>
                                          <input type="text" name="retinal_od" value="<?= $oct['retinal_thickness']; ?>" class="form-control" id="retinalod"  onblur="showOD();">  

                                         </td>
                                         <td>
                                         <input type="text" name="retinal_os" value="<?= $oct['retinal_thickness_os']; ?>" class="form-control"  id="retinalos" onblur="showOS();" >   
                                       
                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>Total Volume (mm3)</label></td> 
                                        <td>
                                          <input type="text" name="total_volume"  value="<?= $oct['retinal_thickness']; ?>" class="form-control"> 
                                         

                                          </td>

                                          <td>
                                          <input type="text" name="total_volume_os"  value="<?= $oct['total_volume_os']; ?>" class="form-control" > 
                                          
                                          </td> 

                                          <tr>
                                            <td><label>Eligibility</label></td>
                                            <td><p id="demo" class="text-info" style="margin-left:5%;"></p></td>
                                            <td><p id="demo1" class="text-info"></p></td>
                                          </tr>   

                                                                                                                                                                 
                                      
                                 </tbody>
                                
                               
                      </table><br> 
                      <div id="hide">
                      <table class="table-bordered" style="font-size: 12px;">
                                 <h3 class="text-info">ELIGIBILITY OF THE EYES</h3>
                                 <thead colspan="3" style="padding: 10px">
                                     <th></th>
                                     <th class="text-center" style="padding: 15px; color: #ffff; background-color:  #008398" > OD</th>
                                     <th class="text-center"  style="padding: 15px;  background-color: #008398; color: #ffff;"> OS</th>
                                 </thead>
                                 <tbody> 
                                     <tr>
                                         <td>
                                             <label>Presence of ciDME in the study eye defined as Heidelberg <br>
                        Spectralis Optical Coherence Tomography (SD-OCT) <br> CST ≥305 μm in women and ≥320 μm <br> in men in the study eye (Inclusion)
                                  </label>

                                         </td>
                                         <td>
                                        <input type="radio" <?= $oct['optical_choerence_od'] == 'Yes' ? 'checked' : ''; ?> name="optical_choerence_od" value="Yes">Yes
                                        <input type="radio" <?= $oct['optical_choerence_od'] == 'No' ? 'checked' : ''; ?> name="optical_choerence_od" value="No"> No <br>
                                        <input type="radio" name="optical_choerence_od" <?= $oct['optical_choerence_od'] == 'Cannot Grade' ? 'checked' : ''; ?> value="Cannot Grade"> Cannot Grade <br>
                                          
                                         </td>
                                         <td>
                                          <input type="radio" <?= $oct['optical_choerence_os'] == 'Yes' ? 'checked' : ''; ?> name="optical_choerence_os" value="Yes">Yes
                                        <input type="radio" <?= $oct['optical_choerence_os'] == 'No' ? 'checked' : ''; ?> name="optical_choerence_os" value="No"> No <br>
                                        <input type="radio" <?= $oct['optical_choerence_os'] == 'Cannot Grade' ? 'checked' : ''; ?> name="optical_choerence_os" value="Cannot Grade"> Cannot Grade
                                       
                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>Is the eye eligible based on the OCT findings?</label></td> 
                                        <td>
                                          <input type="radio" <?= $oct['oct_finiding_od'] == 'Yes' ? 'checked' : ''; ?> name="oct_finding_od" value="Yes">Yes
                                          <input type="radio" <?= $oct['oct_finiding_od'] == 'No' ? 'checked' : ''; ?> name="oct_finding_od" value="No"> No
                                         

                                          </td>

                                          <td>
                                       <input type="radio" <?= $oct['oct_finiding_os'] == 'Yes' ? 'checked' : ''; ?> name="oct_finding_os" value="Yes">Yes
                                        <input type="radio" <?= $oct['oct_finiding_os'] == 'No' ? 'checked' : ''; ?> name="oct_finding_os" value="No"> No
                                          
                                      </td>   

                                    </tr>
                                    <tr>
                                      <td><label>Comments:</label></td>
                                      <td colspan="3"><textarea class="form-control" name="comments"><?= $oct['comments']; ?></textarea></td>
                                    </tr>

                                      
                                 </tbody>
                                
                               
                            </table><br> 
                                     
                              <br>
                              
                              

                            
                      
                   </div>
                    <input type="submit" name="submit" value="Submit Form " class="btn btn-info btn-lg">  
                 </div>

                           

                   
                  
                  
                

                 </div>
                  </form>

                              
            </section>
            <!-- End 7 Field Form -->
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
$ImageRecived=htmlentities($_POST['image_recived_oct']);
$Gender=htmlentities($_POST['gender']);
$ImageGradable=htmlentities($_POST['image_gradable_od']);
$EtdrsGirdOD=htmlentities($_POST['etrs_gird_od']);
$ImagingProtocolOD=htmlentities($_POST['image_protocol_od']);
$NoQuestionOD=htmlentities($_POST['no_explain_od']);
$RpeIimOD=htmlentities($_POST['rpe_ilm_od']);
$SpecifyOD=htmlentities($_POST['Yes_please_od']);
$RetinalOD=htmlentities($_POST['retinal_od']);
$OpticalTomographOD=htmlentities($_POST['optical_choerence_od']);
$OCTFIndingOD=htmlentities($_POST['oct_finding_od']);
$TotalVolumeOD=htmlentities($_POST['total_volume_od']);


$ImageGradableOS=htmlentities($_POST['image_gradable_os']);
$EtdrsGirdOS=htmlentities($_POST['etrs_gird_os']);
$ImagingProtocolOS=htmlentities($_POST['image_protocol_os']);
$NoQuestionOS=htmlentities($_POST['no_explain_os']);
$RpeIimOS=htmlentities($_POST['rpe_ilm_os']);
$SpecifyOS=htmlentities($_POST['Yes_please_os']);
$RetinalOS=htmlentities($_POST['retinal_os']);
$OpticalTomographOS=htmlentities($_POST['optical_choerence_os']);
$OCTFIndingOS=htmlentities($_POST['oct_finding_os']);
$Coments=htmlentities($_POST['comments']);
$TotalVolumeOS=htmlentities($_POST['total_volume_os']);
$yes_please_specify = htmlentities($_POST['yes_please_specify']);
$yes_please_specify_os = htmlentities($_POST['yes_please_specify_os']);

$SubjectID=$_POST['sub'];
$VisitName=$_POST['visitname'];
$UserId=$_SESSION['ID'];
$study_site = htmlentities($_POST['studysite']);
$visit_date = $_POST['visitDate'];
$id = $_POST['oct_id'];





 

$Sql="UPDATE grading2_oct SET subject_id='$SubjectID',user_id='$UserId',visit_name='$VisitName',Date_visit='$visit_date',study_site='$study_site',images_received='$ImageRecived',images_gradable='$ImageGradable',etdrs_grid='$EtdrsGirdOD',imaging_protocol='$ImagingProtocolOD',no_please_explain='$NoQuestionOD',rpe_ilm='$RpeIimOD',   yes_please_specify='$yes_please_specify',yes_please_specify_os='$yes_please_specify_os',retinal_thickness='$RetinalOD',total_volume='$TotalVolumeOD',optical_choerence_od='$OpticalTomographOD',oct_finiding_od='$OCTFIndingOD',images_gradable_os='$ImageGradableOS',
etdrs_grid_os='$EtdrsGirdOS',imaging_protocol_os='$ImagingProtocolOS',no_please_explain_os='$NoQuestionOD',rpe_ilm_os='$RpeIimOS',retinal_thickness_os='$RetinalOS',total_volume_os='$TotalVolumeOS',optical_choerence_os='$OpticalTomographOS',oct_finiding_os='$OCTFIndingOS',comments='$Coments' WHERE id='$id'";






 $run=mysqli_query($con,$Sql);




 /* $Sql="INSERT INTO assign_subject (subject_id,user_id,visit_name) VALUES('$SubjectID','$UserId','$VisitName')";

 $run =mysqli_query($con,$Sql);*/





if($run)

{
    echo "<script>alert('Record updated successfully')</script>";
     echo "<script>window.open('list_oct.php?tab=oct','_self')</script>";
   
}

else
 {
  echo "Failed";
}




}














 ?>


