<?php
/*
* Get logo
*/
if ( !function_exists('caeliora_get_logo') ) {
function caeliora_get_logo() {

	$logo_type = get_theme_mod('caeliora_header_logo_type', 'logo_image');
	$logo = get_theme_mod('caeliora_header_logo_image', esc_url(get_template_directory_uri()) . '/img/logo.png');
	
	if($logo_type == 'logo_text') : ?>
		<?php if(is_home()) : ?>
		<a class="text-logo normal-text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html(get_theme_mod('caeliora_header_logo_text_name', esc_html__('Caeliora', 'caeliora'))); ?></a>
		<?php else : ?>
		<a class="text-logo normal-text" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html(get_theme_mod('caeliora_header_logo_text_name', esc_html__('Caeliora', 'caeliora'))); ?></a>
		<?php endif; ?>
	<?php else : ?>
	
	
<?php if( empty($logo['url']) ): ?>
			<a class="normal-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo.png" alt="<?php esc_attr(bloginfo( 'name' )); ?>" /></a>
		<?php else : ?>
			<a class="normal-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img height="<?php echo $logo['height']; ?>" width="<?php echo $logo['width']; ?>" src="<?php echo esc_url($logo['url']); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>" /></a>
		<?php endif; ?>
		
	<?php endif;
	
}
}

/*
* Get white logo
*/
if ( !function_exists('caeliora_get_logo_white') ) {
function caeliora_get_logo_white() {

	$logo_type = get_theme_mod('caeliora_header_logo_type', 'logo_image');
	$logo = get_theme_mod('caeliora_header_logo_image_white', esc_url(get_template_directory_uri()) . '/img/logo-white.png');
	
	if($logo_type == 'logo_text') : ?>
		
	<?php else : ?>
		
<?php if( empty($logo['url']) ): ?>
			<a class="white-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()) ?>/img/logo-white.png" alt="<?php esc_attr(bloginfo( 'name' )); ?>" /></a>
		<?php else : ?>
			<a class="white-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img height="<?php echo $logo['height']; ?>" width="<?php echo $logo['width']; ?>" src="<?php echo esc_url($logo['url']); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>" /></a>
		<?php endif; ?>
		
	<?php endif;
	
}
}

/*
* Get mobile logo
*/
if ( !function_exists('caeliora_get_mobile_logo') ) {
function caeliora_get_mobile_logo() {

	$logo = get_theme_mod('caeliora_header_mobile_logo_image'); ?>

	<?php if( !empty($logo['url']) ): ?>
		
		<a class="normal-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img height="<?php echo $logo['height']; ?>" width="<?php echo $logo['width']; ?>" src="<?php echo esc_url($logo['url']); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>" /></a>
		
	<?php endif;
	
}
}

/*
* Check if white logo is needed
*/
if ( !function_exists('caeliora_need_white_logo') ) {
function caeliora_need_white_logo() {
	
	if (!class_exists('ACF')) {
		if(get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'fullscreen' && get_theme_mod('caeliora_home_feat_enable', false) == true && is_home()) {
			return 'header-white';
		}
	} else {
	
		if(get_theme_mod('caeliora_home_feat_paginated', false) == true) {
		   if( get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'fullscreen' && is_home() && get_theme_mod('caeliora_home_feat_enable', false) == true ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'classic' && is_home() && get_theme_mod('caeliora_home_feat_enable', false) == true && get_theme_mod('caeliora_home_feat_slider_width') != 'content-width' ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'static-classic' && is_home() && get_theme_mod('caeliora_home_feat_enable', false) == true && get_theme_mod('caeliora_home_feat_slider_width') != 'content-width' ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'split-fullscreen' && is_home() && get_theme_mod('caeliora_home_feat_enable', false) == true ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'static-fullscreen' && is_home() && get_theme_mod('caeliora_home_feat_enable', false) == true) {
			return 'header-white';
		   }
		   
		} else {
		   if( get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'fullscreen' && is_home() && !is_paged() && get_theme_mod('caeliora_home_feat_enable', false) == true ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'classic' && is_home() && !is_paged() && get_theme_mod('caeliora_home_feat_enable', false) == true && get_theme_mod('caeliora_home_feat_slider_width') != 'content-width' ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'static-classic' && is_home() && !is_paged() && get_theme_mod('caeliora_home_feat_enable', false) == true && get_theme_mod('caeliora_home_feat_slider_width') != 'content-width' ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'split-fullscreen' && is_home() && !is_paged() && get_theme_mod('caeliora_home_feat_enable', false) == true ||
		   get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'none') == 'static-fullscreen' && is_home() && !is_paged() && get_theme_mod('caeliora_home_feat_enable', false) == true) {
			return 'header-white';
		   }
		}
		$term = get_queried_object();
		if(class_exists('ACF') && get_field('caeliora_acf_page_feat_fullscreen_overlay') == true && get_field('caeliora_acf_page_feat_layout') == 'fullscreen' && is_page() && !is_paged() && caeliora_get_page_layout() == 'layout1' && get_field('caeliora_acf_page_featured_enable') ||
		   class_exists('ACF') && get_field('caeliora_acf_page_feat_fullscreen_overlay') == true && get_field('caeliora_acf_page_feat_layout') == 'classic' && is_page() && !is_paged() && caeliora_get_page_layout() == 'layout1' && get_field('caeliora_acf_page_featured_enable') && get_field('caeliora_acf_page_feat_slider_width') != 'content-width' || 
		   class_exists('ACF') && get_field('caeliora_acf_page_feat_fullscreen_overlay') == true && get_field('caeliora_acf_page_feat_layout') == 'split-fullscreen' && is_page() && !is_paged() && caeliora_get_page_layout() == 'layout1' && get_field('caeliora_acf_page_featured_enable') ||
		   class_exists('ACF') && get_field('caeliora_acf_page_feat_fullscreen_overlay') == true && get_field('caeliora_acf_page_feat_layout') == 'static-fullscreen' && is_page() && !is_paged() && caeliora_get_page_layout() == 'layout1' && get_field('caeliora_acf_page_featured_enable') ||
		   class_exists('ACF') && get_field('caeliora_acf_page_feat_fullscreen_overlay') == true && get_field('caeliora_acf_page_feat_layout') == 'static-classic' && is_page() && !is_paged() && caeliora_get_page_layout() == 'layout1' && get_field('caeliora_acf_page_featured_enable') && get_field('caeliora_acf_page_feat_slider_width') != 'content-width' ||
		   class_exists('ACF') && get_field('caeliora_acf_page_extend_image') == true && is_page() && get_field('caeliora_acf_page_layout') == 'layout2' ||
		   class_exists('ACF') && get_field('caeliora_acf_page_extend_image') == true && is_page() && get_field('caeliora_acf_page_layout') == 'layout3' ||
		   class_exists('ACF') && get_field('caeliora_acf_post_extend_image') == true && is_single() && get_field('caeliora_acf_post_layout') == 'layout3' ||
		   class_exists('ACF') && get_field('caeliora_acf_post_extend_image') == true && is_single() && get_field('caeliora_acf_post_layout') == 'layout4' && get_field('caeliora_acf_post_title_pos') != 'above' ||
		   is_category() && get_theme_mod('caeliora_archivebox_extend') == 'yes' ||
		   class_exists('ACF') && is_category() && get_field('caeliora_acf_category_header_extend', $term) == 'yes'){
		   return 'header-white';
		}
	}
	
}
}

/*
* Get Burger-Menu
*/
if ( !function_exists('caeliora_get_burger_menu') ) {
function caeliora_get_burger_menu() { ?>
	
	<span class="menu-icon">
		<button aria-label="<?php esc_attr_e('Open menu', 'caeliora'); ?>" class="menu-toggle"></button>
		<?php if(get_theme_mod('caeliora_header_show_menu_label', true)) : ?><span><?php echo esc_html(get_theme_mod('caeliora_header_menu_label', esc_html__('Menu', 'caeliora'))); ?></span><?php endif; ?>
	</span>
	
	<div id="mobile-navigation">
		<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
	</div>
	
	<div id="caeliora-mobile-header">
		
		<a href="#" aria-label="<?php esc_attr_e('Close menu', 'caeliora'); ?>" class="close-mobile-menu"></a>
		
		<?php 
		if(get_theme_mod('caeliora_mobile_menu_show_logo', true)) {
			$mobile_logo = get_theme_mod('caeliora_header_mobile_logo_image');
			if(empty($mobile_logo['url'])) {
				caeliora_get_logo();
			} else {
				caeliora_get_mobile_logo();
			}
		}
		?>
		
	</div>
	
	<div id="caeliora-mobile-footer">
		<?php
		if(get_theme_mod('caeliora_mobile_menu_show_social', true)) {
			if(function_exists('caeliora_get_social_icons')) { caeliora_get_social_icons('header'); } 
		}
		
		if(get_theme_mod('caeliora_mobile_menu_show_search', true)) {
			caeliora_get_search(); 
		}
		
		caeliora_get_woo_cart();
		?>
	</div>
	
<?php }
}

/*
* Get Mobile Header
*/
if ( !function_exists('caeliora_get_mobile_header') ) {
function caeliora_get_mobile_header() { ?>
	
	<div id="mobile-header-wrapper">
		<header id="mobile-menu" class="mobile-header">
			<?php
			
				caeliora_get_burger_menu();
				$mobile_logo = get_theme_mod('caeliora_header_mobile_logo_image');
				if(empty($mobile_logo['url'])) {
					caeliora_get_logo();
				} else {
					caeliora_get_mobile_logo();
				}
				
			?>
			
			<div class="top-misc">
				<?php caeliora_get_woo_cart(); ?>
				<?php caeliora_get_search(); ?>
			</div>
			
		</header>
	</div>
	
<?php }
}

/*
* Get header search
*/
if ( !function_exists('caeliora_get_search') ) {
function caeliora_get_search() { ?>
	<?php if(get_theme_mod('caeliora_header_show_search', true)) : ?>
	<div class="header-search-wrap <?php if(!class_exists('WooCommerce')) : ?>no-cart<?php endif; ?>">
		<a href="#search" aria-label="<?php esc_attr_e('Search', 'caeliora'); ?>" class="toggle-search-box">
			<i class="fa fa-search"></i>
		</a>
	</div>
	<?php endif; ?>
<?php }
}

/*
* Get header search overlay
*/
if ( !function_exists('caeliora_search_overlay') ) {
function caeliora_search_overlay(){
?>
<div id="caeliora-search-overlay">
	<button type="button" class="close">&times;</button>
	<form role="search" class="form-search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
		<input spellcheck="false" autocomplete="off" type="text" value="" name="s" placeholder="<?php esc_attr_e('Search the site...', 'caeliora'); ?>" />
	</form>
</div>
<?php
}
}
if(is_admin()) { } else { add_action('wp_footer','caeliora_search_overlay'); }

/*
* Get Woocommerce shop cart
*/
if ( !function_exists('caeliora_get_woo_cart') ) {
function caeliora_get_woo_cart() {
if ( class_exists( 'WooCommerce' ) ) {
if(get_theme_mod('caeliora_woo_cart', true)) { ?>
<div class="dt-shopping-cart">
<?php $count = WC()->cart->cart_contents_count; ?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'caeliora' ); ?>"><?php if ( $count >= 0 ) echo '<span class="dt-count">' . esc_html($count) . '</span>'; ?></a>
</div>
<?php
}
}
}
}

/*
* Check featured area
*/
if ( !function_exists('caeliora_header_check_featured') ) {
function caeliora_header_check_featured() {
	
	if(is_home() && get_theme_mod('caeliora_home_feat_enable', false)) {
		$featured_area = 'has-slider';
	} elseif(class_exists('ACF') && is_page() && get_field('caeliora_acf_page_featured_enable')) {
		$featured_area = 'has-slider';
	} else {
		$featured_area = 'no-slider';
	}
	
	return $featured_area;
	
}
}

/*
* Add body class
*/
add_filter( 'body_class', 'caeliora_header_class_body' );
if ( !function_exists('caeliora_header_class_body') ) {
function caeliora_header_class_body( $classes ) {

	$classes[] = 'is-header-' . get_theme_mod('caeliora_header_layout', 'layout1');
	
	return $classes;
 
}
}