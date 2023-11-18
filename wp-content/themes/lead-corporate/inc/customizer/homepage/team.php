<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Corporate Theme
 *
 * Team section
 */

$wp_customize->add_section(
	'lead_corporate_team',
	array(
		'title' => esc_html__( 'Team', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// team enable settings
$wp_customize->add_setting(
	'lead_corporate_team',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_corporate_team',
	array(
		'section'		=> 'lead_corporate_team',
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
	'lead_corporate_team_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Our Members', 'lead-corporate'),
	)
);

$wp_customize->add_control(
	'lead_corporate_team_sub_title',
	array(
		'section'		=> 'lead_corporate_team',
		'label'			=> esc_html__( 'Sub Title:', 'lead-corporate' ),
		'active_callback' => 'lead_corporate_if_team_enabled',	
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_team_sub_title', 
	array(
        'selector'            => '#our-team p.section-subtitle',
		'render_callback'     => 'lead_corporate_team_partial_sub_title',
	) 
);

$wp_customize->add_setting(
	'lead_corporate_team_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Here is Our Awesome Team', 'lead-corporate'),
	)
);

$wp_customize->add_control(
	'lead_corporate_team_title',
	array(
		'section'		=> 'lead_corporate_team',
		'label'			=> esc_html__( 'Title:', 'lead-corporate' ),		
		'active_callback' => 'lead_corporate_if_team_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_team_title', 
	array(
        'selector'            => '#our-team h2.section-title',
		'render_callback'     => 'lead_corporate_team_partial_title',
	) 
);

for ($i=1; $i <= 3; $i++) { 

	// team page setting
	$wp_customize->add_setting(
		'lead_corporate_team_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_corporate_team_page_'.$i,
		array(
			'section'		=> 'lead_corporate_team',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_team_page'
		)
	);

	$wp_customize->add_setting(
		'lead_corporate_team_position_'.$i,
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'	=> 'refresh',
		)
	);

	$wp_customize->add_control(
		'lead_corporate_team_position_'.$i,
		array(
			'section'		=> 'lead_corporate_team',
			'label'			=> esc_html__( 'Members Position:', 'lead-corporate' ). $i,
			'active_callback' => 'lead_corporate_if_team_enabled',	
		)
	);

}