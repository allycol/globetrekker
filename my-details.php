<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>My details</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>

		<section class="content-page">

			<div class="frame">

      <h1>My details</h1>


			<p>From this page, you can update your address details if you have moved house or change your mailing preferences. Simply update the details in the form and press the save button.</p>

			<form name="" action="https://www.perfectlights.co.uk/update_details.php" method="post">
				<fieldset>
					<ul>
            <li class="textfield">
              <label for="title">Title</label>
              <div class="field">
                <div class="dropdown">
                  <select name="title"><option value="Mr" selected>Mr</option>
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
                <input name="first_name" value="Ally" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="surname">Surname <span class="asterisk">*</span></label>
              <div class="field">
                <input name="surname" value="Colllooooon" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="address_1">Address Line 1 <span class="asterisk">*</span></label>
              <div class="field">
                <input name="address_1" value="The Beach" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="address_2">Address Line 2</label>
              <div class="field">
                <input name="address_2" value="By the Barbie" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="town">Town <span class="asterisk">*</span></label>
              <div class="field">
                <input name="town" value="Ozland" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="county">County</label>
              <div class="field">
                <input name="county" value="" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="postcode">Postcode <span class="asterisk">*</span></label>
              <div class="field">
                <input name="postcode" value="123456" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="phone_1">Phone <span class="asterisk">*</span></label>
              <div class="field">
                <input name="phone_1" value="" size="30" type=text tabindex=25>
              </div>
            </li>
            <li class="textfield">
              <label for="mail_flag">Contact me <span class="asterisk">*</span></label>
              <div class="field">
                <div class="dropdown">
                  <select name="mail_flag">
                    <option value="0" selected>No, don't send me any emails</option>
                    <option value="1">Yes, send me promotional emails</option>
                  </select>
                  <span class="ico ico-xs ico-chevron-down"></span>
                </div>
              </div>
            </li>
            <li>
              <div class="button-field">
                <input type="hidden" value="next" name="next">
                <input type="submit" class="button" value="Save" />
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
