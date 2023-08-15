<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Perform password hashing
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  header("Location: success.php");
  exit();
}
?>
