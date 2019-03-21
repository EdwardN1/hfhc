<?php
/**
 * Created by PhpStorm.
 * User: Edward Nickerson
 * Date: 23/01/2019
 * Time: 10:19
 */

//error_log('loaded');

add_filter( 'block_categories', function( $categories, $post ) {
	//error_log('Block Cats Loading');
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'hfhcblocks',
				'title' => __( 'HFHC Blocks', 'hfhcblocks' ),
			),
		)
	);
}, 10, 2 );
// Update CSS within in Admin
function admin_style() {
	$version=filemtime(get_template_directory().'/assets/styles/style.css');
	wp_enqueue_style('hfhc-admin-styles', get_template_directory_uri().'/assets/styles/admin.css?v='.$version);
}
add_action('admin_enqueue_scripts', 'admin_style');

add_action( 'acf/init', 'acfgbc_StandardContent' );
function acfgbc_StandardContent() {
	if ( ! function_exists( 'acf_register_block' ) ) {
		return;
	}
	acf_register_block( array(
		'name'            => 'acfgbcStandardContent',
		'title'           => __( 'Standard Content' ),
		'description'     => __( 'Standard Content' ),
		'render_callback' => 'acfgbc_StandardContent_rc',
		'category'        => 'hfhcblocks',
		'icon'            => 'tagcloud',
		'mode'            => 'edit',
		'supports'        => array( 'align' => false, 'multiple' => true, ),
		'keywords'        => array( 'Row', 'Common' ),
	) );
}
function acfgbc_StandardContent_rc( $block, $content = '', $is_preview = false ) {
	if ($is_preview) {
		include_once get_template_directory().'/parts/blocks/editor/styles.php';
	}
	include get_template_directory(). '/parts/blocks/StandardContent.php';
}