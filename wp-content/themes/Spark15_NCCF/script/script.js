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
  			,'click .video-link': 'openVideo'
  			,'click .video_trigger': 'openVideo'
  			,'click .md-modal .md-close': 'closeVideo'
  			,'click .mobile-nav-trigger': 'toggleNav'
  			,'click .member-bio .name': 'openMember'
  			,'click .team-slider .slide:not(.open)': 'openMemberHome'
  			,'click .team-slider .close': 'closeMemberHome'
  		},

  		initialize: function(){
  			this.smoothDivScroll();
  		}
  		,smoothDivScroll: function(){
	    	$(".shop").smoothDivScroll();
	    }
	    ,openVideo: function(e){
	    	var $elem 	= $(e.currentTarget).parents('.videojs');
	    	var src 	= $elem.find('iframe').data('src') + '?autoplay=1';
	    	$elem.find('.md-modal').addClass('md-show')
				 .find('iframe').attr('src', src);	    	
	    }
	    ,closeVideo: function(e){
	    	var $elem = $(e.currentTarget).parents('.md-modal').removeClass('md-show');
	    }
	    ,toggleNav: function(){
	    	$('body').toggleClass('nav-open');
	    }
	    ,openMember: function(e){
	    	var $member = $(e.currentTarget).parents('.member-bio');
	    	var index = $member.data('index');
	    	if( $member.hasClass('open') ){
	    		$('[data-index='+index+']').removeClass('open');
	    	}else{
	    		$('[data-index='+index+']').addClass('open').siblings().removeClass('open');
	    	}
	    }
	    ,openMemberHome: function(e){
	    	$(e.currentTarget).addClass('open').siblings().removeClass('open');
	    }
	    ,closeMemberHome: function(e){
	    	$(e.currentTarget).parents('.open').removeClass('open');
	    }

  	});

	$(document).ready(function(){
			var App = new AppView;
	});

})(jQuery)