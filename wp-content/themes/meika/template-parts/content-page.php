<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package meika
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="pages-content">
        <?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'meika'),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->