<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>
  <body>
    <p id="goback"><a href="../Main/main.php">Go Back</a></p>
    <div id="greet">
      <div id="greet">
        <h1>Welcome back!</h1><br>
        <form id="register" method="post" action="../Includes/login.inc.php">
          <div id="email">
            <label>Email Address</label>
            <input type="email" name="email" class="input" required>
          </div>
          <div id="pass">
            <label>Password</label>
            <input type="password" name="pass" class="input" required>
          </div>
          <?php if(isset($_GET['some']) && $_GET['some'] == "error") {
            echo '<p style="color:red;">Wrong email or password</p>';
          }
          ?>
          <p>Does not have an account? <a href="../Register/register.php">Sign up.</a></p><br>
          <div id="done">
            <input type="reset" name="reset" class="input button" value="Reset">
            <input type="submit" name="login" class="input button" value="Log in">
          </div>
        </form>
      </div>
    </div>
    <div id="poster">
      <img src="login.jpg">
    </div>
  </body>
</hmtl>
