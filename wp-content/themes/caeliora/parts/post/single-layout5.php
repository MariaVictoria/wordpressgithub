<?php 
/*
* Post Layout: Style 5
*/
?>
	
	<div class="dt-container layout-style5">
		
		<div class="bg-color-header">
			<div class="dt-container">
				<?php caeliora_get_post_header(); ?>
			</div>
		</div>
		
		<div class="bg-color-img">
			<?php
				$get_post_format = caeliora_get_post_layout();
				if($get_post_format['format'] == 'video') {
					caeliora_get_featured_video();
				} elseif($get_post_format['format'] == 'gallery') {
					caeliora_get_featured_gallery();
				} else {
					caeliora_get_featured_image();
				}
			?>
		</div>
		
		<div id="dt-content">
		
			<div id="dt-main" class="<?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php get_template_part('parts/post/post-content'); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
	
<?php if(caeliora_get_content_layout() == 'isSidebar') { get_sidebar(); } ?>