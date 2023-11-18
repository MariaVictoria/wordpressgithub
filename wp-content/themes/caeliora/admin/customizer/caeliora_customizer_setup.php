<?php

// Check if Kirki is installed
if ( class_exists( 'Kirki' ) ) {

// Disable telemetry
add_filter( 'kirki_telemetry', '__return_false' );

//////////////////////////////////////////////////////////////////
// Customizer - Kirki Configuration
//////////////////////////////////////////////////////////////////
Kirki::add_config( 'caeliora_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/**
* Pro Customizer Options
*/
function caeliora_pro_customizer_options( $section, $uniqid, $priority = 10 ) {
	if ( ! function_exists( 'caeliora_fs' ) ) return;
	if ( caeliora_fs()->is_not_paying() ) {
		Kirki::add_field( 'caeliora_settings_config', array(
			'type'        => 'custom',
			'settings'    => 'caeliora_pro_options_' . $uniqid,
			'section'     => $section,
			'priority'		=> $priority,
			'default'     => '<h3 style="margin-top:0;">' . esc_html__( 'More Options Available in Caeliora Pro', 'caeliora' ) . '</h3>' . '<a href="' . esc_url( caeliora_fs()->get_upgrade_url() ) . '" class="button button-primary">' .
					esc_html__( 'Upgrade Now!', 'caeliora' ) .
				'</a>',
		) );		
	}
}

//////////////////////////////////////////////////////////////////
// Customizer - Add Settings
//////////////////////////////////////////////////////////////////
if ( class_exists( 'Kirki' ) ) {
 	
	// Include all settings
	include( get_template_directory() . '/admin/customizer/customizer_homepage.php');
	include( get_template_directory() . '/admin/customizer/customizer_header.php');
	include( get_template_directory() . '/admin/customizer/customizer_archive.php');
	include( get_template_directory() . '/admin/customizer/customizer_footer.php');
	include( get_template_directory() . '/admin/customizer/customizer_colors.php');
	include( get_template_directory() . '/admin/customizer/customizer_social.php');
	include( get_template_directory() . '/admin/customizer/customizer_posts.php');
	include( get_template_directory() . '/admin/customizer/customizer_page.php');
	include( get_template_directory() . '/admin/customizer/customizer_fonts.php');
	include( get_template_directory() . '/admin/customizer/customizer_excerpt.php');
	include( get_template_directory() . '/admin/customizer/customizer_mobile_menu.php');
	
	// Check if ACF Pro is installed
	if (class_exists('ACF')) {
	include( get_template_directory() . '/admin/customizer/customizer_misc.php');
	}
	
	// Check if Mailchimp for WordPress is installed
	if(function_exists('_mc4wp_load_plugin')) {
	include( get_template_directory() . '/admin/customizer/customizer_newsletter.php');
	}
	
	// Check if WooCommerce is installed
	if ( class_exists( 'WooCommerce' ) ) {
	include( get_template_directory() . '/admin/customizer/customizer_woo.php');
	}
	
}


//////////////////////////////////////////////////////////////////
// Customizer - Custom styling
//////////////////////////////////////////////////////////////////
function caeliora_enqueue_customizer_stylesheet() {

	wp_register_style( 'caeliora-customizer-css', get_template_directory_uri() . '/admin/customizer/css/customizer_custom.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'caeliora-customizer-css' );

}
add_action( 'customize_controls_print_styles', 'caeliora_enqueue_customizer_stylesheet' );

/**
 * Enqueue script for custom customize control.
 */
function caeliora_enqueue_customizer_scripts() {
	wp_enqueue_script( 'custom-customize', get_template_directory_uri() . '/admin/customizer/js/caeliora_customizer_scripts.js', array( 'jquery', 'customize-controls' ), false, true );
}
add_action( 'customize_controls_enqueue_scripts', 'caeliora_enqueue_customizer_scripts' );

}
?>