<?php
/*
* Get featured area content
*/
if ( !function_exists('caeliora_get_featured_content') ) {
function caeliora_get_featured_content() {
	
	if(is_page() && class_exists('ACF')) {
		
		$feat_content_type = get_field('caeliora_acf_page_feat_content_type');
		$feat_content_type = isset($feat_content_type) ? $feat_content_type : 'latest';
		
		$feat_amount = get_field('caeliora_acf_page_feat_amount');
		$feat_amount = isset($feat_amount) ? $feat_amount : '3';
		
		if($feat_content_type == 'latest') {
			$feat_query = array(
				'showposts' => $feat_amount,
				'ignore_sticky_posts' => 1
			);
		} elseif($feat_content_type == 'category') {
			$feat_query = array(
				'showposts' => $feat_amount,
				'cat' => get_field('caeliora_acf_page_feat_content_category'),
				'ignore_sticky_posts' => 1
			);
		} elseif($feat_content_type == 'tag') {
			$feat_query = array(
				'showposts' => $feat_amount,
				'tag__in' => get_field('caeliora_acf_page_feat_content_tag'),
				'ignore_sticky_posts' => 1
			);
		} elseif($feat_content_type == 'specific') {
			
			$featured_ids = explode(',', get_field('caeliora_acf_page_feat_content_posts'));
			
			$feat_query = array(
				'showposts' => $feat_amount,
				'post_type' => array('any'),
				'post__in' => $featured_ids,
				'orderby' => 'post__in',
				'ignore_sticky_posts' => 1
			);
		}
		
	} else {
		
		$feat_content_type = get_theme_mod('caeliora_home_feat_content_type', 'latest');
		$feat_amount = get_theme_mod('caeliora_home_feat_amount', '3');
		
		if($feat_content_type == 'latest') {
			$feat_query = array(
				'showposts' => $feat_amount,
				'ignore_sticky_posts' => 1
			);
		} elseif($feat_content_type == 'category') {
			$feat_query = array(
				'showposts' => $feat_amount,
				'cat' => get_theme_mod('caeliora_home_feat_content_category'),
				'ignore_sticky_posts' => 1
			);
		} elseif($feat_content_type == 'tag') {
			$feat_query = array(
				'showposts' => $feat_amount,
				'tag__in' => get_theme_mod('caeliora_home_feat_content_tag'),
				'ignore_sticky_posts' => 1
			);
		} elseif($feat_content_type == 'specific') {
			
			$featured_ids = explode(',', get_theme_mod('caeliora_home_feat_content_posts'));
		
			$feat_query = array(
				'showposts' => $feat_amount,
				'post_type' => array('any'),
				'post__in' => $featured_ids,
				'orderby' => 'post__in',
				'ignore_sticky_posts' => 1
			);
		}
	
	}

	return $feat_query;

}
}


/*
* Get featured area post image
*/
if ( !function_exists('caeliora_get_feat_image') ) {
function caeliora_get_feat_image($thumb) {
	
	if(class_exists('ACF')) {
		
		if(get_field('caeliora_acf_post_feat_custom_image')) {
			// $feat_img = get_field('caeliora_acf_post_feat_custom_image');
		} else {
			if(has_post_thumbnail()) {
				$get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $thumb );
				$feat_img = isset( $get_feat_image[0] ) ? $get_feat_image[0] : "";
			} else {
				$feat_img = get_template_directory_uri() . '/img/slider-default.png';
			}
		}
	} else {
		if(has_post_thumbnail()) {
			$get_feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $thumb );
			$feat_img = isset( $get_feat_image[0] ) ? $get_feat_image[0] : "";
		} else {
			$feat_img = get_template_directory_uri() . '/img/slider-default.png';
		}
	}
	
	return $feat_img;
	
}
}


/*
* Get featured post title
*/
if ( !function_exists('caeliora_get_feat_title') ) {
function caeliora_get_feat_title() {
	
	if(class_exists('ACF')) {
		if(get_field('caeliora_acf_post_feat_custom_title')) {
			$feat_title = get_field('caeliora_acf_post_feat_custom_title');
		} else {
			$feat_title = get_the_title(get_the_ID());
		}
	} else {
		$feat_title = get_the_title(get_the_ID());
	}
	
	return $feat_title;
	
}
}