<?php
/*
* Get menu width
*/
$menu_width = get_theme_mod('caeliora_header_layout4_menu_width', 'fullwidth');
?>
<header id="header" class="layout4 menu-bar-layout <?php echo esc_attr(caeliora_header_check_featured()); ?>">
	<div class="dt-container">
		<div id="logo">
			<?php if(function_exists('caeliora_get_social_icons') && get_theme_mod('caeliora_header_show_social', true)) { caeliora_get_social_icons('header'); } ?>
			<?php caeliora_get_logo(); ?>
			<?php if(is_home()) { echo '<h1 class="home-h1">' . esc_attr(get_bloginfo( 'name' )) . '</h1>'; } ?>
			<div class="top-misc-layout4">
				<?php caeliora_get_woo_cart(); ?>
				<?php caeliora_get_search(); ?>
			</div>
		</div>
	</div>
</header>

<?php if($menu_width == 'content-width') : ?><div class="dt-container"><?php endif; ?>
<div id="top-bar" class="layout4">
	<div class="dt-container">
		<nav id="nav-wrapper">
			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'main-menu', 'menu_class' => 'menu' ) ); ?>
		</nav>
	</div>
</div>
<?php if($menu_width == 'content-width') : ?></div><?php endif; ?>