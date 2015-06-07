var Outdoorkit = Outdoorkit || {};

Outdoorkit.mobimenu = function() {
  $("#off-canvas-menu").mmenu({

  });
};


Outdoorkit.megamenu = function() {

  var $topLevelItem = $('header nav ul > li');
	//var $subLevelItem = $('.subMenu > li');

	$topLevelItem.find('a:first').append('<span />');

	// function lone_item() {
	// 	$thisItem.find('.ddMenuItem').show();
	// }

	function hoz_open() {
		$topLevelItem.removeClass('active').find('.subMenu').hide();
		$(this).addClass('active').find('.subMenu').show();
		//$subLevelItem.children('a').removeClass('notSelected');
		//$thisItem = $(this).children('ul').children('li');
		//if ($thisItem.length == 1) lone_item();
	}

	function hoz_close() {
		$(this).removeClass('active').find('.subMenu').hide();
	}

  var hoz_config = {
		over: hoz_open,
    sensitivity: 2,
    interval: 100,
		timeout: 500,
		out: hoz_close
	};

  $topLevelItem.hoverIntent(hoz_config);

	// function vert_open() {
	// 	$subLevelItem.find('.ddMenuItem').hide();
	// 	$(this).find('.ddMenuItem').show();
	// 	$subLevelItem.children('a').addClass('notSelected');
  //  		$(this).find('a:first-child').removeClass('notSelected');
	// }
	//
	// function vert_close() {
	// 	$(this).find('.ddMenuItem').hide();
	// 	if (!$subLevelItem.is(':visible')) $subLevelItem.children('a').removeClass('notSelected');
	// }



	// var vert_config = {
	// 	over: vert_open,
	// 	sensitivity: 20,
	// 	timeout: 500,
	// 	out: vert_close
	// };

	//$subLevelItem.hoverIntent(vert_config);

};

Outdoorkit.search = function() {
  $('.search-form').click(function(e){
      e.stopPropagation();
  });

  $('.search a').bind('click', function(e){

    e.preventDefault();
    e.stopPropagation();
    $('.account-nav ul').hide();
    $('.search-form').fadeIn(function(){
      $(this).find('input').focus();
    });

  });
};

Outdoorkit.productSwiper = function() {
  var productSwiper = new Swiper ('.product-swiper', {

    // direction: 'vertical',
    // loop: true,
    //
    // // If we need pagination
    // pagination: '.swiper-pagination',
    //
    // // Navigation arrows
    nextButton: '.others-next',
    prevButton: '.others-prev',

    centeredSlides: true,
    slidesPerView: 'auto',
    initialSlide: 2
    //spaceBetween: 20
    //
    // // And if we need scrollbar
    // scrollbar: '.swiper-scrollbar',
  });
};

Outdoorkit.gallerySwiper = function() {

  var galleryLrg = new Swiper ('.product-gallery-lrg', {
    slidesPerView: 1,
    //initialSlide: 2,
    effect: 'fade',
    nextButton: '.product-next',
    prevButton: '.product-prev'
  });

  var galleryThmbs = new Swiper ('.product-gallery-thmbs', {
    slidesPerView: 'auto',
    centeredSlides: true,
    touchRatio: 0.2,
    //initialSlide: 2,
    slideToClickedSlide: true
  });

  galleryLrg.params.control = galleryThmbs;
  galleryThmbs.params.control = galleryLrg;

};


Outdoorkit.bannerSwiper = function() {
  var bannerSwiper = new Swiper ('.banner-swiper', {
    pagination: '.swiper-pagination',
    paginationClickable: true
  });
};

Outdoorkit.bag = function() {
  $(".shopping-cart-box").bind('click', function(e) {
    e.stopPropagation();
  });

  //Add Item to Cart
  $(".add-to-bag button").click(function(e){ //user click "add to cart" button
    e.stopPropagation();
    e.preventDefault();
    var button_content = $(this); //this triggered button
    var iqty = $("select.p-qty").val(); //get quantity
    var icode = $("input.p-code").val(); //get product code
    //button_content.html('Adding...'); //Loading button text

    //button_content.attr('disabled','disabled'); //disable button before Ajax request

    $.ajax({ //make ajax request to cart_process.php
      url: "cart_process.php",
      type: "POST",
      dataType:"json", //expect json value from server
      data: { quantity: iqty, product_code: icode}
    }).done(function(data){ //on Ajax success

       $("#cart-info .bag-qty").html(data.items); //total items in cart-info element
       if(data.items == 0) {
         $("#cart-info .bag-qty").addClass('empty');
       } else {
         $("#cart-info .bag-qty").removeClass('empty');
       }
      //button_content.html('Add to Cart'); //reset button text to original text

      openbasket();

      // This doesn't do anything:
      /*if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
        $(".cart-box").trigger( "click" ); //trigger click to update the cart box.
      }*/
    })

  });

  //Show Items in Cart
  $( ".cart-box").click(function(e) { //when user clicks on cart box
    e.stopPropagation();
    e.preventDefault();
    openbasket();
  });

  // Open cart
  function openbasket() {
    $(".shopping-cart-box").fadeIn(); //display cart box
    $("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
    $("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
  }

  //Close Cart
  $( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
    e.preventDefault();
    $(".shopping-cart-box").fadeOut(); //close cart-box
  });

  $(document).bind('click', function() {
    $(".shopping-cart-box").fadeOut(); //close cart-box
    $('.search-form').hide();
    $('.account-nav ul').fadeIn();
  });


  //Remove items from cart
  $("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
    e.preventDefault();
    var pcode = $(this).attr("data-code"); //get product code
    $(this).parent().fadeOut(); //remove item element from box
    $.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
      $("#cart-info .bag-qty").html(data.items); //update Item count in cart-info
      if(data.items == 0) {
        $("#cart-info .bag-qty").addClass('empty');
      } else {
        $("#cart-info .bag-qty").removeClass('empty');
      }
      $(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
    });
  });
};

Outdoorkit.init = function() {
    Outdoorkit.mobimenu();
    Outdoorkit.megamenu();
    Outdoorkit.search();
    Outdoorkit.productSwiper();
    Outdoorkit.gallerySwiper();
    Outdoorkit.bannerSwiper();
    Outdoorkit.bag();
};

$(document).ready(function() {
    Outdoorkit.init();
});
