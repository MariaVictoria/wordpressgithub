<?php
function starhotel_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'star-hotel'),
		) 
	);

    

	// Footer Bottom // 
	$wp_customize->add_section(
        'footer_bottom',
        array(
            'title' 		=> __('Footer','star-hotel'),
			'panel'  		=> 'footer_section',
			'priority'      => 3,
		)
    );
	
	// Footer Copyright Head
	$wp_customize->add_setting(
		'footer_btm_copy_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'starhotel_sanitize_text',
			'priority'  => 3,
		)
	);


	$wp_customize->add_setting('starhotel_footer_tabs', array(
		'sanitize_callback' => 'wp_kses_post',
	 ));
 
	 $wp_customize->add_control(new starhotel_Tab_Control($wp_customize, 'starhotel_footer_tabs', array(
		'section' => 'footer_bottom',
		'priority' => 2,
		'buttons' => array(
		   array(
			  'name' => esc_html__('General', 'star-hotel'),
			 'icon' => 'dashicons dashicons-welcome-write-blog',
			 'fields' => array(
				 'footer_copyright'
			 ),
			 'active' => true,
		  ), 
		   array(
			 'name' => esc_html__('Style', 'star-hotel'),
			 'icon' => 'dashicons dashicons-art',
			 'fields' => array(
				 'footer_copyrightcolor',
				 'footer_bgcolor',
				 'footer_brdcolor',
				 'footer_textcolor',
				 'footer_iconcolor',
				 'footer_listhovercolor'
 
			 ),
		  )
		 
		 ),
	 ))); 

	 
	
	// Footer Copyright 
	$starhotel_foo_copy = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_copyright',
    	array(
			'default' => $starhotel_foo_copy,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyright',
		array(
		    'label'   		=> __('CopyRight','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'textarea',
			'transport'         => $selective_refresh,
		)  
	);	



	// footer copyright color
	$footercopyrightcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_copyrightcolor',
    	array(
			'default' => $footercopyrightcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_copyrightcolor',
		array(
		    'label'   		=> __('Copyright Color','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer bg color
	$footerbgcolor = esc_html__('#2a292b', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_bgcolor',
    	array(
			'default' => $footerbgcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_bgcolor',
		array(
		    'label'   		=> __('BG Color','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer brd color
	$footerbrdcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_brdcolor',
    	array(
			'default' => $footerbrdcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_brdcolor',
		array(
		    'label'   		=> __('Border Color','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);


	// footer text color
	$footertextcolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_textcolor',
    	array(
			'default' => $footertextcolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_textcolor',
		array(
		    'label'   		=> __('Text Color','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer icon color
	$footericoncolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_iconcolor',
    	array(
			'default' => $footericoncolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_iconcolor',
		array(
		    'label'   		=> __('Icon Color','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	// footer listhover color
	$footerlisthovercolor = esc_html__('#fff', 'star-hotel' );
	$wp_customize->add_setting(
    	'footer_listhovercolor',
    	array(
			'default' => $footerlisthovercolor,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
			'priority'      => 4,
		)
	);	

	$wp_customize->add_control( 
		'footer_listhovercolor',
		array(
		    'label'   		=> __('List Hover Color','star-hotel'),
		    'section'		=> 'footer_bottom',
			'type' 			=> 'color',
			'transport'         => $selective_refresh,
		)  
	);

	$wp_customize->register_control_type('starhotel_Tab_Control');



}
add_action( 'customize_register', 'starhotel_footer' );
// Footer selective refresh
function starhotel_footer_partials( $wp_customize ){	
	// footer_copyright
	$wp_customize->selective_refresh->add_partial( 'footer_copyright', array(
		'selector'            => '.copy-right .copyright-text',
		'settings'            => 'footer_copyright',
		'render_callback'  => 'starhotel_footer_copyright_render_callback',
	) );
	
	}
add_action( 'customize_register', 'starhotel_footer_partials' );


// copyright_content
function starhotel_footer_copyright_render_callback() {
	return get_theme_mod( 'footer_copyright' );
}