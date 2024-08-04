<!DOCTYPE html>
<html lang="en">
<?php
include("usersession.php");
include("dbconn.php");
$sno=$_GET['q'];
$show="select * from addservicedetails where ServiceID='$sno'";
$rep=mysqli_query($con,$show);
$d=mysqli_fetch_assoc($rep);
?>
<head>
    <meta charset="utf-8">
    <title>Service Request Form - ServiceNinja.com</title>
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

    <link rel="stylesheet" href="signup.css">
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
                        <a href="#" class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">Your Profile</a>
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
                    <h1 class="display-4 text-white animated zoomIn">Service Booking Form</h1>
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
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
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
            <li>You can only fill the following fields:
              <ol type="a">
                <br>
                <li>User Address with Pincode(Except State)</li>
                <li>User Phone Number</li>
                <li>Choose Preferred Day for Service</li>
                <li>Specify Your Problem or Any Message you want to let us know</li>
              </ol>
            </li>
            <br>
            <li>Please provide a valid Phone Number, otherwise we will be unable to send you an OTP to verify your Phone Number.</li>
            <br>
            <li>Please insert the OTP which we will send to your respective Phone Number. Also remember, the OTP will be valid for one-time use only.</li>
            <br>
            <li>If you provide a wrong OTP, you will be unable to submit your service request form as well as all the data inserted in the form will be erased and you need to refill the form.</li>
            <br>
            <li>In the "User Address with Pincode(Except State)" section, please provide your present address details such as House Number, Building / Apartment Name, Locality, City with Pincode etc. Please don't write your state as because it is already saved.</li>
            <br>
            <li>Select your preferred day of service. We will try our level best to assign a technician for your service on the selected day. If we are unable to provide that, we may contact with you to resolve the problem.</li>
            <br>
            <li>In the "Specify Your Problem or Any Message you want to let us know" section, You can write anything related to selected service.</li>
            <br>
            <li><strong>After Successful phone number verification, Bill Invoice of your selected service will appear which you should download and take a hard copy out of it for future use.</strong></li>
            <br>
            <li><strong>Once you have successfully booked your service, within few hours one of our employee will contact with you to know that if you want to: 
              <ol type="a">
                <br>
                <li>Update any details mistakely inserted by you.</li> 
                <li>Request a Cancellation on your selected service.</li>
                <li>Know about the Payment Process of our Company.</li>
                <li>Ask any questions, doubts etc.(if any).</li>
              </ol>
            </strong></li>
            <br>
            <li><strong>It may happen that at that time when the employee called you, you have not mentioned about your cancellation request. But after few days, you decided to cancel it. So, your cancellation request can still be processed by contacting with us. Our 24/7 Contact Number is provided at the "Contact Us" section.</strong></li>
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
        
        <form action="user_orderreq.php" method="post" autocomplete="off">
          <div class="form-group">
            <label for="scname">Service Category Name:*</label>
            <input type="text" id="scn" name="scn" class="form-control" value="<?php echo $d['CategoryName'];?>" readonly required>
          </div>
          <div class="form-group">
            <label for="sname">Service Name:</label>
            <input type="text" id="sen" name="sen" class="form-control" value="<?php echo $d['ServiceName'];?>" readonly required>
          </div>
          <div class="form-group">
            <label for="price">Service Price:*</label>
            <input type="text" id="sep" name="sep" class="form-control" value="<?php echo $d['Price'];?>" readonly required>
          </div>
          
          
          <div class="form-group">
            <label for="description">Service Description:*</label>
            
            <textarea id="sedesc" class="form-control" name="sedesc" readonly required><?php echo $d['Description'];?></textarea>
          </div>

          <?php
             $un=$_SESSION['username'];
             $ushow="select * from userdetails where User_Username='$un'";
             $ures=mysqli_query($con,$ushow);
             $ud=mysqli_fetch_assoc($ures);             
          ?>

            <div class="form-group">
            <label for="ufname">User First Name:*</label>
            <input type="text" id="ufn" name="ufn" class="form-control" value="<?php echo $ud['User_Firstname'];?>" readonly required>
            </div>

            <div class="form-group">
            <label for="ulname">User Last Name:*</label>
            <input type="text" id="uln" name="uln" class="form-control" value="<?php echo $ud['User_Lastname'];?>" readonly required>
            </div>

            <div class="form-group">
            <label for="ustate">User State:*</label>
            <input type="text" id="ust" name="ust" class="form-control" value="<?php echo $ud['User_State'];?>" readonly required>
            </div>

            <div class="form-group">
            <label for="uaddr">User Address with Pincode(Except State):*</label>
            
            <textarea id="uadr" class="form-control" name="uadr" required></textarea>
          </div>


          <div class="form-group">
            <label for="uem">User Email Address:*</label>
            <input type="email" id="uem" name="uem" class="form-control" value="<?php echo $ud['User_Email'];?>" readonly  required>
          </div>
          
          

          <div class="form-group">
            <label for="uphno">User Phone Number:*</label>
            <input type="text" id="uphno" name="uphnpo" class="form-control" placeholder="--Enter Your Phone Number--" required>
          </div>

          <div class="form-group">
            <label for="state">Choose Preferred Day for Service:*</label>
            <!--input type="text" id="state" class="form-control" placeholder="--Enter State--"  required-->
            <select class="form-control" id="sday" name="sday" required>
                        <option>--Select your Day--</option>
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option> 
            </select>
          </div>

          <div class="form-group">
            <label>Select Your Preferred Time:*</label><br><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="stime" id="Morning Time (09:00 AM - 12:00 PM)" value="Morning (09:00 AM - 12:00 PM)" required>
              <label class="form-check-label" for="Morning Time (09:00 AM - 12:00 PM)">Morning Time (09:00 AM - 12:00 PM)</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="stime" id="Afternoon Time (01:00 PM - 3:30 PM)" value="Afternoon (01:00 PM - 4:00 PM)" required>
              <label class="form-check-label" for="Afternoon Time (01:00 PM - 3:30 PM)">Afternoon Time (01:00 PM - 3:30 PM)</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="stime" id="Evening Time (4:30 PM - 8:00 PM)" value="Evening (4:30 PM - 8:00 PM)" required>
              <label class="form-check-label" for="Evening Time (4:30 PM - 8:00 PM)">Evening Time (4:30 PM - 8:00 PM)</label>
            </div>
          </div>

          <div class="form-group">
            <label for="mssg">Specify Your Problem or Any Message you want to let us know:*</label>
            
            <textarea id="mssg" class="form-control" rows="3" name="mssg" required></textarea>
          </div>

          
          
          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary btn-block" name="reg" value="Submit">
          </div>

              
          
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