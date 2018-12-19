<?php
  session_start();
  if($_GET) {
    reset($_GET);
    $fk = substr(key($_GET), 0);
    foreach($_SESSION['cart'] as $key => $value) {
      if($value['item_id'] == $fk) {
        unset($_SESSION['cart'][$key]);
      }
    }
  }
?>

<html>
<head>
  <title>Cart</title>
  <link rel="stylesheet" type="text/css" href="cart.css">
  <link rel="stylesheet" type="text/css" href="../headerfooter.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<?php include_once '../header.php';?>
<hr>
<body>
  <?php
    //If the cart have any items
    if(!empty($_SESSION['cart'])) {?>
    <table id="cart">
      <tr>
        <th></th>
        <th>Name</th>
        <th>Price</th>
      </tr>
      <?php
          $_SESSION['total'] = 0;
          //Show every cart item in a table
          foreach ($_SESSION['cart'] as $value) {
            echo '<tr>';
            echo '<th><img src="'.$value['item_img'].'"></th>';
            echo '<th>'.$value['item_name'].'</th>';
            echo '<th>'.$value['item_price'].'</th>';
            echo '<th><i class="fas fa-ban" onclick=\'location.href="?'.$value['item_id'].'"\'></i>';
            echo '</tr>';

          $_SESSION['total'] = $_SESSION['total'] + $value['item_price'];
          }
      ?>
          <tr>
            <th></th><th></th><th></th>
            <th style="text-align: left;"rowspan="4"><form method="POST" action="checkout.php">Total: <?php echo $_SESSION['total'] ?><br><br><input type="submit" name="checkout" value="Checkout"></form></th>
          </tr>
        </table>
    <?php } else {
            echo '<p>Empty</p>';
          }
        ?>
  </body>
  <?php include_once '../footer.php'; ?>
