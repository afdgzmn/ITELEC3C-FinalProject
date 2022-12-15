<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="home.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>WeCare</h1>
    </a>
    
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="home.php" class="nav-item nav-link" id="home">Home</a>
            <a href="our-doctors.php?specialization=allergology" class="nav-item nav-link" id="our-doctors">Our Doctors</a>
            <a href="about-us.php" class="nav-item nav-link" id="about-us">About Us</a>
            <a href="our-services.php" class="nav-item nav-link" id="our-services">Our Services</a>
            <a href="my-appointments.php" class="nav-item nav-link" id="my-appointments">My Appointments</a>
            <a href="consult.php" class="nav-item nav-link" id="user-consult">Consult Now</a>
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

<script type = "text/javascript">
    let element = <?php echo $_SERVER['REQUEST_URI']; ?>;
    console.log(element)
    element.classList.add('nav-item nav-link active')
</script>