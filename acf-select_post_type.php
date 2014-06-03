<?php

/*
Plugin Name: Advanced Custom Fields: Select Post Type
Plugin URI: http://poweredbycoffee.co.uk
Description: Select a post type - just incase you ever need to.
Version: 1.0.0
Author: Stewart Ritchie, poweredbycoffee
Author URI: http://poweredbycoffee.co.uk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-select_post_type', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_select_post_type( $version ) {
	
	include_once('acf-select_post_type-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_select_post_type');	




// 3. Include field type for ACF4
function register_fields_select_post_type() {
	
	include_once('acf-select_post_type-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_select_post_type');	



	
?>