$(document).ready(function(){

 	$(".portfolio_items").mixItUp();

 	$('.test-popup-link').magnificPopup({ 
		  type: 'image',
		  mainClass: 'mfp-fade',
		  removalDelay: 500
	});

	$(".foto").addClass("animated flipInX").css("-moz-animation-delay ","3s").css("-webkit-animation-delay","3s").css("-o-animation-delay","3s");
	

});