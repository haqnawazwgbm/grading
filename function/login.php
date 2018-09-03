 <?php 
session_start();




  ?>




 <?php 




$con = mysqli_connect('localhost','root','','kalvista');




if(isset($_POST['login']))
{
  $Username=mysqli_escape_string($con, $_POST['username']);
  $Password=mysqli_escape_string($con, $_POST['password']);
  $admin="admin";
  $adjudicator="adjudicator";
  $grader1="grader1";
  $grader2="grader2";
  // $QC="QC";
  $QEC="QEC";
  
 ;

  $query="SELECT * FROM user WHERE username='$Username' AND password='$Password' AND type='admin'";
  $run_admin=mysqli_query($con,$query);
  $result_admin=mysqli_fetch_array($run_admin);
  $check_admin=mysqli_num_rows($run_admin);
  $query_adjudicator="SELECT * FROM user WHERE username='$Username' AND password='$Password' AND type='adjudicator'";
  $run_adjudicator=mysqli_query($con,$query_adjudicator);
  $result_adjudicator=mysqli_fetch_array($run_adjudicator);
  $check_adjudicator=mysqli_num_rows($run_adjudicator);


  $query_grader1="SELECT * FROM user WHERE username='$Username' AND password='$Password' AND type='grader1'";
  $run_grader1=mysqli_query($con,$query_grader1);
  $result_grader1=mysqli_fetch_array($run_grader1);
  $check_grader1=mysqli_num_rows($run_grader1);

  $query_grader2="SELECT * FROM user WHERE username='$Username' AND password='$Password' AND type='grader2'";
  $run_grader2=mysqli_query($con,$query_grader2);
  $result_grader2=mysqli_fetch_array($run_grader2);
  $check_grader2=mysqli_num_rows($run_grader2);

   $query_QEC="SELECT * FROM user WHERE username='$Username' AND password='$Password' AND type='QEC'";
   $run_QEC=mysqli_query($con,$query_QEC);
   $result_QEC=mysqli_fetch_array($run_QEC);
   $check_QEC=mysqli_num_rows($run_QEC);
  

  if($check_admin == 1)
  {
     $_SESSION['username']=$result_admin['username'];
     $_SESSION['ID']=$result_admin['user_id'];
     $_SESSION['ROLE']=$result_admin['type'];
     $_SESSION['loged']=true;
      
     echo "<script>window.open('Admin/index.php','_self')</script>";
    

  }
  else if($check_adjudicator == 1)

  {
     $_SESSION['username']=$result_adjudicator['username'];
     $_SESSION['ID']=$result_adjudicator['user_id'];
     $_SESSION['ROLE']=$result_adjudicator['type'];
     $_SESSION['loged']=true;

     echo "<script>window.open('Adjucator/index.php?tab=cfp_oct_subject','_self')</script>";

  }
  else if($check_grader1==1)
  {  
    $_SESSION['username']=$result_grader1['username'];
    $_SESSION['ID']=$result_grader1['user_id'];
    $_SESSION['ROLE']=$result_grader1['type'];
    $_SESSION['loged']=true;
    
      echo "<script>window.open('grading1/index.php?tab=cfp_oct_subject','_self')</script>";

  }
  else if($check_grader2==1)
  {  
    $_SESSION['username']=$result_grader2['username'];
     $_SESSION['ID']=$result_grader2['user_id'];
     $_SESSION['ROLE']=$result_grader2['type'];
     $_SESSION['loged']=true;
     echo "<script>window.open('grading2/index.php?tab=cfp_oct_subject','_self')</script>";

  }
  else if($check_QEC==1)
  {
    $_SESSION['username']=$result_QEC['username'];
     $_SESSION['ID']=$result_QEC['user_id'];
     $_SESSION['ROLE']=$result_QEC['type'];
     $_SESSION['loged']=true;
     echo "<script>window.open('Qec/list_cfp.php?tab=cfp','_self')</script>";
  }

  else
  {
    echo "<script>alert('username or password inccorect')</script>";
  }

}








 ?>

















 