<?php 
	$starhotel_hs_breadcrumb					= get_theme_mod('hs_breadcrumb','1');
	$starhotel_breadcrumb_bg_img				= get_theme_mod('breadcrumb_bg_img');
	$starhotel_breadcrumb_back_attach		= get_theme_mod('breadcrumb_back_attach','scroll');
	
if($starhotel_hs_breadcrumb == '1') {	
?>	

	<!-- Slider Area -->   
	<?php if(!empty($starhotel_breadcrumb_bg_img)): ?>
    <section class="slider-area breadcrumb-section" style="background: url(<?php echo esc_url($starhotel_breadcrumb_bg_img); ?>) center center <?php echo esc_attr($starhotel_breadcrumb_back_attach); ?>; background-repeat: no-repeat; background-size: cover;">
	<?php else: ?>
	 <section class="slider-area breadcrumb-section">
	 <?php endif; ?>
        <div class="container">
            <div class="about-banner-text">   
            	
				<h1><?php starhotel_breadcrumb_title(); ?></h1>
				
				<ol class="breadcrumb-list">
					<?php starhotel_breadcrumbs(); ?>
				</ol>



            </div>
        </div> 

    </section>
    <!-- End Slider Area -->
<?php }else{  ?>
	<section style="padding: 30px 0 30px;"></section>
<?php } ?>	