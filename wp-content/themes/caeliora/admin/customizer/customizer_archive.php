<?php

// Add Section
Kirki::add_section( 'caeliora_section_archive', array(
    'title'       => esc_html__( 'Category/Archive Settings', 'caeliora' ),
    'priority'    => 33,
    'description' => esc_html__( 'Use these settings to modify the layout of your category, tag & author pages', 'caeliora' ),
) );
// Add Settings
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-buttonset',
    'settings' => 'caeliora_archive_sidebar',
    'label'    => esc_html__( 'Category/Archive Content Layout', 'caeliora' ),
    'section'  => 'caeliora_section_archive',
    'default'  => 'isSidebar',
    'priority' => 2,
    'choices'  => array(
    'isSidebar'   => esc_html__( 'Sidebar', 'caeliora' ),
    'isFullwidth' => esc_html__( 'Full-width', 'caeliora' ),
),
) );
$archive_layouts = array(
    'classic' => get_template_directory_uri() . '/admin/admin-img/classic.png',
    'list'    => get_template_directory_uri() . '/admin/admin-img/list.png',
);
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_archive_layout',
    'label'    => esc_html__( 'Category/Archive Layout', 'caeliora' ),
    'section'  => 'caeliora_section_archive',
    'default'  => 'classic',
    'priority' => 4,
    'choices'  => $archive_layouts,
) );
caeliora_pro_customizer_options( 'caeliora_section_archive', wp_unique_id(), 4 );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_archive_layout_grid',
    'label'           => esc_html__( 'Select Grid Style', 'caeliora' ),
    'section'         => 'caeliora_section_archive',
    'default'         => 'style3',
    'priority'        => 8,
    'choices'         => array(
    'style1' => esc_html__( 'Grid Style 1', 'caeliora' ),
    'style2' => esc_html__( 'Grid Style 2', 'caeliora' ),
    'style3' => esc_html__( 'Grid Style 3', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_archive_layout',
    'value'    => array( 'grid', 'classic_grid' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_archive_layout_list',
    'label'           => esc_html__( 'Select List Style', 'caeliora' ),
    'section'         => 'caeliora_section_archive',
    'default'         => 'style1',
    'priority'        => 10,
    'choices'         => array(
    'style1' => esc_html__( 'List Style 1', 'caeliora' ),
    'style2' => esc_html__( 'List Style 2', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_archive_layout',
    'value'    => array( 'list', 'classic_list' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_archive_layout_list_alternate',
    'label'           => esc_html__( 'Alternate List Posts?', 'caeliora' ),
    'section'         => 'caeliora_section_archive',
    'default'         => '0',
    'priority'        => 12,
    'active_callback' => array( array(
    'setting'  => 'caeliora_archive_layout',
    'value'    => array( 'list', 'classic_list' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_archivebox_height',
    'label'       => esc_html__( 'Default Category Header Height', 'caeliora' ),
    'section'     => 'caeliora_section_archive',
    'description' => esc_html__( 'Default: 160px', 'caeliora' ),
    'default'     => 160,
    'choices'     => array(
    'min'  => 40,
    'max'  => 2000,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.archive-box:not(.author-page)',
    'property' => 'height',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
    'priority'    => 25,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-buttonset',
    'settings' => 'caeliora_archivebox_extend',
    'label'    => esc_html__( 'Extend Category Header Over Header Bar?', 'caeliora' ),
    'section'  => 'caeliora_section_archive',
    'default'  => 'no',
    'priority' => 26,
    'choices'  => array(
    'no'  => esc_html__( 'No', 'caeliora' ),
    'yes' => esc_html__( 'Yes', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_archivebox_display_browsing',
    'label'    => esc_html__( 'Display Archive Header "Browsing" Text', 'caeliora' ),
    'section'  => 'caeliora_section_archive',
    'default'  => '1',
    'priority' => 30,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_archivebox_display_title',
    'label'    => esc_html__( 'Display Archive Header Title', 'caeliora' ),
    'section'  => 'caeliora_section_archive',
    'default'  => '1',
    'priority' => 32,
) );
/* Search settings */
Kirki::add_section( 'caeliora_section_archive_search', array(
    'title'    => esc_html__( 'Search Settings', 'caeliora' ),
    'priority' => 5,
    'section'  => 'caeliora_section_archive',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-buttonset',
    'settings' => 'caeliora_search_sidebar',
    'label'    => esc_html__( 'Search Content Layout', 'caeliora' ),
    'section'  => 'caeliora_section_archive_search',
    'default'  => 'isSidebar',
    'priority' => 3,
    'choices'  => array(
    'isSidebar'   => esc_html__( 'Sidebar', 'caeliora' ),
    'isFullwidth' => esc_html__( 'Full-width', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_search_layout',
    'label'    => esc_html__( 'Search Layout', 'caeliora' ),
    'section'  => 'caeliora_section_archive_search',
    'default'  => 'classic',
    'priority' => 4,
    'choices'  => array(
    'classic'      => get_template_directory_uri() . '/admin/admin-img/classic.png',
    'classic_grid' => get_template_directory_uri() . '/admin/admin-img/classic-grid.png',
    'grid'         => get_template_directory_uri() . '/admin/admin-img/grid.png',
    'classic_list' => get_template_directory_uri() . '/admin/admin-img/classic-list.png',
    'list'         => get_template_directory_uri() . '/admin/admin-img/list.png',
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_search_layout_grid',
    'label'           => esc_html__( 'Select Grid Style', 'caeliora' ),
    'section'         => 'caeliora_section_archive_search',
    'default'         => 'style3',
    'priority'        => 8,
    'choices'         => array(
    'style1' => esc_html__( 'Grid Style 1', 'caeliora' ),
    'style2' => esc_html__( 'Grid Style 2', 'caeliora' ),
    'style3' => esc_html__( 'Grid Style 3', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_search_layout',
    'value'    => array( 'grid', 'classic_grid' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio',
    'settings'        => 'caeliora_search_layout_list',
    'label'           => esc_html__( 'Select List Style', 'caeliora' ),
    'section'         => 'caeliora_section_archive_search',
    'default'         => 'style1',
    'priority'        => 10,
    'choices'         => array(
    'style1' => esc_html__( 'List Style 1', 'caeliora' ),
    'style2' => esc_html__( 'List Style 2', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_search_layout',
    'value'    => array( 'list', 'classic_list' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'toggle',
    'settings'        => 'caeliora_search_layout_list_alternate',
    'label'           => esc_html__( 'Alternate List Posts?', 'caeliora' ),
    'section'         => 'caeliora_section_archive_search',
    'default'         => '0',
    'priority'        => 12,
    'active_callback' => array( array(
    'setting'  => 'caeliora_search_layout',
    'value'    => array( 'list', 'classic_list' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_searchbox_display_results',
    'label'    => esc_html__( 'Display Search Header "Search results" Text', 'caeliora' ),
    'section'  => 'caeliora_section_archive_search',
    'default'  => '1',
    'priority' => 30,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_searchbox_display_title',
    'label'    => esc_html__( 'Display Search Header Title', 'caeliora' ),
    'section'  => 'caeliora_section_archive_search',
    'default'  => '1',
    'priority' => 32,
) );