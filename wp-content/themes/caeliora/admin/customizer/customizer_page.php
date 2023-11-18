<?php

// Add Section
Kirki::add_section( 'caeliora_section_page', array(
    'title'    => esc_html__( 'Page Settings', 'caeliora' ),
    'priority' => 31,
) );
$page_layouts = array(
    'layout1' => get_template_directory_uri() . '/admin/admin-img/style1.png',
);
// Page Layouts
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_page_layout',
    'label'    => esc_html__( 'Default Page Layout', 'caeliora' ),
    'section'  => 'caeliora_section_page',
    'default'  => 'layout1',
    'priority' => 3,
    'choices'  => $page_layouts,
) );
caeliora_pro_customizer_options( 'caeliora_section_page', wp_unique_id(), 3 );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio-image',
    'settings' => 'caeliora_page_content_layout',
    'label'    => esc_html__( 'Default Page Content Layout', 'caeliora' ),
    'section'  => 'caeliora_section_page',
    'default'  => 'isSidebar',
    'priority' => 5,
    'choices'  => array(
    'isSidebar'            => get_template_directory_uri() . '/admin/admin-img/isSidebar.png',
    'isNarrow isFullwidth' => get_template_directory_uri() . '/admin/admin-img/isNarrow.png',
    'isFullwidth'          => get_template_directory_uri() . '/admin/admin-img/isFullwidth.png',
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_page_show_title',
    'label'    => esc_html__( 'Display Page Title', 'caeliora' ),
    'section'  => 'caeliora_section_page',
    'default'  => '1',
    'priority' => 80,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_page_show_social',
    'label'    => esc_html__( 'Display Page Share Buttons', 'caeliora' ),
    'section'  => 'caeliora_section_page',
    'default'  => '1',
    'priority' => 82,
) );