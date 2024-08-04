<?php 
session_start();
$emailid = $_SESSION['email_addr'];
if($emailid == true)
{

}
else
{
    echo "<script>window.location.href=' /Service Ninja.com/USER SECTION/adminlogin.php'; </script>";
}
?>