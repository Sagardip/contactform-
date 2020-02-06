<?php

include("../upload.php");
include("../module/contact.php");
include("../function/function.php");
include("../Controller/Dbcontext.php");

if (isset($_POST['registered'])){
$uname=stripslashes($_POST['name']);
$uemail=stripslashes($_POST['email']);
$upassword=stripslashes($_POST['password']);
$upassword=stripslashes($_POST['password']);

$sqladd = "INSERT INTO admin (uname,uemail,upassword,userphoto)
           VALUES('$uname','$uemail','".md5($upassword)."','$path')";
if(mysqli_query($con, $sqladd)){
  $_SESSION['uname'] = $uname;
  header("Location:login.php");

} else{
    echo "ERROR: Could not able to execute $sqladd. " . mysqli_error($con);
}

 mysqli_close($con);
}?>

