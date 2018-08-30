jQuery(document).ready(function($){		

	jQuery('#main-nav').visualNav({
		externalLinks     : 'external',
		selectedClass : 'current_page_item'
	});		
	
	/* 
	 * Accordion
	 */
	$('.toggle-frame-set').each(function(i) {
		var $this = $(this),
		    $toggle = $this.find('.toggle-accordion');
		
		$toggle.click(function(){
			if( $(this).next().is(':hidden') ) {
				$this.find('.toggle-accordion').removeClass('active').next().slideUp();
				$(this).toggleClass('active').next().slideDown();
			}
			return false;
		});
	});
	/* Accordion End*/
	
	/**
	 * Tabs
	 */
	if($('ul.tabs-frame').length > 0) $('ul.tabs-frame').tabs('> .tabs-frame-content');
	
	/*Tabs End*/
	
	/**
	 * Tooltip
	 */
	if($(".tooltip-bottom").length){
		$(".tooltip-bottom").each(function(){
			$(this).tipTip({maxWidth: "auto"});
		});
	}

	if($(".tooltip-top").length){		
		$(".tooltip-top").each(function(){
			$(this).tipTip({maxWidth: "auto",defaultPosition: "top"});
		});
	}
	if($(".tooltip-left").length){
		$(".tooltip-left").each(function(){
			$(this).tipTip({maxWidth: "auto",defaultPosition: "left"});
		});
	}
	
	if($(".tooltip-right").length){
		$(".tooltip-right").each(function(){
			$(this).tipTip({maxWidth: "auto",defaultPosition: "right"});	
		});
	}
	/*Tooltip End*/
	
	/**
	 * Portfolio isotope	
	 */
	var $container = $('.portfolio-container');
	if($container.length){
		
		$container.isotope({
			filter: '*',
			animationOptions: { duration: 750, easing: 'linear', queue: false  }
		});
		
		if($("div#sorting-container").length){
			$("div#sorting-container a").click(function(){
				$("div#sorting-container a").removeClass("active-sort");
				var selector = $(this).attr('data-filter');
				$(this).addClass("active-sort");
				$container.isotope({ filter: selector, animationOptions: { duration: 750, easing: 'linear',  queue: false }});
				return false;
			});		
		}
	}	
	/*Portfolio isotope End*/
	
	/**
	 * Google Maps	
	 */	
	(function() {
		var $map = $('#map');
		if( $map.length ) {
			$map.gMap({
				address: 'No: 58 A, East Madison St, Baltimore, MD, USA',
				zoom: 16,
				markers: [
					{ 'address' : 'No: 58 A, East Madison St, Baltimore, MD, USA' }
				]
			});
		}
	})();	
	/*Google Maps*/
	
	
	/* Mibile Nav */	
	$('#main-nav ul').mobileMenu({
		defaultText: 'Navigate to...',
		className: 'mobile-menu',
		subMenuDash: '&ndash;'
	});	
	
	/**
	 * Contact Send mail
	 */	
	$(".enquiry-form").submit(function(e){
		var $form 	= $(this),
			$msg    = $(this).prev('div.message'),
			$action = $form.attr('action');
		$.post($action,$form.serialize(),function(data){
			$form.fadeOut("fast", function(){
				 $('.message').hide().html(data);
                    $('.message').show('fast');
			});
		});
		e.preventDefault();
	});
	
	
});

