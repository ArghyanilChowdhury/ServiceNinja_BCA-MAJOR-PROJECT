<?php
session_start();
include("dbconn.php");
    $fpem=$_SESSION['fpemail'];
    $vc=$_POST['fpvc'];
    $c="select * from userdetails where User_Email='$fpem' and User_EmailOTP='$vc'";
    $r=mysqli_query($con,$c);
    if(mysqli_num_rows($r)>0){
        $sql="update userdetails set User_EmailOTP='' where User_Email='$fpem'";
        if(mysqli_query($con,$sql)){
            echo "<script>alert('Email Address Verified!!');window.location.href='fp_passpage.php'</script>";
        }
        else{
            $sql="update userdetails set User_EmailOTP='' where User_Email='$fpem'";
            echo "<script>alert('Incorrect Verification Code!! Please Try Again.');window.location.href='userlogin.php'</script>";
        }
    }
?>