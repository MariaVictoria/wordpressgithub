<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_archive', array(
    'title'          => esc_html__( 'Category/Archive', 'caeliora' ),
    'priority'       => 220,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'background',
	'settings'    => 'caeliora_colors_header_bg_type',
	'label'       => esc_html__( 'Default Category/Archive Header Background', 'caeliora' ),
	'section'     => 'caeliora_section_colors_archive',
	'priority' => 5,
	'default'     => array(
		'background-color'      => '#f7f7f7',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '.archive-box',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_archivebox_border',
	'label'       => esc_html__( 'Default Category/Archive Header Border Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_archive',
	'default'     => '#eaeaea',
	'priority'    => 9,
	'output'    => array(
		array(
			'element'         => '.archive-box',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto',
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_archivebox_browsing',
	'label'       => esc_html__( 'Default Archive Box "Browsing" Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_archive',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '0',
		'color'          => '#888888',
		'text-transform' => 'none',
	),
	'priority'    => 13,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.archive-box span',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_archivebox_title',
	'label'       => esc_html__( 'Default Archive Box Title Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_archive',
	'default'     => array(
		'font-size'      => '32px',
		'letter-spacing' => '4px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.archive-box h1',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_archivebox_description',
	'label'       => esc_html__( 'Category Description Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_archive',
	'default'     => array(
		'font-size'      => '14px',
		'line-height'	 => '25px',
		'letter-spacing' => '0',
		'color'          => '#555555',
		'text-transform' => 'none',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.archive-description p',
		),
	),
) );