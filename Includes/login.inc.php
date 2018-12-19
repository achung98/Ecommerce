<?php
  if(isset($_POST['login'])) {
    include_once 'dbh.inc.php';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);

    //Select the email from db
    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    //Check is email is in the db
    if($resultCheck < 1) {
      header("Location: ../Login/login.php?some=error");
      exit();
      //Creates array of values in db
    } else if($rows = mysqli_fetch_assoc($result)) {
        //Dehashing password
         $dehashed = password_verify($pass, $rows['user_pass']);
         //If password match
         if($dehashed) {
           session_start();
           $_SESSION['ses'] = true;
           $_SESSION['first'] = $rows['user_first'];
           $_SESSION['last'] = $rows['user_last'];
           $_SESSION['email'] = $rows['user_email'];
           $_SESSION['add'] = $rows['address'].', '.$rows['city'].', '.$rows['state'].', '.$rows['zip'];
           header("Location: ../Main/main.php");
           exit();
         } else {
           header("Location: ../Login/login.php?some=error");
           exit();
         }
    }
  }
