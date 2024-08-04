<?php
session_start();
include("dbconn.php");
$un = $_POST['un'];
$p = $_POST['p'];

    $nq = "SELECT User_Firstname FROM userdetails WHERE User_Username = '$un'";

    $rs = mysqli_query($con, $nq);

    $data=mysqli_fetch_assoc($rs);

    $fin= $data['User_Firstname'];

    $nq = "SELECT User_Lastname FROM userdetails WHERE User_Username = '$un'";

    $rs = mysqli_query($con, $nq);

    $data=mysqli_fetch_assoc($rs);

    $lan= $data['User_Lastname'];

    $fun = $fin ." ".$lan;

$q = "SELECT * FROM userdetails WHERE User_Username = '$un' && User_Password = '$p' ";
$d = mysqli_query($con, $q);

$t = mysqli_num_rows($d);

if($t == 1)
{
    $_SESSION['username'] = $un;
    $_SESSION['fullname'] = $fun;

    if(isset($_POST['remember_me'])){
        setcookie('uname',$_POST['un'],time() + (60*60*24));
    }
    else{
        setcookie('uname','',time() - (60*60*24));
    }

    echo "<script>alert('Welcome $fun'); window.location.href='user_dashboard.php' </script>";
}
else
{
    echo "<script>alert('Login Failed. Invalid Credentials');window.location.href='userlogin.php'</script>";
}
?>