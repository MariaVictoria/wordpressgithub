<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Corporate
 *
 * slider section
 */

$wp_customize->add_section(
	'lead_corporate_slider',
	array(
		'title' => esc_html__( 'Slider Section', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// slider enable settings
$wp_customize->add_setting(
	'lead_corporate_slider',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_corporate_slider',
	array(
		'section'		=> 'lead_corporate_slider',
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
	
	// slider page setting
	$wp_customize->add_setting(
		'lead_corporate_slider_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_corporate_slider_page_'.$i,
		array(
			'section'		=> 'lead_corporate_slider',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_slider_page'
		)
	);
}

$wp_customize->add_setting(
	'lead_corporate_slider_button_label',
	array(	
	'sanitize_callback' => 'sanitize_text_field',
	'default'			=> esc_html__( 'Learn More', 'lead-corporate' ),
	'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_corporate_slider_button_label',
	array(
	'label'       => __('Button Label', 'lead-corporate'),  
	'section'     => 'lead_corporate_slider',   		
	'type'        => 'text',
	'active_callback'	=> 'lead_corporate_if_slider_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_slider_button_label', 
	array(
        'selector'            => '#hero-slider div.read-more a',
		'render_callback'     => 'lead_corporate_slider_partial_button',
	) 
);
