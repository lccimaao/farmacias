$(document).ready(function() {
	$(window).load(function() {
	  $('.flexslider').flexslider({
	    animation: "slide"
	  });
	});
	

	$(".producto").mouseenter(function(){
		
		$(".infoProducto", this).animate({
			opacity:1
		},200)
	});
	
	$(".producto").mouseleave(function(){
		$(".infoProducto", this).animate({
			opacity:0
		},200)
	});
	
		
	

	
});