<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>My account</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="content-page">

			<div class="frame">

        <h1>My Account</h1>

        <p>From this page, you can update your details or check on the status of your orders.</p>

        <div class="account-landing equal-heights">
          <div class="account-section equalise-column">
            <span class="ico ico-l ico-bag"></span>
            <h2>My Orders</h2>
            <p>Check the status of all outstanding orders and see all your past orders</p>
            <a href="https://www.perfectlights.co.uk/order_history.php" class="button">View orders</a>
          </div>
          <div class="account-section equalise-column">
            <span class="ico ico-l ico-profile"></span>
            <h2>My Details</h2>
            <p>Update your address details or mailing preferences.</p>
            <a href="my-details.php" class="button">Update details</a>
          </div>
          <div class="account-section equalise-column">
            <span class="ico ico-l ico-lock"></span>
            <h2>Password</h2>
            <p>Update your password.</p>
            <a href="https://www.perfectlights.co.uk/forgotten.php?email=allycolquhoun@gmail.com&amp;submit=true" class="button">Update password</a>
          </div>
        </div>

			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
