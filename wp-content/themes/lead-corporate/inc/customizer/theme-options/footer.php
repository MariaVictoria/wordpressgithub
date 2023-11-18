<?php
/**
 *
 *
 * Footer copyright
 *
 *
 */
// Footer copyright
$wp_customize->add_section(
	'lead_corporate_footer_section',
	array(
		'title' => esc_html__( 'Footer', 'lead-corporate' ),
		'panel' => 'lead_corporate_general_panel',
	)
);

// Footer copyright setting
$wp_customize->add_setting(
	'lead_corporate_copyright_txt',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_html',
		'default' => $default['lead_corporate_copyright_txt'],
	)
);

$wp_customize->add_control(
	'lead_corporate_copyright_txt',
	array(
		'section'		=> 'lead_corporate_footer_section',
		'label'			=> esc_html__( 'Copyright text:', 'lead-corporate' ),
		'type'			=> 'textarea',
	)
);
