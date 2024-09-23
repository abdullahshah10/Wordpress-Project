
  <!-- featured-courses-area --> 


            <section id="courses" class="courses-area fix"  >
                <div class="container-fluid">
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align text-center mb-50">
                                <h5><?php echo html_entity_decode($text_heading)?></h5>
                                <h2>
                                 <?php echo html_entity_decode($sub_heading)?>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                             <div class="featured-courses-active">
                     <?php $advanced= new wp_Query(array(
                    'post_type'=>'courses',
                    'posts_per_page'=>-1
                    ));
                    while( $advanced->have_posts() ) : $advanced->the_post();
                    $terms_area = get_the_terms(get_the_id(),'category');
                    $terms   = array();
                    foreach($terms_area as $term) :
                    $terms[] = $term->slug;
                     ?>
                    <?php endforeach; ?>
                 
                  
                       <div class="box-courses">
                            <a href="<?php the_permalink();  ?>"> <?php the_post_thumbnail(); ?></a>
                           <div class="text">
                                <h5>3 Years</h5>
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h3> 
                           </div>
                       </div>
                 <?php  endwhile;  ?>
                 </div>
              </div>
            </div>
        </div>
    </section>



<!-- featured-courses-area-end -->




































