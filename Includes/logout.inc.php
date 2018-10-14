<?php
   session_start();
   session_unset();
   header("Location: ../Main/main.php");
   exit();
 ?>
