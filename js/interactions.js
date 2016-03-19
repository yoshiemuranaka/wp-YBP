var YBP = {};

YBP.Interactions = {
	init: function(){
		this.events();
	},
	events: function(){
		jQuery('nav .menu.burger').bind('click', this.overlay);		
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