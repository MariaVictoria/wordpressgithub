<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="post-comments" id="comments">
	
	<?php
		if ( comments_open() ) :
	?>
	<div class="block-heading-wrap">
		<h2 class="block-heading"><?php comments_number(esc_html__('No Comments','caeliora'), esc_html__('1 Comment','caeliora'), '% ' . esc_html__('Comments','caeliora') ); ?></h2>
	</div>
	<?php endif; ?>
	
	<?php
	
		echo "<div class='comments'><ul>";
		
			wp_list_comments(array(
				'avatar_size'	=> 60,
				'style'			=> 'ul',
				'callback'		=> 'caeliora_comments',
				'type'			=> 'all'
			));

		echo "</ul></div>";

		echo "<div id='comments_pagination'>";
			paginate_comments_links(array('prev_text' => '&laquo;', 'next_text' => '&raquo;'));
		echo "</div>";

		$custom_comment_field = '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>';
		$aria_req = '';
		$consent  = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
		$sp_fields =  array(

		  'author' =>
			'<div class="comment-input-wrap"><p class="comment-form-author"><input id="author" placeholder="'. esc_attr__('Name', 'caeliora') .'" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req . ' /></p>',

		  'email' =>
			'<p class="comment-form-email"><input id="email" placeholder="'. esc_attr__('Email', 'caeliora') .'" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'" size="30"' . $aria_req . ' /></p>',

		  'url' =>
			'<p class="comment-form-url"><input id="url" placeholder="'. esc_attr__('Website', 'caeliora') .'" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .'" size="30" /></p></div>',
			
		  'cookies' => '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
            '<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'caeliora' ) . '</label></p>',
			
		);
		
		comment_form(array(
			'comment_field'			=> $custom_comment_field,
			'comment_notes_after'	=> '',
			'logged_in_as' 			=> '',
			'comment_notes_before' 	=> '',
			'title_reply'			=> esc_html__('Leave a Reply', 'caeliora'),
			'cancel_reply_link'		=> esc_html__('Cancel Reply', 'caeliora'),
			'label_submit'			=> esc_html__('Post Comment', 'caeliora'),
			'fields' => $sp_fields,
		));
	 ?>

</div> <!-- end comments div -->