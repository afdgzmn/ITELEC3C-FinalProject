<?php 

include_once("controllers/DoctorsController.php");
$controller = new DoctorsController();
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WeCare - Our Doctors</title>
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
                <a href="our-doctors.php?specialization=allergology" class="nav-item nav-link active">Our Doctors</a>
                <a href="about-us.php" class="nav-item nav-link">About Us</a>
                <a href="our-services.php" class="nav-item nav-link">Our Services</a>
                <a href="my-appointments.php" class="nav-item nav-link">My Appointments</a>
                <a href="consult.php" class="nav-item nav-link">Consult Now</a>
            </div>

            <?php include_once('layouts/components/session-checker.php') ?>

        </div>
    </nav>
    <!-- Navbar End -->
    

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Doctors</h1>
        </div>
    </div>
    <!-- Page Header End -->    


    <!-- Header Start -->
    <div class="wrapper">
        <p class="span12">
            <a href="#menu" class="side-menu-link btn btn-mini" title="Click for sub-menu">
              <i class="icon-th"></i>
            </a>
        </p>

        <div class="sidebar">
            <h3 style="padding:30px 20px 20px 20px; text-align: center;">Specialization</h3>
            <a id="allergology" href="our-doctors.php?specialization=allergology">Allergology</a>
            <a id="dermatology" href="our-doctors.php?specialization=dermatology">Dermatology</a>
            <a id="gastroenterology" href="our-doctors.php?specialization=gastroenterology">Gastroenterology</a>
            <a id="neurology" href="our-doctors.php?specialization=neurology">Neurology</a>
            <a id="ophthalmology" href="our-doctors.php?specialization=ophthalmology">Ophthalmology</a>
        </div>

        <script type = "text/javascript">
            let element = <?php echo $_GET['specialization']; ?>;
            element.classList.add('active')
        </script>
        
        <div style="display:absolute; margin-right:100px; width:65%;">
            <?php 
            $doctors = $controller->fetchDoctors($_GET);
            if (empty($doctors)) {
                ?>
                <h3>No doctors found</h3>
                <?php
            }
            else {
                foreach($doctors as $doctor) {
                    ?>

                    <div class="content bg-light" style="margin-bottom:60px">
                        <h3><?php echo $doctor['last_name'] . ", " . $doctor['first_name']; ?></h3><hr>
                        <div class="row g-5">
                            <div class="col-lg-6 wowp">
                                <p>PRIMARY SPECIALTY</p>
                                <h5><?php echo $doctor['primary_specialization']; ?></h5>
                            </div>

                            <div class="col-lg-6 wow">
                                <p> SECONDARY SPECIALTY</p>
                                <h5><?php echo $doctor['secondary_specialization']; ?></h5>
                                    
                            </div>
                        </div>

                        <hr><br>
        
                        <div class="row g-5">
                            <div class="col-lg-6 wow">
                                <h6>Local Number</h6>
                                <p style="margin-bottom:30px;"><?php echo $doctor['local_number']; ?></p>
                                    
                                <h6>Contact Number</h6>
                                <p style="margin-bottom:30px;"><?php echo $doctor['mobile_number']; ?></p>
        
                                <h6>Secretary</h6>
                                <p style="margin-bottom:30px;"><?php echo $doctor['secretary']; ?></p>    
                            </div>
                            
                            <div class="col-lg-6 wow">
                                <h6>Clinic Location</h6>
                                <p><?php echo $doctor['clinic_location'] ?></p>
                                    
                                <div class="bg-white rounded p-4" style="margin-top:30px;">
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            }

            ?>
        
        </div>
    </div>


    <!-- Footer Start -->
    
    <?php include_once('layouts/footer.php') ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>