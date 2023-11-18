<?php
/*
* Get Page blog
*/
if (class_exists('ACF') && get_field('caeliora_acf_page_blog_enable') == true) {
	
	// Set featured post exclude
	if(get_field('caeliora_acf_page_featured_enable') && get_field('caeliora_acf_page_feat_exclude') == true) {
		
		function caeliora_get_page_feat_ids() {
		
			// Determine featured posts
			$feat_content_type = get_field('caeliora_acf_page_feat_content_type');
			$feat_content_type = isset($feat_content_type) ? $feat_content_type : 'latest';
			
			$feat_amount = get_field('caeliora_acf_page_feat_amount');
			$feat_amount = isset($feat_amount) ? $feat_amount : '3';
			
			if($feat_content_type == 'latest') {
				$exclude_args = array(
					'posts_per_page' => $feat_amount,
				);
			} elseif($feat_content_type == 'category') {
				$exclude_args = array(
					'posts_per_page' => $feat_amount,
					'cat' => get_field('caeliora_acf_page_feat_content_category'),
				);
			} elseif($feat_content_type == 'tag') {
				$exclude_args = array(
					'posts_per_page' => $feat_amount,
					'tag__in' => get_field('caeliora_acf_page_feat_content_tag'),
				);
			} elseif($feat_content_type == 'specific') {
				$exclude_args = array(
					'posts_per_page' => $feat_amount,
					'post_type' => array('post', 'page'),
					'post__in' => get_field('caeliora_acf_page_feat_content_posts'),
				);
			}
			// Get the post ID's and put them in a array
			$getpost = get_posts($exclude_args);
			foreach($getpost as $post) {
				$exclude_posts[] = $post->ID;
			}
			
			return $exclude_posts;
			
		}
		
		//Modify main query to exclude posts
		function caeliora_page_exclude_feat_posts($query) {
			if( isset($query->query_vars['caeliora_page_blog']  )) {
				$query->query_vars['post__not_in'] = caeliora_get_page_feat_ids();
			}		
		}
		add_action( 'pre_get_posts', 'caeliora_page_exclude_feat_posts' );
		
	}
	
	// Set offset
	if (get_field('caeliora_acf_page_blog_amount_first_enable') == 1) {
		function caeliora_page_feed_offset( $query ) {
			$paged = $query->query_vars[ 'paged' ];
			if( isset($query->query_vars['caeliora_page_blog']  )) {
				if( !is_paged() ) {
					$query->set( 'posts_per_page', get_field('caeliora_acf_page_blog_amount_first') );
				} else {
					$paged_offset = get_field('caeliora_acf_page_blog_amount_first') + ( ($paged - 2) * get_field('caeliora_acf_page_blog_amount') );
					$query->set( 'offset', $paged_offset );
				}
			}
		}
		add_action( 'pre_get_posts', 'caeliora_page_feed_offset' );
		
		function caeliora_page_offset_pagination( $found_posts, $query ) {
			if( isset($query->query_vars['caeliora_page_blog']  )) {
				if( !is_paged() ) {
					return( get_field('caeliora_acf_page_blog_amount_first') + ( $found_posts - get_field('caeliora_acf_page_blog_amount_first') ) * get_field('caeliora_acf_page_blog_amount_first') / get_field('caeliora_acf_page_blog_amount') );
				} else {
					return( $found_posts - (get_field('caeliora_acf_page_blog_amount_first') - get_field('caeliora_acf_page_blog_amount')) );
				}
			}
			return $found_posts;
		}
		add_filter( 'found_posts', 'caeliora_page_offset_pagination', 10, 2 ); 
	}
	
	$blog_layout = get_field('caeliora_acf_page_blog_layout');
	$blog_layout = isset($blog_layout) ? $blog_layout : 'classic';
	
	$post_per_page = get_field('caeliora_acf_page_blog_amount');
	$post_per_page = isset($post_per_page) ? $post_per_page : '10';
	
	$post_per_page_first = get_field('caeliora_acf_page_blog_amount');
	$post_per_page_first = isset($post_per_page_first) ? $post_per_page_first : '10';
	
	$blog_cat = get_field('caeliora_acf_page_blog_cat');
	$blog_heading = get_field('caeliora_acf_page_blog_heading');
	
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } elseif ( get_query_var('page') ) { $paged = get_query_var('page'); } else { $paged = 1; }
	
	$args = array(       
		'paged'          	   => $paged,
		'posts_per_page'	   => $post_per_page,
		'cat'				   => $blog_cat,
		'ignore_sticky_posts'  => 1,
		'caeliora_page_blog'      => true
	);
	
	$blog_query = new WP_Query( $args );
	
	if ($blog_query->have_posts()) :
	// Save wp_query then assign new blog_query as wp_query
	$temp_query = $wp_query;
	$wp_query   = NULL;
	$wp_query   = $blog_query;
?>
	
	<?php if(get_field('caeliora_acf_page_blog_heading')) : ?>
	<div class="block-heading-wrap blog-page">
		<h5 class="block-heading"><?php echo esc_html(get_field('caeliora_acf_page_blog_heading')); ?></h5>
	</div>
	<?php endif; ?>
	
	<?php
		// Get post style
		if(get_field('caeliora_acf_page_blog_layout') == 'grid' || get_field('caeliora_acf_page_blog_layout') == 'classic_grid') {
			$post_style = 'grid-' . get_field('caeliora_acf_page_blog_layout_grid');
			$post_style = isset($post_style) ? $post_style : 'grid-style1';
		} elseif(get_field('caeliora_acf_page_blog_layout') == 'list' || get_field('caeliora_acf_page_blog_layout') == 'classic_list') {
			$post_style = 'list-' . get_field('caeliora_acf_page_blog_layout_list');
			$post_style = isset($post_style) ? $post_style : 'list-style1';
		} else {
			$post_style = 'classic-style1';
		}
		
	?>
	
	<div class="post-wrap <?php echo esc_attr($blog_layout); ?> <?php echo esc_attr($post_style); ?> <?php if(get_field('caeliora_acf_page_blog_layout_list_alternate')) : ?>alternate<?php endif; ?>">
	
	<?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
	
		<?php if($blog_layout == 'classic_grid') : ?>
						
			<?php if( $blog_query->current_post == 0 && !is_paged() ) : ?>
				<?php get_template_part('content'); ?>
			<?php else : ?>
				<?php get_template_part('content', 'grid'); ?>
			<?php endif; ?>
			
		<?php elseif($blog_layout == 'grid') : ?>
			
			<?php get_template_part( 'content-grid', null, array( 'style' => $post_style)); ?>
			
		<?php elseif($blog_layout == 'classic_list') : ?>
			
			<?php if( $blog_query->current_post == 0 && !is_paged() ) : ?>
				<?php get_template_part('content'); ?>
			<?php else : ?>
				<?php get_template_part('content', 'list'); ?>
			<?php endif; ?>
			
		<?php elseif($blog_layout == 'list') : ?>
			
			<?php get_template_part('content', 'list'); ?>
			
		<?php else : ?>
			
			<?php get_template_part('content'); ?>
			
		<?php endif; ?>
		
	<?php endwhile; ?>
	<!-- END POST-WRAP -->
	</div>
	
	<?php 
	
		caeliora_pagination();
	
		// Set wp_query back to orignal
		$wp_query = NULL;
		$wp_query = $temp_query;
		wp_reset_postdata();
		endif;
	?>

<?php } ?>