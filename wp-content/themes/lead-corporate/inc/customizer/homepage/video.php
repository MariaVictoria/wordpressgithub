<?php
/**
 * Lead Corporate Customizer
 *
 * @package Lead Corporate
 *
 * video section
 */
$wp_customize->add_section(
	'lead_corporate_video',
	array(
		'title' => esc_html__( 'Video', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// blog enable settings
$wp_customize->add_setting(
	'lead_corporate_video',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'page',
	)
);
$wp_customize->add_control(
	'lead_corporate_video',
	array(
		'section'		=> 'lead_corporate_video',
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
	'lead_corporate_video_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'Our Video', 'lead-corporate' ),
		'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_corporate_video_sub_title',
	array(
		'section'		=> 'lead_corporate_video',
		'label'			=> esc_html__( 'Sub Title:', 'lead-corporate' ),
		'active_callback'	=> 'lead_corporate_if_video_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_video_sub_title', 
	array(
        'selector'            => '#video p.section-subtitle',
		'render_callback'     => 'lead_corporate_video_partial_subtitle',
	) 
);

// post_video number setting
$wp_customize->add_setting(
	'lead_corporate_video_excerpt',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_number_range',
		'default' => 45,
	)
);

$wp_customize->add_control(
	'lead_corporate_video_excerpt',
	array(
		'section'		=> 'lead_corporate_video',
		'label'			=> esc_html__( 'Number of excerpt text:', 'lead-corporate' ),
		'description'			=> esc_html__( 'Min: 5 | Max: 100', 'lead-corporate' ),
		'type'			=> 'number',
		'input_attrs'	=> array( 'min' => 5, 'max' => 100 ),
		'active_callback'	=> 'lead_corporate_if_video_enabled',
	)
);
for ($i=1; $i <= 1 ; $i++) {
	// blog page setting
	$wp_customize->add_setting(
		'lead_corporate_video_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);
	$wp_customize->add_control(
		'lead_corporate_video_page_'.$i,
		array(
			'section'		=> 'lead_corporate_video',
			'label'			=> esc_html__( 'Page ', 'lead-corporate-pro' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_video_page'
		)
	);
}

$wp_customize->add_setting(
	'lead_corporate_video_btn_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default' => esc_html__( 'Learn More', 'lead-corporate' ),
		'transport'	=> 'postMessage',
	)
);

$wp_customize->add_control(
	'lead_corporate_video_btn_title',
	array(
		'section'		=> 'lead_corporate_video',
		'label'			=> esc_html__( 'Btn Title:', 'lead-corporate' ),
		'active_callback'	=> 'lead_corporate_if_video_enabled',
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_video_btn_title', 
	array(
        'selector'            => '#video div.read-more a',
		'render_callback'     => 'lead_corporate_video_partial_btn_title',
	) 
);
