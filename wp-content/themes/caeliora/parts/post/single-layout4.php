<?php 

/*
* Post Layout: Style 4
*/
if (class_exists('ACF')) {
	$get_title_pos = get_field('caeliora_acf_post_title_pos');
	$get_title_pos = isset($get_title_pos) ? $get_title_pos : 'below';
} else {
	$get_title_pos = 'below';
}
?>
	
	<div class="dt-container layout-fullwidth-image post-style4 <?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
	
		<?php if($get_title_pos == 'above') { caeliora_get_post_header('title-above'); } ?>
		
		<?php $get_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'caeliora-fullscreen'); ?>
		<div class="fullwidth-image" style="background-image:url(<?php echo esc_url($get_thumb_url); ?>)"></div>
		
		<div id="dt-content">
		
			<div id="dt-main" class="<?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php if($get_title_pos == 'below') { caeliora_get_post_header('title-below'); } ?>
					
					<?php get_template_part('parts/post/post-content'); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
	
<?php if(caeliora_get_content_layout() == 'isSidebar') { get_sidebar(); } ?>