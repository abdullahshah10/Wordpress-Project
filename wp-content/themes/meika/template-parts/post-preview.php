<?php
$defaults = [
    'wrap_in' => '',
];
$categories = array_filter((array) get_the_terms(get_the_ID(), 'category'));
?>
 <div class="row justify-content-center align-items-center single-post3">
    <div class="col-lg-1 col-md-1">
        <div class="date-home">
          <?php echo get_the_date(); ?>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 text-center">
       <div class="blog-cimg"> <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('meika-featured-large'); ?></a></div>
    </div>
    <div class="col-lg-4 col-md-4">
         <div class="blog-content3">    
            <p><?php the_category( ' ' ); ?></p>
            <h4><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h4>                    
        </div>
    </div>
     <div class="col-lg-3 col-md-3 text-center">
        <div class="b-meta">
                <div class="meta-info">
                    <ul>
                        <li><i class="fal fa-user"></i> <?php esc_html_e( 'By', 'meika' ); ?> <?php the_author(); ?> </li>
                        <li></li>
                    </ul>
                </div>
            </div>
    </div>
    <div class="col-lg-2 col-md-2">
       <a href="<?php the_permalink() ?>" class="btn ss-btn smoth-scroll"><?php esc_html_e( 'Read More', 'meika' ); ?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>		
    </div>
</div>