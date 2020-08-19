$(document).ready(function(){
	init();
});


function init(){
	var contentH = $('.content').outerHeight();
	var coverH = contentH + 180; 
	$('.cover-wrapper').css('height', coverH + "px");
	$(window).resize(function(event) {
		var contentH = $('.content').outerHeight();
		var coverH = contentH + 180; 
		$('.cover-wrapper').css('height', coverH + "px");
	});
}







