<?php get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
/*
* Get Single Post Template
*/
$get_layout = caeliora_get_post_layout();
get_template_part('parts/post/single', $get_layout['layout']);
?>

<?php get_footer(); ?>