<?php
/**
 * meika Theme Customizer
 *
 * @package meika
 */

 /*How to add numeric pagination in your WordPress theme*/

function meika_wordpress_numeric_post_nav() {
    if( is_singular() )
        return;
    global $wp_query;
    /* Stop the code if there is only a single page page */
    if( $wp_query->max_num_pages <= 1 )
        return;
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
    /*Add current page into the array */
    if ( $paged >= 1 )
        $links[] = $paged;
    /*Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<div class="pagination-wrap mb-50"><ul class="pagination">' . "\n";
    /*Display Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li></li>' . "\n", get_previous_posts_link() );
    /*Display Link to first page*/
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
    /* Link to current page */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
    /* Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li></li>' . "\n", get_next_posts_link() );
    echo '</ul></div>' . "\n";
}




// Unset URL from comment form
function meika_crunchify_move_comment_form_below( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}
add_filter( 'comment_form_fields', 'meika_crunchify_move_comment_form_below' );

// Add placeholder for Name and Email
function meika_modify_comment_form_fields($fields){
    $fields['author'] = '<p class="comment-field">' .
				'<i class="fas fa-user"></i>' .
				'<input id="author"  placeholder="' . esc_attr__( "Your Name", "meika" ) . '"  name="author" type="text" />'.

                '</p>';
    $fields['email'] = '<p class="comment-field">' .  '<i class="fas fa-envelope"></i>' .
				 '<input id="email" placeholder="' . esc_attr__( "your-real-email@example.com", "meika" ) . '" name="email" type="text"/>'  .

                '</p>';
    $fields['url'] = '<p class="comment-field">' .'<i class="fas fa-globe"></i>'.
             '<input id="url" name="url" placeholder="' . esc_attr__( "http://your-site-name.com", "meika" ) . '" type="text"/> ' .

               '</p>';

    return $fields;
}
add_filter('comment_form_default_fields','meika_modify_comment_form_fields');


/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own meika_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since meika 1.0
	 */
function meika_comments( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' : ?>
<li <?php comment_class(); ?> id="comment<?php comment_ID(); ?>">
    <div class="back-link"><?php comment_author_link(); ?></div>
    <?php break;
        default : ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
    <article class="comment_wrap">
        <div class="comment-body">
            <div class="author vcard single__comment mb-60">
                <div class="comments-avatar">
                    <?php echo get_avatar( $comment, 100 ); ?>
                </div>
                <div class="comment-text">
                    <div class="avatar-name mb-15">
                        <h6><?php comment_author(); ?> <i class="fas fa-bookmark"></i></h6>
                        <span><?php comment_date(); ?></span>
                    </div>
                    <p><?php comment_text(); ?></p>
                    <?php
							comment_reply_link( array_merge( $args, array(
							'reply_text' => esc_html__( 'Reply','meika' ),
							'before' => '<div class="comment-reply"> <i class="fas fa-reply"></i>',
							'after' => ' <span></span></div>',
							'depth' => $depth,
							'max_depth' => $args['max_depth']
							) ) ); ?>
                </div>
            </div><!-- .vcard -->
        </div><!-- comment-body -->
    </article><!-- #comment-<?php comment_ID(); ?> -->
    <?php // End the default styling of comment
        break;
    endswitch;
}


add_action( 'after_setup_theme', 'register_widget_footer_one' );

function register_widget_footer_one()
{
    register_sidebar(
        array(

        'name'          => esc_html__( 'Footer One', 'meika' ),
        'id'            => 'footer1',
        'description'   => esc_html__( 'Footer content area.', 'meika' )
        )
    );
}

add_action( 'after_setup_theme', 'register_widget_footer_two' );

function register_widget_footer_two()
{
    register_sidebar(
        array(
        'name'          => esc_html__( 'Footer Two', 'meika' ),
        'id'            => 'footer2',
        'description'   => esc_html__( 'Footer content area two.', 'meika' )
        )
    );
}

add_action( 'after_setup_theme', 'register_widget_footer_three' );

function register_widget_footer_three()
{
    register_sidebar(
        array(
        'name'          => esc_html__( 'Footer Three', 'meika' ),
        'id'            => 'footer3',
        'description'   => esc_html__( 'Footer content area three.', 'meika' )
        )
    );
}

add_action( 'after_setup_theme', 'register_widget_footer_four' );

function register_widget_footer_four()
{
    register_sidebar(
        array(
        'name'          => esc_html__( 'Footer Four', 'meika' ),
        'id'            => 'footer4',
        'description'   => esc_html__( 'Footer content area four.', 'meika' )
        )
    );
}

add_action( 'after_setup_theme', 'register_multiple_widget_service_sidebar' );

function register_multiple_widget_service_sidebar()
{
    register_sidebar(
        array(
        'name'          => esc_html__( 'Service Sidebar', 'meika' ),
        'id'            => 'service-sidebar',
        'description'   => esc_html__( 'Sidebar content area.', 'meika' )
        )
    );
}

/**
 * image size
 *
 */
 // Make sure featured images are enabled
add_theme_support( 'post-thumbnails' );


// Add featured image sizes
add_image_size( 'meika-featured-small', 370, 238, true ); // width, height, crop
add_image_size( 'meika-featured-large', 1170, 752, true );
// Register the three useful image sizes for use in Add Media modal
add_filter( 'image_size_names_choose', 'meika_custom_sizes' );
function meika_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'medium-width' => esc_html__( 'Medium Width','meika'),
        'medium-height' => esc_html__( 'Medium Height','meika' ),
        'medium-something' => esc_html__( 'Medium Something','meika' ),
    ) );
}