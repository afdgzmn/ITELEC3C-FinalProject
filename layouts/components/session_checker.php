<?php 
	$isAuthenticated = $controller->isAuthenticated();
	if ($isAuthenticated) {
		?>
			<a href="logout.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">LOG OUT<i class="fa fa-arrow-right ms-3"></i></a>
		<?php
	}
	else {
		?>
			<a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">LOG IN<i class="fa fa-arrow-right ms-3"></i></a>
		<?php
	}
?>