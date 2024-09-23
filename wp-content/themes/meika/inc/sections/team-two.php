<?php
	$data = meika_el()->merge_options([
        
    'icon' => [],			
    'text_heading' => [],			
    'description' => [],			
    'posts_per_page' => [],			
        
    ], $data);
?>


<!-- team-area -->
<section id="team" class="team-area fix p-relative  pb-90">  
    <div class="container">  
       <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="section-title p-relative text-center mb-50 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                    <h5><span class="line"> <img src="<?php echo esc_url($data['icon']['url'])?>" alt="<?php echo esc_attr($data['icon']['url'])?>"></span></h5>
                    <h2>
                     <?php echo html_entity_decode($data['text_heading'])?>
                    </h2>
                    <p><?php echo html_entity_decode($data['description'])?></p>
                </div>
                </div>

            </div>
       <div class="row">      
            <?php $advanced= new wp_Query(array(
                    'post_type'=>'team',
                    'posts_per_page' => $data['posts_per_page'],                
                 ));
                    while( $advanced->have_posts() ) : $advanced->the_post();
                    $terms_area = get_the_terms(get_the_id(),'category');
                    $terms   = array();
                    foreach($terms_area as $term) :
                    $terms[] = $term->slug;
                 ?>
            <?php endforeach; ?>
            <div class="col-xl-4 col-lg-4 col-md-6">                
                <div class="single-team mb-30" >
                    <div class="team-thumb">
                        <div class="brd2">
                              <?php the_post_thumbnail(); ?>                                 
                        </div>
                         <div class="team-info">                                         
                           <h4><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h4>
                            <p> 
                            <?php
                                $teamposition = rwmb_meta('meikazc_post_team_postions');
                                    echo html_entity_decode ($teamposition);	
                                ?>
                            </p>
                            <div class="team-social">
                                 <?php
                                $postsocial = rwmb_meta('meikazc_post_social');
                                    echo html_entity_decode ($postsocial);	
                              ?>    
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
           <?php  endwhile;  ?>   
        </div>
    </div>
</section>
<!-- team-area-end --> 