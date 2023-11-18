<?php 
get_header(); 
$search_layout = get_theme_mod('caeliora_search_layout', 'classic');
?>
	<?php if(!get_theme_mod('caeliora_searchbox_display_results', true) && !get_theme_mod('caeliora_searchbox_display_title', true)) : else : ?>
	<div class="archive-box">
		<div class="dt-container">
			<?php if(get_theme_mod('caeliora_searchbox_display_results', true)) : ?><span><?php esc_html_e( 'Search results', 'caeliora' ); ?></span><?php endif; ?>
			<?php if(get_theme_mod('caeliora_searchbox_display_title', true)) : ?><h1><?php echo get_search_query(); ?></h1><?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="dt-container">
	
		<div id="dt-content">
		
			<div id="dt-main" class="<?php if(!is_active_sidebar('sidebar-1')) { echo 'isFullwidth isNarrow'; } else { echo esc_attr(get_theme_mod('caeliora_search_sidebar', 'isSidebar')); } ?>">
				
				<?php if (have_posts()) : ?>
				
				<div class="post-wrap <?php echo esc_attr($search_layout); ?> <?php echo esc_attr(caeliora_get_post_style()); ?> classic-share-<?php echo esc_attr(caeliora_show_post_footer_share()); ?> <?php if(get_theme_mod('caeliora_search_layout_list_alternate', false)) : ?>alternate<?php endif; ?>">
					
					<?php while (have_posts()) : the_post(); ?>
					
					<?php if($search_layout == 'classic_grid') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
						
					<?php elseif($search_layout == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
						
					<?php elseif($search_layout == 'classic_list') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
						
					<?php elseif($search_layout == 'list') : ?>
						
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
	
<?php if(get_theme_mod('caeliora_search_sidebar', 'isSidebar') == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer(); ?>