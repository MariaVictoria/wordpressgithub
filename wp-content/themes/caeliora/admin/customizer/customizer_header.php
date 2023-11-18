<?php

// Add Section
Kirki::add_section( 'caeliora_section_header', array(
    'title'    => esc_html__( 'Header & Logo Settings', 'caeliora' ),
    'priority' => 25,
) );
// Add Settings
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio',
    'settings' => 'caeliora_header_logo_type',
    'label'    => esc_html__( 'Select Logo Type', 'caeliora' ),
    'section'  => 'caeliora_section_header',
    'default'  => 'logo_image',
    'priority' => 3,
    'choices'  => array(
    'logo_image' => esc_html__( 'Image Logo', 'caeliora' ),
    'logo_text'  => esc_html__( 'Text Logo', 'caeliora' ),
),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_header_logo_image',
    'label'           => esc_html__( 'Upload Image Logo', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'default'         => get_template_directory_uri() . '/img/logo.png',
    'priority'        => 5,
    'choices'         => array(
    'save_as' => 'array',
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_logo_type',
    'value'    => 'logo_image',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_header_logo_image_white',
    'label'           => esc_html__( 'Upload Image Logo (White version)', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'default'         => get_template_directory_uri() . '/img/logo-white.png',
    'description'     => esc_html__( 'Upload a white version of your logo so it stands out on full-screen Featured Areas w/ the "Extended Overlay" option enabled.', 'caeliora' ),
    'priority'        => 6,
    'choices'         => array(
    'save_as' => 'array',
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_logo_type',
    'value'    => 'logo_image',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'typography',
    'settings'        => 'caeliora_header_logo_text',
    'label'           => esc_html__( 'Set Text Logo', 'caeliora' ),
    'description'     => esc_html__( 'Change the text of your text logo via Customizer > Site Identity > Site Title', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'default'         => array(
    'font-family'    => 'Poppins',
    'variant'        => '600',
    'font-size'      => '34px',
    'letter-spacing' => '0px',
    'color'          => '#000000',
    'text-transform' => 'uppercase',
),
    'priority'        => 8,
    'output'          => array( array(
    'element' => '.text-logo, .sticky-wrapper.sticky #header.header-white .text-logo',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_logo_type',
    'value'    => 'logo_text',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'typography',
    'settings'        => 'caeliora_header_logo_text_mobile',
    'label'           => esc_html__( 'Mobile Text Logo Size', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'default'         => array(
    'font-size'      => '24px',
    'letter-spacing' => '0px',
),
    'priority'        => 9,
    'output'          => array( array(
    'element'     => '.text-logo, .sticky-wrapper.sticky #header.header-white .text-logo',
    'media_query' => '@media (max-width:768px)',
) ),
    'transport'       => 'auto',
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_logo_type',
    'value'    => 'logo_text',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'text',
    'settings'        => 'caeliora_header_logo_text_name',
    'label'           => esc_html__( 'Logo Text', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'priority'        => 10,
    'default'         => esc_html__( 'Caeliora', 'caeliora' ),
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_logo_type',
    'value'    => 'logo_text',
    'operator' => '==',
) ),
) );
$header_layouts = array(
    'layout1' => esc_html__( 'Header Layout 1', 'caeliora' ),
);
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'radio',
    'settings' => 'caeliora_header_layout',
    'label'    => esc_html__( 'Select Header Layout', 'caeliora' ),
    'section'  => 'caeliora_section_header',
    'default'  => 'layout1',
    'priority' => 12,
    'choices'  => $header_layouts,
) );
caeliora_pro_customizer_options( 'caeliora_section_header', wp_unique_id(), 12 );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout1_height',
    'label'           => esc_html__( 'Header Layout 1 Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 106px', 'caeliora' ),
    'default'         => 106,
    'choices'         => array(
    'min'  => 30,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array(
    array(
    'element'  => '#header.layout1',
    'property' => 'height',
    'units'    => 'px',
),
    array(
    'element'       => '.feat-area.fullscreen .feat-item',
    'property'      => 'height',
    'value_pattern' => 'calc(100vh - $px)',
),
    array(
    'element'       => '.feat-area.split-slider .feat-split',
    'property'      => 'height',
    'value_pattern' => 'calc(100vh - $px)',
),
    array(
    'element'       => '.split-header',
    'property'      => 'height',
    'value_pattern' => 'calc(100vh - $px)',
),
    array(
    'element'  => '#header.layout1 #nav-wrapper .menu > li > a',
    'property' => 'line-height',
    'units'    => 'px',
)
),
    'priority'        => 16,
    'transport'       => 'refresh',
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout1_height_sticky',
    'label'           => esc_html__( 'Header Layout 1 Scrolling Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 70px', 'caeliora' ),
    'default'         => 70,
    'choices'         => array(
    'min'  => 30,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.sticky-wrapper.sticky #header.layout1',
    'property' => 'height',
    'units'    => 'px',
), array(
    'element'  => '.sticky-wrapper.sticky #header.layout1 #nav-wrapper .menu > li > a',
    'property' => 'line-height',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 16,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout1_logo_height',
    'label'           => esc_html__( 'Logo Max Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 53px', 'caeliora' ),
    'default'         => 53,
    'choices'         => array(
    'min'  => 0,
    'max'  => 2000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout1 #logo img',
    'property' => 'max-height',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 18,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout1_logo_height_sticky',
    'label'           => esc_html__( 'Scrolling Logo Max Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 40px', 'caeliora' ),
    'default'         => 40,
    'choices'         => array(
    'min'  => 0,
    'max'  => 2000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.sticky-wrapper.sticky #header.layout1 #logo img',
    'property' => 'max-height',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 20,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout1',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout2_height',
    'label'           => esc_html__( 'Header Layout 2 Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 110px', 'caeliora' ),
    'default'         => 110,
    'choices'         => array(
    'min'  => 30,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array(
    array(
    'element'  => '#header.layout2',
    'property' => 'height',
    'units'    => 'px',
),
    array(
    'element'       => '.feat-area.fullscreen .feat-item',
    'property'      => 'height',
    'value_pattern' => 'calc(100vh - $px)',
),
    array(
    'element'       => '.feat-area.split-slider .feat-split',
    'property'      => 'height',
    'value_pattern' => 'calc(100vh - $px)',
),
    array(
    'element'       => '.split-header',
    'property'      => 'height',
    'value_pattern' => 'calc(100vh - $px)',
)
),
    'priority'        => 24,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout2',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout2_height_sticky',
    'label'           => esc_html__( 'Header Layout 2 Scrolling Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 70px', 'caeliora' ),
    'default'         => 70,
    'choices'         => array(
    'min'  => 30,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.sticky-wrapper.sticky #header.layout2',
    'property' => 'height',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 27,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout2',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout2_logo_height',
    'label'           => esc_html__( 'Logo Max Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 45px', 'caeliora' ),
    'default'         => 45,
    'choices'         => array(
    'min'  => 0,
    'max'  => 2000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout2 #logo img',
    'property' => 'max-height',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 31,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout2',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout2_logo_height_sticky',
    'label'           => esc_html__( 'Scrolling Logo Max Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 40px', 'caeliora' ),
    'default'         => 40,
    'choices'         => array(
    'min'  => 0,
    'max'  => 2000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '.sticky-wrapper.sticky #header.layout2 #logo img',
    'property' => 'max-height',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 34,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout2',
    'operator' => '==',
) ),
) );
/* Header layout 3 */
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout3_height',
    'label'           => esc_html__( 'Header Layout 3 - Top Bar Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 58px', 'caeliora' ),
    'default'         => 58,
    'choices'         => array(
    'min'  => 30,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#top-bar.layout3',
    'property' => 'height',
    'units'    => 'px',
), array(
    'element'  => '#top-bar.layout3 #nav-wrapper .menu > li > a',
    'property' => 'line-height',
    'units'    => 'px',
), array(
    'element'  => '#top-bar.layout3 .top-misc',
    'property' => 'line-height',
    'units'    => 'px',
) ),
    'priority'        => 38,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout3',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout3_logo_width',
    'label'           => esc_html__( 'Logo Max Width', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 1140px', 'caeliora' ),
    'default'         => 1140,
    'choices'         => array(
    'min'  => 0,
    'max'  => 1140,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout3 #logo img, #header.layout4 #logo img',
    'property' => 'max-width',
    'units'    => 'px',
) ),
    'transport'       => 'auto',
    'priority'        => 55,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => array( 'layout3', 'layout4' ),
    'operator' => 'contains',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout3_logo_top_padding',
    'label'           => esc_html__( 'Header Layout 3 - Logo Padding Top', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 55px', 'caeliora' ),
    'default'         => 55,
    'choices'         => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout3 #logo',
    'property' => 'padding-top',
    'units'    => 'px',
) ),
    'priority'        => 40,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout3',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout3_logo_bottom_padding',
    'label'           => esc_html__( 'Header Layout 3 - Logo Padding Bottom', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 55px', 'caeliora' ),
    'default'         => 55,
    'choices'         => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout3 #logo',
    'property' => 'padding-bottom',
    'units'    => 'px',
) ),
    'priority'        => 50,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout3',
    'operator' => '==',
) ),
) );
/* Header layout 4 */
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'radio-buttonset',
    'settings'        => 'caeliora_header_layout4_menu_width',
    'label'           => esc_html__( 'Header Layout 4 - Menu Bar Width', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'default'         => 'fullwidth',
    'priority'        => 39,
    'choices'         => array(
    'fullwidth'     => esc_html__( 'Full-width', 'caeliora' ),
    'content-width' => esc_html__( 'Content Width', 'caeliora' ),
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout4',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout4_height',
    'label'           => esc_html__( 'Header Layout 4 - Menu Bar Height', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 58px', 'caeliora' ),
    'default'         => 58,
    'transport'       => 'auto',
    'choices'         => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#top-bar.layout4',
    'property' => 'height',
    'units'    => 'px',
), array(
    'element'       => '#top-bar.layout4 #nav-wrapper .menu > li > a',
    'value_pattern' => 'calc($px - 1px)',
    'property'      => 'line-height',
), array(
    'element'  => '#top-bar.layout4 .top-misc',
    'property' => 'line-height',
    'units'    => 'px',
) ),
    'priority'        => 40,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout4',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout4_logo_top_padding',
    'label'           => esc_html__( 'Header Layout 4 - Logo Padding Top', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 45px', 'caeliora' ),
    'default'         => 45,
    'transport'       => 'auto',
    'choices'         => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout4 #logo',
    'property' => 'padding-top',
    'units'    => 'px',
) ),
    'priority'        => 42,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout4',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'number',
    'settings'        => 'caeliora_header_layout4_logo_bottom_padding',
    'label'           => esc_html__( 'Header Layout 4 - Logo Padding Bottom', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'description'     => esc_html__( 'Default: 45px', 'caeliora' ),
    'default'         => 45,
    'transport'       => 'auto',
    'choices'         => array(
    'min'  => 0,
    'max'  => 1000,
    'step' => 1,
),
    'output'          => array( array(
    'element'  => '#header.layout4 #logo',
    'property' => 'padding-bottom',
    'units'    => 'px',
) ),
    'priority'        => 43,
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_layout',
    'value'    => 'layout4',
    'operator' => '==',
) ),
) );
/* Hide / Show */
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_header_show_social',
    'label'    => esc_html__( 'Display Header Social Icons', 'caeliora' ),
    'section'  => 'caeliora_section_header',
    'default'  => '1',
    'priority' => 80,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_header_show_search',
    'label'    => esc_html__( 'Display Header Search', 'caeliora' ),
    'section'  => 'caeliora_section_header',
    'default'  => '1',
    'priority' => 84,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'toggle',
    'settings' => 'caeliora_header_show_menu_label',
    'label'    => esc_html__( 'Display Burger-Menu Label', 'caeliora' ),
    'section'  => 'caeliora_section_header',
    'default'  => '1',
    'priority' => 88,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'text',
    'settings' => 'caeliora_header_menu_label',
    'label'    => esc_html__( 'Burger-Menu Label Text', 'caeliora' ),
    'section'  => 'caeliora_section_header',
    'default'  => esc_html__( 'Menu', 'caeliora' ),
    'priority' => 92,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'            => 'image',
    'settings'        => 'caeliora_header_mobile_logo_image',
    'label'           => esc_html__( 'Upload Mobile Logo', 'caeliora' ),
    'section'         => 'caeliora_section_header',
    'priority'        => 95,
    'choices'         => array(
    'save_as' => 'array',
),
    'active_callback' => array( array(
    'setting'  => 'caeliora_header_logo_type',
    'value'    => 'logo_image',
    'operator' => '==',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_header_mobile_logo_max_width',
    'label'       => esc_html__( 'Mobile Logo Max Width', 'caeliora' ),
    'section'     => 'caeliora_section_header',
    'description' => esc_html__( 'Default: 100px', 'caeliora' ),
    'default'     => 100,
    'choices'     => array(
    'min'  => 0,
    'max'  => 480,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '#mobile-menu.mobile-header .normal-logo img',
    'property' => 'max-width',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
    'priority'    => 100,
) );