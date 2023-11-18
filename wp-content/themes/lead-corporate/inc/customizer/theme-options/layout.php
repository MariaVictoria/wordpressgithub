<?php
/**
 * Global Layout
 */
// Global Layout
$wp_customize->add_section(
	'lead_corporate_global_layout',
	array(
		'title' => esc_html__( 'Global Layout', 'lead-corporate' ),
		'panel' => 'lead_corporate_general_panel',
	)
);

// Global archive layout setting
$wp_customize->add_setting(
	'lead_corporate_archive_sidebar',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'right',
	)
);

$wp_customize->add_control(
	'lead_corporate_archive_sidebar',
	array(
		'section'		=> 'lead_corporate_global_layout',
		'label'			=> esc_html__( 'Archive Sidebar', 'lead-corporate' ),
		'description'			=> esc_html__( 'This option works on all archive pages like: 404, search, date, category, "Your latest posts" and so on.', 'lead-corporate' ),
		'type'			=> 'radio',
		'choices'		=> array( 
			'right' => esc_html__( 'Right', 'lead-corporate' ), 
			'no' => esc_html__( 'No Sidebar', 'lead-corporate' ), 
		),
	)
);

// Global page layout setting
$wp_customize->add_setting(
	'lead_corporate_global_page_layout',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'right',
	)
);

$wp_customize->add_control(
	'lead_corporate_global_page_layout',
	array(
		'section'		=> 'lead_corporate_global_layout',
		'label'			=> esc_html__( 'Global page sidebar', 'lead-corporate' ),
		'description'			=> esc_html__( 'This option works only on single pages including "Posts page". This setting can be overridden for single page from the metabox too.', 'lead-corporate' ),
		'type'			=> 'radio',
		'choices'		=> array( 
			'right' => esc_html__( 'Right', 'lead-corporate' ), 
			'no' => esc_html__( 'No Sidebar', 'lead-corporate' ), 
		),
	)
);

// Global post layout setting
$wp_customize->add_setting(
	'lead_corporate_global_post_layout',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'right',
	)
);

$wp_customize->add_control(
	'lead_corporate_global_post_layout',
	array(
		'section'		=> 'lead_corporate_global_layout',
		'label'			=> esc_html__( 'Global post sidebar', 'lead-corporate' ),
		'description'			=> esc_html__( 'This option works only on single posts. This setting can be overridden for single post from the metabox too.', 'lead-corporate' ),
		'type'			=> 'radio',
		'choices'		=> array( 
			'right' => esc_html__( 'Right', 'lead-corporate' ), 
			'no' => esc_html__( 'No Sidebar', 'lead-corporate' ), 
		),
	)
);