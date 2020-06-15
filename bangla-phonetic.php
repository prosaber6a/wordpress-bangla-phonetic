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

function bangla_phonetic_admin_assets ($screen) {
	if ('post.php' == $screen || 'post-new.php' == $screen) {
		wp_enqueue_script('bangla-phonetic-driver-js', plugin_dir_url( __FILE__ ) . '/assets/js/phonetic.driver.js', null, '1.0.0', true);
		wp_enqueue_script('bangla-phonetic-engine-js', plugin_dir_url( __FILE__ ) . '/assets/js/engine.js', null, '1.0.0', true);
		wp_enqueue_script('bangla-phonetic-quick-tag-js', plugin_dir_url( __FILE__ ) . '/assets/js/qt.js', null, '1.0.0', true);
	}
}

add_action( 'admin_enqueue_scripts', 'bangla_phonetic_admin_assets' );