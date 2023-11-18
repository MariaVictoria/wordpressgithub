<?php

// Add Section
Kirki::add_section( 'caeliora_section_homepage', array(
    'title'       => esc_html__( 'Homepage Settings', 'caeliora' ),
    'priority'    => 27,
    'description' => esc_html__( 'Use these settings to modify your homepage if it is set to display your latest posts (Settings > Reading > Homepage displays > Latest Posts).', 'caeliora' ),
) );
/* Featured area */
Kirki::add_section( 'caeliora_section_homepage_feat', array(
    'title'    => esc_html__( 'Featured Area Settings', 'caeliora' ),
    'priority' => 5,
    'section'  => 'caeliora_section_homepage',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_home_feat_enable',
    'label'    => esc_html__( 'Enable Featured Area?', 'caeliora' ),
    'section'  => 'caeliora_section_homepage_feat',
    'default'  => '0',
    'priority' => 2,
) );
$featured_layouts = array(
    'classic'    => get_template_directory_uri() . '/admin/admin-img/classic-slider.png',
    'fullscreen' => get_template_directory_uri() . '/admin/admin-img/fullscreen.png',
);
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio-image',
    'settings'        => 'caeliora_home_feat_layout',
    'label'           => esc_html__( 'Featured Area Layout', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'classic',
    'priority'        => 8,
    'choices'         => $featured_layouts,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
caeliora_pro_customizer_options( 'caeliora_section_homepage_feat', wp_unique_id(), 8 );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_home_feat_slider_width',
    'label'           => esc_html__( 'Slider Width', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'full-width',
    'priority'        => 8,
    'choices'         => array(
    'full-width'    => esc_html__( 'Full-width', 'caeliora' ),
    'content-width' => esc_html__( 'Content width', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'classic', 'carousel', 'static-classic' ),
    'operator' => 'contains',
), array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_home_feat_classic_type',
    'label'           => esc_html__( 'Classic Slider Overlay Style', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'style1',
    'priority'        => 9,
    'choices'         => array(
    'style1' => esc_html__( 'Style 1', 'caeliora' ),
    'style2' => esc_html__( 'Style 2', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'classic' ),
    'operator' => 'contains',
), array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'slider',
    'settings'        => 'caeliora_home_feat_carousel_columns',
    'label'           => esc_html__( 'Carousel columns', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 3,
    'priority'        => 10,
    'choices'         => array(
    'min'  => '2',
    'max'  => '4',
    'step' => '1',
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'carousel' ),
    'operator' => 'contains',
), array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_carousel_spacing',
    'label'           => esc_html__( 'Add space between carousel items?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '0',
    'priority'        => 12,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'carousel', 'carousel-center' ),
    'operator' => 'contains',
), array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_fullscreen_overlay',
    'label'           => esc_html__( 'Extend Slider Over Header Bar', 'caeliora' ),
    'description'     => esc_html__( 'If you enable this setting make sure you have uploaded a white version of your logo via Header & Logo Settings. Note: Does not work with the Classic slider width "content-width".', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '0',
    'priority'        => 36,
    'active_callback' => array(
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array(
    'fullscreen',
    'split-fullscreen',
    'static-fullscreen',
    'static-classic',
    'classic'
),
    'operator' => 'contains',
),
    array(
    'setting'  => 'caeliora_header_layout',
    'operator' => '!==',
    'value'    => 'layout3',
),
    array(
    'setting'  => 'caeliora_header_layout',
    'operator' => '!==',
    'value'    => 'layout4',
),
    array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
)
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_home_feat_content_type',
    'label'           => esc_html__( 'Featured Area Content Type', 'caeliora' ),
    'description'     => esc_html__( 'Select how you want to get the Featured Area content', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'latest',
    'priority'        => 38,
    'choices'         => array(
    'latest'   => esc_html__( 'Latest Posts', 'caeliora' ),
    'category' => esc_html__( 'Posts by Categories', 'caeliora' ),
    'tag'      => esc_html__( 'Posts by Tags', 'caeliora' ),
    'specific' => esc_html__( 'Specific Posts/Pages', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
// Category
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'select',
    'settings'        => 'caeliora_home_feat_content_category',
    'label'           => esc_attr__( 'Select Category/Categories', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'option-1',
    'priority'        => 40,
    'multiple'        => 100,
    'choices'         => Kirki_Helper::get_terms( array(
    'taxonomy' => 'category',
) ),
    'active_callback' => array(
    array(
    'setting'  => 'caeliora_home_feat_content_type',
    'value'    => 'category',
    'operator' => '==',
),
    array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
),
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
),
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
)
),
) );
// Tags
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'select',
    'settings'        => 'caeliora_home_feat_content_tag',
    'label'           => esc_attr__( 'Select Tag', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'option-1',
    'priority'        => 41,
    'multiple'        => 100,
    'choices'         => Kirki_Helper::get_terms( array(
    'taxonomy' => 'post_tag',
) ),
    'active_callback' => array(
    array(
    'setting'  => 'caeliora_home_feat_content_type',
    'value'    => 'tag',
    'operator' => '==',
),
    array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
),
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
),
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
)
),
) );
// Specific posts
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_feat_content_posts',
    'label'           => esc_html__( 'Enter Post/Page IDs', 'caeliora' ),
    'description'     => esc_html__( 'Separate IDs with a comma.', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'priority'        => 43,
    'active_callback' => array(
    array(
    'setting'  => 'caeliora_home_feat_content_type',
    'value'    => 'specific',
    'operator' => '==',
),
    array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
),
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
),
    array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
)
),
) );
// Feat amount
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'slider',
    'settings'        => 'caeliora_home_feat_amount',
    'label'           => esc_html__( 'Number of Featured Items', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 3,
    'priority'        => 45,
    'choices'         => array(
    'min'  => '1',
    'max'  => '10',
    'step' => '1',
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_autoplay',
    'label'           => esc_html__( 'Enable Slider Autoplay?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '0',
    'priority'        => 46,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_feat_autoplay_speed',
    'label'           => esc_html__( 'Slider Autoplay Speed', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'description'     => esc_html__( 'Default: 4000ms (4sec)', 'caeliora' ),
    'default'         => 4000,
    'choices'         => array(
    'min'  => 1000,
    'max'  => 10000,
    'step' => 100,
),
    'priority'        => 47,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_autoplay',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_exclude',
    'label'           => esc_html__( 'Exclude Featured Posts from Post Feed?', 'caeliora' ),
    'description'     => esc_html__( 'If you enable this setting, the featured posts won\'t show up in the main post feed below', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '0',
    'priority'        => 50,
    'transport'       => 'refresh',
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'custom',
    'settings'        => 'caeliora_home_feat_exclude_note',
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '<span class="dashicons dashicons-info"></span> <strong>' . esc_html__( 'Note: Please publish, then manually refresh the page to see the change', 'caeliora' ) . '</strong>',
    'priority'        => 51,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_paginated',
    'label'           => esc_html__( 'Display Featured Area on paginated blog pages?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '0',
    'priority'        => 55,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'color',
    'settings'        => 'caeliora_home_feat_overlay',
    'label'           => esc_html__( 'Slider Transparent Overlay', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 'rgba(0,0,0,0.2)',
    'priority'        => 70,
    'choices'         => array(
    'alpha' => true,
),
    'output'          => array( array(
    'element'  => '.feat-shadow',
    'property' => 'background',
) ),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array(
    'classic',
    'fullscreen',
    'split-fullscreen',
    'static-classic',
    'static-fullscreen'
),
    'operator' => 'contains',
), array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
) ),
    'transport'       => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_show_cat',
    'label'           => esc_attr__( 'Display Category', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '1',
    'priority'        => 72,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_show_title',
    'label'           => esc_attr__( 'Display Title', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '1',
    'priority'        => 74,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_show_date',
    'label'           => esc_attr__( 'Display Date', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '1',
    'priority'        => 76,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_show_author_img',
    'label'           => esc_attr__( 'Display Author Avatar', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '1',
    'priority'        => 78,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_feat_show_author_name',
    'label'           => esc_attr__( 'Display Author Name', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => '1',
    'priority'        => 80,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-classic',
    'operator' => '!=',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => 'static-fullscreen',
    'operator' => '!=',
) ),
) );
/* Static content */
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'repeater',
    'label'           => esc_html__( 'Custom Slides', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'description'     => esc_html__( 'All fields are optional', 'caeliora' ),
    'priority'        => 100,
    'row_label'       => array(
    'type'  => 'field',
    'value' => esc_html__( 'Custom Slide', 'caeliora' ),
    'field' => 'slide_title',
),
    'button_label'    => esc_html__( 'Add New Slide', 'caeliora' ),
    'settings'        => 'caeliora_home_feat_static_slides',
    'fields'          => array(
    'slide_image'       => array(
    'type'    => 'image',
    'label'   => esc_html__( 'Slide: Image', 'caeliora' ),
    'default' => '',
),
    'slide_link'        => array(
    'type'    => 'text',
    'label'   => esc_html__( 'Slide: Link', 'caeliora' ),
    'default' => '',
),
    'slide_title'       => array(
    'type'    => 'textarea',
    'label'   => esc_html__( 'Slide: Title', 'caeliora' ),
    'default' => '',
),
    'slide_subtitle'    => array(
    'type'    => 'textarea',
    'label'   => esc_html__( 'Slide: Sub-Title', 'caeliora' ),
    'default' => '',
),
    'slide_content'     => array(
    'type'    => 'textarea',
    'label'   => esc_html__( 'Slide: Text', 'caeliora' ),
    'default' => '',
),
    'slide_button_text' => array(
    'type'    => 'text',
    'label'   => esc_html__( 'Slide: Button Text', 'caeliora' ),
    'default' => '',
),
    'slide_button_link' => array(
    'type'    => 'text',
    'label'   => esc_html__( 'Slide: Button Link', 'caeliora' ),
    'default' => '',
),
    'slide_button_tab'  => array(
    'type'    => 'checkbox',
    'label'   => esc_html__( 'Open Button Link in new tab?', 'caeliora' ),
    'default' => '',
),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'static-classic', 'static-fullscreen' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_feat_static_classic_width',
    'label'           => esc_html__( 'Static Classic Slider: Content overall max width', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'description'     => esc_html__( 'Default: 70%', 'caeliora' ),
    'default'         => 70,
    'priority'        => 101,
    'choices'         => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.feat-area.static-slider.classic-slider .post-header',
    'property' => 'max-width',
    'units'    => '%',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'static-classic' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_feat_static_classic_text_width',
    'label'           => esc_html__( 'Static Classic Slider: Content text max width', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'description'     => esc_html__( 'Default: 70%', 'caeliora' ),
    'default'         => 70,
    'priority'        => 102,
    'choices'         => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.feat-area.static-slider.classic-slider .static-text',
    'property' => 'max-width',
    'units'    => '%',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'static-classic' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_feat_static_fullscreen_width',
    'label'           => esc_html__( 'Static Fullscreen Slider: Content overall max width', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'description'     => esc_html__( 'Default: 70%', 'caeliora' ),
    'default'         => 70,
    'priority'        => 103,
    'choices'         => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.feat-area.static-slider.fullscreen .post-header',
    'property' => 'max-width',
    'units'    => '%',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'static-fullscreen' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_feat_static_fullscreen_text_width',
    'label'           => esc_html__( 'Static Fullscreen Slider: Content text max width', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'description'     => esc_html__( 'Default: 70%', 'caeliora' ),
    'default'         => 70,
    'priority'        => 104,
    'choices'         => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.feat-area.static-slider.fullscreen .static-text',
    'property' => 'max-width',
    'units'    => '%',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'static-fullscreen' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_feat_static_margin_top',
    'label'           => esc_html__( 'Static Slider w/ Extend Slider Over Header Bar: Margin top', 'caeliora' ),
    'description'     => esc_html__( 'Used to push your static slider content further down on desktop screens. Default:30px;', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_feat',
    'default'         => 30,
    'priority'        => 106,
    'choices'         => array(
    'min'  => 0,
    'max'  => 400,
    'step' => 1,
),
    'output'          => array( array(
    'element'     => '.feat-area.static-slider.feat-extend .post-header',
    'property'    => 'margin-top',
    'units'       => 'px',
    'media_query' => '@media (min-width: 1200px)',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_feat_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_feat_layout',
    'value'    => array( 'static-classic', 'static-fullscreen' ),
    'operator' => 'contains',
) ),
) );
/* Promo Boxes */
Kirki::add_section( 'caeliora_section_homepage_promo', array(
    'title'    => esc_html__( 'Promo Boxes Settings', 'caeliora' ),
    'priority' => 100,
    'section'  => 'caeliora_section_homepage',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_home_promo_enable',
    'label'    => esc_html__( 'Enable Promo Boxes?', 'caeliora' ),
    'section'  => 'caeliora_section_homepage_promo',
    'default'  => '0',
    'priority' => 1,
) );
$promo_box_layouts = array(
    'grid' => get_template_directory_uri() . '/admin/admin-img/promo-grid.png',
);
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio-image',
    'settings'        => 'caeliora_home_promo_layout',
    'label'           => esc_html__( 'Promo Box Layout', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'default'         => 'grid',
    'priority'        => 2,
    'choices'         => $promo_box_layouts,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
caeliora_pro_customizer_options( 'caeliora_section_homepage_promo', wp_unique_id(), 2 );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'slider',
    'settings'        => 'caeliora_home_promo_amount',
    'label'           => esc_html__( 'Number of Promo Boxes', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'default'         => 1,
    'priority'        => 3,
    'choices'         => array(
    'min'  => '1',
    'max'  => '4',
    'step' => '1',
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_layout',
    'value'    => 'grid',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_home_promo_style',
    'label'           => esc_html__( 'Promo Box Style', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'default'         => 'style1',
    'priority'        => 4,
    'choices'         => array(
    'style1' => esc_html__( 'Style 1', 'caeliora' ),
    'style2' => esc_html__( 'Style 2', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_home_promo_style2_position',
    'label'           => esc_html__( 'Promo Box Text Position', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'default'         => 'center',
    'priority'        => 5,
    'choices'         => array(
    'center' => esc_html__( 'Center', 'caeliora' ),
    'bottom' => esc_html__( 'Bottom', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_promo_style',
    'value'    => 'style2',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_promo_height',
    'label'           => esc_html__( 'Promo Box Height', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'description'     => esc_html__( 'Default 240px', 'caeliora' ),
    'default'         => 240,
    'choices'         => array(
    'min'  => 0,
    'max'  => 1200,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.promo-wrap.promo-grid',
    'property' => 'grid-auto-rows',
    'units'    => 'px',
), array(
    'element'       => '.promo-wrap.promo-mixed',
    'property'      => 'grid-auto-rows',
    'value_pattern' => '$px $px',
) ),
    'transport'       => 'auto',
    'priority'        => 6,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_promo_border',
    'label'           => esc_html__( 'Display Inner Border', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'default'         => '1',
    'priority'        => 7,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_home_promo_paginated',
    'label'           => esc_html__( 'Display Promo Boxes on paginated blog pages?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'default'         => '0',
    'priority'        => 8,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_home_promo_image1',
    'label'           => esc_html__( '1st Promo Box Image', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 10,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_title1',
    'label'           => esc_html__( '1st Promo Box Title', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 12,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_subtitle1',
    'label'           => esc_html__( '1st Promo Box Subtitle', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 14,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_style',
    'value'    => 'style1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'link',
    'settings'        => 'caeliora_home_promo_url1',
    'label'           => esc_html__( '1st Promo Box URL', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 16,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'checkbox',
    'settings'        => 'caeliora_home_promo_target1',
    'label'           => esc_html__( 'Open link in a new tab?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 18,
    'default'         => false,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_home_promo_image2',
    'label'           => esc_html__( '2nd Promo Box Image', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 20,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_title2',
    'label'           => esc_html__( '2nd Promo Box Title', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 22,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_subtitle2',
    'label'           => esc_html__( '2nd Promo Box Subtitle', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 24,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_style',
    'value'    => 'style1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'link',
    'settings'        => 'caeliora_home_promo_url2',
    'label'           => esc_html__( '2nd Promo Box URL', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 26,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'checkbox',
    'settings'        => 'caeliora_home_promo_target2',
    'label'           => esc_html__( 'Open link in a new tab?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 28,
    'default'         => false,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_home_promo_image3',
    'label'           => esc_html__( '3rd Promo Box Image', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 30,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_title3',
    'label'           => esc_html__( '3rd Promo Box Title', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 32,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_subtitle3',
    'label'           => esc_html__( '3rd Promo Box Subtitle', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 34,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_style',
    'value'    => 'style1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'link',
    'settings'        => 'caeliora_home_promo_url3',
    'label'           => esc_html__( '3rd Promo Box URL', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 36,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'checkbox',
    'settings'        => 'caeliora_home_promo_target3',
    'label'           => esc_html__( 'Open link in a new tab?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 38,
    'default'         => false,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_home_promo_image4',
    'label'           => esc_html__( '4th Promo Box Image', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 40,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_title4',
    'label'           => esc_html__( '4th Promo Box Title', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 42,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_promo_subtitle4',
    'label'           => esc_html__( '4th Promo Box Subtitle', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 44,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_style',
    'value'    => 'style1',
    'operator' => '==',
), array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'link',
    'settings'        => 'caeliora_home_promo_url4',
    'label'           => esc_html__( '4rd Promo Box URL', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 46,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'checkbox',
    'settings'        => 'caeliora_home_promo_target4',
    'label'           => esc_html__( 'Open link in a new tab?', 'caeliora' ),
    'section'         => 'caeliora_section_homepage_promo',
    'priority'        => 48,
    'default'         => false,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_promo_enable',
    'value'    => '1',
    'operator' => '==',
) ),
) );
/* General homepage settings */
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-buttonset',
    'settings' => 'caeliora_home_sidebar',
    'label'    => esc_html__( 'Homepage Content Layout', 'caeliora' ),
    'section'  => 'caeliora_section_homepage',
    'default'  => 'isSidebar',
    'priority' => 1,
    'choices'  => array(
    'isSidebar'            => esc_html__( 'Sidebar', 'caeliora' ),
    'isFullwidth isNarrow' => esc_html__( 'Full-width', 'caeliora' ),
),
) );
$homepage_layouts = array(
    'classic'      => get_template_directory_uri() . '/admin/admin-img/classic.png',
    'classic_grid' => get_template_directory_uri() . '/admin/admin-img/classic-grid.png',
    'grid'         => get_template_directory_uri() . '/admin/admin-img/grid.png',
);
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_home_layout',
    'label'    => esc_html__( 'Homepage Layout', 'caeliora' ),
    'section'  => 'caeliora_section_homepage',
    'default'  => 'classic',
    'priority' => 2,
    'choices'  => $homepage_layouts,
) );
caeliora_pro_customizer_options( 'caeliora_section_homepage', wp_unique_id(), 2 );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_home_layout_grid',
    'label'           => esc_html__( 'Select Grid Style', 'caeliora' ),
    'section'         => 'caeliora_section_homepage',
    'default'         => 'style3',
    'priority'        => 3,
    'choices'         => array(
    'style1' => esc_html__( 'Grid Style 1', 'caeliora' ),
    'style2' => esc_html__( 'Grid Style 2', 'caeliora' ),
    'style3' => esc_html__( 'Grid Style 3', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_layout',
    'value'    => array( 'grid', 'classic_grid' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'toggle',
    'settings'    => 'caeliora_home_post_number_toggle',
    'label'       => esc_html__( 'Set a different amount of posts on 1st page?', 'caeliora' ),
    'section'     => 'caeliora_section_homepage',
    'default'     => '0',
    'priority'    => 27,
    'description' => esc_html__( 'Helpful if using "1st Classic + Grid" Homepage Layout to avoid uneven grid rows on page 2, 3, etc. of the post feed/blog. Otherwise, global post count set via Settings > Reading. ).', 'caeliora' ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_home_post_number',
    'label'           => esc_html__( 'Number of Posts on 1st Page', 'caeliora' ),
    'section'         => 'caeliora_section_homepage',
    'default'         => 6,
    'choices'         => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'priority'        => 29,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_post_number_toggle',
    'value'    => '1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_home_widget_paginated',
    'label'    => esc_html__( 'Display "Widget Under Featured Area" on paginated blog pages?', 'caeliora' ),
    'section'  => 'caeliora_section_homepage',
    'default'  => '0',
    'priority' => 30,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_home_blog_heading',
    'label'    => esc_html__( 'Display Post Feed Heading?', 'caeliora' ),
    'section'  => 'caeliora_section_homepage',
    'default'  => '0',
    'priority' => 31,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_home_blog_heading_text',
    'label'           => esc_html__( 'Post Feed Heading Text', 'caeliora' ),
    'section'         => 'caeliora_section_homepage',
    'default'         => esc_html__( 'Latest Articles', 'caeliora' ),
    'priority'        => 33,
    'active_callback' => array( array(
    'setting'  => 'caeliora_home_blog_heading',
    'value'    => '1',
    'operator' => '==',
) ),
) );