<?php 
include("upload.php");
include("module/contact.php");
include("function/function.php");
include("Controller/Dbcontext.php");

if (isset($_POST['form_submitted'])){
$email=$_POST['useremail1'];
$sname= $_POST['firstname'];
$message=$_POST['message'];
$sqladd = "INSERT INTO appform (sname,semail,smessage,files) 
           VALUES('$sname','$email','$message','$path')";
if(mysqli_query($con, $sqladd)){
  Redirect_to("successmsg.php");

} else{
    echo "ERROR: Could not able to execute $sqladd. " . mysqli_error($con);
}

 mysqli_close($con);
}?>