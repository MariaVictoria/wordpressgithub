<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Corporate
 *
 * about section
 */
$wp_customize->add_section(
	'lead_corporate_about',
	array(
		'title' => esc_html__( 'About', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// blog enable settings
$wp_customize->add_setting(
	'lead_corporate_about',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable',
	)
);
$wp_customize->add_control(
	'lead_corporate_about',
	array(
		'section'		=> 'lead_corporate_about',
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
	'lead_corporate_about_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'About Us', 'lead-corporate' ),
		'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_corporate_about_sub_title',
	array(
		'section'		=> 'lead_corporate_about',
		'label'			=> esc_html__( 'Sub Title:', 'lead-corporate' ),
		'active_callback'	=> 'lead_corporate_if_about_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_about_sub_title', 
	array(
        'selector'            => '#about p.section-subtitle',
		'render_callback'     => 'lead_corporate_about_partial_subtitle',
	) 
);

for ($i=1; $i <= 1 ; $i++) {

	// blog page setting
	$wp_customize->add_setting(
		'lead_corporate_about_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);
	$wp_customize->add_control(
		'lead_corporate_about_page_'.$i,
		array(
			'section'		=> 'lead_corporate_about',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_about_page'
		)
	);
}