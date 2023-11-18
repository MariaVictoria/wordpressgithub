<?php
/**
 * side bar template
 *
 * @package Star Hotel
 */
?>
<?php if ( ! is_active_sidebar( 'star-hotel-woocommerce-sidebar' ) ) {	return; } ?>
<div class="col-lg-4 pl-lg-4 my-5 order-0">
	<div class="sidebar">
		<?php dynamic_sidebar('star-hotel-woocommerce-sidebar'); ?>
	</div>
</div>