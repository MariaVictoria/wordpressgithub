<?php if(caeliora_page_hide_content() == true) : else : ?>
<div class="post-entry">
	
	<?php the_content('', false); ?>
	
	<?php wp_link_pages(); ?>
	
</div>
<?php endif; ?>

<?php 
	/* Post Footer Share */
	if(caeliora_page_show_social() == 'show') {
		if(function_exists('caeliora_get_social_share')) {
			caeliora_get_social_share('footer');
		}
	}
?>

<?php 
	if ( comments_open() ) {
	comments_template( '', true );
	} 
?>