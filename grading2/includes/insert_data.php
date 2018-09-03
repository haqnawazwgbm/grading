<?php 

require 'connection.php';


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
$ActiveRetinalOs=htmlentities($_POST['active_retinal_os']);
$VitreousOS=htmlentities($_POST['vitreous_os']);
$FbFindingOS=htmlentities($_POST['fb_finding_os']);
$CommentsOS1=htmlentities($_POST['comments_os1']);


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
$VL7OS=htmlentities($_POST['VL7'])

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



$Sql="INSERT INTO grading1_fp (


subject_id,user_id, visit_name, images_received_od,fundus_photos_od,reflex_image_od,
media_opacities_od, opacity_interferes_with_view_od,confidence_score_on_fp_od,
comments_od,location_od, magnification_od,fundus_photos_os, reflex_image_os, media_opacities_os, opacity_interferes_with_view_os, confidence_score_on_fp_os,comments_os,location_os, magnification_os,pdr_od, active_retinal_neovascularization_od, 
vitreous_hemorrhage_od,fp_findings_od,pdr_os, active_retinal_neovascularization_os,vitreous_hemorrhage_os,fp_findings_os,comments_od1,comments_os1,
F1_MA_OD, F1_HE_OD, F1_SE_OD, F1_VL_OD, F1_RH_OD, F1_VB_OD, F1_IRMA_OD, F2_MA_OD, F2_HE_OD, F2_SE_OD, F2_VL_OD, F2_RH_OD, F2_VB_OD, F2_IRMA_OD, F3_MA_OD, F3_HE_OD, F3_SE_OD,F3_VL_OD,F3_RH_OD,F3_VB_OD,F3_IRMA_OD,F4_MA_OD,F4_HE_OD,F4_SE_OD,F4_VL_OD,F4_RH_OD,F4_VB_OD,F4_IRMA_OD,F5_MA_OD,F5_HE_OD,F5_SE_OD,F5_VL_OD,F5_RH_OD,F5_VB_OD,F5_IRMA_OD,F5_MA_OD,F5_HE_OD,F5_SE_OD,F5_VL_OD,F5_RH_OD,F5_VB_OD,F5_IRMA_OD,F6_MA_OD,F6_HE_OD,F6_SE_OD,F6_VL_OD,F6_RH_OD,F6_VB_OD,F6_IRMA_OD,F7_MA_OD,F7_HE_OD,F7_SE_OD,F7_VL_OD,F7_RH_OD,F7_VB_OD,F7_IRMA_OD,F1_MA_OS,F1_HE_OS,F1_SE_OS,F1_VL_OS,F1_RH_OS,F1_VB_OS,F1_IRMA_OS,F2_MA_OS,F2_HE_OS,F2_SE_OS,F2_VL_OS,F2_RH_OS,F2_VB_OS,F2_IRMA_OS,F3_MA_OS,F3_HE_OS,F3_SE_OS,F3_VL_OS,F3_RH_OS,F3_VB_OS,F3_IRMA_OS,F4_MA_OS,F4_HE_OS,F4_SE_OS,F4_VL_OS,F4_RH_OS,F4_VB_OS,F4_IRMA_OS,F5_MA_OS,F5_HE_OS,F5_SE_OS,
F5_VL_OS,F5_RH_OS,F5_VB_OS,F5_IRMA_OS,F6_MA_OS,F6_HE_OS,F6_SE_OS,F6_VL_OS,F6_RH_OS,F6_VB_OS,F6_IRMA_OS,F7_MA_OS,F7_HE_OS,F7_SE_OS,F7_VL_OS,F7_RH_OS,  F7_VB_OS,F7_IRMA_OS)

VALUES(

'$SubjectID','$UserId','$VisitName','$ImageRecived','$FundusPhotoOD','$ImageReflexOD','$MediaOD','$OpacityIntereferOD','$ConfidenceOD',
 '$CommentsOD','$LocationOD','$MagnificationOD','$FundusPhotoOS','$ImageReflexOS','$MediaOS','$OpacityIntereferOS','$ConfidenceOS','$CommentsOS',
 '$LocationOS','$MagnificationOS','$PdrOD','$ActiveRetinalOD','$VitreousOD','$FbFindingOD','$PdrOS','$ActiveRetinalOs','$VitreousOS','$FbFindingOS',
 '$CommentsOD1','$CommentsOS1','$MA1OD','$HE1OD','$SE1OD','$VL1OD','$RH1OD','$VB1OD','$IRMA1OD','$MA2OD','$HE2OD','$SE2OD','$VL2OD','$RH2OD','$VB2OD',
 '$IRMA2OD','$MA3OD','$HE3OD','$SE3OD','$VL3OD','$RH3OD','$VB3OD','$IRMA3OD,'$MA4OD','$HE4OD','$SE4OD','$VL4OD','$RH4OD','$VB4OD','$IRMA4OD','$MA5OD','$HE5OD','$SE5OD','$VL5OD','$RH5OD','$VB5OD','$IRMA5OD','$MA6OD','$HE6OD','$SE6OD','$VL6OD','$RH6OD','$VB6OD','$IRMA6OD','$MA6OD','$HE6OD','$SE6OD','$VL6OD','$RH6OD','$VB6OD','$IRMA6OD','$MA7OD','$HE7OD','$SE7OD','$VL7OD','$RH7OD','$VB7OD','$IRMA7OD','$MA1OS','$HE1OS','$SE1OS','$VL1OS','$RH1OS','$VB1OS','$IRMA1OS','$MA2OS','$HE2OS','$SE2OS','$VL2OS','$RH2OS','$VB2OS',
 '$IRMA2OS','$MA3OS','$HE3OS','$SE3OS','$VL3OS','$RH3OS','$VB3OS','$IRMA3OS,'$MA4OS','$HE4OS','$SE4OS','$VL4OS','$RH4OS','$VB4OS','$IRMA4OS','$MA5OS','$HE5OS','$SE5OS','$VL5OS','$RH5OS','$VB5OS','$IRMA5OS','$MA6OS','$HE6OS','$SE6OS','$VL6OS','$RH6OS','$VB6OS','$IRMA6OS','$MA6OS','$HE6OS','$SE6OS','$VL6OS','$RH6OS','$VB6OS','$IRMA6OS','$MA7OS','$HE7OS','$SE7OS','$VL7OS','$RH7OS','$VB7OS','$IRMA7OS')";





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