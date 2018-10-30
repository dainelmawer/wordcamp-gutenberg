<?php
/**
 * Plugin Name:     Gutenworkshop
 * Plugin URI:      http://gutenberg.test
 * Description:     A gutenberg block plugin
 * Author:          Daine Mawer
 * Author URI:      https://dainelindleymawer.me
 * Text Domain:     gutenworkshop
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Gutenworkshop
 */

// Your code starts here.
include 'blocks/gutenblock.php';
include 'blocks/gutennotification.php';
include 'blocks/gutenapi.php';

function gutenworkshop_load_textdomain() {
	load_plugin_textdomain( 'gutenworkshop', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'gutenworkshop_load_textdomain' );
