<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add User - Admin Portal - Service Ninja.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        .checkbox-container {
            display: flex;
            margin-left: 400px;
        }

        .a {

            border: 10px solid black;
        }
    </style>
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
                                            <label class="col-lg-4 col-form-label" for="us-firstname">First Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="us-firstname" name="us-firstname" placeholder="Enter First Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-mname">Middle Name
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="us-mname" name="us-mname" placeholder="Enter Middle Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-lname">Last Name <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="us-lname" name="us-lname" placeholder="Enter Last Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-gender">Gender <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="us-gender" required>
                                                    <option selected="selected">--Select a Category--</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-country">Country <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="us-country" name="us-country" placeholder="Enter Country" value="India" readonly required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-state">State <span class="text-danger">*</span></label>
                                            <div class="col-lg-6">
                                                <select class="form-control" name="us-state" required>
                                                    <option selected="selected">--Select a Category--</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Orissa">Orissa</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttaranchal">Uttaranchal</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                                    <option value="Daman and Diu">Daman and Diu</option>
                                                    <option value="Delhi">Delhi</option>
                                                    <option value="Lakshadeep">Lakshadeep</option>
                                                    <option value="Pondicherry">Pondicherry</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-email">E-Mail Address <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="email" class="form-control" id="us-email" name="us-email" placeholder="Enter E-Mail Address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-photo">Profile Photo <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="file" class="form-control" id="ig" name="ig" accept=".jpg, .jpeg, .png" value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="us-username" name="us-username" placeholder="Enter Username" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-pass">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="us_pass" name="us-pass" placeholder="Enter Password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="us-conpass">Confirm Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="password" class="form-control" id="us_conpass" name="us-conpass" placeholder="Enter Confirm Password">
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="checkbox-container">
                                                    <input type="checkbox" class="form-check-input a" id="us-showp" name="us-showp" value="showp" onclick="showpwd()">
                                                    <label class="col-form-label ml-2" for="us-showp">Show Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="reg" value="Register" style="height:50px; width:160px">Register</button>
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

    <!--Show Password-->
    <script>
        function showpwd() {
            var us_pass = document.getElementById("us_pass");
            var us_conpass = document.getElementById("us_conpass");

            if (us_pass.type === "password") {
                us_pass.type = "text";
            } else {
                us_pass.type = "password";
            }

            if (us_conpass.type === "password") {
                us_conpass.type = "text";
            } else {
                us_conpass.type = "password";
            }
        }
    </script>

</body>

</html>

<?php
if (isset($_POST['reg'])) {
    $usfn = $_POST['us-firstname'];
    $usmn = $_POST['us-mname'];
    $usln = $_POST['us-lname'];
    $usge = $_POST['us-gender'];
    $usco = $_POST['us-country'];
    $ussc = $_POST['us-state'];
    $usem = $_POST['us-email'];
    $usun = $_POST['us-username'];
    $usp = $_POST['us-pass'];
    $uscp = $_POST['us-conpass'];

    $sel_usquery = "select * from userdetails where User_Email='$usem'";
    $sel_rs = mysqli_query($con, $sel_usquery);
    if (mysqli_num_rows($sel_rs) == 0) {
        $sel_sql = "select * from userdetails where User_Username='$usun'";
        $sel_ress = mysqli_query($con, $sel_sql);
        if (mysqli_num_rows($sel_ress) == 0) {
            if ($usp == $uscp) {
                if ($_FILES["ig"]["error"] === 4) {
                    echo "<script> alert('Image Does Not Exist'); </script>";
                } else {
                    $fileName = $_FILES["ig"]["name"];
                    $fileSize = $_FILES["ig"]["size"];
                    $tmpName = $_FILES["ig"]["tmp_name"];

                    $validImageExtension = ['jpg', 'jpeg', 'png'];
                    $imageExtension = explode('.', $fileName);
                    $imageExtension = strtolower(end($imageExtension));

                    if (!in_array($imageExtension, $validImageExtension)) {
                        echo "<script> alert('Invalid Image Format'); </script>";
                    } else if ($fileSize > 10000000) {
                        echo "<script> alert('Image Size should be within 9.5 MB'); </script>";
                    } else {
                        $newImageName = uniqid();
                        $newImageName .= '.' . $imageExtension;

                        move_uploaded_file($tmpName, '../../USER SECTION/userimg/' . $newImageName);

                        $sql = "insert into userdetails (UserID, User_Firstname, User_Middlename, User_Lastname, User_Gender, User_Country, User_State, User_Email, User_Image, User_Username, User_Password) values('', '$usfn', '$usmn', '$usln', '$usge', '$usco', '$ussc', '$usem', '$newImageName', '$usun', '$usp')";
                        if (mysqli_query($con, $sql)) {
                            echo "<script>alert('User Details Stored Successfully');window.location.href='add_user.php'</script>";
                        } else {
                            echo "<script>alert('User Details Insertion Failed');window.location.href='add_user.php'</script>";
                        }
                    }
                }
            } else {
                "<script>alert('Password Mismatched. Please Try Again!!');window.location.href='add_user.php'</script>";
            }
        } else {
            echo "<script>alert('Given Username is already registered by another user. Please choose another username to continue.');window.location.href='add_user.php'</script>";
        }
    } else {
        echo "<script>alert('Given Email is already registered by another user. Please choose another email to continue.');window.location.href='add_user.php'</script>";
    }
}

?>