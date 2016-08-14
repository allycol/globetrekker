<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<!--[if lte IE 9]> <html class="old-ie"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

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
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
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
        <!-- <source srcset="images/1400x1036.png 1400w , images/767x568.png 767w" /> -->
        <source srcset="images/tnfaurora_large.jpg 1400w , images/tnfaurora_small.jpg 767w">
        <img src="images/tnfaurora_small.jpg">
      </picture>
      <a href="#">
        <span class="promo-copy">
          <!-- <span class="first">Comerstone</span><span class="second">is a funny name</span> -->
          <span class="first">The North Face</span><span class="second">Spring/Summer 2016</span>
        </span>
      </a>
    </div>
    <div class="small-promo">
      <!-- <img src="images/767x568.png"> -->
      <img src="images/lowealpine_small.jpg">
      <a href="#">
        <span class="promo-copy">
          <span class="first">Lowe Alpine</span><span class="second">New 2016 Equipment</span>
        </span>
      </a>
    </div>
    <div class="small-promo">
      <!-- <img src="images/767x568.png"> -->
      <img src="images/berghaus_small.jpg">
      <a href="#">
        <span class="promo-copy">
          <span class="first">Berghaus</span><span class="second">New for 2016</span>
        </span>
      </a>
    </div>

    <div class="three-equal">
      <div class="other-promo promo-1 equalise-column">
        <a href="#"><span class="first"></span><span class="second">Get the latest direct to your mailbox.</span><span class="link-button"><span class="button bordered">Join</span></span></a>
      </div>
      <div class="other-promo promo-2 equalise-column">
        <a href="#"><span class="first"></span><span class="second">End of lines items. Last in stock.</span><span class="link-button"><span class="button bordered">Sale</span></span></a>
      </div>
      <div class="other-promo promo-3 equalise-column">
        <a href="#"><span class="first"></span><span class="second">10,866 products. All in stock.</span><span class="link-button"><span class="button bordered">About</span></span></a>
      </div>
    </div>

  </section>

  <section class="brands">
    <div class="frame">
      <h2>Popular brands</h2>
      <div class="swipe-arrow-wrapper">
        <!-- Slider main container -->
        <div class="product-swiper swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><a href="#"><img src="images/logo-north-face.png"></a></div>
                <div class="swiper-slide"><a href="#"><img src="images/logo-berghaus.png"></a></div>
                <div class="swiper-slide"><a href="#"><img src="images/logo-rab.png"></a></div>
                <div class="swiper-slide"><a href="#"><img src="images/logo-tilley.png"></a></div>
                <div class="swiper-slide"><a href="#"><img src="images/logo-osprey.png"></a></div>
                <div class="swiper-slide"><a href="#"><img src="images/logo-jack-wolfskin.png"></a></div>
            </div>
        </div>
      </div>
    </div>
  </section>

  <section class="other-products">
      <div class="frame">
        <h2>Latest items in stock</h2>
        <div class="swipe-arrow-wrapper">
          <!-- Slider main container -->
          <div class="product-swiper swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><a href="odk-product.php"><img src="images/SKU_182620-black_main.jpg">Helly Hansen Men's HH Dry Long Sleeve Stripe Crew Top<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="odk-product.php"><img src="images/SKU_252567-black-pumpkin_main.jpg">Lowe Alpine Space Case Belt Pack<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="odk-product.php"><img src="images/SKU_274066-tnf-black-fiery-red_main.jpg">The North Face Jester Daypack<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="odk-product.php"><img src="images/SKU_252656-river-blue_main.jpg">Vango Wilderness 250 Sleeping Bag<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/10098_main.jpg">Craghoppers Men's NosiLife Long Sleeve Shirt<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_273781-spruce-green-macaw-green_main.jpg">The North Face Men's Resolve Jacket<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_214437-volcano_main.jpg">Vango Wilderness 350 Sleeping Bag<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_272769-bomber-blue-limoges-blue_main.jpg">The North Face Men's Venture Jacket<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_273806-powder-blue-patriot-blue_main.jpg">The North Face Women's Resolve Jacket<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_177749-atlantic_main.jpg">Vango Nitestar 250 Sleeping Bag<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_252701-magma_main.jpg">Vango Nitestar 350 Sleeping Bag<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/20202_main.jpg">Meindl Men's Softline Light GTX Boots<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/20202_main.jpg">Meindl Men's Burma Pro MFS GTX Boots<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/SKU_3952-black-black_main.jpg">Berghaus GTX Gaiter<span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="images/102711_main.jpg">The North Face Women's Resolve Pant<span class="price">&pound;26.95</span></a></div>
              </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev others-prev"></div>
          <div class="swiper-button-next others-next"></div>
        </div>
      </div>
  </section>

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
