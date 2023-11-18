<?php
/*
* Post Layout: Video Style 1
*/
?>
	
<div class="dt-container layout-fullwidth-image layout-video-style3 <?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">

<div class="video-bg-header">
	<div class="dt-container">
		<?php caeliora_get_featured_video(); ?>
	</div>
</div>

<div id="dt-content">

	<div id="dt-main" class="<?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<?php caeliora_get_post_header(); ?>
			
			<?php get_template_part('parts/post/post-content'); ?>
		
		<?php endwhile; ?>
		<?php endif; ?>
	
	</div>
	
<?php if(caeliora_get_content_layout() == 'isSidebar') { get_sidebar(); } ?>