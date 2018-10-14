<html>
<head>
  <title>Cart</title>
  <link rel="stylesheet" type="text/css" href="../../headerfooter.css">
</head>
<body>
  <?php
    session_start();
    //If the cart have any items
    if(!empty($_SESSION['cart'])) {?>
    <table border="1">
      <tr>
        <th></th>
        <th>Name</th>
        <th>Price</th>
      </tr>
      <?php
          $total = 0;
          //Show every cart item in a table
          foreach ($_SESSION['cart'] as $key => $value) {
            echo '<tr>';
            echo '<th><img width="100" height="100" src="../'.$value['item_img'].'"></th>';
            echo '<th>'.$value['item_name'].'</th>';
            echo '<th>'.$value['item_price'].'</th>';
            echo '</tr>';

            $total = $total + $value['item_price'];
          }
      ?>
        </table>
          <p>Total: <?php echo $total; ?></p>
    <?php } else {
            echo '<p>Empty</p>';
          }
        ?>
  </body>
</html>
