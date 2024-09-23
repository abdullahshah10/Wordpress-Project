<!-- simple-services-three-area -->
<section class="simple-services-area p-relative fix  pt-120 pb-120" style="background-image: url('<?php echo esc_url($about_backgrund_images['url'])?>'); background-size: cover;">     
    <div class="container">
       <div class="row justify-content-center align-items-center mb-50">
                <div class="col-lg-7 col-md-9">
                  <div class="about-title second-title pb-25">  
                        <h5><span class="line">  <img src="<?php echo esc_url($icon_image['url'])?>" alt="<?php echo esc_attr($icon_image['url'])?>"></span> <?php echo html_entity_decode($sub_heading)?></h5>
                        <h2><?php echo html_entity_decode($text_heading)?></h2>                          
                    </div> 
                </div>
                <div class="col-lg-5 col-md-4 text-right">
                    <a href="<?php echo esc_url($button_link['url'])?>" class="btn active mr-15"><?php echo html_entity_decode($button_text)?></a>
                    <a href="<?php echo esc_url($button_link1['url'])?>" class="btn ss-btn smoth-scroll"><?php echo html_entity_decode($button_text1)?></a>
              </div>
            </div>
        <div class="row">
              <?php $i = 0; ?>
                <?php foreach ((array) $about_service_repeater as $price_var): $i++; ?> 
                <div class="col-xl-2 col-lg-3 col-md-3">
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
</section>
<!-- services-three-area -->
