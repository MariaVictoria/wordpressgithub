<?php
/*
* Featured Area: Classic Slider Layout
*/
$feat_args = caeliora_get_featured_content();
/* Get carousel spacing */
if(is_page() && class_exists('ACF')) {
	$carousel_spacing = get_field('caeliora_acf_page_feat_carousel_spacing');
	$carousel_spacing = isset($carousel_spacing) ? $carousel_spacing : false;
} elseif(is_home()) {
	$carousel_spacing = get_theme_mod('caeliora_home_feat_carousel_spacing', false);
} else {
	$carousel_spacing = false;
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
<div class="dt-container carousel-slider-center-wrap">
<div id="featured-area" class="feat-area caeliora-carousel carousel-slider-center feat-arrows <?php if($carousel_spacing) { echo "item-spacing"; } ?> <?php if($autoplay) { echo 'autoplay-true '; } else { echo 'autoplay-false'; } ?>">

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
		$feat_image = caeliora_get_feat_image('caeliora-fullwidth');
		
		// Get featured title
		$feat_title = caeliora_get_feat_title();
	?>
	<div class="feat-item-wrapper">
		<div class="feat-item" style="background-image:url(<?php echo esc_url($feat_image); ?>);">
			<a href="<?php the_permalink(); ?>" class="feat-link"></a>
			<div class="feat-inner">
				
				<div class="feat-overlay">
					
					<div class="post-header">
						
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
			
			<div class="feat-shadow"></div>
			
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); endif; ?>
	
</div>
</div>