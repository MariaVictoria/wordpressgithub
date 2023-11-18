<?php
/**
 * General settings
 */
// General settings
$wp_customize->add_section(
	'lead_corporate_general_section',
	array(
		'title' => esc_html__( 'General', 'lead-corporate' ),
		'panel' => 'lead_corporate_general_panel',
	)
);

// Breadcrumb enable setting
$wp_customize->add_setting(
	'lead_corporate_breadcrumb_enable',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_checkbox',
		'default' => true,
	)
);

$wp_customize->add_control(
	'lead_corporate_breadcrumb_enable',
	array(
		'section'		=> 'lead_corporate_general_section',
		'label'			=> esc_html__( 'Enable breadcrumb.', 'lead-corporate' ),
		'type'			=> 'checkbox',
	)
);