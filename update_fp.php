<?php
session_start();
include("dbconn.php");
$up=$_POST['up'];
$confup=$_POST['confup'];
if($up==$confup)
{
    $fpem=$_SESSION['fpemail'];
    $up="update userdetails set User_Password='$up' where User_Email='$fpem'";
    if(mysqli_query($con,$up)){
        echo "<script>alert('Password Updated!! You can now Login to your Account.');window.location.href='userlogin.php'</script>";
    }
    else{
        echo "<script>alert('An Error occured in our website. Please Try Again After Some Time.');window.location.href='userlogin.php'</script>";
    }
}
else{
    echo "<script>alert('Password Mismatched! Please Try Again.');window.location.href='fp_passpage.php'</script>";
}
?>