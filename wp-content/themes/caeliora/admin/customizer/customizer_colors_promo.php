<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_promo', array(
    'title'          => esc_html__( 'Promo Box', 'caeliora' ),
    'priority'       => 230,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_promo_overlay',
	'label'       => esc_html__( 'Promo Box Overlay', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => 'rgba(0,0,0, 0.2)',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 5,
	'output'    => array(
		array(
			'element'         => '.promo-shadow',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_promo_border',
	'label'       => esc_html__( 'Promo Box Border', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => 'rgba(255,255,255, 1)',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 10,
	'output'    => array(
		array(
			'element'         => '.promo-overlay',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );


Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_promo_title',
	'label'       => esc_html__( 'Promo Box Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => array(
		'font-size'      => '18px',
		'letter-spacing' => '4px',
		'color'          => '#ffffff',
		'text-transform' => 'uppercase',
	),
	'priority'    => 15,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-item h5',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_promo_subtitle',
	'label'       => esc_html__( 'Promo Box Sub-title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => array(
		'font-size'      => '16px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'    => 35,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-item span',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_promo_style2_title',
	'label'       => esc_html__( 'Promo Box Title (Style 2)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => array(
		'font-size'      => '13px',
		'letter-spacing' => '2px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 50,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-style2 .promo-item h5',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_promo_style2_title',
	'label'       => esc_html__( 'Promo Box Title (Style 2 - Bottom Position)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => array(
		'font-size'      => '16px',
		'letter-spacing' => '1px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 51,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-style2.promo-position-bottom .promo-item h5',
		),
	),
) );


Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_promo_style2_title_bg',
	'label'       => esc_html__( 'Promo Box Title Background (Style 2)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => 'rgba(255,255,255, 1)',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 53,
	'output'    => array(
		array(
			'element'         => '.promo-style2 .promo-item h5',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_promo_style2_title_bg_hover',
	'label'       => esc_html__( 'Promo Box Title Hover Background (Style 2)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => 'rgba(255,255,255, 1)',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 55,
	'output'    => array(
		array(
			'element'         => '.promo-style2 .promo-item:hover h5',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_promo_style2_title_border_hover',
	'label'       => esc_html__( 'Promo Box Border Hover Color (Style 2)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => 'rgba(255,255,255, 1)',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 55,
	'output'    => array(
		array(
			'element'         => '.promo-style2 .promo-item:hover .promo-overlay',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_promo_style2_title_text_hover',
	'label'       => esc_html__( 'Promo Box Title Hover Text Color (Style 2)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_promo',
	'default'     => '#000000',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 57,
	'output'    => array(
		array(
			'element'         => '.promo-style2 .promo-item:hover h5',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );