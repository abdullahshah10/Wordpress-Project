 <!-- gallery-area -->
<section id="work" class="pt-120 pb-105">
    <div class="container">   
        <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="section-title p-relative text-center mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s">
                     <h5><span class="line"><img src="<?php echo esc_url($icon_img['url'])?>" alt="<?php echo esc_attr($icon_img['url'])?>"></span></h5>
                    <h2>
                       <?php echo html_entity_decode($text_heading)?>
                    </h2>
                    <p><?php echo html_entity_decode($text_description)?></p>
                </div>
                </div>

            </div>
        <div class="portfolio ">
            <div class="row align-items-end">
                 <div class="col-lg-12">
                     <div class="my-masonry text-center mb-50 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                <div class="button-group filter-button-group ">
                    <ul>
                        <li> <button class="active" data-filter="*"><?php esc_html_e( 'View All', 'meika' ); ?></button></li>
                         <?php $portfolio_types= get_terms('category'); foreach($portfolio_types as $portfolio) :?>
                        <li> <button data-filter=".<?php echo  esc_attr($portfolio->slug);  ?>"><?php echo  esc_html($portfolio->name);?></button></li>
                         <?php endforeach; ?>         
                    </ul>                   
                       
                </div>
            </div>
                </div>
            </div>
            <div class="grid col2 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                 <?php $advanced= new wp_Query(array(
                            'post_type'=>'zcportfolio',
                            'posts_per_page' => $posts_per_page,
                            'category__in' => $category,
                          ));
                            while( $advanced->have_posts() ) : $advanced->the_post();
                            $terms_area = get_the_terms(get_the_id(),'category');
                            $terms   = array();
                            foreach($terms_area as $term) :
                            $terms[] = $term->slug;
                          ?>
                        <?php endforeach; ?>
                         <div class="grid-item <?php echo implode(' ',$terms); ?>">
                                <figure class="gallery-image">
                                  <?php the_post_thumbnail(); ?>
                                   <figcaption>
                                      <a href="<?php the_permalink(); ?>">
                                        <?php the_excerpt()?>
                                        <h3><?php the_title()?></h3>
                                      </a>                                           
                                       <div class="slider-btn">
                                            <a href="<?php the_permalink(); ?>" tabindex="0"><i class="fa-sharp fa-light fa-arrow-up"></i></a>					
                                        </div>
                                    </figcaption>
                                </figure>
                        </div>
                <?php  endwhile;  ?>  
            </div>
         </div>
    </div>
</section>
 <!-- gallery-area-end -->