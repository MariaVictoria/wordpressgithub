<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Corporate Theme
 *
 * service section
 */

$wp_customize->add_section(
	'lead_corporate_service',
	array(
		'title' => esc_html__( 'service', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// service enable settings
$wp_customize->add_setting(
	'lead_corporate_service',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_corporate_service',
	array(
		'section'		=> 'lead_corporate_service',
		'label'			=> esc_html__( 'Content type:', 'lead-corporate' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-corporate' ),
		'type'			=> 'select',		
		'choices'		=> array( 
				'disable' => esc_html__( '--Disable--', 'lead-corporate' ),
				'page' => esc_html__( 'Page', 'lead-corporate' ),
		 	)
	)
);

for ($i=1; $i <= 3; $i++) { 

	// service page setting
	$wp_customize->add_setting(
		'lead_corporate_service_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_corporate_service_page_'.$i,
		array(
			'section'		=> 'lead_corporate_service',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_service_page'
		)
	);
}