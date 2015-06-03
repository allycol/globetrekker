<header>
  <div class="frame">
    <div class="phone">
      <span class="number">01252 844102</span>
      <span class="times">8.30am-5.30pm Monday-Friday</span>
    </div>
    <div class="off-canvas-button">
      <a href="#off-canvas-menu">
        <span class="burger"><span></span><span></span><span></span></span>
        <span class="menu-label">Menu</span>
      </a>
    </div>
    <div class="logo">
      <a href="index.php">Site logo</a>
    </div>
    <div class="account-nav">
      <ul>
        <li class="search"><a href="#"><span class="icon"></span> Search</a></li>
        <li class="signin"><a href="#"><span class="icon"></span> Sign in</a></li>
        <li class="basket">
          <!-- <a href="#"><span class="icon"></span> Basket</a> -->
          <a href="#" class="cart-box" id="cart-info" title="View Cart">
            <span class="icon"></span>
            Bag
            	<?php
            		if(count($_SESSION["products"]) > 0){
                //if(isset($_SESSION["products"])){
            			echo '<span class="bag-qty">' .count($_SESSION["products"]). '</span>';
            		}else{
            			echo '<span class="bag-qty empty">0</span>';
            		}
            	?>
          </a>

          <div class="shopping-cart-box">
              <div id="shopping-cart-results">
              </div>
          </div>

        </li>
      </ul>
      <div class="search-form">
        <input type="search" placeholder="Looking for something?" name="search-field" />
      </div>
    </div>
  </div>
  <nav>
    <div class="nav-frame">
    <ul>
      <li><a href="product.php">Interior</a></li>
      <li><a href="#">Plaster</a></li>
      <li><a href="#">Bathroom</a></li>
      <li><a href="#">Bases &amp; Shades</a></li>
      <li><a href="#">Interior</a></li>
      <li><a href="#">Plaster</a></li>
      <li><a href="#">Bathroom</a></li>
      <li><a href="#">Bases &amp; Shades</a></li>
    </ul>
  </div>
  </nav>
</header>