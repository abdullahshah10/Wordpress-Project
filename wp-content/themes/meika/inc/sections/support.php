<?php
	$data = meika_el()->merge_options([
        
    'sub_text' => [],	
    'text_heading' => [],	
    'text_phone' => [],	
    'button_text' => [],	
    'button_link' => [],	
			
    ], $data);
?>
 
<!-- support-area  -->
    <section class="cta-area cta-bg pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12">
                    <div class="section-title cta-title wow fadeInLeft animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <p><?php echo html_entity_decode($data['sub_text'])?></p>
                        <h2><?php echo html_entity_decode($data['text_heading'])?></h2>
                        <h3><?php echo html_entity_decode($data['text_phone'])?></h3>
                         <div class="cta-btn s-cta-btn wow fadeInRight animated mt-30" data-animation="fadeInDown animated" data-delay=".2s">
                            <a href="<?php echo esc_url($data['button_link']['url'])?>" class="btn"><?php echo html_entity_decode($data['button_text'])?></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
<!-- support-area-end -->	