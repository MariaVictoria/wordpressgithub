<?php

Kirki::add_panel( 'caeliora_core_panel_social', array(
    'priority' => 38,
    'title'    => esc_attr__( 'Social Media Settings', 'caeliora' ),
) );
include get_template_directory() . '/admin/customizer/customizer_core_social_instagram.php';