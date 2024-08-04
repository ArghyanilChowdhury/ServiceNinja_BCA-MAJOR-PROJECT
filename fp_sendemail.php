<?php
session_start();
include("dbconn.php");
$fpem=$_POST["fpemail"];
$check="select * from userdetails where User_Email='$fpem'";
$status=mysqli_query($con,$check);
if((mysqli_num_rows($status)>0)){
    include("fp_email.php");
    $vc=rand(111111,999999);
    send_otp_fp($fpem,"Verification Code from Service Ninja to Verify Email Address and Register Your New Password.",$vc);
    $_SESSION['fpemail']=$fpem;
    $input="update userdetails set User_EmailOTP='$vc' where User_Email='$fpem'";
    if(mysqli_query($con,$input)){
        echo "<script>alert('A Verification Code has been sent to your Email. Please Check Your Email');window.location.href='verify_fp_mail.php'</script>";
    }
    else{
        echo "<script>alert('There is some error in our website. Please Try Again Later!!');window.location.href='userlogin.php'</script>";
    }
}
else{
    echo "<script>alert('Given Email Does Not Exist or Email Not Provided.');window.location.href='userlogin.php'</script>";
}
?>