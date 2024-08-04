<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add Admin - Admin Portal - Service Ninja.com</title>
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
                                                <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png" value="" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-firstname">First Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-firstname" name="val-firstname" placeholder="Enter First Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-mname">Middle Name
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-mname" name="val-mname" placeholder="Enter Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-lname">Last Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-lname" name="val-lname" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">E-Mail Address <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="val-email" name="val-email" placeholder="Enter E-Mail Address" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-altemail">Alternate E-Mail Address 
                                            </label>
                                            <div class="col-lg-6">
                                            <input type="email" class="form-control" id="val-altemail" name="val-altemail" placeholder="Enter Alternate E-Mail Address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-phno">Phone Number <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-phno" name="val-phno" placeholder="Enter Phone Number" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-altphno">Alternate Phone Number 
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-altphno" name="val-altphno" placeholder="Enter Alternate Phone Number">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-accpass">Account Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-accpass" name="val-accpass" placeholder="Enter Account Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confpass">Confirm Account Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="val-confpass" name="val-confpass" placeholder="Enter same Password to Confirm" required>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="reg" value="Register">Register</button>
                                            </div>
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

<?php
if(isset($_POST['reg']))
    {
        if($_FILES["image"]["error"] === 4){
            echo "<script> alert('Image Does Not Exist'); </script>";
        }
        else{
            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));

            if(!in_array($imageExtension, $validImageExtension)){
                echo "<script> alert('Invalid Image Format'); </script>";
            }
            else if($fileSize > 10000000){
                echo "<script> alert('Image Size should be within 9.5 MB'); </script>";
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, 'admin_img/' . $newImageName);

                $afn=$_POST['val-firstname'];
                $amn=$_POST['val-mname'];
                $aln=$_POST['val-lname'];
                $aem=$_POST['val-email'];
                $aaltem=$_POST['val-altemail'];
                $aph=$_POST['val-phno'];
                $aaltph=$_POST['val-altphno'];
                $apa=$_POST['val-accpass'];
                $acpa=$_POST['val-confpass'];

                if($apa == $acpa)
                {
                    $selquery = "select * from admindetails where AdminEmail = '$aem' or AdminPhno = '$aph'";
                    $ressel = mysqli_query($con,$selquery);
                    $rc = mysqli_num_rows($ressel);
                    if($rc==0)
                    {
                        $insertquery="insert into admindetails (AdminID, AdminPhoto, AdminFirstName, AdminMiddleName, AdminLastName, AdminEmail, AdminAltEmail, AdminPhno, AdminAltPhno, AdminAccPass) values('','$newImageName','$afn','$amn','$aln','$aem','$aaltem','$aph','$aaltph','$apa')";

                        if(mysqli_query($con,$insertquery))
                        {
                            echo "<script>alert('Insert Successfull');window.location.href='add_admin.php'</script>";

                        }
                        else
                        {
                            echo "<script>alert('Insertion Failed');window.location.href='add_admin.php'</script>";
                        }
                    }
                    else{
                        echo "<script> alert('Given Admin Information already exists!!'); </script>";
                    }
                }
                else
                {
                    echo "<script>alert('Error: Password Mismatched! Please Try Again!!');window.location.href='add_admin.php'</script>";
                }

                
            }
        }
    }
    ?>