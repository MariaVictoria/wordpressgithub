<?php 
get_header(); 

if(class_exists('ACF')) {
	$term = get_queried_object();
	$cat_bg = get_field('caeliora_acf_category_img', $term); 	
	$cat_type = get_field('caeliora_acf_category_type', $term);
	$cat_layout_custom = get_field('caeliora_acf_category_custom_layout', $term);
	
	

	
	
}
if($cat_layout_custom == 'custom' && class_exists('ACF')) {
	$cat_layout = get_field('caeliora_acf_category_blog_layout', $term);
	$cat_grid_style = get_field('caeliora_acf_category_blog_layout_grid', $term);
	$cat_list_style = get_field('caeliora_acf_category_blog_layout_list', $term);
	$cat_alternate = get_field('caeliora_acf_category_blog_layout_list_alternate', $term);
	
	if($cat_layout == 'grid' || $cat_layout == 'classic_grid') {
		$post_style = 'grid-' . $cat_grid_style;
	} elseif($cat_layout == 'list' || $cat_layout == 'classic_list') {
		$post_style = 'list-' . $cat_list_style;
	} else {
		$post_style = 'classic-style1';
	}

} else {

	$cat_layout = get_theme_mod('caeliora_archive_layout', 'classic');
	$post_style = caeliora_get_post_style();
	$cat_alternate = get_theme_mod('caeliora_archive_layout_list_alternate', false);
}

if(class_exists('ACF')) {
	$get_cat_content_layout = get_field('caeliora_acf_category_custom_content_layout', $term);
	$get_cat_content_layout = isset($get_cat_content_layout) ? $get_cat_content_layout : 'default';
		
	if($get_cat_content_layout != 'default') {
		$cat_content_layout = $get_cat_content_layout;
	} elseif($get_cat_content_layout == 'default') {
		$cat_content_layout = get_theme_mod('caeliora_archive_sidebar', 'isSidebar');
	}

} else {
	$cat_content_layout = get_theme_mod('caeliora_archive_sidebar', 'isSidebar');
}


?>
	<?php if(!get_theme_mod('caeliora_archivebox_display_browsing', true) && !get_theme_mod('caeliora_archivebox_display_title', true) && !category_description()) : else : ?>
	<div class="archive-box" <?php if($cat_bg && $cat_type == 'image') : ?>style="background-image:url(<?php echo esc_url($cat_bg); ?>)"<?php endif; ?>>
		<div class="archive-box-overlay"></div>
		<div class="dt-container">
			<?php if(get_theme_mod('caeliora_archivebox_display_browsing', true)) : ?><span><?php esc_html_e( 'Browsing Category', 'caeliora' ); ?></span><?php endif; ?>
			<?php if(get_theme_mod('caeliora_archivebox_display_title', true)) : ?><h1><?php single_cat_title('', true); ?></h1><?php endif; ?>
			<?php if(category_description()) : ?>
			<div class="archive-description">
				<?php echo category_description(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="dt-container">
	
		<div id="dt-content">
		
			<div id="dt-main" class="<?php if(!is_active_sidebar('sidebar-1')) { echo 'isFullwidth isNarrow'; } else { echo esc_attr($cat_content_layout); } ?>">
				
				<?php if (have_posts()) : ?>
				
				<div class="post-wrap <?php echo esc_attr($cat_layout); ?> <?php echo esc_attr($post_style); ?> classic-share-<?php echo esc_attr(caeliora_show_post_footer_share()); ?> <?php if($cat_alternate) : ?>alternate<?php endif; ?>">
					
					<?php while (have_posts()) : the_post(); ?>
					
					<?php if($cat_layout == 'classic_grid') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
						
					<?php elseif($cat_layout == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
						
					<?php elseif($cat_layout == 'classic_list') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
						
					<?php elseif($cat_layout == 'list') : ?>
						
						<?php get_template_part('content', 'list'); ?>
						
					<?php else : ?>
						
						<?php get_template_part('content'); ?>
						
					<?php endif; ?>
				
				<?php endwhile; ?>
				<!-- END POST-WRAP -->
				</div>
				
				<?php caeliora_pagination(); ?>

				<?php else : ?>
					
					<?php get_template_part('content', 'none'); ?>
					
				<?php endif; ?>

			</div>
	
<?php if($cat_content_layout == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer(); ?>