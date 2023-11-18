<?php

// Add Section
Kirki::add_section( 'caeliora_section_posts', array(
    'title'    => esc_html__( 'Post Settings', 'caeliora' ),
    'priority' => 29,
) );
// Add Settings
$post_layouts = array(
    'layout1' => get_template_directory_uri() . '/admin/admin-img/style1.png',
);
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_post_layout',
    'label'    => esc_html__( 'Default Post Layout', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'layout1',
    'priority' => 2,
    'choices'  => $post_layouts,
) );
caeliora_pro_customizer_options( 'caeliora_section_posts', wp_unique_id(), 2 );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_post_layout_layout1_title',
    'label'           => esc_html__( 'Default Post (Style 1) Title Position', 'caeliora' ),
    'section'         => 'caeliora_section_posts',
    'default'         => 'above',
    'priority'        => 3,
    'choices'         => array(
    'above' => esc_html__( 'Above Featured Image', 'caeliora' ),
    'below' => esc_html__( 'Below Featured Image', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_post_layout',
    'value'    => 'layout1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_post_content_layout',
    'label'    => esc_html__( 'Default Post Content Layout', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'isSidebar',
    'priority' => 6,
    'choices'  => array(
    'isSidebar'            => get_template_directory_uri() . '/admin/admin-img/isSidebar.png',
    'isNarrow isFullwidth' => get_template_directory_uri() . '/admin/admin-img/isNarrow.png',
    'isFullwidth'          => get_template_directory_uri() . '/admin/admin-img/isFullwidth.png',
),
) );
/* Hide / Show */
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio',
    'settings' => 'caeliora_post_show_image',
    'label'    => esc_html__( 'Featured Image', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'display',
    'priority' => 75,
    'choices'  => array(
    'display'    => esc_html__( 'Display Featured Image', 'caeliora' ),
    'no_display' => esc_html__( 'Hide Featured Image', 'caeliora' ),
    'ho_display' => esc_html__( 'Hide Featured Image only on single post pages', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio',
    'settings' => 'caeliora_post_show_post_meta',
    'label'    => esc_html__( 'Post Meta', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'single_display',
    'priority' => 77,
    'choices'  => array(
    'display'        => esc_html__( 'Display Post Meta', 'caeliora' ),
    'single_display' => esc_html__( 'Display Post Meta only on single post pages', 'caeliora' ),
    'no_display'     => esc_html__( 'Hide Post Meta', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio',
    'settings' => 'caeliora_post_show_footer_social',
    'label'    => esc_html__( 'Post Footer Social Buttons', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'display',
    'priority' => 79,
    'choices'  => array(
    'display'        => esc_html__( 'Display Post Footer Share Buttons', 'caeliora' ),
    'single_display' => esc_html__( 'Display Post Footer Share Buttons only on single post pages', 'caeliora' ),
    'no_display'     => esc_html__( 'Hide Post Footer Share Buttons', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_category',
    'label'    => esc_html__( 'Display Post Category', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 80,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_title',
    'label'    => esc_html__( 'Display Post Title', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 84,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_date',
    'label'    => esc_html__( 'Display Post Date', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 88,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'toggle',
    'settings'    => 'caeliora_post_show_date_update',
    'label'       => esc_html__( 'Display Last Updated Date', 'caeliora' ),
    'description' => esc_html__( 'Use the Last Updated date of the post instead of the first Published date. Note that the Last Updated date is only used on the single post page.', 'caeliora' ),
    'section'     => 'caeliora_section_posts',
    'default'     => '0',
    'priority'    => 89,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_author',
    'label'    => esc_html__( 'Display Post Author Name', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 92,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_author_avatar',
    'label'    => esc_html__( 'Display Post Author Avatar', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 93,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_meta_share',
    'label'    => esc_html__( 'Display Post Meta Share Buttons', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 97,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_leavereply',
    'label'    => esc_html__( 'Display Comment Box', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 100,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_tags',
    'label'    => esc_html__( 'Display Tags', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'show',
    'priority' => 115,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_author_box',
    'label'    => esc_html__( 'Display Author Box', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 112,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_related',
    'label'    => esc_html__( 'Display Related Posts', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 116,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_related_date',
    'label'    => esc_html__( 'Display Related Posts Date', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 117,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_show_pagination',
    'label'    => esc_html__( 'Display Post Pagination', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 118,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_grid_show_cat',
    'label'    => esc_html__( 'Grid Post: Display Category', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 130,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_post_grid_show_date',
    'label'    => esc_html__( 'Grid Post: Display Date', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '1',
    'priority' => 132,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio',
    'settings' => 'caeliora_post_related_type',
    'label'    => esc_html__( 'Show Related Posts By:', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => 'cat',
    'priority' => 145,
    'choices'  => array(
    'cat' => esc_html__( 'Categories', 'caeliora' ),
    'tag' => esc_html__( 'Tags', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-buttonset',
    'settings' => 'caeliora_post_related_amount',
    'label'    => esc_html__( 'Number of Related Posts', 'caeliora' ),
    'section'  => 'caeliora_section_posts',
    'default'  => '3',
    'priority' => 148,
    'choices'  => array(
    '3'          => esc_html__( '3 Posts', 'caeliora' ),
    '6 isNarrow' => esc_html__( '6 Posts', 'caeliora' ),
),
) );