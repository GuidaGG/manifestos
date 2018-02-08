<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GulpTheme
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area" style="display: none" >
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments()) : ?>
		<input class="comment_position" value="" type="hidden">
		<input class="comment_page" value="" type="hidden">

		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();


			if ( 1 === $comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html_e( 'One thought on &ldquo;%1$s&rdquo;', 'gulptheme' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comment_count, 'comments title', 'gulptheme' ) ),
					number_format_i18n( $comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->


		<?php the_comments_navigation(); ?>

		<?php

		$comments = get_comments(array('post_id' => get_the_ID()));
		?>

		<?php
				foreach($comments as $comment) :
				?>



					<?php $position = get_comment_meta($comment->comment_ID, 'position');



						$positions = explode(",", $position[0]);
						$highlights = get_comment_meta($comment->comment_ID, 'highlight');

						//$json_array = json_encode($highlights );


					?>


						<div class="commentdot c<?php echo $comment->comment_ID;  ?>" id="commentdot_<?php echo $comment->comment_ID;  ?>" data-page="<?php echo $positions[2]; ?>" style="top:<?php echo $positions[1]; ?>px; left:<?php echo $positions[0]; ?>px" style="top:<?php echo $positions[1]; ?>px; left:<?php echo $positions[0]; ?>px">
							<div class="comment_positioned commentdot_<?php echo $comment->comment_ID;  ?>" id="comment_<?php echo $comment->comment_ID;  ?>" data-page="<?php echo $positions[2]; ?>" style="top:<?php echo $positions[1]+15; ?>px; left:<?php echo $positions[0]+15; ?>px">
								<span data-attr="<?php echo $highlights[0]; ?>" class="c_highlight">
								<a name="comment-<?php echo $comment->comment_ID;  ?>"></a>
								<div class="comment_content"><?php echo $comment->comment_content ;?></div>
								<div class="comment_footer"> — <br><?php echo $comment->comment_author;?>,<br><?php echo $comment->comment_date;?></div>
							</div>

						</div>


   			<?php
				endforeach;
		?>
		<!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'gulptheme' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	comment_form(array('title_reply' => "Leave a Commentary",
		'label_submit' => 'save',
		'comment_field' => '<p>PLACE A COMMENT</p><input id="decline" type="button" value="✕"></input>' . _x( '', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'));
	?>
</div><!-- #comments -->
