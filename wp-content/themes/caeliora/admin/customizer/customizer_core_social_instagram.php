<?php
// Add Section
Kirki::add_section( 'caeliora_core_section_social_instagram', array(
    'title'          => esc_html__( 'Instagram Sections', 'caeliora' ),
    'priority'       => 102,
	'panel'			 => 'caeliora_core_panel_social',
) );

Kirki::add_field( 'caeliora_config', array(
  'settings' => 'caeliora_core_footer_insta_describ',
  'section'  => 'caeliora_core_section_social_instagram',
  'type'     => 'custom',
  'priority'    => 1,
  'default'    => wp_kses( __( 'Please ensure you have installed/activated the "Smash Balloon Instagram Feed" plugin and connected your Instagram account via your <strong>WP Dashboard > Instagram Feed > Settings</strong>. Check out the <a target="_blank" href="https://caeliora.com/documentation/#social_instagram">documentation</a> for configuration instructions.', 'caeliora' ), array(
    'a' => array(
      'target' => array(),
      'href' => array(),
    ),
	'strong' => array(),
  ) ),
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_core_footer_insta_enable',
	'label'       => esc_html__( 'Show Footer Instagram Section?', 'caeliora' ),
	'section'     => 'caeliora_core_section_social_instagram',
	'default'     => '0',
	'priority'    => 3,
) );

Kirki::add_field( 'caeliora_config', array(
	'type'     => 'text',
	'settings' => 'caeliora_core_footer_insta_subtitle',
	'label'    => esc_html__( 'Instagram Footer Subtitle', 'caeliora' ),
	'section'  => 'caeliora_core_section_social_instagram',
	'priority' => 12,
	'default'     => esc_html__( 'Find me on Instagram', 'caeliora' ),
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_core_footer_insta_enable',
            'value'    => '1',
            'operator' => '=='
        )
    )
) );

Kirki::add_field( 'caeliora_config', array(
	'type'     => 'text',
	'settings' => 'caeliora_core_footer_insta_title',
	'label'    => esc_html__( 'Instagram Footer Title', 'caeliora' ),
	'section'  => 'caeliora_core_section_social_instagram',
	'priority' => 14,
	'default'     => esc_html__( 'DeoThemes', 'caeliora' ),
	'active_callback' => array(
        array(
            'setting'  => 'caeliora_core_footer_insta_enable',
            'value'    => '1',
            'operator' => '=='
        )
    )
) );

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_core_header_insta_enable',
	'label'       => esc_html__( 'Show Header Instagram Section?', 'caeliora' ),
	'section'     => 'caeliora_core_section_social_instagram',
	'default'     => '0',
	'priority'    => 26,
) );