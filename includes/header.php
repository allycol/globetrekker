<header>
  <div class="frame">
    <div class="phone">
      <span class="ico ico-s ico-phone"></span>
      <span class="number">01582 879 879</span>
      <span class="times">8.30am-5.30pm Monday-Friday</span>
    </div>
    <div class="off-canvas-button">
      <a href="#off-canvas-menu">
        <span class="ico ico-burger ico-m burger"></span>
        <span class="menu-label">Menu</span>
      </a>
    </div>
    <div class="logo">
      <a href="index.php">
        <picture>
          <source type="image/svg+xml" srcset="images/perfect-logo.svg" />
          <img src="images/perfect-logo.png" alt="Perfect Lights" />
        </picture>
      </a>
    </div>
    <div class="account-nav">
      <ul>
        <li class="basket">
          <a href="#" class="cart-box" id="cart-info" title="View Cart">
            <span class="ico ico-s ico-bag"></span>
            <span class="txt">
              <span class="label">Bag</span>

              <!-- Hard coded mini shopping bag Qty -->
              <span class="bag-qty">1</span>

            	<?php
            		// if(count($_SESSION["products"]) > 0){
                // //if(isset($_SESSION["products"])){
            		// 	echo '<span class="bag-qty">' .count($_SESSION["products"]). '</span>';
            		// }else{
            		// 	echo '<span class="bag-qty empty">0</span>';
            		// }
            	?>
            <span>
          </a>
        </li>
        <!-- <li class="signin"><a href="#"><span class="ico ico-s ico-profile"></span> <span class="label">Sign in</span></a></li> -->
        <li class="account"><a href="#"><span class="ico ico-s ico-profile"></span> <span class="label">My account</span></a><br></li>
        <li class="search"><a href="#"><span class="ico ico-s ico-magnify"></span> <span class="label">Search</span></a></li>
      </ul>
      <div class="search-form">
        <form>
          <input autocomplete="off" id="search" class="search-field" name="search-field" type="text" value="" placeholder="Looking for something?" />
          <input name="search-button" type="submit" value="">
          <span class="ico ico-xs ico-magnify"></span>
        </form>
      </div>

    </div>
  </div>

  <div class="shopping-cart-box-container">
    <div class="shopping-cart-box">
      <div id="shopping-cart-results">
        <!-- Hard coded mini shopping bag -->
        <ul class="cart-products-loaded">
          <li>
            <img src="images/tshirt-1.jpg" height="60" width="60">
            Cool T-shirt
            <span class="qty">Qty : 1</span>
            <span class="price"> £8.50</span>
            <a href="#" class="remove-item" data-code="TSH1">×</a>
          </li>
        </ul>
        <div class="cart-products-footer">
          <div class="cart-products-total">Total : £8.50</div>
          <div class="go-to-basket">
            <a class="button" href="bag.php" title="Review bag and Check-Out">Check-out</a>
          </div>
        </div>
        <!-- END hard coded mini shopping bag -->
      </div>
    </div>
  </div>

  <?php include("includes/mega-menu.php"); ?>

</header>
