<?php

/**
 * Theme admin functions.
 *
 * @package Cealiora
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/**
* Add admin menu
*
* @since 1.0.0
*/
function caeliora_welcome_menu()
{
    add_menu_page(
        esc_html__( 'Caeliora Welcome', 'caeliora' ),
        esc_html__( 'Caeliora Theme', 'caeliora' ),
        'manage_options',
        'caeliora-theme',
        'caeliora_admin_page_content',
        'dashicons-sos',
        3
    );
}

add_action( 'admin_menu', 'caeliora_welcome_menu' );
/**
 * Theme admin scripts and styles.
 */
function caeliora_welcome_style( $hook )
{
    if ( $hook != 'toplevel_page_caeliora-theme' ) {
        return;
    }
    wp_enqueue_style(
        'caeliora_custom_wp_admin_css',
        get_template_directory_uri() . '/admin/caeliora-welcome.css',
        false,
        CAELIORA_VERSION
    );
}

add_action( 'admin_enqueue_scripts', 'caeliora_welcome_style' );
/**
* Add admin page content
*
* @since 1.0.0
*/
function caeliora_admin_page_content()
{
    $theme = wp_get_theme();
    $theme_name = 'Caeliora';
    $active_theme_name = strtolower( preg_replace( '#[^a-zA-Z]#', '', $theme->template ) );
    $urls = array(
        'theme-url'       => 'https://caeliora.deothemes.com/',
        'docs'            => 'https://docs.deothemes.com/caeliora',
        'video-tutorials' => 'https://www.youtube.com/watch?v=KPaIODsG77o&list=PLaPNmyRO67T2JKpCvJ8utEpQ1rhrKnUo1&index=1',
    );
    $videos = array(
        'theme-installation' => array(
        'links' => array( array(
        'link_url'     => 'https://www.youtube.com/watch?v=KPaIODsG77o&list=PLaPNmyRO67T2JKpCvJ8utEpQ1rhrKnUo1&index=1',
        'link_text'    => esc_html__( 'Theme Installation', 'caeliora' ),
        'link_img_src' => CAELIORA_URI . '/admin/videos/caeliora_video_demo_import.jpg',
    ) ),
    ),
    );
    $features = array(
        'demos'                     => array(
        'title' => esc_html__( 'Home Pages', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '1', 'caeliora' ),
        'pro'   => esc_html__( '10', 'caeliora' ),
    ),
        'style-variations'          => array(
        'title' => esc_html__( 'Style Variations', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '1', 'caeliora' ),
        'pro'   => esc_html__( '8', 'caeliora' ),
    ),
        'demo-import'               => array(
        'title' => esc_html__( 'One Click Demo Import', 'caeliora' ),
        'url'   => '',
        'free'  => '<i class="caeliora-list-item-icon caeliora-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
        'pro'   => '<i class="caeliora-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
    ),
        'header-layouts'            => array(
        'title' => esc_html__( 'Header Layouts', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '1', 'caeliora' ),
        'pro'   => esc_html__( '4', 'caeliora' ),
    ),
        'featured-area-layouts'     => array(
        'title' => esc_html__( 'Featured Area Layouts', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '2', 'caeliora' ),
        'pro'   => esc_html__( '8', 'caeliora' ),
    ),
        'post-grid-layouts'         => array(
        'title' => esc_html__( 'Post Grid Layouts', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '2', 'caeliora' ),
        'pro'   => esc_html__( '5', 'caeliora' ),
    ),
        'promo-boxes-layouts'       => array(
        'title' => esc_html__( 'Promo Boxes Layouts', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '1', 'caeliora' ),
        'pro'   => esc_html__( '2', 'caeliora' ),
    ),
        'single-post-layouts'       => array(
        'title' => esc_html__( 'Single Post Layouts', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '1', 'caeliora' ),
        'pro'   => esc_html__( '8', 'caeliora' ),
    ),
        'custom-widgets'            => array(
        'title' => esc_html__( 'Custom Widgets', 'caeliora' ),
        'url'   => '',
        'free'  => esc_html__( '3', 'caeliora' ),
        'pro'   => esc_html__( '5', 'caeliora' ),
    ),
        'posts-pages-customization' => array(
        'title' => esc_html__( 'Posts and pages customization settings', 'caeliora' ),
        'url'   => '',
        'free'  => '<i class="caeliora-list-item-icon caeliora-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
        'pro'   => '<i class="caeliora-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
    ),
        '24-7-support'              => array(
        'title' => esc_html__( 'Priority email support', 'caeliora' ),
        'url'   => '',
        'free'  => '<i class="caeliora-list-item-icon caeliora-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
        'pro'   => '<i class="caeliora-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
    ),
        'social-media'              => array(
        'title' => esc_html__( 'Social Media Icons', 'caeliora' ),
        'url'   => '',
        'free'  => '<i class="caeliora-list-item-icon caeliora-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
        'pro'   => '<i class="caeliora-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
    ),
        'acf-pro'                   => array(
        'title' => esc_html__( 'ACF Pro integrated', 'caeliora' ),
        'url'   => '',
        'free'  => '<i class="caeliora-list-item-icon caeliora-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
        'pro'   => '<i class="caeliora-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
    ),
    );
    $demos = array(
        'home-1' => array(
        'title'   => esc_html__( 'Main', 'caeliora' ),
        'url'     => $urls['theme-url'],
        'preview' => CAELIORA_URI . '/admin/demo-previews/main_preview.jpg',
    ),
        'home-2' => array(
        'title'   => esc_html__( 'Classic', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'classic',
        'preview' => CAELIORA_URI . '/admin/demo-previews/classic_preview.jpg',
    ),
        'home-3' => array(
        'title'   => esc_html__( 'Minimal', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'minimal',
        'preview' => CAELIORA_URI . '/admin/demo-previews/minimal_preview.jpg',
    ),
        'home-4' => array(
        'title'   => esc_html__( 'Travel', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'travel',
        'preview' => CAELIORA_URI . '/admin/demo-previews/travel_preview.jpg',
    ),
        'home-5' => array(
        'title'   => esc_html__( 'Recipes', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'recipes',
        'preview' => CAELIORA_URI . '/admin/demo-previews/recipes_preview.jpg',
    ),
        'home-6' => array(
        'title'   => esc_html__( 'Lifestyle', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'lifestyle',
        'preview' => CAELIORA_URI . '/admin/demo-previews/lifestyle_preview.jpg',
    ),
        'home-7' => array(
        'title'   => esc_html__( 'Lifestyle 2', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'lifestyle2',
        'preview' => CAELIORA_URI . '/admin/demo-previews/lifestyle2_preview.jpg',
    ),
        'home-8' => array(
        'title'   => esc_html__( 'Interior Design', 'caeliora' ),
        'url'     => $urls['theme-url'] . 'interior-design',
        'preview' => CAELIORA_URI . '/admin/demo-previews/interior_preview.jpg',
    ),
    );
    ?>
	<div class="caeliora-page-header">
		<div class="caeliora-page-header__container">
			<div class="caeliora-page-header__branding">
				<a href="<?php 
    echo  esc_url( $urls['theme-url'] ) ;
    ?>" target="_blank" rel="noopener" >
					<img src="<?php 
    echo  esc_url( CAELIORA_URI . '/img/logo.png' ) ;
    ?>" class="caeliora-page-header__logo" alt="<?php 
    echo  esc_attr__( 'Caeliora', 'caeliora' ) ;
    ?>" />
				</a>
				<span class="caeliora-theme-version"><?php 
    echo  esc_html( CAELIORA_VERSION ) ;
    ?></span>
			</div>
			<div class="caeliora-page-header__tagline">
				<span  class="caeliora-page-header__tagline-text">				
					<?php 
    echo  esc_html__( 'Made by ', 'caeliora' ) ;
    ?>
					<a href="https://deothemes.com/"><?php 
    echo  esc_html__( 'DeoThemes', 'caeliora' ) ;
    ?></a>						
				</span>					
			</div>				
		</div>
	</div>

	<div class="wrap caeliora-container">
		<div class="caeliora-grid">
			<div class="caeliora-grid-content">
				<div class="caeliora-body">

					<h1 class="caeliora-title"><?php 
    esc_html_e( 'Getting Started', 'caeliora' );
    ?></h1>
					<p class="caeliora-intro-text">
						<?php 
    echo  esc_html__( 'Caeliora is now installed and ready to use. Get ready to build something beautiful. To get started check the links below. We hope you enjoy it!', 'caeliora' ) ;
    ?>
					</p>
					
					<div class="welcome-wrap">
						
						<div class="welcome-column">
							<h2><?php 
    esc_html_e( '1. Install Plugins', 'caeliora' );
    ?></h2>
							<p><?php 
    esc_html_e( 'Install & activate Caeliora\'s required and recommended plugins to ensure it\'s functioning properly.', 'caeliora' );
    ?></p>
							<p><strong><?php 
    esc_html_e( 'Go to Appearance > Install Plugins', 'caeliora' );
    ?></strong></p>
						</div>
						
						<div class="welcome-column">
							<h2><?php 
    esc_html_e( '2. Import Demo (optional)', 'caeliora' );
    ?></h2>
							<p><?php 
    esc_html_e( 'Import one of Caeliora\'s many pre-built demos to get your site looking flashy in a snap!', 'caeliora' );
    ?></p>
							<?php 
    
    if ( class_exists( 'OCDI_Plugin' ) ) {
        ?>
								<a href="<?php 
        echo  esc_url( admin_url( 'themes.php?page=one-click-demo-import' ) ) ;
        ?>" class="button button-primary">
									<?php 
        echo  esc_html__( 'Import demo content', 'caeliora' ) ;
        ?>
								</a>
							<?php 
    } else {
        ?>							
								<p><strong><?php 
        esc_html_e( 'Go to Appearance > Import Demo Data', 'caeliora' );
        ?></strong></p>
							<?php 
    }
    
    ?>
							
						</div>
						
						<div class="welcome-column">
							<h2><?php 
    esc_html_e( '3. Start Customizing', 'caeliora' );
    ?></h2>
							<p><?php 
    esc_html_e( 'Now you\'re ready to begin customizing the appearance of your site. Let\'s get started.', 'caeliora' );
    ?></p>
							<a href="<?php 
    echo  esc_url( admin_url( 'customize.php' ) ) ;
    ?>" class="button button-primary"><?php 
    esc_html_e( 'Start Customizing', 'caeliora' );
    ?></a>
						</div>
						
					</div>

					<!-- Pro Demos -->
					<section class="caeliora-section">
						<h2 class="caeliora-heading"><?php 
    echo  esc_html( $theme_name ) . esc_html__( ' Pro Predefined Demos', 'caeliora' ) ;
    ?></h2>
						<ul class="caeliora-pro-demos">
							<?php 
    foreach ( $demos as $demo ) {
        ?>
								<li class="caeliora-pro-demos__item">
									<a href="<?php 
        echo  esc_url( $demo['url'] ) ;
        ?>" target="_blank" rel="noopener noreferrer nofollow" <?php 
        the_title_attribute( $demo['title'] );
        ?>>
										<img src="<?php 
        echo  esc_url( $demo['preview'] ) ;
        ?>" alt="<?php 
        echo  esc_attr( $demo['title'] ) ;
        ?>">
										<h2 class="caeliora-pro-demos__item-title"><?php 
        echo  esc_html( $demo['title'] ) ;
        ?></h2>
									</a>
								</li>
							<?php 
    }
    ?>
						</ul>
					</section>

					<!-- Comparison -->
					<section class="caeliora-section">
						<h2 class="caeliora-heading"><?php 
    echo  esc_html__( 'Free Vs Pro', 'caeliora' ) ;
    ?></h2>
						<table class="caeliora-comparison widefat striped table-view-list">
							<thead>
								<tr>
									<th><span><?php 
    echo  esc_html__( 'Features', 'caeliora' ) ;
    ?></span></th>
									<th><span><?php 
    printf( esc_html__( '%s Free', 'caeliora' ), $theme_name );
    ?></span></th>
									<th><span><?php 
    printf( esc_html__( '%s Pro', 'caeliora' ), $theme_name );
    ?></span></th>
								</tr>
							</thead>
							<tbody>
								<?php 
    foreach ( $features as $feature ) {
        ?>
									<tr>
										<td><?php 
        echo  esc_html( $feature['title'] ) ;
        ?></td>
										<td><?php 
        echo  wp_kses( $feature['free'], array(
            'i' => array(
            'class'       => array(),
            'aria-hidden' => array(),
        ),
        ) ) ;
        ?></td>
										<td><?php 
        echo  wp_kses( $feature['pro'], array(
            'i' => array(
            'class'       => array(),
            'aria-hidden' => array(),
        ),
        ) ) ;
        ?></td>
									</tr>
								<?php 
    }
    ?>
							</tbody>
						</table>
						<a href="<?php 
    echo  esc_url( caeliora_fs()->get_upgrade_url() ) ;
    ?>" class="button button-primary button-hero">
							<span><?php 
    echo  esc_html__( 'Upgrade Now', 'caeliora' ) ;
    ?></span>
						</a>
					</section>

				</div> <!-- .body -->
			</div> <!-- .content -->

			<aside class="caeliora-grid-sidebar">
				<div class="caeliora-grid-sidebar-widget-area">

					<div class="caeliora-widget">
						<h2 class="caeliora-widget-title"><?php 
    echo  esc_html__( 'Useful Links', 'caeliora' ) ;
    ?></h2>
						<ul class="caeliora-useful-links">
							<li>
								<a href="https://docs.deothemes.com/caeliora" target="_blank"><?php 
    echo  esc_html__( 'Knowledge Base', 'caeliora' ) ;
    ?></a>
							</li>

							<?php 
    ?>

						</ul>
					</div>

					<div class="caeliora-widget caeliora-widget-video-tutorials">
						<h2 class="caeliora-widget-title"><?php 
    esc_html_e( 'Video Tutorials', 'caeliora' );
    ?></h2>
						<ul class="caeliora-video-tutorials">
							<?php 
    foreach ( (array) $videos as $video_items => $video ) {
        echo  '<li class="caeliora-video-tutorials__item">' ;
        foreach ( $video['links'] as $key => $link ) {
            echo  '<a href="' . esc_url( $link['link_url'] ) . '" class="caeliora-video-tutorials__url" target="_blank" rel="noopener">' ;
            echo  '<img src="' . esc_url( $link['link_img_src'] ) . '" alt="' . esc_html( $link['link_text'] ) . '" class="caeliora-video-tutorials__img" />' ;
            echo  '<span class="caeliora-video-tutorials__label">' . esc_html( $link['link_text'] ) . '</span>' ;
            echo  '</a>' ;
        }
        echo  '</li>' ;
    }
    ?>
						</ul>
					</div>					

				</div>					
			</aside>	
		
		</div> <!-- .grid -->		
	</div> <!-- .wrap -->
	<?php 
}

/**
* Adds an admin notice upon successful activation.
*/
function caeliora_activation_admin_notice()
{
    global  $current_user ;
    global  $current_screen ;
    // Don't show on Caeliora main admin page
    if ( $current_screen->id === 'appearance_page_caeliora-theme' || $current_screen->id === 'toplevel_page_caeliora-theme' ) {
        return;
    }
    
    if ( is_admin() ) {
        $current_theme = wp_get_theme();
        $welcome_dismissed = get_user_meta( $current_user->ID, 'caeliora_wizard_admin_notice' );
        if ( ($current_theme->get( 'Name' ) == "Caeliora" || $current_theme->get( 'Name' ) == "Caeliora Pro") && !$welcome_dismissed ) {
            add_action( 'admin_notices', 'caeliora_wizard_admin_notice', 99 );
        }
        wp_enqueue_style( 'caeliora-wizard-notice-css', get_template_directory_uri() . '/admin/wizard-notice.css' );
    }

}

add_action( 'current_screen', 'caeliora_activation_admin_notice' );
/**
* Adds a button to dismiss the notice
*/
function caeliora_dismiss_wizard_notice()
{
    global  $current_user ;
    $user_id = $current_user->ID;
    if ( isset( $_GET['caeliora_wizard_dismiss'] ) && $_GET['caeliora_wizard_dismiss'] == '1' ) {
        add_user_meta(
            $user_id,
            'caeliora_wizard_admin_notice',
            'true',
            true
        );
    }
}

add_action( 'admin_init', 'caeliora_dismiss_wizard_notice', 1 );
/**
* Display an admin notice linking to the wizard screen
*/
function caeliora_wizard_admin_notice()
{
    
    if ( current_user_can( 'customize' ) ) {
        ?>
		<div class="notice theme-notice">
			<div class="theme-notice-logo">
				<img src="<?php 
        echo  esc_url( CAELIORA_URI . '/img/logo-white.png' ) ;
        ?>" alt="<?php 
        esc_attr_e( 'Caeliora', 'caeliora' );
        ?>">
			</div>
			<div class="theme-notice-message wp-theme-fresh">
				<h2><?php 
        esc_html_e( 'Thank you for choosing Caeliora!', 'caeliora' );
        ?></h2>
				<?php 
        
        if ( class_exists( 'Merlin' ) ) {
            ?>
					<p class="about-description"><?php 
            esc_html_e( 'Run the Setup Wizard to configure your new theme and begin customizing your site.', 'caeliora' );
            ?></p>
				<?php 
        } else {
            ?>
					<p class="about-description"><?php 
            esc_html_e( 'Follow the steps to configure your new theme and begin customizing your site.', 'caeliora' );
            ?></p>
				<?php 
        }
        
        ?>
			</div>
			<div class="theme-notice-cta">
				<?php 
        
        if ( class_exists( 'Merlin' ) ) {
            ?>
					<a href="<?php 
            echo  esc_url( admin_url( 'themes.php?page=merlin' ) ) ;
            ?>" class="button button-primary button-hero" style="text-decoration: none;"><?php 
            esc_html_e( 'Run Setup Wizard', 'caeliora' );
            ?></a>
				<?php 
        } else {
            ?>
					<a href="<?php 
            echo  esc_url( admin_url( 'admin.php?page=caeliora-theme' ) ) ;
            ?>" class="button button-primary button-hero" style="text-decoration: none;"><?php 
            esc_html_e( 'Setup Instructions', 'caeliora' );
            ?></a>
				<?php 
        }
        
        ?>
				<a href="<?php 
        echo  esc_url( wp_nonce_url( add_query_arg( 'caeliora_wizard_dismiss', '1' ) ) ) ;
        ?>" class="notice-dismiss" target="_parent"></a>
			</div>
		</div>
	<?php 
    }

}

/**
* Migrate Sitka theme settings on install
*/
function caeliora_sitka_theme_migration()
{
    
    if ( 1 != get_option( 'caeliora_sitka_migration_compete' ) ) {
        $settings = get_option( "theme_mods_sitka" );
        $new_settings = array();
        
        if ( $settings ) {
            foreach ( $settings as $key => $value ) {
                $new_key = str_replace( 'sitka', 'caeliora', $key );
                $new_settings[$new_key] = $value;
            }
            update_option( 'theme_mods_caeliora-pro', $new_settings );
        }
        
        update_option( 'caeliora_sitka_migration_compete', 1 );
    }

}

add_action( 'after_setup_theme', 'caeliora_sitka_theme_migration' );