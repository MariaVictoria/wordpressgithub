<?php

// Add Section
Kirki::add_section( 'caeliora_section_woo', array(
    'title'          => esc_html__( 'WooCommerce Settings', 'caeliora' ),
    'priority'       => 51,
) );

// Add Settings
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'caeliora_woo_layout',
	'label'       => esc_html__( 'WooCommerce Layout', 'caeliora' ),
	'section'     => 'caeliora_section_woo',
	'default'     => 'isFullwidth',
	'priority'    => 2,
	'choices'     => array(
		'isFullwidth' => esc_html__( 'Full-width', 'caeliora' ),
		'isSidebar'   => esc_html__( 'Sidebar', 'caeliora' ),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_woo_cart',
	'label'       => esc_html__( 'Display Shop Cart in Header?', 'caeliora' ),
	'section'     => 'caeliora_section_woo',
	'default'     => '1',
	'priority'    => 3,
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_woo_cart_color',
    'label'       => esc_html__( 'Shop Cart Icon Colors', 'caeliora' ),
    'section'     => 'caeliora_section_woo',
    'priority'    => 6,
    'choices'     => array(
      'cart'    => esc_html__( 'Cart Icon', 'caeliora' ),
			'bubble_text'   => esc_html__( 'Cart Bubble Number', 'caeliora' ),
    ),
    'default'     => array(
      'cart'    => '#000000',
			'bubble_text'   => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'cart',
		  'element'       => '.cart-contents:before',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'bubble_text',
		  'element'       => '.cart-contents .dt-count',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );