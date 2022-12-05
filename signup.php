<!doctype html>
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
            <div class="img"
              style="background: linear-gradient(212.38deg, rgba(150, 141, 248, 0.7) 0%, rgba(60, 49, 190, 0.71) 100%),url(doctor.jpg) 70%;">
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
                    <a href="index.php" class="social-icon d-flex align-items-center justify-content-center"><span
                        class="fa fa-home"></span></a>

                    <!--<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>-->
                  </p>
                </div>

              </div>
              <form action="register.php" class="signin-form">
                <div class="form-group mb-3">
                  <?php if (isset($_GET['error'])) { ?>
                  <p class="error">
                    <?php echo $_GET['error']; ?>
                  </p>
                  <?php } ?>

                  <?php if (isset($_GET['success'])) { ?>
                  <p class="success">
                    <?php echo $_GET['success']; ?>
                  </p>
                  <?php } ?>
                  <label class="label" for="name">First Name</label>
                  <?php if (isset($_GET['fname'])) { ?>
                  <input type="text" required name="fname" class="form-control" placeholder="First name"
                    value="<?php echo $_GET['fname']; ?>">
                  <?php } else { ?>
                  <input type="text" required name="fname" class="form-control" placeholder="First name">
                  <?php } ?>

                  <label class="label" for="name">Last Name</label>
                  <?php if (isset($_GET['lname'])) { ?>
                  <input type="text" required class="form-control" placeholder="Last name"
                    value="<?php echo $_GET['lname']; ?>">
                  <?php } else { ?>
                  <input type="text" required name="lname" class="form-control" placeholder="Last name">
                  <?php } ?>

                  <label class="label" for="name">Email</label>
                  <?php if (isset($_GET['email'])) { ?>
                  <input type="text" required name="email" class="form-control" placeholder="Email"
                    value="<?php echo $_GET['email']; ?>">
                  <?php } else { ?>
                  <input type="text" required name="email" class="form-control" placeholder="Email">
                  <?php } ?>


                  <label class="label" for="name">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password"
                    autocomplete="current-password" required="" id="id_password">
                  <i class="fa fa-eye field-icon" id="togglePassword" style="cursor: pointer;"></i>

                  <script>
                  const togglePassword = document.querySelector('#togglePassword');
                  const password = document.querySelector('#id_password');

                  togglePassword.addEventListener('click', function(e) {
                    // toggle the type attribute
                    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                    password.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                  });
                  </script>

                  <label class="label" for="name">Confirm Password</label>
                  <input type="password" class="form-control" placeholder="Confirm Password" name="password"
                    autocomplete="current-password" required="" id="id_confirmpassword">
                  <i class="fa fa-eye field-icon" id="toggleConfirmPassword" style="cursor: pointer;"></i>

                  <script>
                  const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
                  const confirmpassword = document.querySelector('#id_confirmpassword');

                  toggleConfirmPassword.addEventListener('click', function(e) {
                    // toggle the type attribute
                    const type = confirmpassword.getAttribute('type') === 'password' ? 'text' : 'password';
                    confirmpassword.setAttribute('type', type);
                    // toggle the eye slash icon
                    this.classList.toggle('fa-eye-slash');
                  });
                  </script>

                  <a href="#">Forgot Password?</a>
                </div>
                <!--<label class="label" for="password">Password</label>
		              	<input type="password" class="form-control" placeholder="Password" id="myInput" required>

                      	<label class="label" for="password">Confirm Password</label>
		              	<input type="password" class="form-control" placeholder="Re-type Password" id="myInput" required>
		            	</div>
		            
						<div class="form-group d-md-flex">
		            		<div class="w-50 text-left">
			            		<label class="checkbox-wrap checkbox-primary mb-0">Show Password
									<input type="checkbox" name="x" value="y" id="y" onclick="myFunction()">
									<span class="checkmark"></span>
							</label>

							<script>
								function myFunction() {
									var x = document.getElementById("myInput");
									if (x.type === "password") {
										x.type = "text";
									} else {
										x.type = "password";
									}
								}

								</script>

									
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password?</a>
									</div>-->


                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
                </div>

              </form>
              <p class="text-center">Already a member? <a data-toggle="tab" href="signin.php">Sign In</a></p>
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

</body>

</html>