<?php
	
	if(is_home()) {
		$promo_amount = get_theme_mod('caeliora_home_promo_amount', 1);
		$promo_layout = get_theme_mod('caeliora_home_promo_layout', 'grid');
		$promo_style = get_theme_mod('caeliora_home_promo_style', 'style1');
		$promo_style_position = get_theme_mod('caeliora_home_promo_style2_position', 'center');
		
	} elseif(is_page() && class_exists('ACF')) {
		$promo_amount = get_field('caeliora_acf_page_promo_amount');
		$promo_amount = isset($promo_amount) ? $promo_amount : '1';
		$promo_layout = get_field('caeliora_acf_page_promo_layout');
		$promo_layout = isset($promo_layout) ? $promo_layout : 'grid';
		$promo_style = get_field('caeliora_acf_page_promo_style');
		$promo_style = isset($promo_style) ? $promo_style : 'style1';
		$promo_style_position = get_field('caeliora_acf_page_promo_style2_position');
		$promo_style_position = isset($promo_style_position) ? $promo_style_position : 'center';
	}
	
?>
<div class="promo-wrap promo-<?php echo esc_attr($promo_layout); ?> promo-col-<?php echo esc_attr($promo_amount); ?> promo-<?php echo esc_attr($promo_style); ?> promo-position-<?php echo esc_attr($promo_style_position); ?>">
	
	<?php
		if(is_home()) {
			$promo1_image = get_theme_mod('caeliora_home_promo_image1');
			$promo1_title = get_theme_mod('caeliora_home_promo_title1');
			$promo1_subtitle = get_theme_mod('caeliora_home_promo_subtitle1');
			$promo1_url = get_theme_mod('caeliora_home_promo_url1');
			$promo1_target = get_theme_mod('caeliora_home_promo_target1');
		} elseif(is_page() && class_exists('ACF')) {
			$promo1 = get_field('caeliora_acf_page_promo1');
			$promo1_image = wp_get_attachment_image_src($promo1['caeliora_acf_page_promo_image'], 'caeliora-fullwidth');
			$promo1_title = $promo1['caeliora_acf_page_promo_title'];
			$promo1_subtitle = $promo1['caeliora_acf_page_promo_subtitle'];
			$promo1_url = $promo1['caeliora_acf_page_promo_url'];
			$promo1_target = $promo1['caeliora_acf_page_promo_target'];
		}
	?>
	<div class="promo-item promo1" style="background-image:url(<?php if(is_page() && class_exists('ACF')) { echo esc_url($promo1_image[0]); } else { echo esc_url($promo1_image); } ?>);">
		<?php if($promo1_url) : ?><a <?php if($promo1_target == true) : ?>target="_blank"<?php endif; ?> href="<?php echo esc_url($promo1_url); ?>" class="promo-link"></a><?php endif; ?>
		<div class="promo-overlay">
			<div class="promo-inner">
				<?php if($promo1_subtitle && $promo_style != 'style2') : ?><span><?php echo esc_html($promo1_subtitle); ?></span><?php endif; ?>
				<?php if($promo1_title) : ?><h5><?php echo esc_html($promo1_title); ?></h5><?php endif; ?>
			</div>
		</div>
		<div class="promo-shadow"></div>
	</div>
	
	<?php if($promo_amount >= 2 || $promo_layout == 'mixed') : ?>
	<?php
		if(is_home()) {
			$promo2_image = get_theme_mod('caeliora_home_promo_image2');
			$promo2_title = get_theme_mod('caeliora_home_promo_title2');
			$promo2_subtitle = get_theme_mod('caeliora_home_promo_subtitle2');
			$promo2_url = get_theme_mod('caeliora_home_promo_url2');
			$promo2_target = get_theme_mod('caeliora_home_promo_target2');
		} elseif(is_page() && class_exists('ACF')) {
			$promo2 = get_field('caeliora_acf_page_promo2');
			$promo2_image = wp_get_attachment_image_src($promo2['caeliora_acf_page_promo_image'], 'caeliora-fullwidth');
			$promo2_title = $promo2['caeliora_acf_page_promo_title'];
			$promo2_subtitle = $promo2['caeliora_acf_page_promo_subtitle'];
			$promo2_url = $promo2['caeliora_acf_page_promo_url'];
			$promo2_target = $promo2['caeliora_acf_page_promo_target'];
		}
	?>
	<div class="promo-item promo2" style="background-image:url(<?php if(is_page() && class_exists('ACF')) { echo esc_url($promo2_image[0]); } else { echo esc_url($promo2_image); } ?>);">
		<?php if($promo2_url) : ?><a <?php if($promo2_target == true) : ?>target="_blank"<?php endif; ?> href="<?php echo esc_url($promo2_url); ?>" class="promo-link"></a><?php endif; ?>
		<div class="promo-overlay">
			<div class="promo-inner">
				<?php if($promo2_subtitle && $promo_style != 'style2') : ?><span><?php echo esc_html($promo2_subtitle); ?></span><?php endif; ?>
				<?php if($promo2_title) : ?><h5><?php echo esc_html($promo2_title); ?></h5><?php endif; ?>
			</div>
		</div>
		<div class="promo-shadow"></div>
	</div>
	<?php endif; ?>
	
	<?php if($promo_amount >= 3 || $promo_layout == 'mixed') : ?>
	<?php
		if(is_home()) {
			$promo3_image = get_theme_mod('caeliora_home_promo_image3');
			$promo3_title = get_theme_mod('caeliora_home_promo_title3');
			$promo3_subtitle = get_theme_mod('caeliora_home_promo_subtitle3');
			$promo3_url = get_theme_mod('caeliora_home_promo_url3');
			$promo3_target = get_theme_mod('caeliora_home_promo_target3');
		} elseif(is_page() && class_exists('ACF')) {
			$promo3 = get_field('caeliora_acf_page_promo3');
			$promo3_image = wp_get_attachment_image_src($promo3['caeliora_acf_page_promo_image'], 'caeliora-fullwidth');
			$promo3_title = $promo3['caeliora_acf_page_promo_title'];
			$promo3_subtitle = $promo3['caeliora_acf_page_promo_subtitle'];
			$promo3_url = $promo3['caeliora_acf_page_promo_url'];
			$promo3_target = $promo3['caeliora_acf_page_promo_target'];
		}
	?>
	<div class="promo-item promo3" style="background-image:url(<?php if(is_page() && class_exists('ACF')) { echo esc_url($promo3_image[0]); } else { echo esc_url($promo3_image); } ?>);">
		<?php if($promo3_url) : ?><a <?php if($promo3_target == true) : ?>target="_blank"<?php endif; ?> href="<?php echo esc_url($promo3_url); ?>" class="promo-link"></a><?php endif; ?>
		<div class="promo-overlay">
			<div class="promo-inner">
				<?php if($promo3_subtitle && $promo_style != 'style2') : ?><span><?php echo esc_html($promo3_subtitle); ?></span><?php endif; ?>
				<?php if($promo3_title) : ?><h5><?php echo esc_html($promo3_title); ?></h5><?php endif; ?>
			</div>
		</div>
		<div class="promo-shadow"></div>
	</div>
	<?php endif; ?>
	
	<?php if($promo_amount >= 4 || $promo_layout == 'mixed') : ?>
	<?php
		if(is_home()) {
			$promo4_image = get_theme_mod('caeliora_home_promo_image4');
			$promo4_title = get_theme_mod('caeliora_home_promo_title4');
			$promo4_subtitle = get_theme_mod('caeliora_home_promo_subtitle4');
			$promo4_url = get_theme_mod('caeliora_home_promo_url4');
			$promo4_target = get_theme_mod('caeliora_home_promo_target4');
		} elseif(is_page() && class_exists('ACF')) {
			$promo4 = get_field('caeliora_acf_page_promo4');
			$promo4_image = wp_get_attachment_image_src($promo4['caeliora_acf_page_promo_image'], 'caeliora-fullwidth');
			$promo4_title = $promo4['caeliora_acf_page_promo_title'];
			$promo4_subtitle = $promo4['caeliora_acf_page_promo_subtitle'];
			$promo4_url = $promo4['caeliora_acf_page_promo_url'];
			$promo4_target = $promo4['caeliora_acf_page_promo_target'];
		}
	?>
	<div class="promo-item promo4" style="background-image:url(<?php if(is_page() && class_exists('ACF')) { echo esc_url($promo4_image[0]); } else { echo esc_url($promo4_image); } ?>);">
		<?php if($promo4_url) : ?><a <?php if($promo4_target == true) : ?>target="_blank"<?php endif; ?> href="<?php echo esc_url($promo4_url); ?>" class="promo-link"></a><?php endif; ?>
		<div class="promo-overlay">
			<div class="promo-inner">
				<?php if($promo4_subtitle && $promo_style != 'style2') : ?><span><?php echo esc_html($promo4_subtitle); ?></span><?php endif; ?>
				<?php if($promo4_title) : ?><h5><?php echo esc_html($promo4_title); ?></h5><?php endif; ?>
			</div>
		</div>
		<div class="promo-shadow"></div>
	</div>
	<?php endif; ?>
	
</div>