<?php
	$data = meika_el()->merge_options([
        
    'service_section_var' => [],
    'sub_heading' => [],
    'text_heading' => [],
    'button_text' => [],
    'button_url' => [],
    'posts_per_page' => [],
    'icon' => [],
        
		], $data);

?>


<!-- services-three-area -->
<section id="services" class="services-area services-bg  p-relative fix pt-120 pb-90">  
    <div class="container">
        <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="section-title p-relative text-center mb-50 wow fadeInDown  animated" data-animation="fadeInLeft" data-delay=".4s">
                     <h5><span class="line"> <img src="<?php echo esc_url($data['icon']['url'])?>" alt="<?php echo esc_attr($data['icon']['url'])?>"></span></h5>
                    <h2>
                       <?php echo html_entity_decode($data['text_heading'])?>                       
                    </h2>
                    <p><?php echo html_entity_decode($data['decs'])?></p>
                </div>
                </div>

            </div>
        <div class="row services-active">
           <?php $advanced= new wp_Query(array(
                    'post_type'=>'service',  
                    'posts_per_page' => $data['posts_per_page'],
                    'order' => 'DESC',
                          ));
                            while( $advanced->have_posts() ) : $advanced->the_post();
                            $terms_area = get_the_terms(get_the_id(),'category');
                            $terms   = array();
                            foreach($terms_area as $term) :
                            $terms[] = $term->slug;
                           ?> 
                    <?php endforeach; ?> 
                    <div class="col-lg-4 col-md-6">
                       <div class="s-single-services mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="services-icon">
                          <?php
                                $icon = rwmb_meta( 'meikazc_post_single_sicon', array( 'size' => 'large' ) );
                                foreach ( $icon as $icon ) {
                                echo '<img src="', $icon['url'],'" alt="', $icon['url'],'">';
                                }			  
                            ?>
                            <?php
                                $icon = rwmb_meta( 'meikazc_post_single_sicon_hover', array( 'size' => 'large' ) );
                                foreach ( $icon as $icon ) {
                                echo '<img src="', $icon['url'],'" alt="', $icon['url'],'" class="hover">';
                                }			  
                            ?>
                        </div>
                        <div class="second-services-content">
                            <h5> <a href="<?php the_permalink() ?>"><?php the_title();  ?></a></h5>
                             <?php the_excerpt()?>
                            <a class="btn" href="<?php the_permalink() ?>"><?php esc_html_e( 'Read More', 'meika' ); ?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>
                        </div>
                        <div class="sr-h-bg">
                            <?php
                                $icon = rwmb_meta( 'meikazc_post_single_sicon_bghover', array( 'size' => 'large' ) );
                                foreach ( $icon as $icon ) {
                                echo '<img src="', $icon['url'],'" alt="', $icon['url'],'">';
                                }			  
                            ?>                   
                        </div>
                        </div>
                    </div>
             <?php  endwhile;  ?> 
        </div>
    </div>
</section>
<!-- services-three-area -->
