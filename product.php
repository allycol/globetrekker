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
				<?php
					//List products from database
					$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");
					//Display fetched records as you please
					echo '<ul class="products-wrp">';
					//while($row = $results->fetch_assoc()) {
						$row = $results->fetch_assoc();
					    echo '<li>';
						echo '<h4>'.$row["product_name"].'</h4>';
					    echo '<div><img src="images/'.$row["product_image"].'"></div>';
						echo '<div>Price : '. $currency. ' '.$row["product_price"].'<div>';

						echo '<div class="item-box">';
							echo 'Qty :';
							echo '<select class="p-qty">';
							echo '<option value="1">1</option>';
							echo '<option value="2">2</option>';
							echo '<option value="3">3</option>';
							echo '<option value="4">4</option>';
							echo '<option value="5">5</option>';
							echo '</select>';
							echo '<input class="p-code" type="hidden" value="'.$row["product_code"].'">';
							echo '<button type="submit">Add to Cart</button>';
						echo '</div>';

					    echo '</li>';

					echo '</ul>';

				?>
			</div>
		</section>

<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/plugins.js"></script>
<script src="build/js/main.js"></script>
</body>
</html>
