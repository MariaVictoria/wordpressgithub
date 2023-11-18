<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_mobile_menu', array(
    'title'          => esc_html__( 'Mobile/Side Menu', 'caeliora' ),
    'priority'       => 245,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_mobile_menu_bg',
	'label'       => esc_html__( 'Mobile/Side Menu BG', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output'    => array(
		array(
			'element'         => '.sidr',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_mobile_menu_close',
	'label'       => esc_html__( 'Mobile/Side Menu Close Icon', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => '#333333',
	'priority'    => 15,
	'output'    => array(
		array(
			'element'         => '#close-mobile-menu:before, #close-mobile-menu:after',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_mobile_menu_text',
	'label'       => esc_html__( 'Mobile/Side Menu Links', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '1px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 20,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.sidr ul.menu li a',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_mobile_menu_border',
	'label'       => esc_html__( 'Mobile/Side Menu Links Border', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => '#e8e8e8',
	'priority'    => 25,
	'output'    => array(
		array(
			'element'         => '.sidr ul.menu li, .sidr .sub-menu',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_mobile_menu_arrow',
	'label'       => esc_html__( 'Mobile/Side Menu Dropdown Arrow', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => '#000000',
	'priority'    => 30,
	'output'    => array(
		array(
			'element'         => '.sidr ul li .open-sidr',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_mobile_menu_social',
	'label'       => esc_html__( 'Mobile/Side Menu Social Icons', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => '#000000',
	'priority'    => 30,
	'output'    => array(
		array(
			'element'         => '.sidr-inner .header-social a',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_mobile_menu_search',
	'label'       => esc_html__( 'Mobile/Side Menu Search Icon', 'caeliora' ),
	'section'     => 'caeliora_section_colors_mobile_menu',
	'default'     => '#000000',
	'priority'    => 30,
	'output'    => array(
		array(
			'element'         => '.sidr-inner #header-search-wrap a',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );