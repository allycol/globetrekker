<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

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
  <title>Contact page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="content-page">

			<div class="frame">

        <div class="sub-nav">
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">St Albans shop</a></li>
            <li><a href="#">Contact us</a></li>
          </ul>
        </div>

        <div class="content-column">

          <h1>Contact us</h1>

          <p>You can contact us by phone on 01582 879 879 or by using the form below. Alternatively, you can write to us at Unit 22c, Park Avenue Ind Estate, Luton, LU3 3BP.</p>
      		<p>If your enquiry is about an order, please quote your order number in your question.</p>
      		<p>Fields with an asterisk (<span class="asterisk">*</span>) must be filled in.</p>

      		<form id="contactUs" method="post" action="/contact_us.php">

      			<fieldset>
      				<ul>
      				<li class="textfield">
      					<label for="name">Name <span class="asterisk">*</span>
      										</label>

      					<div class="field">
      						<input type="text" id="name" name="name" value="" size="30" tabindex="25" />
      					</div>
      				</li>

      				<li class="textfield">
      					<label for="email">Email <span class="asterisk">*</span>
      										</label>
      					<div class="field">
      						<input type="text" id="email" name="email" value="" size="30" tabindex="25" />

      					</div>
      				</li>

      				<li class="textfield">
      					<label for="phone">Phone</label>
      					<div class="field">
      						<input type="text" id="phone" name="phone" value="" size="30" tabindex="25" />
      					</div>
      				</li>


      				<li class="textfield">
      					<label for="question">Question</label>
      					<div class="field">
      						<textarea id="message" name="message" rows="10"></textarea>
      					</div>
      				</li>

      				<li>
                <div class="button-field">
      					       <input class="button" type="submit" class="validateForm" value="Send Enquiry" />
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
