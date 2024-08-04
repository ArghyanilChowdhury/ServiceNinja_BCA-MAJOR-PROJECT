<?php
include("usersession.php");
include("dbconn.php");
$err = "";
$ses = "";
$scn = $_POST['scn'];
$sen = $_POST['sen'];
$sep = $_POST['sep'];
$ufn = $_POST['ufn'];
$uln = $_POST['uln'];
$ust = $_POST['ust'];
$uadr = $_POST['uadr'];
$uem = $_POST['uem'];
$uphnpo = $_POST['uphnpo'];
$sday = $_POST['sday'];
$stime = $_POST['stime'];
$mssg = $_POST['mssg'];

if(preg_match("/^\d+\.?\d*$/",$uphnpo) && strlen($uphnpo)==10)
{
    $otp = rand(111111,999999);

    $fields = array(
        "variables_values" => "$otp",
        "route" => "otp",
        "numbers" => "$uphnpo",
    );
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($fields),
      CURLOPT_HTTPHEADER => array(
        "authorization: Fast2SMS API KEY",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $data = json_decode($response);
      $sts = $data->return;
      if($sts == false){
        echo "<script> alert('OTP Not Send Due to an Error. Please Try Again!!'); window.location.href='user_dashboard.php' </script>";
      }else{
        do {
            $order_id = bin2hex(random_bytes(2));
            $check_query = "SELECT * FROM order_req WHERE order_id = '$order_id'";
            $idres = mysqli_query($con, $check_query);
        } while(mysqli_num_rows($idres) > 0);

        $insert_query = "INSERT INTO order_req (sl_no, order_id, order_SCN, order_SEN, order_SEP, order_UFN, order_ULN, order_UST, order_UADR, order_UEM, order_UPHNO, order_UPHNOTP, order_SDAY, order_STIME, order_MSSG) VALUES ('', '$order_id', '$scn', '$sen', '$sep', '$ufn', '$uln', '$ust', '$uadr', '$uem', '$uphnpo', '$otp', '$sday', '$stime', '$mssg')";

        if(mysqli_query($con, $insert_query)) {
            echo "<script> alert('OTP Send Successfully. Please Check Your Mobile.'); window.location.href='user_phno_ver_field.php' </script>";
            $_SESSION['order_id'] = $order_id;
        } else {
            echo "<script> alert('OTP Not Send Due to an Unwanted Error. We are Working on that. Please Try After Some Time!!'); window.location.href='user_dashboard.php' </script>";
        }

      }
    }
}
else{
    echo "<script> alert('Invalid Phone Number. Please Try Again!!'); window.location.href='user_dashboard.php' </script>";
}
?>