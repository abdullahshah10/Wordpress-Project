<?php
	$data = meika_el()->merge_options([  
        
    'text_heading' => '',  
    'contact_repeater' => '',  
    'shortcode' => '',
    'social_icon' => '',
    'background' => '',
        
    ], $data);
?>

      <!-- map-area- -->
    <div class="map pt-120 fix">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                   <img src="<?php echo esc_url($data['background']['url'])?>" alt="<?php echo esc_attr($data['background']['url'])?>">
                </div>
            </div>
        </div>
    </div>
<!-- map-area-end -->
<!-- contact-area -->
<section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative">

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="contact-bg02">
                <div class="section-title mb-50">
                    <h2>
                       <?php echo html_entity_decode($data['text_heading'])?>
                    </h2>

                </div>

                <div class="contact-form mt-30">
                    <?php echo html_entity_decode($data['shortcode'])?>
            </div>

            </div>

            </div>
            <div class="col-lg-4">
             <div class="contact-info">
                 <ul>
                    <?php $i = 0; ?>
                    <?php foreach ((array) $data['contact_repeater'] as $price_var): $i++; ?>      
                    <li>
                        <div class="single-cta">
                            <div class="f-cta-icon">
                               <img src="<?php echo esc_url ( $price_var['avtar']['url'])?>" alt="<?php echo esc_attr($price_var['avtar']['url'])?>">
                            </div>
                            <div class="text">
                                 <p><?php echo html_entity_decode($price_var['heading'])?></p>
                                <h5><?php echo html_entity_decode($price_var['description'])?></h5>                                           
                            </div>
                        </div> 
                    </li>
                     <?php endforeach ?>    
                     <li>
                         <div class="footer-social">  
                              <?php echo html_entity_decode($data['social_icon'])?>                          
                        </div>
                     </li>
                 </ul>
                </div>
        </div>

        </div>

    </div>

</section>
<!-- contact-area-end -->