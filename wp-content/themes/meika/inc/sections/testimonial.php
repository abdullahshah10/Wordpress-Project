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
<section id="testimonial" class="testimonial-area pb-90 p-relative fix">
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
            <div class="col-lg-12">
                <div class="testimonial-active">
                     <?php $i = 0; ?>
                                <?php foreach ((array) $data['testimonial_repeater'] as $price_var): $i++; ?>      
                    <div class="single-testimonial" style="background-image: url('<?php echo esc_url($data['back_img']['url'])?>'); background-size: cover;">
                        <div class="testi-author">
                             <img src="<?php echo esc_url ( $price_var['avtar']['url'])?>" alt="<?php echo esc_attr($price_var['avtar']['url'])?>">
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
                                  <div class="t-logo"> <img src="<?php echo esc_url ( $price_var['tlogo']['url'])?>" alt="<?php echo esc_attr($price_var['tlogo']['url'])?>"></div>
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