<?php
/**
 * Star Hotel Theme Customizer.
 *
 * @package Star Hotel
 */

 if ( ! class_exists( 'starhotel_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class starhotel_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_preview_init',                  array( $this, 'starhotel_customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', 	   array( $this, 'starhotel_customizer_script' ) );
			add_action( 'customize_register',                      array( $this, 'starhotel_customizer_register' ) );
			add_action( 'after_setup_theme',                       array( $this, 'starhotel_customizer_settings' ) );
		}
		
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function starhotel_customizer_register( $wp_customize ) {
			
			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting('custom_logo')->transport = 'refresh';			
			
			/**
			 * Helper files
			 */
			require STAR_HOTEL_PARENT_INC_DIR . '/customizer/sanitization.php';
		}


	
		
		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function starhotel_customize_preview_js() {
			wp_enqueue_script( 'starhotel-customizer', STAR_HOTEL_PARENT_INC_URI . '/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}
		
		
		function starhotel_customizer_script() {
			 wp_enqueue_script( 'starhotel-customizer-section', STAR_HOTEL_PARENT_INC_URI .'/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
		}

		// Include customizer customizer settings.
			
		function starhotel_customizer_settings() {	
			   require STAR_HOTEL_PARENT_INC_DIR . '/customizer/customizer-options/starhotel-header.php';
			   require STAR_HOTEL_PARENT_INC_DIR . '/customizer/customizer-options/starhotel-frontpage.php';
			   require STAR_HOTEL_PARENT_INC_DIR . '/customizer/customizer-options/starhotel-footer.php';
			   require STAR_HOTEL_PARENT_INC_DIR . '/customizer/customizer-pro/class-customize.php';
		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
starhotel_Customizer::get_instance();