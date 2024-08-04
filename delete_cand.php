<?php
include('session.php');
include("dbconnection.php");
$candno=$_GET['q'];

        //$updatequery="insert into stu values('','$name','$dept','$rno')";
        //$updatequery="UPDATE stu SET dept='$newdept',roll='$newrno' WHERE roll='$oldrno' AND dept='$olddept' AND name='$name'";
        $dquery="DELETE FROM jobreqs WHERE AppID='$candno'";
        if(mysqli_query($con,$dquery))
        {
            echo "<script>alert('Delete successfull');window.location.href='short_cand.php'</script>";

        }
        else
        {
            echo "<script>alert('Delete failed');window.location.href='short_cand.php'</script>";
        }
    
    ?>