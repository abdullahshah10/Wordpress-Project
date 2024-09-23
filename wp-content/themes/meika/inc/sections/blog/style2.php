<!-- blog-area -->
<section id="blog" class="blog-area3 p-relative fix pb-120">
    <div class="container">
        <div class="row align-items-center"> 
            <div class="col-lg-12">
                <div class="section-title center-align mb-80  wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h5><?php echo html_entity_decode($sub_heading)?></h5>
                    <h2>
                     <?php echo html_entity_decode($text_heading)?>
                    </h2>                
                </div>

            </div>
        </div>

        <div class="row home-blog-active2">
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
           <div class="col-lg-6 col-md-6">
                <div class="single-post3 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="blog-thumb3">
                      <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('meika-featured-large'); ?></a>
                    </div>                    
                    <div class="blog-content3">    
                        <div class="date-home">
                           <ul>
                                <li> 
                                    <?php						
                                        $category = rwmb_meta( 'meikazc_post_category' );
                                        echo html_entity_decode ($category);
                                    ?>
                               </li> 
                                <li><?php echo get_the_date(); ?></li> 
                           </ul>
                        </div>
                          <h4><a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h4>
                        <div class="admin">
                            <div class="img">  
                                <?php
                                    $avtars = rwmb_meta( 'meikazc_post_avtar', array( 'size' => 'large' ) );
                                    foreach ( $avtars as $avtar ) {
                                    echo '<div class="slide-post"> <img src="', $avtar['url'],'" alt="', $avtar['url'],'"></div>';
                                }			  
                                ?>
                            </div>
                            <div class="text">
                                <span> <?php esc_html_e( 'Admin', 'meika' ); ?> </span>
                                <strong> <?php the_author(); ?> </strong>
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









