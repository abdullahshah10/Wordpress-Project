<?php
	$data = meika_el()->merge_options([  
        
    'descr' => '',  
    'text_heading' => '',  
    'tab_heading_one' => '',  
    'shortcode_one' => '',
    'tab_heading_two' => '',  
        
    ], $data);
?>

<!-- contact-area -->
<section class="contact-area contact-bg2 p-relative fix" data-aos="fade-up" data-aos-duration="1000">
    <div class="container contact-bg02">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <?php echo html_entity_decode ($data['tab_heading_two']) ?>               
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-bg">
                <div class="section-title">
                    <h2><?php echo html_entity_decode($data['text_heading'])?></h2>
                  <p><?php echo html_entity_decode($data['descr'])?></p>
                </div>
                 <?php echo html_entity_decode ($data['shortcode_one']) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->