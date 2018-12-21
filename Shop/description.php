<html>
  <head>
    <title>Specifications</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../headerfooter.css">
    <link rel="stylesheet" type="text/css" href="description.css">
  </head>
  <?php session_start(); include_once '../header.php';?>
  <hr>
  <?php
    include_once '../Includes/dbh.inc.php';
    //Select items table
    mysqli_select_db($conn, "items");
    //Get specifications of correct item
    $product = str_replace("_", " ", substr(key($_GET), 0));
    $result = mysqli_query($conn, "SELECT * FROM items WHERE name='$product'");
    $rows = mysqli_fetch_assoc($result);

    echo '<div id="wrapper">';
    echo '<div id=img>';
    echo '<h1>'.$rows["name"].'</h1>';
    echo '<img src="'.$rows["img"].'">';
    echo '</div>';
    echo '<form id="product" action="../Includes/addtocart.inc.php" method="post">';
    echo '<h2>Specifications:</h1><br>';
    echo '<div id="specs">'.$rows["specs"].'</div>';
    echo '<h2>Price: '.$rows["price"].'</h2>';
    echo '<input type="hidden" name="hid_id" value="'.$rows['id'].'">';
    echo '<input type="hidden" name="hid_name" value="'.$rows['name'].'">';
    echo '<input type="hidden" name="hid_price" value="'.$rows['price'].'">';
    echo '<input type="hidden" name="hid_img" value="'.$rows['img'].'">';
    echo '<button type="submit" form="product" type="submit" class="add" name="add"><i class="fa fa-shopping-cart fa-lg"></i> Add to cart</button>';
    echo '</form>';
    echo '</div>';
  ?>







</html>
