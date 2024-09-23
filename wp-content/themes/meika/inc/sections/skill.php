<?php
	$data = meika_el()->merge_options([
        
      'service_section_var' => [],						
      'icon_img' => [],				
      'sub_heading' => [],							
      'text_heading' => [],							
      'desc' => [],							
        
   ], $data);
?>
<!-- skill-area -->
 <section id="skill" class="skill-area p-relative fix pt-240 pb-120">
    <div class="container">
       <div class="row justify-content-center align-items-center">
          <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
             <div class="skills-img wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                  <img src="<?php echo esc_url($data['icon_img']['url'])?>" alt="<?php echo esc_attr($data['icon_img']['url'])?>" class="img">              
             </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="skills-content s-about-content wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                <div class="skills-title pb-20">
                   <h5><?php echo html_entity_decode($data['sub_heading'])?></h5>
                    <h2><?php echo html_entity_decode($data['text_heading'])?></h2>                         
                </div>
                <p><?php echo html_entity_decode($data['desc'])?></p>
                <div class="mt-20">
                   <div class="skills">
                       <?php $i = 0; ?>
                        <?php foreach ((array) $data['service_section_var'] as $service_var): $i++; ?>
                            <div class="skill mb-30">
                              <div class="skill-name"><?php echo html_entity_decode($service_var['text'])?></div>
                              <div class="skill-bar">
                                <div class="skill-per" id="<?php echo html_entity_decode($service_var['increment'])?>"></div>
                              </div>
                            </div>
                     <?php endforeach ?>                      
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- skill-area-end -->            