<?php 
/*
* Post Layout: Style 2
*/
?>
	
	<div class="dt-container layout-split-header">
		
		<div class="split-header">
			<?php $get_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'caeliora-fullscreen'); ?>
			<div class="split-img" style="background-image:url(<?php echo esc_url($get_thumb_url); ?>)"></div>
			<div class="split-content">
				<?php caeliora_get_post_header(); ?>
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