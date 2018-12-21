<?php session_start(); ?>
<html>
  <head>
    <title>Checkout</title>
    <link rel="stylesheet" type="text/css" href="checkout.css">
  </head>
  <body>
    <?php if(isset($_SESSION['ses'])) { ?>
      <body>
        <p id="goback"><a href="cart.php">Go Back</a></p>
        <div id="checkout">
          <h1>Checkout</h1>
          <form method="POST" action="../Includes/checkout.inc.php">
            <div id="name">
              <label>Name</label>
              <input type="text" class="input" value="<?php echo $_SESSION['first'].' '.$_SESSION['last']; ?>"required>
            </div>
            <div id="email">
              <label>Email</label>
              <input type="text" class="input" value="<?php echo $_SESSION['email']; ?>" required>
            </div>
            <div id="address">
              <label>Billing address</label>
              <input type="text" class="input" value="<?php echo $_SESSION['add']; ?>" required>
            </div>
            <div id="buttons">
              <input type="reset" class="input button" value="Reset">
              <input type="submit" class="input button" value="Place order">
            </div>
          </form>
          </div>
          <div id="poster">
            <img src="checkout.jpg">
          </div>
        </body>
    <?php } else { ?>
      <body>
        <p id="goback"><a href="cart.php">Go Back</a></p>
        <div id="checkout">
          <h1>Checkout</h1>
          <form method="POST" action="../Includes/checkout.inc.php">
            <div id="name">
              <label>Full name</label>
              <input type="text" class="input" required>
            </div>
            <div id="email">
              <label>Email</label>
              <input type="email" class="input" required>
            </div>
            <div id="address">
              <label>Billing address</label>
              <input type="text" class="input" placeholder="Ex. 3030 Nowhere, (Apt., Room) 1, Montreal, Quebec, Zipcode" required>
            </div>
            <div id="buttons">
              <input type="reset" class="input button" value="Reset">
              <input type="submit" class="input button" value="Place order">
            </div>
          </form>
        </div>
        <div id="poster">
          <img src="checkout.jpg">
        </div>
      </body>
    <?php } ?>
  </body>
</html>
