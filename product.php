<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <title>Product</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="product-details">
			<div class="frame">

        <ul class="breadcrumb">
          <li><a href="#">Category</a></li>
          <li><a href="#">Sub Category</a></li>
          <li><a href="#">Cool T-Shirt</a></li>
        </ul>

        <div class="product-gallery">
          <div class="product-gallery-lrg swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="http://placehold.it/760/fff?text=Gallery+one"></div>
              <div class="swiper-slide"><img src="http://placehold.it/760/fff?text=Gallery+two"></div>
              <div class="swiper-slide"><img src="http://placehold.it/760/fff?text=Gallery+three"></div>
              <div class="swiper-slide"><img src="http://placehold.it/760/fff?text=Gallery+four"></div>
              <div class="swiper-slide"><img src="http://placehold.it/760/fff?text=Gallery+five"></div>
              <div class="swiper-slide"><img src="http://placehold.it/760/fff?text=Gallery+six"></div>
            </div>
            <div class="swiper-button-prev product-prev"></div>
            <div class="swiper-button-next product-next"></div>
          </div>
          <div class="product-gallery-thmbs swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="http://placehold.it/130/fff"></div>
              <div class="swiper-slide"><img src="http://placehold.it/130/fff"></div>
              <div class="swiper-slide"><img src="http://placehold.it/130/fff"></div>
              <div class="swiper-slide"><img src="http://placehold.it/130/fff"></div>
              <div class="swiper-slide"><img src="http://placehold.it/130/fff"></div>
              <div class="swiper-slide"><img src="http://placehold.it/130/fff"></div>
            </div>
          </div>
        </div>

				<?php
					//List products from database
					$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");
					//Display fetched records as you please

					//while($row = $results->fetch_assoc()) {
						$row = $results->fetch_assoc();


            echo '<div class="product-info">';

              echo '<h1>'.$row["product_name"].'</h1>';
						  echo '<div class="price">'. $currency. ''.$row["product_price"].'</div>';

              echo '<div class="add-to-bag">';
                echo '<div class="add-qty">';
    							echo '<label for="quantity">Qty</label>';
    							echo '<select class="p-qty" name="quantity" id="quantity">';
    							echo '<option value="1">1</option>';
    							echo '<option value="2">2</option>';
    							echo '<option value="3">3</option>';
    							echo '<option value="4">4</option>';
    							echo '<option value="5">5</option>';
    							echo '</select>';
                echo '</div>';
                echo '<div class="add-button">';
    							echo '<input class="p-code" type="hidden" value="'.$row["product_code"].'">';
    							echo '<button type="submit">Add to Cart</button>';
                echo '</div>';
  						echo '</div>';

              echo '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>';
              echo '<h2>Dimensions:</h2>';
              echo '<p>Stand: 55cm, Shade: 19cm, Width: 36cm</p>';
              echo '<h2>Materials:</h2>';
              echo '<p>Stainless steel, Something else.</p>';

            echo '</div>';

				?>
			</div>
		</section>

    <section>
      <div class="banner-swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="http://placehold.it/2000x800"></div>
          <div class="swiper-slide"><img src="http://placehold.it/2000x800"></div>
          <div class="swiper-slide"><img src="http://placehold.it/2000x800"></div>
          <div class="swiper-slide"><img src="http://placehold.it/2000x800"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section>
        <div class="frame other-products">
          <h2>You might also like</h2>
          <!-- Slider main container -->
          <div class="product-swiper swiper-container">
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
          <div class="swiper-button-prev others-prev"></div>
          <div class="swiper-button-next others-next"></div>
        </div>
    </section>

<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
