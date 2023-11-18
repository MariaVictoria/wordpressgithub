<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_footer', array(
    'title'          => esc_html__( 'Footer', 'caeliora' ),
    'priority'       => 205,
	'panel'			 => 'caeliora_panel_colors'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'custom',
	'settings'    => 'panelfix',
	'section'     => 'caeliora_section_colors_footer',
	'default'     => '<div class="panelfix"></div>',
	'priority'    => 1,
) );

// Instagram Footer Section
Kirki::add_section( 'caeliora_section_colors_footer_instagram', array(
    'title'          => esc_html__( 'Instagram Footer Colors', 'caeliora' ),
    'priority'       => 110,
	'section'		 => 'caeliora_section_colors_footer'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_footer_insta_bg',
	'label'       => esc_html__( 'Instagram Footer Background', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer_instagram',
	'default'     => '#f4f4f4',
	'priority'    => 2,
	'output'    => array(
		array(
			'element'         => '#insta-footer',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_footer_insta_title',
	'label'       => esc_html__( 'Instagram Footer Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer_instagram',
	'default'     => array(
		'font-size'      => '30px',
		'letter-spacing' => '4px',
		'color'			 => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 3,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.insta-header h5, .insta-header h5 a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_footer_insta_subtitle',
	'label'       => esc_html__( 'Instagram Footer Subtitle', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer_instagram',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'color'			 => '#555555',
		'text-transform' => 'uppercase',
	),
	'priority'    => 8,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.insta-header span',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_footer_insta_padding_top',
	'label'       => esc_html__( 'Instagram Title Padding Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer_instagram',
	'description' => esc_html__( 'Default: 60px', 'caeliora' ),
	'default'     => 60,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 0,
		'max'  => 1000,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.insta-header',
			'property' => 'padding-top',
			'units' => 'px'
		),
	),
	'priority'    => 9,
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_footer_insta_padding_bottom',
	'label'       => esc_html__( 'Instagram Title Padding Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer_instagram',
	'description' => esc_html__( 'Default: 40px', 'caeliora' ),
	'default'     => 40,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 0,
		'max'  => 1000,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.insta-header',
			'property' => 'padding-bottom',
			'units' => 'px'
		),
	),
	'priority'    => 9,
) );

/*Footer */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_footer_bg',
	'label'       => esc_html__( 'Footer Background', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer',
	'default'     => '#010101',
	'priority'    => 2,
	'output'    => array(
		array(
			'element'         => '#footer',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_footer_social',
	'label'       => esc_html__( 'Footer Social Icons', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer',
	'default'     => '#010101',
	'priority'    => 4,
	'output'    => array(
		array(
			'element'         => '.footer-social a',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_footer_social',
    'label'       => esc_html__( 'Footer Social Icons', 'caeliora' ),
    'section'     => 'caeliora_section_colors_footer',
    'priority'    => 7,
    'choices'     => array(
      'color'    => esc_html__( 'Color', 'caeliora' ),
    ),
    'default'     => array(
      'color'    => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'color',
		  'element'       => '.footer-social a',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_footer_text',
    'label'       => esc_html__( 'Footer Copyright Text Color', 'caeliora' ),
    'section'     => 'caeliora_section_colors_footer',
    'priority'    => 9,
    'choices'     => array(
        'color'    => esc_html__( 'Text Color', 'caeliora' ),
        'link'   => esc_html__( 'Link Color', 'caeliora' ),
    ),
    'default'     => array(
        'color'    => '#888888',
        'link'   => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'color',
		  'element'       => '.copy-text, .copy-text p',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'link',
		  'element'       => '.copy-text a',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_footer_text_typo',
	'label'       => esc_html__( 'Footer Copyright Text Typography', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.copy-text, .copy-text p',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_footer_menu',
    'label'       => esc_html__( 'Footer Menu Colors', 'caeliora' ),
    'section'     => 'caeliora_section_colors_footer',
    'priority'    => 14,
    'choices'     => array(
        'link'    => esc_html__( 'Menu Color', 'caeliora' ),
			'separator'   => esc_html__( 'Separator Color', 'caeliora' ),
    ),
    'default'     => array(
      'link'    => '#ffffff',
			'separator'   => '#555555',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'link',
		  'element'       => '.footer-menu li a',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'separator',
		  'element'       => '.footer-menu li:after',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_footer_menu_text',
	'label'       => esc_html__( 'Footer Menu Typography', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 15,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.footer-menu li a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_footer_widget_title',
	'label'       => esc_html__( 'Footer Widget Title Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2.5px',
		'color'			 => '#111111',
		'text-transform' => 'uppercase',
	),
	'priority'    => 30,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#footer-widgets .widget-layout2.line-heading .widget-title',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_footer_widget_line',
	'label'       => esc_html__( 'Footer Widget Title Lines Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_footer',
	'default'     => '#d5d5d5',
	'priority'    => 34,
	'output'    => array(
		array(
			'element'         => '#footer-widgets .widget-layout2.line-heading .widget-title:before, #footer-widgets .widget-layout2.line-heading .widget-title:after',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );