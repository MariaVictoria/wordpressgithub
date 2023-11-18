<article class="post nothing-wrapper">
					
	<div class="post-header">
	
		<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'caeliora' ); ?></h1>
		
	</div>
	
	<div class="post-entry nothing">
	
		<?php if ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'caeliora' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for. Perhaps searching can help.', 'caeliora' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
		
	</div>
	
</article>