<?php
/*
* Featured Area: Classic Slider Layout
*/
$feat_args = caeliora_get_featured_content();

/* Get slider width */
if(is_page() && class_exists('ACF')) {
	$carousel_width = get_field('caeliora_acf_page_feat_slider_width');
	$carousel_width = isset($carousel_width) ? $carousel_width : 'content-width';
} elseif(is_home()) {
	$carousel_width = get_theme_mod('caeliora_home_feat_slider_width', 'content-width');
} else {
	$carousel_width = 'content-width';
}

/* Get overlay style */
if(is_page() && class_exists('ACF')) {
	$classic_style = get_field('caeliora_acf_page_feat_classic_type');
	$classic_style = isset($classic_style) ? $classic_style : 'style1';
} elseif(is_home()) {
	$classic_style = get_theme_mod('caeliora_home_feat_classic_type', 'style1');
} else {
	$classic_style = 'style1';
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
<div class="feat-area classic-slider feat-arrows <?php echo esc_attr($carousel_width); ?> <?php if($autoplay) { echo 'autoplay-true '; } else { echo 'autoplay-false'; } ?>">
			
	<?php
		
		if(is_home()) {
			$get_cat = get_theme_mod( 'caeliora_home_feat_show_cat', true );
			$get_title = get_theme_mod( 'caeliora_home_feat_show_title', true );
			$get_date = get_theme_mod( 'caeliora_home_feat_show_date', true );
			$get_author_avatar = get_theme_mod( 'caeliora_home_feat_show_author_img', true );
			$get_author_name = get_theme_mod( 'caeliora_home_feat_show_author_name', true );
		} elseif(is_page() && class_exists('ACF')) {
			$get_cat = get_field( 'caeliora_acf_page_feat_show_cat' );
			$get_title = get_field( 'caeliora_acf_page_feat_show_title' );
			$get_date = get_field( 'caeliora_acf_page_feat_show_date' );
			$get_author_avatar = get_field( 'caeliora_acf_page_feat_show_author_img' );
			$get_author_name = get_field( 'caeliora_acf_page_feat_show_author_name' );
		}
	
		$feat_query = new WP_Query( $feat_args );
		if ($feat_query->have_posts()) : while ($feat_query->have_posts()) : $feat_query->the_post();
		
		// Get featured image
		if($carousel_width == 'content-width') {
			$feat_image = caeliora_get_feat_image('caeliora-fullwidth');
		} else {
			$feat_image = caeliora_get_feat_image('caeliora-fullscreen');
		}
		
		// Get featured title
		$feat_title = caeliora_get_feat_title();
	?>
	
	<div class="feat-item" style="background-image:url(<?php echo esc_url($feat_image); ?>);">
		<div class="feat-inner <?php echo esc_attr($classic_style); ?>">
			<a href="<?php the_permalink(); ?>" class="feat-link"></a>
			<div class="feat-overlay">
				<div class="dt-container">
				<div class="post-header">
					<div class="post-header-inner">
					<?php if($get_cat == true) : ?>
					<div class="post-cats">
						<?php the_category(' <span>/</span> '); ?>
					</div>
					<?php endif; ?>
					<?php if($get_title) : ?>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo esc_html($feat_title); ?></a></h2>
					<?php endif; ?>
					<?php if($get_date) : ?>
					<div class="date-wrap">
						<span class="dt-date"><?php the_time( get_option('date_format') ); ?></span>
					</div>
					<?php endif; ?>
					
					</div>
				</div>
				</div>
			</div>
			
			<div class="feat-shadow"></div>
		</div>
	</div>

	<?php endwhile; wp_reset_postdata(); endif; ?>
	
</div>
</div>