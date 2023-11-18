<?php 
get_header();
$home_layout = get_theme_mod('caeliora_home_layout', 'classic');
$featured_layout = get_theme_mod('caeliora_home_feat_layout', 'classic');
?>
	
	<?php
	if(get_theme_mod('caeliora_home_feat_paginated', false) == false) {
		if(get_theme_mod('caeliora_home_feat_enable', false) && !is_paged()) {
			get_template_part('parts/featured/featured', $featured_layout);
		}
	} else {
		if(get_theme_mod('caeliora_home_feat_enable', false)) {
			get_template_part('parts/featured/featured', $featured_layout);
		}
	}
	?>
	
	<div class="dt-container">

		<div id="dt-content">
			
			<?php
			if(get_theme_mod('caeliora_home_promo_paginated', false) == false) {
				if(get_theme_mod('caeliora_home_promo_enable', false) && !is_paged()) {
					get_template_part('parts/promo/promo'); 
				}
			} else {
				if(get_theme_mod('caeliora_home_promo_enable', false)) {
					get_template_part('parts/promo/promo'); 
				}
			}
			?>
	
			<?php
			if(get_theme_mod('caeliora_home_widget_paginated', false) == false) {
				if(is_active_sidebar('sidebar-3') && !is_paged()) {
					echo '<div class="widget-slider widget-' . get_theme_mod('caeliora_colors_sidebar_layout', 'layout1') . '">';
					dynamic_sidebar( 'sidebar-3' ); 
					echo '</div>';
				}
			} else {
				if(is_active_sidebar('sidebar-3')) {
					echo '<div class="widget-slider widget-' . get_theme_mod('caeliora_colors_sidebar_layout', 'layout1') . '">';
					dynamic_sidebar( 'sidebar-3' ); 
					echo '</div>';
				}
			}
			?>
		
			
			<div id="dt-main" class="<?php if(!is_active_sidebar('sidebar-1')) { echo 'isFullwidth isNarrow'; } else { echo esc_attr(get_theme_mod('caeliora_home_sidebar', 'isSidebar')); } ?>">
				
				<?php if(get_theme_mod('caeliora_home_blog_heading', 0)) : ?>
				<div class="block-heading-wrap blog-page">
					<h5 class="block-heading"><?php echo esc_html(get_theme_mod('caeliora_home_blog_heading_text', esc_html__('Latest Articles', 'caeliora'))); ?></h5>
				</div>
				<?php endif; ?>
				
				<?php if (have_posts()) : ?>
					
				<div class="post-wrap <?php echo esc_attr($home_layout); ?> <?php echo esc_attr(caeliora_get_post_style()); ?> classic-share-<?php echo esc_attr(caeliora_show_post_footer_share()); ?> <?php if(get_theme_mod('caeliora_home_layout_list_alternate', false)) : ?>alternate<?php endif; ?>">
					
					<?php while (have_posts()) : the_post(); ?>
					
					<?php if($home_layout == 'classic_grid') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
						
					<?php elseif($home_layout == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
						
					<?php elseif($home_layout == 'classic_list') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
						
					<?php elseif($home_layout == 'list') : ?>
						
						<?php get_template_part('content', 'list'); ?>
						
					<?php else : ?>
						
						<?php get_template_part('content'); ?>
						
					<?php endif; ?>
				
				<?php endwhile; ?>
				
				<!-- END POST-WRAP -->
				</div>
				
				<?php caeliora_pagination(); ?>
				
				<?php endif; ?>
	
			</div>
	
<?php if(get_theme_mod('caeliora_home_sidebar', 'isSidebar') == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer(); ?>