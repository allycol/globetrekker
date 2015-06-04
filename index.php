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

  <div class="promos">

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

    <div class="three-equal">
      <div class="other-promo promo-1">
        <span class="first">The first line.</span><span class="second">The second line.</span><span class="link-button"><a class="button bordered" href="#">Go here</a></span>
      </div>
      <div class="other-promo promo-2">
        <span class="first">The first line.</span><span class="second">The second line.</span><span class="link-button"><a class="button bordered" href="#">Go here</a></span>
      </div>
      <div class="other-promo promo-3">
        <span class="first">The first line.</span><span class="second">The second line.</span><span class="link-button"><a class="button bordered" href="#">Go here</a></span>
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

  </div>

  <section>
      <div class="frame other-products">
        <h2>Top sellers</h2>
        <!-- Slider main container -->
        <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Photon ceiling fixtures <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Texture lamp base <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Photon ceiling fixtures <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Texture lamp base <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span>&pound;26.95</span></a></div>
                <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span>&pound;26.95</span></a></div>
            </div>
            <!-- If we need pagination -->
            <!-- <div class="swiper-pagination"></div> -->



            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
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
