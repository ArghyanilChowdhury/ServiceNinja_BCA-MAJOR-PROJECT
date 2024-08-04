<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php");

$s = "select * from admindetails where AdminEmail='$emailid'";
$rs = mysqli_query($con, $s);
$rw = mysqli_fetch_assoc($rs);
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Update Admin Details - Admin Portal - Service Ninja.com</title>
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
        <?php include("inc/header.php") ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include("inc/sidebar.php") ?>
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
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="#" method="post" autocomplete="off" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-photo">Profile Photo <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-firstname">First Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-firstname" name="val-firstname" placeholder="Enter First Name" value="<?php echo $rw['AdminFirstName']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-mname">Middle Name
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-mname" name="val-mname" placeholder="Enter Middle Name" value="<?php echo $rw['AdminMiddleName']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-lname">Last Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-lname" name="val-lname" placeholder="Enter Last Name" value="<?php echo $rw['AdminLastName']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">E-Mail Address <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="val-email" name="val-email" placeholder="Enter E-Mail Address" value="<?php echo $rw['AdminEmail']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-altemail">Alternate E-Mail Address
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="val-altemail" name="val-altemail" placeholder="Enter Alternate E-Mail Address" value="<?php echo $rw['AdminAltEmail']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phno">Phone Number <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-phno" name="val-phno" placeholder="Enter Phone Number" value="<?php echo $rw['AdminPhno']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-altphno">Alternate Phone Number
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-altphno" name="val-altphno" placeholder="Enter Alternate Phone Number" value="<?php echo $rw['AdminAltPhno']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-accpass">Account Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-accpass" name="val-accpass" placeholder="Enter Account Password" value="<?php echo $rw['AdminAccPass']; ?>">
                                            </div>
                                        </div>
                                        

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="reg" value="Register">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['reg'])) {
                $afn = $_POST['val-firstname'];
                $amn = $_POST['val-mname'];
                $aln = $_POST['val-lname'];
                $aph = $_POST['val-phno'];
                $aaltph = $_POST['val-altphno'];
                $apa = $_POST['val-accpass'];

                $updatequery = "UPDATE admindetails SET AdminFirstName='$afn',AdminMiddleName='$amn',AdminLastName='$aln',AdminPhno='$aph',AdminAltPhno='$aaltph',AdminAccPass='$apa'";

                if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
                    $fileName = $_FILES["image"]["name"];
                    $fileSize = $_FILES["image"]["size"];
                    $tmpName = $_FILES["image"]["tmp_name"];

                    $validImageExtension = ['jpg', 'jpeg', 'png'];
                    $imageExtension = explode('.', $fileName);
                    $imageExtension = strtolower(end($imageExtension));
                    if (!in_array($imageExtension, $validImageExtension)) {
                        echo "<script>alert('Invalid Image Format'); </script>";
                    } else if ($fileSize > 10000000) {
                        echo "<script>alert('Image Size should be within 9.5 MB'); </script>";
                    } else {
                        $newImageName = uniqid();
                        $newImageName .= '.' . $imageExtension;
                    }

                    move_uploaded_file($tmpName, 'admin_img/' . $newImageName);

                    $updatequery .= ", AdminPhoto='$newImageName'";
                }

                $updatequery .= " WHERE AdminEmail='$emailid'";

                if (mysqli_query($con, $updatequery)) {
                    echo "<script>alert('Update successfull');window.location.href='admin_details.php'</script>";
                } else {
                    echo "<script>alert('Update Failed');window.location.href='admin_details.php'</script>";
                }
            }


            ?>


            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <?php include("inc/footer.php") ?>
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

    <script src="./plugins/validation/jquery.validate.min.js"></script>
    <script src="./plugins/validation/jquery.validate-init.js"></script>

</body>

</html>