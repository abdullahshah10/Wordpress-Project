<?php
/**
 * The template for displaying comments
 *
 * @package meika
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

<div id="comments" class="comments-area  mt-45">

    <?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
    <h2 class="comments-title">
        <?php esc_html_e( 'Comments', 'meika' ); ?>
    </h2><!-- .comments-title -->

    <?php the_comments_navigation(); ?>

    <ol class="comment-list">
        <?php
			wp_list_comments( array(
			'callback' => 'meika_comments',
			'style' => 'ol'
			 ) );
			?>
    </ol><!-- .comment-list -->

    <?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'meika' ); ?></p>
    <?php
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div><!-- #comments -->