<?php 

include_once("controllers/Controller.php");
$controller = new Controller();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WeCare - About Us</title>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="lib/wow/wow.min.js" defer></script>
    <script src="lib/easing/easing.min.js" defer></script>
    <script src="lib/waypoints/waypoints.min.js" defer></script>
    <script src="lib/counterup/counterup.min.js" defer></script>
    <script src="lib/owlcarousel/owl.carousel.min.js" defer></script>
    <script src="lib/tempusdominus/js/moment.min.js" defer></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js" defer></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js" defer></script>

    <!-- Template Javascript -->
    <script src="js/main.js" defer></script>
</head>

<body>
    <!-- Spinner Start -->

    <?php include_once('layouts/spinner.php') ?>

    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
        <a href="home.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>WeCare</h1>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a href="our-doctors.php?specialization=allergology" class="nav-item nav-link">Our Doctors</a>
                <a href="about-us.php" class="nav-item nav-link active">About Us</a>
                <a href="our-services.php" class="nav-item nav-link">Our Services</a>
                <a href="my-appointments.php" class="nav-item nav-link">My Appointments</a>
                <a href="consult.php" class="nav-item nav-link">Consult Now</a>
            </div>
            
            <?php include_once('layouts/components/session-checker.php') ?>

        </div>
    </nav>
    <!-- Navbar End -->
    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
        </div>
    </div>
    <!-- Page Header End -->    


    <!-- Header Start -->
    <div class="container-fluid header p-0 mb-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h4 class="display-7 mb-4">CORPORATE PROFILE</h4>
                <h1 class="display-4 mb-4">WeCare Medical Center</h1>
                <p class="mb-4" >It is one of the best-equipped Level 3 medical centers in Southern Metro Manila with a bed capacity of 215. For almost 45 years now, WeCare Medical Center has provided exemplary medical care to the South’s increasing population and rapidly growing communities. WeCare Medical Center utilizes the dynamic combination of credentialed and highly trained physicians who are experts in their specialties, competent nurses and other allied medical personnel, and the most advanced tools of medicine available to achieve quality diagnoses, treatments, and patient care.</p>
                <br><br>
            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="img/hospital.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    

    <!--Vision and Mission Start-->
    <div class="visionmission">
        <h1 class=" text-light mb-4"><i class="fa fa-eye text-light" style="padding-right:200px"></i>Vision</h1>
        <p class="text-light mb-4" style="padding-left:240px">The WeCare Medical Center will be the premier institution in medical services, medical and paramedical education, research and training, dedicated to life and God’s glory.</p>
        <br><br>
        <h1 class="text-light mb-4"><i class="fa fa-bullseye text-light" style="padding-right:200px"></i>Mission</h1>
        <p class="text-light mb-4" style="padding-left:240px">Be the hospital of choice for patients, physicians, students and employees in recognition of our quality patient care services and excellent training programs.</p>
        <p class="text-light mb-4" style="padding-left:240px">Be the recognized leader in healthcare technology in the Philippines.</p>
        <p class="text-light mb-4" style="padding-left:240px">Be a strong pillar to the Armed Forces of the Philippines (AFP) as its first Affiliated Reserve Medical Center in the country.</p>
        <p class="text-light mb-1" style="padding-left:240px">Be a firm advocate of health and safety and enhancing the quality of life in the community through prevention, treatment, rehabilitation of diseases by providing continuing care.</p>
    </div>  
    <!--Vision and Mission End-->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1>Dedicated to Life</h1>
                <p class="display-7 mb-4">WeCare Medical Center is committed to provide quality healthcare services by:</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h5 class="dedicate">Updating with the latest health care technology</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h5 class="dedicate">Providing consistent customer satisfaction</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h5 class="dedicate">Helping our community through our corporate social responsibility</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h5 class="dedicate">Delivering medical Services appropriate to patients' need</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h5 class="dedicate">Meeting relevant statutory and regulatory requirements</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h5 class="dedicate">Continually improving our performance</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1>About the Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/alora.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Alora Fae M. De Guzman</h5>
                            <p class="text-primary">Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/shaina.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5 style="margin-top:25px">Shaina C. Yu</h5>
                            <p class="text-primary">Front-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/kean.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Kean Aylward B. Cabel</h5>
                            <p class="text-primary">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/pancho.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Jan William Serge C. Pancho</h5>
                            <p class="text-primary">Back-End Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/micah.png" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Micah Jobel M. Bantog</h5>
                            <p class="text-primary">QA Officer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->
    
    <?php include_once('layouts/footer.php') ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>