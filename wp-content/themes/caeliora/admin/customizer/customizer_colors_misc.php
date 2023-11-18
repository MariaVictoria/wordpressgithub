<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_misc', array(
    'title'          => esc_html__( 'MISC', 'caeliora' ),
    'priority'       => 250,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_misc_blog_heading',
	'label'       => esc_html__( 'Blog Heading Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_misc',
	'default'     => array(
		'font-size'      => '18px',
		'letter-spacing' => '2px',
		'color'          => '#1f2025',
		'text-transform' => 'uppercase',
	),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.block-heading-wrap.blog-page .block-heading',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_misc_blog_heading_border',
	'label'       => esc_html__( 'Blog Heading Line Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_misc',
	'default'     => '#dddddd',
	'priority'    => 15,
	'output'    => array(
		array(
			'element'         => '.block-heading:before, .block-heading:after',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );