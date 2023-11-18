<?php if(caeliora_page_is_hidden() != 'hide_page') : ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php 
	
	if (class_exists('ACF')) {
		$get_image = get_field('caeliora_acf_page_show_image');
		$get_image = isset($get_image) ? $get_image : 'show';
	} else {
		$get_image = 'show';
	}
	
	// Get page header
	caeliora_get_page_header();
	
	// Get page featured image
	if($get_image == 'show') {
	caeliora_get_featured_image();
	}
	
	// Get page content
	get_template_part('parts/page/page-content'); 
	
	?>
	
</article>
<?php endif; ?>