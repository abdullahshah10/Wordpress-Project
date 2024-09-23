<?php
   /**
    * Displays Standard Post Format Content
    *
    * @package meika
    */
   
   ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="bsingle__post mb-50">

     <div class="bsingle__post-thumb video-p">
            <?php
                if (has_post_thumbnail()) :
                    the_post_thumbnail( 'meika-featured-large', array( 'alt' => get_the_title() ) );
                else :

                endif;
            ?>
            <a href=" <?php
                 $media = rwmb_meta( 'meikazc_post_video' );
                   echo esc_url ($media);	
             ?>" class="video-i popup-video"><i class="fas fa-play"></i>
         </a>
       </div>
        <div class="bsingle__content">
            
            <div class="meta-info">
              <ul>
                <li><i class="far fa-user"></i> <?php esc_html_e( 'By', 'meika' ); ?> <?php the_author(); ?>  </li>
                <li><i class="fal fa-calendar-alt"></i> <?php echo get_the_date(); ?> </li>
                  <li><i class="far fa-comments"></i> <?php comments_number( esc_html__('No Comments', 'meika'), esc_html__('Comment 1', 'meika'), esc_html__('Comments %', 'meika') ); ?> </li>
             </ul>
         </div>

            <?php
                if ( is_singular() ) :
                    the_title( '<h2 class="single">', '</h2>' );
                else :
                    the_title( '<h2 class="single"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;

                if ( 'post' === get_post_type() ) :
                ?>

                <?php endif; ?>

                <?php if (is_single() ) {
                the_content();

            } elseif ( is_search() OR is_archive() ) {?>
                <p>
                    <?php echo substr(get_the_excerpt(), 0 ,280); ?>
                </p>
            <?php } else {
                if ($post) { ?>
                    <p>
                        <?php echo substr(get_the_excerpt(), 0 ,190); ?>	
                    </p>
            <div class="blog__btn"><a href="<?php the_permalink() ?>" class="btn"><?php esc_html_e( 'Read More', 'meika' ); ?> <i class="fa-sharp fa-light fa-arrow-up"></i></a></div>
                <?php } else {
                    the_content();
                }
            } ?>

   </div>
</div>
</article>