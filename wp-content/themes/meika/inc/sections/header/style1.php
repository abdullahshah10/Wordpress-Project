
 <!-- slider-area -->
<section id="parallax" class="slider-area fix p-relative">    
    <div class="slider-shape ss-one layer" data-depth="0.10"><img src="<?php echo esc_url($header_images_one['url'])?>" alt="<?php echo esc_attr($header_images_one['url'])?>"></div>
    <div class="slider-shape ss-two layer" data-depth="0.30"><img src="<?php echo esc_url($header_images_two['url'])?>" alt="<?php echo esc_attr($header_images_two['url'])?>"></div>
    <div class="slider-shape ss-three layer" data-depth="0.30"><img src="<?php echo esc_url($header_images_three['url'])?>" alt="<?php echo esc_attr($header_images_three['url'])?>"></div>
    <div class="slider-shape ss-four layer" data-depth="0.30"><img src="<?php echo esc_url($header_images_four['url'])?>" alt="<?php echo esc_attr($header_images_four['url'])?>"></div>
    <div class="slider-shape ss-five layer" data-depth="0.30"><img src="<?php echo esc_url($header_images_five['url'])?>" alt="<?php echo esc_attr($header_images_five['url'])?>"></div>
    <div class="slider-shape ss-six layer" data-depth="0.30"><img src="<?php echo esc_url($header_images_six['url'])?>" alt="<?php echo esc_attr($header_images_six['url'])?>"></div>        
    <div class="single-slider slider-bg d-flex" style="background-image: url('<?php echo esc_url($header_image['url'])?>'); background-size: cover;">   
            <div class="container">      

               <div class="row mt-200">                              
                    <div class="col-lg-7 col-md-12">
                        <div class="slider-content s-slider-content">
                             <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo html_entity_decode($title_text);?></h2>
                             <p data-animation="fadeInDown" data-delay=".4s"><?php echo html_entity_decode($desc_title);?></p>    
                        </div>
                         <div class="slider-btn2 pl-100 mt-30">     
                                <a href="<?php echo esc_url($button_link['url'])?>" data-animation="fadeInLeft" data-delay=".4s"><?php echo html_entity_decode($button_text);?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>  
                            </div>        
                    </div>
                    <div class="col-lg-5 col-md-12 p-relative">
                    </div>
                </div>
            </div>
        </div>



</section>
<!-- slider-area-end -->