<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <meta content="width=device-width, initial-scale=1.0, minimum-scale=.5, maximum-scale=1.0, user-scalable=yes" name="viewport" />
  <title>Listings page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

<?php include("includes/off-canvas-nav.php"); ?>

<?php
  // include("includes/off-canvas-filters.php");
?>

<div id="page">

  <?php include("includes/header.php"); ?>

  <section class="product-listings">

    <div class="frame">

      <!-- <ul class="breadcrumb">
        <li><a href="#">Category</a></li>
        <li><a href="#">Sub Category</a></li>
      </ul> -->


      <h1>No products found</h1>
      <p>Please try another search or go to our <a href="index.php">home page</a>.</p>

    </div><!-- END FRAME -->

  </section>

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
