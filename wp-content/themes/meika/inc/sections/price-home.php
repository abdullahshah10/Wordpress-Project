<?php

	$data = meika_el()->merge_options([

    'Repeators' => [],
    'text_heading' => [],
    'sub_heading' => [],

  ], $data);

?>
<!-- pricing-area -->
<section id="pricing" class="pricing-area pt-70 pb-60 fix p-relative">
    <div class="container"> 
       <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-title center-align pr-60" data-aos="fade-up" data-aos-duration="1000">
                    <h2>
                       <?php echo html_entity_decode($data['text_heading']) ?>
                    </h2>
                     <?php echo html_entity_decode($data['sub_heading']) ?>                      
           </div>
                </div>

           <div class="col-lg-6 col-md-12">
               <div class="row">
                      <?php $i = 0; ?>
                <?php foreach ((array) $data['Repeators'] as $price_var): ?>
                     <div class="col-lg-6 col-md-6">
                         <div class="pricing-box pricing-box2 mb-60 <?php echo html_entity_decode($price_var['active_changer'])?>" data-aos="fade-left" data-aos-duration="1000">
                            <div class="pricing-head">  
                                 <h3><?php echo html_entity_decode($price_var['text'])?></h3>  
                                <div class="price-count">
                                    <h2><?php echo html_entity_decode($price_var['price']) ?> <strong><?php echo html_entity_decode($price_var['price_text']) ?></strong></h2>
                                </div> 
                                <hr>
                            </div>

                            <div class="pricing-body mt-20 mb-30 text-left">
                               <ul>
                                      <?php echo html_entity_decode($price_var['content'])?>
                                </ul>
                            </div>      


                            <div class="pricing-btn">
                                <a href="<?php echo esc_url($price_var['price-button-link']['url'])?>" class="btn ss-btn"><?php echo html_entity_decode($price_var['price-button'])?></a>
                            </div>
                        </div>
                   </div>
                   <?php $i++; endforeach; ?>
         
               </div>
           </div>
        </div>
    </div>
</section>
<!-- pricing-area-end -->