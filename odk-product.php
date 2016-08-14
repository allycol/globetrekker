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
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
  <title>Product page</title>
  <link href="build/css/main.css" rel="stylesheet" type="text/css" />
</head>


<body>

	<?php include("includes/off-canvas-nav.php"); ?>

	<div id="page">

	  <?php include("includes/header.php"); ?>


		<section class="product-details">

			<div class="frame">

        <hgroup>

          <h1>The North Face Mens Resolve Jacketsss</h1>
          <div class="price">&pound;145 <span>50% off RRP of £130.00</span></div>

        </hgroup>

      </div>

      <div class="frame">

        <div class="product-gallery-wrapper">
          <!-- <ul class="breadcrumb">
            <li><a href="#">Men</a></li>
            <li><a href="#">Clothing</a></li>
            <li><a href="#">Jackets</a></li>
          </ul> -->
          <div class="product-gallery-lrg">
            <a class="large-image" href="images/263034_1_large.jpg"><img src="images/263034_1_medium.jpg"></a>
          </div>
        </div>

        <div class="product-copy">

          <div class="add-to-bag">

            <form action="http://www.google.com" method="post" name="addtobasketform">

              <div id="selectColor">
                <h2>Choose a colour</h2>
                <input id="firstPicture" name="firstPicture" value="2" data-lrg-img="images/263034_2_large.jpg" type="hidden">
                <ul class="product-gallery-thmbs">
                  <li>
                    <input type="radio" name="colour" id="colour1" data-colour="Venom Yellow" value="263034" data-availability="Out of stock" />
                    <label for="colour1"><img src="images/263034_1_thumbnail.jpg" data-med-img="images/263034_1_medium.jpg" data-lrg-img="images/263034_1_large.jpg"></label>
                  </li>
                  <li>
                    <input type="radio" name="colour" id="colour2" data-colour="Monster Blue" value="263029" data-availability="In Stock" />
                    <label for="colour2"><img src="images/263034_2_thumbnail.jpg" data-med-img="images/263034_2_medium.jpg" data-lrg-img="images/263034_2_large.jpg"></label>
                  </li>
                </ul>
                <p class="selected-colour"></p>
                <p class="colour-availability"><span class="ico ico-xs ico-tick"></span><span class="ico ico-xs ico-cross"></span> <span class="avail"></span></p>
              </div>

              <div id="selectSize">

                <h2>Choose your size </h2>

                <p class="hint">Please select a colour above to see available sizes. </p>

                <ul class="sizes clearfix">
                  <li><input type="radio" data-availability="Out of stock" id="size12" name="size" title="" value="263034" /><label for="size12">S </label></li>
                  <li><input type="radio" data-availability="Out of stock" id="size13" name="size" title="" value="263035" /><label for="size13">M </label></li>
                  <li><input type="radio" data-availability="Out of stock" id="size14" name="size" title="" value="263036" /><label for="size14">L </label></li>
                  <li><input type="radio" data-availability="Out of stock" id="size15" name="size" title="" value="263037" /><label for="size15">XL </label></li>
                  <li><input type="radio" data-availability="Out of stock" id="size16" name="size" title="" value="263038" /><label for="size16">XXL </label></li>
                </ul>

                <ul class="sizes clearfix">
                  <li><input type="radio" data-availability="In Stock" id="size7" name="size" title="" value="263029" /><label for="size7">S </label></li>
                  <li><input type="radio" data-availability="Out of stock" id="size8" name="size" title="" value="263030" /><label for="size8">M </label></li>
                  <li><input type="radio" data-availability="In Stock" id="size9" name="size" title="" value="263031" /><label for="size9">L </label></li>
                  <li><input type="radio" data-availability="In Stock" id="size10" name="size" title="" value="263032" /><label for="size10">XL </label></li>
                  <li><input type="radio" data-availability="In Stock" id="size11" name="size" title="" value="263033" /><label for="size11">XXL </label></li>
                </ul>

                <p class="size-guide"><a href="size-chart.html" data-lightbox="size-chart.html .content" class="fancyIframe">Open size guide</a></p>

                <p class="size-availability"><span class="ico ico-xs ico-tick"></span><span class="ico ico-xs ico-cross"></span> <span class="avail"></span></p>

                <p class="stock-notify">Your size not here or out of stock? <a href="#">Get notified when it arrives</a>.</p>

              </div>

              <div class="add-qty">
                <label for="quantity">Qty</label>
                <div class="dropdown">
                  <select class="p-qty" name="quantity" id="quantity">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  </select>
                  <span class="ico ico-xs ico-chevron-down"></span>
                </div>
              </div>



              <div class="price">&pound;145 <span>50% off RRP of £130.00</span></div>

              <div class="add-bag-error colour-not-selected-error"><p>Please select an available colour to continue.</p></div>

              <div class="add-bag-error size-not-selected-error"><p>Please select an available size to continue.</p></div>

      				<?php
      					//List products from database
      					$results = $mysqli_conn->query("SELECT product_name, product_desc, product_code, product_image, product_price FROM products_list");
      					//Display fetched records as you please

      					//while($row = $results->fetch_assoc()) {
      						$row = $results->fetch_assoc();

                    // echo '<h1>'.$row["product_name"].'</h1>';
      						  // echo '<div class="price">'. $currency. ''.$row["product_price"].'</div>';

                    echo '<div class="button-field">';
        							echo '<input class="p-code" type="hidden" value="'.$row["product_code"].'">';
        							echo '<button class="button" type="submit">Add to Cart</button>';
                    echo '</div>';

      				  ?>

            </form>
            </div>



            <h2>About this item</h2>
            <div class="product-description">
              <p>Whether your environment is urban or alpine, you can rely on The North Face Mens Resolve Jacket for protection in the wettest of weather. Featuring a rugged nylon ripstop exterior that shrugs off the odd bump or scrape and HyVent technology for dependable waterproof fortification, the jacket is also seam-sealed so that no rain or snow can penetrate. A hem cinch cord and adjustable hood further cocoon you in the mesh-lined interior, brushed around the collar for comfort. The North Face Mens Resolve Jacket is breathable too, allowing for excellent moisture transport away from your body, and eminently stowable, rolling down small to be stashed in its own pocket and tossed into your backpack whenever there's rain in the air</p>
            </div>

            <div class="frame">

              <div class="product-info">
                <ul>
                  <li>Fabric: 70D nylon ripstop, Hyvent</li>
                  <li>Weight: 500g</li>
                  <li>Centre back length: 71cm</li>
                  <li>Waterproof, breathable and seam sealed</li>
                  <li>Mesh lined</li>
                  <li>Brushed collar lining</li>
                  <li>Adjustable hood stows in collar</li>
                  <li>Centre front zip with Velcro closure</li>
                  <li>Two secure zip hand pockets</li>
                  <li>Hem cinch cord</li>
                </ul>
              </div>

              <div class="product-more">
                <ul>
                  <li><a href="#"><span class="image"><img src="images/craghoppers_large.png"></span><span>Craghoppers</span></a></li>
                  <li><a href="#"><span class="image"><img src="images/nosilife.jpg"></span><span>NosiLife</span></a></li>
                  <li><a href="#"><span class="image"><img src="images/solardry.jpg"></span><span>SolarDry</span></a></li>
                  <li><a href="#"><span class="image"><img src="images/wash_wear.jpg"></span><span>Wash &amp; Wear</span></a></li>
                  <li><a href="size-chart.html" data-lightbox="size-chart.html .content" class="fancyIframe"><span class="image"><img src="images/sizeGuide.gif"></span><span>The North Face<br>Size Guide</span></a></li>
                </ul>
              </div>

            </div>

            <h2>Customer reviews</h2>
            <div class="review-list">
              <div class="review">
                <p>This is a great Parka. It is very warm and will fight off the rain and cold with ease. Parka's need to be large, but this one as others have said, is typically a size bigger than you might expect. I am a big lad with a 52 inch chest and even the XXL is probably half a size too large, but the body draw strings pull it all in nicely. The faux fur on the hood feels very natural and I love the deep pockets which I can even get a medium sized tablet computer in them as well as my Gloves. I agree with other reviewers that there are a couple of minor issues, the cuffs are not elasticated which would have been nice to prevent draughts. The main issue is the hood which is massive and doesn't have a front to rear tensioning strap, just the facial Draw string so it can fall over your eyes. To give an indication I can wear a large cycling helmet and still easily pull the hood over my head with space to spare. North Face should change this a little. Apart from these minor niggles I am really pleased with the McMurdo 2 and buyers will struggle to find a better value Down insulated quality Parka.</p>
                <div class="rating"><span class="ico ico-rating-five ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>I just received my green parka today and it's awesome!! As stated in previous reviews go for a size below your normal. I usually wear small in jackets and so went for xs in this. The speed of delivery and quality of packaging is great. I will be shopping for all my kit here. Really cracking coat and really roasting:) just treat yourself and buy it.</p>
                <div class="rating"><span class="ico ico-rating-four ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>Just received my coat, exactly what I was after! ordered it late yesterday and received it before midday today. Great service by Outdoor Kit. Coat fits perfect and should do just nicely for my trip to to Finland in December.</p>
                <div class="rating"><span class="ico ico-rating-three ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>The coat is brilliant. Despite OutdoorKit's good pricing (along with their great service) it was still a fairly expensive item that I deliberated on for a long time before buying. I agree with others that the design of the hood could be a little better - particularly for serious outdoor use. However, up to now I have only used it for everyday activities such as going to work - I bought it at the right time when temperatures had started to plummet. Consequently, the hood has been more than adequate and the fairly large sizing has meant that the coat fits perfectly over my suit for work. Of course the coat has not yet been really tested in the great outdoors but I'm confident it will meet a variety of needs. Along with its performance, and the compliments I have received in relation to it, I'm now very glad I made this purchase.</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>First of all, what a fantastic coat! really REALLY warm! a bit of advice though to anyone thinking of buying this coat, buy a size smaller than you would normaly. I bought a medium sized coat, as I normaly buy medium, and they fit me perfectly, but this coat is made big, the sleaves far to long, nearly at my finger tips. I called OutdoorKit that very day, and was advised to send it back, and they would send me a replacement. Excellent customer service! had a replacement within a week, and I live in Shetland. so, let's recap, fantastic coat, buy a size smaller than you would normaly and be prepared for a great shopping experience!</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>Amazing coat sooo warm and suggly yet still huge in length and with makes me look like a juggernaut with it on!!! Brill Coat</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>Fantastic coat, well worth the money. Never even so much as felt the cold when I had it on, to the point I was so toasty I didnt think it was as cold as it should be, till you take the coat off and notice it is.</p>
                <p>Downside... Hood id ridiculous, far too large, put it up and it just come over your eyes. Usually im an XL, im 6ft, got a Large on this and there is still plenty of room. A Med might have been better, but Large was best in the arm length.</p>
                <p>I would give a 5*, but the stupid hood and generous sizing means a 4*.</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>OMG! It's like stepping outside into a blizzard still wrapped up in your duvet. The cold just does not touch you; by far the best winter coat I have ever purchased and the service from OutdoorKit is 1st class.</p>
                <p>As other reviewers mentioned these coats come up big; I ordered the 'L' as I'm 6ft 1" and just under 16 stone. The large dwarfed me, but the medium was a perfect fit.</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>Brilliant coat, very warm on these bleak mornings. Hood a little large pockets plenty. You can afford to go down a size as I did, very big coat. I must stress the service I received from a gentleman (Charles) and the team was fantastic!</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
              <div class="review">
                <p>I like all of those people that have left a review purchased a McMurdo parka around the middle of last winter so I was able to wear it through the worst of the weather that the winter (2010/2011) threw at us. In the past I've purchased many winter coats and equipment to lessen the impact of the cold. I can honestly say that I could not have purchased a better coat, no matter what. I have never been cold whilst wearing this coat and neither have I been wet. Everything that's been said about this coat is in my opinion 100% correct and I firmly believe that this has to be the finest piece of equipment that I've purchased for the winter weather. North Face has to be congratulated for producing such a fantastic coat. I have also found that everything else that the coat offers seem to be in the right place for the right reason. Very well done.</p>
                <div class="rating"><span class="ico ico-rating-two ico-xs"></span> <span class="from">Daniel Searle, England</span></div>
              </div>
            </div>
            <p><a href="#" class="button bordered">Write a review</a> &nbsp; You could win a &pound;25 voucher!</p>
          </div>

			</div>
    </section>



    <section class="other-products">
      <div class="frame">
        <h2>You might also like</h2>
        <div class="swipe-arrow-wrapper">
          <!-- Slider main container -->
          <div class="product-swiper swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Photon ceiling fixtures <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Texture lamp base <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Photon ceiling fixtures <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Latitude lampshade <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Texture lamp base <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Section wall fixture <span class="price">&pound;26.95</span></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190">Flow wall fixture lamp <span class="price">&pound;26.95</span></a></div>
              </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev others-prev"></div>
          <div class="swiper-button-next others-next"></div>
        </div>
      </div>
    </section>

    <section class="products-viewed">
      <div class="frame">
        <h2>Items viewed</h2>
        <div class="swipe-arrow-wrapper">
          <!-- Slider main container -->
          <div class="viewed-swiper swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
                  <div class="swiper-slide"><a href="#"><img src="http://placehold.it/190"></a></div>
              </div>
          </div>
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev viewed-prev"></div>
          <div class="swiper-button-next viewed-next"></div>
        </div>
      </div>
    </section>



<?php include("includes/footer.php"); ?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="build/js/app.js"></script>

</body>
</html>
