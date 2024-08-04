<!DOCTYPE html>
<html lang="en">
<?php include("usersession.php") ?>    
<?php include("dbconn.php"); ?>
<?php
$us="select * from userdetails where User_Username='$username'";
$ur=mysqli_query($con,$us);
$upr=mysqli_fetch_assoc($ur);
?>
<head>
    <meta charset="utf-8">
    <title>Update Profile - ServiceNinja.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <?php
        include("inc/topbar.php");
    ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fas fa-user-cog"></i> ServiceNinja.com</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="user_dashboard.php" class="nav-item nav-link">Dashboard</a>
                    <a href="user_faq.php" class="nav-item nav-link">FAQ's</a>
                    <a href="user_testimonial.php" class="nav-item nav-link">Testimonials</a>
                    <a href="user_orders.php" class="nav-item nav-link">Orders</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link  dropdown-toggle active" data-bs-toggle="dropdown">Your Profile</a>
                        <div class="dropdown-menu m-0">
                            <a href="user_viewprof.php" class="dropdown-item">View Profile</a>
                            <a href="user_updateprof.php" class="dropdown-item">Update Profile</a>
                        </div>
                    </div>


                    
                    <a href="user_contactus.php" class="nav-item nav-link">Contact Us</a>
                    <!--  <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Free Quote</a>
                        </div>
                    </div>
                    -->
                    

                </div>
                &nbsp;
                
               <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>-->
                <a href="userlogout.php" class="btn btn-primary py-2 px-4 ms-3">Logout</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Update Profile Details</h1>
                   <!-- <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Services</a>
                    -->
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="form-container">
        <h2 class="text-center mb-4">Instructions Before Filling Up Form</h2>
        <div class="instruction">
        <p><span style="color: red; font-weight: bold; font-style: italic;">Please read the instructions carefully before filling up the form:</span></p>
        <ol>
            <li>User can update only this fields: 
              <ol type="A">
              <br>
                <li>Profile Photo</li>
                
                <li>First Name</li>
               
                <li>Middle Name</li>
              
                <li>Last Name</li>
                
                <li>State</li>
                
                <li>Password</li>
                
              </ol>
            </li>
            <br>
            <li>The profile picture should have any one of the following extensions: '.jpg' or '.jpeg' or '.png'. Other than these extensions, any other extension will not be acceptable. And, also please check before the final submit otherwise if any other extension is detected then you have to refill the form.</li>
            <br>
            <li>The memory size of the profile picture should not exceed 3 MB.</li>
            <br>
            <li>Before submitting the form, please check that value in Password field and Confirm Password field must be same. Otherwise, it will show error and you need to refill the form again.</li>
        </ol>
        </div>
      </div>
    </div>
  </div>
    </div>

    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="form-container">
        
        <form action="updprocess_userprof.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <div class="form-group">
              <center><img src="userimg/<?php echo $upr['User_Image']; ?>" width="200" title="<?php echo $upr['User_Image']; ?>"></center>
              <br>
              <input type="file" id="image" class="form-control" name="user_upimage" accept=".jpg, .jpeg, .png" value="">
          </div>
          <br>

          <div class="form-group">
            <label for="firstName">First Name:*</label>
            <br>
            <input type="text" id="firstname" name="user_upfirstname" class="form-control" value="<?php echo $upr['User_Firstname'];?>">
          </div>
          <br>

          <div class="form-group">
            <label for="middleName">Middle Name:</label>
            <br>
            <input type="text" id="middlename" name="user_upmiddlename" class="form-control" value="<?php echo $upr['User_Middlename'];?>">
          </div>
          <br>

          <div class="form-group">
            <label for="lastName">Last Name:*</label>
            <br>
            <input type="text" id="lastName" name="user_uplastname" class="form-control" value="<?php echo $upr['User_Lastname'];?>">
          </div>
          <br>
          
          <div class="form-group">
            <label for="country">Country:*</label>
            <br>
            <input type="text" id="country" class="form-control" name="user_upcountry" value="India" readonly>
          </div>
          <br>

          <div class="form-group">
            <label for="state">State:*</label>
            <br>
            <input type="text" id="lastName" name="user_upstate" class="form-control" value="<?php echo $upr['User_State'];?>">
          </div>
          <br>

          <div class="form-group">
            <label for="email">Email Address:*</label>
            <br>
            <input type="email" id="email" name="user_upemail" class="form-control" value="<?php echo $upr['User_Email'];?>" readonly>
          </div>
          <br>
          
          

          <div class="form-group">
            <label for="Username">Username:*</label>
            <br>
            <input type="text" id="username" name="user_upusername" class="form-control" value="<?php echo $upr['User_Username'];?>" readonly>
          </div>
          <br>

          <div class="form-group">
            <label for="password">Password:*</label>
            <br>
            <input type="password" id="password" class="form-control" name="user_uppassword" value="<?php echo $upr['User_Password'];?>">
          </div>
          <br>

          <div class="form-group">
            <label for="cpassword">Confirm Password:*</label>
            <br>
            <input type="password" id="confpass" class="form-control" name="user_upconpassword" placeholder="--Enter Your Password to Confirm--">
          </div>
          <br>

          <div class="form-group">
            <input type="checkbox" id="show" class="form-check-input" name="show" value="sp" onclick="showPwd()">
            <label for="cpassword">Show Password</label>
          </div>
          <br>

          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary btn-block" name="updateuser" value="Update My Detais">
          </div>
          <br>
          
          <!--Show Password-->
    <script>
      function showPwd(){
        var password = document.getElementById("password");
        var confpass = document.getElementById("confpass");

        if(password.type === "text")
        {
          password.type="password";
        }
        else{
          password.type="text";
        }

        if(confpass.type === "text")
        {
          confpass.type="password";
        }
        else{
          confpass.type="text";
        }
      }
    </script>
          
          
              
          
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Footer Start -->
<?php
        include("user_inc/user_footer.php");
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    
</body>

</html>