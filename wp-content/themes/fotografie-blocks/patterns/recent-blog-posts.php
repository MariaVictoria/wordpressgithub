<?php

/**
 * Title: Recent Blog Posts
 * Slug: fotografie-blocks/recent-blog-posts
 * Categories: fotografie-blocks, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-recent-blog-posts","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-recent-blog-posts"><!-- wp:group {"align":"wide","className":"alignwide wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}},"fontSize":"product-heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-product-heading-font-size" style="text-transform:uppercase"><?php esc_html_e('News', 'fotografie-blocks'); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","className":"wp-block-group-content","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-group-content"><!-- wp:query {"queryId":0,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"list","columns":3},"align":"full","layout":{"type":"constrained"}} -->
		<div class="wp-block-query alignfull"><!-- wp:post-template {"align":"full"} -->
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0px","left":"0px"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"40%"} -->
				<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"align":"full"} /--></div>
				<!-- /wp:column -->

				<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|100","right":"var:preset|spacing|100","bottom":"var:preset|spacing|100","left":"var:preset|spacing|100"}}},"className":"wp-block-post-column"} -->
				<div class="wp-block-column wp-block-post-column" style="padding-top:var(--wp--preset--spacing--100);padding-right:var(--wp--preset--spacing--100);padding-bottom:var(--wp--preset--spacing--100);padding-left:var(--wp--preset--spacing--100);flex-basis:60%"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"0px","bottom":"0px","left":"0px","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.4","letterSpacing":"0.05em"}},"fontSize":"extra-large"} /-->

					<!-- wp:post-excerpt {"moreText":"continue reading","style":{"spacing":{"margin":{"top":"28px"}}},"className":"btn-plain"} /-->

					<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"0"},"blockGap":"14px"}},"className":"wp-block-post-meta","layout":{"type":"constrained"}} -->
					<div class="wp-block-group wp-block-post-meta" style="margin-bottom:0"><!-- wp:post-date {"isLink":true,"style":{"typography":{"fontSize":"12px","textTransform":"uppercase"},"elements":{"link":{"color":{"text":"var:preset|color|meta"}}}}} /-->

						<!-- wp:post-author {"showAvatar":false,"style":{"typography":{"fontSize":"12px","textTransform":"uppercase"}},"textColor":"meta"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous {"label":"Newer posts","fontSize":"small"} /-->

			<!-- wp:query-pagination-next {"label":"older posts","fontSize":"small"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
