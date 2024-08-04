<!DOCTYPE html>
<html lang="en">
<?php include('dbconn.php'); ?>
<head>
    <meta charset="utf-8">
    <title>Careers - ServiceNinja.com</title>
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
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>


                    <div class="nav-item dropdown">
                        <a href="service.php" class="nav-item nav-link">Services</a>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="testimonial.php" class="nav-item nav-link">Testimonials</a>
                        <!--  <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>-->
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
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
                    <a href="workwithus.php" class="nav-item nav-link active">Work with Us</a>

                </div>
                &nbsp;
                
               <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>-->
                <a href="choice.php" class="btn btn-primary py-2 px-4 ms-3">Login / Signup</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 50px;">
            
        </div>
        
    <!-- User Registration Start -->
    <div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="form-container">
        <h2 class="text-center mb-4">Instructions Before Filling Up Form</h2>
        <div class="instruction">
        <p><span style="color: red; font-weight: bold; font-style: italic;">Please read the instructions carefully before filling up the form:</span></p>
        <ol>
            <li>Please fill all the fields which have the asterisk symbol(*).</li>
            <br>
            <li>Please provide a valid Email Address, otherwise we will be unable to send you an OTP to verify your Email.</li>
            <br>
            <li>Please insert the OTP which we will send to your respective Email Address. Also remember, the OTP will be valid for one-time use only.</li>
            <br>
            <li>If you provide a wrong OTP, you will be unable to submit your application form as well as all the data inserted in the form will be erased and you need to refill the form.</li>
            <br>
            <li>The profile picture should have any one of the following extensions: '.jpg' or '.jpeg' or '.png'. Other than these extensions, any other extension will not be acceptable. And, also please check before the final submit otherwise if any other extension is detected then you have to refill the form.</li>
            <br>
            <li>The memory size of the profile picture should not exceed 3 MB.</li>
            <br>
            <li>The Curriculum Vitae (CV) should have the following extension: '.pdf' . Other than these extension, any other extension will not be acceptable. And, also please check before the final submit otherwise if any other extension is detected then you have to refill the form.</li>
            <br>
            <li>The memory size of the Curriculum Vitae (CV) should not exceed 9.5 MB.</li>
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
        <h2 class="text-center mb-4">Job Application Form</h2>
        <form action="send_careers_otp.php" method="post" autocomplete="off" enctype="multipart/form-data">
          <div class="form-group">
            <label for="firstName">First Name:*</label>
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="--Enter First Name--" required pattern="[a-zA-Z'-'\s]*">
          </div>
          <div class="form-group">
            <label for="middleName">Middle Name:</label>
            <input type="text" id="middlename" name="middlename" class="form-control" placeholder="--Enter Middle Name--" pattern="[a-zA-Z'-'\s]*">
          </div>
          <div class="form-group">
            <label for="lastName">Last Name:*</label>
            <input type="text" id="lastName" name="lastname" class="form-control" placeholder="--Enter Last Name--" required pattern="[a-zA-Z'-'\s]*">
          </div>
          
          <div class="form-group">
            <label>Gender:*</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
              <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="other" value="other" required>
              <label class="form-check-label" for="other">Other</label>
            </div>
          </div>
          <div class="form-group">
            <label for="country">Country:*</label>
            <input type="text" id="country" class="form-control" name="country" value="India" readonly required>
          </div>
          <div class="form-group">
            <label for="state">State:*</label>
            <!--input type="text" id="state" class="form-control" placeholder="--Enter State--"  required-->
            <select class="form-control" id="state" name="state" required>
                        <option>--Select your State--</option>
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
          <div class="form-group">
            <label for="email">Email Address:*</label>
            <input type="email" id="email" name="candemail" class="form-control" placeholder="--Enter Email Address--" required>
          </div>
          
          <div class="form-group">
            <label for="image">Profile Photo:*</label>
            <input type="file" id="image" class="form-control" name="image" accept=".jpg, .jpeg, .png" value="" required oninvalid="this.setCustomValidity('Select Your Profile Picture')" oninput="this.setCustomValidity('')">
          </div>
          <div class="form-group">
            <label for="cv">Curriculum Vitae(CV):*</label>
            <input type="file" id="cv" class="form-control" name="cv" accept=".pdf" value="" required oninvalid="this.setCustomValidity('Insert Your CV')" oninput="this.setCustomValidity('')">
          </div>
          <div class="form-group text-center">
            <input type="submit" class="btn btn-primary btn-block" name="reg" value="Submit">
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>


    
    <!--User Registration End-->

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



    <!-- Footer Start -->
        <?php
            include("inc/footer.php");
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

