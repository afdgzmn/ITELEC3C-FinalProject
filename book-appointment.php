<?php 

include_once("controllers/BookAppointmentController.php");

session_start();
$controller = new BookAppointmentController();

$isAuthenticated = $controller::isAuthenticated();
if (!$isAuthenticated) {
	header('location: login.php');
}

$request = array();
if (isset($_POST['btn_book_appointment'])) {
    $request = $controller->validateData($_POST);
}

?>

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
    <script src="js/book-appointment.js" defer></script>
</head>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<body>
    <!-- Spinner Start -->

    <!-- <?php include_once('layouts/spinner.php') ?> -->

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
        <a href="home.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>WeCare</h1>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="home.php" class="nav-item nav-link">Home</a>
                <a href="our-doctors.php?specialization=allergology.php" class="nav-item nav-link">Our Doctors</a>
                <a href="about-us.php" class="nav-item nav-link">About Us</a>
                <a href="our-services.php" class="nav-item nav-link">Our Services</a>
                <a href="my-appointments.php" class="nav-item nav-link">My Appointments</a>
                <a href="consult.php" class="nav-item nav-link active">Consult Now</a>
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

            <?php include_once('layouts/components/session-checker.php') ?>

        </div>
    </nav>
    <!-- Navbar End -->
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Consultation</h1>
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
                <?php 
                
                $doctor = $controller->fetchDoctors($_GET);
                if (array_key_exists('error', $doctor)) {
                    ?> <h1> <?php echo $doctor['error']; ?> </h1> <?php
                }
                else {
                    ?>

                    <h1>Make An Appointment</h1>
                    <p class="display-7 mb-2">Please enter the following details required to proceed with your appointment.</p>
                    <p class="display-7 mb-5">Rest assured that all data and information provided will be confidential.</p>

                    <?php 
                        if (!empty($request)) {
                            ?> 
                                <div style="margin-bottom:20px;">
                                    <?php
                                        foreach($request as $result) {
                                            ?>
                                                <h5><?php echo $result ?></h5>
                                            <?php
                                        }
                                    ?> 
                                </div>
                            <?php
                        }
                    ?>
                    
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form method="POST" action=""> 
                            <h3 class="text-primary mb-5">PATIENT INFORMATION</h3>

                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <h5 style="text-align:left; margin-bottom:15px">First Name</h5>
                                    <input type="text" class="form-control border-0" style="height: 55px;" id="first-name" required placeholder="First Name" name="first_name">
                                    <div style="text-align:left; color: #FF0000;" id="first-name-check"></div>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <h5 style="text-align:left; margin-bottom:15px">Last Name</h5>
                                    <input type="text" class="form-control border-0" style="height: 55px;" id="last-name" required placeholder="Last Name" name="last_name">
                                    <div style="text-align:left; color: #FF0000;" id="last-name-check"></div>
                                </div>

                                <div class="col-12 col-sm-6" style="margin-top:30px">
                                    <h5 style="text-align:left; margin-bottom:15px">Date of Birth</h5>

                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date" class="form-control border-0 datetimepicker-input" style="height: 55px;" id="date-of-birth" required placeholder="Date of Birth" name="date_of_birth">
                                        <div style="text-align:left; color: #FF0000;" id="date-of-birth-check"></div>
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
                                    <h5 style="text-align:left; margin-bottom:15px">Sex</h5>
                                    <select class="form-select border-0" style="height: 55px;" id="sex" required name="sex">
                                        <option selected value="0" disabled>Sex</option>
                                        <option value="true">Male</option>
                                        <option value="false">Female</option>
                                    </select>
                                    <div style="text-align:left; color: #FF0000;" id="sex-check"></div>
                                </div>
                                    
                                <div class="col-12 col-sm-6" style="margin-top:30px">
                                    <h5 style="text-align:left; margin-bottom:15px">Email</h5>
                                    <input type="email" class="form-control border-0" style="height: 55px;" id="email" placeholder="Email" name="email">
                                    <div style="text-align:left; color: #FF0000;" id="email-check"></div>
                                </div>

                                <div class="col-12 col-sm-6" style="margin-top:30px">
                                    <h5 style="text-align:left; margin-bottom:15px">Mobile Number</h5>
                                    <input type="text" class="form-control border-0" style="height: 55px;" id="mobile-number" placeholder="Mobile Number" name="mobile_number">
                                    <div style="text-align:left; color: #FF0000;" id="mobile-number-check"></div>
                                </div>

                                <div class="col-12 col-sm-6" style="margin-top:30px"> 
                                    <?php 
                                        $schedules = $controller->fetchDoctorSchedules($doctor['uid']);
                                        if (empty($schedules)) {
                                            ?> <h5 style="text-align:left; margin-top:0px">No Schedules Found</h5> <?php
                                        }
                                        else {
                                            ?>
                                            
                                            <h5 style="text-align:left; margin-top:0px">Select Schedule</h5>

                                            <?php 
                                            $i = 0;
                                            foreach($schedules as $schedule) {
                                                ?>
                                                    <label for="schedule" class="radioLeft">
                                                        <input type="radio" style="margin-right:10px" id="<?php echo $schedule['day']; ?>" name="schedule" value="<?php echo $schedule['uid']; ?>" <?php if ($i == 0) { ?> checked <?php } ?>>
                                                        <?php echo $controller->parseDay($schedule['day']) . " (" . date("h:iA", strtotime($schedule['start_time'])) . " - " . date("h:iA", strtotime($schedule['end_time'])) . ")" ?>
                                                    </label>

                                                <?php $i++;
                                            }
                                        }
                                    ?>
                                </div>

                                <div class="col-12 col-sm-6" style="margin-top:30px">  
                                    <h5 style="text-align:left; margin-top:0px;">Is This Your First Visit?</h5>

                                    <label for="yes" class="radioLeft">
                                        <input type="radio" style="margin-right:10px" name="is_first_visit" value="true" checked>Yes
                                    </label>

                                    <label for="no" class="radioLeft">
                                        <input type="radio" style="margin-right:10px" name="is_first_visit" value="false">No
                                    </label>

                                    <div style="text-align:left; color: #FF0000;" id="is-first-visit-check" ></div>
                                </div>

                                <div class="col-12 col-sm-6" style="margin-top:15px">
                                    <?php
                                        $days = range(1, 31);
                                        $years = range(2022, 2024);
                                        $months = [];
                                        for ($i = 1; $i <= 12; $i++) {
                                            $months[] = $i;
                                        }
                                    ?>

                                    <select name="month" id="months">
                                        <?php
                                            foreach($months as $month) {
                                                echo "<option value=" . $month . ">" . date('F', mktime(0, 0, 0, $month, 1, date('Y'))) . "</option>";
                                            }
                                        ?>
                                    </select>

                                    <select name="day" id="days">
                                        <?php
                                            foreach($days as $day) {
                                                echo "<option value=" . $day . ">" . $day . "</option>";
                                            }
                                        ?>
                                    </select>

                                    <select name="year" id="years">
                                        <?php
                                            foreach($years as $year) {
                                                echo "<option value=" . $year . ">" . $year . "</option>";
                                            }
                                        ?>
                                    </select>

                                    <div style="text-align:left; color: #FF0000;" id="schedule-check"></div>
                                </div>
                                    
                                <div class="col-12" style="margin-top:30px">
                                    <button type="submit" class="btn btn-primary w-100 py-3" id="btn-submit" name="btn_book_appointment">Confirm Appointment</button>
                                </div>

                            </div>
                        </form>
                    </div>

                    <?php
                }
                ?>

            </div>
        </div>
    </div>
             
    
    <!-- Footer Start -->

    <?php include_once('layouts/footer.php') ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>