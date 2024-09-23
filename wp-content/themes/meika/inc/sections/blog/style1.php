<!-- blog-area -->
<section id="blog" class="blog-area p-relative fix pt-120 pb-90">
    <div class="container">
          <div class="row justify-content-center align-items-center">
           <div class="col-lg-8 col-md-9">
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h5><span class="line"><img src="<?php echo esc_url($icon['url'])?>" alt="<?php echo esc_attr($icon['url'])?>"></span></h5>
                    <h2>
                      <?php echo html_entity_decode($text_heading)?>
                    </h2>
                    <p><?php echo html_entity_decode($decr_heading)?></p>
                </div>

            </div>
        </div>
        <div class="row">
         <?php $advanced= new wp_Query(array(
                //'post_type'=>'post',
                'posts_per_page' => $posts_per_page,
                'category__in' => $category,
                ));
                while( $advanced->have_posts() ) : $advanced->the_post();
                $terms_area = get_the_terms(get_the_id(),'category');
                $terms   = array();
                foreach($terms_area as $term) :
                $terms[] = $term->slug;
                $feat_image = wp_get_attachment_url( get_post_thumbnail_id() );
                 ?>

                    <?php endforeach; ?>   
           <div class="col-lg-4 col-md-6">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="blog-thumb2">
                       <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('meika-featured-large'); ?></a>
                    </div>                    
                    <div class="blog-content2">
                         <div class="date-home">
                           <?php echo get_the_date(); ?>
                        </div>
                       <div class="b-cat">
                            <?php the_category( ' ' ); ?>
                        </div>
                       <h4><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h4>
                        <p><?php echo substr(get_the_excerpt(), 0 ,100); ?></p>
                       <div class="b-meta">
                            <div class="meta-info">
                                <ul>
                                    <li><i class="fal fa-user"></i> <?php esc_html_e( 'By', 'meika' ); ?> <?php the_author(); ?></li>
                                    <li><a href="<?php the_permalink() ?>" class="btn"> <?php esc_html_e( 'Read More', 'meika' ); ?> <i class="fa-sharp fa-light fa-arrow-up"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php  endwhile;  ?> 
            
        </div>
    </div>
</section>
<!-- blog-area-end -->







