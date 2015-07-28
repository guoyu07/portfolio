	$(document).ready(function() {

				$(document).ready(function(){
				  $('.bxslider').bxSlider({
				  	pager: false,
				  	mode: "horizontal",
				  	speed: 5000
				  
				  });
				});

				$(".slider_one").mouseover(function(){
					$(".slider_two").fadeIn(800);
				});

				$(".slider_one").mouseout(function(){
					$(".slider_two").fadeOut(800);
				});

				// $(".slider_one").mouseleave(function(){
				// 	$(".slider_two").removeClass("visible");
				// });

				$(".home").click(function(){
					$(".tar").text("home");
				});

				$(".about").click(function(){
					$(".tar").text("about");
				});

				$(".port").click(function(){
					$(".tar").text("portfolio");
				});

				$(".contact").click(function(){
					$(".tar").text("contact");
				});

				$(".mnu a").click(function(){
					$(".mnu a").removeClass("active");
					$(this).addClass("active");
				});

				// $(".main").mousemove(function(e){
				// 	var movX=(e.pageX*-1/100);
				// 	var movY=(e.pageY*-1/100);
				// 	$(this).css("background-position", movX + "px " + movY + "px");
				// });

		
				$(".sitemap a").mouseover(function(){
					$(this).addClass("hover");
				});

				$(".sitemap a").mouseleave(function(){
					$(this).removeClass("hover");
				});





				


	});

	