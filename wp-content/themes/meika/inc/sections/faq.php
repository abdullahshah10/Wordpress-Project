<?php
	$data = meika_el()->merge_options([
        
    'service_section_var' => [],	
    'feature_img' => [],	
    'button_text' => [],	
    'button_url' => [],	
    'icon' => [],	
    'text_heading' => [],	
    'descr' => [],	
    'sub_heading' => [],	
			
    ], $data);
?>

  <!-- faq-area -->
<section class="event event03 pt-120 pb-120 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-8">
                  <div class="about-title second-title pb-25">  
                      <h5><span class="line"> <img src="<?php echo esc_url($data['icon']['url'])?>" alt="<?php echo esc_attr($data['icon']['url'])?>"></span>  <?php echo html_entity_decode($data['sub_heading'])?></h5>                         
                    <h2>
                      <?php echo html_entity_decode($data['text_heading'])?>
                    </h2>                        
                    </div> 
                </div>
                <div class="col-lg-4 col-md-4 text-right">
                    <a href="<?php echo esc_url($data['button_url']['url'])?>" class="btn ss-btn smoth-scroll"><?php echo html_entity_decode($data['button_text'])?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>
              </div>
            </div>
        <div class="row">
            <div class="col-lg-6 col-md-12  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                <p class="mb-30"><?php echo html_entity_decode($data['descr'])?></p>
                <img src="<?php echo esc_url($data['feature_img']['url'])?>" alt="<?php echo esc_attr($data['feature_img']['url'])?>">
            </div>
            <div class="col-lg-6 col-md-12  wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
               <div class="faq-wrap pl-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="accordion" id="accordionExample">
                          <?php $i = 0; ?>
                            <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>  
                        <div class="card">
                            <div class="card-header">
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
        </div>
    </div>
</section>
<!-- faq-area -->
