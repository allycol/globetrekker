<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
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
          <li class="active">1. Billing address</li>
          <li>2. Delivery address</li>
          <li>3. Delivery options</li>
          <li>4. Payment</li>
          <li>5. Order summary</li>
        </ul>
      </div>

      <h1>Billing address</h1>


			<p>Your billing address must match the billing address on your credit/debit card.</p>
			<p>Please note that we only ship within the United Kingdom.</p>

			<form name="billing" class="thisForm" action="https://www.outdoorkit.co.uk/billing.php" method="post">
				<fieldset>
          <p>Fields with an asterisk (<span class="asterisk">*</span>) must be filled in.</p>
					<ul>
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

						<li class="yourPrivacy">
							<h2>Your Privacy</h2>
							<p>At Outdoorkit, we take your privacy very seriously. We will never share your email address with another organisation and will use all information in accordance with our privacy statement. If you would like us to send you relevant offers and information, please select from the list below:</p>
              <div class="dropdown">
  							<select name="mail_flag">
                  <option value="1" selected>Yes, send me promotional emails</option>
  								<option value="0">No, don't send me any emails</option>
  							</select>
                <span class="ico ico-xs ico-chevron-down"></span>
              </div>
						</li>

						<li class="next-button">
              <input type="hidden" value="next" name="next">
              <input type="submit" class="button" value="Next step" />
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
