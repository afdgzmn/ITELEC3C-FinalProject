<?php

$fname = "localhost";
$email = "root";
$password = "";

$db_name = "login";

$conn = mysqli_connect($fname, $email, $password, $db_name);

if (!$conn) {
  echo "Connection failed!";
}