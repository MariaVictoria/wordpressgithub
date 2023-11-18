<section id="contactus-section" class="contactus-area home-contactus">
    <div class="c-oly"></div>
    <div class="brdbx">
        <div class="container">
            <div class="con-bx">
                
                <?php 
                    $shortcode = get_theme_mod('box3contactus_shortcode', 'Add Your Shortcode Here From Customizer');
                ?>

                <div class=" row m-0">
                    <div class="col-lg-4 col-md-4 col-sm-12 box1">
                        <div class=" sub-title">
                            <h3>
                                <?php echo esc_html(get_theme_mod('box1contactus_subheading')); ?>
                            </h3>   
                        </div>
                        <h2>
                            <?php echo esc_html(get_theme_mod('box1contactus_heading')); ?>
                        </h2>
                        <div class="button">
                            <a class="box1booknow" href="<?php echo esc_url(get_theme_mod('box1booknow_btnlink')); ?>"><?php esc_html_e('Book Now','star-hotel'); ?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 box2">
                        <h2>
                            <?php echo esc_html(get_theme_mod('box2contactus_heading')); ?>
                        </h2>
                        <div class="detail">
                            <div class=" dtl" >
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span><?php echo esc_html(get_theme_mod('box2contactus_address')); ?></span>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class=" dtl" >
                                <a href="tel:<?php echo esc_html(get_theme_mod('box2contactus_phonetext')); ?>">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span><?php echo esc_html(get_theme_mod('box2contactus_phonetext')); ?></span>
                                </a>
                            </div>
                            <div class="clearfix"></div>

                            <div class=" dtl" >
                                <a href="mailto:<?php echo esc_html(get_theme_mod('box2contactus_mail')); ?>">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <span><?php echo esc_html(get_theme_mod('box2contactus_mail')); ?></span>
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="social-icons">		
                            <a title="<?php esc_attr_e('facebook','star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('box2contactus_fblink')); ?>"><i class="fa fa-facebook"></i></a> 
                                
                            <a title="<?php esc_attr_e('twitter','star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('box2contactus_twitterlink')); ?>"><i class="fa fa-twitter"></i></a>

                            <a title="<?php esc_attr_e('linkedin','star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('box2contactus_linkedinlink')); ?>"><i class="fa fa-linkedin"></i></a>

                            <a title="<?php esc_attr_e('pinterest', 'star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('box2contactus_pinterestlink')); ?>"><i class="fa fa-pinterest-p"></i></a>

                            <a title="<?php esc_attr_e('instagram', 'star-hotel'); ?>" target="_blank" href="<?php echo esc_url(get_theme_mod('box2contactus_instagramlink')); ?>"><i class="fa fa-instagram"></i></a>
                        </div>

                        <div class="button">
                            <a class="box2contactnow" href="<?php echo esc_url(get_theme_mod('box2contactus_btnlink')); ?>"><?php esc_html_e('Contact Now','star-hotel'); ?></a>
                        </div>
                                    
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 box3">
                        <h2>
                            <?php echo esc_html(get_theme_mod('box3contactus_heading')); ?>
                        </h2>
                        <div class="fmbx">
                            <?php echo do_shortcode($shortcode);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>