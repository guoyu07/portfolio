$(document).ready(function() {
	
    
    $(".carousel").carousel({
    interval:2000
    });

    $(".icon1").tooltip({

    	title: "Home",
    	trigger: 'hover',
    	placement: 'top',
    	delay: 100,
    	
    });

     $(".icon_x").tooltip({

    	title: "Some text",
    	trigger: 'hover',
    	placement: 'top',
    	delay: 100,
    	
    });

});