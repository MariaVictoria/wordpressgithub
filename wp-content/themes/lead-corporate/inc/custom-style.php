<?php
/**
 * 
 *
 * @see lead_corporate_custom_header_setup().
 */
function lead_corporate_header_text_style() {
	// If we get this far, we have custom styles. Let's do this.
	$header_text_display = get_theme_mod( 'lead_corporate_header_text_display' );
	?>
	<style type="text/css">

	.site-title a{
		color: #<?php echo esc_attr( get_header_textcolor() ); ?>;
	}
	.site-description {
		color: <?php echo esc_attr( get_theme_mod( 'lead_corporate_header_tagline', '#2e2e2e' ) ); ?>;
	}
	
	</style>

	<?php
}
add_action( 'wp_head', 'lead_corporate_header_text_style' );