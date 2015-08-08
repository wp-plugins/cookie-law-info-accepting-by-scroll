<?php
/*
	Plugin Name: Cookie Law Info Accepting By Scroll
	Plugin URI: http://www.syriusweb.com
	Description: This plgin, used in conjunction with Cookie Law Info plugin by Richard Ashby, permits acceptance of the use of cookies on your device by scrolling the page. Also reloads the page after clicking on the "accept" button.
	Version: 1.1
	Author: Carmine Ricco
	Author URI: http://www.syriusweb.com
	License: GPL2
	
	Copyright 2015 Carmine Ricco (info@syriusweb.com)
*/

if ( in_array( 'cookie-law-info/cookie-law-info.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

	require_once "config.php";
	
	add_action('activate_plugin', 'clias_activate');
	function clias_activate() {			
		//do something		
	}
	
	
	add_action('deactivate_plugin', 'clias_deactivate');
	function clias_deactivate() {			
		//do something else
	}	
	
	
	add_action('init', 'clias_init');
	function clias_init() {		
		$locale = apply_filters('plugin_locale', get_locale(), LANG_DOMAIN);	
		load_textdomain(LANG_DOMAIN, WP_LANG_DIR.'/'.LANG_DOMAIN.'/'.LANG_DOMAIN.'-'.$locale.'.mo');
		load_plugin_textdomain(LANG_DOMAIN, FALSE, dirname(plugin_basename(__FILE__)).'/languages/');
	}		
	
		
	add_action( 'init','clias_init_js');
	function clias_init_js() {
			
		wp_enqueue_script('jquery_cookie_js', plugins_url('/js/jquery.cookie.js',__FILE__ ), array('jquery'), false, true);		
		wp_enqueue_script('clias_js', plugins_url('/js/clias.js',__FILE__ ), array(), false, true );
		
	}
	
	
	add_action('init', 'clias_init_styles');
	function clias_init_styles() {		
		
		wp_register_style('clias_css', plugins_url('/css/clias.css',__FILE__ ));
		wp_enqueue_style('clias_css');
		
	}	
	
	// add the admin options page
	add_action("admin_menu", "clias_add_menu");
	
	function clias_add_menu() {				
		//do something
	}	
	
}