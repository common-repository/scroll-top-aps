<?php 
/* 
Plugin Name: APS SCROLL TOP
Plugin URI: https://showrav.onlinebatch.xyz/plugins/aps-scroll-top.zip
Author: Rahimul Islam Showrav
Author URI: http://softtech-it.com
Version: 1.1
Description: This is a simple scroll to top plugins.
License: GPLv2 or later
*/



if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly



class aps_scroll_top{

	public function __construct(){
		add_action('wp_footer', array($this, 'footer_scroll_top'));
		add_action('wp_enqueue_scripts', array($this, 'style_and_javascript'));
	}


	public function footer_scroll_top(){
		?>
		<div class="scroll-to-top">
			<a href="#"><i class="fas fa-chevron-up"></i></a>
		</div>
		
		<?php
	}


	public function style_and_javascript(){
		wp_enqueue_style('ami-fontawesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css');
		wp_enqueue_style('custom', PLUGINS_URL('assets/css/custom.css', __FILE__));


		wp_enqueue_script('custom', PLUGINS_URL('assets/js/custom.js', __FILE__),array('jquery'),'', false);
	}
}

if(class_exists('aps_scroll_top')){
	new aps_scroll_top();
}






























