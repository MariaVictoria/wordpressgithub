<?php

/*
* Get Page Header
*/
if ( !function_exists('caeliora_get_page_header') ) {
function caeliora_get_page_header($class="normal") { ?>
	
	<?php if(caeliora_page_show_title() == 'show') : ?>
	<div class="page-header post-header <?php echo esc_attr($class); ?>">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
	</div>
	<?php endif; ?>

<?php }
}

/*
* Get page layout
*/
if ( !function_exists('caeliora_get_page_layout') ) {
function caeliora_get_page_layout() {
	
	if (!class_exists('ACF')) {
		
		/* If ACF is not installed then use default settings */
		$get_layout = get_theme_mod('caeliora_page_layout', 'layout1');
		
	} else {
		
		if(get_field('caeliora_acf_page_layout')) {
			if(get_field('caeliora_acf_page_layout') == 'default') {
				$get_layout = get_theme_mod('caeliora_page_layout', 'layout1');
			} else {
				$get_layout = get_field('caeliora_acf_page_layout');
			}
		} else {
			$get_layout = get_theme_mod('caeliora_page_layout', 'layout1');
		}
	}
	return $get_layout;
}
}

/*
* Get Content Layout (sidebar, full-width, full-width narrow)
*/
if ( !function_exists('caeliora_get_page_content_layout') ) {
function caeliora_get_page_content_layout() {
	
	if (!class_exists('ACF')) {
		
		/* If ACF is not installed then use default settings */
		$get_content_layout = get_theme_mod('caeliora_page_content_layout', 'isSidebar');
		
	} else {
		
		if(get_field('caeliora_acf_page_content_layout')) {
			if(get_field('caeliora_acf_page_content_layout') == 'default') {
				$get_content_layout = get_theme_mod('caeliora_page_content_layout', 'isSidebar');
			} else {
				$get_content_layout = get_field('caeliora_acf_page_content_layout');
			}
		} else {
			$get_content_layout = get_theme_mod('caeliora_page_content_layout', 'isSidebar');
		}
	}
	return $get_content_layout;
}
}

/* Page Title */
if ( !function_exists('caeliora_page_show_title') ) {
function caeliora_page_show_title() {
	if (!class_exists('ACF')) {
		$show_title = get_theme_mod('caeliora_page_show_title', 'show');
	} else {
		if(get_field('caeliora_acf_page_show_title')) {
			if(get_field('caeliora_acf_page_show_title') == 'default') {
				$show_title = get_theme_mod('caeliora_page_show_title', 'show');
			} else {
				$show_title = get_field('caeliora_acf_page_show_title');
			}
		} else {
			$show_title = get_theme_mod('caeliora_page_show_title', 'show');
		}
	}
	return $show_title;
}
}

/* Page Share Buttons */
if ( !function_exists('caeliora_page_show_social') ) {
function caeliora_page_show_social() {
	if (!class_exists('ACF')) {
		$show_title = get_theme_mod('caeliora_page_show_social', 'show');
	} else {
		if(get_field('caeliora_acf_page_show_social')) {
			if(get_field('caeliora_acf_page_show_social') == 'default') {
				$show_title = get_theme_mod('caeliora_page_show_social', 'show');
			} else {
				$show_title = get_field('caeliora_acf_page_show_social');
			}
		} else {
			$show_title = get_theme_mod('caeliora_page_show_social', 'show');
		}
	}
	return $show_title;
}
}


/* Page Content */
if ( !function_exists('caeliora_page_hide_content') ) {
function caeliora_page_hide_content() {
	if (!class_exists('ACF')) {
		$hide_content = false;
	} else {
		if(get_field('caeliora_acf_page_blog_enable')) {
			$hide_content = get_field('caeliora_acf_page_hide_content');
			$hide_content = isset($hide_content) ? $hide_content : false;
		} else {
			$hide_content = false;
		}
	}
	return $hide_content;
}
}

/* Check if all page elements is hidden */
if ( !function_exists('caeliora_page_is_hidden') ) {
function caeliora_page_is_hidden() {
	if (class_exists('ACF')) {
		if(caeliora_page_show_social() != 'show' && caeliora_page_show_title() != 'show' && caeliora_page_hide_content() == true) {
			return 'hide_page';
		}
	}
}
}