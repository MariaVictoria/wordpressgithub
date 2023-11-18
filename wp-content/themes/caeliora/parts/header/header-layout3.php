<div id="top-bar" class="layout3">
	<div class="dt-container">
		<nav id="nav-wrapper">
			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
		</nav>
		
		<div class="top-misc">
			<?php if(function_exists('caeliora_get_social_icons') && get_theme_mod('caeliora_header_show_social', true)) { caeliora_get_social_icons('header'); } ?>
			<?php caeliora_get_woo_cart(); ?>
			<?php caeliora_get_search(); ?>
		</div>
	</div>
</div>

<header id="header" class="layout3 menu-bar-layout <?php echo esc_attr(caeliora_header_check_featured()); ?>">
	
	<div id="logo">
		<?php caeliora_get_logo(); ?>
		<?php if(is_home()) { echo '<h1 class="home-h1">' . esc_attr(get_bloginfo( 'name' )) . '</h1>'; } ?>
	</div>

</header>