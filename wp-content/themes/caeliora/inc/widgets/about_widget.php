<?php
/**
 * About Widget
 */

add_action( 'widgets_init', 'caeliora_about_load_widget' );

function caeliora_about_load_widget() {
	register_widget( 'caeliora_about_widget' );
}

class caeliora_about_widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function __construct() {
		/* Widget settings. */
		$widget_ops = array( 'classname' => 'caeliora_about_widget', 'description' => esc_html__('An about me widget', 'caeliora') );

		/* Widget control settings. */
		$control_ops = array( 'width' => 250, 'height' => 350, 'id_base' => 'caeliora_about_widget' );

		/* Create the widget. */
		parent::__construct( 'caeliora_about_widget', esc_html__('Caeliora: About', 'caeliora'), $widget_ops, $control_ops );
		
		add_action('admin_enqueue_scripts', array($this, 'caeliora_widget_scripts'));
		
	}
	
	public function caeliora_widget_scripts() {
		wp_enqueue_script( 'media-upload' );
		wp_enqueue_media();
		wp_enqueue_script('caeliora-widget-scripts', CAELIORA_URI . '/inc/widgets/js/caeliora-widgets.js', array('jquery'));
		wp_localize_script('caeliora-widget-scripts', 'caeliora_widget_vars', array(
			'image_box_title' => esc_attr__('Select or upload image', 'caeliora'),
			'image_button' => esc_attr__('Select', 'caeliora')
		)
		);
	}
	
	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
		extract( $args );

		/* Our variables from the widget settings. */
		$title = apply_filters('widget_title', $instance['title'] );
		$image_url = $instance['image_url'];
		$image_link = $instance['image_link'];
		$name = $instance['name'];
		$label = $instance['label'];
		$description = $instance['description'];
		$signing = $instance['signing'];
		$skew = $instance['skew'];
		
		if(!$title) {
			$args['before_widget'] = str_replace('class="', 'class="widget-no-title ', $args['before_widget']);
		}
		
		/* Before widget (defined by themes). */
		echo wp_kses_post( $args['before_widget'] );
		
		/* Display the widget title if one was input (before and after defined by themes). */
		if ( $title ) {
			echo wp_kses_post( $args['before_title'] . $title . $args['after_title'] );
		}
		?>
			
			<div class="about-widget <?php if(!$title) : ?>no-title<?php endif; ?>">
				
				<?php if($image_url) : ?>
				<?php $image_size = getimagesize($image_url); ?>
				<div class="about-img <?php if($skew) : ?>no-skew<?php endif; ?>">
					<?php if($image_link) : ?><a href="<?php echo esc_url($image_link); ?>"><?php endif; ?><img <?php echo $image_size[3]; ?> src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($title); ?>" /><?php if($image_link) : ?></a><?php endif; ?>
					<?php if(!$skew) : ?><div class="about-skew"></div><?php endif; ?>
				</div>
				<?php endif; ?>
				
				<?php if($name) : ?>
				<h5 class="about-name"><?php echo esc_html($name); ?></h5>
				<?php endif; ?>
				
				<?php if($label) : ?>
				<span class="about-label"><?php echo esc_html($label); ?></span>
				<?php endif; ?>
				
				<?php if($description) : ?>
				<p><?php echo wp_kses_post($description); ?></p>
				<?php endif; ?>
				
				<?php if($signing) : ?>
				<?php $image_size_auto = getimagesize($signing); ?>
				<span class="about-autograph"><img <?php echo $image_size_auto[3]; ?> src="<?php echo esc_url($signing); ?>" alt="<?php echo esc_attr(bloginfo( 'name' )); ?>" /></span>
				<?php endif; ?>
				
			</div>
			
		<?php

		/* After widget (defined by themes). */
		echo wp_kses_post( $args['after_widget'] );
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		/* Strip tags for title and name to remove HTML (important for text inputs). */
		$instance['title'] = strip_tags( $new_instance['title'] );
		$instance['image_url'] = $new_instance['image_url'];
		$instance['image_link'] = strip_tags( $new_instance['image_link'] );
		$instance['name'] = $new_instance['name'];
		$instance['label'] = $new_instance['label'];
		$instance['description'] = $new_instance['description'];
		$instance['signing'] = $new_instance['signing'];
		$instance['skew'] = strip_tags( $new_instance['skew'] );

		return $instance;
	}


	function form( $instance ) {

		/* Set up some default widget settings. */
		$defaults = array( 'title' => '', 'image' => '', 'description' => '', 'signing' => '', 'image_link' => '', 'image_url' => '', 'skew' => '', 'label' => '', 'name' => '');
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<!-- Widget Title: Text Input -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title', 'caeliora' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" value="<?php echo esc_attr($instance['title']); ?>" style="width:100%;" />
		</p>
		
		<!-- image url -->
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id( 'image_url' )); ?>"><?php esc_html_e( 'About Me Image:', 'caeliora' ); ?></label>
			<input class="widefat image-url" id="<?php echo esc_attr($this->get_field_id( 'image_url' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'image_url' )); ?>" type="text" value="<?php echo esc_attr($instance['image_url']); ?>" style="width:72%;" />

			<button class="upload_image_button button button-primary"><?php esc_html_e( 'Select Image', 'caeliora' ); ?></button>
		</p>
		
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'skew' )); ?>"><?php esc_html_e( 'Disable Image Skew', 'caeliora' ); ?>:</label>
			<input type="checkbox" id="<?php echo esc_attr($this->get_field_id( 'skew' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'skew' )); ?>" <?php checked( (bool) $instance['skew'], true ); ?> />
		</p>
		
		<!-- image link -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'image_link' )); ?>"><?php esc_html_e( 'Image Link', 'caeliora' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'image_link' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'image_link' )); ?>" value="<?php echo esc_attr($instance['image_link']); ?>" style="width:100%;" /><br />
			<small><?php esc_html_e( 'Enter a link you want the about me image to go to.', 'caeliora' ); ?></small>
		</p>
		
		<!-- name -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'name' )); ?>"><?php esc_html_e( 'Name', 'caeliora' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'name' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'name' )); ?>" value="<?php echo esc_attr($instance['name']); ?>" style="width:100%;" />
		</p>
		
		<!-- label -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'label' )); ?>"><?php esc_html_e( 'Label', 'caeliora' ); ?>:</label>
			<input id="<?php echo esc_attr($this->get_field_id( 'label' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'label' )); ?>" value="<?php echo esc_attr($instance['label']); ?>" style="width:100%;" />
		</p>
		
		<!-- description -->
		<p>
			<label for="<?php echo esc_attr($this->get_field_id( 'description' )); ?>"><?php esc_html_e( 'About me text', 'caeliora' ); ?>:</label>
			<textarea id="<?php echo esc_attr($this->get_field_id( 'description' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'description' )); ?>" style="width:100%;" rows="6"><?php echo esc_html($instance['description']); ?></textarea>
		</p>
		
		<!-- autograph url -->
		<p>
			<label style="display:block;" for="<?php echo esc_attr($this->get_field_id( 'signing' )); ?>"><?php esc_html_e( 'Autograph Image URL:', 'caeliora' ); ?></label>
			<input class="widefat image-url" id="<?php echo esc_attr($this->get_field_id( 'signing' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'signing' )); ?>" type="text" value="<?php echo esc_attr($instance['signing']); ?>" style="width:72%;" />
			
			<button class="upload_image_button button button-primary"><?php esc_html_e( 'Select Image', 'caeliora' ); ?></button>
		</p>

	<?php
	}
}

?>