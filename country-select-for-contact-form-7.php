<?php 
/**
* Plugin Name: Country Dropdown For Contact Form 7 
* Description: This plugin allows quickly search and select a country from a responsive, mobile-friendly flag dropdown.
* Version: 1.0
* Copyright: 2023
* Text Domain: country-select-for-contact-form-7
*/


if (!defined('ABSPATH')) {
    die('-1');
}

// define for base name
define('CSFCF7_BASE_NAME', plugin_basename(__FILE__));

// define for plugin file
define('csfcf7_plugin_file', __FILE__);



if (!defined('CSFCF7_PLUGIN_DIR')) {
    define('CSFCF7_PLUGIN_DIR', plugin_dir_path(__FILE__));
}
if (!defined('CSFCF7_PLUGIN_URL')) {
  define('CSFCF7_PLUGIN_URL',plugins_url('', __FILE__));
}
// Include function files
include_once(CSFCF7_PLUGIN_DIR.'includes/frontend.php');
include_once(CSFCF7_PLUGIN_DIR.'includes/admin.php');

function CSFCF7_load_script_style(){
    wp_enqueue_script( 'jquery-country', CSFCF7_PLUGIN_URL . '/public/js/countrySelect.js', array('jquery'), '2.0');
    wp_enqueue_script( 'jquery-countrys', CSFCF7_PLUGIN_URL. '/public/js/design.js', array('jquery'), '1.0');
    
    wp_localize_script( 'jquery-countrys', 'country_ajax', array( 'ajax_urla' => CSFCF7_PLUGIN_URL) );

    wp_enqueue_style( 'jquery-countrys-style', CSFCF7_PLUGIN_URL. '/public/css/countrySelect.css', '', '3.0' );
}
add_action( 'wp_enqueue_scripts', 'CSFCF7_load_script_style' );

?>