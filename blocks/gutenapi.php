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
function gutenapi_block_init() {
	$dir = dirname( __FILE__ );

	$block_js = 'gutenapi/block.js';
	wp_register_script(
		'gutenapi-block-editor',
		plugins_url( $block_js, __FILE__ ),
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$block_js" )
	);

	$editor_css = 'gutenapi/editor.css';
	wp_register_style(
		'gutenapi-block-editor',
		plugins_url( $editor_css, __FILE__ ),
		array(
			'wp-blocks',
		),
		filemtime( "$dir/$editor_css" )
	);

	$style_css = 'gutenapi/style.css';
	wp_register_style(
		'gutenapi-block',
		plugins_url( $style_css, __FILE__ ),
		array(
			'wp-blocks',
		),
		filemtime( "$dir/$style_css" )
	);

	register_block_type( 'gutenworkshop/gutenapi', array(
		'editor_script' => 'gutenapi-block-editor',
		'editor_style'  => 'gutenapi-block-editor',
		'style'         => 'gutenapi-block',
	) );
}
add_action( 'init', 'gutenapi_block_init' );
