<?php
/*
Plugin Name: Easy-to-use
Plugin URI: http://wordpress.org/plugins/easy-to-use/
Description: Unmasks password inputs, enables 'remember-me' by default, sets login interval to 1 year.
Version: 2.0
Author: webvitaly
Author URI: http://web-profile.com.ua/wordpress/plugins/
License: GPLv3
*/


defined('ABSPATH') OR exit; // prevent full path disclosure


class Easy_To_Use{
	
	public function __construct() {
		//add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts_and_styles')); // add scripts and styles to frontend section
		add_action('login_enqueue_scripts', array($this, 'enqueue_scripts_and_styles')); // add scripts and styles to admin section
		add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts_and_styles')); // add scripts and styles to login section
		
		add_filter( 'auth_cookie_expiration', array($this, 'auth_cookie_expiration') );
		
		add_filter('plugin_row_meta', array($this, 'plugin_meta'), 10, 2);
	}
	
	
	function enqueue_scripts_and_styles() { // add styles and scripts to login page
		// wp_enqueue_script('jquery');
		wp_enqueue_script('easy-to-use-script', plugins_url('/js/easy-to-use.js', __FILE__), array('jquery'), null, true );
		wp_enqueue_style('easy-to-use-style', plugins_url('/css/easy-to-use.css', __FILE__));
	}
	
	
	function auth_cookie_expiration( $expirein ) {
		return 365*24*60*60; // 1 year in seconds
	}
	
	
	function plugin_meta($links, $file) { // add 'Plugin page' and 'Donate' links to plugin meta row
		if (strpos($file, 'easy-to-use.php') !== false) {
			$links = array_merge($links, array('<a href="http://web-profile.com.ua/wordpress/plugins/easy-to-use/" title="Plugin page">Easy-to-use</a>'));
			$links = array_merge($links, array('<a href="http://web-profile.com.ua/donate/" title="Support the development">Donate</a>'));
		}
		return $links;
	}
	
}


new Easy_To_Use();