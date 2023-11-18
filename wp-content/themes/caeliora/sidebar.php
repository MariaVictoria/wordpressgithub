<aside id="dt-sidebar" class="widget-<?php echo esc_attr(get_theme_mod('caeliora_colors_sidebar_layout', 'layout1')); ?> <?php if(get_theme_mod('caeliora_newsletter_bg_color', '#ffffff') != '#ffffff') : ?>newsletter-padding<?php endif; ?>">
	<?php if(is_active_sidebar('sidebar-1')) { dynamic_sidebar( 'sidebar-1' ); } ?>
</aside>