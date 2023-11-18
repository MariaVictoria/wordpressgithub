<section id="ourrooms-section" class="ourroomss-area home-ourroomss">

	<div class="<?php if(esc_attr(get_theme_mod('star_hotel_ourrooms_section_width','Box Width')) == 'Full Width'){ ?>container-fluid pd-0 <?php } elseif(esc_attr(get_theme_mod('star_hotel_ourrooms_section_width','Box Width')) == 'Box Width'){ ?> container <?php }?>">
	<!-- <div class="container">  -->
		<div class="row justify-content-center text-center sec-titlebx">  
		<!-- <div class="row "> -->
			<!-- </?php if($ourrooms_heading ){ ?> -->
			<div class="section-title">
				
				<h2><?php echo esc_html(get_theme_mod('ourrooms_heading')); ?></h2>

				<div class="clearfix"></div>
			</div>
			<!-- </?php }?> -->
		</div> 
		<div class="row m-0">

			<?php for($p=1; $p<7; $p++) { ?>
	        <?php if( get_theme_mod('ourrooms'.$p,false)) { ?>
	        <?php $querycolumns = new WP_query('page_id='.get_theme_mod('ourrooms'.$p,true)); ?>
	        <?php while( $querycolumns->have_posts() ) : $querycolumns->the_post(); 
	          $image = wp_get_attachment_image_src(get_post_thumbnail_id() , true); ?>
	        <?php 
	          if(has_post_thumbnail()){
	            $img = esc_url($image[0]);
	          }
	          if(empty($image)){
	            $img = get_template_directory_uri().'/assets/images/default.png';
	          }
	        ?>

			<?php  
				$rate = get_theme_mod('ourrooms_rate'.$p,'$89');
	        ?>
	       
			<!-- Start Single ourrooms -->
			<div class="col-md-6 col-lg-4 box-space">
				<div class="threebox box<?php echo esc_attr( $p ) ?> <?php if($p % 3 == 0) { echo "last_column"; } ?>">    
					<div class="single-ourrooms">
						<div class="part-1">
							<div class="imageBox">
		                		<img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
		                		<div class="ser-olay"></div>
		                		<div class="mtitle">
			                		<h3 ><?php the_title_attribute(); ?></h3>
			                	</div>
		                	</div> 
							
							<div class="part-2">					
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="price">
                                        <?php echo $rate; ?> <?php esc_html_e( '/Night', 'star-hotel' ); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="ser-btns">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'VIEW DETAILS', 'star-hotel' ); ?> </a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>

              	</div>
			</div>
			<!-- / End Single ourrooms -->

			<?php endwhile;
           wp_reset_postdata(); ?>
        <?php } } ?>
        <div class="clear"></div> 
			
		</div>
	<!-- </div> -->
	</div>
</section>
