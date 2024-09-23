<?php
	$data = meika_el()->merge_options([
        
    'service_section_var' => [],	
    'feature_img' => [],	
    'background' => [],	
    'icon' => [],	
    'text_heading' => [],
    'sub_heading' => [],	
			
    ], $data);
?>

<!-- faq-area -->
<section class="event event03 pb-120 p-relative fix" style="background-image: url('<?php echo esc_url($data['background']['url'])?>'); background-position: center center; background-repeat: no-repeat;">    
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                 <div class="about-title second-title pb-25">  
                         <h5><span class="line"> <img src="<?php echo esc_url($data['icon']['url'])?>" alt="<?php echo esc_attr($data['icon']['url'])?>"></span>  <?php echo html_entity_decode($data['sub_heading'])?></h5>      
                        <h2> <?php echo html_entity_decode($data['text_heading'])?></h2>                                   
                    </div> 
               <div class="faq-wrap pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="accordion" id="accordionExample">
                           <?php $i = 0; ?>
                            <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>  
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                     <button class="faq-btn <?php echo html_entity_decode( $service_var['text-class-two'] ) ?>" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#<?php echo html_entity_decode( $service_var['text-id'] ) ?>"  >
                                            <?php echo html_entity_decode( $service_var['text'] ) ?>
                                        </button>
                                </h2>
                            </div>
                            <div id="<?php echo html_entity_decode( $service_var['text-id'] ) ?>" class="collapse <?php echo html_entity_decode( $service_var['text-class'] ) ?>" data-bs-parent="#accordionExample">
                                    <div class="card-body">
                                       <?php echo html_entity_decode( $service_var['content'] ) ?>
                                    </div>
                                </div>
                        </div>
                         <?php endforeach ?> 
                    </div>
                </div>  
            </div> 
            <div class="col-lg-6 col-md-6  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">                           
                <img src="<?php echo esc_url($data['feature_img']['url'])?>" alt="<?php echo esc_attr($data['feature_img']['url'])?>">
            </div>                                  
        </div>
    </div>
</section>
<!-- faq-area -->