<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_header', array(
    'title'          => esc_html__( 'Header', 'caeliora' ),
    'priority'       => 200,
	'panel'			 => 'caeliora_panel_colors'
) );

/*Header*/
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'background',
	'settings'    => 'caeliora_colors_header_bg',
	'label'       => esc_html__( 'Header Background', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'priority' => 5,
	'default'     => array(
		'background-color'      => '#ffffff',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '#header, .sticky-wrapper.sticky #header.header-white, #mobile-menu',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_header_shadow',
	'label'       => esc_html__( 'Header Box Shadow Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'priority' => 10,
	'default'     => 'rgba(0,0,0,.07)',
	'choices'     => array(
		'alpha' => true,
	),
	'output'    => array(
		array(
		  'element'       => '#header:not(.menu-bar-layout), #mobile-menu',
		  'property'      => 'box-shadow',
		  'value_pattern' => '0 0 shadow_size $',
		  'pattern_replace' => array(
				'shadow_size'    => 'caeliora_colors_header_shadow_size',
			),
		),
	),
	'transport' => 'refresh'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_header_shadow_size',
	'label'       => esc_html__( 'Header Box Shadow Size', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'description' => esc_html__( 'Default: 28px', 'caeliora' ),
	'default'     => 28,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'output'      => array(
		array(
		  'element'       => '#header:not(.menu-bar-layout), #mobile-menu',
		  'property'      => 'box-shadow',
		  'value_pattern' => '0 0 $px shadow_color',
		  'pattern_replace' => array(
				'shadow_color'    => 'caeliora_colors_header_shadow',
			),
		),
	),
	'transport' => 'auto',
	'priority'    => 15,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'background',
	'settings'    => 'caeliora_colors_topbar_bg',
	'label'       => esc_html__( 'Top Bar/Menu Bar Background', 'caeliora' ),
	'description' => esc_html__( 'Applies to Header layout 3 and 4', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'priority' => 16,
	'default'     => array(
		'background-color'      => '#ffffff',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	),
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element' => '#top-bar',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_topbar_shadow',
	'label'       => esc_html__( 'Top Bar Box Shadow Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'priority' => 17,
	'default'     => 'rgba(0,0,0,.11)',
	'choices'     => array(
		'alpha' => true,
	),
	'output'    => array(
		array(
		  'element'       => '#top-bar',
		  'property'      => 'box-shadow',
		  'value_pattern' => '0 0 topbar_shadow_size $',
		  'pattern_replace' => array(
				'topbar_shadow_size'    => 'caeliora_colors_topbar_shadow_size',
			),
		),
	),
	'transport' => 'refresh'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_topbar_shadow_size',
	'label'       => esc_html__( 'Top Bar Box Shadow Size', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'description' => esc_html__( 'Default: 12px', 'caeliora' ),
	'default'     => 12,
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'output'      => array(
		array(
		  'element'       => '#top-bar',
		  'property'      => 'box-shadow',
		  'value_pattern' => '0 0 $px topbar_shadow_color',
		  'pattern_replace' => array(
				'topbar_shadow_color'    => 'caeliora_colors_topbar_shadow',
			),
		),
	),
	'transport' => 'auto',
	'priority'    => 18,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_header_border',
	'label'       => esc_html__( 'Header Layout 3 - Border Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'default'     => 'rgba(232,232,232, 1)',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 19,
	'output'    => array(
		array(
			'element'         => '#header.layout3',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_header4_border',
	'label'       => esc_html__( 'Header Layout 4 - Menu Border Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'default'     => '#e8e8e8',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 22,
	'output'    => array(
		array(
			'element'         => '#top-bar.layout4',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );


Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_header_menu_link',
    'label'       => esc_html__( 'Menu: Link Color', 'caeliora' ),
    'section'     => 'caeliora_section_colors_header',
    'priority'    => 25,
    'choices'     => array(
        'link'    => esc_html__( 'Color', 'caeliora' ),
        'hover'   => esc_html__( 'Hover', 'caeliora' ),
		'arrow'   => esc_html__( 'Dropdown Arrow', 'caeliora' ),
    ),
    'default'     => array(
        'link'    => '#000000',
        'hover'   => '#999999',
		'arrow'   => '#aaaaaa',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'link',
		  'element'       => '#nav-wrapper .menu li a, .sticky-wrapper.sticky #header.header-white #nav-wrapper .menu li a',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'hover',
		  'element'       => '#nav-wrapper .menu li a:hover, .sticky-wrapper.sticky #header.header-white #nav-wrapper .menu li a:hover',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'arrow',
		  'element'       => '#nav-wrapper .menu li.menu-item-has-children > a:after, .sticky-wrapper.sticky #header.header-white #nav-wrapper .menu li.menu-item-has-children > a:after',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_header_menu_link_text',
	'label'       => esc_html__( 'Menu: Typography', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'default'     => array(
		'font-size'      => '13px',
		'letter-spacing' => '1.5px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 30,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#nav-wrapper .menu li a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_header_menu_link_spacing',
	'label'       => esc_html__( 'Menu Link Spacing', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'description' => esc_html__( 'Default: 30px', 'caeliora' ),
	'default'     => 30,
	'priority'    => 35,
	'transport'   => 'auto',
	'choices'     => array(
		'min'  => 0,
		'max'  => 200,
		'step' => 1,
	),
	'output'      => array(
		array(
		  'element'       => '#nav-wrapper .menu li',
		  'property'      => 'margin',
		  'value_pattern' => '0 $px',
		),
		array(
		  'element'       => '#top-bar #nav-wrapper .menu > li',
		  'property'      => 'margin',
		  'value_pattern' => '0 $px 0 0',
		),
		array(
		  'element'       => '#top-bar.layout4 #nav-wrapper .menu > li',
		  'property'      => 'margin',
		  'value_pattern' => '0 $px',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_header_menu_dropdown',
    'label'       => esc_html__( 'Menu: Dropdown Box', 'caeliora' ),
    'section'     => 'caeliora_section_colors_header',
    'priority'    => 40,
    'choices'     => array(
			'background'    => esc_html__( 'Background Color', 'caeliora' ),
			'background_hover'    => esc_html__( 'Background Hover Color', 'caeliora' ),
			'border'  		=> esc_html__( 'Border Color', 'caeliora' ),
			'border_hover'  => esc_html__( 'Border Hover Color', 'caeliora' ),
			'text'  		=> esc_html__( 'Text Color', 'caeliora' ),
			'text_hover'  => esc_html__( 'Text Hover Color', 'caeliora' ),
		),
		'default'     => array(
			'background'    => '#ffffff',
			'background_hover'    => '#f5f5f5',
			'border'   => '#eeeeee',
			'border_hover'    => '#e2e2e2',
			'text'   => '#000000',
			'text_hover'    => '#444444',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'background',
		  'element'       => '#nav-wrapper .menu .sub-menu, #nav-wrapper .menu .children',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'background_hover',
		  'element'       => '#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'border',
		  'element'       => '#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a',
		  'property'      => 'border-color',
		),
		array(
		  'choice'		  => 'border_hover',
		  'element'       => '#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover',
		  'property'      => 'border-color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a, .sticky-wrapper.sticky #header.header-white #nav-wrapper ul.menu ul a',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'text_hover',
		  'element'       => '#nav-wrapper ul.menu ul a:hover, #nav-wrapper .menu ul ul a:hover',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_header_menu_dropdown_text',
	'label'       => esc_html__( 'Menu: Typography', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'default'     => array(
		'font-size'      => '11px',
		'letter-spacing' => '1.5px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 45,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#nav-wrapper ul.menu ul a, #nav-wrapper .menu ul ul a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_header_social',
    'label'       => esc_html__( 'Header Social Icons', 'caeliora' ),
    'section'     => 'caeliora_section_colors_header',
    'priority'    => 50,
    'choices'     => array(
        'color'    => esc_html__( 'Color', 'caeliora' ),
        'hover'   => esc_html__( 'Hover', 'caeliora' ),
    ),
    'default'     => array(
        'color'    => '#000000',
        'hover'   => '#999999',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'color',
		  'element'       => '.header-social a',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'color',
		  'element'       => '.header-social a svg',
		  'property'      => 'fill',
		),
		array(
		  'choice'		  => 'hover',
		  'element'       => '.header-social a:hover',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'hover',
		  'element'       => '.header-social a:hover svg',
		  'property'      => 'fill',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_header_search',
    'label'       => esc_html__( 'Header Search Icon', 'caeliora' ),
    'section'     => 'caeliora_section_colors_header',
    'priority'    => 55,
    'choices'     => array(
        'icon'    => esc_html__( 'Search Icon Color', 'caeliora' ),
        'icon_hover'   => esc_html__( 'Search Icon Hover Color', 'caeliora' ),
		'separator'   => esc_html__( 'Search Separator Line', 'caeliora' ),
    ),
    'default'     => array(
        'icon'    => '#000000',
        'icon_hover'   => '#999999',
		'separator'   => '#dddddd',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'icon',
		  'element'       => '.toggle-search-box',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'icon_hover',
		  'element'       => '.toggle-search-box:hover',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'separator',
		  'element'       => '.header-search-wrap',
		  'property'      => 'border-color',
		),
	),
	'transport' => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_header_icon_size',
	'label'       => esc_html__( 'Header Icons Size', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'description' => esc_html__( 'Default: 16px', 'caeliora' ),
	'default'     => 16,
	'choices'     => array(
		'min'  => 8,
		'max'  => 50,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.header-social a, .toggle-search-box, .cart-contents:before, .cart-contents',
			'property' => 'font-size',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
	'priority'    => 60,
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_header_search_overlay',
    'label'       => esc_html__( 'Full-screen Search Overlay', 'caeliora' ),
    'section'     => 'caeliora_section_colors_header',
    'priority'    => 65,
    'choices'     => array(
        'bg'    => esc_html__( 'Search Overlay Background', 'caeliora' ),
        'text'   => esc_html__( 'Search Text', 'caeliora' ),
		'close'   => esc_html__( 'Search Close Icon', 'caeliora' ),
    ),
    'default'     => array(
        'bg'    => 'rgba(255,255,255, 0.95)',
        'text'   => '#000000',
		'close'   => '#000000',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'bg',
		  'element'       => '#caeliora-search-overlay.open',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '#caeliora-search-overlay input[type="text"], #caeliora-search-overlay ::placeholder',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'close',
		  'element'       => '#caeliora-search-overlay .close',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_header_burger',
	'label'       => esc_html__( 'Burger Menu Icon Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'default'     => '#000000',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 70,
	'output'    => array(
		array(
			'element'         => '.menu-toggle',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_header_burger_label',
	'label'       => esc_html__( 'Burger Menu Label Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_header',
	'default'     => '#000000',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 75,
	'output'    => array(
		array(
			'element'         => '.menu-icon span',
			'property'        => 'color',
		),
	),
	'transport'	  => 'auto'
) );