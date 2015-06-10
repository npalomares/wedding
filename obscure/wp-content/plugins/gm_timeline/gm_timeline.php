<?php
/*
Plugin Name: GM Timeline
Plugin URI: http://www.gaslampmedia.com
Description: Timeline custom post type.
Version: 1.0
Author: Thai Yin
Author URI: http://www.gaslampmedia.com/
License: All Rights Reserved
*/
// CREATE CUSTOM POST TYPES


include("inc/post_type.php");
include("inc/shortcodes.php");
include("inc/taxonomy.php");


function timeline_scripts() {
    $plugin_url = plugin_dir_url( __FILE__ );

    //register timeline css
    wp_register_style( 'timelineStyle', $plugin_url . 'inc/css/timeline.css' );
    wp_enqueue_style( 'timelineStyle' );
	
	//load javascript    
    wp_register_script( 'timelineScript', $plugin_url . 'inc/js/timeline.js' );
    wp_enqueue_script( 'timelineScript' );
}
add_action( 'wp_enqueue_scripts', 'timeline_scripts' );
?>