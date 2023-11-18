<?php
/**
 * Lead Corporate Customizer
 *
 * @package Lead Corporate
 *
 * featured_courses section
 */

$wp_customize->add_section(
	'lead_corporate_featured_courses',
	array(
		'title' => esc_html__( 'Featured Section', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// featured_courses enable settings
$wp_customize->add_setting(
	'lead_corporate_featured_courses',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_corporate_featured_courses',
	array(
		'section'		=> 'lead_corporate_featured_courses',
		'label'			=> esc_html__( 'Content type:', 'lead-corporate' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-corporate' ),
		'type'			=> 'select',
		'choices'		=> array( 
				'disable' => esc_html__( '--Disable--', 'lead-corporate' ),
				'page' => esc_html__( 'Page', 'lead-corporate' ),
		 	)
	)
);

$wp_customize->add_setting(
	'lead_corporate_featured_courses_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('How Does It Works', 'lead-corporate'),
	)
);

$wp_customize->add_control(
	'lead_corporate_featured_courses_sub_title',
	array(
		'section'		=> 'lead_corporate_featured_courses',
		'label'			=> esc_html__( 'Sub Title:', 'lead-corporate' ),
		'active_callback' => 'lead_corporate_if_featured_courses_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_featured_courses_sub_title', 
	array(
        'selector'            => '#featured-courses p.section-subtitle',
		'render_callback'     => 'lead_corporate_featured_courses_partial_sub_title',
	) 
);

$wp_customize->add_setting(
	'lead_corporate_featured_courses_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Working Process', 'lead-corporate'),
	)
);

$wp_customize->add_control(
	'lead_corporate_featured_courses_title',
	array(
		'section'		=> 'lead_corporate_featured_courses',
		'label'			=> esc_html__( 'Title:', 'lead-corporate' ),		
		'active_callback' => 'lead_corporate_if_featured_courses_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_featured_courses_title', 
	array(
        'selector'            => '#featured-courses h2.section-title',
		'render_callback'     => 'lead_corporate_featured_courses_partial_title',
	) 
);

for ($i=1; $i <= 3; $i++) { 

	// featured_courses page setting
	$wp_customize->add_setting(
		'lead_corporate_featured_courses_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_corporate_featured_courses_page_'.$i,
		array(
			'section'		=> 'lead_corporate_featured_courses',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_featured_courses_page'
		)
	);
}

