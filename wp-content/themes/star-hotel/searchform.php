<?php
/**
 * The template for displaying search form.
 *
 * @package     Star Hotel
 * @since       0.1
 */
?>

<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'star-hotel' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search …', 'star-hotel' ); ?>" value="" name="s">
	</label>
	<button type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'star-hotel' ); ?>">
		<i class="fa fa-search"></i>
	</button>
</form>