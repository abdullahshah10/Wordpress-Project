<?php
	$data = meika_el()->merge_options([
        	
    'posts_per_page' => [],			
 		
    ], $data);
?>
<!-- team-area -->
<section id="team" class="team-area fix p-relative pt-120 pb-90">  
    <div class="container">  

      
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
            <div class="col-xl-4 col-lg-4">
                <div class="single-team mb-30" >
                    <div class="team-thumb">
                        <div class="brd">
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
