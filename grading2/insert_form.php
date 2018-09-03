<?php 

   require '../includes/connection.php';

   if(isset($_POST['submit']))

   {
        
     $SubjectID=htmlentities($_POST['sub_id']);
   
   


    $query=mysqli_query($con,"INSERT INTO subject (subject_id,enrollment_date,sex,dob,study_name,visit_name,visit_date,insert_date,user_id1,user_id2) VALUES('$SubjectID','$EnrollmentDate','$Sex','$BirthDate','$StudyName','$VisitName','$VisitDate','$AssignDate','$grader1','$grader2')");
    
    
    if($query)
    {

  exit(header("Location:index.php?success"));

    }

    else 

    {
    	echo "insert failed";


   }
}


 ?>