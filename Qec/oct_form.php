 
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
      border: 1px solid #008398;
  }

#panel {
    padding: 50px;
    display: none;
}
td{
  color:black;
}
/*label{
   font-family: Calibri;font-size: 14px;
   font-weight: 200px;
}*/
/*h3{
  font-family: Calibri;
}*/
.form-control{
  font-size: 14px !important;
}
</style>


<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="../js/disabled_checkbox.js"></script>


<script type="text/javascript">
      
/*      function myFunction() {

  var elements = document.getElementsByClassName("child1");
  
  var el = document.getElementById("myCheck");


  for (var i = 0; i < elements.length; i++) {
    if (el.checked) {
     
      elements[i].disabled = true;
     


    } else {
      elements[i].disabled = false;


    }
  }
}



 function myFunction1() {

  var elements = document.getElementsByClassName("child2");
  
  var el = document.getElementById("myCheck1");


  for (var i = 0; i < elements.length; i++) {

    if (el.checked) {
     
      elements[i].disabled = true;
    


    } else {
      elements[i].disabled = false;


    }
  }
}
*/


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
           <form action="oct_form.php" method="post">
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
                  <div class="col-sm-3">
                    <div class="form-group">
                              <label>Subject ID:</label>
                              <select name="sub" class="form-control">

                                <<!-- option value="">--Select subject</option> -->
                                 <?php 
                                $ID=$_GET['ID'];
                               $select="SELECT * FROM user_id_subject_qec_oct";
                               $run=mysqli_query($con,$select);

                               while ($row=mysqli_fetch_array($run)) {
                                 # code...
                               

                           ?>
                           <option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_id'] ?></option>

                         <?php } ?>

                         </select>
                            </div>
                            <div class="form-group">
                              <label>Visit Name:</label>
                              <select name="visitname" class="form-control" id="namevisit" onblur="Hide()" >

                           <!--      <option value="">--Select Visit Name</option> -->
                                 <?php 
                     
                                 mysqli_data_seek($run,0);
                               while ($row=mysqli_fetch_array($run)) {
                                 # code...
                               

                           ?>
                           <option value="<?php echo $row['visit_name'];?>"><?php echo $row['visit_name'];?></option>

                         <?php } ?>

                              </select>
                            </div>
                        
                       <div class="form-group">
                             <label for="">Visit Date</label>
                             <input type="date" name="visitDate" class="form-control" required>
                             
                           </div>
                          <div class="form-group">
                            <label for="">Study Site</label>
                            <input type="text" name="studysite" class="form-control">
                          </div>
                  </div>
                  
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

                                
                            </table>
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
                                          <input type="radio" name="image_gradable_od"  value="Yes" class="child2">   YES
                                          <input type="radio" name="image_gradable_od" value="No" class="child2">   No

                                         </td>
                                         <td>
                                         <input type="radio" name="image_gradable_os"  value="Yes" class="child1 ">   YES
                                          <input type="radio" name="image_gradable_os" value="No" class="child1" >   No

                                         </td>
                                          
                                     </tr>
                                     <tr>
                                       <td><label>ETDRS grid centered on the fovea</label></td> 
                                        <td>
                                          <input type="radio" name="etrs_gird_od" value="Yes" class="child2"> YES
                                            <input type="radio" name="etrs_gird_od" value="No" class="child2"> No

                                          </td>

                                          <td>
                                          <input type="radio" name="etrs_gird_os" value="Yes" class="child1"> YES
                                            <input type="radio" name="etrs_gird_os" value="No" class="child1"> No

                                          </td>
                                          

                                         
                                     </tr>
                                    <tr>
                                        
                                       <td><label>Was the imaging protocol followed?</label></td>
                                       <td>
                                          <input type="radio" name="image_protocol_od" value="Yes" class="child2">  YES
                                          <input type="radio" name="image_protocol_od" value="No" class="child2">  No

                                         </td>
                                          <td>
                                          <input type="radio" name="image_protocol_os" value="Yes" class="child1"> YES
                                          <input type="radio" name="image_protocol_os" value="No" class="child1">  No

                                         </td>
                                    </tr>

                                    <tr>
                                        
                                       <td >
                                          <label>If the answer to the previous question is No, <br>please explain the deficiencies:</label>
                                       </td>
                                       <td>
                                          <textarea class="form-control child2" name="no_explain_od"></textarea>


                                         </td>
                                          <td>
                                           <textarea class="form-control child1" name="no_explain_os" ></textarea>
                                         </td>
                                    </tr>
                                     <td>
                                          <label>Was it required to fix the segmentation to RPE& ILM?</label>
                                       </td>
                                       <td>
                                          <input type="radio" name="rpe_ilm_od" value="Yes" class="child2">Yes 
                                          <input type="radio" name=rpe_ilm_od"" value="No" class="child2">No 
                                          
                                        

                                         </td>
                                          <td>
                                         <input type="radio" name="rpe_ilm_os" value="Yes" class="child1"> Yes 
                                          <input type="radio" name="rpe_ilm_os" value="No" class="child1"> No
                                          
                               

                                         </td>
                                    </tr>
                                   

                                     <tr>
                                         <td><label>If the answer to previous question is Yes, please specify the level of segmentation errors:</label></td>
                                         <td>
                                          <input type="radio" name="Yes_please_od" value="Mid" class="child2"> Mild <br>
                                          <input type="radio" name="Yes_please_od" value="Moderate " class="child2">Moderate 
                                          <input type="radio" name="Yes_please_od" value=" Severe" class="child2">Severe 

                                         </td>
                                         <td>
                                          <input type="radio" name="Yes_please_os" value="Mid"    class="child1"> Mild <br>
                                          <input type="radio" name="Yes_please_os" value="Moderate" class="child1">Moderate 
                                          <input type="radio" name="Yes_please_os" value=" Severe" class="child1">Severe 
                                         </td>
                                     </tr>
                                      
                                 </tbody>
                                 
                               
                            </table>

                   </div>

                   </div>
                   <br>
                   <input type="submit" name="submit" value="Submit Form " class="btn btn-info btn-lg">
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





if(isset($_POST['submit']))

{
// OD
$ImageRecived=htmlentities($_POST['imgrecived']);
$Gender=htmlentities($_POST['gender']);
$ImageGradable=htmlentities($_POST['image_gradable_od']);
$EtdrsGirdOD=htmlentities($_POST['etrs_gird_od']);
$ImagingProtocolOD=htmlentities($_POST['image_protocol_od']);
$NoQuestionOD=htmlentities($_POST['no_explain_od']);
$RpeIimOD=htmlentities($_POST['rpe_ilm_od']);
$SpecifyOD=htmlentities($_POST['Yes_please_od']);
// $RetinalOD=htmlentities($_POST['retinal_od']);
// $OpticalTomographOD=htmlentities($_POST['optical_choerence_od']);
// $OCTFIndingOD=htmlentities($_POST['oct_finding_od']);
// $TotalVolumeOD=htmlentities($_POST['total_volume_od']);


$ImageGradableOS=htmlentities($_POST['image_gradable_os']);
$EtdrsGirdOS=htmlentities($_POST['etrs_gird_os']);
$ImagingProtocolOS=htmlentities($_POST['image_protocol_os']);
$NoQuestionOS=htmlentities($_POST['no_explain_os']);
$RpeIimOS=htmlentities($_POST['rpe_ilm_os']);
$SpecifyOS=htmlentities($_POST['Yes_please_os']);
// $RetinalOS=htmlentities($_POST['retinal_os']);
// $OpticalTomographOS=htmlentities($_POST['optical_choerence_os']);
// $OCTFIndingOS=htmlentities($_POST['oct_finding_os']);
// $Coments=htmlentities($_POST['comments']);
// $TotalVolumeOS=htmlentities($_POST['total_volume_os']);
$SubjectID=$_POST['sub'];
$VisitName=$_POST['visitname'];
$UserId=$_SESSION['ID'];
$study_site=$_POST['studysite'];
$visit_date = $_POST['visitDate'];





 

$Sql="INSERT INTO qec_oct (subject_id,user_id,visit_name,Date_visit,study_site,images_received,images_gradable,etdrs_grid,imaging_protocol,no_please_explain,rpe_ilm,yes_please_specify,yes_please_specify_os,images_gradable_os,
etdrs_grid_os,imaging_protocol_os,no_please_explain_os,rpe_ilm_os)

 VALUES('$SubjectID','$UserId','$VisitName','$visit_date','$study_site','$ImageRecived','$ImageGradable','$EtdrsGirdOD','$ImagingProtocolOD','$NoQuestionOD','$RpeIimOD','$SpecifyOD','$SpecifyOS','$ImageGradableOS','$EtdrsGirdOS','$ImagingProtocolOS','$NoQuestionOD','$RpeIimOS')";







 $run=mysqli_query($con,$Sql);




  $Sql="INSERT INTO assign_subject (subject_id,user_id,visit_name) VALUES('$SubjectID','$UserId','$VisitName')";

 $run =mysqli_query($con,$Sql);





if($run)

{
    echo "<script>alert('Successfully inserted')</script>";
    echo "<script>window.open('list_oct.php?tab=oct','_self')</script>";
   
}

else
 {
  echo "Failed";
}




}














 ?>


