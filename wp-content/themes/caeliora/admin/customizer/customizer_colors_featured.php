<?php

// Add Section
Kirki::add_section( 'caeliora_section_colors_featured', array(
    'title'    => esc_html__( 'Featured Area', 'caeliora' ),
    'priority' => 225,
    'panel'    => 'caeliora_panel_colors',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'     => 'custom',
    'settings' => 'caeliora_colors_featured_title_heading',
    'label'    => esc_html__( 'Featured Area Title', 'caeliora' ),
    'section'  => 'caeliora_section_colors_featured',
    'default'  => '<small style="margin-top:-5px;display:block;color:#888;">' . esc_html__( 'Select the featured area layout you want to change the title of', 'caeliora' ) . '</small>',
    'priority' => 1,
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_classic1_title_tog',
    'label'     => esc_html__( 'Classic Slider (Style 1)', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '32px',
    'line-height'    => '48px',
    'letter-spacing' => '0',
    'color'          => '#ffffff',
    'text-transform' => 'none',
),
    'priority'  => 2,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-area.classic-slider .post-header h2 a',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_classic2_title_tog',
    'label'     => esc_html__( 'Classic Slider (Style 2)', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '24px',
    'line-height'    => '39px',
    'letter-spacing' => '0',
    'color'          => '#000000',
    'text-transform' => 'none',
),
    'priority'  => 3,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-area.classic-slider .feat-inner.style2 .post-header h2 a',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_fullscreen_title_tog',
    'label'     => esc_html__( 'Fullscreen Slider', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '40px',
    'line-height'    => '1.5',
    'letter-spacing' => '0',
    'color'          => '#ffffff',
    'text-transform' => 'none',
),
    'priority'  => 4,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-area.fullscreen .post-header h2 a',
) ),
) );
/* Feat Category */
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_cat',
    'label'     => esc_html__( 'Featured Area Category', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '14px',
    'letter-spacing' => '2px',
    'color'          => '#ffffff',
    'text-transform' => 'uppercase',
),
    'priority'  => 10,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-area .post-cats a, .feat-area .post-cats',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_classic2_cat',
    'label'     => esc_html__( 'Classic Slider (Style 2) Category Color', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => 'var(--deo-primary-color)',
    'priority'  => 11,
    'output'    => array( array(
    'element'  => '.feat-area.classic-slider .feat-inner.style2 .post-cats a',
    'property' => 'color',
) ),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_splitslider_cat',
    'label'     => esc_html__( 'Split Slider Category Color', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => '#000000',
    'priority'  => 12,
    'output'    => array( array(
    'element'  => '.feat-area.split-slider .post-cats a',
    'property' => 'color',
) ),
    'transport' => 'auto',
) );
/* Feat Date */
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_date_color',
    'label'     => esc_html__( 'Featured Area Date', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '12px',
    'letter-spacing' => '2px',
    'color'          => '#ffffff',
    'text-transform' => 'uppercase',
),
    'priority'  => 17,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-area .dt-date',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_classic2_date',
    'label'     => esc_html__( 'Classic Slider (Style 2) Date', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => '#999999',
    'priority'  => 18,
    'output'    => array( array(
    'element'  => '.feat-area.classic-slider .feat-inner.style2 .dt-date',
    'property' => 'color',
) ),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_splitslider_date',
    'label'     => esc_html__( 'Split Slider Date', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => '#000000',
    'priority'  => 19,
    'output'    => array( array(
    'element'  => '.feat-area.split-slider .dt-date',
    'property' => 'color',
) ),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_date_border',
    'label'     => esc_html__( 'Featured Area Date Lines', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => '#ffffff',
    'priority'  => 24,
    'output'    => array( array(
    'element'  => '.feat-area .date-wrap:before, .feat-area .date-wrap:after',
    'property' => 'border-color',
) ),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_classic2_date_border',
    'label'     => esc_html__( 'Classic Slider (Style 2) Date Lines', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => '#cccccc',
    'priority'  => 25,
    'output'    => array( array(
    'element'  => '.feat-area.classic-slider .feat-inner.style2 .date-wrap:before, .feat-area.classic-slider .feat-inner.style2 .date-wrap:after',
    'property' => 'border-color',
) ),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_splitslider_date_border',
    'label'     => esc_html__( 'Split Slider Date Lines', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => 'rgba(0,0,0, 0.35)',
    'choices'   => array(
    'alpha' => true,
),
    'priority'  => 26,
    'output'    => array( array(
    'element'  => '.feat-area.split-slider .date-wrap:before, .feat-area.split-slider .date-wrap:after',
    'property' => 'border-color',
) ),
    'transport' => 'auto',
) );
/* Author by text */
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_author_by',
    'label'     => esc_html__( 'Featured Area Author "By" text', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '15px',
    'letter-spacing' => '0',
    'color'          => '#ffffff',
    'text-transform' => 'none',
),
    'priority'  => 27,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-author .by',
) ),
) );
/* Author text */
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_author_name',
    'label'     => esc_html__( 'Featured Area Author Name', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '15px',
    'letter-spacing' => '2px',
    'color'          => '#ffffff',
    'text-transform' => 'uppercase',
),
    'priority'  => 34,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.feat-author a',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'multicolor',
    'settings'  => 'caeliora_colors_featured_pager',
    'label'     => esc_html__( 'Featured Area Pager', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'priority'  => 43,
    'choices'   => array(
    'border'        => esc_html__( 'Pager Border', 'caeliora' ),
    'bg'            => esc_html__( 'Pager Color', 'caeliora' ),
    'active_border' => esc_html__( 'Active Pager Border', 'caeliora' ),
    'active_bg'     => esc_html__( 'Active Pager Color', 'caeliora' ),
),
    'default'   => array(
    'border'        => '#ffffff',
    'bg'            => 'rgba(255,255,255, 0)',
    'active_border' => '#ffffff',
    'active_bg'     => '#ffffff',
),
    'output'    => array(
    array(
    'choice'   => 'border',
    'element'  => '.feat-area.fullscreen-one .bx-wrapper .bx-pager.bx-default-pager a',
    'property' => 'border-color',
),
    array(
    'choice'   => 'bg',
    'element'  => '.feat-area.fullscreen-one .bx-wrapper .bx-pager.bx-default-pager a',
    'property' => 'background-color',
),
    array(
    'choice'   => 'active_border',
    'element'  => '.feat-area.fullscreen-one .bx-wrapper .bx-pager.bx-default-pager a.active, .feat-area.fullscreen-one .bx-wrapper .bx-pager.bx-default-pager a:hover',
    'property' => 'border-color',
),
    array(
    'choice'   => 'active_bg',
    'element'  => '.feat-area.fullscreen-one .bx-wrapper .bx-pager.bx-default-pager a.active, .feat-area.fullscreen-one .bx-wrapper .bx-pager.bx-default-pager a:hover',
    'property' => 'background-color',
)
),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'multicolor',
    'settings'  => 'caeliora_colors_featured_arrows',
    'label'     => esc_html__( 'Featured Area Next/Prev Arrows', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'priority'  => 45,
    'choices'   => array(
    'border'       => esc_html__( 'Arrow Border', 'caeliora' ),
    'bg'           => esc_html__( 'Arrow BG Color', 'caeliora' ),
    'text'         => esc_html__( 'Arrow Color', 'caeliora' ),
    'border_hover' => esc_html__( 'Arrow Border Hover', 'caeliora' ),
    'bg_hover'     => esc_html__( 'Arrow BG Hover', 'caeliora' ),
    'text_hover'   => esc_html__( 'Arrow Color Hover', 'caeliora' ),
),
    'default'   => array(
    'border'       => '#ffffff',
    'bg'           => 'rgba(255,255,255, 0)',
    'text'         => '#ffffff',
    'border_hover' => '#ffffff',
    'bg_hover'     => 'rgba(255,255,255, 1)',
    'text_hover'   => '#000000',
),
    'output'    => array(
    array(
    'choice'   => 'border',
    'element'  => '.feat-area.feat-arrows .bx-wrapper .bx-controls-direction a, .feat-area.feat-arrows .slick-arrow',
    'property' => 'border-color',
),
    array(
    'choice'   => 'bg',
    'element'  => '.feat-area.feat-arrows .bx-wrapper .bx-controls-direction a, .feat-area.feat-arrows .slick-arrow',
    'property' => 'background-color',
),
    array(
    'choice'   => 'text',
    'element'  => '.feat-area.feat-arrows .bx-wrapper .bx-controls-direction a, .feat-area.feat-arrows .slick-arrow',
    'property' => 'color',
),
    array(
    'choice'   => 'border_hover',
    'element'  => '.feat-area.feat-arrows .bx-wrapper .bx-controls-direction a:hover, .feat-area.feat-arrows .slick-arrow:hover',
    'property' => 'border-color',
),
    array(
    'choice'   => 'bg_hover',
    'element'  => '.feat-area.feat-arrows .bx-wrapper .bx-controls-direction a:hover, .feat-area.feat-arrows .slick-arrow:hover',
    'property' => 'background-color',
),
    array(
    'choice'   => 'text_hover',
    'element'  => '.feat-area.feat-arrows .bx-wrapper .bx-controls-direction a:hover, .feat-area.feat-arrows .slick-arrow:hover',
    'property' => 'color',
)
),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'multicolor',
    'settings'  => 'caeliora_colors_featured_splitslider_arrows',
    'label'     => esc_html__( 'Split Slider Next/Prev Arrows', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'priority'  => 46,
    'choices'   => array(
    'border'       => esc_html__( 'Arrow Border', 'caeliora' ),
    'bg'           => esc_html__( 'Arrow BG Color', 'caeliora' ),
    'text'         => esc_html__( 'Arrow Color', 'caeliora' ),
    'border_hover' => esc_html__( 'Arrow Border Hover', 'caeliora' ),
    'bg_hover'     => esc_html__( 'Arrow BG Hover', 'caeliora' ),
    'text_hover'   => esc_html__( 'Arrow Color Hover', 'caeliora' ),
),
    'default'   => array(
    'border'       => '#000000',
    'bg'           => 'rgba(0,0,0, 0)',
    'text'         => '#000000',
    'border_hover' => '#000000',
    'bg_hover'     => 'rgba(0,0,0, 1)',
    'text_hover'   => '#ffffff',
),
    'output'    => array(
    array(
    'choice'   => 'border',
    'element'  => '.feat-area.split-slider.feat-arrows .bx-wrapper .bx-controls-direction a',
    'property' => 'border-color',
),
    array(
    'choice'   => 'bg',
    'element'  => '.feat-area.split-slider.feat-arrows .bx-wrapper .bx-controls-direction a',
    'property' => 'background-color',
),
    array(
    'choice'   => 'text',
    'element'  => '.feat-area.split-slider.feat-arrows .bx-wrapper .bx-controls-direction a',
    'property' => 'color',
),
    array(
    'choice'   => 'border_hover',
    'element'  => '.feat-area.split-slider.feat-arrows .bx-wrapper .bx-controls-direction a:hover',
    'property' => 'border-color',
),
    array(
    'choice'   => 'bg_hover',
    'element'  => '.feat-area.split-slider.feat-arrows .bx-wrapper .bx-controls-direction a:hover',
    'property' => 'background-color',
),
    array(
    'choice'   => 'text_hover',
    'element'  => '.feat-area.split-slider.feat-arrows .bx-wrapper .bx-controls-direction a:hover',
    'property' => 'color',
)
),
    'transport' => 'auto',
) );
/* Split slider */
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'color',
    'settings'  => 'caeliora_colors_featured_splitslider_bg',
    'label'     => esc_html__( 'Split Slider: Background color', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => '#fbe7da',
    'priority'  => 49,
    'output'    => array( array(
    'element'  => '.feat-split-content',
    'property' => 'background-color',
) ),
    'transport' => 'auto',
) );
/* Static slider */
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_static_subtitle',
    'label'     => esc_html__( 'Static Slider: Subtitle', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '18px',
    'letter-spacing' => '0',
    'color'          => '#ffffff',
    'text-transform' => 'none',
),
    'priority'  => 51,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.static-subtitle',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_static_text',
    'label'     => esc_html__( 'Static Slider: Text', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '18px',
    'letter-spacing' => '0',
    'line-height'    => '1.7',
    'color'          => '#ffffff',
    'text-transform' => 'none',
),
    'priority'  => 52,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.static-text',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'typography',
    'settings'  => 'caeliora_colors_featured_static_button_text',
    'label'     => esc_html__( 'Static Slider: Button Text', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'default'   => array(
    'font-size'      => '14px',
    'letter-spacing' => '1px',
    'text-transform' => 'none',
),
    'priority'  => 53,
    'transport' => 'auto',
    'output'    => array( array(
    'element' => '.static-button',
) ),
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'dimensions',
    'settings'  => 'caeliora_colors_featured_static_button_sizing',
    'label'     => esc_html__( 'Static Slider: Button Sizing', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'priority'  => 55,
    'default'   => array(
    'padding-top-bottom' => '12px',
    'padding-left-right' => '34px',
    'border-width'       => '2px',
    'border-radius'      => '60px',
),
    'choices'   => array(
    'labels' => array(
    'padding-top-bottom' => esc_html__( 'Padding Top/Bottom', 'caeliora' ),
    'padding-left-right' => esc_html__( 'Padding Left/Right', 'caeliora' ),
    'border-width'       => esc_html__( 'Border Width', 'caeliora' ),
    'border-radius'      => esc_html__( 'Border Radius', 'caeliora' ),
),
),
    'output'    => array(
    array(
    'choice'   => 'padding-top-bottom',
    'element'  => '.static-button',
    'property' => 'padding-top',
),
    array(
    'choice'   => 'padding-top-bottom',
    'element'  => '.static-button',
    'property' => 'padding-bottom',
),
    array(
    'choice'   => 'padding-left-right',
    'element'  => '.static-button',
    'property' => 'padding-left',
),
    array(
    'choice'   => 'padding-left-right',
    'element'  => '.static-button',
    'property' => 'padding-right',
),
    array(
    'choice'   => 'border-width',
    'element'  => '.static-button',
    'property' => 'border-width',
),
    array(
    'choice'   => 'border-radius',
    'element'  => '.static-button',
    'property' => 'border-radius',
)
),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'      => 'multicolor',
    'settings'  => 'caeliora_colors_featured_static_button',
    'label'     => esc_html__( 'Static Slider: Button', 'caeliora' ),
    'section'   => 'caeliora_section_colors_featured',
    'priority'  => 56,
    'choices'   => array(
    'text'         => esc_html__( 'Button Text', 'caeliora' ),
    'border_hover' => esc_html__( 'Button Border Hover', 'caeliora' ),
    'bg_hover'     => esc_html__( 'Button BG Hover', 'caeliora' ),
    'text_hover'   => esc_html__( 'Button Text Hover', 'caeliora' ),
),
    'default'   => array(
    'text'         => '#ffffff',
    'border_hover' => '#ffffff',
    'bg_hover'     => '#ffffff',
    'text_hover'   => '#000000',
),
    'output'    => array(
    array(
    'choice'   => 'text',
    'element'  => '.static-button',
    'property' => 'color',
),
    array(
    'choice'   => 'border_hover',
    'element'  => '.static-button:hover',
    'property' => 'border-color',
),
    array(
    'choice'   => 'bg_hover',
    'element'  => '.static-button:hover',
    'property' => 'background-color',
),
    array(
    'choice'   => 'text_hover',
    'element'  => '.static-button:hover',
    'property' => 'color',
)
),
    'transport' => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_classic1_margin_top',
    'label'       => esc_html__( 'Classic (Style 1) Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 24px', 'caeliora' ),
    'default'     => 24,
    'priority'    => 57,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.classic-slider .post-header .entry-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_classic1_margin_bottom',
    'label'       => esc_html__( 'Classic (Style 1) Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 20px', 'caeliora' ),
    'default'     => 20,
    'priority'    => 58,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.classic-slider .post-header .entry-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_classic2_margin_top',
    'label'       => esc_html__( 'Classic (Style 2): Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 20px', 'caeliora' ),
    'default'     => 20,
    'priority'    => 60,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.classic-slider .feat-inner.style2 .post-header .entry-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_classic2_margin_bottom',
    'label'       => esc_html__( 'Classic (Style 2): Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 15px', 'caeliora' ),
    'default'     => 15,
    'priority'    => 62,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.classic-slider .feat-inner.style2 .post-header .entry-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_fullscreen_margin_top',
    'label'       => esc_html__( 'Fullscreen: Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 31px', 'caeliora' ),
    'default'     => 31,
    'priority'    => 64,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.fullscreen .post-header h2.entry-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_fullscreen_margin_bottom',
    'label'       => esc_html__( 'Fullscreen: Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 22px', 'caeliora' ),
    'default'     => 22,
    'priority'    => 66,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.fullscreen .post-header h2.entry-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_carousel_margin_top',
    'label'       => esc_html__( 'Carousel: Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 10px', 'caeliora' ),
    'default'     => 10,
    'priority'    => 66,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.caeliora-carousel .post-header .entry-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_carousel_margin_bottom',
    'label'       => esc_html__( 'Carousel: Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 7px', 'caeliora' ),
    'default'     => 7,
    'priority'    => 68,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.caeliora-carousel .post-header .entry-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_carousel_center_margin_top',
    'label'       => esc_html__( 'Carousel Center: Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 16px', 'caeliora' ),
    'default'     => 16,
    'priority'    => 70,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.caeliora-carousel.carousel-slider-center .post-header .entry-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_carousel_center_margin_bottom',
    'label'       => esc_html__( 'Carousel Center: Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 11px', 'caeliora' ),
    'default'     => 11,
    'priority'    => 72,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.caeliora-carousel.carousel-slider-center .post-header .entry-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_split_margin_top',
    'label'       => esc_html__( 'Split Slider: Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 32px', 'caeliora' ),
    'default'     => 32,
    'priority'    => 74,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.split-slider .post-header .entry-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_split_margin_bottom',
    'label'       => esc_html__( 'Split Slider: Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 27px', 'caeliora' ),
    'default'     => 27,
    'priority'    => 76,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.feat-area.split-slider .post-header .entry-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_static_classic_margin_top',
    'label'       => esc_html__( 'Static Classic Slider: Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 18px', 'caeliora' ),
    'default'     => 18,
    'priority'    => 80,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.static-slider.classic-slider .static-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_static_classic_margin_bottom',
    'label'       => esc_html__( 'Static Classic Slider: Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 20px', 'caeliora' ),
    'default'     => 20,
    'priority'    => 80,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.static-slider.classic-slider .static-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_static_fullscreen_margin_top',
    'label'       => esc_html__( 'Static Fullscreen Slider: Title Margin Top', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 18px', 'caeliora' ),
    'default'     => 18,
    'priority'    => 80,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.static-slider.fullscreen .static-title',
    'property' => 'margin-top',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );
Kirki::add_field( 'caeliora_config', array(
    'type'        => 'number',
    'settings'    => 'caeliora_colors_featured_static_fullscreen_margin_bottom',
    'label'       => esc_html__( 'Static Fullscreen Slider: Title Margin Bottom', 'caeliora' ),
    'section'     => 'caeliora_section_colors_featured',
    'description' => esc_html__( 'Default: 20px', 'caeliora' ),
    'default'     => 20,
    'priority'    => 80,
    'choices'     => array(
    'min'  => 0,
    'max'  => 100,
    'step' => 1,
),
    'output'      => array( array(
    'element'  => '.static-slider.fullscreen .static-title',
    'property' => 'margin-bottom',
    'units'    => 'px',
) ),
    'transport'   => 'auto',
) );