<?php

// Add Section
Kirki::add_section( 'caeliora_section_footer', array(
    'title'          => esc_html__( 'Footer Settings', 'caeliora' ),
    'priority'       => 35,
) );

// Add Settings
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_footer_logo_enable',
	'label'       => esc_html__( 'Display Footer Logo?', 'caeliora' ),
	'section'     => 'caeliora_section_footer',
	'default'     => '1',
	'priority'    => 1,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'image',
	'settings'    => 'caeliora_footer_logo',
	'label'       => esc_html__( 'Upload Footer Logo', 'caeliora' ),
	'section'     => 'caeliora_section_footer',
	'default'     => get_template_directory_uri() . '/img/footer-logo.png',
	'priority'    => 2,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_footer_logo_max_width',
	'label'       => esc_html__( 'Logo Max width', 'caeliora' ),
	'section'     => 'caeliora_section_footer',
	'description' => esc_html__( 'Default: 160px', 'caeliora' ),
	'default'     => 160,
	'choices'     => array(
		'min'  => 0,
		'max'  => 2000,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '#footer-logo img',
			'property' => 'max-width',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
	'priority'    => 3,
) );

Kirki::add_field( 'caeliora_config', [
	'type'     => 'link',
	'settings' => 'caeliora_footer_logo_link',
	'label'       => esc_html__( 'Footer Logo Link', 'caeliora' ),
	'section'  => 'caeliora_section_footer',
	'default'  => '',
	'priority' => 4,
] );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_footer_logo_link_target',
	'label'       => esc_html__( 'Open link in a new tab?', 'caeliora' ),
	'section'     => 'caeliora_section_footer',
	'default'     => '0',
	'priority'    => 5,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'Editor',
	'settings'    => 'caeliora_footer_copyright_text',
	'label'       => esc_html__( 'Footer Copyright Text', 'caeliora' ),
	'section'     => 'caeliora_section_footer',
	'sanitize_callback' => 'wp_kses_post',
	'default'     => sprintf( esc_html__( 'Copyright &copy; [current-year] %1$s. Powered by %2$sCaeliora theme%3$s' , 'caeliora' ), get_bloginfo( 'name' ), '<a href="https://caeliora.deothemes.com">', '</a>' ),
	'priority'    => 10,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'slider',
	'settings'    => 'caeliora_footer_widget_columns',
	'label'       => esc_html__( 'Footer Widget Columns', 'caeliora' ),
	'description' => esc_html__( 'Go to Appearance > Widgets and use the "Footer" widget areas to add your widgets.', 'caeliora' ),
	'section'     => 'caeliora_section_footer',
	'default'     => 3,
	'priority'    => 15,
	'choices'     => array(
		'min'  => '1',
		'max'  => '4',
		'step' => '1',
	),
) );