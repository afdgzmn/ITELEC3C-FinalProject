<?php
session_start();
include "db_conn.php";

if (
  isset($_POST['email']) && isset($_POST['password']) && isset($_POST['fname']) && isset($_POST['lname'])
  && isset($_POST['confirm_password'])
) {

  function validate($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $email = validate($_POST['email']);
  $pass = validate($_POST['password']);

  $re_pass = validate($_POST['confirm_password']);
  $fname = validate($_POST['fname']);
  $lname = validate($_POST['lname']);

  $user_data = 'email=' . $email . '&fname=' . $fname . '&lname=' . $lname;

  if ($pass != $re_pass) {
    header("Location: signup.php?error=The confirmation password  does not match&$user_data");
    exit();
  } else {
    $pass = md5($pass);

    $sql = "SELECT * FROM users WHERE email='$email' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      header("Location: signup.php?error=The email is taken try another&$user_data");
      exit();
    } else {
      $sql2 = "INSERT INTO users(email, password, fname, lname) VALUES('$email', '$pass', '$fname', '$lname')";
      $result2 = mysqli_query($conn, $sql2);
      if ($result2) {
        header("Location: signup.php?success=Your account has been created successfully");
      } else {
        header("Location: signup.php?error=unknown error occurred&$user_data");
        exit();
      }
    }
  }
} else {
  header("Location: signup.php");
  exit();
}
?>