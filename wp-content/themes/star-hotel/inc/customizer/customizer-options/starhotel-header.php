<?php
function starhotel_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'star-hotel'),
		) 
	);

	
	/*=========================================
	Star Hotel Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','star-hotel'),
			'panel'  		=> 'header_section',
		)
    );





    // top header Site Title Color
	$topheadersitetitlecol = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_sitetitlecol',
    	array(
			'default' => $topheadersitetitlecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'topheader_sitetitlecol',
		array(
		    'label'   		=> __('Site Title Color','star-hotel'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// top header Tagline Color
	$topheadertaglinecol = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_taglinecol',
    	array(
			'default' => $topheadertaglinecol,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'topheader_taglinecol',
		array(
		    'label'   		=> __('Tagline Color','star-hotel'),
		    'section'		=> 'title_tagline',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);
	
 
	/*=========================================
	Star Hotel header
	=========================================*/
	$wp_customize->add_section(
        'top_header',
        array(
        	'priority'      => 5,
            'title' 		=> __('Header','star-hotel'),
			'panel'  		=> 'header_section',
		)
    );	


    $wp_customize->add_setting('starhotel_reset_header_settings',array(
	  'sanitize_callback'   => 'sanitize_text_field'
	));
	$wp_customize->add_control(new starhotel_Reset_Custom_Control($wp_customize, 'star_hotel_reset_header_settings',array(
	  'type' => 'reset_control',
	   'priority' => 1,
	  'label' => __('Reset Header Settings', 'star-hotel'),
	  'description' => 'star_hotel_header_reset_settings',
	  'section' => 'top_header'
	)));



    $wp_customize->add_setting('starhotel_top_header_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new starhotel_Tab_Control($wp_customize, 'starhotel_top_header_tabs', array(
	   'section' => 'top_header',
	   'priority' => 1,
	   'buttons' => array(
	      array(
     		'name' => esc_html__('General', 'star-hotel'),
 			'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'hide_show_sticky',
				'topheader_address',
				'topheader_phonetext',
				'topheader_fblink',
				'topheader_twitterlink',
				'topheader_instagramlink',
				'topheader_pinterestlink'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'star-hotel'),
            'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'header_menuscolor',
            	'header_menushovercolor',
            	'header_submenusbgcolor',
            	'header_submenutextcolor',
            	'header_submenustxthovercolor'
            ),
         )
	    
    	),
	)));


	// general setting

	// sticky header
	$wp_customize->add_setting( 'hide_show_sticky',array(
        'default' => false,
        'sanitize_callback' => 'starhotel_switch_sanitization'
   	) );
   	$wp_customize->add_control( new starhotel_Toggle_Switch_Custom_Control( $wp_customize, 'hide_show_sticky',array(
        'label' => __( 'Show Sticky Header','star-hotel' ),
        'section' => 'top_header'
   	)));


	// topheader address.
	$topheaderaddresstext = esc_html__('New York Ipsum dolor', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_address',
    	array(
			'default' => $topheaderaddresstext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_address',
		array(
		    'label'   		=> __('Address','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader phone no.
	$topheaderphonetext = esc_html__('1-222-2333-33', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_phonetext',
    	array(
			'default' => $topheaderphonetext,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'topheader_phonetext',
		array(
		    'label'   		=> __('Phone Number','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	
	// topheader fb link
	$topheaderfblink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_fblink',
    	array(
			'default' => $topheaderfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_fblink',
		array(
		    'label'   		=> __('Facebook Link','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader twitter link
	$topheadertwitterlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_twitterlink',
    	array(
			'default' => $topheadertwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader instagram link
	$topheaderinstagramlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_instagramlink',
    	array(
			'default' => $topheaderinstagramlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_instagramlink',
		array(
		    'label'   		=> __('Instagram Link','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// topheader pinterest link
	$topheaderpinterestlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'topheader_pinterestlink',
    	array(
			'default' => $topheaderpinterestlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'topheader_pinterestlink',
		array(
		    'label'   		=> __('Pinterest Link','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	


	// Style setting

	// header menus Color
	$headermenuscolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'header_menuscolor',
    	array(
			'default' => $headermenuscolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menuscolor',
		array(
		    'label'   		=> __('Menus Color','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// header menushover Color
	$headermenushovercolor = esc_html__('#a08e5e', 'star-hotel' );
	$wp_customize->add_setting(
    	'header_menushovercolor',
    	array(
			'default' => $headermenushovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_menushovercolor',
		array(
		    'label'   		=> __('Menus Hover & Active Color','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$headersubmenusbgcolor = esc_html__('#000', 'star-hotel' );
	$wp_customize->add_setting(
    	'header_submenusbgcolor',
    	array(
			'default' => $headersubmenusbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenusbgcolor',
		array(
		    'label'   		=> __('SubMenus BG Color','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenutext Color
	$headersubmenutextcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'header_submenutextcolor',
    	array(
			'default' => $headersubmenutextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenutextcolor',
		array(
		    'label'   		=> __('SubMenus Text Color','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// header submenustxthover Color
	$headersubmenustxthovercolor = esc_html__('#a08e5e', 'star-hotel' );
	$wp_customize->add_setting(
    	'header_submenustxthovercolor',
    	array(
			'default' => $headersubmenustxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'header_submenustxthovercolor',
		array(
		    'label'   		=> __('SubMenus Text Hover Color','star-hotel'),
		    'section'		=> 'top_header',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	$wp_customize->register_control_type('starhotel_Tab_Control');
	$wp_customize->register_panel_type( 'starhotel_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'starhotel_WP_Customize_Section' );

}
add_action( 'customize_register', 'starhotel_header_settings' );



if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class starhotel_WP_Customize_Panel extends WP_Customize_Panel {
	   public $panel;
	   public $type = 'starhotel_panel';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class starhotel_WP_Customize_Section extends WP_Customize_Section {
	   public $section;
	   public $type = 'starhotel_section';
	   public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}






