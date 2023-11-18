<?php 

/*
* Post Layout: Style 1
*/

get_header(); ?>
	
	<div class="dt-container">
	
		<div id="dt-content">
		
			<div id="dt-main" class="<?php echo esc_attr(caeliora_get_content_layout_flex()); ?>">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php get_template_part('content'); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
			
			</div>
	
<?php if(caeliora_get_content_layout() == 'isSidebar') { get_sidebar(); } ?>