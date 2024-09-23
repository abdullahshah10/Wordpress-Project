<?php

	$data = meika_el()->merge_options([

    'price_repeater' => [],
    'text_heading' => [],
    'icon_img' => [],
    'descr' => [],

  ], $data);

?>
<!-- pricing-area -->
<section id="pricing" class="pricing-area pb-60 fix p-relative">
    <div class="container"> 
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="section-title p-relative text-center mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s">
                     <h5><span class="line"> <img src="<?php echo esc_url($data['icon_img']['url'])?>" alt="<?php echo esc_attr($data['icon_img']['url'])?>"></span></h5>
                    <h2>
                      <?php echo html_entity_decode($data['text_heading'])?>
                    </h2>
                    <p><?php echo html_entity_decode($data['descr'])?></p>
                </div>
                </div>
            </div>
       <div class="row">
            <?php $i = 0; ?>
                <?php foreach ((array) $data['price_repeater'] as $price_var): $i++; ?>      
            <div class="col-lg-4 col-md-6">
              <div class="pricing-box pricing-box2 mb-60">
                        <div class="pricing-head">  
                            <div class="month"><img src="<?php echo esc_url ( $price_var['tlogo']['url'])?>" alt="<?php echo esc_attr($price_var['tlogo']['url'])?>"></div>
                            <h3> <?php echo html_entity_decode($price_var['heading'])?></h3>                                       
                            <div class="price-count">
                                <h2> <?php echo html_entity_decode($price_var['price'])?></h2>
                            </div> 
                             <p> <?php echo html_entity_decode($price_var['price_text'])?></p>
                            <hr>
                        </div>
                        <div class="pricing-body mt-20 mb-30 text-left">
                           <ul>
                               <?php echo html_entity_decode($price_var['content'])?>                                           
                            </ul>
                        </div>  
                        <div class="pricing-btn mb-30">
                           <a href="<?php echo esc_url ( $price_var['price_button_link']['url'])?>" class="btn ss-btn"><?php echo html_entity_decode($price_var['price_button_text'])?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>                                       
                        </div>
                         <div class="price-ntext">
                             <?php echo html_entity_decode($price_var['price_trusted_text'])?>    
                        </div>
                    </div>
            </div>
              <?php endforeach ?>   
        </div>
    </div>
</section>
<!-- pricing-area-end -->   