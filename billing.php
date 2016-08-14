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
  <title>Billing address</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/checkout-header.php"); ?>

		<section class="content-page">

			<div class="frame">

      <div class="progress">
        <ul>
          <li class="active"><em>1</em><span>Billing address</span></li>
          <li><em>2</em><span>Delivery address</span></li>
          <li><em>3</em><span>Delivery options</span></li>
          <li><em>4</em><span>Order summary</span></li>
          <li><em>5</em></i><span>Payment</span></li>
        </ul>
      </div>

      <h1>Billing address</h1>

      <div class="registered-user">
        <span class="ico ico-s ico-profile"></span>
        <h2>Already a registered user? <a href="#">Sign in</a></h2>
      </div>

			<form name="billing" class="checkout" action="https://www.outdoorkit.co.uk/billing.php" method="post">
				<fieldset>
          <!-- <p>Fields with an asterisk (<span class="asterisk">*</span>) must be filled in.</p> -->
					<ul>

            <li class="textfield">
              <label for="firstname">Email <span class="asterisk">*</span></label>
              <div class="field">
                <input name="email" value="" size="30" type=text tabindex="25" class="required" />
                <p class="hint">We need this to update you on the status of your order. We will never share your email with any other entities.</p>
              </div>
            </li>

						<li class="textfield">
							<label for="title">Title</label>
							<div class="field">
                <div class="dropdown">
  								<select name="title"><option value="Mr">Mr</option>
  									<option value="Mrs">Mrs</option>
  									<option value="Miss">Miss</option>
  									<option value="Ms">Ms</option>
  									<option value="Dr">Dr</option>
  									<option value="Prof">Prof</option>
  								</select>
                  <span class="ico ico-xs ico-chevron-down"></span>
                </div>
							</div>
						</li>

						<li class="textfield">
							<label for="firstname">First Name <span class="asterisk">*</span></label>
							<div class="field">
								<input name="first_name" value="" size="30" type=text tabindex="25" class="required" />
							</div>
						</li>

						<li class="textfield">
							<label for="surname">Surname <span class="asterisk">*</span></label>
							<div class="field">
								<input name="surname" value="" size="30" type="text" tabindex="25" class="required" />
							</div>
						</li>

						<li class="textfield">
							<label for="address_1">Address Line 1 <span class="asterisk">*</span></label>
							<div class="field">
								<input name="address_1" value="" size="30" type="text" tabindex="25" class="required" />
							</div>
						</li>

						<li class="textfield">
							<label for="address_2">Address Line 2</label>
							<div class="field">
								<input name="address_2" value="" size="30" type="text" tabindex="25" />
							</div>
						</li>

						<li class="textfield">
							<label for="town">Town <span class="asterisk">*</span></label>
							<div class="field">
								<input name="town" value="" size="30" type="text" tabindex="25" class="required" />
							</div>
						</li>

						<li class="textfield">
							<label for="county">County</label>
							<div class="field">
								<input name="county" value="" size="30" type="text" tabindex="25" />
							</div>
						</li>

						<li class="textfield">

							<label for="postcode">Postcode <span class="asterisk">*</span></label>
							<div class="field">
								<input name="postcode" value="" size="30" type="text" tabindex="25" class="required" />
                <p class="serverError">This is not a valid UK postcode</p>
							</div>
						</li>

						<li class="textfield">
							<label for="phone_1">Phone <span class="asterisk">*</span></label>
							<div class="field">
								<input name="phone_1" value="" size="30" type="text" tabindex="25" class="required" />
							</div>
						</li>

						<li class="checkbox">
							<div class="field">
                  <input id="usebilling" name="usebilling" type="checkbox"  />
							    <label for="usebilling">Use this address for delivery</label>
              </div>
						</li>

						<!-- <li class="yourPrivacy">
							<h2>Your Privacy</h2>
							<p>At Outdoorkit, we take your privacy very seriously. We will never share your email address with another organisation and will use all information in accordance with our privacy statement. If you would like us to send you relevant offers and information, please select from the list below:</p>
              <div class="dropdown">
  							<select name="mail_flag">
                  <option value="1" selected>Yes, send me promotional emails</option>
  								<option value="0">No, don't send me any emails</option>
  							</select>
                <span class="ico ico-xs ico-chevron-down"></span>
              </div>
						</li> -->

						<li class="next-button">
              <input type="hidden" value="next" name="next">
              <input type="submit" class="button" value="Next step" />
            </li>

					</ul>
				</fieldset>
			</form>

      <div class="checkout-help">

        <h2 class="mini-bag-title">Your basket</h2>

        <div class="mini-bag-item">
          <div class="pic">
            <img src="images/SKU_182620-black_main.jpg">
          </div>
          <div class="txt">
            <h3>The North Face Men's Parka 2</h3>
            <ul>
              <li>TNF Black - Small</li>
              <li>In stock</li>
              <li>Quantity: 1</li>
            </ul>
            <div class="price">&pound;269.99</div>
          </div>
        </div>

        <div class="mini-bag-item">
          <div class="pic">
            <img src="images/SKU_252567-black-pumpkin_main.jpg">
          </div>
          <div class="txt">
            <h3>The North Face Men's Parka 2</h3>
            <ul>
              <li>TNF Black - Small</li>
              <li>In stock</li>
              <li>Quantity: 1</li>
            </ul>
            <div class="price">&pound;269.99</div>
          </div>
        </div>

        <div class="sub-total">Sub-total: £391.99</div>

        <div class="security-logo">
          <!-- <img src="http://placehold.it/350x150?text=Security logo"> -->
          <img src="images/geotrust.jpg" alt="GeoTrust">
        </div>

        <div class="payment-logos">
           <h4>Accepted payment methods</h4>
           <img src="images/payment-icons.png">
         </div>

      </div>

		</div>
	</section>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
