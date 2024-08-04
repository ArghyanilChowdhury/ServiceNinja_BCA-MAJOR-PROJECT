<?php 
session_start();
$username = $_SESSION['username'];
if($username == true)
{

}
else
{
    echo "<script>window.location.href='userlogin.php'; </script>";
}
?>