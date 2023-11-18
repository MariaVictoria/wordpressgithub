<?php get_header(); ?>
	
	<div class="dt-container">
	
		<div id="dt-content">
			
			<div id="dt-main" class="<?php echo esc_attr(get_theme_mod('caeliora_woo_layout', 'isFullwidth')); ?>">
				
				<?php woocommerce_content(); ?>
			
			</div>

<?php if(get_theme_mod('caeliora_woo_layout') == 'isSidebar') : ?><?php get_sidebar('woocommerce'); ?><?php endif; ?>
<?php get_footer(); ?>