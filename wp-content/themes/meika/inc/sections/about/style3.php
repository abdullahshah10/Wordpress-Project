  <!-- about-area -->
            <section class="about-area about-p pb-120 p-relative fix">
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
                                    <h5><span class="line"> <img src="<?php echo esc_url($icon_image['url'])?>" alt="<?php echo esc_attr($icon_image['url'])?>"></span> <?php echo html_entity_decode($sub_heading)?></h5>
                                    <h2><?php echo html_entity_decode($text_heading)?></h2>                                   
                                </div>                                   
                                    <?php echo html_entity_decode($desc_title)?>     
                                   <div class="about-content2 mt-50">
                                    <div class="row">
                                        <?php $i = 0; ?>
                                        <?php foreach ((array) $about_service_repeater as $price_var): $i++; ?> 
                                        <div class="col-md-4">
                                            <div class="about-sbox <?php echo html_entity_decode($price_var['classtext'])?>">
                                                <div class="icon">
                                                    <img src="<?php echo esc_url ( $price_var['icon']['url'])?>" alt="<?php echo esc_attr($price_var['icon']['url'])?>">
                                                </div>
                                                <h6><?php echo html_entity_decode($price_var['htext'])?></h6>
                                                <p><?php echo html_entity_decode($price_var['ptext'])?></p>
                                            </div>
                                        </div>
                                          <?php endforeach ?>   
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->           
             