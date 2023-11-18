<?php
	/* Post Meta */
	caeliora_get_post_meta();
?>

<div class="post-entry">
	
	<?php caeliora_get_post_teaser('content'); ?>
	
	<?php
		$get_summary_type = get_theme_mod('caeliora_excerpt_classic_type', 'excerpt');
		if(is_single()) {
			the_content('', false);
		} else {
			if($get_summary_type == 'readmore') {
				the_content();
			} else {
				$get_excerpt_length = get_theme_mod('caeliora_excerpt_classic_length', 40);
				echo caeliora_excerpt($get_excerpt_length);
			}
		}
	?>
	
	<?php if(!is_single() && $get_summary_type != 'readmore') : ?>
	<div class="read-more-wrapper">
		<a href="<?php the_permalink(); ?>" class="read-more">
			<span class="more-text"><?php esc_html_e( 'Continue Reading', 'caeliora' ); ?></span>
			<span class="more-line"></span>
		</a>
	</div>
	<?php endif; ?>
	
	<?php wp_link_pages(); ?>

	<?php if(is_single() && has_tag() && caeliora_post_show_tags() == 'show') : ?>
		<div class="post-tags">
			<?php the_tags("",""); ?>
		</div>
	<?php endif; ?>
	
</div>

<?php 
	
	/* Post Footer Share */
	if(function_exists('caeliora_get_social_share') && caeliora_show_post_footer_share() == 'display') {
		caeliora_get_social_share('footer');
	} elseif(function_exists('caeliora_get_social_share') && caeliora_show_post_footer_share() == 'single_display') {
		if(is_single()) {
			caeliora_get_social_share('footer');
		}
	}

	/* Author box */
	if(caeliora_post_show_author_box() == 'show' && is_single()) {
	get_template_part('parts/post/author-box');
	}

	/* Related Posts */
	if(caeliora_post_show_related() == 'show' && is_single()) {
	get_template_part('parts/post/related-posts');
	}
	
	/* Comments */
	if ( is_single() && comments_open() ) {
		comments_template( '', true );
	}
	
	/* Post Pagination */
	if(caeliora_post_show_pagination() == 'show' && is_single()) {
	get_template_part('parts/post/post-pagination');
	}
	
?>