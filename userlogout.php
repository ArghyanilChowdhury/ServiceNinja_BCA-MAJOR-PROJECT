<?php
session_start();
session_unset();
session_destroy();
echo "<script>alert('Thank You for Interacting with Us!!'); window.location.href='userlogin.php' </script>";
?>