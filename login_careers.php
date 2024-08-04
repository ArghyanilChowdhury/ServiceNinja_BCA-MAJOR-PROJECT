<?php
session_start();
include("dbconn.php");
$candotp=$_POST['candotp'];
$candemail=$_SESSION['candemail'];


$sql="select AppEmailOTP from jobreqs where AppEmail='$candemail'";
$rs=mysqli_query($con,$sql);
$rc=mysqli_fetch_assoc($rs);
if($rc['AppEmailOTP']==$candotp){
    $sql="update jobreqs set AppEmailOTP='' where AppEmail='$candemail'";
    if(mysqli_query($con,$sql))
        {
            echo "<script>alert('Application form Submitted Successfully. We will notify you about your application status after few days. Thank You for Interacting With Us!!');window.location.href='workwithus.php'</script>";
            session_unset();
        }
        else{
            echo "<script>alert('Application form Submission Failed. Please Try Again!!');window.location.href='workwithus.php'</script>";
            session_unset();
        }
    }
else{
    $sql="delete from jobreqs where AppEmail='$candemail'";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Invalid OTP provided. Please fill up the Application Form again to submit your Application Successfully.');window.location.href='workwithus.php'</script>";
        session_unset();
    }
    else{
        echo "<script>alert('There is some error in our website. Sorry for Inconvenience. Please Try Again Later!!');window.location.href='workwithus.php'</script>";
        session_unset();
    }
}
?>