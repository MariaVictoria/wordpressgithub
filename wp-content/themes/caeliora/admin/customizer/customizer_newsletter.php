<?php

// Add Section
Kirki::add_section( 'caeliora_section_newsletter', array(
    'title'          => esc_html__( 'Mailchimp Newsletter Settings', 'caeliora' ),
    'priority'       => 49,
) );

// Add Settings
Kirki::add_field( 'caeliora_config', array(
  'settings' => 'caeliora_newsletter_descrip',
  'section'  => 'caeliora_section_newsletter',
  'type'     => 'custom',
  'priority'    => 1,
  'default'  => wp_kses( __( 'Please ensure you\'ve installed/activated the "MC4WP: MailChimp for WordPress" plugin. Check out the <a target="_blank" href="https://caeliora.com/documentation/#widgets_mailchimp">documentation</a> for configuration instructions.', 'caeliora' ), array(
    'a' => array(
      'target' => array(),
      'href' => array(),
    ),
  ) ),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'image',
	'settings'    => 'caeliora_newsletter_image',
	'label'       => esc_html__( 'Newsletter Widget Image', 'caeliora' ),
	'section'     => 'caeliora_section_newsletter',
	'priority'    => 2,
) );
Kirki::add_field( 'caeliora_config', array(
	'type'        => 'number',
	'settings'    => 'caeliora_newsletter_image_height',
	'label'       => esc_html__( 'Newsletter Widget Image Height', 'caeliora' ),
	'section'     => 'caeliora_section_newsletter',
	'default'     => 150,
	'choices'     => array(
		'min'  => 1,
		'max'  => 1000,
		'step' => 1,
	),
	'priority'    => 3,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_newsletter_bg_color',
	'label'       => esc_html__( 'Sidebar: Newsletter Widget BG', 'caeliora' ),
	'section'     => 'caeliora_section_newsletter',
	'default'     => '#ffffff',
	'priority'    => 4,
	'output'    => array(
		array(
			'element'         => '#dt-sidebar .widget.widget_mc4wp_form_widget',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_newsletter_heading_color',
    'label'       => esc_html__( 'Sidebar: Newsletter Widget Text Color', 'caeliora' ),
    'section'     => 'caeliora_section_newsletter',
    'priority'    => 6,
    'choices'     => array(
        'title'    => esc_html__( 'Newsletter Title Color', 'caeliora' ),
        'text'   => esc_html__( 'Newsletter Text Color', 'caeliora' ),
    ),
    'default'     => array(
        'title'    => '#000000',
        'text'   => '#383838',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'title',
		  'element'       => '#dt-sidebar .news-content h4',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '#dt-sidebar .news-content p',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );


Kirki::add_field( 'caeliora_config', array(
	'type'        => 'color',
	'settings'    => 'caeliora_slider_newsletter_bg_color',
	'label'       => esc_html__( 'Under Featured Area: Newsletter Widget BG', 'caeliora' ),
	'section'     => 'caeliora_section_newsletter',
	'default'     => '#f4f4f4',
	'priority'    => 10,
	'output'    => array(
		array(
			'element'         => '.widget-slider .caeliora-newsletter-wrap, .post-entry .caeliora-newsletter-wrap',
			'property'        => 'background-color',
		),
	),
	'transport'	  => 'auto'
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'multicolor',
    'settings'    => 'caeliora_slider_newsletter_heading_color',
    'label'       => esc_html__( 'Under Featured Area: Newsletter Widget Text Color', 'caeliora' ),
    'section'     => 'caeliora_section_newsletter',
    'priority'    => 12,
    'choices'     => array(
        'title'    => esc_html__( 'Newsletter Title Color', 'caeliora' ),
        'text'   => esc_html__( 'Newsletter Text Color', 'caeliora' ),
    ),
    'default'     => array(
        'title'    => '#000000',
        'text'   => '#383838',
    ),
	'output'    => array(
		array(
		  'choice'		  => 'title',
		  'element'       => '.widget-slider .news-content h4, .post-entry .news-content h4',
		  'property'      => 'color',
		),
		array(
		  'choice'		  => 'text',
		  'element'       => '.widget-slider .news-content p, .post-entry .news-content p',
		  'property'      => 'color',
		),
	),
	'transport' => 'auto'
) );