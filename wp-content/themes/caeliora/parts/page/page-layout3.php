<?php 

/*
* Classic Page Template
*/

get_header(); ?>

	<?php
	if (class_exists('ACF')) {
		if(get_field('caeliora_acf_page_blog_enable')) {
			$blog_pos = get_field('caeliora_acf_page_blog_pos');
			$blog_pos = isset($blog_pos) ? $blog_pos : 'below';
		}
	}
	?>
	
	<div class="dt-container page-style3 layout-fullwidth-image">
		
		<?php $get_thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'caeliora-fullscreen'); ?>
		<div class="fullwidth-image" style="background-image:url(<?php echo esc_url($get_thumb_url); ?>)">
		<div class="fullwidth-image-shadow"></div>
		</div>
		
		<div id="dt-content">
			
			<?php
				if (class_exists('ACF')) {
					if(get_field('caeliora_acf_page_promo_enable')) {
						get_template_part('parts/promo/promo');
					}
				}
			?>
			
			<?php
				if (class_exists('ACF')) {
					if(get_field('caeliora_acf_page_show_widget') == 'show' && is_active_sidebar('sidebar-3')) { ?>
						<div class="widget-slider">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
					<?php }
				}
			?>
			
			<div id="dt-main" class="<?php echo caeliora_get_page_content_layout(); ?>">
				
				<?php
				if (class_exists('ACF') && get_field('caeliora_acf_page_blog_enable') == true && $blog_pos == 'above') {
					get_template_part('parts/page/page', 'blog');
					echo '<div class="blog-spacer"></div>';
				}
				?>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php caeliora_get_page_header(); ?>
					<?php get_template_part('parts/page/page-content'); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php
				if (class_exists('ACF') && get_field('caeliora_acf_page_blog_enable') == true && $blog_pos == 'below') {
					get_template_part('parts/page/page', 'blog');
				}
				?>
			
			</div>
	
<?php if(caeliora_get_page_content_layout() == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer(); ?>