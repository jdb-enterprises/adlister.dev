'use strict';

$(document).ready(function(){

	$(window).scroll(function() {
		$('.box').each(function(){
			var imagePos = $(this).offset().top;

			var topOfWindow = $(window).scrollTop();
				if (imagePos < topOfWindow + 600) {
					$(this).addClass("flipInY");
					$(this).css("visibility","visible");
				}
		});
	});
	
});