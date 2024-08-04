<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("dbconnection.php"); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Add Service - Admin Portal - Service Ninja.com</title>
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
                                <h4 class="card-title">Add a Service</h4>
                                <p class="text-muted">Add a New Service by providing details in the below respective input fields.</code>
                                </p>
                                <div class="basic-form">
                                    <form method="post" autocomplete="off" enctype="multipart/form-data">
                                        <div class="form-group">
                                        <select class="form-control" name="nc" required>
                                            <option selected="selected">--Select a Category--</option>
                                            <?php
                                            $select="select CategoryName from categorydetails";
                                            $res=mysqli_query($con,$select);
                                            $c=1;
                                            while($row=mysqli_fetch_assoc($res))
                                            {
                                                ?>
                                                <option><?php echo $row['CategoryName'];?></option>
                                                <?php
                                                $c++;
                                            }

                                            ?>
                                         </select>
                                        </div>
                                        
                                        
                                        
                                        

                                        <div class="form-group">
                                            <input class="form-control" type="text" name="ns" placeholder="Enter New Service Name" required>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" type="text" name="pr" placeholder="Enter Price" required>
                                        </div>

                                        

                                        <div class="form-group">
                                            <label>Description :</label>
                                            <textarea class="form-control h-150px" rows="6" id="comment" name="desc" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Service Photo :</label>
                                            <input type="file" class="form-control" id="image" name="image" accept=".jpg, .jpeg, .png" value="" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="reg" value="Register" style="height:50px; width:1160px">Register</button>
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
    if(isset($_POST['reg']))
        {
            $nc=$_POST['nc'];
            
            $ns=$_POST['ns'];
            $pr=$_POST['pr'];
            $desc=$_POST['desc'];
                        
            if($_FILES['image']["error"] === 4){
                echo "<script>alert('Service Photo Not Provided'); </script>";
            }
            else{
                $fileName = $_FILES["image"]["name"];
                $fileSize = $_FILES["image"]["size"];
                $tmpName = $_FILES["image"]["tmp_name"];

                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if(!in_array($imageExtension, $validImageExtension)){
                    echo "<script>alert('Invalid Image Format'); </script>";
                }
                else if($fileSize > 10000000){
                    echo "<script>alert('Image Size should be within 9.5 MB'); </script>";
                }
                else{
                    $newImageName = uniqid();
                    $newImageName .= '.' . $imageExtension;

                    move_uploaded_file($tmpName, 'service_img/' . $newImageName);

                    $selquery = "select * from addservicedetails where ServiceName = '$ns'";
                    $ressel = mysqli_query($con,$selquery);
                    $rc = mysqli_num_rows($ressel);
                    if($rc==0)
                    {
                        $insertquery="insert into addservicedetails (ServiceID, CategoryName, ServiceImage, ServiceName, Price, Description) values('','$nc','$newImageName','$ns','$pr','$desc')";
                        if(mysqli_query($con,$insertquery))
                        {
                            echo "<script>alert('Insert Successfull');window.location.href='add_service.php'</script>";

                        }
                        else
                        {
                            echo "<script>alert('Insertion Failed');window.location.href='add_service.php'</script>";
                        }
                    }
                    else
                    {
                        echo "<script> alert('Given Service Information Already Exists!!'); </script>";
                    }
                }
            }
        }
?>