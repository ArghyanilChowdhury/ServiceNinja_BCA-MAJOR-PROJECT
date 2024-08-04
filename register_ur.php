<?php
session_start();
include("dbconn.php");
$user_otp=$_POST['user_otp'];
$user_email = $_SESSION['user_email'];

$sql="select User_EmailOTP from userdetails where User_Email='$user_email'";
$urotp=mysqli_query($con,$sql);
$ursotp=mysqli_fetch_assoc($urotp);
if($ursotp['User_EmailOTP']==$user_otp){
    $sql="update userdetails set User_EmailOTP='' where User_Email='$user_email'";
    if(mysqli_query($con,$sql)){
          echo "<script>alert('User Registration Successful');window.location.href='userlogin.php'</script>";
          session_unset();
        }
        else{
            echo "<script>alert('Sorry, User Registration Failed. Please Try Again!!');window.location.href='userregistration.php'</script>";
            session_unset();
        }   
    }
    else{
        $sql="delete from userdetails where User_Email='$user_email'";
        if(mysqli_query($con,$sql)){
        echo "<script>alert('Invalid OTP provided. Please fill up the Registration Form again to register yourself Successfully.');window.location.href='userregistration.php'</script>";
        session_unset();
    }
        else{
        echo "<script>alert('There is some error in our website. Sorry for Inconvenience. Please Try Again Later!!');window.location.href='userregistration.php'</script>";
        session_unset();
    }
}
?>