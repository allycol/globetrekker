
$(document).ready(function() {

  $("#off-canvas-menu").mmenu({

  });


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




  // START MINI BASKET

  $(".shopping-cart-box").bind('click', function(e) {
    e.stopPropagation();
  });

	//Add Item to Cart
	$(".item-box button").click(function(e){ //user click "add to cart" button
    e.stopPropagation();
		e.preventDefault();
		var button_content = $(this); //this triggered button
		var iqty = $(this).parent().children("select.p-qty").val(); //get quantity
		var icode = $(this).parent().children("input.p-code").val(); //get product code
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

});
