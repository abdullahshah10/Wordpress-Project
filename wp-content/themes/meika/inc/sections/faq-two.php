<?php
	$data = meika_el()->merge_options([
        
    'service_section_var' => [],	
    'contact_heading' => [],	
    'icon' => [],	
    'decs' => [],	
    'text_heading' => [],
    'sub_heading' => [],
			
    ], $data);
?>

<!-- frequently-area -->
<section class="faq-area pb-120 p-relative fix">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                   <div class="faq-wrap pr-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
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
            <div class="col-lg-6">
               <div class="section-title wow fadeInUp animated mb-20" data-animation="fadeInUp animated" data-delay=".2s">
                   <h5><?php echo html_entity_decode($data['sub_heading'])?></h5>
                   <h2><?php echo html_entity_decode($data['text_heading'])?></h2>        
                </div>
                <?php echo html_entity_decode($data['decs'])?>               
            </div>
        </div>
    </div>
</section>
<!-- frequently-area-end -->	

