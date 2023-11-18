<?php
/**
 * Wild Themes Customizer
 *
 * @package Lead Corporate
 *
 * recent_news section
 */

$wp_customize->add_section(
	'lead_corporate_recent_news',
	array(
		'title' => esc_html__( 'Blog Section', 'lead-corporate' ),
		'panel' => 'lead_corporate_home_panel',
	)
);

// recent_news enable settings
$wp_customize->add_setting(
	'lead_corporate_recent_news',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
		'default' => 'disable'
	)
);

$wp_customize->add_control(
	'lead_corporate_recent_news',
	array(
		'section'		=> 'lead_corporate_recent_news',
		'label'			=> esc_html__( 'Content type:', 'lead-corporate' ),
		'description'			=> esc_html__( 'Choose where you want to render the content from.', 'lead-corporate' ),
		'type'			=> 'select',
		'choices'		=> array( 
				'disable' => esc_html__( '--Disable--', 'lead-corporate' ),
				'page' => esc_html__( 'Page', 'lead-corporate' ),
				'cat' => esc_html__( 'Category', 'lead-corporate' ),
		 	)
	)
);

$wp_customize->add_setting(
	'lead_corporate_recent_news_sub_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Recent News', 'lead-corporate'),
	)
);

$wp_customize->add_control(
	'lead_corporate_recent_news_sub_title',
	array(
		'section'		=> 'lead_corporate_recent_news',
		'label'			=> esc_html__( 'Sub Title:', 'lead-corporate' ),
		'active_callback' => 'lead_corporate_if_recent_news_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_recent_news_sub_title', 
	array(
        'selector'            => '#recent-news p.section-subtitle',
		'render_callback'     => 'lead_corporate_recent_news_partial_sub_title',
	) 
);

$wp_customize->add_setting(
	'lead_corporate_recent_news_title',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'transport'	=> 'postMessage',
		'default'	=>  __('Choose Your Perfect Plan', 'lead-corporate'),
	)
);

$wp_customize->add_control(
	'lead_corporate_recent_news_title',
	array(
		'section'		=> 'lead_corporate_recent_news',
		'label'			=> esc_html__( 'Title:', 'lead-corporate' ),		
		'active_callback' => 'lead_corporate_if_recent_news_enabled',
		
	)
);

$wp_customize->selective_refresh->add_partial( 
	'lead_corporate_recent_news_title', 
	array(
        'selector'            => '#recent-news h2.section-title',
		'render_callback'     => 'lead_corporate_recent_news_partial_title',
	) 
);

for ($i=1; $i <= 6; $i++) { 

	// recent_news page setting
	$wp_customize->add_setting(
		'lead_corporate_recent_news_page_'.$i,
		array(
			'sanitize_callback' => 'lead_corporate_sanitize_dropdown_pages',
			'default' => 0,
		)
	);

	$wp_customize->add_control(
		'lead_corporate_recent_news_page_'.$i,
		array(
			'section'		=> 'lead_corporate_recent_news',
			'label'			=> esc_html__( 'Page ', 'lead-corporate' ).$i,
			'type'			=> 'dropdown-pages',
			'active_callback' => 'lead_corporate_if_recent_news_page'
		)
	);
}

// recent_news category setting
$wp_customize->add_setting(
	'lead_corporate_recent_news_cat',
	array(
		'sanitize_callback' => 'lead_corporate_sanitize_select',
	)
);

$wp_customize->add_control(
	'lead_corporate_recent_news_cat',
	array(
		'section'		=> 'lead_corporate_recent_news',
		'label'			=> esc_html__( 'Category:', 'lead-corporate' ),
		'active_callback' => 'lead_corporate_if_recent_news_cat',
		'type'			=> 'select',
		'choices'		=> lead_corporate_get_post_cat_choices(),
	)
);
