<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 

		$stickyheader = esc_attr(starhotel_sticky_menu());
		$topheader_address = esc_attr(get_theme_mod('topheader_address','New York Ipsum dolor'));
		$topheader_phonetext = esc_attr(get_theme_mod('topheader_phonetext','1-222-2333-33'));

	?>
<div class="main">
    <header class="main-header site-header <?php echo esc_attr(starhotel_sticky_menu()); ?>">
		<div class="header-section">
			<div class="head-top">
				<div class="container-fluid">
					<div class="row">

						<div class="col-lg-4 col-md-4 col-sm-12 h-cont">
							<li class="address">
								<a class="h-address" href="<?php echo apply_filters('starhotel_header', $topheader_address); ?>">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
									<span><?php echo apply_filters('starhotel_header', $topheader_address); ?></span>
								</a>
							</li>
							<li class="phone">
								<a class="h-phn" href="tel:<?php echo apply_filters('starhotel_header', $topheader_phonetext); ?>">
									<i class="fa fa-phone" aria-hidden="true"></i>
									<span><?php echo apply_filters('starhotel_header', $topheader_phonetext); ?></span>
								</a>
							</li>
							<?php echo esc_url(get_theme_mod('topheader_phoneno')); ?>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 pd-0 logo-box">
							<div class="site-logo">
								<?php
								if(has_custom_logo())
									{	
										the_custom_logo();
									}
									else { 
								?>
								<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>">	
									<?php 
										echo esc_html(bloginfo('name'));
									?>
								</a>	
								<?php 						
									}
								?>
							</div>
							<div class="box-info">
								<?php
									$starhotel_site_desc = get_bloginfo( 'description');
									if ($starhotel_site_desc) : ?>
										<p class="site-description"><?php echo esc_html($starhotel_site_desc); ?></p>
								<?php endif; ?>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 social-icons">		
									<a title="<?php esc_attr_e('facebook','star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_fblink')); ?>"><i class="fa fa-facebook"></i></a> 
										
									<a title="<?php esc_attr_e('twitter','star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_twitterlink')); ?>"><i class="fa fa-twitter"></i></a>

									<a title="<?php esc_attr_e('instagram', 'star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_instagramlink')); ?>"><i class="fa fa-instagram"></i></a>

									<a title="<?php esc_attr_e('pinterest', 'star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('topheader_pinterest')); ?>"><i class="fa fa-pinterest-p"></i></a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 links">
									<?php
									if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
										?>
											<li class="signinlink">
												<a class="signin" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
												<?php esc_html_e('LogIn','star-hotel'); ?>
												</a>
											</li>
											<li class="signuplink">
												<a class="signup" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">
												<?php esc_html_e('Register','star-hotel'); ?>
												</a>	
											</li>		
									<?php } ?>
								</div>
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="head-bottom">
				<div class="container">
					<div class="row">
						<div class="menu">
							<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
								<span class="toggle-inner">
									<span class="toggle-icon">
										<i class="fa fa-bars"></i>
									</span>
								</span>
							</button><!-- .nav-toggle -->
							<div class="header-navigation-wrapper">

							<?php
							if ( has_nav_menu( 'primary_menu' ) || ! has_nav_menu( 'expanded' ) ) {
							?>
								<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'star-hotel' ); ?>">
									<ul class="primary-menu reset-list-style">

									<?php
									if ( has_nav_menu( 'primary_menu' ) ) {

										wp_nav_menu(
											array(
												'container'  => '',
												'items_wrap' => '%3$s',
												'theme_location' => 'primary_menu',
											)
										);

									} elseif ( ! has_nav_menu( 'expanded' ) ) {

										wp_list_pages(
											array(
												'match_menu_classes' => true,
												'show_sub_menu_icons' => true,
												'title_li' => false,
												'walker'   => new StarHotel_Walker_Page(),
											)
										);

									}
									?>
									</ul>
								</nav><!-- .primary-menu-wrapper -->
							<?php } ?>
							</div><!-- .header-navigation-wrapper -->
							<?php
							// Output the menu modal.
							get_template_part( 'template-parts/sections/modal-menu' );
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>
	<div class="clearfix"></div>
</div>

