<?php
include('session.php');
include("dbconnection.php");
$ordno=$_GET['q'];

        //$updatequery="insert into stu values('','$name','$dept','$rno')";
        //$updatequery="UPDATE stu SET dept='$newdept',roll='$newrno' WHERE roll='$oldrno' AND dept='$olddept' AND name='$name'";
        $uquery="UPDATE order_req SET order_stat = 'COMPLETED' where order_id = '$ordno'";
        if(mysqli_query($con,$uquery))
        {
            echo "<script>alert('Service Status Changed Successfully');window.location.href='service_orders.php'</script>";

        }
        else
        {
            echo "<script>alert('Service Status Cannot Changed due to some error');window.location.href='service_orders.php'</script>";
        }
    
    ?>