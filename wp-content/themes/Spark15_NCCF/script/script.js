(function($){

// Spark Application
	var AppView = Backbone.View.extend({
  		el: 'body',

  		// Default Variables for Application
  		defaults: function() {
  			return {
  			}
  		},

  		//Delegated Events for user actions
  		events: {
  			 'click .video .thumb': 'openVideo'
  			,'click .md-modal .md-close': 'closeVideo'
  			,'click .mobile-nav-trigger': 'toggleNav'
  		},

  		initialize: function(){
  			this.smoothDivScroll();
  		}
  		,smoothDivScroll: function(){
	    	$(".shop").smoothDivScroll();
	    }
	    ,openVideo: function(e){
	    	var $elem 	= $(e.currentTarget).parents('.video');
	    	var src 	= $elem.find('iframe').data('src') + '?autoplay=1';
	    	$elem.find('.md-modal').addClass('md-show')
				 .find('iframe').attr('src', src);	    	
	    }
	    ,closeVideo: function(e){
	    	var $elem = $(e.currentTarget).parents('.md-modal').removeClass('md-show');
	    }
	    ,toggleNav: function(){
	    	$('.mobile-nav').toggleClass('nav-open');
	    }

  	});

	$(document).ready(function(){
			var App = new AppView;
	});

})(jQuery)