<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Assign Technician - Admin Portal - Service Ninja.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
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



                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Assign Technician</h4>
                                <p class="text-muted">Assign a Technician by selecting an option in the below input field.</code>
                                </p>
                                <div class="basic-form">
                                    <form method="post">
                                        <div class="form-group">
                                            <select class="form-control" name="at">
                                                <option selected="selected">--Select a Category--</option>
                                                <?php
                                                $select = "select TechnicianFirstName, TechnicianMiddleName, TechnicianLastName, TechnicianEmail, TechnicianPhno from techniciandetails";
                                                $res = mysqli_query($con, $select);
                                                $c = 1;
                                                while ($row = mysqli_fetch_assoc($res)) {
                                                    $tfin = $row['TechnicianFirstName'];
                                                    $tlan = $row['TechnicianLastName'];
                                                    if (!empty($row['TechnicianMiddleName'])) {
                                                        $tfn = $tfin . " " . $row['TechnicianMiddleName'] . " " . $tlan;
                                                    } else {
                                                        $tfn = $tfin . " " . $tlan;
                                                    }
                                                    $ftd = $tfn . " , " . $row['TechnicianEmail'] . " , " . $row['TechnicianPhno'];
                                                ?>
                                                    <option><?php echo $ftd; ?></option>
                                                <?php
                                                    $c++;
                                                }

                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="reg" value="Register">Assign</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
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

</body>

</html>

<?php
if (isset($_POST['reg'])) {
    $ordno = $_GET['q'];
    $at=$_POST['at'];
    $uquery = "UPDATE order_req SET asgn_tech = '$at' where order_id = '$ordno'";
    if (mysqli_query($con, $uquery)) {
        echo "<script>alert('Technician Assigned Successfully');window.location.href='service_orders.php'</script>";
    } else {
        echo "<script>alert('Techncian Assign Process Failed due to some error');window.location.href='service_orders.php'</script>";
    }
}
?>