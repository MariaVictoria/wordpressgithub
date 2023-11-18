<?php if(get_the_author_meta('description')) : ?>
<div class="about-author">
	<?php echo get_avatar( get_the_author_meta('email'), '110' ); ?>
	<span class="about-heading"><?php esc_html_e( 'About Author', 'caeliora' ); ?></span>
	<h2 class="author-title"><?php the_author_posts_link(); ?></h2>
	<p><?php the_author_meta('description'); ?></p>
	<div class="author-links">
		<?php if(function_exists('caeliora_core_get_author_icons')) { caeliora_core_get_author_icons(); } ?>
	</div>
</div>
<?php endif; ?>