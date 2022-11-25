<?php
session_start();
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: signin.php?error=Email is required");
		exit();
	} else if (empty($pass)) {
		header("Location: signin.php?error=Password is required");
		exit();
	} else {

		$pass = md5($pass);


		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['email'] === $email && $row['password'] === $pass) {
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['id'] = $row['id'];
				header("Location: index.html");
				exit();
			} else {
				header("Location: signin.php?error=Incorect Email or password&$user_data");
				exit();
			}
		} else {
			header("Location: signin.php?error=Incorect Email or password&$user_data");
			exit();
		}
	}
} else {
	header("Location: signin.php");
	exit();
}