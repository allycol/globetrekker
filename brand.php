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
  <title>Brand page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

<?php include("includes/off-canvas-nav.php"); ?>

<?php include("includes/off-canvas-filters.php"); ?>

<div id="page">

  <?php include("includes/header.php"); ?>

  <!-- <div class="banner">
    <img src="http://placehold.it/2000x600" />
  </div> -->

  <section class="brand-page">

    <div class="frame">

      <hgroup>

        <h1>The North Face</h1>

      </hgroup>

      <div class="brand-top">
        <div class="about-brand">
          <h2>About The North Face</h2>
          <p><img src="images/logo-north-face.png"> The North Face supply high performance gear for all weather conditions. Their clothing uses cutting-edge materials to provide warm, comfortable jackets and coats that are also hard wearing. They also have an extensive line of rucksacks, backpacks and tents.</p>
          <p>Founded over 35 years ago, they took their name from the face of a mountain that is generally the coldest, iciest and has the hardest routes to climb. Over those 35 years, they have become the premier supplier of innovative, high-performance equipment for outdoor environments.</p>
          <p>We currently have 410 The North Face products available.</p>
        </div>
        <div class="about-odk">
          <h2>About Outdoorkit</h2>
          <ul class="plain">
            <li>We are the UK's leading online supplier of outdoor clothing and equipment.</li>
            <li>Our warehouse stocks over 4,000 outdoor products.</li>
            <li>Everything shown online is in stock.</li>
            <li>All orders placed before 4.30pm are shipped for the next working day (UK Mainland).</li>
            <li>7 days a week customer service.</li>
            <li>90 days hassle-free returns.</li>
            <li>Our postage charge is £3.95 (UK Mainland).</li>
            <li>Fully secure online shopping.</li>
          </ul>
        </div>
      </div>

      <ul class="brand-categories">
        <li><img src="images/brand-category-1.jpg" /><a href="listings.php"><span>The North Face Insulated Clothing</span></a></li>
        <li><img src="images/brand-category-2.jpg" /><a href="listings.php"><span>The North Face Waterproofs</span></a></li>
        <li><img src="images/brand-category-3.jpg" /><a href="listings.php"><span>The North Face Fleeces</span></a></li>
        <li><img src="images/brand-category-1.jpg" /><a href="listings.php"><span>The North Face Windproof &amp; Soft Shell Clothing</span></a></li>
        <li><img src="images/brand-category-2.jpg" /><a href="listings.php"><span>The North Face Shirts &amp; Tops</span></a></li>
        <li><img src="images/brand-category-3.jpg" /><a href="listings.php"><span>The North Face Legwear</span></a></li>
        <li><img src="images/brand-category-1.jpg" /><a href="listings.php"><span>Kid's The North Face Clothing</span></a></li>
        <li><img src="images/brand-category-2.jpg" /><a href="listings.php"><span>The North Face Boots &amp; Winter Footwear</span></a></li>
        <li><img src="images/brand-category-3.jpg" /><a href="listings.php"><span>The North Face Walking, Trail Running &amp; Lifestyle Shoes</span></a></li>
        <li><img src="images/brand-category-1.jpg" /><a href="listings.php"><span>The North Face Large Rucksacks, Duffels &amp; Travel Bags</span></a></li>
        <li><img src="images/brand-category-2.jpg" /><a href="listings.php"><span>The North Face Daypacks, Messenger &amp; Bumbags</span></a></li>
        <li><img src="images/brand-category-3.jpg" /><a href="listings.php"><span>The North Face Accessories</span></a></li>
        <li><img src="images/brand-category-1.jpg" /><a href="listings.php"><span>The North Face Tents</span></a></li>
        <li><img src="images/brand-category-2.jpg" /><a href="listings.php"><span>The North Face Sleeping Bags</span></a></li>
      </ul>

      <div class="view-all"><a href="" class="button smaller">View all The North Face products</a></div>

    </div><!-- END FRAME -->





  </section>

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
