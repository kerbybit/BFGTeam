 $(document).ready(function(){
			   $(window).bind('scroll', function() {
			   var navHeight = 150;
					 if ($(window).scrollTop() > navHeight) {
						 $('nav').addClass('fixed');
                         $('offset').addClass('offsetTop');
					 }
					 else {
						 $('nav').removeClass('fixed');
                         $('offset').removeClass('offsetTop');
					 }
				});
			});