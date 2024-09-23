<?php
	$data = meika_el()->merge_options([
        
      'back_img' => [],			
      'text_heading' => [],			
      'sub_heading' => [],			
      'shotcode_newsletter' => [],			
        
   ], $data);
?>
<!-- newslater-area -->
<section class="newslater-area pt-120 pb-200" style="background:url('<?php echo esc_url($data['back_img']['url'])?>'); background-repeat: no-repeat;background-size: contain;
background-repeat: repeat-x;">
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title newslater-title wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s">
                    <div class="text">
                        <h5><?php echo html_entity_decode($data['sub_heading'])?></h5>
                        <h2><?php echo html_entity_decode($data['text_heading'])?></h2>
                    </div>

                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                 <div id="contact-form4" class="contact-form newslater wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                   <div class="form-group p-relative">
                        <?php echo html_entity_decode($data['shortcode_newsletter'])?>   
                   </div>
                   <!-- /Form-email -->	
                </div>
            </div>
        </div>

    </div>
</section>
<!-- newslater-aread-end -->