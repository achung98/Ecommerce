<?php
  if(isset($_POST['register'])) {
    include_once 'dbh.inc.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $add = mysqli_real_escape_string($conn, $_POST['address']);
    $zip = mysqli_real_escape_string($conn, $_POST['zipcode']);
    $count = mysqli_real_escape_string($conn, $_POST['country']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    //Check if email is already registered
    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0) {
      header("Location: ../Register/register.php?email=error");
      exit();
    } else {
      //Hash Password
      $hashed = password_hash($pass, PASSWORD_DEFAULT);
      //Insert the user
      $sql = "INSERT INTO users(user_first, user_last, user_email, user_pass, address, zip, country, state, city) VALUES ('$first', '$last', '$email', '$hashed', '$add', '$zip', '$count', '$state', '$city')";
      mysqli_query($conn, $sql);
      header("Location: ../Main/main.php");
      exit();
    }
  }
