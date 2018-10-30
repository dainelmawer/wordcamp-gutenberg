<?php
/**
 * Functions to register client-side assets (scripts and stylesheets) for the
 * Gutenberg block.
 *
 * @package gutenworkshop
 */

/**
 * Registers all block assets so that they can be enqueued through Gutenberg in
 * the corresponding context.
 *
 * @see https://wordpress.org/gutenberg/handbook/blocks/writing-your-first-block-type/#enqueuing-block-scripts
 */
function gutennotification_block_init() {
	$dir = dirname( __FILE__ );

	$block_js = 'gutennotification/block.js';
	wp_register_script(
		'gutennotification-block-editor',
		plugins_url( $block_js, __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$block_js" )
	);

	$editor_css = 'gutennotification/editor.css';
	wp_register_style(
		'gutennotification-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(
			'wp-blocks',
		),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'gutennotification/style.css';
	wp_register_style(
		'gutennotification-block',
		plugins_url( $style_css, __FILE__ ),
		array(
			'wp-blocks',
		),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'gutenworkshop/gutennotification', array(
		'editor_script' => 'gutennotification-block-editor',
		'editor_style'  => 'gutennotification-block-editor',
		'style'         => 'gutennotification-block',
	) );
}
add_action( 'init', 'gutennotification_block_init' );
