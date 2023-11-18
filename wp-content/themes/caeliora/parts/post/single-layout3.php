<?php 
/*
* Post Layout: Style 3
*/
?>
	
	<div class="dt-container post-style3 layout-fullwidth-image-overlay <?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
		
		<?php $get_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'caeliora-fullscreen'); ?>
		<div class="fullwidth-image" style="background-image:url(<?php echo esc_url($get_thumb_url); ?>)">
			<div class="dt-container">
				<?php caeliora_get_post_header(); ?>
				<div class="fullwidth-image-shadow"></div>
			</div>
		</div>
		
		<div id="dt-content">
		
			<div id="dt-main" class="<?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
					<?php get_template_part('parts/post/post-content'); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
	
<?php if(caeliora_get_content_layout() == 'isSidebar') { get_sidebar(); } ?>