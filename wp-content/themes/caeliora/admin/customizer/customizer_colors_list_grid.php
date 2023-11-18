<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_listgrid', array(
    'title'          => esc_html__( 'List and Grid', 'caeliora' ),
    'priority'       => 235,
	'panel'			 => 'caeliora_panel_colors'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'custom',
	'settings'    => 'caeliora_colors_listgrid_panel_fix',
	'section'     => 'caeliora_section_colors_listgrid',
	'priority'    => 1,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_cat',
	'label'       => esc_html__( 'List & Grid Category', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '1.5px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 100,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.grid-item .post-cats a, .list-item .post-cats a, .caeliora-block-grid-item .post-cats a',
		),
	),
) );

Kirki::add_section( 'caeliora_section_colors_listgrid_grid', array(
    'title'          => esc_html__( 'Grid Posts', 'caeliora' ),
    'priority'       => 1,
	'section'	     => 'caeliora_section_colors_listgrid'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'custom',
	'settings'    => 'caeliora_colors_listgrid_grid_title_heading',
	'label'       => esc_html__( 'Grid Post Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => '<small style="margin-top:-5px;display:block;color:#888;">'. esc_html__( 'Select the grid layout you want to change the title of', 'caeliora' ) .'</small>',
	'priority'    => 2,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_grid1_title_tog',
	'label'       => esc_html__( 'Grid Style 1', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => array(
		'font-size'      => '19px',
		'line-height'    => '31px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 3,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.grid-style1 .grid-item .post-header h2 a, .post-entry .caeliora-post-grid.grid-style1 h2 a, .post-entry .caeliora-post-grid.grid-default h2 a',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_grid2_title_tog',
	'label'       => esc_html__( 'Grid Style 2', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => array(
		'font-size'      => '19px',
		'line-height'    => '31px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 4,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.grid-style2 .grid-item .post-header h2 a, .post-entry .caeliora-post-grid.grid-style2 h2 a',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_grid3_title_tog',
	'label'       => esc_html__( 'Grid Style 3', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => array(
		'font-size'      => '19px',
		'line-height'    => '31px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 4,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.grid-style3 .grid-item .post-header h2 a, .post-entry .caeliora-post-grid.grid-style3 h2 a',
		),
	),
) );

/* Grid Post Excerpt */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_grid_excerpt',
	'label'       => esc_html__( 'Grid Post Excerpt', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => array(
		'font-size'      => '14px',
		'line-height'	 => '24px',
		'letter-spacing' => '0',
		'color'          => '#666666',
		'text-transform' => 'none',
	),
	'priority'    => 26,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.grid-item p, .post-entry .caeliora-block-grid-item p',
		),
	),
) );

/* Grid Post Date */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_grid_date',
	'label'       => esc_html__( 'Grid Post Date', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'color'          => '#999999',
		'text-transform' => 'uppercase',
	),
	'priority'    => 38,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.grid-item .dt-date',
		),
	),
) );

/* Grid block - View all link */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_listgrid_grid_view',
	'label'       => esc_html__( 'Post Grid Block: "View All" link', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'default'     => '#999999',
	'priority'    => 39,
	'output'    => array(
		array(
			'element'         => '.post-entry .view-all',
			'property'        => 'color',
		),
		array(
			'element'  => '.view-all, .view-all:hover',
			'property' => 'color',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_listgrid_grid_margin_top',
	'label'       => esc_html__( 'Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'description' => esc_html__( 'Default: 9px', 'caeliora' ),
	'default'     => 9,
	'priority'    => 40,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.grid-item .post-header h2',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_listgrid_grid_margin_bottom',
	'label'       => esc_html__( 'Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_grid',
	'description' => esc_html__( 'Default: 8px', 'caeliora' ),
	'default'     => 8,
	'priority'    => 42,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.grid-item .post-header h2',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );

/* List Posts */

Kirki::add_section( 'caeliora_section_colors_listgrid_list', array(
    'title'          => esc_html__( 'List Posts', 'caeliora' ),
    'priority'       => 1,
	'section'	     => 'caeliora_section_colors_listgrid'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'custom',
	'settings'    => 'caeliora_colors_listgrid_list_title_heading',
	'label'       => esc_html__( 'List Post Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'default'     => '<small style="margin-top:-5px;display:block;color:#888;">'. esc_html__( 'Select the list layout you want to change the title of', 'caeliora' ) .'</small>',
	'priority'    => 2,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_list1_title_tog',
	'label'       => esc_html__( 'List Style 1', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'default'     => array(
		'font-size'      => '22px',
		'line-height'    => '36px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 3,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.list-style1 .list-item .post-header h2 a',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_list2_title_tog',
	'label'       => esc_html__( 'List Style 2', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'default'     => array(
		'font-size'      => '24px',
		'line-height'    => '39px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 4,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.list-style2 .list-item .post-header h2 a',
		),
	),
) );

/* List Post Excerpt */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_list_excerpt',
	'label'       => esc_html__( 'List Post Excerpt', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'default'     => array(
		'font-size'      => '14px',
		'line-height'	 => '25px',
		'letter-spacing' => '0',
		'color'          => '#666666',
		'text-transform' => 'none',
	),
	'priority'    => 26,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.list-item .post-header p',
		),
	),
) );

/* List Post Date */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_listgrid_list_date',
	'label'       => esc_html__( 'List Post Date', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'color'          => '#999999',
		'text-transform' => 'uppercase',
	),
	'priority'    => 38,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.list-item .dt-date',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_listgrid_list_margin_top',
	'label'       => esc_html__( 'Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'description' => esc_html__( 'Default: 10px', 'caeliora' ),
	'default'     => 10,
	'priority'    => 40,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.list-item .post-header h2',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_listgrid_list_margin_bottom',
	'label'       => esc_html__( 'Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_listgrid_list',
	'description' => esc_html__( 'Default: 10px', 'caeliora' ),
	'default'     => 10,
	'priority'    => 42,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.list-item .post-header h2',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
