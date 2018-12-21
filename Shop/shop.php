<?php session_start();
      //What items should be displayed?
      $_SESSION['section'] = $_GET['section'];
      $section = "'/".$_GET['section']."/'";
?>
<html>
<head>
  <title>SmartPhones</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../headerfooter.css"/>
  <link rel="stylesheet" type="text/css" href="items.css"/>
</head>
<?php include_once '../header.php'; ?>
<hr>
<section id="products">
  <?php
    include_once '../Includes/dbh.inc.php';
    //Select items table
    mysqli_select_db($conn, "items");
    //Get data from table
    $result = mysqli_query($conn, "SELECT * FROM items");
    echo '<div class="out-wrapper">';
    //Store values of table in variable $rows
    //Display each item with an unique id
    while($rows = mysqli_fetch_assoc($result)) {
      if(preg_match($section, $rows['img'])) {
        echo '<form class="items" id="'.$rows['id'].'" action="../Includes/addtocart.inc.php" method="post">';
        echo '<p class="name">'.$rows['name']."</p>";
        echo '<a href="description.php?'.$rows['name'].'"><img src="'.$rows['img'].'"></a>';
        echo '<p class="name">Price: '.$rows['price'].'$</p>';
        echo '<input type="hidden" name="hid_id" value="'.$rows['id'].'">';
        echo '<input type="hidden" name="hid_name" value="'.$rows['name'].'">';
        echo '<input type="hidden" name="hid_price" value="'.$rows['price'].'">';
        echo '<input type="hidden" name="hid_img" value="'.$rows['img'].'">';
        echo '<button type="submit" form="'.$rows['id'].'" class="add" name="add"><i class="fa fa-shopping-cart fa-lg"></i> Add to cart</button>';
        echo '</form>';
      }
    }
    echo '</div>';
  ?>
</section>
<?php
  if(isset($_SESSION['error'])) {
      echo '<script>alert("Item already added");</script>';
      unset($_SESSION['error']);
  }
  if(isset($_SESSION['good'])) {
    echo '<script>alert("Item added");</script>';
    unset($_SESSION['good']);
  }
?>
