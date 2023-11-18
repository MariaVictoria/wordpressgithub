<article id="post-<?php the_ID(); ?>" class="grid-item <?php if(!has_post_thumbnail()) : ?>no-image<?php endif; ?>">
<div class="grid-inner">

	<?php if(has_post_thumbnail()) : ?>
	<div class="post-img">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-grid-post-thumb'); ?></a>
	</div>
	<?php endif; ?>
	
	<div class="post-header">
		
		<?php if(get_theme_mod('caeliora_post_grid_show_cat', true)) : ?>
		<div class="post-cats">
			<?php the_category(' <span>/</span> '); ?>
		</div>
		<?php endif; ?>
		
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<?php
		if( isset( $args['style'] ) ) {
			if ( $args['style'] != 'grid-style2' ) {
				if ( get_theme_mod('caeliora_home_grid_excerpt_display', false) != true) {
					$get_excerpt_length = get_theme_mod('caeliora_home_grid_excerpt_length', 18);
					echo caeliora_excerpt($get_excerpt_length);
				}
			}
		} else {
			if ( caeliora_get_post_style() != 'grid-style2' ) {
				if ( get_theme_mod('caeliora_home_grid_excerpt_display', false) != true) {
					$get_excerpt_length = get_theme_mod('caeliora_home_grid_excerpt_length', 18);
					echo caeliora_excerpt($get_excerpt_length);
				}
			}
		}
		?>		
		
		<?php if(get_theme_mod('caeliora_post_grid_show_date', true)) : ?>
		<span class="dt-date updated published"><?php the_time( get_option('date_format') ); ?></span>
		<?php endif; ?>
		
	</div>
</div>	
</article>