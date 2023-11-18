<section id="slider-section" class="slider-area home-slider">
  <div class="slider">
    <!-- main slider -->
    <swiper-container style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="mySwiper"
    thumbs-swiper=".mySwiper2" space-between="10" navigation="true">
  
      <?php for($p=1; $p<6; $p++) { ?>
      <?php if( get_theme_mod('slider'.$p,false)) { ?>
      <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
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

      <swiper-slide>
        <div class="image">
          <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
          <div class="sl-oly"></div>
        </div>
        <div class="slidercontent">
          <div class="slide-text" >
              <?php the_excerpt(); ?>
          </div>
          <div class="slide-title">
            <h2><?php the_title_attribute(); ?></h2>   
          </div>    
          
          <div class="slide-btns">
              <a class="ReadMore" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e('TAKE A LOOK','star-hotel'); ?></a>
          </div>
        </div>
      </swiper-slide>

      <?php endwhile;
        wp_reset_postdata(); ?>
      <?php } } ?>
      <div class="clear"></div> 
    </swiper-container>

    
    <!-- thumbnailslider -->
    <swiper-container class="mySwiper2" space-between="10" slides-per-view="4" free-mode="true"
      watch-slides-progress="true">

      <?php for($p=1; $p<6; $p++) { ?>
      <?php if( get_theme_mod('slider'.$p,false)) { ?>
      <?php $querycolumns = new WP_query('page_id='.get_theme_mod('slider'.$p,true)); ?>
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

        <swiper-slide>
          <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>">
        </swiper-slide>

      <?php endwhile;
        wp_reset_postdata(); ?>
      <?php } } ?>
      <div class="clear"></div> 

    </swiper-container>
  </div>
</section>
