<?php 
get_header(); 
$cat_layout = get_theme_mod('caeliora_archive_layout', 'classic');
?>
	<?php if(!get_theme_mod('caeliora_archivebox_display_browsing', true) && !get_theme_mod('caeliora_archivebox_display_title', true)) : else : ?>
	<div class="archive-box">
		<div class="dt-container">
			<?php if(is_day()) : ?>
				<span><?php esc_html_e( 'Daily Archives', 'caeliora' ); ?></span>
				<h1><?php echo get_the_date(); ?></h1>
			<?php elseif(is_month()) : ?>
				<span><?php esc_html_e( 'Monthly Archives', 'caeliora' ); ?></span>
				<h1><?php echo get_the_date('F Y'); ?></h1>
			<?php elseif(is_year()) : ?>
				<span><?php esc_html_e( 'Yearly Archives', 'caeliora' ); ?></span>
				<h1><?php echo get_the_date('Y'); ?></h1>
			<?php else : ?>
				<h1><?php esc_html_e( 'Archives', 'caeliora' ); ?></h1>
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="dt-container">
	
		<div id="dt-content">
		
			<div id="dt-main" class="<?php echo esc_attr(get_theme_mod('caeliora_archive_sidebar', 'isSidebar')); ?>">
				
				<?php if (have_posts()) : ?>
				
				<div class="post-wrap <?php echo esc_attr($cat_layout); ?> <?php echo esc_attr(caeliora_get_post_style()); ?> classic-share-<?php echo esc_attr(caeliora_show_post_footer_share()); ?> <?php if(get_theme_mod('caeliora_archive_layout_list_alternate', false)) : ?>alternate<?php endif; ?>">
					
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
	
<?php if(get_theme_mod('caeliora_archive_sidebar', 'isSidebar') == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer(); ?>