<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_sidebar', array(
    'title'          => esc_html__( 'Sidebar', 'caeliora' ),
    'priority'       => 210,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'radio',
	'settings'    => 'caeliora_colors_sidebar_layout',
	'label'       => esc_html__( 'Widget Layout', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => 'layout1',
	'priority'    => 3,
	'choices'     => array(
		'layout1'   => esc_html__( 'Widget Style 1', 'caeliora' ),
		'layout2'   => esc_html__( 'Widget Style 2', 'caeliora' ),
		'layout2 line-heading'   => esc_html__( 'Widget Style 3', 'caeliora' ),
	),
));

/* Widget title */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_title',
	'label'       => esc_html__( 'Widget Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2.5px',
		'color'          => '#ffffff',
		'text-transform' => 'uppercase',
	),
	'priority'    => 4,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.widget-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_title_bg',
	'label'       => esc_html__( 'Widget Title Background', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#111111',
	'priority'    => 15,
	'output'    => array(
		array(
			'element'         => '.widget-title',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto',
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_colors_sidebar_layout',
            'value'    => array('layout1', 'layout2'),
            'operator' => 'contains'
        )
    )
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_widget2_border',
	'label'       => esc_html__( 'Widget Border Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#111111',
	'priority'    => 16,
	'output'    => array(
		array(
			'element'         => '.widget-layout2:not(.line-heading) .widget-title',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto',
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_colors_sidebar_layout',
            'value'    => 'layout2',
            'operator' => '=='
        )
    )
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_border',
	'label'       => esc_html__( 'Widget Border Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#dddddd',
	'priority'    => 20,
	'output'    => array(
		array(
			'element'         => '.widget, .side-pop.list, .side-pop, .widget .search-wrapper, .social-widget a, .about-skew',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto',
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_colors_sidebar_layout',
            'value'    => 'layout1',
            'operator' => '=='
        )
    )
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_sidebar_title_padding',
	'label'       => esc_html__( 'Widget Title Padding', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'description' => esc_html__( 'Default: 15px', 'caeliora' ),
	'default'     => 15,
	'choices'     => array(
		'min'  => 1,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.widget-layout1 .widget-title, .widget-layout2 .widget-title',
			'property' => 'padding-top',
			'units' => 'px'
		),
		array(
			'element' => '.widget-layout1 .widget-title, .widget-layout2 .widget-title',
			'property' => 'padding-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
	'priority'    => 21,
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_colors_sidebar_layout',
            'value'    => array('layout1', 'layout2'),
            'operator' => 'contains'
        )
    )
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_title_line',
	'label'       => esc_html__( 'Widget Title Lines', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#d5d5d5',
	'priority'    => 22,
	'output'    => array(
		array(
			'element'         => '.widget-layout2.line-heading .widget-title:before, .widget-layout2.line-heading .widget-title:after',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto',
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_colors_sidebar_layout',
            'value'    => 'layout2 line-heading',
            'operator' => '=='
        )
    )
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_para',
	'label'       => esc_html__( 'Widget Paragraphs', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '0',
		'color'          => '#383838',
		'text-transform' => 'none',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.widget p',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_link_color',
	'label'       => esc_html__( 'Widget Link Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#000000',
	'priority'    => 30,
	'output'    => array(
		array(
			'element'         => '.widget a',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_link_color_hover',
	'label'       => esc_html__( 'Widget Link Hover Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => 'var(--deo-primary-color)',
	'priority'    => 32,
	'output'    => array(
		array(
			'element'         => '.widget:not(.caeliora_social_widget) a:hover',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );

/* About me widget */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_about_heading',
	'label'       => esc_html__( 'About Me: Heading/Name', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '16px',
		'letter-spacing' => '2px',
		'color'          => '#000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 50,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.about-name',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_about_heading_line',
	'label'       => esc_html__( 'About Me: Heading/Name Underline', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#ffd6cb',
	'priority'    => 52,
	'output'    => array(
		array(
			'element'         => '.about-name',
			'property'      => 'box-shadow',
			'value_pattern' => 'inset 0 -8px 0 $',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_about_subheading',
	'label'       => esc_html__( 'About Me: Sub Heading', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '0',
		'color'          => '#777777',
		'text-transform' => 'none',
	),
	'priority'    => 54,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.about-label',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_post_title_small',
	'label'       => esc_html__( 'Post Widget: Post Title (Small & Text Layout)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '13px',
		'line-height'	 => '19px',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 56,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.side-pop.list .side-pop-content h4',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_post_title_big',
	'label'       => esc_html__( 'Post Widget: Post Title (Big Layout)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '14px',
		'line-height'	 => '21px',
		'letter-spacing' => '0',
		'text-transform' => 'none',
	),
	'priority'    => 58,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.side-pop .side-pop-content h4',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_sidebar_post_numbers',
    'label'       => esc_html__( 'Post Widget: Numbering Circle', 'caeliora' ),
    'section'     => 'caeliora_section_colors_sidebar',
    'priority'    => 60,
    'choices'     => array(
      'text'   => esc_html__( 'Number Color', 'caeliora' ),
			'border'   => esc_html__( 'Border Color', 'caeliora' ),
    ),
    'default'     => array(
      'text'   => '#ffffff',
			'border'   => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'text',
		  'element'       => '.side-count',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'border',
		  'element'       => '.side-count',
		  'property'      => 'border-color',
		),
	),
	'transport' => 'auto'
) );

/* Promo widget */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_sidebar_promo_title',
	'label'       => esc_html__( 'Promo Box Widget: Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => array(
		'font-size'      => '11px',
		'line-height'	 => '1.5',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 66,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.widget .promo-item h4',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_sidebar_promo_colors',
    'label'       => esc_html__( 'Promo Box Widget Colors', 'caeliora' ),
    'section'     => 'caeliora_section_colors_sidebar',
    'priority'    => 70,
    'choices'     => array(
        'bg'    => esc_html__( 'Background Color', 'caeliora' ),
        'text'   => esc_html__( 'Text Color', 'caeliora' ),
		'bg_hover'   => esc_html__( 'Background Color Hover', 'caeliora' ),
		'text_hover'   => esc_html__( 'text Color Hover', 'caeliora' ),
    ),
    'default'     => array(
        'bg'    => '#ffffff',
        'text'   => '#000000',
		'bg_hover'   => '#121212',
		'text_hover'   => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'bg',
		  'element'       => '.widget .promo-item  h4',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '.widget .promo-item  h4',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'bg_hover',
		  'element'       => '.widget .promo-item:hover > h4',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'text_hover',
		  'element'       => '.widget .promo-item:hover > h4',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'radio-buttonset',
	'settings'    => 'caeliora_colors_sidebar_social',
	'label'       => esc_html__( 'Social Widget Colors', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => 'brand-color',
	'priority'    => 80,
	'choices'     => array(
		'brand-color'   => esc_html__( 'Use Brand Colors', 'caeliora' ),
		'custom-color' => esc_html__( 'Use Custom Color', 'caeliora' ),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_sidebar_social_icon',
	'label'       => esc_html__( 'Social Icon Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_sidebar',
	'default'     => '#222222',
	'priority'    => 85,
	'output'    => array(
		array(
			'element'         => '.caeliora_social_widget .social-widget a',
			'property'        => 'color',
		),
	),
	'active_callback' => array(
		array(
            'setting'  => 'caeliora_colors_sidebar_social',
            'value'    => array('custom-color'),
            'operator' => 'contains'
        )
    ),
	'transport'	  => 'auto'
) );