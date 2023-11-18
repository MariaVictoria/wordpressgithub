<?php
/**
 * Template parts.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Caeliora
 * @since 		 1.0.0
 */

if ( ! function_exists( 'caeliora_footer_bottom_text' ) ) {

	/**
	 * Footer bottom text
	 *
	 * @since 1.0.0
	 */
	function caeliora_footer_bottom_text() {
		$output = get_theme_mod( 'caeliora_footer_copyright_text', sprintf(
			esc_html__( 'Copyright &copy; [current-year] %1$s. Powered by %2$sCaeliora theme%3$s' , 'caeliora' ),
			get_bloginfo( 'name' ),
			'<a href="https://caeliora.deothemes.com">',
			'</a>'
		) );

		$output = str_replace( '[current-year]', date_i18n( 'Y' ), $output );
		echo do_shortcode( wp_kses_post( $output ) );
	}
}