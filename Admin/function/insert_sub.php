<?php 

   require 'includes/connection.php';

   if(isset($_POST['submit']))

   {


    $EnrollmentDate=htmlentities($_POST['enrollment']);
    
    $StudyName=htmlentities($_POST['studyname']);
    $VisitName=htmlentities($_POST['visitname']);
    $VisitDate=htmlentities($_POST['visitdate']);
    $AssignDate=htmlentities($_POST['assigndate']);
    $UserID=htmlentities($_SESSION['ID']);

     $query="INSERT INTO subject (enrollment_date,study_name,visit_name,visit_date,insert_date,user_id) VALUES('$EnrollmentDate','$StudyName','$VisitName','$VisitDate','$AssignDate','$UserID')";
      

      $run=mysqli_query($con,$query);
    
    
    if($run)
    {

     echo "<script>alert('Subject Registration is complete')</script>";

    }

    else 

    {
    	echo "insert failed";


   }
}


 ?>