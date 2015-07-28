	$(document).ready(function(){

		$(".open").click(function(){
			$(".sidebar .mob").toggleClass("visible");
		});

		$(".open1").click(function(){
			$(".sidebar .tex").toggleClass("visible");
		});
		
		$('.popup').magnificPopup({ 

		  type: 'image',
		   removalDelay: 300,
		   mainClass: 'mfp-fade'
			
		});

		$(".sandwich-wrapper").click(function(){
 		 if($(".nav").is(":visible")){
 		 	$(".nav").fadeOut(600);
 		 	$(".nav").removeClass("active");
 		 }else{
 		 	$(".nav").fadeIn(600);
 		 	$(".nav").addClass("active");
 		 	};
 		 });

		



	});