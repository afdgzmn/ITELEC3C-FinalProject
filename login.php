<?php

include_once("controllers/LoginController.php");

session_start();
$controller = new LoginController();

$isAuthenticated = $controller::isAuthenticated();
if ($isAuthenticated) {
	header('location: home.php');
}

$errors = array();
if (isset($_POST['btn_login'])) {
    $errors = $controller->validateData($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>WeCare - Log In</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/auth.css">
	<script src="js/login.js" defer></script>
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background: linear-gradient(212.38deg, rgba(150, 141, 248, 0.7) 0%, rgba(60, 49, 190, 0.71) 100%),url(img/doctor.jpg) 70%;">
							<div class="right">
								<div class="right-text">
									<h2>WeCare</h2>
									<h5>Your health comes first, because we care about you.</h5>
								</div>
							</div>
						</div>

						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Log In</h3>
								</div>

								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="home.php" class="social-icon d-flex align-items-center justify-content-center">
											<span class="fa fa-home"></span>
										</a>
									</p>
								</div>
							</div>
						
							<!-- Login form -->
							<form method="POST" action="" class="signin-form">
								<div class="form-group mb-3">
									<?php 
										if (!empty($errors)) {
											?>
											<p class="error" style="color: #FF0000">
												<?php 
													foreach ($errors as $error) {
														echo $error;
													}
												?>
											</p>
											<?php 
										}
									?>

									<label class="label" for="name">Email</label>
									<input type="text" class="form-control" id="email" name="email" required placeholder="Email">
									<div id="email-check" style="color: #FF0000"></div>

									<label class="label" for="name">Password</label>
									<input type="password" class="form-control" id="password" name="password" required placeholder="Password">
									<i class="fa fa-eye field-icon" id="toggle-password" style="cursor: pointer;"></i>
									<div id="password-check" style="color: #FF0000"></div>
								</div>

								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3" id="btn-submit" name="btn_login">Log In</button>
								</div>

							</form>

							<p class="text-center">Not a member? <a data-toggle="tab" href="signup.php">Sign Up</a></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>