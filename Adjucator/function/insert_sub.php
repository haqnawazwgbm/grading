<?php 

   require 'includes/connection.php';

   if(isset($_POST['submit']))

   {


    $SubjectID=htmlentities($_POST['subid']);
    $EnrollmentDate=htmlentities($_POST['enrollment']);
    
    $StudyName=htmlentities($_POST['studyname']);
    $VisitName=htmlentities($_POST['visitname']);
    $VisitDate=htmlentities($_POST['visitdate']);
    $AssignDate=htmlentities($_POST['assigndate']);
    

    $query=mysqli_query($con,"INSERT INTO subject (subject_id,enrollment_date,study_name,visit_name,visit_date,insert_date) VALUES('$SubjectID','$EnrollmentDate','$StudyName','$VisitName','$VisitDate','$AssignDate')");
    
    
    if($query)
    {

     echo "<script>alert('Subject Registration is complete')</script>";

    }

    else 

    {
    	echo "insert failed";


   }
}


 ?>