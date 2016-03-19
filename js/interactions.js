var YBP = {};

YBP.Interactions = {
	init: function(){
		this.events();
		this.revealContent();
		this.initVivus();
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
	},

	initVivus: function() {
	  new Vivus('vivus-header', {
	    duration: 250,
	    type: 'oneByOne'
		}, function(obj){obj.el.classList.add('finished')});
	}
}

jQuery(document).ready(function($){
	YBP.Interactions.init();
})