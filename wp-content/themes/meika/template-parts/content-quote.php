<?php
/**
 * Displays content for post format Quote
 *
 * @package  meika
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="bsingle__post mb-50">
        <div class="bsingle__content quote-post">
            <div class="meta-info">
             <ul>
               <li><i class="far fa-user"></i> <?php esc_html_e( 'By', 'meika' ); ?> <?php the_author(); ?>  </li>
                    <li><i class="fal fa-calendar-alt"></i> <?php echo get_the_date(); ?> </li>
                 <li><i class="far fa-comments"></i> <?php comments_number( esc_html__('No Comments', 'meika'), esc_html__('Comment 1', 'meika'), esc_html__('Comments %', 'meika') ); ?> </li>
             </ul>
            </div>
        <h2><?php $quote = rwmb_meta( 'meikazc_post_quote' ); echo esc_html($quote);?></h2>
        </div>
    </div>
</article>