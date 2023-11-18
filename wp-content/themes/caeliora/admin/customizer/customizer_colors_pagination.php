<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_pagination', array(
    'title'          => esc_html__( 'Pagination', 'caeliora' ),
    'priority'       => 240,
	'panel'			 => 'caeliora_panel_colors'
) );

/*Footer */
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_pagi_active_bg',
    'label'       => esc_html__( 'Active Pagination Number', 'caeliora' ),
    'section'     => 'caeliora_section_colors_pagination',
    'priority'    => 4,
    'choices'     => array(
        'bg'    => esc_html__( 'Background', 'caeliora' ),
        'text'   => esc_html__( 'Text Color', 'caeliora' ),
    ),
    'default'     => array(
        'bg'    => 'var(--deo-primary-color)',
        'text'   => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'bg',
		  'element'       => '.caeliora-pagination .page-numbers.current',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '.caeliora-pagination .page-numbers.current',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_pagi_number',
    'label'       => esc_html__( 'Pagination Numbers', 'caeliora' ),
    'section'     => 'caeliora_section_colors_pagination',
    'priority'    => 8,
    'choices'     => array(
        'text'    => esc_html__( 'Text Color', 'caeliora' ),
        'hover'   => esc_html__( 'Text Hover Color', 'caeliora' ),
    ),
    'default'     => array(
        'text'    => '#000000',
        'hover'   => 'var(--deo-primary-color)',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'text',
		  'element'       => '.caeliora-pagination .page-numbers',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'hover',
		  'element'       => '.caeliora-pagination a.page-numbers:hover',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_pagi_nextprev',
	'label'       => esc_html__( 'Pagination Next/Prev Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_pagination',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '3px',
		'color'			 => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 12,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.caeliora-pagination .page-numbers.prev, .caeliora-pagination .page-numbers.next',
		),
	),
) );