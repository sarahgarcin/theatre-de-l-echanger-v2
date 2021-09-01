$(document).ready(function(){
	init();
});


function init(){

	// message pop-up
	$('.home-message').on('click', function(){
		$('.home-message').hide();
	});

	$('.close-message').on('click', function(){
		$('.home-message').hide();
	});

	// -------------- OPEN MENU --------------- //
	var menuBtn = $('.menu_btn');
	var nav = $('.main-nav');
	var barBurger1 = $('span:nth-child(1)');
	var barBurger2 = $('span:nth-child(2)');
	var barBurger3 = $('span:nth-child(3)');

	$('.menu_btn').on("click", function(e){
	  if(nav.hasClass('active')){
	    nav.removeClass("active");
	    barBurger1.removeClass("rotate-top");
	    barBurger2.removeClass("transparent");
	    barBurger3.removeClass("rotate-bottom");
	  }
	  else{
	  	nav.addClass("active");
	    barBurger1.addClass("rotate-top");
	    barBurger2.addClass("transparent");
	    barBurger3.addClass("rotate-bottom");
	  }

	});
}







