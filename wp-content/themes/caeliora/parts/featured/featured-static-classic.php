<?php
/*
* Featured Area: Static Classic Slider Layout
*/

/* Get slider width */
if(is_page() && class_exists('ACF')) {
	$carousel_width = get_field('caeliora_acf_page_feat_slider_width');
	$carousel_width = isset($carousel_width) ? $carousel_width : 'content-width';
} elseif(is_home()) {
	$carousel_width = get_theme_mod('caeliora_home_feat_slider_width', 'content-width');
} else {
	$carousel_width = 'content-width';
}

/* Get static slides */
if(is_page() && class_exists('ACF')) {
	$static_content = get_field('caeliora_acf_page_feat_static_slides');
} else {
	$static_content = get_theme_mod('caeliora_home_feat_static_slides');
}

/* Get slider autoplay */
if(is_page() && class_exists('ACF')) {
	$autoplay = get_field('caeliora_acf_page_featured_autoplay');
	$autoplay = isset($autoplay) ? $autoplay : false;
	
	$autoplay_speed = get_field('caeliora_acf_page_feat_autoplay_speed');
	$autoplay_speed = isset($autoplay_speed) ? $autoplay_speed : 4000;
	
	wp_localize_script( 'caeliora-scripts', 'autoplay_object', 
	array( 
			'autoplay_speed' => $autoplay_speed,
		) 
	);
	
} elseif(is_home()) {
	$autoplay = get_theme_mod('caeliora_home_feat_autoplay', false);
	
	wp_localize_script( 'caeliora-scripts', 'autoplay_object', 
	array( 
			'autoplay_speed' => get_theme_mod('caeliora_home_feat_autoplay_speed', 4000),
		) 
	);
	
} else {
	$autoplay = false;
	wp_localize_script( 'caeliora-scripts', 'autoplay_object', 
	array( 
			'autoplay_speed' => 4000,
		) 
	);
	
}

?>
<div class="dt-container classic-slider-wrap <?php echo esc_attr($carousel_width); ?>">
<div class="feat-area classic-slider static-slider feat-arrows <?php echo esc_attr($carousel_width); ?> <?php if($autoplay) { echo 'autoplay-true '; } else { echo 'autoplay-false'; } ?> <?php if(get_theme_mod('caeliora_home_feat_fullscreen_overlay', false) == true) { echo 'feat-extend'; } ?>">
	
	<?php foreach($static_content as $feat_item) : ?>
	<div class="feat-item" <?php if($feat_item['slide_image']) : ?>style="background-image:url(<?php echo esc_url(wp_get_attachment_image_src( $feat_item['slide_image'], 'caeliora-fullscreen' )[0]); ?>);"<?php endif; ?>>
		<div class="feat-inner">
			<?php if($feat_item['slide_link']) : ?><a href="<?php echo esc_url($feat_item['slide_link']); ?>" class="feat-link"></a><?php endif; ?>
			<div class="feat-overlay">
				<div class="dt-container">
				<div class="post-header">
					<div class="post-header-inner">
						<?php if($feat_item['slide_subtitle']) : ?><p class="static-subtitle" <?php if ( isset( $feat_item['slide_subtitle_color_select'] ) ? $feat_item['slide_subtitle_color_select'] == 'custom' : false ) : ?>style="color:<?php echo esc_html( $feat_item['slide_subtitle_color'] ); ?>;"<?php endif; ?>><?php echo esc_html( $feat_item['slide_subtitle'] ); ?></p><?php endif; ?>
						<?php if($feat_item['slide_title']) : ?><h2 class="static-title" <?php if ( isset( $feat_item['slide_title_color_select'] ) ? $feat_item['slide_title_color_select'] == 'custom' : false ) : ?>style="color:<?php echo esc_html( $feat_item['slide_title_color'] ); ?>;"<?php endif; ?>><?php echo esc_html( $feat_item['slide_title'] ); ?></h2><?php endif; ?>
						<?php if ( $feat_item['slide_content'] ) : ?><p class="static-text" <?php if ( isset( $feat_item['slide_content_color_select'] ) ? $feat_item['slide_content_color_select'] == 'custom' : false ) : ?>style="color:<?php echo esc_html( $feat_item['slide_content_color'] ); ?>;"<?php endif; ?>><?php echo esc_html( $feat_item['slide_content'] ); ?></p><?php endif; ?>
						<?php if ($feat_item['slide_button_text']) : ?><a <?php if ( isset( $feat_item['slide_button_tab'] ) ? $feat_item['slide_button_tab'] : false ) : ?>target="_blank"<?php endif; ?> class="static-button" href="<?php echo esc_url($feat_item['slide_button_link']); ?>"><?php echo esc_html($feat_item['slide_button_text']); ?></a><?php endif; ?>
					</div>
				</div>
				</div>
			</div>
			
			<div class="feat-shadow"></div>
		</div>
	</div>
	<?php endforeach; ?>
	
</div>
</div>