<?php
	$data = meika_el()->merge_options([
        
    'testimonial_repeater' => [],		
    'hading_section_data' =>	[],	
    'back_img' =>	[],	
    'text_heading' =>	[],	
    'sub_heading' =>	[],	
   
		], $data);
?>
<!-- steps-area -->
<section class="steps-area p-relative pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                  <img src="<?php echo esc_url ( $data['back_img']['url'])?>" alt="<?php echo esc_attr($data['back_img']['url'])?>">
                </div>
            </div>
           <div class="col-lg-6 col-md-12">
               <div class="pl-60">
                <div class="section-title mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                     <h5><?php echo html_entity_decode($data['sub_heading'])?></h5>
                 <h2><?php echo html_entity_decode($data['text_heading'])?></h2>
                </div>
                <ul>
                     <?php $i = 0; ?>
                    <?php foreach ((array) $data['testimonial_repeater'] as $price_var): $i++; ?>             
                    <li>
                        <div class="step-box wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="dnumber">
                                <div class="date-box"><img src="<?php echo esc_url ( $price_var['avtar']['url'])?>" alt="<?php echo esc_attr($price_var['avtar']['url'])?>"></div>
                            </div>
                            <div class="text">
                                <h3><?php echo html_entity_decode($price_var['title'])?></h3>
                                <?php echo html_entity_decode($price_var['description'])?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach ?>  
                </ul>
               </div>
            </div>

        </div>

    </div>
</section>
<!-- steps-area-end -->