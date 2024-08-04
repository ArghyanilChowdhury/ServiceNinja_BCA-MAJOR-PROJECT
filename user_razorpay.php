<?php
include('usersession.php');
include('dbconn.php');
$unootp = $_POST['unootp'];
$order_id = $_SESSION['order_id'];

$sel_query = "select order_UPHNOTP from order_req where order_id='$order_id'";
$phver_otp = mysqli_query($con,$sel_query);
$phver_res = mysqli_fetch_assoc($phver_otp);

if($phver_res['order_UPHNOTP']==$unootp){
    $sql="update order_req set order_UPHNOTP='', order_stat='PENDING' where order_id='$order_id'";
    if(mysqli_query($con,$sql)){
          echo "<script>alert('Your Order Has Been Placed. Please Download Your Invoice and take a printout of it as it will needed for Future References.');window.location.href='invoice_table.php'</script>";
          
        }
        else{
            echo "<script>alert('Sorry, your Order is not placed due to some error. Please Try After Sometime!!');window.location.href='user_dashboard.php'</script>";
            
        }   
    }
    else{
        $sql_orderdel="delete from order_req where order_id='$order_id'";
        if(mysqli_query($con,$sql_orderdel)){
        echo "<script>alert('Invalid OTP provided. Please fill up the choosen service form again.');window.location.href='user_dashboard.php'</script>";
        
    }
        else{
        echo "<script>alert('There is some error in our website. Sorry for Inconvenience. Please Try Again Later!!');window.location.href='user_dashboard.php'</script>";
        
    }
}
?>
