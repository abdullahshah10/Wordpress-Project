<!-- about-area -->
<section class="about-area about-p pt-120 pb-120 p-relative fix" style="background-image: url('<?php echo esc_url($about_backgrund_images['url'])?>'); background-size: cover;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                   <img src="<?php echo esc_url($main_img['url'])?>" alt="<?php echo esc_attr($main_img['url'])?>">            
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">  
                        <h5><span class="line">  <img src="<?php echo esc_url($icon_image['url'])?>" alt="<?php echo esc_attr($icon_image['url'])?>"></span> <?php echo html_entity_decode($sub_heading)?></h5>
                        <h2><?php echo html_entity_decode($text_heading)?></h2>                                   
                    </div>
                      <?php echo html_entity_decode($desc_title)?>  
                        <div class="row align-items-center mt-20">
                        <div class="col-lg-12"> 
                            <div class="slider-btn">                                          
                                <a href="<?php echo esc_url($button_link['url'])?>" class="btn ss-btn mr-15" data-animation="fadeInRight" data-delay=".8s"><?php echo html_entity_decode($button_text)?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>	
                                <a href="<?php echo esc_url($button_link1['url'])?>"  data-animation="fadeInRight" data-delay=".8s"><img src="<?php echo esc_url($button_text_icon['url'])?>" alt="<?php echo esc_attr($button_text_icon['url'])?>"></a>	
                            </div>
                        </div>    

                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->           