<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>Listings page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

<?php include("includes/off-canvas-nav.php"); ?>

<?php
  // include("includes/off-canvas-filters.php");
?>

<div id="page">

  <?php include("includes/header.php"); ?>

  <div class="banner">
    <img src="http://placehold.it/2000x600" />
  </div>

  <section class="product-listings">

    <div class="frame">

      <!-- <ul class="breadcrumb">
        <li><a href="#">Category</a></li>
        <li><a href="#">Sub Category</a></li>
      </ul> -->

      <div class="header">
        <h1>Interiors</h1>
        <div class="product-count">
          <ul class="pagination">
            <li class="prev"><a href="">Prev</a></li>
            <li><a href="" class="active">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="next"><a href="">Next</a></li>
          </ul>
          <p>31 - 60 of 96 products</p>
          <!-- <a href="#off-canvas-filters" class="filters-button">Filters</a> -->
        </div>
      </div>

      <?php
        // include("includes/side-filters.php");
      ?>

      <div class="listings">

        <div class="item"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Texture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Section wall fixture <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Photon ceiling <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Texture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Section wall fixture <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Photon ceiling <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Texture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Section wall fixture <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Photon ceiling <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Texture lamp <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Section wall fixture <span class="price">&pound;26.95</span></a></div>
        <div class="item"><a href="#"><img src="http://placehold.it/300">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
      </div>

    </div><!-- END FRAME -->

    <div class="frame">
      <div class="product-count">
      <ul class="pagination">
        <li class="prev"><a href="">Prev</a></li>
        <li><a href="" class="active">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li class="next"><a href="">Next</a></li>
      </ul>
      <p>31 - 60 of 96 products</p>
      </div>
    </div><!-- END FRAME -->

  </section>

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
