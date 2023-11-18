<?php
if (!class_exists('ACF')) {
	$get_title_pos = get_theme_mod('caeliora_post_layout_layout1_title', 'above');
} else {
	$get_title_pos = get_field('caeliora_acf_post_style1_title_pos');
	$get_title_pos = isset($get_title_pos) ? $get_title_pos : 'default';
	
	if($get_title_pos == 'default') {
		$get_title_pos = get_theme_mod('caeliora_post_layout_layout1_title', 'above');
	}
}
?>
<?php if(!is_single()) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('classic-post'); ?>>
<?php else : ?>
<div class="classic-post">
<?php endif; ?>

	<?php if($get_title_pos == 'above') { caeliora_get_post_header(); } ?>
	
	<?php
		$get_post_format = caeliora_get_post_layout();
		if($get_post_format['format'] == 'video') {
			caeliora_get_featured_video();
		} elseif($get_post_format['format'] == 'gallery') {
			caeliora_get_featured_gallery();
		} else {
			caeliora_get_featured_image();
		}
	?>
	
	<?php if($get_title_pos == 'below') { caeliora_get_post_header(); } ?>
	
	<?php get_template_part('parts/post/post-content'); ?>
	
<?php if(!is_single()) : ?>
</article>
<?php else : ?>
</div>
<?php endif; ?>