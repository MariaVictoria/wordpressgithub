	
		<!-- END DT-CONTENT -->
		</div>
	
	<!-- END DT-CONTAINER -->
	</div>
	
	<?php if(is_single()) { echo'</article>'; } ?>
	
<!-- END INNER WRAPPER -->
</div>

<?php if(get_theme_mod('caeliora_core_footer_insta_enable')) : ?>
<div id="insta-footer">
	<div class="insta-header">
		<?php if(get_theme_mod('caeliora_core_footer_insta_subtitle', esc_html__('Find me on Instagram', 'caeliora'))) : ?><span><?php echo esc_html(get_theme_mod('caeliora_core_footer_insta_subtitle', esc_html__('Find me on Instagram', 'caeliora'))); ?></span><?php endif; ?>
		<?php if(get_theme_mod('caeliora_core_footer_insta_title', esc_html__('DeoThemes', 'caeliora'))) : ?>
			<h5><?php if(get_theme_mod('caeliora_core_social_ic_ig')) : ?><a target="_blank" href="<?php echo esc_url(get_theme_mod('caeliora_core_social_ic_ig')); ?>"><?php endif; ?><?php echo esc_html(get_theme_mod('caeliora_core_footer_insta_title', esc_html__('DeoThemes', 'caeliora'))); ?><?php if(get_theme_mod('caeliora_core_social_ic_ig')) : ?></a><?php endif; ?></h5>
		<?php endif; ?>
	</div>
	<div class="insta-images">
		<?php 
		$shortcode = get_theme_mod('caeliora_core_insta_shortcode');
		
		if($shortcode) {
			echo do_shortcode($shortcode);
		} else {
			echo do_shortcode('[instagram-feed num='.get_theme_mod('caeliora_core_footer_insta_number',8).' cols='.get_theme_mod('caeliora_core_footer_insta_number',8).' imagepadding=0 showheader=false showbutton=false showfollow=false disablemobile=true]');
		}
		?>
	</div>
</div>
<?php endif; ?>

<?php if(is_active_sidebar('sidebar-6') || is_active_sidebar('sidebar-7') || is_active_sidebar('sidebar-8') || is_active_sidebar('sidebar-9')) : ?>
<div id="footer-widgets">
	<div class="dt-container">
		<div class="footer-widgets-wrap column-<?php echo esc_html( get_theme_mod('caeliora_footer_widget_columns', 3) ); ?>">
		
			<?php if(is_active_sidebar('sidebar-6')) : ?>
				<div class="footer-widget widget-layout2 line-heading">
					<?php dynamic_sidebar( 'sidebar-6' ); ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('sidebar-7')) : ?>
				<div class="footer-widget widget-layout2 line-heading">
					<?php dynamic_sidebar( 'sidebar-7' ); ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('sidebar-8')) : ?>
				<div class="footer-widget widget-layout2 line-heading">
					<?php dynamic_sidebar( 'sidebar-8' ); ?>
				</div>
			<?php endif; ?>
			
			<?php if(is_active_sidebar('sidebar-9')) : ?>
				<div class="footer-widget widget-layout2 line-heading">
					<?php dynamic_sidebar( 'sidebar-9' ); ?>
				</div>
			<?php endif; ?>

		</div>
	</div>
</div>
<?php endif; ?>

<footer id="footer">
	
	<?php if(get_theme_mod('caeliora_footer_logo_enable', true)) : ?>
		
	<div id="footer-logo">
		<?php if(get_theme_mod('caeliora_footer_logo')) : ?>
			<?php $footer_logo_size = getimagesize( get_theme_mod('caeliora_footer_logo', get_template_directory_uri() . '/img/footer-logo.png') ); ?>
			<?php if(get_theme_mod('caeliora_footer_logo_link')) : ?><a <?php if(get_theme_mod('caeliora_footer_logo_link_target')) : ?>target="_blank"<?php endif; ?> href="<?php echo esc_url(get_theme_mod('caeliora_footer_logo_link')); ?>"><?php endif; ?><img <?php echo $footer_logo_size[3]; ?> src="<?php echo esc_url(get_theme_mod('caeliora_footer_logo', get_template_directory_uri() . '/img/footer-logo.png')); ?>" alt="<?php esc_attr(bloginfo( 'name' )); ?>" /><?php if(get_theme_mod('caeliora_footer_logo_link')) : ?></a><?php endif; ?>
		<?php endif; ?>
	</div>
		
	<?php endif; ?>
	
	<div id="footer-copy" class="<?php if(!get_theme_mod('caeliora_footer_logo_enable', true)) : ?>no-logo<?php endif; ?> <?php if(!has_nav_menu( 'footer-menu' )) : ?>no-menu<?php endif; ?>">
		
		<div class="copy-text">
			<?php caeliora_footer_bottom_text(); ?>
		</div>
	
		<?php
		if ( has_nav_menu( 'footer-menu' ) ) {
			wp_nav_menu( array( 'container' => false, 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu' ) ); 
		}
		?>
		
		<?php
			/* Footer Social Icons */
			if(function_exists('caeliora_get_social_icons')) {
				caeliora_get_social_icons('footer');
			}
		?>
		
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>