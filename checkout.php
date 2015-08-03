<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
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
						<input type="hidden" name="register" value="register">
						<fieldset>
							<p class="serverError"><span class="ico ico-s ico-warning"></span>We're sorry, but this email address has already been registered on our system. If you've forgotten your password, please click on the "I've forgotten my password" link on the left and we'll email it to you. If you haven't registered with us already, please check that you've spelt your email address correctly.</p>
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
