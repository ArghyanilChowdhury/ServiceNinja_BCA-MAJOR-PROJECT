<?php
include('session.php');
include("dbconnection.php");
$catno=$_GET['q'];

        //$updatequery="insert into stu values('','$name','$dept','$rno')";
        //$updatequery="UPDATE stu SET dept='$newdept',roll='$newrno' WHERE roll='$oldrno' AND dept='$olddept' AND name='$name'";
        $dquery="DELETE FROM admindetails WHERE AdminID='$catno'";
        if(mysqli_query($con,$dquery))
        {
            echo "<script>alert('Delete successfull');window.location.href='admin_details.php'</script>";

        }
        else
        {
            echo "<script>alert('Delete failed');window.location.href='admin_details.php'</script>";
        }
    
    ?>