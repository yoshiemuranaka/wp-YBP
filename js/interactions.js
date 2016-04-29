var YBP = YBP || {};

YBP.Interactions = {
	init: function(){
		this.events();
		this.revealContent();
		this.smoothScroll.init();
	},
	
	events: function(){
		jQuery('nav .menu-icon').bind('click', this.overlay);		
	},

	revealContent: function(){
		if(Modernizr.csstransitions){
			jQuery('.site-main').addClass('loaded');
		}
	},

	overlay: function(){
		var menu = jQuery('.js-animate-menu');
		if(!Modernizr.cssanimations) {
			if(menu.hasClass('active')){
				menu.css({'display': 'none'}, function(){
					menu.removeClass('active');
				});
			}else {
				menu.css({'display': 'block'}, function(){
					menu.addClass('active');
				});
			}
		}else {
			if(menu.hasClass('active')){
				menu.removeClass('active');
				jQuery('.menu-icon').toggleClass('active');
			}else {
				menu.addClass('active');
				jQuery('.menu-icon').toggleClass('active');
			}
		}	
	},

	smoothScroll: {
		init: function() {
			jQuery('.js__scroll-anchor').on('click', function(event){
				event.preventDefault();
				var target = jQuery(this).attr('href');
				var position = jQuery(target).offset().top;
				//accounting for sticky nav
				if(jQuery(window).width() < 769) {
					position -= 100
				}
		    jQuery('html, body').animate({
		      scrollTop: position
		  	}, 1000);
		  	return false;
			});
		}
	}
};

YBP.PageFilter = {
	init: function(){
		//removing empty p tags and br in page content
		jQuery('.site-main p:empty').remove();
		jQuery('.site-main > br').remove();
		jQuery('.site-main .banner br').remove();
	}
};

jQuery(document).ready(function($){
	YBP.Interactions.init();
	YBP.PageFilter.init();
});

