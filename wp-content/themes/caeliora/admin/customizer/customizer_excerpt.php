<?php

// Add Section
Kirki::add_section( 'caeliora_section_excerpt', array(
    'title'          => esc_html__( 'Excerpt/Summary Settings', 'caeliora' ),
    'priority'       => 41,
	'description'	 => esc_html__( 'An excerpt is a brief intro to your post\'s text. The "Excerpt" option automatically pulls the first # of words chosen from your post. The "Read More Tag" option lets you choose on a post-by-post basis the length of the excerpt by using the "More" block within the post edit screen.', 'caeliora' )
) );

// Add settings
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'radio',
	'settings'    => 'caeliora_excerpt_classic_type',
	'label'       => esc_html__( 'Classic Post Summary Type', 'caeliora' ),
	'section'     => 'caeliora_section_excerpt',
	'default'     => 'excerpt',
	'priority'    => 10,
	'choices'     => array(
		'excerpt'   => esc_html__( 'Excerpt', 'caeliora' ),
		'readmore'   => esc_html__( 'Read More Tag', 'caeliora' ),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_excerpt_classic_length',
	'label'       => esc_html__( 'Classic Post Excerpt Length', 'caeliora' ),
	'section'     => 'caeliora_section_excerpt',
	'default'     => 40,
	'priority'    => 11,
	'choices'     => array(
		'min'  => 1,
		'max'  => 500,
		'step' => 1,
	),
	'active_callback' => array(
		array(
            'setting'  => 'caeliora_excerpt_classic_type',
            'value'    => 'excerpt',
            'operator' => '=='
        )
    ),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_home_grid_excerpt_length',
	'label'       => esc_html__( 'Grid Post Excerpt Length', 'caeliora' ),
	'section'     => 'caeliora_section_excerpt',
	'default'     => 18,
	'priority'    => 12,
	'choices'     => array(
		'min'  => 1,
		'max'  => 500,
		'step' => 1,
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_home_list_excerpt_length',
	'label'       => esc_html__( 'List Post Excerpt Length', 'caeliora' ),
	'section'     => 'caeliora_section_excerpt',
	'default'     => 18,
	'priority'    => 16,
	'choices'     => array(
		'min'  => 1,
		'max'  => 500,
		'step' => 1,
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_home_grid_excerpt_display',
	'label'       => esc_html__( 'Hide Excerpt on Grid Posts?', 'caeliora' ),
	'section'     => 'caeliora_section_excerpt',
	'default'     => '0',
	'priority'    => 22,
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_home_list_excerpt_display',
	'label'       => esc_html__( 'Hide Excerpt on List Posts?', 'caeliora' ),
	'section'     => 'caeliora_section_excerpt',
	'default'     => '0',
	'priority'    => 26,
) );