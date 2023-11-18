<header id="header" class="layout2 <?php echo esc_attr(caeliora_need_white_logo()); ?>">
	
	<?php caeliora_get_burger_menu(); ?>

	<div id="logo">
		<?php 
			/* Get logo */
			caeliora_get_logo();
			if(is_home()) { echo '<h1 class="home-h1">' . esc_attr(get_bloginfo( 'name' )) . '</h1>'; }
			/* Get white logo if needed */
			if(caeliora_need_white_logo() == 'header-white') {
				caeliora_get_logo_white();
			}
		?>
	</div>
	
	<div class="top-misc">
		<?php if(function_exists('caeliora_get_social_icons') && get_theme_mod('caeliora_header_show_social', true)) { caeliora_get_social_icons('header'); } ?>
		<?php caeliora_get_woo_cart(); ?>
		<?php caeliora_get_search(); ?>
	</div>
	
</header>