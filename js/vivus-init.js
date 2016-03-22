var YBP = YBP || {};

YBP.Vivus = {
	init: function() {
	  new Vivus('vivus-header', {
	    duration: 250,
	    type: 'oneByOne'
		}, function(obj){obj.el.classList.add('finished')});
	}
};

jQuery(document).ready(function($){
	YBP.Vivus.init();
});