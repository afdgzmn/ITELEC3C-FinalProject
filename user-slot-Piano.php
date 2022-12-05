<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WeCare - Consult Now</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start 
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small>123 Street, New York, USA</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small>+012 345 6789</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    
     -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="user-index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>WeCare</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="user-index.php" class="nav-item nav-link">Home</a>
                <a href="user-doctor-allergology.php" class="nav-item nav-link">Our Doctors</a>
                <a href="user-about.php" class="nav-item nav-link">About Us</a>
                <a href="user-service.php" class="nav-item nav-link">Our Services</a>
                <a href="user-myappointments.php" class="nav-item nav-link">My Appointments</a>
                <a href="user-consult.php" class="nav-item nav-link">Consult Now</a>
                <!--
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                        <a href="feature.html" class="dropdown-item">Feature</a>
                        <a href="team.html" class="dropdown-item">Our Doctor</a>
                        <a href="appointment.html" class="dropdown-item">Appointment</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                
                <a href="contact.html" class="nav-item nav-link">Contact</a>-->
            </div>
            <a href="signin.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">LOG IN<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Appointment</h1>
            <!--<nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>-->
        </div>
    </div>
    <!-- Page Header End -->    

    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <!--<p class="d-inline-block border rounded-pill py-1 px-4">Services</p>-->
                <h1>Make An Appointment</h1>
                <p class="display-7 mb-2">Please input the following details required to proceed with your appointment.</p>
                <p class="display-7 mb-5">Rest assured that all data and informatin provided will be put into confidential use only.</p>
            
                
                <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                    <form>
                            
                        <h3 class="text-primary mb-5">PATIENT INFORMATION</h3>

                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <h5 style="text-align:left; margin-bottom:15px">First Name</h5>
                                <input type="text" class="form-control border-0" placeholder="First Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <h5 style="text-align:left; margin-bottom:15px">Last Name</h5>
                                <input type="text" class="form-control border-0" placeholder="Last Name" style="height: 55px;">
                            </div>


                            <div class="col-12 col-sm-6" style="margin-top:30px">
                                <h5 style="text-align:left; margin-bottom:15px">Date of Birth</h5>
                                <div class="date" id="date" data-target-input="nearest">
                                    <input type="date"
                                        class="form-control border-0 datetimepicker-input"
                                        placeholder="Date of Birth" style="height: 55px;">
                                </div>
                            </div>

                                <!--<div class="col-12 col-sm-6" style="margin-top:30px">
                                    <h5 style="text-align:left; margin-bottom:15px">Date of Birth</h5>
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Date of Birth" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>-->

                            <div class="col-12 col-sm-6" style="margin-top:30px">
                                <h5 style="text-align:left; margin-bottom:15px">Gender</h5>
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Choose Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                                
                                
                            <div class="col-12 col-sm-6" style="margin-top:30px">
                                <h5 style="text-align:left; margin-bottom:15px">Email</h5>
                                <input type="email" class="form-control border-0" placeholder="Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6" style="margin-top:30px">
                                <h5 style="text-align:left; margin-bottom:15px">Contact Number</h5>
                                <input type="text" class="form-control border-0" placeholder="Contact Number" style="height: 55px;">
                            </div>


                            <div class="col-12 col-sm-6" style="margin-top:30px">  
                                <h5 style="text-align:left; margin-top:0px;">Is This Your First Visit?</h5>
                                
                                <label for="yes" class="radioLeft" ><input type="radio" id="yes" name="visit" value="Yes" style="margin-right:10px" checked>Yes</label>
                                <label for="no" class="radioLeft"><input type="radio" id="no" name="visit" value="No" style="margin-right:10px">No</label>
                            </div>

                            <div class="col-12 col-sm-6" style="margin-top:30px"> 
                                <h5 style="text-align:left; margin-top:0px">Select Schedule</h5>
                                <label for="yes" class="radioLeft" ><input type="radio" id="tuesday" name="schedule" value="Monday (03:00 PM - 05:00 PM)" style="margin-right:10px" checked>Monday (03:00 PM - 05:00 PM)</label>
                                <label for="no" class="radioLeft"><input type="radio" id="saturday" name="schedule" value="Saturday (03:00 PM - 05:00 PM)" style="margin-right:10px">Saturday (03:00 PM - 05:00 PM)</label>

                            </div>
                                    
                                
                            <div class="col-12" style="margin-top:30px">
                                <button class="btn btn-primary w-100 py-3" type="submit">Confirm Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
             
       
    
    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">WeCare</h5>
                    <p class="mb-2">WeCare provides professional help, affordable healthcare, accessible, and online to all. </p>
                    <!--<p class="mb-2">Your health comes first, because we care about you.</p>-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Las Piñas, Alabang Zapote Rd</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+639 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>WeCare@gmail.com</p>
                    <!--
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!--<h5 class="text-light mb-4">Services</h5>
                    <a class="btn btn-link" href="">Cardiology</a>
                    <a class="btn btn-link" href="">Pulmonary</a>
                    <a class="btn btn-link" href="">Neurology</a>
                    <a class="btn btn-link" href="">Orthopedics</a>
                    <a class="btn btn-link" href="">Laboratory</a>-->

                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="">Our Doctors</a>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Consult Now</a>
                </div>
                <!--<div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">WeCare</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>