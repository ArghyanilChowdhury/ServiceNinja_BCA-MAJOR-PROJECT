<?php
session_start();
include("dbconn.php");
include("email_ur.php");
$user_password=$_POST['user_password'];
$user_conpassword=$_POST['user_conpassword'];
$user_email=$_POST['user_email'];
$user_username=$_POST['user_username'];
$sql="select * from userdetails where User_Email='$user_email'";
$rs=mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==0){
    $sql="select * from userdetails where User_Username='$user_username'";
    $rs=mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)==0){
        if($user_password==$user_conpassword)
        {
            if($_FILES["user_image"]["error"] === 4)
            {
                echo "<script> alert('Please Insert Your Image');window.location.href='userregistration.php' </script>";
            }
            else
            {
                $fileName = $_FILES["user_image"]["name"];
                $fileSize = $_FILES["user_image"]["size"];
                $tmpName = $_FILES["user_image"]["tmp_name"];

                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));

                if(!in_array($imageExtension, $validImageExtension)){
                    echo "<script> alert('Invalid Image Format');window.location.href='userregistration.php' </script>";
                }
                else if($fileSize > 3145728){
                    echo "<script> alert('Image Size should be within 3 MB');window.location.href='userregistration.php' </script>";
                }
                else{
                    $newImageName = uniqid();
                    $newImageName .= '.' . $imageExtension;

                    move_uploaded_file($tmpName, 'userimg/' . $newImageName);

                    $otp=rand(1111,9999);
                    send_otp_ur($user_email,"OTP from Service Ninja to Verify Email Address and Register Yourself.",$otp);

                    $user_firstname=$_POST['user_firstname'];
                    $user_middlename=$_POST['user_middlename'];
                    $user_lastname=$_POST['user_lastname'];
                    $user_gender=$_POST['user_gender'];
                    $user_country=$_POST['user_country'];
                    $user_state=$_POST['user_state'];
                

                    $sql="insert into userdetails (UserID, User_Firstname, User_Middlename, User_Lastname, User_Gender, User_Country, User_State, User_Email, User_EmailOTP, User_Image, User_Username, User_Password) values('', '$user_firstname', '$user_middlename', '$user_lastname', '$user_gender', '$user_country', '$user_state', '$user_email', '$otp', '$newImageName', '$user_username', '$user_password')";
                    if(mysqli_query($con,$sql))
                    {
                        echo "<script>alert('OTP Sent Successfully. Please Check Your Email');window.location.href='verify_ur_mail.php'</script>";
                        $_SESSION['user_email'] = $user_email;
                    }
                    else{
                        echo "<script>alert('Sorry, We are unable to sent an OTP to your Email. Please Try Again!!');window.location.href='userregistration.php'</script>";
                    }
                }
            }
        }
        else
        {
            "<script>alert('Password Mismatched. Please Try Again!!');window.location.href='userregistration.php'</script>";
        }
    }
    else{
        echo "<script>alert('Given Username is already registered by another user. Please choose another username to continue.');window.location.href='userregistration.php'</script>";
    }
    
}
else{
    echo "<script>alert('Given Email is already registered by another user. Please choose another email to continue.');window.location.href='userregistration.php'</script>";
}
?>