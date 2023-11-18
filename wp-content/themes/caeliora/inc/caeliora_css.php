<?php
if ( !function_exists('caeliora_head_css') ) {
function caeliora_head_css() {
    ?>
    <style type="text/css">
		
		<?php if(caeliora_need_white_logo() == 'header-white') : ?>
			.sticky-wrapper:not(.sticky) #header { background:none; box-shadow:none; }
			@media screen and (min-width:1200px) {
			#inner-wrapper .feat-area.fullscreen .feat-item { height:100vh; }
			}
			<?php if(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout1') : ?>
				.feat-area.fullscreen, .feat-area.classic-slider.full-width { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout1_height', '90') ); ?>px; }
			<?php elseif(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout2') : ?>
				.feat-area.fullscreen, .feat-area.classic-slider.full-width { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout2_height', '110') ); ?>px; }
			<?php endif; ?>
			
			<?php if(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout1' && class_exists('ACF') && is_page() && get_field('caeliora_acf_page_extend_image') && get_field('caeliora_acf_page_layout') == 'layout2' || get_field('caeliora_acf_page_layout') == 'layout3') : ?>
				@media screen and (min-width:1200px) {
				.fullwidth-image { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout1_height', '90') ); ?>px; }
				}
			<?php elseif(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout2' && class_exists('ACF') && is_page() && get_field('caeliora_acf_page_extend_image') && get_field('caeliora_acf_page_layout') == 'layout2' || get_field('caeliora_acf_page_layout') == 'layout3') : ?>
				@media screen and (min-width:1200px) {
				.fullwidth-image { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout2_height', '110') ); ?>px; }
				}
			<?php endif; ?>
			
			<?php if(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout1' && class_exists('ACF') && is_single() && get_field('caeliora_acf_post_extend_image') && get_field('caeliora_acf_post_layout') == 'layout3' || get_field('caeliora_acf_post_layout') == 'layout4') : ?>
				@media screen and (min-width:1200px) {
				.fullwidth-image { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout1_height', '90') ); ?>px; }
				}
			<?php elseif(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout2' && class_exists('ACF') && is_single() && get_field('caeliora_acf_post_extend_image') && get_field('caeliora_acf_post_layout') == 'layout3' || get_field('caeliora_acf_post_layout') == 'layout4') : ?>
				@media screen and (min-width:1200px) {
				.fullwidth-image { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout2_height', '110') ); ?>px; }
				}
			<?php endif; ?>
			
			<?php $term = get_queried_object(); if(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout1' && is_category() && get_theme_mod('caeliora_archivebox_extend') == 'yes' || get_theme_mod('caeliora_header_layout', 'layout1') == 'layout1' && class_exists('ACF') && is_category() && get_field('caeliora_acf_category_header_extend', $term) == 'yes') : ?>
				<?php $box_padding = get_theme_mod('caeliora_header_layout1_height', '90') / 2; ?>
				@media screen and (min-width:1200px) {
				.archive-box { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout1_height', '90') ); ?>px; }
				.archive-box { padding-top:<?php echo esc_html( $box_padding ); ?>px; }
				}
			<?php elseif(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout2' && is_category() && get_theme_mod('caeliora_archivebox_extend') == 'yes' || get_theme_mod('caeliora_header_layout', 'layout1') == 'layout2' && class_exists('ACF') && is_category() && get_field('caeliora_acf_category_header_extend', $term) == 'yes') : ?>
				<?php $box_padding = get_theme_mod('caeliora_header_layout2_height', '110') / 2; ?>
				@media screen and (min-width:1200px) {
				.archive-box { margin-top:-<?php echo esc_html( get_theme_mod('caeliora_header_layout2_height', '110') ); ?>px; }
				.archive-box { padding-top:<?php echo esc_html( $box_padding ); ?>px; }
				}
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if(get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true && get_theme_mod('caeliora_home_feat_layout', 'classic') == 'fullscreen' && is_home()) : ?>
			<?php if(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout1') : ?>
				.feat-link { top:<?php echo esc_html( get_theme_mod('caeliora_header_layout1_height', '90') ); ?>px; }
			<?php elseif(get_theme_mod('caeliora_header_layout', 'layout1') == 'layout2') : ?>
				.feat-link { top:<?php echo esc_html( get_theme_mod('caeliora_header_layout2_height', '110') ); ?>px; }
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(is_page() && class_exists('ACF') && get_field('caeliora_acf_page_promo_enable')) : ?>
			.promo-wrap.promo-grid { grid-auto-rows:<?php echo esc_html( get_field('caeliora_acf_page_promo_height') ); ?>px; }
			.promo-wrap.promo-mixed { grid-auto-rows:<?php echo esc_html( get_field('caeliora_acf_page_promo_height') ); ?>px <?php echo esc_html( get_field('caeliora_acf_page_promo_height') ); ?>px; }
			<?php if(get_field('caeliora_acf_page_promo_border') == false) : ?>.promo-overlay {border:none;}<?php endif; ?>
			
		<?php elseif(is_home()) : ?>
			<?php if(get_theme_mod('caeliora_home_promo_border', true) == false) : ?>.promo-overlay {border:none;}<?php endif; ?>
		<?php endif; ?>
		
		<?php if(is_page() && class_exists('ACF')) : ?>
			<?php if(get_field('caeliora_acf_page_featured_enable')) : ?>
			<?php
				$bg_trans = get_field('caeliora_acf_page_feat_overlay_trans');
				$bg_trans = isset($bg_trans) ? $bg_trans : 0.2;
			
				$bg_color = get_field('caeliora_acf_page_feat_overlay_color');
			?>
			#inner-wrapper .feat-area:not(.caeliora-carousel) .feat-shadow { background:<?php echo esc_html( caeliora_hex2rgba( $bg_color, $bg_trans ) ); ?>;}
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(is_page() && class_exists('ACF')) : ?>
			<?php if(get_field('caeliora_acf_page_featured_enable')) : ?>
				<?php if(get_field('caeliora_acf_page_feat_layout') == 'static-classic') : ?>
					.feat-area.static-slider.classic-slider .post-header { max-width:<?php echo esc_html( get_field('caeliora_acf_page_feat_static_classic_width') ); ?>%; }
					.feat-area.static-slider.classic-slider .static-text { max-width:<?php echo esc_html( get_field('caeliora_acf_page_feat_static_classic_text_width') ); ?>%; }
				<?php elseif(get_field('caeliora_acf_page_feat_layout') == 'static-fullscreen') : ?>
					.feat-area.static-slider.fullscreen .post-header { max-width:<?php echo esc_html( get_field('caeliora_acf_page_feat_static_fullscreen_width') ); ?>%; }
					.feat-area.static-slider.fullscreen .static-text { max-width:<?php echo esc_html( get_field('caeliora_acf_page_feat_static_fullscreen_text_width') ); ?>%; }
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(get_theme_mod('caeliora_newsletter_image')) : ?>
		.news-img { background-image:url(<?php echo esc_html( get_theme_mod('caeliora_newsletter_image') ); ?>); height:<?php echo esc_html( get_theme_mod('caeliora_newsletter_image_height', 150) ); ?>px; }
		<?php endif; ?>
		
		<?php if(is_category() && class_exists('ACF')) : ?>
			<?php 
				$term = get_queried_object(); 
				$cat_bg_trans = get_field('caeliora_acf_category_img_overlay_trans', $term);
				$cat_bg_trans = isset($cat_bg_trans) ? $cat_bg_trans : 0.1;
			
				$cat_bg_color = get_field('caeliora_acf_category_img_overlay', $term);
			?>
			<?php if(get_field('caeliora_acf_category_img', $term) && get_field('caeliora_acf_category_type', $term) == 'image') : ?>
				.archive-box { background-repeat:<?php echo esc_attr(get_field('caeliora_acf_category_img_repeat', $term)); ?>;}
				.archive-box { background-position:<?php echo esc_attr(get_field('caeliora_acf_category_img_position', $term)); ?>;}
				.archive-box { background-size:<?php echo esc_attr(get_field('caeliora_acf_category_img_size', $term)); ?>;}
				.archive-box-overlay { background-color:<?php echo esc_html( caeliora_hex2rgba($cat_bg_color, $cat_bg_trans) ); ?>; }
			<?php endif; ?>
			
			<?php if(get_field('caeliora_acf_category_height', $term) == 'custom') : ?>
				.archive-box:not(.author-page) { height:<?php echo esc_attr(get_field('caeliora_acf_category_height_custom', $term)); ?>px;}
			<?php endif; ?>
			<?php if(get_field('caeliora_acf_category_type', $term) == 'color') : ?>
				.archive-box { background:<?php echo esc_attr(get_field('caeliora_acf_category_bg_color', $term)); ?>;}
				.archive-box { border-color:<?php echo esc_attr(get_field('caeliora_acf_category_bg_border', $term)); ?>;}
			<?php endif; ?>
			<?php if(get_field('caeliora_acf_category_text_colors', $term) == 'custom') : ?>
				.archive-box h1 { color:<?php echo esc_attr(get_field('caeliora_acf_category_text_title', $term)); ?>;}
				.archive-box span { color:<?php echo esc_attr(get_field('caeliora_acf_category_text_browsing', $term)); ?>;}
			<?php endif; ?>
			
		<?php endif; ?>
		
		<?php if(is_page() && class_exists('ACF') && get_field('caeliora_acf_page_layout') == 'layout2') : ?>
			@media screen and (min-width:1200px) {
			.page .fullwidth-image {
				height:<?php echo esc_html( get_field('caeliora_acf_page_extend_style2_height') ); ?>px;
			}
			}
		<?php endif; ?>
		<?php if(is_page() && class_exists('ACF') && get_field('caeliora_acf_page_layout') == 'layout3') : ?>
			@media screen and (min-width:1200px) {
			.page .layout-fullwidth-image .fullwidth-image {
				height:<?php echo esc_html( get_field('caeliora_acf_page_extend_style3_height') ); ?>px;
			}
			}
		<?php endif; ?>
		<?php if(is_single() && class_exists('ACF') && get_field('caeliora_acf_post_layout') == 'layout3') : ?>
			@media screen and (min-width:1200px) {
			.fullwidth-image {
				height:<?php echo esc_html( get_field('caeliora_acf_post_extend_style3_height') ); ?>px;
			}
			}
		<?php endif; ?>
		<?php if(is_single() && class_exists('ACF') && get_field('caeliora_acf_post_layout') == 'layout4') : ?>
			@media screen and (min-width:1200px) {
			.fullwidth-image {
				height:<?php echo esc_html( get_field('caeliora_acf_post_extend_style4_height') ); ?>px;
			}
			}
		<?php endif; ?>
		
    </style>
    <?php
}
}
add_action( 'wp_head', 'caeliora_head_css', 999999 );

?>