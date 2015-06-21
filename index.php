<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <title>Home page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

<?php include("includes/off-canvas-nav.php"); ?>

<div id="page">

  <?php include("includes/header.php"); ?>

  <section class="promos">

    <div class="large-promo">
      <picture>
        <source srcset="images/1918x1420.png 1918w, images/959x710.png 959w, , images/640x474.png 640w" />
        <img src="images/959x710.png">
      </picture>
      <a href="#">
        <span class="promo-copy">
          <span class="first">Comerstone</span><span class="second">is a funny name</span>
        </span>
      </a>
    </div>
    <div class="small-promo">
      <img src="http://placehold.it/500x370/eeeeee">
      <a href="#">
        <span class="promo-copy">
          <span class="first">Quadrate</span><span class="second">is this one</span>
        </span>
      </a>
    </div>
    <div class="small-promo">
      <img src="http://placehold.it/500x370/dedede">
      <a href="#">
        <span class="promo-copy">
          <span class="first">Swing</span><span class="second">is this one</span>
        </span>
      </a>
    </div>

    <div class="three-equal">
      <div class="other-promo promo-1">
        <a href="#"><span class="first">Get the latest direct to your mailbox.</span><span class="second"></span><span class="link-button"><span class="button bordered">Join</span></span></a>
      </div>
      <div class="other-promo promo-2">
        <a href="#"><span class="first">End of lines items. Last in stock.</span><span class="second"></span><span class="link-button"><span class="button bordered">Sale</span></span></a>
      </div>
      <div class="other-promo promo-3">
        <a href="#"><span class="first">Buy direct from the importer &amp; SAVE.</span><span class="second"></span><span class="link-button"><span class="button bordered">About</span></span></a>
      </div>
    </div>

    <div class="reverse">

      <div class="large-promo">
        <img src="http://placehold.it/1000x740/f4f4f4">
        <a href="#">
          <span class="promo-copy">
            <span class="first">The first line</span><span class="second">The second line</span>
          </span>
        </a>
      </div>
      <div class="small-promo">
        <img src="http://placehold.it/500x370/eeeeee">
        <a href="#">
          <span class="promo-copy">
            <span class="first">The first line</span><span class="second">The second line</span>
          </span>
        </a>
      </div>
      <div class="small-promo">
        <img src="http://placehold.it/500x370/dedede">
        <a href="#">
          <span class="promo-copy">
            <span class="first">The first line</span><span class="second">The second line</span>
          </span>
        </a>
      </div>

    </div>

  </section>

  <section>
      <div class="frame other-products">
        <h2>Latest items in stock</h2>
        <!-- Slider main container -->
        <div class="product-swiper swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Photon ceiling fixtures <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Texture lamp base <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Section wall fixture <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Photon ceiling fixtures <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Texture lamp base <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Section wall fixture <span class="price">&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/300">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->



            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev others-prev"></div>
        <div class="swiper-button-next others-next"></div>
      </div>
  </section>

  <!-- <div class="frame">
    <div class="filters">
      filters
    </div>
    <div class="listings-page">
      <div class="item">Item</div>
      <div class="item">Item</div>
      <div class="item">Item</div>
      <div class="item">Item</div>
      <div class="item">Item</div>
    </div>
  </div> -->

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
