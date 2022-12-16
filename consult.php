<?php 

include_once("controllers/ConsultController.php");
$controller = new ConsultController();
session_start();

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
</head>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
                <a href="about-us.php" class="nav-item nav-link">About Us</a>
                <a href="our-services.php" class="nav-item nav-link">Our Services</a>
                <a href="my-appointments.php" class="nav-item nav-link">My Appointments</a>
                <a href="consult.php" class="nav-item nav-link active">Consult Now</a>
            </div>

            <?php include_once('layouts/components/session-checker.php') ?>
            
        </div>
    </nav>
    <!-- Navbar End -->
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Consultation</h1>
        </div>
    </div>
    <!-- Page Header End -->    


    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%; padding:0px;">
                <div class="row g-3">
                    <?php 
                    $doctors = $controller->fetchDoctors(array());
                    if (empty($doctors)) {
                        ?>
                        <h3>No doctors found</h3>
                        <?php
                    }
                    else {
                        foreach($doctors as $doctor) {
                            ?>

                            <div class="col-lg-6 rounded bg-light" style="padding:20px; width:48%; margin-right:10px;">
                                <p class="d-inline-block border rounded-pill py-1 px-4">
                                    <?php echo $doctor['root_specialization']; ?>
                                </p>

                                <h5 class="mb-0">
                                    <?php echo $doctor['last_name'] . ', ' . $doctor['first_name']; ?>
                                </h5><br>

                                <h6>Clinic Schedule</h6>
                                <?php
                                $schedules = $controller->fetchDoctorSchedules($doctor['uid']);
                                if (empty($schedules)) {
                                    ?>
                                    <h1>No schedules found</h1>
                                    <?php
                                }
                                else {
                                    ?>

                                    <table style="width: 100%;">
                                        <?php foreach($schedules as $schedule) {
                                            ?>

                                            <tr>
                                                <td><?php echo $controller->parseDay($schedule['day']); ?></td>
                                                <td>
                                                    <?php
                                                    echo date("h:iA", strtotime($schedule['start_time'])) . 
                                                    ' - ' . date("h:iA", strtotime($schedule['end_time']));
                                                    ?>
                                                </td>
                                            </tr>

                                            <?php
                                        }

                                        ?>
                                    </table>

                                    <?php
                                }
                                ?>

                                <form method="GET" action="book-appointment.php">
                                    <button class="btn btn-primary w-100 py-3" type="submit" style="margin-top:20px" name="doctor" value="<?php echo $doctor['uid']; ?>">Book Appointment</button>
                                </form>

                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>                    
    <!-- Appointment End -->

    
    <!-- Footer Start -->
    
    <?php include_once('layouts/footer.php') ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>