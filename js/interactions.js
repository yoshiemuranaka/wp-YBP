var YBP = YBP || {};

YBP.Interactions = {
	init: function(){
		this.events();
		this.revealContent();
	},
	
	events: function(){
		jQuery('nav .menu.burger').bind('click', this.overlay);		
	},

	revealContent: function(){
		jQuery('.site-content').addClass('loaded');
	},

	overlay: function(){
		var menu = jQuery('.js-animate-menu');

		if(menu.hasClass('active')){
			menu.removeClass('active');
		}else {
			menu.addClass('active');
		}
	}
}

jQuery(document).ready(function($){
	YBP.Interactions.init();
})