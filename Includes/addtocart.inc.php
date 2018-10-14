<?php
  session_start();
  if(isset($_POST['add'])) {
    //Check if cart is not empty
    if(isset($_SESSION['cart'])) {
      //Check if item has been added based on id
      //Get value of the item id
      $item_id = array_column($_SESSION['cart'], 'item_id'); //1st parameter: from what array. 2nd parameter: what specific value.
      //Check the id of the item trying to be added
      if(!in_array($_POST['hid_id'], $item_id)) { //Compare the id to the ids gotten from $item_id
        $count = count($_SESSION['cart']); //New index in where to add the new item
        $added = array(
          'item_id' => $_POST['hid_id'],
          'item_name' => $_POST['hid_name'],
          'item_price' => $_POST['hid_price'],
          'item_img' => $_POST['hid_img']
        );
        //Add the item in a new key from the array (count)
        $_SESSION['cart'][$count] = $added;
        $_SESSION['good'] = true;
        header("Location: ../Shop/shop.php?section=".$_SESSION['section']."");
        exit();
      } else {
        $_SESSION['error'] = true;
        header("Location: ../Shop/shop.php?section=".$_SESSION['section']."");
        exit();
      }
    } else {
        //Create new array of the item added
        $added = array(
          'item_id' => $_POST['hid_id'],
          'item_name' => $_POST['hid_name'],
          'item_price' => $_POST['hid_price'],
          'item_img' => $_POST['hid_img']
        );
        $_SESSION['cart'][0] = $added;
        $_SESSION['good'] = true;
        header("Location: ../Shop/shop.php?section=".$_SESSION['section']."");
        exit();
    }
  }
