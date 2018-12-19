<?php session_start() ?>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="register.css">
    <script src="countries.js"></script>
  </head>
  <body>
    <p id="goback"><a href="../Main/main.php">Go Back</a></p>
    <div id="greet">
      <h1>New Customer</h1><br>
      <form id="register" method="post" action="../Includes/register.inc.php">
        <div id="name">
          <div id="firstName">
            <label>First Name</label>
            <input type="text" name="first" class="input" required>
          </div>
          <div id="lastName">
            <label>Last Name</label>
            <input type="text" name="last" class="input" required>
          </div>
        </div>
        <div id="data">
          <div id="email">
            <label>Email Address</label>
            <input type="email" name="email" class="input" required>
          </div>
          <?php if(isset($_GET['email']) && $_GET['email'] == "error") {
            echo '<p style="color:red;">Email already registerd</p>';
          }
          ?>
          <div id="pass">
            <label>Password</label>
            <input type="password" name="pass" class="input" required>
          </div>
        </div>
        <div id ="address">
          <div id="add">
            <label>Address</label>
            <input type="text" name="address" class="input" placeholder="Ex.: 404 Nowhere, Room 1" required>
          </div>
          <div id="zip">
            <label>Zip Code</label>
            <input type="text" name="zipcode" class="input" required>
          </div>
        </div>
        <div id="place">
          <div id="cont">
            <select id="country" name="country" class="cont top"></select>
          </div>
          <div id="ste">
            <select name="state" id="state" class="cont top">Select State</select>
          </div>
          <script language="javascript">
             populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
          </script>
        </div>
        <label>City</label>
        <input type="text" id="city" name="city" class="input" required>
        <p>Already have an account? <a href="../Login/login.php">Sign in.</a></p><br>
        <div id="done">
          <input type="reset" name="reset" class="input button" value="Reset">
          <input type="submit" name="register" class="input button" value="Sign Up">
        </div>
      </form>
    </div>
    <div id="poster">
      <img src="Register.jpg">
    </div>
  </body>
</html>
