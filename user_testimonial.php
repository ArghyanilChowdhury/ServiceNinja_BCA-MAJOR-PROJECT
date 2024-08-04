<!DOCTYPE html>
<html lang="en">
<?php include("usersession.php"); ?>
<?php include("dbconn.php"); ?>
<?php
$us="select * from userdetails where User_Username='$username'";
$ur=mysqli_query($con,$us);
$upr=mysqli_fetch_assoc($ur);
?>
<head>
    <meta charset="utf-8">
    <title>Testimonials - ServiceNinja.com</title>
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
                    <a href="user_testimonial.php" class="nav-item nav-link active">Testimonials</a>
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
                    <h1 class="display-4 text-white animated zoomIn">Testimonials</h1>
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

    <!-- Testimonial Start -->
    <!-- Testimonial Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Total Reviews</h1>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6 text-center">
                <br>
                <h1>
                    <b><span id="average_rating">0.0</span> / 5</b>
                </h1>
                <div class="mb-3">
                    <i class="fas fa-star star-light mr-1 main_star"></i>
                    <i class="fas fa-star star-light mr-1 main_star"></i>
                    <i class="fas fa-star star-light mr-1 main_star"></i>
                    <i class="fas fa-star star-light mr-1 main_star"></i>
                    <i class="fas fa-star star-light mr-1 main_star"></i>
                </div>
                <h3><span id="total_review">0</span> Reviews</h3>
            </div>
            <div class="col-md-6">
                <p>
                    <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                    <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                    </div>
                </p>
                <p>
                    <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                    <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                    </div>
                </p>
                <p>
                    <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                    <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                    </div>
                </p>
                <p>
                    <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                    <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                    </div>
                </p>
                <p>
                    <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                    <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                    </div>
                </p>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Review Our Services</h1>
        </div>
        <form action="#" method="post" autocomplete="off">
            <div class="form-group">
                <h4 class="text-center mt-2 mb-4">
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
                </h4>
                <div class="form-group">
                    <input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo $upr['User_Firstname'] . ' ' . $upr['User_Lastname'];?>" readonly/>
                </div>
                <br>
                <div class="form-group">
                    <input type="text" name="user_username" id="user_username" class="form-control" value="<?php echo $upr['User_Username'];?>" readonly/>
                </div>
                <br>
                <div class="form-group">
                    <textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
                </div>
                <br>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-primary btn-block" id="save_review" style="width: 100%; text-align: center; padding: 10px; font-size: 16px;">Submit Review</button>
                </div>
            </div>
        </form>
    </div>
</div>

<hr>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
        </div>
        <div id="review_content"></div> <!-- Add this div to hold the reviews -->
    </div>
</div>
<!-- Testimonial End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        var rating_data = 0;

        $(document).on('mouseenter', '.submit_star', function() {
            var rating = $(this).data('rating');

            reset_background();

            for (var count = 1; count <= rating; count++) {
                $('#submit_star_' + count).addClass('text-warning');
            }
        });

        $(document).on('mouseleave', '.submit_star', function() {
            reset_background();

            for (var count = 1; count <= rating_data; count++) {
                $('#submit_star_' + count).addClass('text-warning');
            }
        });

        function reset_background() {
            for (var count = 1; count <= 5; count++) {
                $('#submit_star_' + count).removeClass('text-warning');
            }
        }

        $(document).on('click', '.submit_star', function() {
            rating_data = $(this).data('rating');
        });

        $('#save_review').click(function() {
            var user_name = $('#user_name').val();
            var user_review = $('#user_review').val();
            var user_username = $('#user_username').val();

            if (user_name == '' || user_review == '' || user_username == '') {
                alert("Please Provide Your Feedback");
                return false;
            }
            if(rating_data < 1){
                alert("Please Choose Number of Stars");
                return false;
            }
            else {
                $.ajax({
                    url:"user_submit_rating.php",
                    method:"POST",
                    data:{rating_data:rating_data, user_name:user_name, user_username:user_username, user_review:user_review}, 
                    success:function(data)
                    {
                        alert(data);
                        location.reload();
                    }
                })
            }
        });

        load_rating_data();

        function load_rating_data() {
            $.ajax({
                url:"user_submit_rating.php",
                method:"POST",
                data:{action:'load_data'},
                dataType:"JSON",
                success:function(data) {
                    $('#average_rating').text(data.average_rating);
                    $('#total_review').text(data.total_review);

                    var count_star = 0;
                    $('.main_star').each(function() {
                        count_star++;
                        if (Math.ceil(data.average_rating) >= count_star) {
                            $(this).addClass('text-warning');
                        } else {
                            $(this).removeClass('text-warning');
                        }
                        $(this).addClass('star-light');
                    });

                    $('#total_five_star_review').text(data.five_star_review);
                    $('#total_four_star_review').text(data.four_star_review);
                    $('#total_three_star_review').text(data.three_star_review);
                    $('#total_two_star_review').text(data.two_star_review);
                    $('#total_one_star_review').text(data.one_star_review);

                    $('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');
                    $('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');
                    $('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');
                    $('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');
                    $('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

                    if(data.review_data.length > 0) {
                        var html = '';

                        for(var count = 0; count < data.review_data.length; count++) {
                            html += '<div class="row mb-3">';
                            html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';
                            html += '<div class="col-sm-11">';
                            html += '<div class="card">';
                            html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';
                            html += '<div class="card-body">';
                            for(var star = 1; star <= 5; star++) {
                                var class_name = '';
                                if(data.review_data[count].rating >= star) {
                                    class_name = 'text-warning';
                                } else {
                                    class_name = 'star-light';
                                }
                                html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                            }
                            html += '<br />';
                            html += data.review_data[count].user_review;
                            html += '</div>';
                            html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';
                            html += '</div>';
                            html += '</div>';
                            html += '</div>';
                        }

                        $('#review_content').html(html);
                    }
                }
            });
        }
    });
</script>


<style>
    .star-light {
        color: #ccc;
    }

    .text-warning {
        color: #ffc107;
    }
</style>

    <!-- Testimonial End -->


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


<style>
    .progress-label-left
    {
        float: left;
        margin-right: 0.5em;
        line-height: 1em;
    }
    .progress-label-right
    {
        float: right;
        margin-left: 0.3em;
        line-height: 1em;
    }
    .star-light
    {
        color:#e9ecef;
    }
</style>

