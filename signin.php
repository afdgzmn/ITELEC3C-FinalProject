<!doctype html>
<html lang="en">

<head>
  <title>WeCare - Sign In</title>
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
                  <h3 class="mb-4">Sign In</h3>
                </div>
                <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a href="index.html" class="social-icon d-flex align-items-center justify-content-center"><span
                        class="fa fa-home"></span></a>

                    <!--<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>-->
                  </p>
                </div>

              </div>
              <form action="login.php" class="signin-form" method="post">
                <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                  <?php echo $_GET['error']; ?>
                </p>
                <?php } ?>
                <div class="form-group mb-3">
                  <label class="label" for="name">Email</label>
                  <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" name="password"
                    autocomplete="current-password"="" id="id_password">
                  <i class="fa fa-eye field-icon" id="togglePassword" style="margin-left: 0px; cursor: pointer;"></i>

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

                  <a href="#">Forgot Password?</a>
                  <!--<input type="password" class="form-control" placeholder="Password" id="myInput" required>
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
                </div>

                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>

              </form>
              <p class="text-center">Not a member? <a data-toggle="tab" href="signup.php">Sign Up</a></p>
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