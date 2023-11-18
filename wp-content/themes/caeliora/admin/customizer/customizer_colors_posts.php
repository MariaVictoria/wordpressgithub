<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_posts', array(
    'title'          => esc_html__( 'Single Posts/Pages', 'caeliora' ),
    'priority'       => 215,
	'panel'			 => 'caeliora_panel_colors'
) );
Kirki::add_field( 'caeliora_config', [
	'type'        => 'custom',
	'settings'    => 'caeliora_colors_panel_fix',
	'section'     => 'caeliora_section_colors_posts',
	'priority'    => 1,
] );

Kirki::add_section( 'caeliora_section_colors_post_header', array(
    'title'          => esc_html__( 'Post/Page Header', 'caeliora' ),
    'priority'       => 1,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'custom',
	'settings'    => 'caeliora_colors_post_title_heading',
	'label'       => esc_html__( 'Post Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => '<small style="margin-top:-5px;display:block;color:#888;">'. esc_html__( 'Select the post layout you want to change the title of', 'caeliora' ) .'</small>',
	'priority'    => 1,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_classic_title_tog',
	'label'       => esc_html__( 'Style 1', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '30px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 2,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#dt-main.isSidebar .classic-post .post-header h2 a, #dt-main.isSidebar .classic-post .post-header h1, .layout-video-style3 #dt-main.isSidebar .post-header h1',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_classic_title_fullwidth_tog',
	'label'       => esc_html__( 'Style 1 (Full-width)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '36px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 3,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#dt-main.isFullwidth .classic-post .post-header h2 a, #dt-main.isFullwidth .classic-post .post-header h1',
		),
		array(
			'element'  => '.editor-post-title__block .editor-post-title__input',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_split_header_title_tog',
	'label'       => esc_html__( 'Style 2', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '36px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 4,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.split-header .post-header .entry-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_full_overlay_title_tog',
	'label'       => esc_html__( 'Style 3', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '38px',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'    => 6,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.layout-fullwidth-image-overlay.post-style3 .post-header .entry-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_full_title_above_tog',
	'label'       => esc_html__( 'Style 4 (Title above image)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '38px',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 8,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.layout-fullwidth-image .post-header.title-above .entry-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_full_title_below_tog',
	'label'       => esc_html__( 'Style 4 (Title below image)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '30px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 9,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.layout-fullwidth-image .post-header.title-below .entry-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_style5_title_tog',
	'label'       => esc_html__( 'Style 5', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '38px',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.bg-color-header .post-header h1',
		),
	),
) );

/* Page titles */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'custom',
	'settings'    => 'caeliora_colors_page_title_heading',
	'label'       => esc_html__( 'Page Title', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => '<small style="margin-top:-5px;display:block;color:#888;">'. esc_html__( 'Select the page layout you want to change the title of', 'caeliora' ) .'</small>',
	'priority'    => 15,
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_page_classic_title_tog',
	'label'       => esc_html__( 'Style 1', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '30px',
		'line-height'    => '49px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 16,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#dt-main.isSidebar.page-style1 .page-header h1',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_page_classic_title_fullwidth_tog',
	'label'       => esc_html__( 'Style 1 (Full-width)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '38px',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 17,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#dt-main.isFullwidth.page-style1 .page-header h1',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_page_style2_title_tog',
	'label'       => esc_html__( 'Style 2', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '38px',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'    => 18,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.page-style2.layout-fullwidth-image-overlay .page-header .entry-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_page_style3_title_tog',
	'label'       => esc_html__( 'Style 3', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '38px',
		'line-height'    => '1.4',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 19,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.page-style3.layout-fullwidth-image .page-header .entry-title, .page-style3.layout-fullwidth-image #dt-main.isFullwidth .page-header h1',
		),
	),
) );

/* Post Category */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_cat',
	'label'       => esc_html__( 'Post Category', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-cats a',
		),
	),
) );

/* Post Date */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_date',
	'label'       => esc_html__( 'Post Date', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'color'          => '#999999',
		'text-transform' => 'uppercase',
	),
	'priority'    => 36,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.dt-date, .dt-date a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_date_border',
	'label'       => esc_html__( 'Post Date Lines', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => '#cccccc',
	'priority'    => 49,
	'output'    => array(
		array(
			'element'         => '.date-wrap:before, .date-wrap:after',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );

/* Style 2 background color */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_style2_bg',
	'label'       => esc_html__( 'Style 2: Background Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => '#ffffff',
	'priority'    => 50,
	'output'    => array(
		array(
			'element'         => '.split-header',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki:

/* Style 5 background color */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_style5_bg_top',
	'label'       => esc_html__( 'Style 5: Header BG Gradient (Top Color)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => '#f8f8f8',
	'priority'    => 52,
	'output'    => array(
		array(
		  'element'       => '.bg-color-header',
		  'property'      => 'background',
		  'value_pattern' => 'linear-gradient(to bottom, $ 0%, bottom_color 100%)',
		  'pattern_replace' => array(
				'bottom_color'    => 'caeliora_colors_post_style5_bg_bottom',
			),
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_style5_bg_bottom',
	'label'       => esc_html__( 'Style 5: Header BG Gradient (Bottom Color)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'default'     => '#e9e9e9',
	'priority'    => 55,
	'output'    => array(
		array(
		  'element'       => '.bg-color-header',
		  'property'      => 'background',
		  'value_pattern' => 'linear-gradient(to bottom, top_color 0%, $ 100%)',
		  'pattern_replace' => array(
				'top_color'    => 'caeliora_colors_post_style5_bg_top',
			),
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style1_margin_top',
	'label'       => esc_html__( 'Style 1: Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 15px', 'caeliora' ),
	'default'     => 15,
	'priority'    => 60,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.classic-post .post-header .entry-title, .layout-fullwidth-image .isSidebar .post-header.title-below .entry-title',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style1_margin_bottom',
	'label'       => esc_html__( 'Style 1: Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 12px', 'caeliora' ),
	'default'     => 12,
	'priority'    => 62,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.classic-post .post-header .entry-title, .layout-fullwidth-image .isSidebar .post-header.title-below .entry-title',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style2_margin_top',
	'label'       => esc_html__( 'Style 2: Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 22px', 'caeliora' ),
	'default'     => 22,
	'priority'    => 65,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.split-header .post-header .entry-title',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style2_margin_bottom',
	'label'       => esc_html__( 'Style 2: Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 17px', 'caeliora' ),
	'default'     => 17,
	'priority'    => 67,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.split-header .post-header .entry-title',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style3_margin_top',
	'label'       => esc_html__( 'Style 3: Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 22px', 'caeliora' ),
	'default'     => 22,
	'priority'    => 70,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.layout-fullwidth-image-overlay.post-style3 .post-header .entry-title',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style3_margin_bottom',
	'label'       => esc_html__( 'Style 3: Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 17px', 'caeliora' ),
	'default'     => 17,
	'priority'    => 73,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.layout-fullwidth-image-overlay.post-style3 .post-header .entry-title',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style4_margin_top',
	'label'       => esc_html__( 'Style 4: Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 22px', 'caeliora' ),
	'default'     => 22,
	'priority'    => 76,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.layout-fullwidth-image .post-header.title-below .entry-title, .layout-fullwidth-image .post-header.title-above .entry-title',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style4_margin_bottom',
	'label'       => esc_html__( 'Style 4: Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 17px', 'caeliora' ),
	'default'     => 17,
	'priority'    => 79,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.layout-fullwidth-image .post-header.title-below .entry-title, .layout-fullwidth-image .post-header.title-above .entry-title',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style5_margin_top',
	'label'       => esc_html__( 'Style 5: Title Margin Top', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 22px', 'caeliora' ),
	'default'     => 22,
	'priority'    => 82,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.bg-color-header .post-header h1',
			'property' => 'margin-top',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_colors_post_style5_margin_bottom',
	'label'       => esc_html__( 'Style 5: Title Margin Bottom', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_header',
	'description' => esc_html__( 'Default: 17px', 'caeliora' ),
	'default'     => 17,
	'priority'    => 85,
	'choices'     => array(
		'min'  => 0,
		'max'  => 100,
		'step' => 1,
	),
	'output'      => array(
		array(
			'element' => '.bg-color-header .post-header h1',
			'property' => 'margin-bottom',
			'units' => 'px'
		),
	),
	'transport' => 'auto',
) );


/* Post Meta */
Kirki::add_section( 'caeliora_section_colors_post_meta', array(
    'title'          => esc_html__( 'Post Meta', 'caeliora' ),
    'priority'       => 3,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_meta_border',
	'label'       => esc_html__( 'Post Meta Border', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_meta',
	'default'     => '#e9e9e9',
	'priority'    => 49,
	'output'    => array(
		array(
			'element'         => '.post-meta, .meta-time',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );

/* Meta Labels */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_meta_label',
	'label'       => esc_html__( 'Post Meta Labels', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_meta',
	'default'     => array(
		'font-size'      => '11px',
		'letter-spacing' => '0',
		'color'          => '#888888',
		'text-transform' => 'none',
	),
	'priority'    => 55,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.meta-author-wrap .written, .meta-time .read',
		),
	),
) );

/* Meta Labels */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_meta_heading',
	'label'       => esc_html__( 'Post Meta Headings', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_meta',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '1.5px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 65,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.author-name a, .meta-time .time',
		),
	),
) );

/* Comment bubble */
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_post_meta_comment',
    'label'       => esc_html__( 'Comment Bubble', 'caeliora' ),
    'section'     => 'caeliora_section_colors_post_meta',
    'priority'    => 76,
    'choices'     => array(
        'border'    => esc_html__( 'Border', 'caeliora' ),
		'text'    => esc_html__( 'Number', 'caeliora' ),
    ),
    'default'     => array(
        'border'    => '#cccccc',
        'text'   => '#666666',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'border',
		  'element'       => '.comment-bubble, .comment-bubble:before',
		  'property'      => 'border-color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '.comment-bubble',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

/* Post Content */
Kirki::add_section( 'caeliora_section_colors_post_content', array(
    'title'          => esc_html__( 'Post/Page Content', 'caeliora' ),
    'priority'       => 6,
	'section'	     => 'caeliora_section_colors_posts'
) );
/* Post Teaser */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_teaser',
	'label'       => esc_html__( 'Post Teaser Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '22px',
		'letter-spacing' => '0',
		'line-height'	 => '33px',
		'color'          => '#666666',
		'text-transform' => 'none',
	),
	'priority'    => 38,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry .post-teaser',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_teaser',
	'label'       => esc_html__( 'Post Teaser Text (Under title)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '18px',
		'letter-spacing' => '0',
		'line-height'	 => '28px',
		'color'          => '#777777',
		'text-transform' => 'none',
	),
	'priority'    => 38,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-header .post-teaser.title',
		),
	),
) );

/* Post Text */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_text',
	'label'       => esc_html__( 'Post Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '18px',
		'letter-spacing' => '0',
		'line-height'	 => '1.8',
		'text-transform' => 'none',
	),
	'priority'    => 49,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper p, .edit-post-visual-editor .editor-styles-wrapper .block-editor-block-list__layout li',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_text_color',
	'label'       => esc_html__( 'Body & Post Text Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => '#1f2025',
	'priority'    => 50,
	'output'    => array(
		array(
			'element'         => 'body',
			'property'        => 'color',
		),
		array(
			'element'  => '.edit-post-visual-editor.editor-styles-wrapper',
			'property' => 'color',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );

/* Post Links */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_link_color',
	'label'       => esc_html__( 'Post Link Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => '#000000',
	'priority'    => 60,
	'output'    => array(
		array(
			'element'         => '.post-entry p a, .wp-block-latest-posts a, .wp-block-categories a, .wp-block-archives a, .wp-block-latest-comments__comment-author, .wp-block-latest-comments__comment-link, .post-entry li a:not(.wp-block-button__link), .post-entry h1 a, .post-entry h2 a, .post-entry h3 a, .post-entry h4 a, .post-entry h5 a, .post-entry h6 a, .post-entry td a',
			'property'        => 'color',
		),
		array(
			'element'  => '.editor-styles-wrapper p a, .editor-styles-wrapper .wp-block-latest-posts a, .editor-styles-wrapper .wp-block-categories a, .editor-styles-wrapper .wp-block-archives a, .editor-styles-wrapper .wp-block-latest-comments__comment-author, .editor-styles-wrapper .wp-block-latest-comments__comment-link, .block-editor-block-list__layout li a:not(.wp-block-button__link), .editor-styles-wrapper h1 a, .editor-styles-wrapper h2 a, .editor-styles-wrapper h3 a, .editor-styles-wrapper h4 a, v h5 a, .editor-styles-wrapper h6 a, .post-entry td a',
			'property'        => 'color',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'	
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_link_border',
	'label'       => esc_html__( 'Post Link Border color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => 'var(--deo-primary-color)',
	'priority'    => 64,
	'output'    => array(
		array(
			'element'         => '.post-entry p a:not(.wp-block-button__link), .wp-block-latest-posts a, .wp-block-categories a, .wp-block-archives a, .wp-block-latest-comments__comment-author, .wp-block-latest-comments__comment-link, .post-entry li a:not(.wp-block-button__link), .post-entry h1 a, .post-entry h2 a, .post-entry h3 a, .post-entry h4 a, .post-entry h5 a, .post-entry h6 a, .post-entry td a',
			'property'      => 'box-shadow',
			'value_pattern' => 'inset 0 -1px 0 $',
		),
		array(
			'element'  => '.editor-styles-wrapper p a, .editor-styles-wrapper .wp-block-latest-posts a, .editor-styles-wrapper .wp-block-categories a, .editor-styles-wrapper .wp-block-archives a, .editor-styles-wrapper .wp-block-latest-comments__comment-author, .editor-styles-wrapper .wp-block-latest-comments__comment-link, .block-editor-block-list__layout li a:not(.wp-block-button__link), .editor-styles-wrapper h1 a, .editor-styles-wrapper h2 a, .editor-styles-wrapper h3 a, .editor-styles-wrapper h4 a, .editor-styles-wrapper h5 a, .editor-styles-wrapper h6 a, .post-entry td a',
			'property'      => 'box-shadow',
			'value_pattern' => 'inset 0 -1px 0 $',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_link_color_hover',
	'label'       => esc_html__( 'Post Link Hover Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => 'var(--deo-primary-color)',
	'priority'    => 68,
	'output'    => array(
		array(
			'element'         => '.post-entry p a:hover, .wp-block-latest-posts a:hover, .wp-block-categories a:hover, .wp-block-archives a:hover, .wp-block-latest-comments__comment-author:hover, .wp-block-latest-comments__comment-link:hover, .post-entry li a:hover:not(.wp-block-button__link), .post-entry h1 a:hover, .post-entry h2 a:hover, .post-entry h3 a:hover, .post-entry h4 a:hover, .post-entry h5 a:hover, .post-entry h6 a:hover',
			'property'        => 'color',
		),
		array(
			'element'  => '.editor-styles-wrapper p a:hover, .editor-styles-wrapper .wp-block-latest-posts a:hover, .editor-styles-wrapper .wp-block-categories a:hover, .editor-styles-wrapper .wp-block-archives a:hover, .editor-styles-wrapper .wp-block-latest-comments__comment-author:hover, .editor-styles-wrapper .wp-block-latest-comments__comment-link:hover, .block-editor-block-list__layout li a:not(.wp-block-button__link):hover, .editor-styles-wrapper h1 a:hover, .editor-styles-wrapper h2 a:hover, .editor-styles-wrapper h3 a:hover, .editor-styles-wrapper h4 a:hover, .editor-styles-wrapper h5 a:hover, .editor-styles-wrapper h6 a:hover',
			'property'        => 'color',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_link_border_hover',
	'label'       => esc_html__( 'Post Link Border Hover Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => 'var(--deo-primary-color)',
	'priority'    => 70,
	'output'    => array(
		array(
			'element'         => '.post-entry p a:hover, .wp-block-latest-posts a:hover, .wp-block-categories a:hover, .wp-block-archives a:hover, .wp-block-latest-comments__comment-author:hover, .wp-block-latest-comments__comment-link:hover, .post-entry li a:hover:not(.wp-block-button__link), .post-entry h1 a:hover, .post-entry h2 a:hover, .post-entry h3 a:hover, .post-entry h4 a:hover, .post-entry h5 a:hover, .post-entry h6 a:hover',
			'property'      => 'box-shadow',
			'value_pattern' => 'inset 0 -1px 0 $',
		),
		array(
			'element'  => '.editor-styles-wrapper p a:hover, .editor-styles-wrapper .wp-block-latest-posts a:hover, .editor-styles-wrapper .wp-block-categories a:hover, .editor-styles-wrapper .wp-block-archives a:hover, .editor-styles-wrapper .wp-block-latest-comments__comment-author:hover, .editor-styles-wrapper .wp-block-latest-comments__comment-link:hover, .block-editor-block-list__layout li a:not(.wp-block-button__link):hover, .editor-styles-wrapper h1 a:hover, .editor-styles-wrapper h2 a:hover, .editor-styles-wrapper h3 a:hover, .editor-styles-wrapper h4 a:hover, .editor-styles-wrapper h5 a:hover, .editor-styles-wrapper h6 a:hover',
			'property'      => 'box-shadow',
			'value_pattern' => 'inset 0 -1px 0 $',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );

/* Heading 1 */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_h1',
	'label'       => esc_html__( 'Heading H1', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '32px',
		'letter-spacing' => '0',
		'line-height'	 => '1.5',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 75,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h1',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper h1.wp-block-heading',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Heading 2 */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_h2',
	'label'       => esc_html__( 'Heading H2', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '30px',
		'letter-spacing' => '0',
		'line-height'	 => '1.5',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 85,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h2',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper h2.wp-block-heading',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Heading 3 */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_h3',
	'label'       => esc_html__( 'Heading H3', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '26px',
		'letter-spacing' => '0',
		'line-height'	 => '1.5',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 95,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h3',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper h3.wp-block-heading',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Heading 4 */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_h4',
	'label'       => esc_html__( 'Heading H4', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '22px',
		'letter-spacing' => '0',
		'line-height'	 => '1.5',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 102,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h4',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper h4.wp-block-heading',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Heading 5 */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_h5',
	'label'       => esc_html__( 'Heading H5', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '20px',
		'letter-spacing' => '0',
		'line-height'	 => '1.5',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 109,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h5',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper h5.wp-block-heading',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Heading 6 */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_h6',
	'label'       => esc_html__( 'Heading H6', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '18px',
		'letter-spacing' => '0',
		'line-height'	 => '1.5',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 115,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h6',
		),
		array(
			'element'  => '.edit-post-visual-editor .editor-styles-wrapper h6.wp-block-heading',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Read more */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_read_more',
	'label'       => esc_html__( '"Continue Reading" link', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '4px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 122,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.more-text',
		),
	),
) );


/* Blockquote */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_blockquote',
	'label'       => esc_html__( 'Blockquote (Regular Style)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '27px',
		'line-height'	 => '40px',
		'letter-spacing' => '0',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 132,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry .wp-block-quote p, #main.fullwidth .post-entry .wp-block-quote p, .post-entry .wp-block-quote:not(.is-style-large) p a',
		),
		array(
			'element'  => '.editor-styles-wrapper .wp-block-quote p, .editor-styles-wrapper .wp-block-quote:not(.is-style-large) p a',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_blockquote_icon',
	'label'       => esc_html__( 'Blockquote Icon (Regular Style)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => 'var(--deo-primary-color)',
	'priority'    => 139,
	'output'    => array(
		array(
			'element'         => '.post-entry blockquote.wp-block-quote p:first-child:before',
			'property'        => 'color',
		),
		array(
			'element'  => '.editor-styles-wrapper blockquote.wp-block-quote p:first-child:before',
			/*'property' => 'color',*/
			'property'      => 'color',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );

/* Blockquote Cite */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_blockquote_cite',
	'label'       => esc_html__( 'Blockquote Cite (Regular Style)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '1.5px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 142,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry blockquote.wp-block-quote cite',
		),
		array(
			'element'  => '.editor-styles-wrapper .wp-block-quote__citation',
			'context'  => array( 'editor' ),
		),
	),
) );

/* Blockquote Large Style */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_blockquote_large',
	'label'       => esc_html__( 'Blockquote (Large Style)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '27px',
		'line-height'	 => '40px',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'    => 150,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry blockquote.wp-block-quote.is-style-large  p, .post-entry blockquote.wp-block-quote.is-style-large p a',
		),
		array(
			'element'  => '.editor-styles-wrapper blockquote.wp-block-quote.is-style-large p, .editor-styles-wrapper blockquote.wp-block-quote.is-style-large p a',
			'context'  => array( 'editor' ),
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_blockquote_large_icon',
	'label'       => esc_html__( 'Blockquote Icon (Large Style)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => '#ff9885',
	'priority'    => 154,
	'output'    => array(
		array(
			'element'         => '.post-entry blockquote.wp-block-quote.is-style-large p:first-child:before',
			'property'        => 'color',
		),
		array(
			'element'  => '.editor-styles-wrapper blockquote.wp-block-quote.is-style-large p:first-child:before',
			'property'      => 'color',
			'context'  => array( 'editor' ),
		),
	),
	'transport'	  => 'auto'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_blockquote_large_cite',
	'label'       => esc_html__( 'Blockquote Cite (Large Style)', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_content',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '1.5px',
		'color'          => '#ffffff',
		'text-transform' => 'uppercase',
	),
	'priority'    => 156,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry blockquote.wp-block-quote.is-style-large cite',
		),
		array(
			'element'  => '.editor-styles-wrapper .wp-block-quote.is-style-large .wp-block-quote__citation',
			'context'  => array( 'editor' ),
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_colors_post_tags',
    'label'       => esc_html__( 'Tags', 'caeliora' ),
    'section'     => 'caeliora_section_colors_post_content',
    'priority'    => 160,
    'choices'     => array(
      'border'    => esc_html__( 'Border Color', 'caeliora' ),
      'bg'   => esc_html__( 'Background Color', 'caeliora' ),
			'text'   => esc_html__( 'Text Color', 'caeliora' ),
			'text_hover'   => esc_html__( 'Text Hover Color', 'caeliora' ),
    ),
    'default'     => array(
      'border'    => '#dddddd',
      'bg'   => '#ffffff',
			'text'   => '#888888',
			'text_hover'   => '#ffffff',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'bg',
		  'element'       => '.widget .tagcloud a, .post-tags a',
		  'property'      => 'background-color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '.widget .tagcloud a, .post-tags a',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'border',
		  'element'       => '.widget .tagcloud a, .post-tags a',
		  'property'      => 'border-color',
		),
		array(
		  'choice'		  => 'text_hover',
		  'element'       => '.widget .tagcloud a:hover, .post-tags a:hover',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );

/* About author */
Kirki::add_section( 'caeliora_section_colors_post_author', array(
    'title'          => esc_html__( 'Author Box', 'caeliora' ),
    'priority'       => 15,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_authorbox_bg',
	'label'       => esc_html__( 'Author Box Background', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_author',
	'default'     => '#ffffff',
	'priority'    => 10,
	'output'    => array(
		array(
			'element'         => '.about-author',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_authorbox_shadow',
	'label'       => esc_html__( 'Author Box Shadow', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_author',
	'priority' => 14,
	'default'     => 'rgba(0,0,0, 0.1)',
	'choices'     => array(
		'alpha' => true,
	),
	'output'    => array(
		array(
		  'element'       => '.about-author',
		  'property'      => 'box-shadow',
		  'value_pattern' => '0 0.3rem 2.9rem 0 $',
		),
	),
	'transport' => 'auto'
) );

/* About author text */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_authorbox_about',
	'label'       => esc_html__( '"About Author" text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_author',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '0',
		'color'          => '#999999',
		'text-transform' => 'none',
	),
	'priority'    => 18,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.about-heading',
		),
	),
) );

/* Author name */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_authorbox_name',
	'label'       => esc_html__( 'Author name', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_author',
	'default'     => array(
		'font-size'      => '22px',
		'letter-spacing' => '3px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 30,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.about-author h4 a',
		),
	),
) );

/* Author Bio Text */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_authorbox_bio',
	'label'       => esc_html__( 'Author Bio text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_author',
	'default'     => array(
		'font-size'      => '15px',
		'line-height'	 => '24px',
		'letter-spacing' => '0',
		'color'          => '#777777',
		'text-transform' => 'none',
	),
	'priority'    => 42,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.about-author p',
		),
	),
) );

/* Related Posts */
Kirki::add_section( 'caeliora_section_colors_post_related', array(
    'title'          => esc_html__( 'Related Posts', 'caeliora' ),
    'priority'       => 20,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_related_heading',
	'label'       => esc_html__( 'Related Posts Heading', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_related',
	'default'     => array(
		'font-size'      => '16px',
		'letter-spacing' => '2px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 5,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.related-wrap .block-heading',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_related_heading_line',
	'label'       => esc_html__( 'Related Posts Heading Line', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_related',
	'default'     => '#dddddd',
	'priority'    => 20,
	'output'    => array(
		array(
			'element'         => '.related-wrap .block-heading:before, .related-wrap .block-heading:after',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );

/* Related post titles */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_related_title',
	'label'       => esc_html__( 'Related Posts Titles', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_related',
	'default'     => array(
		'font-size'      => '18px',
		'line-height'	 => '28px',
		'letter-spacing' => '0',
		'color'          => '#ffffff',
		'text-transform' => 'none',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.related-item h3 a',
		),
	),
) );

/* Related post date */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_related_date',
	'label'       => esc_html__( 'Related Posts Date', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_related',
	'default'     => array(
		'font-size'      => '11px',
		'letter-spacing' => '2px',
		'color'          => '#e2e2e2',
		'text-transform' => 'uppercase',
	),
	'choices'	  => array(
		'alpha'		  => true,
	),
	'priority'    => 34,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.related-item .dt-date',
		),
	),
) );

/* Comments */
Kirki::add_section( 'caeliora_section_colors_post_comments', array(
    'title'          => esc_html__( 'Comments', 'caeliora' ),
    'priority'       => 25,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_comments_heading',
	'label'       => esc_html__( 'Comments Heading', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => array(
		'font-size'      => '16px',
		'letter-spacing' => '2px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 5,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-comments .block-heading',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_comments_heading_line',
	'label'       => esc_html__( 'Comments Heading Line', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => '#dddddd',
	'priority'    => 20,
	'output'    => array(
		array(
			'element'         => '.post-comments .block-heading:before, .post-comments .block-heading:after',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );

/* Comment name */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_comments_name',
	'label'       => esc_html__( 'Comment Author Name', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => array(
		'font-size'      => '14px',
		'letter-spacing' => '1px',
		'color'          => '#000000',
		'text-transform' => 'uppercase',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.thecomment h6.author, .thecomment h6.author a',
		),
	),
) );

/* Comment date */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_comments_date',
	'label'       => esc_html__( 'Comment Date', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => array(
		'font-size'      => '13px',
		'letter-spacing' => '0',
		'color'          => '#999999',
		'text-transform' => 'none',
	),
	'priority'    => 35,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.thecomment span.date',
		),
	),
) );

/* Comment text */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_comments_text',
	'label'       => esc_html__( 'Comment Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => array(
		'font-size'      => '15px',
		'line-height'	 => '25px',
		'letter-spacing' => '0.01em',
		'color'          => '#111111',
		'text-transform' => 'none',
	),
	'priority'    => 44,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.thecomment .comment-text p',
		),
	),
) );

/* Comment reply */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_comments_reply',
	'label'       => esc_html__( 'Comment Reply', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => array(
		'font-size'      => '12px',
		'letter-spacing' => '2px',
		'text-transform' => 'uppercase',
	),
	'priority'    => 53,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-comments span.reply a, .post-comments span.reply i',
		),
	),
) );

/* Comment form */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_comments_form_border',
	'label'       => esc_html__( 'Comments Form Fields Border', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => '#e3e3e3',
	'priority'    => 65,
	'output'    => array(
		array(
			'element'         => '#respond input[type="text"], #respond textarea',
			'property'        => 'border-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_comments_form_bg',
	'label'       => esc_html__( 'Comments Form Fields BG', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_comments',
	'default'     => '#ffffff',
	'priority'    => 70,
	'output'    => array(
		array(
			'element'         => '#respond input[type="text"], #respond textarea',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

/* Video format */
Kirki::add_section( 'caeliora_section_colors_post_videoformat', array(
    'title'          => esc_html__( 'Video Post Format', 'caeliora' ),
    'priority'       => 30,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_colors_post_videoformat_style1_bg',
	'label'       => esc_html__( 'Video Style 1: Background Color', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_videoformat',
	'default'     => '#050505',
	'priority'    => 5,
	'output'    => array(
		array(
			'element'         => '.video-bg-header',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );

/* Post Pagination */
Kirki::add_section( 'caeliora_section_colors_post_pagination', array(
    'title'          => esc_html__( 'Post Pagination', 'caeliora' ),
    'priority'       => 45,
	'section'	     => 'caeliora_section_colors_posts'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_pagination_nextprev',
	'label'       => esc_html__( 'Next/Previous Post Text', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_pagination',
	'default'     => array(
		'font-size'      => '11px',
		'letter-spacing' => '1.5px',
		'color'          => '#999999',
		'text-transform' => 'uppercase',
	),
	'priority'    => 5,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-pagination span',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_colors_post_pagination_link',
	'label'       => esc_html__( 'Post Pagination Post Link', 'caeliora' ),
	'section'     => 'caeliora_section_colors_post_pagination',
	'default'     => array(
		'font-size'      => '16px',
		'letter-spacing' => '0',
		'line-height'	 => '28px',
		'color'          => '#000000',
		'text-transform' => 'none',
	),
	'priority'    => 16,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-pagination a',
		),
	),
) );