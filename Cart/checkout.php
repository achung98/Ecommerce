<?php session_start(); ?>
<html>
  <head>
    <title>Checkout</title>
  </head>
  <body>
    <?php if(isset($_SESSION['ses'])) { ?>
      <form method="POST" action="../Includes/checkout.inc.php">
        <label>Name</label>
        <input type="text" id="name" value="<?php echo $_SESSION['first'].' '.$_SESSION['last']; ?>"required>
        <label>Email</label>
        <input type="text" id="email" value="<?php echo $_SESSION['email']; ?>" required>
        <label>Billing address</label>
        <input type="text" id="address" value="<?php echo $_SESSION['add']; ?>" required>
        <input type="reset" class="input button" value="Reset">
        <input type="submit" class="input button" value="Place order">
      </form>
    <?php } else { ?>
      <form method="POST" action="">
        <label>Full name</label>
        <input type="text" id="name" required>
        <label>Email</label>
        <input type="email" id="email" required>
        <label>Billing address</label>
        <input type="text" id="address" placeholder="Ex. 3030 Nowhere, (Apt. Room) 1, Montreal, Quebec, Zipcode" required>
        <input type="reset" class="input button" value="Reset">
        <input type="submit" class="input button" value="Place order">
      </form>
    <?php } ?>
  </body>
</html>
