jQuery(document).ready(function() {
	
	jQuery(window).scroll(function(){							
		
		if (jQuery.cookie('viewed_cookie_policy') == undefined) {			
			jQuery.cookie('viewed_cookie_policy', 'yes', { path: '/', expires: 365 });					
			location.reload();
		}	
		
	});
	
	jQuery( "#cookie_action_close_header" ).on( "click", function() {
		location.reload();
	});
	
});