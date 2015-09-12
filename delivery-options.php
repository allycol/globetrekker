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
  <title>Delivery options</title>
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
            <li>1. Billing address</li>
            <li>2. Delivery address</li>
            <li class="active">3. Delivery options</li>
            <li>4. Payment</li>
            <li>5. Order summary</li>
          </ul>
        </div>

        <h1>Delivery options</h1>

        <form name="delivery" action="https://www.outdoorkit.co.uk/delivery_options.php" method="get">

          <input id="DefaultTabSelection" name="DefaultTabSelection" value="2" type="hidden">
          <input id="DefaultDaySelection" name="DefaultDaySelection" value="2015-08-04" type="hidden">
          <input id="DefaultTimeSelection" name="DefaultTimeSelection" value="PM" type="hidden">

          <p>Please choose the delivery service and time that best suits you: </p>

          <fieldset>

            <ul class="delivery-options">
              <li>
                  <input type="radio" name="deliveryoption" value="next" id="nextDay" class="required" />
                  <label for="nextDay">Next working day</label>
              </li>
              <li>
                  <input type="radio" name="deliveryoption" value="specificday" id="specDay" class="required" />
                  <label for="specDay">Specific day</label>
              </li>
            </ul>

            <ul class="next-options">
              <li>
                <p>For delivery on:</p>
                <h2>Tue 28 Jul 2015</h2>
                <p>please select a time below:</p>
                <div class="delivery-times">
                  <div class="dropdown">
                    <select name="nwd_delivery_service">
                      <option value="24">Anytime (7am - 6pm) - &pound;3.95</option>
                      <option value="12">AM (7am - 12pm) - &pound;6.95</option>
                      <option value="PM">PM (12pm - 6pm) - &pound;4.95</option>
                    </select>
                    <span class="ico ico-xs ico-chevron-down"></span>
                  </div>
                </div>
                <input type="hidden" value="2015-07-28" name="nwd_delivery_date">
              </li>
              <li>
                <p>Please select a date and time for your delivery:
                  <div class="delivery-times">
                    <div class="dropdown">
                      <select name="sd_delivery_date">
                        <option value="2015-07-28">Tue 28 Jul 2015</option>
                        <option value="2015-07-29">Wed 29 Jul 2015</option>
                        <option value="2015-07-30">Thu 30 Jul 2015</option>
                        <option value="2015-07-31">Fri 31 Jul 2015</option>
                        <option value="2015-08-03">Mon 03 Aug 2015</option>
                        <option value="2015-08-04">Tue 04 Aug 2015</option>
                        <option value="2015-08-05">Wed 05 Aug 2015</option>
                        <option value="2015-08-06">Thu 06 Aug 2015</option>
                        <option value="2015-08-07">Fri 07 Aug 2015</option>
                      </select>
                      <span class="ico ico-xs ico-chevron-down"></span>
                    </div>
                    <div class="dropdown">
                      <select name="sd_delivery_service">
                        <option value="24">Anytime (7am - 6pm) - &pound;3.95</option>
                        <option value="12">AM (7am - 12pm) - &pound;6.95</option>
                        <option value="PM">PM (12pm - 6pm) - &pound;4.95</option>
                      </select>
                      <span class="ico ico-xs ico-chevron-down"></span>
                    </div>
                  </div>
                </li>
              </ul>

              <p class="parcelforce">Delivery is via Parcelforce and is fully tracked. See our <a href="/article.php?article_id=4">Delivery Promise</a>.</p>

              <div class="next-button">
                <input type="submit" class="button" value="Continue" />
              </div>

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
