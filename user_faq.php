<!DOCTYPE html>
<html lang="en">
<?php include("usersession.php"); ?>
<head>
    <meta charset="utf-8">
    <title>Frequently Asked Questions - ServiceNinja.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="user_faq.php" class="nav-item nav-link active">FAQ's</a>
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
                    <h1 class="display-4 text-white animated zoomIn">Frequently Asked Questions</h1>
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

    <!--FAQ Start-->
    
            
    <section class="bg-light py-3 py-md-5">
        <div class="container">
        

            <div class="row gy-5 gy-lg-0 align-items-lg-center">
                <div class="col-12">
                    <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-11">
                            
                            <div class="accordion accordion-flush" id="accordionExample">
                                <!--  question 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How Do I Change My Billing Information?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>To change your billing information, please follow these steps:</p>
                                            <ul>
                                                <li>Go to our website and sign in to your account.</li>
                                                <li>Click on your profile picture in the top right corner of the page
                                                    and select "Account Settings."</li>
                                                <li>Under the "Billing Information" section, click on "Edit."</li>
                                                <li>Make your changes and click on "Save."</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <br>
                                <!-- question 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How Does Payment System Work?
                                        </button>
                                        </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A payment system is a way to transfer money from one person or organization
                                            to another. It is a complex process that involves many different parties,
                                            including banks, credit card companies, and merchants.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <!-- question 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How Do I Cancel My Account?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>To cancel your account, please follow these steps:</p>
                                            <ul>
                                                <li>Go to our website and sign in to your account.</li>
                                                <li>Click on your profile picture in the top right corner of the page
                                                    and select "Account Settings."</li>
                                                <li>Scroll to the bottom of the page and click on "Cancel Account."</li>
                                                <li>Enter your password and click on "Cancel Account."</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <br>
                                 <!-- Question 4 -->
                                 <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What Are the Benefits of Subscribing?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Subscribing to our service brings several benefits:</p>
                                            <ul>
                                            <li>Access to exclusive content or features.</li>
                                                <li>Discounts on products or services.</li>
                                                <li>Prioritized customer support.</li>
                                                <li>Regular updates and notifications.</li>
                                            </ul>
                                            <p>Ensure you don't miss out on anything by subscribing today!</p>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <!-- Question 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-expanded="false" aria-controls="collapseFive">
                                            How Do I Retrieve My Forgotten Password?
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>If you've forgotten your password, you can reset it by following these
                                                steps:</p>
                                            <ul>
                                                <li>Go to the login page and click on "Forgot Password."</li>
                                                <li>Enter your email address and submit the form.</li>
                                                <li>Check your email for instructions on resetting your password.</li>
                                                <li>Follow the provided link and create a new password.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <br>

                                <!-- Question 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSix">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                            aria-expanded="false" aria-controls="collapseSix">
                                            How Can I Contact Customer Support?
                                        </button>
                                    </h2>
                                    <div id="collapseSix" class="accordion-collapse collapse"
                                        aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>You can contact our customer support team through the following methods:
                                            </p>
                                            <ul>
                                                <li>Send an email to support@example.com</li>
                                                <li>Call our toll-free number: 1-800-123-4567</li>
                                                <li>Use the live chat feature on our website.</li>
                                            </ul>
                                            <p>We're here to assist you with any questions or concerns!</p>
                                        </div>
                                    </div>
                                </div> <br>

                                <!-- Question 7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingSeven">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                            aria-expanded="false" aria-controls="collapseSeven">
                                            What Are the System Requirements for Using Your Service?
                                        </button>
                                    </h2>
                                    <div id="collapseSeven" class="accordion-collapse collapse"
                                        aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>To use our service, you need to meet the following system requirements:
                                            </p>
                                            <ul>
                                                <li>Operating system: Windows 10, macOS 10.14, or later.</li>
                                                <li>Web browser: Latest version of Google Chrome, Mozilla Firefox, or
                                                    Safari.</li>
                                                <li>Internet connection: Stable broadband connection recommended.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <br>

                                <!-- Question 8 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingEight">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                            aria-expanded="false" aria-controls="collapseEight">
                                            Is My Personal Information Secure with Your Service?
                                        </button>
                                    </h2>
                                    <div id="collapseEight" class="accordion-collapse collapse"
                                        aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We take the security of your personal information very seriously. Here's
                                                how we ensure its security:</p>
                                            <ul>
                                                <li>We use industry-standard encryption to protect data transmission.
                                                </li>
                                                <li>Your data is stored securely on our servers, with restricted access.
                                                </li>
                                                <li>We adhere to strict privacy policies and comply with relevant data
                                                    protection regulations.</li>
                                            </ul>
                                            <p>Your privacy and security are our top priorities.</p>
                                        </div>
                                    </div>
                                </div> <br>

                                <!-- Question 9 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingNine">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                            aria-expanded="false" aria-controls="collapseNine">
                                            Can I Upgrade or Downgrade My Subscription Plan?
                                        </button>
                                    </h2>
                                    <div id="collapseNine" class="accordion-collapse collapse"
                                        aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Yes, you can upgrade or downgrade your subscription plan at any time.
                                                Here's how:</p>
                                            <ul>
                                                <li>Go to your account settings and select "Subscription Plans."</li>
                                                <li>Choose the plan you want to switch to and follow the instructions to
                                                    complete the change.</li>
                                                <li>Your new plan will be effective immediately, and any changes to
                                                    billing will be prorated.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> <br>

                                <!-- Question 10 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTen">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                            aria-expanded="false" aria-controls="collapseTen">
                                            What Payment Methods Do You Accept?
                                        </button>
                                    </h2>
                                    <div id="collapseTen" class="accordion-collapse collapse"
                                        aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We accept the following payment methods:</p>
                                            <ul>
                                                <li>Credit cards (Visa, Mastercard, American Express)</li>
                                                <li>PayPal</li>
                                                <li>Bank transfers</li>
                                                <li>Online payment platforms (e.g., Stripe, Square)</li>
                                            </ul>
                                            <p>If you have any questions about payment methods, feel free to contact our
                                                support team.</p>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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