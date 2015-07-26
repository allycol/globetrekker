<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>Reset your password</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="content-page">

			<div class="frame">

        <h1>Reset Your Password</h1>

        <p>Please enter your email address below and we'll send you an e-mail containing instructions on how to reset your password.</p>

        <form name="reset" action="https://www.outdoorkit.co.uk/forgotten.php" method=get>
    			<fieldset>
    					<ul>
    						<li class="textfield">
    							<label for="email">Email address</label>

    							<div class="field">
    								<input type="text" tabindex="1" size="25" value="" id="email" name="email" class="required" />
    								<input type="hidden" tabindex="1" size="25" value="submit" id="email" name="submit" class="required" />
    							</div>
    						</li>
    						<li>
                  <div class="button-field">
    							         <input type="submit" class="button" value="Reset" />
                  </div>
    						</li>
    					</ul>
    				</fieldset>
    			</form>

			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
