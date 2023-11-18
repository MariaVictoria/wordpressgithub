<?php

// Add Section

Kirki::add_section( 'caeliora_section_fonts', array(
    'title'          => esc_html__( 'General Font Settings', 'caeliora' ),
    'priority'       => 47,
	'icon' 		  => 'dashicons-admin-appearance'
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_primary_tog',
	'label'       => esc_html__( 'Body Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'description'       => esc_html__( 'Body Font', 'caeliora' ),
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => 'regular',
	),
	'choices'  => array(
		'variant' => array(
			'300',
			'regular',
			'500',
			'600',
			'700'
		),
	),
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> 'body, input, select, textarea, p.comment-form-cookies-consent label, .copy-text p, .woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce form .form-row label, .woocommerce form .form-row .select2-container, .woocommerce-checkout #payment li, .woocommerce-checkout #payment p, .woocommerce-MyAccount-navigation ul li a, .wpcf7 label, .woocommerce #respond input#submit, .woocommerce a.button,.woocommerce button.button, .woocommerce input.button, .woocommerce-Reviews p, .caeliora-post-grid .block-heading, .block-view, .wp-block-button__link, .wc-block-grid__product-title, .woocommerce-Price-amount, .blocks-gallery-grid figcaption, .wp-block-image figcaption, .wp-block-embed figcaption, .blocks-gallery-caption, .view-all',
		),
		array(
			'element'  => '.block-editor-block-list__layout li .wc-block-grid__product-title, .wc-block-grid__product-price, .blocks-gallery-grid figcaption, .view-all',
			'context'  => array( 'editor' ),
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_paragraph_tog',
	'label'       => esc_html__( 'Paragraph Font', 'caeliora' ),
	'description' => esc_html__( 'Used for post/page text and excerpts. This setting will automatically include regular, italic, 700 (bold) and 700italic (bold italic)', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Lora',
		'variant'		 => 'regular',
	),
	'choices'  => array(
		'variant' => array(
			'regular',
			'italic',
			'700',
			'700italic',
		),
	),
	'priority'    => 15,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry',
		),
		array(
			'element'  => '.editor-styles-wrapper, .editor-styles-wrapper p, .block-editor-block-list__layout li',
			'context'  => array( 'editor' ),
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_navigation_tog',
	'label'       => esc_html__( 'Navigation Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '500',
	),
	'priority'    => 20,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '#nav-wrapper .menu li a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_labels_tog',
	'label'       => esc_html__( 'Labels Font', 'caeliora' ),
	'description' => esc_html__( 'Cover elements such as "Written by", "Read time", "Browsing category" and "About author".', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Lora',
		'variant'		 => 'italic',
	),
	'priority'    => 22,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.about-label, .archive-box span, .wp-block-verse, .meta-author-wrap .written, .meta-time .read, .about-heading',
		),
	),
) );



Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_post_title_tog',
	'label'       => esc_html__( 'Post/Page Title Font', 'caeliora' ),
	'description' => esc_html__( 'Used for all post titles including grid and list posts', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Prata',
		'variant'		 => 'regular',
	),
	'priority'    => 25,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.caeliora-block-grid-item h2 a, .related-item h3 a, .post-header .entry-title, .post-pagination a, #caeliora-search-overlay input[type="text"]',
		),
		array(
			'element'  => '.editor-post-title__block .editor-post-title__input',
			'context'  => array( 'editor' ),
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_post_cat_tog',
	'label'       => esc_html__( 'Post Category Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '500',
	),
	'priority'    => 30,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-cats a, .post-cats',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_post_date_tog',
	'label'       => esc_html__( 'Post Date Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '300',
	),
	'priority'    => 35,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.dt-date',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_post_readmore_tog',
	'label'       => esc_html__( '"Continue Reading" Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '600',
	),
	'priority'    => 40,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.more-text',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_post_heading_tog',
	'label'       => esc_html__( 'Post/Page H1-H6 Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '600',
	),
	'priority'    => 45,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry h1, .post-entry h2, .post-entry h3, .post-entry h4, .post-entry h5, .post-entry h6',
		),
		array(
			'element'  => '.editor-styles-wrapper .wp-block-heading h1, .editor-styles-wrapper .wp-block-heading h2, .editor-styles-wrapper .wp-block-heading h3, .editor-styles-wrapper .wp-block-heading h4, .editor-styles-wrapper .wp-block-heading h5, .editor-styles-wrapper .wp-block-heading h6',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_post_blockquote_tog',
	'label'       => esc_html__( 'Blockquote/Pullquote Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Lora',
		'variant'		 => 'italic',
	),
	'priority'    => 50,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.post-entry .wp-block-quote p, #main.fullwidth .post-entry .wp-block-quote p, .wp-block-quote.is-large p, .wp-block-quote.is-style-large p',
		),
		array(
			'element'  => '.editor-styles-wrapper .wp-block-quote p, .editor-styles-wrapper .wp-block-pullquote p',
			'context'  => array( 'editor' ),
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_widget_heading_tog',
	'label'       => esc_html__( 'Widget Headings Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '500',
	),
	'priority'    => 55,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.widget-title',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_widget_paragraphs_tog',
	'label'       => esc_html__( 'Widget Paragraphs Font', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => 'regular',
	),
	'priority'    => 60,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.widget p',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_widget_links_tog',
	'label'       => esc_html__( 'Widget Links Font', 'caeliora' ),
	'description' => esc_html__( 'Widget links used in lists and post widget titles.', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => 'regular',
	),
	'priority'    => 65,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.widget a',
		),
	),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_promo1_tog',
	'label'       => esc_html__( 'Promo Box (Style1)', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Prata',
		'variant'		 => 'regular',
	),
	'priority'    => 70,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-item h5, .post-entry .promo-style1 .promo-item h5',
		),
		array(
			'element'  => '.editor-styles-wrapper .promo-style1 .promo-item h5',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_promo1_subtitle_tog',
	'label'       => esc_html__( 'Promo Box Subtitle (Style1)', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Lora',
		'variant'		 => 'italic',
	),
	'priority'    => 71,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-item span, .post-entry .promo-style1 .promo-item span',
		),
		array(
			'element'  => '.editor-styles-wrapper .promo-style1 .promo-item span',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_promo2_tog',
	'label'       => esc_html__( 'Promo Box (Style2)', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => 'regular',
	),
	'priority'    => 75,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-style2 .promo-item h5',
		),
		array(
			'element'  => '.editor-styles-wrapper .promo-style2 .promo-item h5',
			'context'  => array( 'editor' ),
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_promo2_bottom_tog',
	'label'       => esc_html__( 'Promo Box (Style2 - Bottom Position)', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => '600',
	),
	'priority'    => 76,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.promo-style2.promo-position-bottom .promo-item h5',
		),
	),
) );

/* Static Featured Area Slider */
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_featured_static_title_tog',
	'label'       => esc_html__( 'Static Slider: Title', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Prata',
		'variant'		 => 'regular',
	),
	'priority'    => 80,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.static-title',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_featured_static_subitle_tog',
	'label'       => esc_html__( 'Static Slider: Sub-title', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Lora',
		'variant'		 => 'italic',
	),
	'priority'    => 84,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.static-subtitle',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_featured_static_text_tog',
	'label'       => esc_html__( 'Static Slider: Text', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Lora',
		'variant'		 => 'regular',
	),
	'priority'    => 86,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.static-text',
		),
	),
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'typography',
	'settings'    => 'caeliora_fonts_featured_static_button_tog',
	'label'       => esc_html__( 'Static Slider: Button', 'caeliora' ),
	'section'     => 'caeliora_section_fonts',
	'default'     => array(
		'font-family' 	 => 'Poppins',
		'variant'		 => 'regular',
	),
	'priority'    => 90,
	'transport'   => 'auto',
	'output'      => array(
		array(
			'element'		=> '.static-button',
		),
	),
) );