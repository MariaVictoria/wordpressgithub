<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}
?>

<?php
/*
* Instagram Header Widget Area
*/
if(get_theme_mod('caeliora_core_header_insta_enable')) : ?>
<div id="top-instagram">
	<?php echo do_shortcode('[instagram-feed num='.get_theme_mod('caeliora_core_header_insta_number',10).' cols='.get_theme_mod('caeliora_core_header_insta_number',10).' imagepadding=0 showheader=false showbutton=false showfollow=false disablemobile=true]'); ?>
</div>
<?php endif; ?>

<?php

/*
* Mobile Header
*/
caeliora_get_mobile_header();

/*
* Get header layout
* Header templates located in /parts/header/
*/

$get_header_layout = get_theme_mod('caeliora_header_layout', 'layout1');

get_template_part('parts/header/header', $get_header_layout);
 
?>

<div id="inner-wrapper">