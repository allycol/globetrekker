<?php
session_start(); //start session
include("config.inc.php"); //include config file
?>
<!doctype html>
<html>

<head>
  <title>Home page</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

<?php include("includes/off-canvas-nav.php"); ?>

<div id="page">

  <?php include("includes/header.php"); ?>

  <img class="banner" src="http://placehold.it/2000x600" />

  <section class="product-listings">

    <ul class="breadcrumb">
      <li><a href="#">Category</a></li>
      <li><a href="#">Sub Category</a></li>
    </ul>

    <div class="frame">

    <h1>Interiors</h1>

    <div class="product-count">


      <ul class="pagination">
        <li class="prev"><a href="">Prev</a></li>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li class="next"><a href="">Next</a></li>
      </ul>
      <p>31 - 60 of 96 products</p>
    </div>
    </div>

    <div class="filters">

      <h3>Brands:</h3>
      <ul>
        <li><input type=checkbox name="brand122" onClick="this.form.submit()"><label for="">Bergans</label></li>
        <li><input type=checkbox name="brand1" onClick="this.form.submit()"><label for="">Berghaus</label></li>
        <li><input type=checkbox name="brand5" onClick="this.form.submit()"><label for="">Craghoppers</label></li>
        <li><input type=checkbox name="brand59" onClick="this.form.submit()"><label for="">Haglofs</label></li>
        <li><input type=checkbox name="brand87" onClick="this.form.submit()"><label for="">Jack Wolfskin</label></li>
        <li><input type=checkbox name="brand159" onClick="this.form.submit()"><label for="">Marmot</label></li>
        <li><input type=checkbox name="brand42" onClick="this.form.submit()"><label for="">Montane</label></li>
        <li><input type=checkbox name="brand13" onClick="this.form.submit()"><label for="">Mountain Equipment</label></li>
        <li><input type=checkbox name="brand15" onClick="this.form.submit()"><label for="">Rab</label></li>
        <li><input type=checkbox name="brand19" onClick="this.form.submit()"><label for="">Snugpak</label></li>
        <li><input type=checkbox name="brand2" onClick="this.form.submit()"><label for="">The North Face</label></li>
        <li><input type=checkbox name="brand90" onClick="this.form.submit()"><label for="">Under Armour</label></li>
      </ul>
      <h3>Product type:</h3>
      <ul>
        <li><input type=checkbox name="master348" onClick="this.form.submit()"><label for="">3-in-1's & Triclimates</label></li>
        <li><input type=checkbox name="master713" onClick="this.form.submit()"><label for="">Baselayer & Thermal Tops</label></li>
        <li><input type=checkbox name="master212" onClick="this.form.submit()"><label for="">Bodywarmers</label></li>
        <li><input type=checkbox name="master210" onClick="this.form.submit()"><label for="">Down Jackets</label></li>
        <li><input type=checkbox name="master2332" onClick="this.form.submit()"><label for="">Gloves & Mitts</label></li>
        <li><input type=checkbox name="master2006,2327" onClick="this.form.submit()"><label for="">Insulated</label></li>
        <li><input type=checkbox name="master221" onClick="this.form.submit()"><label for="">Jackets (200 weight)</label></li>
        <li><input type=checkbox name="master213" onClick="this.form.submit()"><label for="">Legwear</label></li>
        <li><input type=checkbox name="master211" onClick="this.form.submit()"><label for="">Parkas</label></li>
        <li><input type=checkbox name="master2655" onClick="this.form.submit()"><label for="">Ponchos</label></li>
        <li><input type=checkbox name="master981" onClick="this.form.submit()"><label for="">Synthetic Jackets</label></li>
        <li><input type=checkbox name="master114" onClick="this.form.submit()"><label for="">Technical Tops - Short Sleeve</label></li>
        <li><input type=checkbox name="master2326" onClick="this.form.submit()"><label for="">Town & Casual</label></li>
        <li><input type=checkbox name="master86" onClick="this.form.submit()"><label for="">Trousers</label></li>
        <li><input type=checkbox name="master3027,3028" onClick="this.form.submit()"><label for="">Waterproof</label></li>
      </ul>
      <h3>Gender:</h3>
      <ul>
        <li><input type=checkbox name="gendermen" onClick="this.form.submit()"><label for="">men</label></li>
        <li><input type=checkbox name="genderwomen" onClick="this.form.submit()"><label for="">women</label></li>
      </ul>
      <h3>Price:</h3>
      <ul>
        <li><input type=checkbox name="price1" onClick="this.form.submit()"><label for="">&pound;1 - &pound;24.99</label></li>
        <li><input type=checkbox name="price2" onClick="this.form.submit()"><label for="">&pound;25 - &pound;49.99</label></li>
        <li><input type=checkbox name="price3" onClick="this.form.submit()"><label for="">&pound;50 - &pound;99.99</label></li>
        <li><input type=checkbox name="price4" onClick="this.form.submit()"><label for="">&pound;100 - &pound;149.99</label></li>
        <li><input type=checkbox name="price5" onClick="this.form.submit()"><label for="">&pound;150 - &pound;199.99</label></li>
      </ul>

    </div>

    <div class="listings-page">

      <div class="item"><a href="#"><img src="http://placehold.it/190">Photon ceiling <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Texture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Photon ceiling <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Texture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Photon ceiling <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Texture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Photon ceiling <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Texture lamp <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span>&pound;26.95</span></a></div>
      <div class="item"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span>&pound;26.95</span></a></div>
    </div>


</section>

  <?php include("includes/footer.php"); ?>

</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="build/js/app.js"></script>
</body>
</html>
