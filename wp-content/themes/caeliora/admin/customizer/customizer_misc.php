<?php

// Add Section
Kirki::add_section( 'caeliora_section_misc', array(
    'title'          => esc_html__( 'MISC Settings', 'caeliora' ),
    'priority'       => 52,
) );

// Add Settings

Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_misc_acf',
	'label'       => esc_html__( 'Show ACF Pro in WP Dashboard Menu?', 'caeliora' ),
	'description' => esc_html__( 'Enable this if you need to create your own Custom Fields using the Advanced Custom Fields Pro plugin. Only recommended for experienced users.', 'caeliora' ),
	'section'     => 'caeliora_section_misc',
	'default'     => '0',
	'priority'    => 3,
) );


Kirki::add_field( 'caeliora_config', array(
	'type'        => 'toggle',
	'settings'    => 'caeliora_default_google_fonts',
	'label'       => esc_html__( 'Disable default Google Fonts', 'caeliora' ),
	'section'     => 'caeliora_section_misc',
	'default'     => false,
	'priority'    => 3,
) );