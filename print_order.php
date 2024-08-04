<?php include("session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <script>
        function printAndRedirect() {
            window.print();
            setTimeout(function() {
                window.location.href = 'service_orders.php';
            }, 5000); // 2000 milliseconds = 2 seconds
        }
    </script>
</head>

<body onload="printAndRedirect();">
    <h1>
        <center>Service Ninja<center>
    </h1>
    <h2>
        <center>Bill Invoice for Technicians<center>
    </h2>
    <center>
        <table border="1">
            <?php
            $ordno=$_GET['q'];
            $pdfsel = "SELECT order_id, order_UFN, order_ULN, order_SCN, order_SEN, order_SEP, order_UST, order_UADR, order_UEM, order_UPHNO, order_SDAY, order_STIME, order_MSSG, asgn_tech FROM order_req WHERE order_id='$ordno'";
            $pdfres = mysqli_query($con, $pdfsel);
            while ($row = mysqli_fetch_assoc($pdfres)) {
                $ufin = $row['order_UFN'];
                $ulan = $row['order_ULN'];
                $ufn = $ufin . " " . $ulan;
            ?>
                <tr>
                    <th>
                        <h4>Order ID</h4>
                    </th>
                    <td><?php echo $row['order_id']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Requester Name</h4>
                    </th>
                    <td><?php echo $ufn; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Category</h4>
                    </th>
                    <td><?php echo $row['order_SCN']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Name</h4>
                    </th>
                    <td><?php echo $row['order_SEN']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Price</h4>
                    </th>
                    <td><?php echo $row['order_SEP']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Requester State</h4>
                    </th>
                    <td><?php echo $row['order_UST']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Requester Address</h4>
                    </th>
                    <td><?php echo $row['order_UADR']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Requester Email</h4>
                    </th>
                    <td><?php echo $row['order_UEM']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Requester Phone Number</h4>
                    </th>
                    <td><?php echo $row['order_UPHNO']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Preferred Day for Service</h4>
                    </th>
                    <td><?php echo $row['order_SDAY']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Preferred Time</h4>
                    </th>
                    <td><?php echo $row['order_STIME']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Message by User</h4>
                    </th>
                    <td><?php echo $row['order_MSSG']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Technician Name, Email Address and Phone Number</h4>
                    </th>
                    <td><?php echo $row['asgn_tech']; ?></td>
                </tr>
                <tr>
                    <th>
                        <h4>Service Requester Signature (Please Sign After you have successfully received the service)</h4>
                    </th>
                    <td> </td>
                </tr>
                <tr>
                    <th>
                        <h4>Technician Signature</h4>
                    </th>
                    <td> </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>

</html>
