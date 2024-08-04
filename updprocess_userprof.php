<?php
include("usersession.php");    
include("dbconn.php");


$user_upfirstname = $_POST['user_upfirstname'];
$user_upmiddlename = $_POST['user_upmiddlename'];
$user_uplastname = $_POST['user_uplastname'];
$user_upcountry = $_POST['user_upcountry'];
$user_upstate = $_POST['user_upstate'];
$user_upemail = $_POST['user_upemail'];
$user_upusername = $_POST['user_upusername'];
$user_uppassword = $_POST['user_uppassword'];
$user_upconpassword = $_POST['user_upconpassword'];

if($user_uppassword != $user_upconpassword) {
    echo "<script> alert('Passwords do not match.Please Try Again!!');window.location.href='userdashboard.php' </script>";
    exit;
}

$sql = "UPDATE userdetails SET User_Firstname='$user_upfirstname', User_Middlename='$user_upmiddlename', User_Lastname='$user_uplastname', User_Country='$user_upcountry', User_State='$user_upstate', User_Username='$user_upusername', User_Password='$user_uppassword'";

if(isset($_FILES['user_upimage']) && $_FILES['user_upimage']['size'] > 0)
    {
        $fileName = $_FILES["user_upimage"]["name"];
        $fileSize = $_FILES["user_upimage"]["size"];
        $tmpName = $_FILES["user_upimage"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if(!in_array($imageExtension, $validImageExtension)){
            echo "<script> alert('Invalid Image Format');window.location.href='user_dashboard.php' </script>";
        }
        else if($fileSize > 3145728){
            echo "<script> alert('Image Size should be within 3 MB');window.location.href='user_dashboard.php' </script>";
        }
        
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            
            move_uploaded_file($tmpName, 'userimg/' . $newImageName);

            $sql .= ", User_Image='$newImageName'";
    }

    $sql .= " WHERE User_Email='$user_upemail'";

if(mysqli_query($con,$sql))
{
    echo "<script>alert('User Details Updated Successfully');window.location.href='user_dashboard.php'</script>";
}
else
{
    echo "<script>alert('Sorry, we are unable to update user details. Please Try Again!!');window.location.href='user_dashboard.php'</script>";
}
?>