<?php session_start(); ?>
<html>
<head>
  <title>Ecommerce</title>
  <link rel="stylesheet" type="text/css" href="main-css.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../headerfooter.css"/>
</head>
<?php include_once '../header.php';?>
    <section id="welcome">
      <img src="Welcome.jpg">
    </section>
    <h1 id="f">Featured Items</h1>
    <section id="featured-items">
      <div class="pictures" id="item1">
          <img src="item1.jpg">
      </div>
      <div class="info" id="info1">
        <pre>MacBook Pro 20XX
 Price: XXXX.XX</pre>
      </div>
      <div class="pictures" id="item2"><img src="item2.jpg"></div>
      <div class="info" id="info2">
        <pre>Honor View10
Price: XXX.XX</pre>
      </div>
      <div class="pictures" id="item3"><img src="item3.jpg"></div>
      <div class="info" id="info3">
        <pre>  OnePlus 6
Price: XXX.XX</pre>
      </div>
      <div class="pictures" id="item4"><img src="item4.jpg"></div>
      <div class="info" id="info4">
        <pre> Beats Pill
Price: XXX.XX</pre>
      </div>
    </section>
    <?php include_once '../footer.php'; ?>
