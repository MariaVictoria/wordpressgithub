<?php 

/*
* 404 Error page
*/

get_header(); 
?>
	
	<div class="dt-container">
	
		<div id="dt-content">
			
			<div id="dt-main" class="isFullwidth">
				
				<div id="header-404">
					
					<div class="title-404"><?php esc_html_e( 'Page not found', 'caeliora' ); ?></div>
					<h1><?php esc_html_e( '404', 'caeliora' ); ?></h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'caeliora' ); ?></a>
					
					
					
				</div>
				
			</div>
	

<?php get_footer(); ?>