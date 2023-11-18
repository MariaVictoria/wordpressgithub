<?php

// Add Section
Kirki::add_section( 'caeliora_section_mobile_menu', array(
    'title'          => esc_html__( 'Mobile/Side Menu', 'caeliora' ),
    'priority'       => 43,
) );

// Add Settings
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_mobile_menu_show_logo',
	'label'       => esc_html__( 'Display Logo', 'caeliora' ),
	'section'     => 'caeliora_section_mobile_menu',
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_mobile_menu_logo_maxwidth',
	'label'       => esc_html__( 'Logo Max Width (Percent)', 'caeliora' ),
	'section'     => 'caeliora_section_mobile_menu',
	'description' => esc_html__( 'Default: 80%', 'caeliora' ),
	'default'     => 80,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.sidr-inner .normal-logo img',
			'property' => 'max-width',
			'units' => '%'
		),
	),
	'priority'    => 16,
	'transport' => 'auto',
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_mobile_menu_show_logo',
            'value'    => '1',
            'operator' => '=='
        )
    )
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_mobile_menu_show_social',
	'label'       => esc_html__( 'Display Social Icons', 'caeliora' ),
	'section'     => 'caeliora_section_mobile_menu',
	'default'     => '1',
	'priority'    => 22,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_mobile_menu_show_search',
	'label'       => esc_html__( 'Display Search Icon', 'caeliora' ),
	'section'     => 'caeliora_section_mobile_menu',
	'default'     => '1',
	'priority'    => 28,
) );