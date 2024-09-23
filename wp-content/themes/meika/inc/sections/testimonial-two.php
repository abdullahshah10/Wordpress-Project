<?php
	$data = meika_el()->merge_options([
        
    'testimonial_repeater' => [],		
    'hading_section_data' =>	[],	
    'back_img' =>	[],	
    'icon_img' =>	[],	
    'text_heading' =>	[],	
    'descr' =>	[],	
   
		], $data);
?>
 <!-- testimonial-area -->
<section id="testimonial" class="testimonial-area pt-120 pb-90 p-relative fix" style="background-image:url('<?php echo esc_url($data['back_img']['url'])?>'); background-repeat: no-repeat; background-position: center center; background-size:cover;">
    <div class="container">

        <div class="row">    
             <div class="col-lg-5">
            </div>
            <div class="col-lg-7">
                <div class="testimonial-active2">
                   <?php $i = 0; ?>
                            <?php foreach ((array) $data['testimonial_repeater'] as $price_var): $i++; ?>      
                    <div class="single-testimonial">
                        <div class="testi-author">                                      
                            <div class="ta-info">
                              <h6><?php echo html_entity_decode($price_var['name'])?></h6>                                            
                                <div class="review-icon">
                                    <img src="<?php echo esc_url ( $price_var['review']['url'])?>" alt="<?php echo esc_attr($price_var['review']['url'])?>">
                                 </div>
                            </div>
                        </div>                                   
                         <p><?php echo html_entity_decode($price_var['description'])?></p>   
                        <div class="row">
                            <div class="col-lg-3">
                                  <div class="t-logo"><img src="<?php echo esc_url ( $price_var['tlogo']['url'])?>" alt="<?php echo esc_attr($price_var['tlogo']['url'])?>"></div>
                            </div>
                            <div class="col-lg-7">
                                <hr>
                            </div>
                            <div class="col-lg-2 text-right">                                            
                                 <img src="<?php echo esc_url($data['qt_img']['url'])?>" alt="<?php echo esc_attr($data['qt_img']['url'])?>">   
                            </div>
                        </div>   
                    </div>
                   <?php endforeach ?>   
                </div>
            </div>

        </div>
    </div>
</section>
<!-- testimonial-area-end -->
