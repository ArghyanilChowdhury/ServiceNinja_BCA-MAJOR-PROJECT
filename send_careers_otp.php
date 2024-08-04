<?php
session_start();
include("dbconn.php");
include("email_careers.php");
$candemail=$_POST["candemail"];
$sql="select * from jobreqs where AppEmail='$candemail'";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==0){
    if($_FILES["image"]["error"] === 4){
        echo "<script> alert('Image Does Not Exist');window.location.href='workwithus.php' </script>";
    }
    else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if(!in_array($imageExtension, $validImageExtension)){
            echo "<script> alert('Invalid Image Format');window.location.href='workwithus.php' </script>";
        }
        else if($fileSize > 3145728){
            echo "<script> alert('Image Size should be within 3 MB');window.location.href='workwithus.php' </script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            
            move_uploaded_file($tmpName, 'candimage/' . $newImageName);
            
            if($_FILES["cv"]["error"] === 4){
                echo "<script> alert('Please Insert Your CV');window.location.href='workwithus.php' </script>";
              }
            else{
                $fileName = $_FILES["cv"]["name"];
                $fileSize = $_FILES["cv"]["size"];
                $tName = $_FILES["cv"]["tmp_name"];
        
                $validCVExtension = ['pdf'];
                $CVExtension = explode('.', $fileName);
                $CVExtension = strtolower(end($CVExtension));
        
                if(!in_array($CVExtension, $validCVExtension)){
                    echo "<script> alert('Invalid CV Format');window.location.href='workwithus.php' </script>";
                }
                else if($fileSize > 10000000){
                    echo "<script> alert('CV File Size should be within 9.5 MB');window.location.href='workwithus.php' </script>";
                }
                else{
                    $newCVName = uniqid();
                    $newCVName .= '.' . $CVExtension;
                    move_uploaded_file($tName, 'candcv/' . $newCVName);

                    $otp=rand(1111,9999);
                    send_otp($candemail,"OTP from Service Ninja to Verify Email Address and Submit Application Form",$otp);
                    $fn=$_POST['firstname'];
                    $mn=$_POST['middlename'];
                    $ln=$_POST['lastname'];
                    $gen=$_POST['gender'];
                    $coun=$_POST['country'];
                    $s=$_POST['state'];

                    

                    $sql="insert into jobreqs (AppID, AppFirstName, AppMiddleName, AppLastName, AppGender, AppCountry, AppState, AppEmail, AppEmailOTP, AppPhoto, AppCV) values('', '$fn', '$mn', '$ln', '$gen', '$coun', '$s', '$candemail', '$otp', '$newImageName', '$newCVName')";
                    
                    if(mysqli_query($con,$sql))
                    {
                        echo "<script>alert('OTP Sent Successfully. Please Check Your Email');window.location.href='verify_careers_mail.php'</script>";
                        $_SESSION['candemail'] = $candemail;
                    }
                    else{
                        echo "<script>alert('Sorry, we are unable to sent an OTP to your Email. Please Try Again!!');window.location.href='workwithus.php'</script>";
                    }

                }
            }
        }
    }
}
else{
    echo "<script>alert('Email Address already registered. You cannot apply more than once at a time. We will notify about your application status soon.');window.location.href='workwithus.php'</script>";
}
?>