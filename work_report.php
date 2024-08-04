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
                window.location.href = 'index.php';
            }, 5000); // 2000 milliseconds = 2 seconds
        }
    </script>
</head>

<body onload="printAndRedirect();">
    <h1>
        <center>Service Ninja<center>
    </h1>
    <h2>
        <center>Work Analytics Report<center>
    </h2>
    <center>
        <table border="1">
            <?php
            $uc = "SELECT COUNT(*) AS user_count FROM userdetails";
            $ruc = mysqli_query($con, $uc);
            $rouc = mysqli_fetch_assoc($ruc);
            ?>
            <tr>
                <th>
                    <h4>Total Users</h4>
                </th>
                <td><?php echo $rouc['user_count']; ?></td>
            </tr>
            <?php
            $tc = "SELECT COUNT(*) AS tech_count FROM techniciandetails";
            $rtc = mysqli_query($con, $tc);
            $rotc = mysqli_fetch_assoc($rtc);
            ?>
            <tr>
                <th>
                    <h4>Total Technicians</h4>
                </th>
                <td><?php echo $rotc['tech_count']; ?></td>
            </tr>
            <?php
            $tstc = "SELECT COUNT(*) AS rev_count FROM review_table";
            $rtstc = mysqli_query($con, $tstc);
            $rotst = mysqli_fetch_assoc($rtstc);
            ?>
            <tr>
                <th>
                    <h4>Total Testimonials</h4>
                </th>
                <td><?php echo $rotst['rev_count']; ?></td>
            </tr>
            <?php
            $cc = "SELECT COUNT(*) AS cat_count FROM categorydetails";
            $rcc = mysqli_query($con, $cc);
            $rocc = mysqli_fetch_assoc($rcc);
            ?>
            <tr>
                <th>
                    <h4>Total Categories</h4>
                </th>
                <td><?php echo $rocc['cat_count']; ?></td>
            </tr>
            <?php
            $sc = "SELECT COUNT(*) AS serv_count FROM addservicedetails";
            $rsc = mysqli_query($con, $sc);
            $rosc = mysqli_fetch_assoc($rsc);
            ?>
            <tr>
                <th>
                    <h4>Total Services</h4>
                </th>
                <td><?php echo $rosc['serv_count']; ?></td>
            </tr>
            <?php
            $csc = "SELECT COUNT(*) AS comp_count FROM order_req WHERE order_stat = 'COMPLETED'";
            $rcsc = mysqli_query($con, $csc);
            $rocsc = mysqli_fetch_assoc($rcsc);
            ?>
            <tr>
                <th>
                    <h4>Total Number of Complete Service Orders</h4>
                </th>
                <td><?php echo $rocsc['comp_count']; ?></td>
            </tr>
            <?php
            $rsc = "SELECT COUNT(*) AS rej_count FROM order_req WHERE order_stat = 'REJECTED'";
            $rrsc = mysqli_query($con, $rsc);
            $rorsc = mysqli_fetch_assoc($rrsc);
            ?>
            <tr>
                <th>
                    <h4>Total Number of Rejected Service Orders</h4>
                </th>
                <td><?php echo $rorsc['rej_count']; ?></td>
            </tr>
            <?php
            $psc = "SELECT COUNT(*) AS pen_count FROM order_req WHERE order_stat = 'PENDING'";
            $rpsc = mysqli_query($con, $psc);
            $ropsc = mysqli_fetch_assoc($rpsc);
            ?>
            <tr>
                <th>
                    <h4>Total Number of Pending Service Orders</h4>
                </th>
                <td><?php echo $ropsc['pen_count']; ?></td>
            </tr>
            <?php
            $tnc = "SELECT asgn_tech, COUNT(*) AS tech_name 
            FROM order_req 
            WHERE order_stat = 'COMPLETED' 
            GROUP BY asgn_tech 
            ORDER BY tech_name DESC 
            LIMIT 1";
            $rtnc = mysqli_query($con, $tnc);
            $rotnc = mysqli_fetch_assoc($rtnc);
            ?>
            <tr>
                <th>
                    <h4>Technician Details who has the most Successful Deliveries</h4>
                </th>
                <td><?php echo $rotnc['asgn_tech']; ?></td>
            </tr>
            <?php
            $sql = "
            SELECT order_SEP 
            FROM order_req 
            WHERE order_stat = 'COMPLETED'
        ";

            $result = mysqli_query($con, $sql);

            $net_profit = 0;

            if ($result) {
                // Iterate over each row
                while ($row = mysqli_fetch_assoc($result)) {
                    // Extract the numeric part of the order_SEP value
                    $price_string = $row['order_SEP'];
                    $price_number = preg_replace('/[^0-9]/', '', $price_string);

                    // Add to the net profit
                    $net_profit += (int)$price_number;
                }
            }
            ?>
            <tr>
                <th>
                    <h4>Net Profit</h4>
                </th>
                <td><?php echo "Rs. " . $net_profit; ?></td>
            </tr>
            <?php
            $rtrc = "SELECT COUNT(*) AS review_count 
            FROM review_table 
            WHERE user_rating >= 3";
            $rrtrc = mysqli_query($con, $rtrc);
            $rortrc = mysqli_fetch_assoc($rrtrc);
            ?>
            <tr>
                <th>
                    <h4>Total Number of Reviews (Greater than or equal to 3)</h4>
                </th>
                <td><?php echo $rortrc['review_count']; ?></td>
            </tr>
            <?php
            $rlrc = "SELECT COUNT(*) AS lowreview_count 
            FROM review_table 
            WHERE user_rating <= 2";
            $rrlrc = mysqli_query($con, $rlrc);
            $rorlrc = mysqli_fetch_assoc($rrlrc);
            ?>
            <tr>
                <th>
                    <h4>Total Number of Reviews (Less than or equal to 2)</h4>
                </th>
                <td><?php echo $rorlrc['lowreview_count']; ?></td>
            </tr>
        </table>
    </center>
</body>

</html>