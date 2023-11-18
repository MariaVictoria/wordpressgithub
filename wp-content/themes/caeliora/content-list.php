<article id="post-<?php the_ID(); ?>" class="list-item <?php if(!has_post_thumbnail()) : ?>no-image<?php endif; ?>">

	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">	
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-grid-post-thumb'); ?></a>		
	</div>
	<?php endif; ?>
	
	<div class="list-content">
	
		<div class="post-header">
			
			<?php if(get_theme_mod('caeliora_post_list_show_cat', true)) : ?>
			<div class="post-cats">
				<?php the_category(' <span>/</span> '); ?>
			</div>
			<?php endif; ?>
			
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php
				if(get_theme_mod('caeliora_home_list_excerpt_display', false) != true) {
					$get_excerpt_length = get_theme_mod('caeliora_home_list_excerpt_length', 18);
					echo caeliora_excerpt($get_excerpt_length);
				}
			?>
			
			<?php if(get_theme_mod('caeliora_post_list_show_author', true)) : ?><span class="list-author"><?php echo get_avatar( get_the_author_meta('email'), '26' ); ?> <span class="by"><?php esc_html_e( 'by', 'caeliora' ); ?></span> <?php the_author_posts_link(); ?></span><?php endif; ?> <?php if(get_theme_mod('caeliora_post_list_show_date', true)) : ?><span class="dt-date updated published"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
	
		</div>
	
	</div>
	
</article>