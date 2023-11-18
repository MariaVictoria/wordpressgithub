<?php

Kirki::add_panel( 'caeliora_panel_colors', array(
  'priority'    => 45,
  'title'       => esc_attr__( 'Colors & Typography Settings', 'caeliora' ),
	'icon' 		  => 'dashicons-admin-appearance'
) );

// Add Section
Kirki::add_section( 'caeliora_section_global_colors', array(
  'title'          => esc_html__( 'Global Colors', 'caeliora' ),
  'priority'       => 200,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_global',
    'label'       => esc_html__( 'Global Colors', 'caeliora' ),
    'section'     => 'caeliora_section_global_colors',
    'priority'    => 50,
    'choices'     => array(
      'primary'     => esc_html__( 'Primary', 'caeliora' ),
      'links'       => esc_html__( 'Links', 'caeliora' ),
      'buttons_bg'  => esc_html__( 'Buttons Background', 'caeliora' ),
    ),
    'default'     => array(
      'primary'      => '#f78a74',
      'links'        => '#f78a74',
      'buttons_bg'   => '#f78a74',
    ),
	'output'    => array(
		array(
		  'choice'		=> 'primary',
		  'element'   => 'body, :root',
		  'property'  => '--deo-primary-color',
      'context' => array( 'editor', 'front' ),
		),
		array(
		  'choice'		=> 'links',
		  'element'   => 'a',
		  'property'  => 'color',
      'context' => array( 'editor', 'front' ),
		),
    array(
		  'choice'		=> 'buttons_bg',
		  'element'   => 'body, :root',
		  'property'  => '--deo-button-background-color',
      'context' => array( 'editor', 'front' ),
		),
	),
	'transport' => 'auto'
) );