<?php
function starhotel_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'starhotel_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '646464',
		'width'                  => 2000, 
		'height'                 => 200,
		'flex-height'            => true,
		'wp-head-callback'       => 'starhotel_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'starhotel_custom_header_setup' );

if ( ! function_exists( 'starhotel_header_style' ) ) :

function starhotel_header_style() {
	$header_text_color = get_header_textcolor();

  	$ourrooms_disable_section = esc_attr(get_theme_mod('ourrooms_disable_section','YES'));


	?>
	<style type="text/css">


		<?php 
		
		?>


		header.site-header .site-title {
			color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?>;

		}

		header.site-header .site-logo a {
			text-decoration-color: <?php echo esc_attr(get_theme_mod('topheader_sitetitlecol')); ?> !important;
		}

		p.site-description {
			color: <?php echo esc_attr(get_theme_mod('topheader_taglinecol')); ?>;
		}
		


		
	 
	
		.primary-menu a {
			color: <?php echo esc_attr(get_theme_mod('header_menuscolor')); ?>;
		}

		.primary-menu a:hover, .primary-menu a:focus, .primary-menu .current_page_ancestor,
		.primary-menu li.current-menu-item > a, .primary-menu li.current-menu-item > .link-icon-wrapper > a {
			color: <?php echo esc_attr(get_theme_mod('header_menushovercolor')); ?>;
		}

		.primary-menu li ul li a {
			color: <?php echo esc_attr(get_theme_mod('header_submenutextcolor')); ?>;
		}

		.primary-menu ul {
			background: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}
		.primary-menu ul::after {
			border-bottom-color: <?php echo esc_attr(get_theme_mod('header_submenusbgcolor')); ?>;
		}

		.primary-menu .sub-menu a:hover, .primary-menu .sub-menu a:focus {
			color: <?php echo esc_attr(get_theme_mod('header_submenustxthovercolor')); ?> !important;
		}

	



	

		.slider-area .slide-text p, .slider-area .slide-text {
			color: <?php echo esc_attr(get_theme_mod('slider_titlecolor')); ?> !important;
		}

		.slider-area .slide-title h2 {
			color: <?php echo esc_attr(get_theme_mod('slider_descriptioncolor')); ?>;
		}

		.slider-area .slide-btns a {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxt1color')); ?> !important;
		}

		.slider-area .slide-btns a,.slider-area .slide-btns a:after {
			border-color: <?php echo esc_attr(get_theme_mod('slider_btnbrdcolor')); ?> !important;
		}

		.slider-area .slide-btns a:hover {
			color: <?php echo esc_attr(get_theme_mod('slider_btntxthovercolor')); ?> !important;
		}

		


		#ourrooms-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('ourrooms_headingcolor')); ?> !important;
		}

		#ourrooms-section .mtitle h3 {
			color: <?php echo esc_attr(get_theme_mod('ourrooms_boxtitlecolorcolor')); ?> !important;
		}

		#ourrooms-section .price, #ourrooms-section .ser-btns a{
			color: <?php echo esc_attr(get_theme_mod('ourrooms_boxtextcolor')); ?> !important;
		}




		#contactus-section .box1 h3,
		#contactus-section .box1 h2,
		#contactus-section .box1 .box1booknow,
		#contactus-section .box2 h2,
		#contactus-section .box2 .detail .dtl p, #contactus-section .box2 .detail .dtl a,
		#contactus-section .box2 .social-icons i,
		#contactus-section .box3 h2,
		#contactus-section input[type="text"],
		#contactus-section .box2 .box2contactnow,
		#contactus-section .fmbx label,
		#contactus-section textarea {
			color: <?php echo esc_attr(get_theme_mod('contactus_boxtextcolor')); ?> !important;
		}

		#contactus-section .box1 .box1booknow,
		#contactus-section .box2 .box2contactnow,
		#contactus-section input[type="text"],
		#contactus-section input[type="email"],
		#contactus-section textarea {
			border-color: <?php echo esc_attr(get_theme_mod('contactus_boxtextcolor')); ?> !important;
		}

		#contactus-section .fmbx input[type="submit"] {
			background: <?php echo esc_attr(get_theme_mod('contactus_boxtextcolor')); ?> !important;
		}
		




		#blog-section .section-title h2 {
			color: <?php echo esc_attr(get_theme_mod('blog_headingcolor')); ?> !important;
		}

		.blogbx .blog-content h6.post-title a {
			color: <?php echo esc_attr(get_theme_mod('blog_titlecolor')); ?> !important;
		}

		.blogbx .blog-content p {
			color: <?php echo esc_attr(get_theme_mod('blog_descriptioncolor')); ?> !important;
		}

		.blogbx .blog-btn a{
			color: <?php echo esc_attr(get_theme_mod('blog_btntextcolor')); ?> !important;
		}

		.blogbx .box-admin a {
			color: <?php echo esc_attr(get_theme_mod('blog_datetextcolor')); ?> !important;
		}



		


		.copy-right p,.copy-right p a {
			color: <?php echo esc_attr(get_theme_mod('footer_copyrightcolor')); ?>;
		}

		.footer-area {
			background: <?php echo esc_attr(get_theme_mod('footer_bgcolor')); ?>;
		}

		.copy-right {
			border-color: <?php echo esc_attr(get_theme_mod('footer_brdcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li:before,.footer-area .widget_text, .footer-area .widget_text p, .wp-block-latest-comments__comment-excerpt p, .wp-block-latest-comments__comment-date, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-excerpt, .has-avatars .wp-block-latest-comments__comment .wp-block-latest-comments__comment-meta,.footer-area .widget_block h1, .footer-area .widget_block h2, .footer-area .widget_block h3, .footer-area .widget_block h4, .footer-area .widget_block h5, .footer-area .widget_block h6,.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a {
			color: <?php echo esc_attr(get_theme_mod('footer_textcolor')); ?>;
		}

		.footer-area i, .footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li:before, .footer-area li:before, .page-template-home-template .footer-area li:before, .page .footer-area li:before, .single .footer-area li:before {
			color: <?php echo esc_attr(get_theme_mod('footer_iconcolor')); ?>;
		}

		.footer-area .footer-widget .widget:not(.widget_social_widget):not(.widget_tag_cloud) li a:hover {
			color: <?php echo esc_attr(get_theme_mod('footer_listhovercolor')); ?>;
		}

		
	<?php  ?>


	<?php
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		else :
	?>
		h4.site-title{
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>



	<?php
        if ($ourrooms_disable_section == 1):
	?>
		#ourrooms-section {
			display: none;
		}
	<?php
		else :
	?>
		#ourrooms-section {
			display: block;
		}
	<?php endif; ?>


	</style>
	<?php
}
endif;
