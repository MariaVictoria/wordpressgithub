<?php
/**
 * Latest Posts Widget
 */

add_action( 'widgets_init', 'caeliora_latest_news_load_widget' );

function caeliora_latest_news_load_widget() {
	register_widget( 'caeliora_latest_news_widget' );
}

class caeliora_latest_news_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'caeliora_latest_news_widget', 'description' => esc_html__('A post widget that can display your latest posts, posts from a category, or hand-picked posts by ID.', 'caeliora') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'caeliora_latest_news_widget' );

		/* Create the widget. */
		parent::__construct( 'caeliora_latest_news_widget', esc_html__('Caeliora: Post Widget', 'caeliora'), $widget_ops, $control_ops );
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$layout = $instance['layout'];
		$categories = $instance['categories'];
		$number = $instance['number'];
		$counter = $instance['counter'];
		$date = $instance['date'];
		$postids = $instance['postids'];
		
		if($postids) {
			$postids = explode(',', $postids);
			$args_posts = array( 'showposts' => $number, 'post_type' => array('post', 'page'), 'post__in' => $postids, 'orderby' => 'post__in', 'ignore_sticky_posts' => 1 );
		} else {
			$args_posts = array( 'showposts' => $number, 'nopaging' => 0, 'post_status' => 'publish', 'ignore_sticky_posts' => 1, 'cat' => $categories );
		}
		
		$loop = new WP_Query($args_posts);
		if ($loop->have_posts()) :
		
		$number_count = 0;
		
		/* Before widget (defined by themes). */
		echo wp_kses_post( $args['before_widget'] );

		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );
		}
		
		?>
			
			<?php  while ($loop->have_posts()) : $loop->the_post(); ?>
				<?php $number_count++; ?>
				
				<?php if($layout == 'big_thumb_overlay') : ?>
				
				<div class="side-pop overlay">
				
					<div class="side-pop-img">
						
						<?php if(has_post_thumbnail()) : ?>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-widget-big-thumb'); ?></a>
						<?php else : ?>
						<a href="<?php the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/default-widget-big.png" alt="<?php esc_attr_e('Default', 'caeliora'); ?>" /></a>
						<?php endif; ?>
						
						<?php if($counter) : ?><span class="side-count"><?php echo esc_html($number_count); ?></span><?php endif; ?>
						
						<div class="side-pop-content">
							<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
							<?php if(!$date) : ?><span class="dt-date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
						</div>
					</div>
				
				</div>
				
				<?php elseif($layout == 'text_layout') : ?>
				
				<div class="side-pop list text-layout <?php if(!$counter) : ?>no-count<?php endif; ?>">

					<?php if($counter) : ?>
					<div class="side-pop-img">
						<span class="side-count"><?php echo esc_html($number_count); ?></span>
					</div>
					<?php endif; ?>
					
					<div class="side-pop-content <?php if(!$counter) : ?>no-counter<?php endif; ?>">
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<?php if(!$date) : ?><span class="dt-date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
					</div>
				
				</div>
				
				<?php else : ?>
				<div class="side-pop <?php if($layout == 'small_thumb') : ?>list<?php endif; ?>">
					
					<div class="side-pop-img">
						<?php if(has_post_thumbnail()) : ?>
						
							<?php if($layout == 'big_thumb') : ?>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-widget-big-thumb'); ?></a>
							<?php else : ?>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('caeliora-widget-small-thumb'); ?></a>
							<?php endif; ?>
							
						<?php else : ?>
						
							<?php if($layout == 'big_thumb') : ?>
								<a href="<?php the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/default-widget-big.png" alt="<?php esc_attr_e('Default', 'caeliora'); ?>" /></a>
							<?php else : ?>
								<a href="<?php the_permalink() ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/default-widget-small.png" alt="<?php esc_attr_e('Default', 'caeliora'); ?>" /></a>
							<?php endif; ?>
							
						<?php endif; ?>
						<?php if($counter) : ?><span class="side-count"><?php echo esc_html($number_count); ?></span><?php endif; ?>
					</div>
					
					<div class="side-pop-content">
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<?php if(!$date) : ?><span class="dt-date"><?php the_time( get_option('date_format') ); ?></span><?php endif; ?>
					</div>
				
				</div>
				<?php endif; ?>
			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php /* After widget */ echo wp_kses_post( $args['after_widget'] ); ?>
			<?php endif; ?>
			
		<?php

	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['layout'] = $new_instance['layout'];
		$instance['categories'] = $new_instance['categories'];
		$instance['number'] = strip_tags( $new_instance['number'] );
		$instance['date'] = strip_tags( $new_instance['date'] );
		$instance['counter'] = strip_tags( $new_instance['counter'] );
		$instance['postids'] = strip_tags( $new_instance['postids'] );		
		
		return $instance;
	}

	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => __('Latest Posts', 'caeliora'), 'number' => 3, 'categories' => '', 'layout' => '', 'date' => false, 'counter' => false, 'postids' => '');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>
		
		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e('Title:', 'caeliora'); ?></label>
			<input  type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>"  />
		</p>
		
		<!-- Layout -->
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('layout')); ?>"><?php esc_html_e( 'Choose Layout', 'caeliora' ); ?>:</label> 
		<select id="<?php echo esc_attr($this->get_field_id('layout')); ?>" name="<?php echo esc_attr($this->get_field_name('layout')); ?>" class="widefat categories" style="width:100%;">
			<option value='small_thumb' <?php if ('small_thumb' == $instance['layout']) echo 'selected="selected"'; ?>><?php esc_html_e( 'Small Thumbnail', 'caeliora' ); ?></option>
			<option value='big_thumb' <?php if ('big_thumb' == $instance['layout']) echo 'selected="selected"'; ?>><?php esc_html_e( 'Big Thumbnail', 'caeliora' ); ?></option>
			<option value='big_thumb_overlay' <?php if ('big_thumb_overlay' == $instance['layout']) echo 'selected="selected"'; ?>><?php esc_html_e( 'Big Thumbnail w/ Overlay', 'caeliora' ); ?></option>
			<option value='text_layout' <?php if ('text_layout' == $instance['layout']) echo 'selected="selected"'; ?>><?php esc_html_e( 'Text Only List', 'caeliora' ); ?></option>
		</select>
		</p>
		
		<!-- Category -->
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('categories')); ?>"><?php esc_html_e( 'Filter by Category', 'caeliora' ); ?>:</label> 
		<select id="<?php echo esc_attr($this->get_field_id('categories')); ?>" name="<?php echo esc_attr($this->get_field_name('categories')); ?>" class="widefat categories" style="width:100%;">
			<option value='all' <?php if ('all' == $instance['categories']) echo 'selected="selected"'; ?>><?php esc_html_e('All categories', 'caeliora'); ?></option>
			<?php $categories = get_categories('hide_empty=0&depth=1&type=post'); ?>
			<?php foreach($categories as $category) { ?>
			<option value='<?php echo esc_attr($category->term_id); ?>' <?php if ($category->term_id == $instance['categories']) echo 'selected="selected"'; ?>><?php echo esc_html($category->cat_name); ?></option>
			<?php } ?>
		</select>
		</p>
		
		<!-- Post IDs -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'postids' )); ?>"><?php esc_html_e('Post IDs (separate with comma):', 'caeliora'); ?></label>
			<input  type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'postids' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'postids' )); ?>" value="<?php echo esc_attr($instance['postids']); ?>" size="3" />
			<small><?php esc_html_e( 'Display specific posts using post IDs. This option will override the category option above.', 'caeliora' ); ?></small>
		</p>
		
		<!-- Number of posts -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php esc_html_e('Number of posts to show:', 'caeliora'); ?></label>
			<input  type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id( 'number' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" value="<?php echo esc_attr($instance['number']); ?>" size="3" />
		</p>
		
		<!-- Numbering -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'counter' )); ?>"><?php esc_html_e( 'Add Numbering', 'caeliora' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'counter' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'counter' )); ?>" <?php checked( (bool) $instance['counter'], true ); ?> />
		</p>
		
		<!-- Date -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'date' )); ?>"><?php esc_html_e( 'Hide Date', 'caeliora' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'date' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'date' )); ?>" <?php checked( (bool) $instance['date'], true ); ?> />
		</p>

	<?php
	}
}

?>