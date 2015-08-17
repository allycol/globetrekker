var Outdoorkit = Outdoorkit || {};

Outdoorkit.mobimenu = function() {
  $("#off-canvas-menu").mmenu({
    extensions	: ["theme-black"]
  });
  $("#off-canvas-filters").mmenu({
    //offCanvas	: false,
    "offCanvas": {
      "position": "right",
       "zposition": "next"
    },
    navbar		: {
			title		: "Filter items"
		},
		navbars		: true,
    extensions	: ["theme-black", "fullscreen"]
  });

  // $(function() {$("#menu").mmenu({
	// 	offCanvas	: false,
	// 	extensions	: ["theme-black"],
	// 	navbar		: {
	// 		title		: "Demo app"
	// 	},
	// 	navbars		: true,
	// 	searchfield	: {
	// 		add			: true,
	// 		addTo		: "#panel-categories",
	// 		placeholder	: "Search categories"
	// 	}}).on( 'click',
	// 		'a[href^="#/"]',
	// 		function() {
	// 		  alert( "Thank you for clicking, but that's a demo link." );
	// 			return false;
	// 		}
	// 	);
  // });


};


Outdoorkit.megamenu = function() {

  var $topLevelItem = $('header nav > ul > li');
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
      $(this).find('.search-field').focus();
    });

  });

  $('.off-canvas-search').find(".search-field").bind('focusin', function(){
    $(this).parent().addClass('focussed');
  }).bind('focusout', function(){
    $(this).parent().removeClass('focussed');
  });

};



Outdoorkit.productSwipers = function() {

  var vieweditemcount = $('.viewed-swiper').find('.swiper-slide').length;
  var otheritemcount = $('.product-swiper').find('.swiper-slide').length;

  var screenwidth = $(window).width();

  var mobile = screenwidth < 768;
  var tablet = screenwidth >= 768 && screenwidth < 960;
  var desktop = screenwidth >= 960;


  // Viewed products Swiper

  if(mobile && (vieweditemcount > 3)) {
    var swipeposition = 2;
    var centering = true;
    viewedSwiper(swipeposition, centering);
  }

  if(tablet && (vieweditemcount > 6)) {
    var swipeposition = 3;
    var centering = true;
    viewedSwiper(swipeposition, centering);
  }

  else if(desktop && (vieweditemcount > 8)) {
    var swipeposition = 0;
    var centering = false;
    viewedSwiper(swipeposition, centering);
    $('.viewed-next').show();
    $('.viewed-prev').show();
  }

  function viewedSwiper(swipeposition, centering) {
    var viewedSwiper = new Swiper ('.viewed-swiper', {
      nextButton: '.viewed-next',
      prevButton: '.viewed-prev',
      centeredSlides: centering,
      slidesPerView: 'auto',
      initialSlide: swipeposition
    });
  }

  // Other products Swiper

  if(mobile && (otheritemcount > 2)) {
    var swipeposition = 1;
    var centering = true;
    otherSwiper(swipeposition, centering);
  }

  if(tablet && (otheritemcount > 4)) {
    var swipeposition = 2;
    var centering = true;
    otherSwiper(swipeposition, centering);
  }

  else if(desktop && (otheritemcount > 5)) {
    var swipeposition = 0;
    var centering = false;
    otherSwiper(swipeposition, centering);
    $('.others-next').show();
    $('.others-prev').show();
  }

  function otherSwiper(swipeposition, centering) {
    var otherSwiper = new Swiper ('.product-swiper', {
      // direction: 'vertical',
      // loop: true,
      //
      // // If we need pagination
      // pagination: '.swiper-pagination',
      //
      // // Navigation arrows
      nextButton: '.others-next',
      prevButton: '.others-prev',
      centeredSlides: centering,
      slidesPerView: 'auto',
      initialSlide: swipeposition
      //spaceBetween: 20
      // // And if we need scrollbar
      // scrollbar: '.swiper-scrollbar',
    });
  }

};

Outdoorkit.gallerySwiper = function() {

  var galleryLrg = new Swiper ('.product-gallery-lrg', {
    slidesPerView: 1,
    //initialSlide: 2,
    effect: 'fade',
    nextButton: '.product-next',
    prevButton: '.product-prev'
  });

  $(".product-gallery-thmbs").on('click', 'li', function(){
      var $this = $(this);
      galleryLrg.slideTo($this.index(), 500, true);
      $this.addClass('active').siblings().removeClass('active');
    });

  // var galleryThmbs = new Swiper ('.product-gallery-thmbs', {
  //   slidesPerView: 'auto',
  //   centeredSlides: true,
  //   touchRatio: 0.2,
  //   //initialSlide: 2,
  //   slideToClickedSlide: true
  // });

  // galleryLrg.params.control = galleryThmbs;
  // galleryThmbs.params.control = galleryLrg;

};


Outdoorkit.bannerSwiper = function() {
  var bannerSwiper = new Swiper ('.banner-swiper', {
    pagination: '.swiper-pagination',
    paginationClickable: true
  });
};

Outdoorkit.filters = function() {
  $(".filters").stick_in_parent({
    offset_top: 20
  });
  $(".filters-button").bind("click", function(){
    $(this).next(".filters").slideToggle();
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

    // $.ajax({ //make ajax request to cart_process.php
    //   url: "cart_process.php",
    //   type: "POST",
    //   dataType:"json", //expect json value from server
    //   data: { quantity: iqty, product_code: icode}
    // }).done(function(data){ //on Ajax success
    //    $("#cart-info .bag-qty").html(data.items); //total items in cart-info element
    //    if(data.items == 0) {
    //      $("#cart-info .bag-qty").addClass('empty');
    //    } else {
    //      $("#cart-info .bag-qty").removeClass('empty');
    //    }
    //
    //
    //   //button_content.html('Add to Cart'); //reset button text to original text
    //
    //   openbasket();
    //
    //   // This doesn't do anything:
    //   /*if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
    //     $(".cart-box").trigger( "click" ); //trigger click to update the cart box.
    //   }*/
    // })

  });

  //Show Items in Cart
  $( ".cart-box").click(function(e) { //when user clicks on cart box
    e.stopPropagation();
    e.preventDefault();
    openbasket();
  });

  // Open cart
  function openbasket() {
    $(".shopping-cart-box").slideDown(); //display cart box
    //$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
    //$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
  }

  //Close Cart
  $( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
    e.preventDefault();
    $(".shopping-cart-box").slideUp(); //close cart-box
  });

  $(document).bind('click', function() {
    $(".shopping-cart-box").slideUp(); //close cart-box
    $('.search-form').hide();
    $('.account-nav ul').fadeIn();
  });


  //Remove items from cart
  // $("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
  //   e.preventDefault();
  //   var pcode = $(this).attr("data-code"); //get product code
  //   $(this).parent().fadeOut(); //remove item element from box
  //   $.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
  //     $("#cart-info .bag-qty").html(data.items); //update Item count in cart-info
  //     if(data.items == 0) {
  //       $("#cart-info .bag-qty").addClass('empty');
  //     } else {
  //       $("#cart-info .bag-qty").removeClass('empty');
  //     }
  //     $(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
  //   });
  // });
};

Outdoorkit.deilveryOptions = function() {

	if (!$('.delivery-options').length) return;

	var $contentLayer = $('.next-options li');
	var $tabLink = $('.delivery-options li input');
	var activeClass = 'selected';

	$tabLink.attr('checked', false);

	function hideAll() {
		$tabLink.parent().removeClass(activeClass);
		$contentLayer.hide().find('input').removeClass('required');;
	}

	$tabLink.bind('click', function() {
		if (!$(this).parent().hasClass(activeClass)) {
			hideAll();
			//$('#deliveryOptions').css('width', '650px');
			$(this).parent().addClass(activeClass);
			$contentLayer.eq($tabLink.index(this)).show().find('input').addClass('required');
		}
	});

};

Outdoorkit.init = function() {
    Outdoorkit.mobimenu();
    Outdoorkit.megamenu();
    Outdoorkit.search();
    Outdoorkit.productSwipers();
    Outdoorkit.gallerySwiper();
    Outdoorkit.bannerSwiper();
    Outdoorkit.filters();
    Outdoorkit.bag();
    Outdoorkit.deilveryOptions();
};

$(document).ready(function() {
    Outdoorkit.init();
});
