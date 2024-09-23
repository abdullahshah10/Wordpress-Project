<?php
	$data = meika_el()->merge_options([
        
    'back_img' => [],	
    'sub_heading' => [],	
    'text_heading' => [],	
    'text_desic' => [],	
			
    ], $data);
?>
 
<!-- apartments-area -->
            <section class="apartments pb-110">
                <div class="container">
                

              <div class="row">                
				   <div class="col-lg-6 ">
                       <div class="section-title mb-30">
                                <h5> <?php echo html_entity_decode($data['sub_heading'])?></h5>
                                <h2> <?php echo html_entity_decode($data['text_heading'])?></h2>
                            </div>
                       <?php echo html_entity_decode($data['text_desic'])?>
                       
                
                </div>
                  
                  <div class="col-lg-6">
							<div class="apartments-img">
								<img src="<?php echo esc_url($data['back_img']['url'])?>" alt="<?php echo esc_attr($data['back_img']['url'])?>"/>
							</div>
						</div>
                  
              </div>
        </div>

            </section>
            <!-- apartments-area-end -->
