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
  <title>Product page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="product-details">

			<div class="frame">

        <!-- <ul class="breadcrumb">
          <li><a href="#">Category</a></li>
          <li><a href="#">Sub Category</a></li>
          <li><a href="#">Cool T-Shirt</a></li>
        </ul> -->

        <div class="product-gallery">
          <div class="product-gallery-lrg swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="images/20840_1_medium.jpg"></div>
              <div class="swiper-slide"><img src="images/20840_2_medium.jpg"></div>
              <div class="swiper-slide"><img src="images/20840_3_medium.jpg"></div>
              <div class="swiper-slide"><img src="images/20840_4_medium.jpg"></div>
              <div class="swiper-slide"><img src="images/20840_5_medium.jpg"></div>
              <div class="swiper-slide"><img src="images/20840_6_medium.jpg"></div>
            </div>
            <a class="large-image" href="images/20840_1_large.jpg"></a>
            <!-- <div class="swiper-button-prev product-prev"></div>
            <div class="swiper-button-next product-next"></div> -->
          </div>

          <ul class="product-gallery-thmbs">
            <li><img src="images/20840_1_thumbnail.jpg" data-lrg-img="images/20840_1_large.jpg"></li>
            <li><img src="images/20840_2_thumbnail.jpg" data-lrg-img="images/20840_2_large.jpg"></li>
            <li><img src="images/20840_3_thumbnail.jpg" data-lrg-img="images/20840_3_large.jpg"></li>
            <li><img src="images/20840_4_thumbnail.jpg" data-lrg-img="images/20840_4_large.jpg"></li>
            <li><img src="images/20840_5_thumbnail.jpg" data-lrg-img="images/20840_5_large.jpg"></li>
            <li><img src="images/20840_6_thumbnail.jpg" data-lrg-img="images/20840_6_large.jpg"></li>
          </ul>
        </div>

        <div class="product-info">
				<?php
					//List products from database
					$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");
					//Display fetched records as you please

					//while($row = $results->fetch_assoc()) {
						$row = $results->fetch_assoc();

              echo '<h1>'.$row["product_name"].'</h1>';
						  echo '<div class="price">'. $currency. ''.$row["product_price"].'</div>';

              echo '<div class="add-to-bag">';
                echo '<div class="add-qty">';
    							echo '<label for="quantity">Qty</label>';
                  echo '<div class="dropdown">';
      							echo '<select class="p-qty" name="quantity" id="quantity">';
      							echo '<option value="1">1</option>';
      							echo '<option value="2">2</option>';
      							echo '<option value="3">3</option>';
      							echo '<option value="4">4</option>';
      							echo '<option value="5">5</option>';
      							echo '</select>';
                    echo '<span class="ico ico-xs ico-chevron-down"></span>';
                  echo '</div>';
                echo '</div>';
                echo '<div class="button-field">';
    							echo '<input class="p-code" type="hidden" value="'.$row["product_code"].'">';
    							echo '<button class="button" type="submit">Add to Cart</button>';
                echo '</div>';
  						echo '</div>';

				  ?>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <h3>Dimensions:</h3>
          <p>Stand: 55cm, Shade: 19cm, Width: 36cm</p>
          <h3>Materials:</h3>
          <p>Stainless steel, Something else.</p>
          <p><a href="#"><span class="ico ico-pdf ico-m"></span>Download product technical spec</a></p>
        </div>
			</div>
		</section>

    <section>
      <div class="banner-swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="http://placehold.it/2000x600"></div>
          <div class="swiper-slide"><img src="http://placehold.it/2000x600"></div>
          <div class="swiper-slide"><img src="http://placehold.it/2000x600"></div>
          <div class="swiper-slide"><img src="http://placehold.it/2000x600"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="product-reviews">
      <div class="frame">
        <h2>Customer reviews</h2>
        <div class="review-list">
          <div class="review">
            <p>Brilliant 2nd layer and very comfortable, warm and light. Also a great top to throw on and go into town as quite fashionable. Rab's quality seems to be present in all aspects, I just hope it is robust enough to last.</p>
            <div class="rating"><span class="ico ico-rating-five ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
          </div>
          <div class="review">
            <p>Being a very happy Nuptse (1) owner for the past five years, I thought it was time to update to an Nuptse '2', and after a search, found 'Outdoorkit' to be best price. Ordered on a Friday, and it arrived on the Monday, so, more than happy with the service from Outdoorkit. </p>
            <div class="rating"><span class="ico ico-rating-four ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
          </div>
          <div class="review">
            <p>Ordered a North Face Nuptse 2 Jacket at 10.30am on 7/12/2011 and received at around 9.45am the next morning. Great jacket, reliable delivery, from a trustworthy company.</p>
            <div class="rating"><span class="ico ico-rating-three ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
          </div>
          <div class="review">
            <p>I ordered this two days ago and received my coat today, the delivery is great. The packaging of the product is safe and well packed. I am really satisfied with my order and recommend shopping with Outdoorkit. This coat is warm, I'm just wearing a t-shirt with this on top in winter.</p>
            <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
          </div>
        </div>
        <a href="#" class="button bordered">Read more reviews</a>
      </div>
    </section>

    <section class="other-products">
      <div class="frame">
        <h2>You might also like</h2>
        <div class="swipe-arrow-wrapper">
          <!-- Slider main container -->
          <div class="product-swiper swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Photon ceiling fixtures <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Texture lamp base <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Photon ceiling fixtures <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Texture lamp base <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
              </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev others-prev"></div>
          <div class="swiper-button-next others-next"></div>
        </div>
      </div>
    </section>

    <section class="products-viewed">
      <div class="frame">
        <h2>Items viewed</h2>
        <div class="swipe-arrow-wrapper">
          <!-- Slider main container -->
          <div class="viewed-swiper swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
              </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev viewed-prev"></div>
          <div class="swiper-button-next viewed-next"></div>
        </div>
      </div>
    </section>

<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
