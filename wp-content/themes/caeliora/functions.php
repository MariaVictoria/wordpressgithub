<?php

/**
 * Theme functions and definitions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Cealiora
 * @since 		 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
define( 'CAELIORA_VERSION', '1.0.2' );
define( 'CAELIORA_DIR', get_template_directory() );
define( 'CAELIORA_URI', get_template_directory_uri() );

if ( !function_exists( 'caeliora_fs' ) ) {
    // Create a helper function for easy SDK access.
    function caeliora_fs()
    {
        global  $caeliora_fs ;
        
        if ( !isset( $caeliora_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $caeliora_fs = fs_dynamic_init( array(
                'id'             => '14178',
                'slug'           => 'caeliora',
                'premium_slug'   => 'caeliora-pro',
                'type'           => 'theme',
                'public_key'     => 'pk_e55561f0ec3aee2a170c0301156fe',
                'is_premium'     => false,
                'premium_suffix' => 'Pro',
                'has_addons'     => false,
                'has_paid_plans' => true,
                'menu'           => array(
                'slug'    => 'caeliora-theme',
                'support' => false,
            ),
                'is_live'        => true,
            ) );
        }
        
        return $caeliora_fs;
    }
    
    // Init Freemius.
    caeliora_fs();
    // Signal that SDK was initiated.
    do_action( 'caeliora_fs_loaded' );
}

/**
* Disable contant for free users
*/
function caeliora_disable_contact_for_free_users( $is_visible, $menu_id )
{
    if ( 'contact' != $menu_id ) {
        return $is_visible;
    }
    return caeliora_fs()->can_use_premium_code();
}

caeliora_fs()->add_filter(
    'is_submenu_visible',
    'caeliora_disable_contact_for_free_users',
    10,
    2
);
/**
* Change theme icon
*/
function caeliora_fs_custom_icon()
{
    return get_template_directory() . '/admin/theme-icon.png';
}

caeliora_fs()->add_filter( 'plugin_icon', 'caeliora_fs_custom_icon' );
//////////////////////////////////////////////////////////////////
// Content width
//////////////////////////////////////////////////////////////////
if ( !isset( $content_width ) ) {
    $content_width = 1140;
}
// Disable Smash Balloon Instagram Feed redirection
remove_action( 'admin_init', 'sbi_activation_plugin_redirect' );
//////////////////////////////////////////////////////////////////
// Kirki
//////////////////////////////////////////////////////////////////
/* Deactivate Kirki if installed */
function caeliora_deactivate_kirki()
{
    if ( is_plugin_active( 'kirki/kirki.php' ) ) {
        deactivate_plugins( 'kirki/kirki.php' );
    }
}

add_action( 'admin_init', 'caeliora_deactivate_kirki' );
/* Include Kirki */
include_once get_template_directory() . '/admin/kirki/kirki.php';
//////////////////////////////////////////////////////////////////
// Theme set up
//////////////////////////////////////////////////////////////////
add_action( 'after_setup_theme', 'caeliora_theme_setup' );
if ( !function_exists( 'caeliora_theme_setup' ) ) {
    function caeliora_theme_setup()
    {
        // Register navigation menu
        register_nav_menus( array(
            'main-menu'   => esc_html__( 'Primary Menu', 'caeliora' ),
            'footer-menu' => esc_html__( 'Footer Menu', 'caeliora' ),
        ) );
        // Localization support
        load_theme_textdomain( 'caeliora', get_template_directory() . '/languages' );
        // Post formats
        add_theme_support( 'post-formats', array( 'gallery', 'video' ) );
        // Post Thumbnails
        add_theme_support( 'post-thumbnails' );
        add_image_size(
            'caeliora-fullwidth',
            1140,
            0,
            true
        );
        add_image_size(
            'caeliora-fullscreen',
            1920,
            0,
            true
        );
        add_image_size(
            'caeliora-widget-small-thumb',
            80,
            80,
            true
        );
        add_image_size(
            'caeliora-widget-big-thumb',
            300,
            200,
            true
        );
        add_image_size(
            'caeliora-grid-post-thumb',
            600,
            460,
            true
        );
        // Title tag
        add_theme_support( 'title-tag' );
        // Feed Links
        add_theme_support( 'automatic-feed-links' );
        // WooCommerce Support
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 600,
            'single_image_width'    => 600,
        ) );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        // Gutenberg
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_editor_style( 'editor-style.css' );
        if ( !class_exists( 'Kirki' ) ) {
            add_editor_style( caeliora_fonts_url() );
        }
        add_theme_support( 'custom-spacing' );
        add_theme_support( 'responsive-embeds' );
        // Use classic widgets
        remove_theme_support( 'widgets-block-editor' );
        // Color palette
        add_theme_support( 'editor-color-palette', array(
            array(
            'name'  => esc_html__( 'Accent', 'caeliora' ),
            'slug'  => 'caeliora-accent',
            'color' => '#f78a74',
        ),
            array(
            'name'  => esc_html__( 'Light Accent', 'caeliora' ),
            'slug'  => 'caeliora-light-accent',
            'color' => '#ffd6cb',
        ),
            array(
            'name'  => esc_html__( 'Black', 'caeliora' ),
            'slug'  => 'caeliora-black',
            'color' => '#000000',
        ),
            array(
            'name'  => esc_html__( 'Ultra Dark Gray', 'caeliora' ),
            'slug'  => 'caeliora-ultradark-gray',
            'color' => '#1f2025',
        ),
            array(
            'name'  => esc_html__( 'Gray', 'caeliora' ),
            'slug'  => 'caeliora-gray',
            'color' => '#999999',
        ),
            array(
            'name'  => esc_html__( 'Light Gray', 'caeliora' ),
            'slug'  => 'caeliora-light-gray',
            'color' => '#b5b5b5',
        ),
            array(
            'name'  => esc_html__( 'Ultra Light Gray', 'caeliora' ),
            'slug'  => 'caeliora-ultralight-gray',
            'color' => '#f4f4f4',
        ),
            array(
            'name'  => esc_html__( 'White', 'caeliora' ),
            'slug'  => 'caeliora-white',
            'color' => '#ffffff',
        )
        ) );
    }

}
//////////////////////////////////////////////////////////////////
// Register & enqueue styles/scripts
//////////////////////////////////////////////////////////////////
//Get Google Fonts
if ( !class_exists( 'Kirki' ) ) {
    function caeliora_fonts_url()
    {
        $font_url = '';
        if ( !get_theme_mod( 'caeliora_default_google_fonts', false ) ) {
            $font_url = add_query_arg( 'family', urlencode( 'Prata:400&subset=latin|Lora:400,400i,700,700i&subset=latin-ext|Poppins:300,400,500,600,700&subset=latin-ext' ), "https://fonts.googleapis.com/css" );
        }
        return $font_url;
    }

}
// Enqueue Scripts
if ( !function_exists( 'caeliora_load_scripts' ) ) {
    function caeliora_load_scripts()
    {
        // Register scripts and styles
        wp_enqueue_style(
            'caeliora-style',
            get_stylesheet_directory_uri() . '/style.css',
            array(),
            CAELIORA_VERSION
        );
        if ( class_exists( 'WooCommerce' ) ) {
            wp_enqueue_style(
                'caeliora-woocommerce',
                get_stylesheet_directory_uri() . '/css/woocommerce.css',
                array(),
                CAELIORA_VERSION
            );
        }
        // Javascript
        wp_enqueue_script(
            'sidr',
            get_template_directory_uri() . '/js/jquery.sidr.min.js',
            array( 'jquery' ),
            '',
            true
        );
        wp_enqueue_script(
            'slick',
            get_template_directory_uri() . '/js/slick.min.js',
            array( 'jquery' ),
            '',
            true
        );
        wp_enqueue_script(
            'sticky',
            get_template_directory_uri() . '/js/jquery.sticky.js',
            array( 'jquery' ),
            '',
            true
        );
        wp_enqueue_script(
            'caeliora-scripts',
            get_template_directory_uri() . '/js/caeliora-scripts.js',
            array( 'jquery' ),
            CAELIORA_VERSION,
            true
        );
        // Fonts
        if ( !class_exists( 'Kirki' ) ) {
            wp_enqueue_style(
                'caeliora_fonts',
                caeliora_fonts_url(),
                array(),
                CAELIORA_VERSION
            );
        }
        if ( is_singular() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

}
add_action( 'wp_enqueue_scripts', 'caeliora_load_scripts' );
/**
 * Theme admin scripts and styles.
 */
function caeliora_admin_scripts()
{
    wp_enqueue_style( 'caeliora-admin-styles', CAELIORA_URI . '/admin/admin-styles.css' );
}

add_action( 'admin_enqueue_scripts', 'caeliora_admin_scripts' );
//////////////////////////////////////////////////////////////////
// Includes
//////////////////////////////////////////////////////////////////
// TGM
include get_template_directory() . '/caeliora-tgm.php';
// Customizer
require get_template_directory() . '/admin/customizer/caeliora_customizer_setup.php';
// Includes
include get_template_directory() . '/inc/widgets/about_widget.php';
include get_template_directory() . '/inc/widgets/post_widget.php';
include get_template_directory() . '/inc/widgets/promo_widget.php';
include get_template_directory() . '/inc/template-parts.php';
include get_template_directory() . '/inc/functions-header.php';
include get_template_directory() . '/inc/functions-post.php';
include get_template_directory() . '/inc/functions-featured.php';
include get_template_directory() . '/inc/functions-page.php';
include get_template_directory() . '/inc/caeliora_css.php';
include get_template_directory() . '/admin/welcome.php';
//////////////////////////////////////////////////////////////////
// Advanced Custom Fields
//////////////////////////////////////////////////////////////////
// Include ACF fields
include get_template_directory() . '/admin/caeliora_acf_fields.php';
// Hide ACF from WordPress menu
if ( !get_theme_mod( 'caeliora_misc_acf', false ) ) {
    add_filter( 'acf/settings/show_admin', '__return_false' );
}
add_filter( 'acf/settings/show_updates', '__return_false' );
// Add custom ACF CSS to edit pages
if ( !function_exists( 'caeliora_custom_acf_css' ) ) {
    function caeliora_custom_acf_css()
    {
        wp_enqueue_style(
            'caeliora-acf-css',
            get_template_directory_uri() . '/admin/caeliora-acf-style.css',
            false,
            '1.0.0'
        );
    }

}
add_action( 'admin_enqueue_scripts', 'caeliora_custom_acf_css' );
//////////////////////////////////////////////////////////////////
// Register widgets
//////////////////////////////////////////////////////////////////
add_action( 'widgets_init', 'caeliora_widgets_init' );
if ( !function_exists( 'caeliora_widgets_init' ) ) {
    function caeliora_widgets_init()
    {
        register_sidebar( array(
            'name'          => esc_html__( 'Sidebar', 'caeliora' ),
            'id'            => 'sidebar-1',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
            'description'   => esc_html__( 'Widgets here will appear vertically to the right of your content.', 'caeliora' ),
        ) );
        register_sidebar( array(
            'name'          => esc_html__( 'Widget Under Featured Area', 'caeliora' ),
            'id'            => 'sidebar-3',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
            'description'   => esc_html__( 'Widgets here will appear under Featured Area if activated.', 'caeliora' ),
        ) );
        if ( class_exists( 'WooCommerce' ) ) {
            register_sidebar( array(
                'name'          => esc_html__( 'WooCommerce Sidebar', 'caeliora' ),
                'id'            => 'sidebar-5',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
                'description'   => esc_html__( 'Widgets here will appear on your WooCommerce shop and product pages.', 'caeliora' ),
            ) );
        }
        $get_footer_widget_area = get_theme_mod( 'caeliora_footer_widget_columns', 3 );
        if ( $get_footer_widget_area >= 1 ) {
            register_sidebar( array(
                'name'          => esc_html__( 'Footer 1', 'caeliora' ),
                'id'            => 'sidebar-6',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
                'description'   => esc_html__( 'First Footer Widget Column', 'caeliora' ),
            ) );
        }
        if ( $get_footer_widget_area >= 2 ) {
            register_sidebar( array(
                'name'          => esc_html__( 'Footer 2', 'caeliora' ),
                'id'            => 'sidebar-7',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
                'description'   => esc_html__( 'Second Footer Widget Column', 'caeliora' ),
            ) );
        }
        if ( $get_footer_widget_area >= 3 ) {
            register_sidebar( array(
                'name'          => esc_html__( 'Footer 3', 'caeliora' ),
                'id'            => 'sidebar-8',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
                'description'   => esc_html__( 'Third Footer Widget Column', 'caeliora' ),
            ) );
        }
        if ( $get_footer_widget_area >= 4 ) {
            register_sidebar( array(
                'name'          => esc_html__( 'Footer 4', 'caeliora' ),
                'id'            => 'sidebar-9',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h4>',
                'description'   => esc_html__( 'Fourth Footer Widget Column', 'caeliora' ),
            ) );
        }
    }

}
/* Plugins setup */
function caeliora_ocdi_register_plugins( $plugins )
{
    $theme_plugins = array( array(
        'name'        => 'Smash Balloon Social Photo Feed',
        'slug'        => 'instagram-feed',
        'preselected' => true,
    ), array(
        'name'        => 'MC4WP: Mailchimp for WordPress',
        'slug'        => 'mailchimp-for-wp',
        'preselected' => true,
    ), array(
        'name'        => 'WooCommerce',
        'slug'        => 'woocommerce',
        'preselected' => false,
    ) );
    return array_merge( $plugins, $theme_plugins );
}

add_filter( 'ocdi/register_plugins', 'caeliora_ocdi_register_plugins' );
//////////////////////////////////////////////////////////////////
// COMMENTS LAYOUT
//////////////////////////////////////////////////////////////////
if ( !function_exists( 'caeliora_comments' ) ) {
    function caeliora_comments( $comment, $args, $depth )
    {
        $GLOBALS['comment'] = $comment;
        ?>
	<li <?php 
        comment_class();
        ?> id="comment-<?php 
        comment_ID();
        ?>">
		
		<div class="thecomment">
			
			<div class="comment-header">
				<div class="author-img">
					<?php 
        echo  get_avatar( $comment, $args['avatar_size'] ) ;
        ?>
				</div>
				<div class="comment-author">
					<h6 class="author"><?php 
        echo  get_comment_author_link() ;
        ?></h6>
					<span class="date"><?php 
        printf( esc_html__( '%1$s at %2$s', 'caeliora' ), get_comment_date(), get_comment_time() );
        ?></span>
				</div>
			</div>
			
			<div class="comment-text">
				<?php 
        
        if ( $comment->comment_approved == '0' ) {
            ?>
					<em><i class="icon-info-sign"></i> <?php 
            esc_html_e( 'Comment awaiting approval', 'caeliora' );
            ?></em>
					<br />
				<?php 
        }
        
        ?>
				<?php 
        comment_text();
        ?>
				<span class="reply">
					<i class="fa fa-reply"></i> <?php 
        comment_reply_link( array_merge( $args, array(
            'reply_text' => esc_html__( 'Reply', 'caeliora' ),
            'depth'      => $depth,
            'max_depth'  => $args['max_depth'],
        ) ), $comment->comment_ID );
        ?>
					<?php 
        edit_comment_link( esc_html__( 'Edit', 'caeliora' ) );
        ?>
				</span>
			</div>
					
		</div>
		
	</li>

	<?php 
    }

}
//////////////////////////////////////////////////////////////////
// Custom Read More
//////////////////////////////////////////////////////////////////
if ( !function_exists( 'caeliora_readmore_wrapper_link' ) ) {
    function caeliora_readmore_wrapper_link()
    {
        return '<div class="read-more-wrapper"><a href="' . esc_url( get_permalink() ) . '" class="read-more"><span class="more-text">' . esc_html__( 'Continue Reading', 'caeliora' ) . '</span><span class="more-line"></span></a></div>';
    }

}
add_filter( 'the_content_more_link', 'caeliora_readmore_wrapper_link' );
//////////////////////////////////////////////////////////////////
// Exclude Featured Posts from Post feed
//////////////////////////////////////////////////////////////////
// Create new query var for page blog template
if ( !function_exists( 'caeliora_query_vars' ) ) {
    function caeliora_query_vars( $query_vars )
    {
        $query_vars[] = 'caeliora_page_blog';
        return $query_vars;
    }

}
add_filter( 'query_vars', 'caeliora_query_vars' );

if ( get_theme_mod( 'caeliora_home_feat_enable', false ) == true && get_theme_mod( 'caeliora_home_feat_exclude', false ) == true && get_theme_mod( 'caeliora_home_feat_layout' ) != 'static-classic' && get_theme_mod( 'caeliora_home_feat_layout' ) != 'static-fullscreen' ) {
    function caeliora_get_feat_ids()
    {
        // Determine featured posts
        $feat_content_type = get_theme_mod( 'caeliora_home_feat_content_type', 'latest' );
        $feat_amount = get_theme_mod( 'caeliora_home_feat_amount', '3' );
        
        if ( $feat_content_type == 'latest' ) {
            $exclude_args = array(
                'posts_per_page' => $feat_amount,
            );
        } elseif ( $feat_content_type == 'category' ) {
            $exclude_args = array(
                'posts_per_page' => $feat_amount,
                'cat'            => get_theme_mod( 'caeliora_home_feat_content_category' ),
            );
        } elseif ( $feat_content_type == 'tag' ) {
            $exclude_args = array(
                'posts_per_page' => $feat_amount,
                'tag__in'        => get_theme_mod( 'caeliora_home_feat_content_tag' ),
            );
        } elseif ( $feat_content_type == 'specific' ) {
            $featured_ids = explode( ',', get_theme_mod( 'caeliora_home_feat_content_posts' ) );
            $exclude_args = array(
                'posts_per_page' => $feat_amount,
                'post_type'      => array( 'post', 'page' ),
                'post__in'       => $featured_ids,
            );
        }
        
        // Get the post ID's and put them in a array
        $getpost = get_posts( $exclude_args );
        foreach ( $getpost as $post ) {
            $exclude_posts[] = $post->ID;
        }
        return $exclude_posts;
    }
    
    //Modify main query to exclude posts
    function caeliora_exclude_feat_posts( $query )
    {
        if ( $query->is_home() && $query->is_main_query() ) {
            $query->query_vars['post__not_in'] = caeliora_get_feat_ids();
        }
    }
    
    add_action( 'pre_get_posts', 'caeliora_exclude_feat_posts' );
}

//////////////////////////////////////////////////////////////////
// Set different post count on 1st page
//////////////////////////////////////////////////////////////////

if ( get_theme_mod( 'caeliora_home_post_number_toggle', false ) == true ) {
    function caeliora_post_feed_offset( $query )
    {
        $ppp = get_option( 'posts_per_page' );
        $first_page_ppp = get_theme_mod( 'caeliora_home_post_number', 6 );
        $paged = $query->query_vars['paged'];
        if ( $query->is_home() && $query->is_main_query() ) {
            
            if ( !is_paged() ) {
                $query->set( 'posts_per_page', $first_page_ppp );
            } else {
                $paged_offset = $first_page_ppp + ($paged - 2) * $ppp;
                $query->set( 'offset', $paged_offset );
            }
        
        }
    }
    
    add_action( 'pre_get_posts', 'caeliora_post_feed_offset' );
    function caeliora_offset_pagination( $found_posts, $query )
    {
        $ppp = get_option( 'posts_per_page' );
        $first_page_ppp = get_theme_mod( 'caeliora_home_post_number', 6 );
        if ( $query->is_home() && $query->is_main_query() ) {
            
            if ( !is_paged() ) {
                return $first_page_ppp + ($found_posts - $first_page_ppp) * $first_page_ppp / $ppp;
            } else {
                return $found_posts - ($first_page_ppp - $ppp);
            }
        
        }
        return $found_posts;
    }
    
    add_filter(
        'found_posts',
        'caeliora_offset_pagination',
        10,
        2
    );
}

//////////////////////////////////////////////////////////////////
// Pagination
//////////////////////////////////////////////////////////////////
if ( !function_exists( 'caeliora_pagination' ) ) {
    function caeliora_pagination()
    {
        global  $wp_query ;
        $big = 999999999;
        echo  '<div class="caeliora-pagination">' ;
        echo  paginate_links( array(
            'prev_text' => esc_html__( 'Prev', 'caeliora' ),
            'next_text' => esc_html__( 'Next', 'caeliora' ),
            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format'    => '?paged=%#%',
            'current'   => max( 1, get_query_var( 'paged' ) ),
            'total'     => $wp_query->max_num_pages,
        ) ) ;
        echo  '</div>' ;
    }

}
//////////////////////////////////////////////////////////////////
// ADD SPANS AROUND COUNT TEXT IN CATEGORY WIDGETS
//////////////////////////////////////////////////////////////////
if ( !function_exists( 'caeliora_cat_count_span' ) ) {
    function caeliora_cat_count_span( $links )
    {
        $links = str_replace( '</a> (', '</a><span class="dt-post-count">', $links );
        $links = str_replace( ')', '</span>', $links );
        return $links;
    }

}
add_filter( 'wp_list_categories', 'caeliora_cat_count_span' );
if ( !function_exists( 'caeliora_archive_count_span' ) ) {
    function caeliora_archive_count_span( $links )
    {
        $links = str_replace( '</a>&nbsp;(', '</a><span class="dt-post-count">', $links );
        $links = str_replace( ')', '</span>', $links );
        return $links;
    }

}
add_filter( 'get_archives_link', 'caeliora_archive_count_span' );
//////////////////////////////////////////////////////////////////
// REMOVE DEFAULT WORDPRESS GALLERY CSS
//////////////////////////////////////////////////////////////////
add_filter( 'use_default_gallery_style', '__return_false' );
//////////////////////////////////////////////////////////////////
// HEX to RGBA
//////////////////////////////////////////////////////////////////
if ( !function_exists( 'caeliora_hex2rgba' ) ) {
    function caeliora_hex2rgba( $color, $opacity = false )
    {
        $default = 'rgb(0,0,0)';
        if ( empty($color) ) {
            return $default;
        }
        if ( $color[0] == '#' ) {
            $color = substr( $color, 1 );
        }
        
        if ( strlen( $color ) == 6 ) {
            $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
        } elseif ( strlen( $color ) == 3 ) {
            $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
        } else {
            return $default;
        }
        
        $rgb = array_map( 'hexdec', $hex );
        
        if ( $opacity ) {
            if ( abs( $opacity ) > 1 ) {
                $opacity = 1.0;
            }
            $output = 'rgba(' . implode( ",", $rgb ) . ',' . $opacity . ')';
        } else {
            $output = 'rgb(' . implode( ",", $rgb ) . ',0)';
        }
        
        return $output;
    }

}
//////////////////////////////////////////////////////////////////
// WooCommerce functions
//////////////////////////////////////////////////////////////////
if ( class_exists( 'WooCommerce' ) ) {
    add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function ( $size ) {
        return array(
            'width'  => 280,
            'height' => 280,
            'crop'   => 0,
        );
    } );
}
add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );
/* Change /page/1/ to /page/ in order to avoid 301 redirect */
add_filter( 'paginate_links', function ( $link ) {
    $pos = strpos( $link, 'page/1/' );
    if ( $pos !== false ) {
        $link = substr( $link, 0, $pos );
    }
    return $link;
} );
/*--------------------------------------------------------------
# Get page ID by title
--------------------------------------------------------------*/
function caeliora_get_page_by_title( $page_title, $post_type = 'page' )
{
    $posts = get_posts( array(
        'post_type'              => $post_type,
        'title'                  => $page_title,
        'post_status'            => 'all',
        'numberposts'            => 1,
        'update_post_term_cache' => false,
        'update_post_meta_cache' => false,
        'orderby'                => 'post_date ID',
        'order'                  => 'ASC',
    ) );
    
    if ( !empty($posts) ) {
        $post = $posts[0];
    } else {
        $post = null;
    }
    
    return $post;
}
