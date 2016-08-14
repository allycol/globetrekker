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
  <title>Listings page</title>
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

  <section class="product-listings">

    <div class="frame">

      <hgroup>

        <h1>The North Face</h1>

        <div class="filters-button">
          <a href="#off-canvas-filters">Filter results <span class="ico ico-xs ico-filter"></span></a>
        </div>

      </hgroup>

      <?php
        include("includes/side-filters.php");
      ?>

      <div class="listings">

        <div class="brand-top">
          <div class="about-brand single">
            <p><img src="images/logo-north-face.png"> The North Face supply high performance gear for all weather conditions. Their clothing uses cutting-edge materials to provide warm, comfortable jackets and coats that are also hard wearing. They also have an extensive line of rucksacks, backpacks and tents.</p>
            <p>Founded over 35 years ago, they took their name from the face of a mountain that is generally the coldest, iciest and has the hardest routes to climb. Over those 35 years, they have become the premier supplier of innovative, high-performance equipment for outdoor environments.</p>
            <p>We currently have 410 The North Face products available.</p>
          </div>
        </div>

        <div class="listing-tools">

          <div class="sort-by-form">
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
          </div>

          <div class="product-number">31 - 60 of <strong>96 products</strong></div>

          <div class="product-count">
            <ul class="pagination">
              <li class="prev"><a href="">Prev</a></li>
              <li><span class="active">1</span></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li class="next"><a href="">Next</a></li>
            </ul>
          </div>

        </div>

        <div class="frame">
          <div class="item">
            <a href="odk-product.php">
              <span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260034-dish-blue-moab-khaki_enlarged.jpg"></span>
              <ul class="colours">
                <li><img src="http://www.outdoorkit.co.uk//images/products/212121-tnf-black_tinythumbnail.jpg"></li>
                <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
                <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
                <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260034-dish-blue-moab-khaki_tinythumbnail.jpg"></li>
                <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
                <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
              </ul>
              The North Face Men's Nuptse 2 Jacket
              <div class="price">&pound;152.99 <span>(15% off RRP)</span></div>
              <span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/thenorthface_small.png"></span>
            </a>
          </div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261383-electric-mango_enlarged.jpg"></span> <ul class="colours">
            <li><img src="http://www.outdoorkit.co.uk//images/products/212121-tnf-black_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
          </ul> Rab Men's Microlight Jacket <div class="price">&pound;143.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/rab_small2.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261478-electric-chartreuse_enlarged.jpg"></span> <ul class="colours">
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
          </ul> Rab Men's Neutrino Endurance Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/mountainequipment_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260830-shadow-grey_enlarged.jpg"></span> <ul class="colours">
            <li><img src="http://www.outdoorkit.co.uk//images/products/212121-tnf-black_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260034-dish-blue-moab-khaki_tinythumbnail.jpg"></li>
          </ul> Mountain Equipment Men's Classic Lightline Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/thenorthface_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260704-asphalt-grey-dark-eggplant-purple_enlarged.jpg"></span> <ul class="colours">
            <li><img src="http://www.outdoorkit.co.uk//images/products/212121-tnf-black_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260034-dish-blue-moab-khaki_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/212121-tnf-black_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260044-grip-green-black-ink-green_tinythumbnail.jpg"></li>
            <li><img src="http://www.outdoorkit.co.uk//images/products/SKU_260039-sequoia-red-brick-house-red_tinythumbnail.jpg"></li>
          </ul> The North Face Men's La Paz Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/thenorthface_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261428-electric-zinc_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Ascent Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/mountainequipment_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_181739-jelly-bean-cad-yellow_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Montane Men's Featherlite Down Jacket <span class="price">&pound;26.95</span><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/rab_small2.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_258458-graphene-wasabi_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Positron Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/rab_small2.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260034-dish-blue-moab-khaki_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> The North Face Men's Nuptse 2 Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/thenorthface_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261383-electric-mango_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Microlight Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261478-electric-chartreuse_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Neutrino Endurance Jacket <div class="price">&pound;247.99 <span>(15% off RRP)</span></div></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260830-shadow-grey_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Mountain Equipment Men's Classic Lightline Jacket <span class="price">&pound;179.99</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260704-asphalt-grey-dark-eggplant-purple_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> The North Face Men's La Paz Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261428-electric-zinc_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Ascent Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_181739-jelly-bean-cad-yellow_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Montane Men's Featherlite Down Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_258458-graphene-wasabi_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Positron Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260034-dish-blue-moab-khaki_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> The North Face Men's Nuptse 2 Jacket <span class="price">&pound;152.99</span><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/thenorthface_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261383-electric-mango_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Microlight Jacket <span class="price">&pound;143.99</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261478-electric-chartreuse_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Neutrino Endurance Jacket <span class="price">&pound;247.49</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260830-shadow-grey_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Mountain Equipment Men's Classic Lightline Jacket <span class="price">&pound;179.99</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260704-asphalt-grey-dark-eggplant-purple_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> The North Face Men's La Paz Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261428-electric-zinc_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Ascent Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_181739-jelly-bean-cad-yellow_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Montane Men's Featherlite Down Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_258458-graphene-wasabi_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Positron Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260034-dish-blue-moab-khaki_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> The North Face Men's Nuptse 2 Jacket <span class="price">&pound;152.99</span><span class="brand-logo"><img src="http://www.outdoorkit.co.uk//images09/logos/thenorthface_small.png"></span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261383-electric-mango_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Microlight Jacket <span class="price">&pound;143.99</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261478-electric-chartreuse_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Neutrino Endurance Jacket <span class="price">&pound;247.49</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260830-shadow-grey_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Mountain Equipment Men's Classic Lightline Jacket <span class="price">&pound;179.99</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_260704-asphalt-grey-dark-eggplant-purple_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> The North Face Men's La Paz Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_261428-electric-zinc_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Ascent Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_181739-jelly-bean-cad-yellow_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Montane Men's Featherlite Down Jacket <span class="price">&pound;26.95</span></a></div>
          <div class="item"><a href="odk-product.php"><span class="main-pic"><img src="http://www.outdoorkit.co.uk/images/products/SKU_258458-graphene-wasabi_enlarged.jpg"></span> <ul class="colours"><li></li><li></li><li></li></ul> Rab Men's Positron Jacket <span class="price">&pound;26.95</span></a></div>
        </div>

        <div class="product-count">
          <ul class="pagination">
            <li class="prev"><a href="">Prev</a></li>
            <li><span class="active">1</span></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li class="next"><a href="">Next</a></li>
          </ul>
          <div class="product-number">31 - 60 of <strong>96 products</strong></div>
        </div>

      </div>

    </div><!-- END FRAME -->



  </section>

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
