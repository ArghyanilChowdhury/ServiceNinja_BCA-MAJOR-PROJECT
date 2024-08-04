<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>
<?php
$cosq = "DELETE FROM order_req WHERE order_UPHNOTP IS NOT NULL AND order_UPHNOTP != ''";
$cosr=mysqli_query($con,$cosq);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Service Orders - Admin Portal - Service Ninja.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include("inc/header.php"); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include("inc/sidebar.php"); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <!--
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
-->
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Service Orders</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Service Category Name</th>
                                                <th>Service Name</th>
                                                <th>Service Price</th>
                                                <th>Service Status</th>
                                                <th>Requester Name</th>
                                                <th>Requester Full Address with State</th>
                                                <th>Requester Email</th>
                                                <th>Requester Phone Number</th>
                                                <th>Preferred Day & Time for Service</th>
                                                <th>Message by Requester</th>
                                                <th>Assigned Technician Name & Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $select = "select order_id, order_SCN, order_SEN, order_SEP, order_stat, order_UFN, order_ULN, order_UST, order_UADR, order_UEM, order_UPHNO, order_SDAY, order_STIME, order_MSSG, asgn_tech from order_req";
                                            $res = mysqli_query($con, $select);
                                            $c = 1;
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                $ufin = $row['order_UFN'];
                                                $ulan = $row['order_ULN'];
                                                $ufn = $ufin . " " . $ulan; //Requester Name
                                                $radd = $row['order_UADR'];
                                                $rst = $row['order_UST'];
                                                $rfa = $radd . " , " . $rst; //Requester Address
                                                $rpd = $row['order_SDAY'];
                                                $rpt = $row['order_STIME'];
                                                $rpdt = $rpd . " , " . $rpt; //Requester Preferred Day and Time
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['order_id']; ?></td>
                                                    <td><?php echo $row['order_SCN']; ?></td>
                                                    <td><?php echo $row['order_SEN']; ?></td>
                                                    <td><?php echo $row['order_SEP']; ?></td>
                                                    <td><?php echo $row['order_stat']; ?></td>
                                                    <td><?php echo $ufn; ?></td>
                                                    <td><?php echo $rfa; ?></td>
                                                    <td><?php echo $row['order_UEM']; ?></td>
                                                    <td><?php echo $row['order_UPHNO']; ?></td>
                                                    <td><?php echo $rpdt; ?></td>
                                                    <td><?php echo $row['order_MSSG']; ?></td>
                                                    <td><?php echo $row['asgn_tech']; ?></td>

                                                    <td>
                                                        <?php if ($row['order_stat'] == 'PENDING') { ?>
                                                            <span>
                                                                <?php if (empty($row['asgn_tech'])) { ?>
                                                                    <a href="reject_order.php?q=<?php echo $row['order_id']; ?>" data-toggle="tooltip" data-placement="top" title="Reject">
                                                                        <i class="fa fa-close color-red"></i>
                                                                    </a>
                                                                    <a href="assign_technician.php?q=<?php echo $row['order_id']; ?>" data-toggle="tooltip" data-placement="top" title="Assign Technician">
                                                                        <i class="fa fa-user color-red"></i>
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a href="accept_order.php?q=<?php echo $row['order_id']; ?>" data-toggle="tooltip" data-placement="top" title="Accept">
                                                                        <i class="fa fa-check color-muted"></i>
                                                                    </a>
                                                                    <a href="print_order.php?q=<?php echo $row['order_id']; ?>" class="print-pdf" data-toggle="tooltip" data-placement="top" title="Print PDF">
                                                                        <i class="fa fa-file color-red"></i>
                                                                    </a>
                                                                    <a href="reject_order.php?q=<?php echo $row['order_id']; ?>" data-toggle="tooltip" data-placement="top" title="Reject">
                                                                        <i class="fa fa-close color-red"></i>
                                                                    </a>
                                                                    <a href="assign_technician.php?q=<?php echo $row['order_id']; ?>" data-toggle="tooltip" data-placement="top" title="Assign Technician">
                                                                        <i class="fa fa-user color-red"></i>
                                                                    </a>
                                                                <?php } ?>
                                                            </span>
                                                        <?php } ?>
                                                    </td>

                                                    <!--
                                                <td><a href="update_category.php?q=<?php // echo $row['CategoryNumber'];
                                                                                    ?>">Edit</td>
                                                <td><a href="delete_category.php?q=<?php // echo $row['CategoryNumber'];
                                                                                    ?>">Delete</td>
                                            -->

                                                </tr>

                                            <?php
                                                $c++;
                                            }

                                            ?>







                                            <!--
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>63</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                            </tr>
                                        -->
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
















            <!--
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Category Details</h4>
                                <div class="table-responsive">
                                    <table class="table header-border">
                                        <thead>
                                            <tr>
                                                <th>Category ID</th>
                                                <th>Category Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
-->
            <?php
            /*
                                            $select="select CategoryID,CategoryName from categorydetails";
                                            $res=mysqli_query($con,$select);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                ?>
                                                <tr>
                                                <td><?php echo $c;?></td>
                                                <td><?php echo $row['CategoryName'];?></td>
                                                
                                                <td><span><a href="edit_category.php?q=<?php echo $row['CategoryID'];?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="delete_category.php?q=<?php echo $row['CategoryID'];?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-red"></i></a></span></td>
                                                <!--
                                                <td><a href="update_category.php?q=<?php // echo $row['CategoryNumber'];?>">Edit</td>
                                                <td><a href="delete_category.php?q=<?php // echo $row['CategoryNumber'];?>">Delete</td>
                                            -->
                                        
                                                </tr>

                                                <?php
                                                $c++;
                                            }
                                                */
            ?>
            <!--
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                                        -->

            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include("inc/footer.php"); ?>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>