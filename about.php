<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>Product page</title>
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

          <h1>About us</h1>

          <h2>About Perfect Lights</h2>

          <p>We are currently the UK's leading online supplier of outdoor clothing and equipment. We're based in a warehouse in Luton, Bedfordshire which stocks over 3,500 outdoor products. We also have an established shop in <a href="#">St. Albans high street</a>.</p>

          <h2>Customer service is at the heart of what we do</h2>

          <p>That's why you'll find our phone number at the top of every page on our website. We aim to answer every single call we receive on any weekday (business hours) and reply to your email within 1-2 hours, although we often manage straightaway! Many members of our customer service team have years of experience in the outdoor industry and all are fully product-trained, so are fully qualified to answer any questions you may have.</p>

          <h2>Accreditation</h2>

          <p>We have been a member of <a href="#">Trusted Shops</a> since 1st August 2013. Being accredited by Trusted Shops means that Outdoorkit deals with all e-commerce transactions in a legal, decent, honest, truthful and fair way. This accreditation means that customers have the right to clear and accurate delivery information and charges, delivery within the agreed time frame, helpful support and a clear returns process.</p>


          <p>We are also accredited by Safebuy, who continuously carry out 'mystery shopper' exercises and standards checking to ensure that retailers are adhering to their Code of Conduct. If you'd like to read online reviews of our business to see what our customers think of us, we've partnered with <a href="#">Trustpilot</a> to collate reviews from around the web.</p>


          <h2>Security</h2>

          <p>Our web site is secured with a 256-bit digital certificate and run by a technical team who have run multi-million pound websites for household names. We conform with the payment industry PCI standards and use <a href="#">SagePay</a> for credit card transactions, ensuring that all your credit card information is totally secure.</p>

          <h2>About SSL certificates</h2>
          <p>If you'd like to know anything else about us, please <a href="#">contact us</a>.</p>

          <p>Outdoorkit is the trading name of Globetrekker Outdoorkit Ltd, registered to Unit 22c, Park Avenue Ind Estate, Luton, LU3 3BP. All prices displayed are inclusive of VAT and our VAT number is 895592165. VAT will automatically be removed for BFPO and Channel Islands orders.</p>

          <p>* Delivery may take 2 working days for the Channel Islands and outlying areas and islands of Scotland, Northern Ireland, Sicilly Isles and Isle of Man. BFPO orders can take up to 10 working days.</p>


          <h2>Price Comparison</h2>

          <p>Outdoorkit is a proud partner of the Price Comparison engine <a href="#">Idealo</a>.</p>

        </div>

			</div>
		</section>


<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
