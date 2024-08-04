<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Service Details - Admin Portal - Service Ninja.com</title>
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
        <?php include("inc/header.php");?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include("inc/sidebar.php");?>
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
                                <h4 class="card-title">Services Table</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Service ID</th>
                                                <th>Category Name</th>
                                                
                                                <th>Service Photo</th>
                                                <th>Service Name</th>
                                                <th>Service Price</th>
                                                <th>Service Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                            $select="select ServiceID,CategoryName,ServiceImage,ServiceName,Price,Description from addservicedetails";
                                            $res=mysqli_query($con,$select);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                ?>
                                                <tr>
                                                <td><?php echo $c;?></td>
                                                <td><?php echo $row['CategoryName'];?></td>
                                                
                                                <td> <img src="service_img/<?php echo $row['ServiceImage']; ?>" width="200" title="<?php echo $row['ServiceImage']; ?>"> </td>
                                                <td><?php echo $row['ServiceName'];?></td>
                                                <td><?php echo $row['Price'];?></td>
                                                <td><?php echo $row['Description'];?></td>
                                                
                                                <td><span><a href="edit_services.php?q=<?php echo $row['ServiceID'];?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="delete_services.php?q=<?php echo $row['ServiceID'];?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-close color-red"></i></a></span></td>
                                                <!--
                                                <td><a href="update_category.php?q=<?php // echo $row['CategoryNumber'];?>">Edit</td>
                                                <td><a href="delete_category.php?q=<?php // echo $row['CategoryNumber'];?>">Delete</td>
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