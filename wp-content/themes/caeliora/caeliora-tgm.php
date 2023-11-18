<?php

/**
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Caeliora for publication on wordpress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */
require_once get_template_directory() . '/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'caeliora_register_required_plugins' );
function caeliora_register_required_plugins()
{
    $plugins = array(
        array(
        'name'     => 'Smash Balloon Instagram Feed',
        'slug'     => 'instagram-feed',
        'required' => false,
    ),
        array(
        'name'     => 'Mailchimp for WordPress',
        'slug'     => 'mailchimp-for-wp',
        'required' => false,
    ),
        array(
        'name'     => 'Contact Form 7',
        'slug'     => 'contact-form-7',
        'required' => false,
    ),
        array(
        'name'     => 'WooCommerce',
        'slug'     => 'woocommerce',
        'required' => false,
    )
    );
    $config = array(
        'id'           => 'caeliora',
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins',
        'parent_slug'  => 'themes.php',
        'capability'   => 'edit_theme_options',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => true,
        'message'      => '',
    );
    tgmpa( $plugins, $config );
}
