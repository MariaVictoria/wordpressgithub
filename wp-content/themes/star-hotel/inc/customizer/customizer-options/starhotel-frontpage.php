<?php
function starhotel_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'starhotel_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Frontpage Sections', 'star-hotel' ),
		)
	);
	

	/*=========================================
	Slider Section
	=========================================*/
	$wp_customize->add_section(
		'slider_setting', array(
			'title' => esc_html__( 'Slider Section', 'star-hotel' ),
			'description'=> __('<a>Note :</a> Image Size Should Be 1800*1100','star-hotel'),
			'priority' => 1,
			'panel' => 'starhotel_frontpage_sections',
		)
	);



	$wp_customize->add_setting('starhotel_slider_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new starhotel_Tab_Control($wp_customize, 'starhotel_slider_tabs', array(
	   'section' => 'slider_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'star-hotel'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'slider1',
            	'slider2',
            	'slider3',
            	'slider4',
            	'slider5',
            	'slider6'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'star-hotel'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'slider_titlecolor',
                'slider_descriptioncolor',
                'slider_btntxt1color',
				'slider_btnbrdcolor',
				'slider_btntxthovercolor'

            ),
     	)
	    
    	),
	))); 


	

	// General Tab

	// Slider 1
	$wp_customize->add_setting( 
    	'slider1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider1',
		array(
		    'label'   		=> __('Slider 1','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		



	// Slider 2
	$wp_customize->add_setting(
    	'slider2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'slider2',
		array(
		    'label'   		=> __('Slider 2','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 3
	$wp_customize->add_setting(
    	'slider3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'slider3',
		array(
		    'label'   		=> __('Slider 3','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	


	// Slider 4
	$wp_customize->add_setting(
    	'slider4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'slider4',
		array(
		    'label'   		=> __('Slider 4','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);



	// Slider 5
	$wp_customize->add_setting(
    	'slider5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider5',
		array(
		    'label'   		=> __('Slider 5','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// Slider 6
	$wp_customize->add_setting(
    	'slider6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'slider6',
		array(
		    'label'   		=> __('Slider 6','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);




	// Style setting

	// slider title Color
	$slidertitlecolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'slider_titlecolor',
    	array(
			'default' => $slidertitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_titlecolor',
		array(
		    'label'   		=> __('Title Color','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// slider description Color
	$sliderdescriptioncolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'slider_descriptioncolor',
    	array(
			'default' => $sliderdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btntxt1 Color
	$sliderbtntxt1color = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'slider_btntxt1color',
    	array(
			'default' => $sliderbtntxt1color,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxt1color',
		array(
		    'label'   		=> __('Button Text Color','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// slider btnbrd Color
	$sliderbtnbrdcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'slider_btnbrdcolor',
    	array(
			'default' => $sliderbtnbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btnbrdcolor',
		array(
		    'label'   		=> __('Button Border Color','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	

	// slider btntxthover Color
	$sliderbtntxthovercolor = esc_html__('#a08e5e', 'star-hotel' );
	$wp_customize->add_setting(
    	'slider_btntxthovercolor',
    	array(
			'default' => $sliderbtntxthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'slider_btntxthovercolor',
		array(
		    'label'   		=> __('Button Text Hover Color','star-hotel'),
		    'section'		=> 'slider_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	/*=========================================
	ourrooms Section
	=========================================*/
	$wp_customize->add_section(
		'ourrooms_setting', array(
			'title' => esc_html__( 'Our Rooms Section', 'star-hotel' ),
			'priority' => 2,
			'panel' => 'starhotel_frontpage_sections',
		)
	);



	$wp_customize->add_setting('starhotel_ourrooms_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new starhotel_Tab_Control($wp_customize, 'starhotel_ourrooms_tabs', array(
	   'section' => 'ourrooms_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'star-hotel'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'ourrooms_disable_section',
            	'ourrooms_heading',
            	'ourrooms1',
				'ourrooms_rate1',
            	'ourrooms2',
				'ourrooms_rate2',
            	'ourrooms3',
				'ourrooms_rate3',
            	'ourrooms4',
				'ourrooms_rate4',
            	'ourrooms5',
				'ourrooms_rate5',
            	'ourrooms6',
				'ourrooms_rate6'
            ),
            'active' => true,
         ),
	      array(
            'name' => esc_html__('Style', 'star-hotel'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
            	'ourrooms_headingcolor',
            	'ourrooms_boxtitlecolorcolor',
            	'ourrooms_boxtextcolor'
            ),
     	),
  		array(
	        'name' => esc_html__('Layout', 'star-hotel'),
	        'icon' => 'dashicons dashicons-layout',
	        'fields' => array(
	            'star_hotel_ourrooms_section_width'
	        ),
     	)
	    
    	),
	))); 



	// General

	// hide show ourrooms section
	$wp_customize->add_setting(
        'ourrooms_disable_section',
        array(
            'sanitize_callback' => 'wp_kses_post',
        )
    ); 
    $wp_customize->add_control(
        new starhotel_Toggle_Switch_Custom_Control(
            $wp_customize,
            'ourrooms_disable_section',
            array(
                'settings'      => 'ourrooms_disable_section',
                'section'       => 'ourrooms_setting',
                'label'         => __( 'Disable Section', 'star-hotel' ),
                'on_off_label'  => array(
                    'on' => __( 'Yes', 'star-hotel' ),
                    'off' => __( 'No', 'star-hotel' )
                ),
            )
        )
    );


	

    // ourrooms title
	$wp_customize->add_setting(
    	'ourrooms_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_heading',
		array(
		    'label'   		=> __('Heading','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourrooms 1
	$wp_customize->add_setting( 
    	'ourrooms1',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms1',
		array(
		    'label'   		=> __('Our Rooms 1','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);		


	// ourrooms 1 rate
	$wp_customize->add_setting(
    	'ourrooms_rate1',
    	array(
			'default' => '$89',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_rate1',
		array(
		    'label'   		=> __('Rate 1','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	

	// ourrooms 2
	$wp_customize->add_setting(
    	'ourrooms2',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms2',
		array(
		    'label'   		=> __('Our Rooms 2','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// ourrooms 2 rate
	$wp_customize->add_setting(
    	'ourrooms_rate2',
    	array(
			'default' => '$89',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 2,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_rate2',
		array(
		    'label'   		=> __('Rate 2','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourrooms 3
	$wp_customize->add_setting(
    	'ourrooms3',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms3',
		array(
		    'label'   		=> __('Our Rooms 3','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);	

	// ourrooms 3 rate
	$wp_customize->add_setting(
    	'ourrooms_rate3',
    	array(
			'default' => '$89',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_rate3',
		array(
		    'label'   		=> __('Rate 3','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourrooms 4
	$wp_customize->add_setting(
    	'ourrooms4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms4',
		array(
		    'label'   		=> __('Our Rooms 4','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// ourrooms 4 rate
	$wp_customize->add_setting(
    	'ourrooms_rate4',
    	array(
			'default' => '$89',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_rate4',
		array(
		    'label'   		=> __('Rate 4','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// ourrooms 5
	$wp_customize->add_setting(
    	'ourrooms5',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms5',
		array(
		    'label'   		=> __('Our Rooms 5','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// ourrooms 5 rate
	$wp_customize->add_setting(
    	'ourrooms_rate5',
    	array(
			'default' => '$89',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_rate5',
		array(
		    'label'   		=> __('Rate 5','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// ourrooms 6
	$wp_customize->add_setting(
    	'ourrooms6',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 5,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms6',
		array(
		    'label'   		=> __('Our Rooms 6','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'dropdown-pages',
			'transport'         => $selective_refresh,
		)  
	);

	// ourrooms 6 rate
	$wp_customize->add_setting(
    	'ourrooms_rate6',
    	array(
			'default' => '$89',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 6,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_rate6',
		array(
		    'label'   		=> __('Rate 6','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// style

	// ourrooms headingcolor color
	$ourroomsheadingcolor = esc_html__('#a08e5e', 'star-hotel' );
	$wp_customize->add_setting(
    	'ourrooms_headingcolor',
    	array(
			'default' => $ourroomsheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_headingcolor',
		array(
		    'label'   		=> __('Heading Color','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// ourrooms boxtitlecolor color
	$ourroomsboxtitlecolorcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'ourrooms_boxtitlecolorcolor',
    	array(
			'default' => $ourroomsboxtitlecolorcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_boxtitlecolorcolor',
		array(
		    'label'   		=> __('Title Color','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// ourrooms text color
	$ourroomstextcolor = esc_html__('#919191', 'star-hotel' );
	$wp_customize->add_setting(
    	'ourrooms_boxtextcolor',
    	array(
			'default' => $ourroomstextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'ourrooms_boxtextcolor',
		array(
		    'label'   		=> __('Text Color','star-hotel'),
		    'section'		=> 'ourrooms_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);



	// layout setting
	$wp_customize->add_setting('star_hotel_ourrooms_section_width',array(
        'default' => 'Box Width',
        'sanitize_callback' => 'starhotel_sanitize_choices',
    ));
    $wp_customize->add_control('star_hotel_ourrooms_section_width',array(
        'type' => 'select',
        'label' => __('Section Width','star-hotel'),
        'choices' => array (
            'Box Width' => __('Box Width','star-hotel'),
            'Full Width' => __('Full Width','star-hotel')
        ),
        'section' => 'ourrooms_setting',
    ));



	/*=========================================
	contactus Section
	=========================================*/
	$wp_customize->add_section(
		'contactus_setting', array(
			'title' => esc_html__( 'Contact Us Section', 'star-hotel' ),
			'priority' => 3,
			'panel' => 'starhotel_frontpage_sections',
		)
	);

	$wp_customize->add_setting('starhotel_contactus_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new starhotel_Tab_Control($wp_customize, 'starhotel_contactus_tabs', array(
	   'section' => 'contactus_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'star-hotel'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
				'box1contactus_subheading',
				'box1contactus_heading',
				'box1booknow_btnlink',
				'box2contactus_heading',
				'box2contactus_address',
				'box2contactus_phonetext',
				'box2contactus_mail',
				'box2contactus_fblink',
				'box2contactus_twitterlink',
				'box2contactus_linkedinlink',
				'box2contactus_pinterestlink',
				'box2contactus_instagramlink',
				'box2contactus_btnlink',
				'box3contactus_heading',
				'box3contactus_shortcode'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'star-hotel'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'contactus_boxtextcolor'

            ),
     	)
	    
    	),
	))); 



	// box1contactus_subheading
	$wp_customize->add_setting(
    	'box1contactus_subheading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box1contactus_subheading',
		array(
		    'label'   		=> __('Box1 Sub Heading','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	



	// box1contactus_heading
	$wp_customize->add_setting(
    	'box1contactus_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box1contactus_heading',
		array(
		    'label'   		=> __('Box1 Heading','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// box1booknow_btnlink
	$wp_customize->add_setting(
    	'box1booknow_btnlink',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box1booknow_btnlink',
		array(
		    'label'   		=> __('Box1 Button Link','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// box2contactus_heading
	$wp_customize->add_setting(
    	'box2contactus_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_heading',
		array(
		    'label'   		=> __('Box2 Heading','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	//  box2contactus_address
	$wp_customize->add_setting(
    	'box2contactus_address',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_address',
		array(
		    'label'   		=> __('Address','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// box2contactus_phonetext
	$wp_customize->add_setting(
    	'box2contactus_phonetext',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_phonetext',
		array(
		    'label'   		=> __('Phone Number','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// box2contactus_mail
	$wp_customize->add_setting(
		'box2contactus_mail',
		array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_mail',
		array(
			'label'   		=> __('Mail','star-hotel'),
			'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// contactus fb link
	$contactusfblink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'box2contactus_fblink',
    	array(
			'default' => $contactusfblink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_fblink',
		array(
		    'label'   		=> __('Facebook Link','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// contactus twitter link
	$contactustwitterlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'box2contactus_twitterlink',
    	array(
			'default' => $contactustwitterlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_twitterlink',
		array(
		    'label'   		=> __('Twitter Link','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// contactus linkedin link
	$contactuslinkedinlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'box2contactus_linkedinlink',
    	array(
			'default' => $contactuslinkedinlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_linkedinlink',
		array(
		    'label'   		=> __('Linkedin Link','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);

	// contactus pinterest link
	$contactuspinterestlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'box2contactus_pinterestlink',
    	array(
			'default' => $contactuspinterestlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_pinterestlink',
		array(
		    'label'   		=> __('Pinterest Link','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// contactus instagram link
	$contactusinstagramlink = esc_html__('', 'star-hotel' );
	$wp_customize->add_setting(
    	'box2contactus_instagramlink',
    	array(
			'default' => $contactusinstagramlink,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 7,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_instagramlink',
		array(
		    'label'   		=> __('Instagram Link','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);


	// box2contactus_btnlink
	$wp_customize->add_setting(
		'box2contactus_btnlink',
		array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box2contactus_btnlink',
		array(
			'label'   		=> __('Box2 Button Link','star-hotel'),
			'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	
	
	// box3contactus_heading
	$wp_customize->add_setting(
		'box3contactus_heading',
		array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box3contactus_heading',
		array(
			'label'   		=> __('Box3 Heading','star-hotel'),
			'section'		=> 'contactus_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	

	// box3contactus_shortcode
	$wp_customize->add_setting(
		'box3contactus_shortcode',
		array(
			'default' => '[Your Shortcode Here]',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'box3contactus_shortcode',
		array(
			'label'   		=> __('Box3 Form Shortcode','star-hotel'),
			'section'		=> 'contactus_setting',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);

	//style

	// contactus text color
	$contactustextcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'contactus_boxtextcolor',
    	array(
			'default' => $contactustextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'contactus_boxtextcolor',
		array(
		    'label'   		=> __('Text Color','star-hotel'),
		    'section'		=> 'contactus_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	/*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'star-hotel' ),
			'priority' => 3,
			'panel' => 'starhotel_frontpage_sections',
		)
	);

	$wp_customize->add_setting('starhotel_blog_tabs', array(
	   'sanitize_callback' => 'wp_kses_post',
	));

	$wp_customize->add_control(new starhotel_Tab_Control($wp_customize, 'starhotel_blog_tabs', array(
	   'section' => 'blog_setting',
	   'priority' => 2,
	   'buttons' => array(
	      array(
         	'name' => esc_html__('General', 'star-hotel'),
            'icon' => 'dashicons dashicons-welcome-write-blog',
            'fields' => array(
            	'blog_heading'
            ),
            'active' => true,
         ), 
	      array(
            'name' => esc_html__('Style', 'star-hotel'),
        	'icon' => 'dashicons dashicons-art',
            'fields' => array(
                'blog_headingcolor',
                'blog_titlecolor',
                'blog_descriptioncolor',
                'blog_btntextcolor',
                'blog_datetextcolor'

            ),
     	)
	    
    	),
	))); 


	// General Tab

	// blog subheading Color
	$wp_customize->add_setting(
    	'blog_heading',
    	array(
			'default' => '',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 1,
		)
	);	

	$wp_customize->add_control( 
		'blog_heading',
		array(
		    'label'   		=> __('Heading','star-hotel'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'text',
			'transport'         => $selective_refresh,
		)  
	);	


	// Style setting

	// blog heading Color
	$blogheadingcolor = esc_html__('#a08e5e', 'star-hotel' );
	$wp_customize->add_setting(
    	'blog_headingcolor',
    	array(
			'default' => $blogheadingcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_headingcolor',
		array(
		    'label'   		=> __('Heading Color','star-hotel'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog title Color
	$blogtitlecolor = esc_html__('#000', 'star-hotel' );
	$wp_customize->add_setting(
    	'blog_titlecolor',
    	array(
			'default' => $blogtitlecolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_titlecolor',
		array(
		    'label'   		=> __('Title Color','star-hotel'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// blog description Color
	$blogdescriptioncolor = esc_html__('#6a6a6a', 'star-hotel' );
	$wp_customize->add_setting(
    	'blog_descriptioncolor',
    	array(
			'default' => $blogdescriptioncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_descriptioncolor',
		array(
		    'label'   		=> __('Description Color','star-hotel'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog btntext Color
	$blogbtntextcolor = esc_html__('#898989', 'star-hotel' );
	$wp_customize->add_setting(
    	'blog_btntextcolor',
    	array(
			'default' => $blogbtntextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_btntextcolor',
		array(
		    'label'   		=> __('Button Text Color','star-hotel'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// blog datetext Color
	$blogdatetextcolor = esc_html__('#898989', 'star-hotel' );
	$wp_customize->add_setting(
    	'blog_datetextcolor',
    	array(
			'default' => $blogdatetextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 3,
		)
	);	

	$wp_customize->add_control( 
		'blog_datetextcolor',
		array(
		    'label'   		=> __('Date & Comments Color','star-hotel'),
		    'section'		=> 'blog_setting',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	
	$wp_customize->register_control_type('starhotel_Tab_Control');

}

add_action( 'customize_register', 'starhotel_blog_setting' );

// service selective refresh
function starhotel_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .title h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'starhotel_blog_title_render_callback',
	
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .title h2',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'starhotel_blog_subtitle_render_callback',
	
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .title p',
		'settings'            => 'blog_description',
		'render_callback'  => 'starhotel_blog_description_render_callback',
	
	) );	
	}

add_action( 'customize_register', 'starhotel_blog_section_partials' );

// blog_title
function starhotel_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function starhotel_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// service description
function starhotel_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}


