<?php

/*
* Get Post Header
*/
if(!function_exists('caeliora_get_post_header')) {
function caeliora_get_post_header($class="normal") { ?>
	
	<?php if(caeliora_post_show_category() == 'show' || caeliora_post_show_title() == 'show' || caeliora_post_show_date() == 'show') :  ?>
	<div class="post-header <?php echo esc_attr($class); ?>">
		
		<?php if(caeliora_post_show_category() == 'show') : ?>
		<div class="post-cats">
			<?php the_category(' <span>/</span> '); ?>
		</div>
		<?php endif; ?>
		
		<?php if(caeliora_post_show_title() == 'show') : ?>
			<?php if(is_single()) : ?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php caeliora_get_post_teaser('title'); ?>
		
		<?php if(caeliora_post_show_date() == 'show') : ?>
		<div class="date-wrap">
			<?php if(get_theme_mod('caeliora_post_show_date_update', false) == true) : ?>
				
				<?php $pubdate = get_the_time( get_option('date_format')); $moddate = get_the_modified_date(); if($pubdate != $moddate && is_single()) : ?>
					<span class="dt-date updated published"><?php esc_html_e( 'Updated', 'caeliora' ); ?> <?php the_modified_date(); ?></span>
				<?php else : ?>
					<span class="dt-date updated published"><a href="<?php the_permalink(); ?>"><?php the_time( get_option('date_format') ); ?></a></span>
				<?php endif; ?>
				
			<?php else : ?>
				<span class="dt-date updated published"><a href="<?php the_permalink(); ?>"><?php the_time( get_option('date_format') ); ?></a></span>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		
	</div>
	<?php endif; ?>

<?php }
}

/*
* Post Meta
*/
if(!function_exists('caeliora_post_meta')) {
function caeliora_post_meta() { ?>
	<div class="post-meta">
	
	<div class="meta-left">
		
		<?php if(caeliora_post_show_author_avatar() == 'show' || caeliora_post_show_author() == 'show') : ?>
		<div class="meta-author-wrap">
			<?php if(caeliora_post_show_author_avatar() == 'show') : ?>
			<div class="meta-author-img">
				<?php echo get_avatar( get_the_author_meta('email'), '38' ); ?>
			</div>
			<?php endif; ?>
			<?php if(caeliora_post_show_author() == 'show') : ?>
			<div class="meta-author-info">
				<span class="written"><?php esc_html_e('Written by', 'caeliora'); ?></span>
				<span class="author-name"><span class="vcard author"><span class="fn"><?php the_author_posts_link(); ?></span></span></span>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	
	</div>
	
	<div class="meta-right">
		
		<?php if(function_exists('caeliora_get_social_share') && caeliora_post_show_meta_share() == 'show') { caeliora_get_social_share('header'); } ?>
		<?php if(function_exists('caeliora_core_get_mobile_social_share') && caeliora_post_show_meta_share() == 'show') { caeliora_core_get_mobile_social_share(); } ?>
		<?php if(caeliora_post_show_leavereply() == 'show' && comments_open()) : ?>
		<div class="meta-comment">
			<a href="<?php comments_link() ?>" />
			<div class="comment-bubble">
				
				<?php comments_number( '0', '1', '%' ); ?>
				
			</div>
			</a>
		</div>
		<?php endif; ?>
		
	</div>

</div>
<?php }
}

/*
* Get Post Meta
*/
if(!function_exists('caeliora_get_post_meta')) {
function caeliora_get_post_meta() {
	
	if (!class_exists('ACF')) {
		$show_post_meta = get_theme_mod('caeliora_post_show_post_meta', 'single_display');
	} else {
		$show_post_meta = get_field('caeliora_acf_post_show_post_meta');
		$show_post_meta = isset($show_post_meta) ? $show_post_meta : 'default';
		
		if($show_post_meta == 'default') {
			$show_post_meta = get_theme_mod('caeliora_post_show_post_meta', 'single_display');
		}
	}
	
	if($show_post_meta == 'single_display') {
		if(is_single()) {
			caeliora_post_meta();
		}
	} elseif($show_post_meta == 'display') {
		caeliora_post_meta();
	}
	
}
}

/* Get Post Footer Share Buttons */
if(!function_exists('caeliora_show_post_footer_share')) {
function caeliora_show_post_footer_share() {
	
	if (!class_exists('ACF')) {
		$show_post_footer_share = get_theme_mod('caeliora_post_show_footer_social', 'display');
	} else {
		$show_post_footer_share = get_field('caeliora_acf_post_show_footer_social');
		$show_post_footer_share = isset($show_post_footer_share) ? $show_post_footer_share : 'default';
		
		if($show_post_footer_share == 'default') {
			$show_post_footer_share = get_theme_mod('caeliora_post_show_footer_social', 'display');
		}
	}
	
	return $show_post_footer_share;
	
}
}

/*
* Get Post Image
*/
if(!function_exists('caeliora_get_featured_image')) {
function caeliora_get_featured_image() {

	if (!class_exists('ACF')) {
		$show_featured_image = get_theme_mod('caeliora_post_show_image', 'display');
	} else {
		$show_featured_image = get_field('caeliora_acf_post_show_image');
		$show_featured_image = isset($show_featured_image) ? $show_featured_image : 'default';
		
		if($show_featured_image == 'default') {
			$show_featured_image = get_theme_mod('caeliora_post_show_image', 'display');
		}
	}
	
	if($show_featured_image == 'ho_display') {
		if(!is_single() && has_post_thumbnail()) { ?>
			<div class="post-img">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-fullwidth'); ?></a>
			</div>
		<?php }
	} elseif($show_featured_image == 'display') {
		if(is_single() && has_post_thumbnail()) { ?>
			<div class="post-img">
				<?php the_post_thumbnail('caeliora-fullwidth'); ?>
			</div>
		<?php } else { ?>
			<?php if(has_post_thumbnail()) : ?>
			<div class="post-img">
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-fullwidth'); ?></a>
			</div>
			<?php endif; ?>
		<?php }
	}
}
}

/*
* Get Video
*/
if(!function_exists('caeliora_get_featured_video')) {
function caeliora_get_featured_video() { ?>
	
	<?php if (class_exists('ACF')) : ?>
	<div class="post-img isVideo">
		<div class="embed-container">
			<?php the_field('caeliora_acf_video_url'); ?>
		</div>
	</div>
	<?php else : ?>
		<?php caeliora_get_featured_image(); ?>
	<?php endif; ?>
	
<?php }
}

/*
* Get gallery
*/
if(!function_exists('caeliora_get_featured_gallery')) {
function caeliora_get_featured_gallery() { 
	
	if (class_exists('ACF')) {
		
		$get_gallery = array();
		if(get_field('caeliora_acf_gallery')) {
		$get_gallery = get_field('caeliora_acf_gallery');
		}
		$gallery_count = count($get_gallery);
		$gallery_current_count = 0;
		
		wp_localize_script( 'caeliora-scripts', 'autoplay_object', 
		array( 
				'autoplay_speed' => 4000,
			) 
		);
		
		if($get_gallery) { ?>
			<div class="feat-area post-img gallery feat-arrows">
				
				<?php foreach($get_gallery as $gallery_item) : ?>
				<?php $gallery_current_count++; ?>
				<div class="clc-gallery-item-wrap">
					<div class="clc-gallery-item">
						<div class="clc-gallery-image">
						<img src="<?php echo esc_url($gallery_item['sizes']['caeliora-fullwidth']); ?>" alt="<?php echo esc_attr($gallery_item['alt']); ?>" />
						<nav class="new-new">
							<a href="#" class="slick-prev"><i class="fa fa-angle-left"></i></a>
							<a href="#" class="slick-next"><i class="fa fa-angle-right"></i></a>
						</nav>
						</div>
						<?php if(get_field('caeliora_acf_gallery_counter') == 'hide' && !$gallery_item['caption']) : else : ?>
						<div class="clc-gallery-caption-wrap <?php if(get_field('caeliora_acf_gallery_caption_pos') == 'overlay') : ?>overlay-on<?php endif; ?>">
							<?php if(get_field('caeliora_acf_gallery_counter') == 'hide') : else : ?>
							<div class="slide-count">
								<i class="fa fa-camera"></i>
								<span class="current-slide"><?php echo esc_html($gallery_current_count); ?></span> <?php esc_html_e( 'of', 'caeliora' ); ?> <span class="total-slide"><?php echo esc_html($gallery_count); ?></span>
							</div>
							<?php endif; ?>
							<?php if($gallery_item['caption']) : ?>
							<div class="clc-gallery-caption <?php if(get_field('caeliora_acf_gallery_counter') == 'hide') : else : ?>counter-on<?php endif; ?>">
								<p><?php echo wp_kses_post($gallery_item['caption']); ?></p>
							</div>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
			
			</div>
			
		<?php }

	}
}
}

/*
* Get Post Teaser
*/
if(!function_exists('caeliora_get_post_teaser')) {
function caeliora_get_post_teaser($pos="title") {
	if (class_exists('ACF')) {
		
		$get_pos = get_field('caeliora_acf_post_teaser_pos');
		
		if(get_field('caeliora_acf_post_teaser')) {
			if($get_pos == $pos) {
				if(!get_field('caeliora_acf_post_teaser_single')) {
					echo '<p class="post-teaser '. esc_attr($pos) .'">' . get_field('caeliora_acf_post_teaser') . '</p>';
				} else {
					if(is_single()) {
						echo '<p class="post-teaser '. esc_attr($pos) .'">' . get_field('caeliora_acf_post_teaser') . '</p>';
					}
				}
			}
		}
	}
}
}

/*
* Set post format
* Will automatically set the post format depending on the ACF post format setting
*/
if (class_exists('ACF')) {
	
	function caeliora_assign_post_format($post_id) {
		if(get_field('caeliora_acf_post_format', $post_id) == 'video') {
			set_post_format($post_id, 'video');
		} elseif(get_field('caeliora_acf_post_format', $post_id) == 'gallery') {
			set_post_format($post_id, 'gallery');
		} else {
			set_post_format($post_id, 'standard');
		}
	}
	add_action( 'save_post', 'caeliora_assign_post_format', 999, 1 );
}

/*
* Get post layout
*/
if(!function_exists('caeliora_get_post_layout')) {
function caeliora_get_post_layout() {
	
	if (!class_exists('ACF')) {
		
		/* If ACF is not installed then use default settings */
		$get_post_format = 'standard';
		$get_layout = get_theme_mod('caeliora_post_layout', 'layout1');
		
	} else {
		
		/* Get post format */
		$get_post_format = get_field('caeliora_acf_post_format');
		$get_post_format = isset($get_post_format) ? $get_post_format : 'standard';
		
		if($get_post_format == 'video') {
			/* Get standard video post layout */
			if(get_field('caeliora_acf_video_post_layout')) {
				if(get_field('caeliora_acf_video_post_layout') == 'default') {
					$get_layout = get_theme_mod('caeliora_video_post_layout', 'layout1');
				} else {
					$get_layout = get_field('caeliora_acf_video_post_layout');
				}
			} else {
				$get_layout = get_theme_mod('caeliora_video_post_layout', 'layout1');
			}
		} elseif($get_post_format == 'gallery') {
			/* Get standard gallery post layout */
			if(get_field('caeliora_acf_gallery_post_layout')) {
				if(get_field('caeliora_acf_gallery_post_layout') == 'default') {
					$get_layout = get_theme_mod('caeliora_gallery_post_layout', 'layout1');
				} else {
					$get_layout = get_field('caeliora_acf_gallery_post_layout');
				}
			} else {
				$get_layout = get_theme_mod('caeliora_gallery_post_layout', 'layout1');
			}
		} else {
			/* Get standard post layout */
			if(get_field('caeliora_acf_post_layout')) {
				if(get_field('caeliora_acf_post_layout') == 'default') {
					$get_layout = get_theme_mod('caeliora_post_layout', 'layout1');
				} else {
					$get_layout = get_field('caeliora_acf_post_layout');
				}
			} else {
				$get_layout = get_theme_mod('caeliora_post_layout', 'layout1');
			}
			
		}
	}
	
	$post_layout = array(
		'layout' => $get_layout,
		'format' => $get_post_format,
	);
	
	return $post_layout;
	
}
}

/*
* Get Content Layout (sidebar, full-width, full-width narrow)
*/
if(!function_exists('caeliora_get_content_layout')) {
function caeliora_get_content_layout() {
	
	if (!class_exists('ACF')) {
		
		/* If ACF is not installed then use default settings */
		$get_content_layout = get_theme_mod('caeliora_post_content_layout', 'isSidebar');
		
	} else {
		
		if(get_field('caeliora_acf_post_content_layout')) {
			if(get_field('caeliora_acf_post_content_layout') == 'default') {
				$get_content_layout = get_theme_mod('caeliora_post_content_layout', 'isSidebar');
			} else {
				$get_content_layout = get_field('caeliora_acf_post_content_layout');
			}
		} else {
			$get_content_layout = get_theme_mod('caeliora_post_content_layout', 'isSidebar');
		}
		
	}
	
	return $get_content_layout;
	
}
}

if(!function_exists('caeliora_get_content_layout_flex')) {
function caeliora_get_content_layout_flex() {
	
	if(!is_active_sidebar('sidebar-1') && caeliora_get_content_layout() === 'isFullwidth isNarrow') {
		$get_content_layout = 'isFullwidth isNarrow';
	} elseif(!is_active_sidebar('sidebar-1') && caeliora_get_content_layout() === 'isFullwidth') {
		$get_content_layout = 'isFullwidth';
	} elseif(!is_active_sidebar('sidebar-1') && caeliora_get_content_layout() === 'isSidebar') {
		$get_content_layout = 'isFullwidth isNarrow';
	} else {
		$get_content_layout = caeliora_get_content_layout();
	}
	
	return $get_content_layout;
	
}
}

/*
* Get List/Grid Style
*/
if(!function_exists('caeliora_get_post_style')) {
function caeliora_get_post_style() {
	
	if(is_archive()) {
		if(get_theme_mod('caeliora_archive_layout', 'classic') == 'grid' || get_theme_mod('caeliora_archive_layout', 'classic') == 'classic_grid') {
			$post_style = 'grid-' . get_theme_mod('caeliora_archive_layout_grid', 'style1');
		} elseif(get_theme_mod('caeliora_archive_layout', 'classic') == 'list' || get_theme_mod('caeliora_archive_layout', 'classic') == 'classic_list') {
			$post_style = 'list-' . get_theme_mod('caeliora_archive_layout_list', 'style1');
		} else {
			$post_style = 'classic-style1';
		}
	} elseif(is_search()) {
		if(get_theme_mod('caeliora_search_layout', 'classic') == 'grid' || get_theme_mod('caeliora_search_layout', 'classic') == 'classic_grid') {
			$post_style = 'grid-' . get_theme_mod('caeliora_search_layout_grid', 'style1');
		} elseif(get_theme_mod('caeliora_search_layout', 'classic') == 'list' || get_theme_mod('caeliora_search_layout', 'classic') == 'classic_list') {
			$post_style = 'list-' . get_theme_mod('caeliora_search_layout_list', 'style1');
		} else {
			$post_style = 'classic-style1';
		}
	} else {
		if(get_theme_mod('caeliora_home_layout', 'classic') == 'grid' || get_theme_mod('caeliora_home_layout', 'classic') == 'classic_grid') {
			$post_style = 'grid-' . get_theme_mod('caeliora_home_layout_grid', 'style1');
		} elseif(get_theme_mod('caeliora_home_layout', 'classic') == 'list' || get_theme_mod('caeliora_home_layout', 'classic') == 'classic_list') {
			$post_style = 'list-' . get_theme_mod('caeliora_home_layout_list', 'style1');
		} else {
			$post_style = 'classic-style1';
		}
	}
	
	return $post_style;
	
}
}

/*
* Hide/Show Post elements
*/

/* Post Category */
if(!function_exists('caeliora_post_show_category')) {
function caeliora_post_show_category() {
	if (!class_exists('ACF')) {
		$show_category = get_theme_mod('caeliora_post_show_category', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_category')) {
			if(get_field('caeliora_acf_post_show_category') == 'default') {
				$show_category = get_theme_mod('caeliora_post_show_category', 'show');
			} else {
				$show_category = get_field('caeliora_acf_post_show_category');
			}
		} else {
			$show_category = get_theme_mod('caeliora_post_show_category', 'show');
		}
	}
	
	return $show_category;
}
}

/* Post Title */
if(!function_exists('caeliora_post_show_title')) {
function caeliora_post_show_title() {
	if (!class_exists('ACF')) {
		$show_title = get_theme_mod('caeliora_post_show_title', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_title')) {
			if(get_field('caeliora_acf_post_show_title') == 'default') {
				$show_title = get_theme_mod('caeliora_post_show_title', 'show');
			} else {
				$show_title = get_field('caeliora_acf_post_show_title');
			}
		} else {
			$show_title = get_theme_mod('caeliora_post_show_title', 'show');
		}
	}
	
	return $show_title;
}
}

/* Post Date */
if(!function_exists('caeliora_post_show_date')) {
function caeliora_post_show_date() {
	if (!class_exists('ACF')) {
		$show_date = get_theme_mod('caeliora_post_show_date', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_date')) {
			if(get_field('caeliora_acf_post_show_date') == 'default') {
				$show_date = get_theme_mod('caeliora_post_show_date', 'show');
			} else {
				$show_date = get_field('caeliora_acf_post_show_date');
			}
		} else {
			$show_date = get_theme_mod('caeliora_post_show_date', 'show');
		}
	}
	
	return $show_date;
}
}

/* Post Author */
if(!function_exists('caeliora_post_show_author')) {
function caeliora_post_show_author() {
	if (!class_exists('ACF')) {
		$show_author = get_theme_mod('caeliora_post_show_author', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_author')) {
			if(get_field('caeliora_acf_post_show_author') == 'default') {
				$show_author = get_theme_mod('caeliora_post_show_author', 'show');
			} else {
				$show_author = get_field('caeliora_acf_post_show_author');
			}
		} else {
			$show_author = get_theme_mod('caeliora_post_show_author', 'show');
		}
	}
	
	return $show_author;
}
}

/* Post Author Avatar */
if(!function_exists('caeliora_post_show_author_avatar')) {
function caeliora_post_show_author_avatar() {
	if (!class_exists('ACF')) {
		$show_author = get_theme_mod('caeliora_post_show_author_avatar', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_author_avatar')) {
			if(get_field('caeliora_acf_post_show_author_avatar') == 'default') {
				$show_author = get_theme_mod('caeliora_post_show_author_avatar', 'show');
			} else {
				$show_author = get_field('caeliora_acf_post_show_author_avatar');
			}
		} else {
			$show_author = get_theme_mod('caeliora_post_show_author_avatar', 'show');
		}
	}
	
	return $show_author;
}
}

/* Post Meta Share Buttons */
if(!function_exists('caeliora_post_show_meta_share')) {
function caeliora_post_show_meta_share() {
	if (!class_exists('ACF')) {
		$show_readtime = get_theme_mod('caeliora_post_show_meta_share', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_meta_share')) {
			if(get_field('caeliora_acf_post_show_meta_share') == 'default') {
				$show_readtime = get_theme_mod('caeliora_post_show_meta_share', 'show');
			} else {
				$show_readtime = get_field('caeliora_acf_post_show_meta_share');
			}
		} else {
			$show_readtime = get_theme_mod('caeliora_post_show_meta_share', 'show');
		}
	}
	
	return $show_readtime;
}
}

/* Leave a reply */
if(!function_exists('caeliora_post_show_leavereply')) {
function caeliora_post_show_leavereply() {
	if (!class_exists('ACF')) {
		$show_leavereply = get_theme_mod('caeliora_post_show_leavereply', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_leavereply')) {
			if(get_field('caeliora_acf_post_show_leavereply') == 'default') {
				$show_leavereply = get_theme_mod('caeliora_post_show_leavereply', 'show');
			} else {
				$show_leavereply = get_field('caeliora_acf_post_show_leavereply');
			}
		} else {
			$show_leavereply = get_theme_mod('caeliora_post_show_leavereply', 'show');
		}
	}
	
	return $show_leavereply;
}
}

/* Top social buttons */
if(!function_exists('caeliora_post_show_social_top')) {
function caeliora_post_show_social_top() {
	if (!class_exists('ACF')) {
		$show_social_top = get_theme_mod('caeliora_post_show_social_top', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_social_top')) {
			if(get_field('caeliora_acf_post_show_social_top') == 'default') {
				$show_social_top = get_theme_mod('caeliora_post_show_social_top', 'show');
			} else {
				$show_social_top = get_field('caeliora_acf_post_show_social_top');
			}
		} else {
			$show_social_top = get_theme_mod('caeliora_post_show_social_top', 'show');
		}
	}
	
	return $show_social_top;
}
}

/* Author box */
if(!function_exists('caeliora_post_show_author_box')) {
function caeliora_post_show_author_box() {
	if (!class_exists('ACF')) {
		$show_author_box = get_theme_mod('caeliora_post_show_author_box', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_author_box')) {
			if(get_field('caeliora_acf_post_show_author_box') == 'default') {
				$show_author_box = get_theme_mod('caeliora_post_show_author_box', 'show');
			} else {
				$show_author_box = get_field('caeliora_acf_post_show_author_box');
			}
		} else {
			$show_author_box = get_theme_mod('caeliora_post_show_author_box', 'show');
		}
	}
	
	return $show_author_box;
}
}

/* Related tags */
if(!function_exists('caeliora_post_show_tags')) {
function caeliora_post_show_tags() {

	if (!class_exists('ACF')) {
		if(!get_theme_mod('caeliora_post_show_tags', true)) {
			$show_tags = false;
		} else {
			$show_tags = 'show';
		}
		//$show_tags = get_theme_mod('caeliora_post_show_tags', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_tags')) {
			if(get_field('caeliora_acf_post_show_tags') == 'default') {
			
				if(!get_theme_mod('caeliora_post_show_tags', true)) {
					$show_tags = false;
				} else {
					$show_tags = 'show';
				}
				
				//$show_related = get_theme_mod('caeliora_post_show_tags', 'show');
			} else {
				$show_tags = get_field('caeliora_acf_post_show_tags');
			}
		} else {
			
			if(!get_theme_mod('caeliora_post_show_tags', true)) {
				$show_tags = false;
			} else {
				$show_tags = 'show';
			}
		
			//$show_tags = get_theme_mod('caeliora_post_show_tags', 'show');
		}
	}
	
	return $show_tags;
}
}

/* Related posts */
if(!function_exists('caeliora_post_show_related')) {
function caeliora_post_show_related() {
	if (!class_exists('ACF')) {
		$show_related = get_theme_mod('caeliora_post_show_related', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_related')) {
			if(get_field('caeliora_acf_post_show_related') == 'default') {
				$show_related = get_theme_mod('caeliora_post_show_related', 'show');
			} else {
				$show_related = get_field('caeliora_acf_post_show_related');
			}
		} else {
			$show_related = get_theme_mod('caeliora_post_show_related', 'show');
		}
	}
	
	return $show_related;
}
}

/* Post Pagination */
if(!function_exists('caeliora_post_show_pagination')) {
function caeliora_post_show_pagination() {
	if (!class_exists('ACF')) {
		$show_pagination = get_theme_mod('caeliora_post_show_pagination', 'show');
	} else {
		if(get_field('caeliora_acf_post_show_pagination')) {
			if(get_field('caeliora_acf_post_show_pagination') == 'default') {
				$show_pagination = get_theme_mod('caeliora_post_show_pagination', 'show');
			} else {
				$show_pagination = get_field('caeliora_acf_post_show_pagination');
			}
		} else {
			$show_pagination = get_theme_mod('caeliora_post_show_pagination', 'show');
		}
	}
	
	return $show_pagination;
}
}

/* Excerpt functions */
if(!function_exists('custom_excerpt_length')) {
function custom_excerpt_length( $length ) {
	return 135; 
}
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

if(!function_exists('caeliora_excerpt')) {
function caeliora_excerpt($limit) {
    return '<p>'.wp_trim_words(get_the_excerpt(), $limit).'</p>';
}
}