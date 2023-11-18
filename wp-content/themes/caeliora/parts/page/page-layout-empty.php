<?php 

/*
* Empty Page Template
*/

get_header('empty'); 
?>
	
	<?php
	if (class_exists('ACF')) {
		if(get_field('caeliora_acf_page_featured_enable') && !is_paged()) {
			get_template_part('parts/featured/featured', get_field('caeliora_acf_page_feat_layout'));
		}
		if(get_field('caeliora_acf_page_blog_enable')) {
			$blog_pos = get_field('caeliora_acf_page_blog_pos');
			$blog_pos = isset($blog_pos) ? $blog_pos : 'below';
		}
	}
	?>
	
	<div class="dt-container">
	
		<div id="dt-content">
			
			<?php
				if (class_exists('ACF')) {
					if(get_field('caeliora_acf_page_promo_enable') && !is_paged()) {
						get_template_part('parts/promo/promo');
					}
				}
			?>
			
			<?php
				if (class_exists('ACF')) {
					if(get_field('caeliora_acf_page_show_widget') == 'show' && is_active_sidebar('sidebar-3') && !is_paged()) { ?>
						<div class="widget-slider">
							<?php dynamic_sidebar( 'sidebar-3' ); ?>
						</div>
					<?php }
				}
			?>
			
			<div id="dt-main" class="<?php echo caeliora_get_page_content_layout(); ?> page-style1">
				
				<?php
				if (class_exists('ACF') && get_field('caeliora_acf_page_blog_enable') == true && $blog_pos == 'above') {
					get_template_part('parts/page/page', 'blog');
					echo '<div class="blog-spacer"></div>';
				}
				?>
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<?php get_template_part('content', 'page'); ?>
				
				<?php endwhile; ?>
				<?php endif; ?>
				
				<?php
				if (class_exists('ACF') && get_field('caeliora_acf_page_blog_enable') == true && $blog_pos == 'below') {
					get_template_part('parts/page/page', 'blog');
				}
				?>
				
			</div>
	
<?php if(caeliora_get_page_content_layout() == 'isSidebar') { get_sidebar(); } ?>
<?php get_footer('empty'); ?>