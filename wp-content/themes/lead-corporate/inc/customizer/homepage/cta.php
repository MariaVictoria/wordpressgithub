<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Corporate
 *
 * cta section
 */
$wp_customize->add_section(
	'lead_corporate_cta',
	array(
		'title' => esc_html__( 'Cta', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);


// blog enable settings
$wp_customize->add_setting(
	'lead_corporate_cta',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable',
	)
);
$wp_customize->add_control(
	'lead_corporate_cta',
	array(
		'section'		=> 'lead_corporate_cta',
		'label'			=> esc_html__( 'Content type:', 'lead-corporate' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-corporate' ),
		'type'			=> 'select',
		'choices'		=> array(
				'disable' 	=> esc_html__( '--Disable--', 'lead-corporate' ),
				'page' 		=> esc_html__( 'Page', 'lead-corporate' ),
		 	)
	)
);

$wp_customize->add_setting(
	'lead_corporate_cta_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'GET SOLUTIONS FAST', 'lead-corporate' ),
		'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_corporate_cta_sub_title',
	array(
		'section'		=> 'lead_corporate_cta',
		'label'			=> esc_html__( 'Sub Title:', 'lead-corporate' ),
		'active_callback'	=> 'lead_corporate_if_cta_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_cta_sub_title', 
	array(
        'selector'            => '#call-to-action p.section-subtitle',
		'render_callback'     => 'lead_corporate_cta_partial_subtitle',
	) 
);

$wp_customize->add_setting( 
		'lead_corporate_cta_bg_image',
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_image',
		) 
	);

	$wp_customize->add_control( 
		new WP_Customize_Image_Control( $wp_customize, 'lead_corporate_cta_bg_image',
		array(
			'label'       		=> esc_html__( 'cta Image', 'lead-corporate' ),
			'section'     		=> 'lead_corporate_cta',
			'active_callback'	=> 'lead_corporate_if_cta_enabled',
		)
	) );

for ($i=1; $i <= 1 ; $i++) {
	
	// blog page setting
	$wp_customize->add_setting(
		'lead_corporate_cta_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);
	$wp_customize->add_control(
		'lead_corporate_cta_page_'.$i,
		array(
			'section'		=> 'lead_corporate_cta',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_cta_page'
		)
	);
}

$wp_customize->add_setting(
	'lead_corporate_cta_btn',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'GET A QUOTE HERE', 'lead-corporate' ),
		'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_corporate_cta_btn',
	array(
		'section'		=> 'lead_corporate_cta',
		'label'			=> esc_html__( 'Button Label:', 'lead-corporate' ),
		'active_callback'	=> 'lead_corporate_if_cta_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_cta_btn', 
	array(
        'selector'            => '#call-to-action div.read-more a',
		'render_callback'     => 'lead_corporate_cta_partial_btn',
	) 
);

