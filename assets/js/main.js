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
  var $topLevelItemTxt = $('header nav > ul > li > span');

	function click_open() {
		$topLevelItem.removeClass('active').find('.subMenu').hide();
    $(this).parent().addClass('active').find('.subMenu').show();

		//$subLevelItem.children('a').removeClass('notSelected');
		//$thisItem = $(this).children('ul').children('li');
		//if ($thisItem.length == 1) lone_item();
	}

  function hover_open() {
		$topLevelItem.removeClass('active').find('.subMenu').hide();
    $(this).addClass('active').find('.subMenu').show();
	}

	function click_close() {
    $(this).parentsUntil('li').parent().removeClass('active').find('.subMenu').hide();
	}

  function hover_close() {
		$(this).removeClass('active').find('.subMenu').hide();
	}

  var hoz_config = {
		over: hover_open,
    sensitivity: 2,
    interval: 100,
		timeout: 500,
		out: hover_close
	};

  // With hover
  $topLevelItem.hoverIntent(hoz_config);

  // With click
  $topLevelItemTxt.on('click', click_open);
  $(".close-mega-menu").on('click', click_close);

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

Outdoorkit.searchField = function() {
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

  $(document).bind('click', function() {
    $('.search-form').hide();
    $('.account-nav ul').fadeIn();
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

  // Get values of the default main pic
  // var defaultPicOrder = ($('#firstPicture').val())-1;
  // var defaultLargePic = $('#firstPicture').attr('data-lrg-img');
  //
  // // Set the large pic
  // $('.large-image').attr('href', defaultLargePic);
  //
  // var galleryLrg = new Swiper ('.product-gallery-lrg', {
  //   slidesPerView: 1,
  //   effect: 'fade',
  //   initialSlide: defaultPicOrder
  //   // nextButton: '.product-next',
  //   // prevButton: '.product-prev'
  // });

  function switchMainPic(obj) {
		var medImageURL = obj.find('img').attr("data-med-img");
		$(".product-gallery-lrg img").attr("src", medImageURL);
    $largePic = obj.find('img').attr('data-lrg-img');
    $('.large-image').attr('href', $largePic);
	}

  var isNotMobile = ($(window).width()) > 768;

  $(".product-gallery-thmbs li").bind('click', function(){
    var $this = $(this);
    switchMainPic($this);
    $this.addClass('active').siblings().removeClass('active');
  });

  function disablePageScrolling(){
    $('body').css('overflow', 'hidden');
    $('html').css('overflow', 'hidden');
  }

  function enablePageScrolling(){
    $('body').css('overflow', 'auto');
    $('html').css('overflow', 'auto');
  }

  if(isNotMobile) $('.large-image').featherlight({
    loading: 'Loading image',
    afterOpen: disablePageScrolling,
    afterClose: enablePageScrolling
  });

};

Outdoorkit.lightboxwindow = function() {

  function disablePageScrolling(){
    $('body').css('overflow', 'hidden');
    $('html').css('overflow', 'hidden');
  }

  function enablePageScrolling(){
    $('body').css('overflow', 'auto');
    $('html').css('overflow', 'auto');
  }

  var isDesktop = ($(window).width()) > 960;

  if(isDesktop){

    $('.fancyIframe').featherlight({
      targetAttr: 'data-lightbox',
      // type: 'iframe',
      // iframeWidth: 900,
      // iframeHeight: 600,
      afterOpen: disablePageScrolling,
      afterClose: enablePageScrolling
    });
  }

};


Outdoorkit.bannerSwiper = function() {
  var bannerSwiper = new Swiper ('.banner-swiper', {
    pagination: '.swiper-pagination',
    paginationClickable: true
  });
};

Outdoorkit.stickies = function() {

  if(!$(".product-listings").length && !$(".product-details").length) return;

  function doProductSticky() {
    var screenwidth = $(window).width();
    if(screenwidth >= 768) {
      // console.log("Get sticky");
      $(".product-gallery-wrapper").stick_in_parent();
    }
    else {
      // console.log("detach");
      $(".product-gallery-wrapper").trigger("sticky_kit:detach");
    }
  }

  function doListingsSticky() {
    var screenwidth = $(window).width();
    if(screenwidth >= 960) {
      // console.log("Get sticky");
      $(".listing-tools").stick_in_parent();
      $(".filters").stick_in_parent({
        // offset_top: 20
      });
    }
    else {
      // console.log("detach");
      $(".listing-tools").trigger("sticky_kit:detach");
      $(".filters").trigger("sticky_kit:detach");
    }
  }

  doProductSticky();
  doListingsSticky();

  $(window).on("resize", function(){
    doProductSticky();
    doListingsSticky();
  });


};

Outdoorkit.productSelect = function() {

  $("#selectColor").find('input').attr('checked', false);

  disableAddToBasketButton();

  // If no alternate COLOURS exist
	if (!$('#selectColor').length) {
		$('#selectSize').find('ul:first').show();					// Show the first size list - should only be one
	}

  // If no alternate COLOURS OR SIZES exist
	if (!$('#selectColor').length && !$('#selectSize').length) {
		enableAddToBasketButton();
	}

	// Add classes to thumbs/sizes that are out of stock
	$('.sizes li input[data-availability*="Out of stock"]').parent().addClass('nostock'); // Add class to unavailable items
	$('#selectColor input[data-availability*="Out of stock"]').parent().addClass('nostock');


	function showSizes(obj) {
		if (!obj.next('label').hasClass('active')) {

			disableAddToBasketButton();

      $('#selectSize p.hint').hide();

      $('#selectSize p.stock-notify').fadeIn();

			$('.sizes').find('input:checked').attr('checked', false).parent().removeClass('ischecked');
			$('span.avail').text('');

			$('.sizes').hide();
			$('.sizes').eq($(".product-gallery-thmbs input").index(obj)).fadeIn(400);

      $('.availability').hide();

		}
	}

	function disableAddToBasketButton() {
		// $('.button-field .button').attr('disabled', true).addClass('disabled');
    $('.button-field .button').addClass('disabled');
	}

	function enableAddToBasketButton() {
    // $('.button-field .button').attr('disabled', false).removeClass('disabled');
    $('.button-field .button').removeClass('disabled');
	}

	// function checkAvailability(obj) {
	// 	if (obj.parent().hasClass('nostock')) {
  //     disableAddToBasketButton();
  //     $('.availability').find('.ico-tick').hide();
  //     $('.availability').find('.ico-cross').show();
  //   }
	// 	else {
  //     enableAddToBasketButton();
  //     $('.availability').find('.ico-tick').show();
  //     $('.availability').find('.ico-cross').hide();
  //   }
	// }

  // COLOURS
	$(".product-gallery-thmbs").find('input').click(function() {

    $('.colour-not-selected-error').hide();
    $('#selectColor').css('border-color', '#fff');
    $('.size-not-selected-error').hide();
    $('#selectSize').css('border-color', '#fff');

		var $thisThumb = $(this);

    // If sizes exist, show the correct ones
    var sizesExist = $('#selectSize').length;
		if (sizesExist) showSizes($thisThumb);

    // Display the colour under the thumbs
    $('.selected-colour').css('display', 'inline-block').text($thisThumb.attr('data-colour'));

    // Reset the sizes availability
    $('.size-availability').hide();

    // Get the availabilty value and display it under the thumbs too
    var availability = $thisThumb.attr('data-availability');
		$('.colour-availability span.avail').text(availability);
    // If the colour is out of stock
    if ($thisThumb.parent().hasClass('nostock')) {
      disableAddToBasketButton();
      $('.colour-availability').find('.ico-tick').hide();
      $('.colour-availability').find('.ico-cross').show();
    }
    // If item IS in stock but Sizes DO NOT exist
    else if (!($thisThumb.parent().hasClass('nostock')) && !sizesExist) {
      enableAddToBasketButton();
      $('.colour-availability').find('.ico-tick').show();
      $('.colour-availability').find('.ico-cross').hide();
    }
    // Then item IS in stock and sizes do exist
		else {
      disableAddToBasketButton();
      $('.colour-availability').find('.ico-tick').show();
      $('.colour-availability').find('.ico-cross').hide();
    }
    $('.colour-availability').css('display', 'inline-block');
	});


  // SIZES
	$('.sizes').find('input').bind('change', function() {

    $('.size-not-selected-error').hide();
    $('#selectSize').css('border-color', '#fff');

		var $thisInput = $(this);
		$('.sizes').find('li').removeClass('ischecked');
		$thisInput.parent().addClass('ischecked');

		var availability = $thisInput.attr('data-availability');
		$('.size-availability span.avail').text(availability);
    if ($thisInput.parent().hasClass('nostock')) {
      disableAddToBasketButton();
      $('.size-availability').find('.ico-tick').hide();
      $('.size-availability').find('.ico-cross').show();
    }
		else {
      enableAddToBasketButton();
      $('.size-availability').find('.ico-tick').show();
      $('.size-availability').find('.ico-cross').hide();
    }
    $('.size-availability').css('display', 'inline-block');
	})


  function checkColourSelected(e){

    // var colourSelected = $('.product-gallery-thmbs').find('input:checked').length;
    // var colourInstock = ($('.product-gallery-thmbs').find('input:checked').parent().hasClass('nostock').length);

    if ($('.product-gallery-thmbs').find('input:checked').length) {
      var colourSelected = true;
    } else {
      var colourSelected = false;
    }

    var isAvailable = $('.product-gallery-thmbs').find('input:checked').attr('data-availability');

    if (!(isAvailable == 'Out of stock')) {
      var colourInstock = true;
    } else {
      var colourInstock = false;
    }

    // If it does make sure one is checked && In stock
    if (colourSelected && colourInstock){
      if ($('.sizes').length) {
        checkSizesSelected(e);
      }
      else return;
    }
    else {
      e.stopPropagation();
      e.preventDefault();
      $('.colour-not-selected-error').slideDown();
      $('#selectColor').css('border-color', '#f98400');
    }
  }

  function checkSizesSelected(e){

    var sizeSelected = $('.sizes').find('input:checked').length;

    var isAvailable = $('.sizes').find('input:checked').attr('data-availability');

    if (!(isAvailable == 'Out of stock')) {
      var sizeInstock = true;
    } else {
      var sizeInstock = false;
    }

    // If it does make sure one is checked && In stock
    if (sizeSelected && sizeInstock){
      // If it has then sweet!!
      return;
      // e.preventDefault();
      // console.log('Submit forms');
    }
    else {
      e.stopPropagation();
      e.preventDefault();
      // If not then display an error
      $('.size-not-selected-error').slideDown();
      $('#selectSize').css('border-color', '#f98400');
    }
  }

  function validateShoppingCart(e){
    // Check colours exist
    if ($('.product-gallery-thmbs').length) {
      checkColourSelected(e);
    }
    // if not check sizes exist
    else if ($('.sizes').length) {
      checkSizesSelected(e);
    }
    else {
      // or all good!
      return;
    }
  }

  $('.button-field .button').on('click', function(e) {
    // e.stopPropagation();
    // e.preventDefault();
    // console.log("AHHH");
    validateShoppingCart(e);
  });
}

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
    $(".shopping-cart-box").slideDown(); //display cart box
    $("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
    $("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
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


  // Remove items from cart
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

Outdoorkit.deilveryOptions = function() {

	if (!$('.delivery-options').length) return;

	var $contentLayer = $('.next-options li');
	var $tabLink = $('.delivery-options li input');
	var activeClass = 'selected';

  // Get default values from hidden inputs
  var defaultTab = $('#DefaultTabSelection').val();
  var defaultDaySelection = $('#DefaultDaySelection').val();
  var defaultTimeSelection = $('#DefaultTimeSelection').val();
  var economyAvailable = $('#EconomyAvailable').val();

  if(economyAvailable == "True"){
    // console.log("Yes it is!");
    $('.delivery-options').addClass('has-three');
  }

  // If they exist, show the right tab, content div and selected values
  if(defaultTab && defaultDaySelection) {
    // console.log(defaultTab + ' and ' +  defaultDaySelection);
    $tabLink.eq(defaultTab - 1).attr('checked',true).parent().addClass(activeClass);
    $contentLayer.eq(defaultTab - 1).show();
    $contentLayer.eq(defaultTab - 1).find('select[name=sd_delivery_date]').val(defaultDaySelection);
    $contentLayer.eq(defaultTab - 1).find('select[name=sd_delivery_service]').val(defaultTimeSelection);
    $contentLayer.eq(defaultTab - 1).find('select[name=nwd_delivery_service]').val(defaultTimeSelection);
  }
  else {
    // Otherwise default to the first tab
    // console.log("No defaults");
    $tabLink.eq(0).attr('checked',true).parent().addClass(activeClass);
    $contentLayer.eq(0).show();
  }

	function hideAll() {
		$tabLink.parent().removeClass(activeClass);
		$contentLayer.hide();
	}

	$tabLink.bind('click', function() {
    var $tabIndex = $tabLink.index(this);
    console.log($tabIndex);
		if (!$(this).parent().hasClass(activeClass)) {
			hideAll();                                           // Hide everything
			$(this).parent().addClass(activeClass);              // Add active class to tab
			$contentLayer.eq($tabIndex).show();                  // Show the right content layer
		}
	});

};

Outdoorkit.equalColumnHeights = function() {

  if (!$('.three-equal').length) return;

  /* Thanks to CSS Tricks for pointing out this bit of jQuery
  http://css-tricks.com/equal-height-blocks-in-rows/
  It's been modified into a function called at page load and then each time the page is resized. One large modification was to remove the set height before each new calculation. */

  equalheight = function(container){

  var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = new Array(),
       $el,
       topPosition = 0;

   $(container).each(function() {

     $el = $(this);
     $($el).height('auto')
     topPostion = $el.position().top;

     if (currentRowStart != topPostion) {
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
       rowDivs.length = 0; // empty the array
       currentRowStart = topPostion;
       currentTallest = $el.height();
       rowDivs.push($el);
     } else {
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
  }

  $(window).load(function() {
    equalheight('.three-equal .equalise-column');
  });


  $(window).resize(function(){
    equalheight('.three-equal .equalise-column');
  });

};


Outdoorkit.iframeHeight = function() {

  /**
   * Called to resize a given iframe.
   *
   * @param frame The iframe to resize.
   */
  function resize( frame ) {
    var b = frame.contentWindow.document.body || frame.contentDocument.body,
        cHeight = $(b).height();

    if( frame.oHeight !== cHeight ) {
      $(frame).height( 0 );
      frame.style.height = 0;

      $(frame).height( cHeight );
      frame.style.height = cHeight + "px";

      frame.oHeight = cHeight;
    }

    // Call again to check whether the content height has changed.
    setTimeout( function() { resize( frame ); }, 250 );
  }

  /**
   * Resizes all the iframe objects on the current page. This is called when
   * the page is loaded. For some reason using jQuery to trigger on loading
   * the iframe does not work in Firefox 26.
   */
  window.onload = function() {
    var frame,
        frames = document.getElementsByTagName( 'iframe' ),
        i = frames.length - 1;

    while( i >= 0 ) {
      frame = frames[i];
      frame.onload = resize( frame );

      i -= 1;
    }
  };


};

Outdoorkit.init = function() {
    Outdoorkit.mobimenu();
    Outdoorkit.megamenu();
    Outdoorkit.searchField();
    Outdoorkit.productSwipers();
    Outdoorkit.gallerySwiper();
    Outdoorkit.lightboxwindow();
    Outdoorkit.bannerSwiper();
    Outdoorkit.stickies();
    Outdoorkit.productSelect();
    // Outdoorkit.bag();
    Outdoorkit.deilveryOptions();
    Outdoorkit.equalColumnHeights();
    Outdoorkit.iframeHeight();
};

$(document).ready(function() {
    Outdoorkit.init();
});
