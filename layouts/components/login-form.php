<form method="POST" action="" class="signin-form">
    <div class="form-group mb-3">
        <?php 
            if (!empty($errors)) {
                ?>
                <p class="error">
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
        <div id="email-check"></div>

        <label class="label" for="name">Password</label>
        <input type="password" class="form-control" id="password" name="password" required placeholder="Password">
        <i class="fa fa-eye field-icon" id="toggle-password" style="cursor: pointer;"></i>
        <div id="password-check"></div>

        <a href="#">Forgot Password?</a>
    </div>

    <div class="form-group">
        <button type="submit" class="form-control btn btn-primary rounded submit px-3" id="btn-submit" name="btn_login">Log In</button>
    </div>

</form>

<p class="text-center">Not a member? <a data-toggle="tab" href="signup.php">Sign Up</a></p>