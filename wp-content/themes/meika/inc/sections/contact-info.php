<?php
	$data = meika_el()->merge_options([
        
      'hero_slides' => [],				
      'text_heading' => [],			
      'sub_heading' => [],	
   ], $data);
?>

<!-- services-area -->          
<section id="services" class="services-area contact-info pt-120 pb-120 fix">
    <div class="container">
       <div class="row">
             <div class="col-lg-12">
                <div class="section-title text-center mb-50 wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h5><?php echo html_entity_decode ($data['sub_heading']) ?></h5>
                    <h2>
                     <?php echo html_entity_decode ($data['text_heading']) ?>
                    </h2>

                </div>

            </div>
        </div>
        <div class="row">
             <?php $i = 0; ?>
        <?php foreach ((array) $data['hero_slides'] as $testimonial): ?>        
             <div class="col-lg-4 col-md-4">
              <div class="services-box text-center">
                  <div class="services-icon">
                       <img src="<?php echo esc_url($testimonial['hero_image']['url'])?>" alt="<?php echo esc_attr($testimonial['hero_image']['url'])?>">
                    </div>
                   <div class="services-content2">
                        <h5><?php echo html_entity_decode($testimonial['hero_subtitle'])?></h5>   
                         <?php echo html_entity_decode($testimonial['hero_heading'])?>
                    </div>
                </div>   
            </div>
             <?php endforeach ?> 
        </div>
    </div>
</section>
<!-- services-area-end -->