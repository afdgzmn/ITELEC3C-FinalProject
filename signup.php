<?php

include_once("controllers/SignupController.php");
$controller = new SignupController();
$isAuthenticated = $controller->isAuthenticated();

$errors = array();

if (isset($_POST['btn_signup'])) {
    $errors = $controller->validateData($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>WeCare - Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/signin.css">
</head>

<body>
  	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<!--<div class="col-md-6 text-center mb-5">
				<h2 class="heading-section">Login #04</h2>
				</div>-->
			</div>

			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background: linear-gradient(212.38deg, rgba(150, 141, 248, 0.7) 0%, rgba(60, 49, 190, 0.71) 100%),url(img/doctor.jpg) 70%;">
						<!--<p class="desc">WeCare</p>
										<p class="desc">Your health comes first, because we care about you.</p>-->
							<div class="right">
								<div class="right-text">
									<h2>WeCare</h2>
									<h5>Your health comes first, because we care about you</h5>
								</div>
							</div>
						</div>

						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign Up</h3>
								</div>

								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="home.php" class="social-icon d-flex align-items-center justify-content-center"><span
											class="fa fa-home"></span></a>

										<!--<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
															<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>-->
									</p>
								</div>
								
							</div>

							<!-- Signup form -->
							<?php include_once('layouts/components/signup_form.php') ?>

						</div>
					</div>
				</div>
			</div>
		</div>
  	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/signup.js"></script>

</body>

</html>