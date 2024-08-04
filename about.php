<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About Us - ServiceNinja.com</title>
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
    
    <!--Topbar and Navbar start -->

    <?php
        include("inc/topbar.php");
    ?>

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
                    <a href="about.php" class="nav-item nav-link active">About</a>


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
                    <a href="workwithus.php" class="nav-item nav-link">Work with Us</a>

                </div>
                &nbsp;
                
               <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                    data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>-->
                <a href="choice.php" class="btn btn-primary py-2 px-4 ms-3">Login / Signup</a>
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar and Navbar End -->


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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-12">
            <div class="row g-12">
                <div class="col-lg-12">
                    
                    <h5 class="mb-4" style="font-size: 25px;">Service Ninja is a cutting-edge technology platform that revolutionizes home services. Our diverse range of offerings includes beauty treatments, massage therapy and applicance repair. These services are thoughtfully designed to enhance the lives of our customers, delivered right to their doorstep at their convenience.

                    We take pride in ensuring a premium and consistent service experience for every customer. To achieve this, we collaborate closely with our hand-picked service partners. We empower them with state-of-the-art technology, comprehensive training, specialized tools, financial support, and a trusted brand. Together, we strive to exceed expectations and create lasting impressions.

                    Our vision extends beyond borders: empowering millions of professionals worldwide to redefine home services. We believe in transforming mundane tasks into extraordinary experiences, making every home a sanctuary of comfort and convenience.
                    <br>
                    <br>
                    Service Ninja is a dynamic platform that bridges the gap between skilled professionals and users seeking specialized services. Our mission is to create seamless connections, ensuring that every user's unique needs are met with precision.

                    Here's how it works:
                    <br>
                    <br>

                    <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professionals On Demand: </h4><h5>Our platform hosts a diverse pool of experienced and qualified experts. From electricians to beauty technicians, we have got it covered. These professionals bring their expertise to your doorstep, making life easier for you.</h5>
                    <br>

                    <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Smart Matchmaking: </h4><h5>Our cutting-edge algorithm goes beyond mere keyword matching. It analyzes user requirements, availability, and location. The result? A curated list of professionals who align perfectly with your needs. Whether you need a Laptop Technician ASAP or a beauty technician next week, we have got you covered.</h5>
                    <br>

                    <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Timely and Reliable: </h4><h5>We understand that time matters. Our algorithm factors in availability—ensuring that the right professional is ready when you are. No more waiting around or last-minute cancellations.</h5>
                    <br>

                    <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Quality Assurance: </h4><h5>We take pride in maintaining high standards. Each professional undergoes rigorous screening, training, and performance evaluation. You can trust that the service you receive will be top-notch.</h5>
                    <br>

                    <h5 style="font-size: 25px;">So, whether it's fixing a damaged refrigerator, or getting a soothing massage, Service Ninja is your go-to platform. We are here to empower professionals and enhance your everyday life.</h5>
                </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <!--h5 class="fw-bold text-primary text-uppercase">Team Members</h5-->
                <h1 class="mb-0">Our Leadership Team</h1>
            </div>
            <div class="row g-5">
                <center>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="img/team-1.png" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="text-primary">Arghyanil Chowdhury</h4>
                            <p class="text m-0">CEO & Co-Founder, Service Ninja</p>
                        </div>
                    </div>
                </div>
                </center>

                
                
            </div>
        </div>
    </div>
    <!-- Team End -->

    

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