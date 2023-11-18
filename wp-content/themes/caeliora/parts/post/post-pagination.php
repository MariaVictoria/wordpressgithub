<?php
$prev_post = get_previous_post();
$next_post = get_next_post();

if (!empty( $prev_post ) || !empty( $next_post )) { ?>
<div class="post-pagination">
	
	<div class="prev-post">
		<?php if (!empty( $prev_post )) : ?>
		<span><?php esc_html_e( 'Previous Post', 'caeliora' ); ?></span>
		<h3><a href="<?php echo esc_url(get_permalink( $prev_post->ID )); ?>"><?php echo esc_html($prev_post->post_title); ?></a></h3>
		<?php endif; ?>
	</div>
	
	<div class="next-post">
		<?php if (!empty( $next_post )) : ?>
		<span><?php esc_html_e( 'Next Post', 'caeliora' ); ?></span>
		<h3><a href="<?php echo esc_url(get_permalink( $next_post->ID )); ?>"><?php echo esc_html($next_post->post_title); ?></a></h3>
		<?php endif; ?>
	</div>
	
</div>
<?php } ?>