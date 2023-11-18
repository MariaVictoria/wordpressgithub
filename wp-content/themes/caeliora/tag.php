<?php 
get_header(); 
$tag_layout = get_theme_mod('caeliora_archive_layout', 'classic');
?>
	<?php if(!get_theme_mod('caeliora_archivebox_display_browsing', true) && !get_theme_mod('caeliora_archivebox_display_title', true) && !tag_description()) : else : ?>
	<div class="archive-box">
		<div class="dt-container">
			<?php if(get_theme_mod('caeliora_archivebox_display_browsing', true)) : ?><span><?php esc_html_e( 'Browsing Tag', 'caeliora' ); ?></span><?php endif; ?>
			<?php if(get_theme_mod('caeliora_archivebox_display_title', true)) : ?><h1><?php single_tag_title('', true); ?></h1><?php endif; ?>
			<?php if(tag_description()) : ?>
			<div class="archive-description">
				<?php echo tag_description(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="dt-container">
	
		<div id="dt-content">
		
			<div id="dt-main" class="<?php if(!is_active_sidebar('sidebar-1')) { echo 'isFullwidth isNarrow'; } else { echo esc_attr(get_theme_mod('caeliora_archive_sidebar', 'isSidebar')); } ?>">
				
				<?php if (have_posts()) : ?>
				
				<div class="post-wrap <?php echo esc_attr($tag_layout); ?> <?php echo esc_attr(caeliora_get_post_style()); ?> classic-share-<?php echo esc_attr(caeliora_show_post_footer_share()); ?> <?php if(get_theme_mod('caeliora_archive_layout_list_alternate', false)) : ?>alternate<?php endif; ?>">
					
					<?php while (have_posts()) : the_post(); ?>
					
					<?php if($tag_layout == 'classic_grid') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'grid'); ?>
						<?php endif; ?>
						
					<?php elseif($tag_layout == 'grid') : ?>
						
						<?php get_template_part('content', 'grid'); ?>
						
					<?php elseif($tag_layout == 'classic_list') : ?>
						
						<?php if( $wp_query->current_post == 0 && !is_paged() ) : ?>
							<?php get_template_part('content'); ?>
						<?php else : ?>
							<?php get_template_part('content', 'list'); ?>
						<?php endif; ?>
						
					<?php elseif($tag_layout == 'list') : ?>
						
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
	
<?php if(get_theme_mod('caeliora_archive_sidebar', 'isSidebar') == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer(); ?>