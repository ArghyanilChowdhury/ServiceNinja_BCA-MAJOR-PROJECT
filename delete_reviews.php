<?php
include('session.php');
include("dbconnection.php");
$revno=$_GET['q'];

        //$updatequery="insert into stu values('','$name','$dept','$rno')";
        //$updatequery="UPDATE stu SET dept='$newdept',roll='$newrno' WHERE roll='$oldrno' AND dept='$olddept' AND name='$name'";
        $dquery="DELETE FROM review_table WHERE review_id='$revno'";
        if(mysqli_query($con,$dquery))
        {
            echo "<script>alert('Delete successfull');window.location.href='reviews.php'</script>";

        }
        else
        {
            echo "<script>alert('Delete failed');window.location.href='reviews.php'</script>";
        }
    
    ?>