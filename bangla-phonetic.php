<?php
/**
 * Plugin Name: Bangla Phonetic
 * Author: SaberHR
 * Plugin URI: http://saberhr.com
 * Author URI: http://saberhr.com
 * Description:
 * Version: 1.0.0
 * Licence: GPLv2 or later
 * Text Domain: bangla-phonetic
 * Domain Path: /languages/
 */



function bangla_phonetic_load_text_domain () {
	load_plugin_textdomain( 'bangla-phonetic', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'plugin_loaded', 'bangla_phonetic_load_text_domain' );