<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
  <link rel="manifest" href="images/icons/manifest.json">
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

        <!-- <h1>Interiors</h1> -->
        <h1>Search results for "Focus Mini Ceiling Light" </h1>

        <div class="product-number">96 products</div>

        <div class="product-count">
          <ul class="pagination">
            <li class="prev"><a href="">Prev</a></li>
            <li><span class="active">1</span></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="next"><a href="">Next</a></li>
          </ul>
          <!-- <a href="#off-canvas-filters" class="filters-button">Filters</a> -->
        </div>
        <form class="sort-by-form" id="sortbyform" name="sortbyform" action="http://www.outdoorkit.co.uk/productlist.php?category_id=1675&amp;sortby=&amp;" method="get">
          <label for="sortBy">Sort by</label>
          <div class="field">
            <div class="dropdown">
              <input name="category_id" value="1675" size="3" type="hidden">
              <select id="sortBy" name="newsortby">
                <option value="priorityasc">Bestsellers</option>
                <option value="priceasc">Price (low to high)</option>
                <option value="pricedesc">Price (high to low)</option>
              </select>
              <span class="ico ico-xs ico-chevron-down"></span>
            </div>
          </div>
        </form>
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
        <li><span class="active">1</span></li>
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
