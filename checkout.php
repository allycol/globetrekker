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
  <title>Checkout</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="content-page">

			<div class="frame">

        <h1>Checkout</h1>

        <div class="checkout-login">
					<form name="login" class="thisForm" action="https://www.outdoorkit.co.uk/checkout.php" method="post">
						<input type=hidden name=login value=login>
						<h2>If you've shopped with us before</h2>
						<p>Please enter your email address and password below.</p>
						<fieldset>
							<ul>
								<li class="textfield">
									<label for="email">Email address</label>
									<div class="field">
										<input type="text" tabindex="1" size="25" value="" id="email" name="email" class="required validEmail" />
									</div>
								</li>
								<li class="textfield">
									<label for="password">Password</label>
									<div class="field">
										<input type="password" tabindex="2" size="25" value="" id="password" name="password" class="required" />
									</div>
								</li>
                <li class="textfield">
                  <div class="field">
										<a class="forgot-password" href="forgotten.php">I've forgotten my password</a>
									</div>
                </li>
								<li>
                  <div class="button-field">
									  <input type="submit" class="button" value="Proceed to checkout" />
                  </div>
								</li>
							</ul>
						</fieldset>
					</form>
				</div>

				<div class="checkout-signup">
					<form name="register" class="thisForm" action="https://www.outdoorkit.co.uk/checkout.php" method="post">
						<h2>If you haven't shopped with us before</h2>
						<p>Please enter your email address and create a password below. </p>
            <!-- <p class="serverError">We're sorry, but this email address has already been registered on our system. If you've forgotten your password, please click on the "I've forgotten my password" link on the left and we'll email it to you. If you haven't registered with us already, please check that you've spelt your email address correctly.</p> -->
						<input type="hidden" name="register" value="register">
						<fieldset>
							<ul>
								<li class="textfield">
									<label for="registeremail">Email address</label>
									<div class="field">
										<input type="text" tabindex="3" size="25" value="" id="registeremail" name="registeremail" class="required validEmail" />
									</div>
								</li>
								<li class="textfield">
									<label for="addpassword">Password</label>
									<div class="field">
										<input type="password" tabindex="4" size="25" value="" id="addpassword" name="password" class="required"/>
									</div>
								</li>
								<li class="textfield">
									<label for="confirmpassword">Confirm Password</label>
									<div class="field">
										<input type="password" tabindex="5" size="25" value="" id="confirmpassword" name="confirmpassword" class="required" />
									</div>
								</li>
								<li>
                  <div class="button-field">
									  <input type="submit" class="button" value="Proceed to checkout" />
                  </div>
								</li>
							</ul>
						</fieldset>
					</form>
				</div>

			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
