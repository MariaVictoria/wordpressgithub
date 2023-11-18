<?php 

$orig_post = $post;
global $post;

if(get_theme_mod('caeliora_post_related_type', 'cat') == 'tag') {
	$related_type = wp_get_post_tags($post->ID);
} else {
	$related_type = get_the_category($post->ID);
}
$amount = get_theme_mod('caeliora_post_related_amount', 3);

if ($related_type) {

	$category_ids = array();

	foreach($related_type as $individual_category) $category_ids[] = $individual_category->term_id;
	
	if (get_theme_mod('caeliora_post_related_type', 'cat') == 'tag') {
		$args = array(
			'tag__in'	     => $category_ids,
			'post__not_in'     => array($post->ID),
			'posts_per_page'   => $amount,
			'ignore_sticky_posts' => 1,
			'orderby' => 'rand'
		);
	} else {
		$args = array(
			'category__in'     => $category_ids,
			'post__not_in'     => array($post->ID),
			'posts_per_page'   => $amount,
			'ignore_sticky_posts' => 1,
			'orderby' => 'rand'
		);

	}

	$caeliora_related_query = new wp_query( $args );
	if( $caeliora_related_query->have_posts() ) { ?>
	
	<div class="related-wrap">
			
		<div class="block-heading-wrap">
			<h2 class="block-heading"><?php esc_html_e( 'Further Reading...', 'caeliora' ); ?></h2>
		</div>
			
		<div class="related-posts">
		
			<?php while( $caeliora_related_query->have_posts() ) {
			$caeliora_related_query->the_post();?>
			
			<div class="related-item <?php if(!has_post_thumbnail()) : ?>no-image<?php endif; ?>">
				<?php if(has_post_thumbnail()) : ?><a class="related-link" href="<?php the_permalink(); ?>"></a><?php endif; ?>
				<?php if(has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('caeliora-grid-post-thumb'); ?>
				<?php endif; ?>
				<div class="related-overlay">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php if(get_theme_mod('caeliora_post_show_related_date', true)) : ?><span class="dt-date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
				</div>
				
			</div>

		<?php
		}
		echo '</div></div>';
	}
}
$post = $orig_post;
wp_reset_postdata();

?>