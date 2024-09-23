<?php
	$data = meika_el()->merge_options([
        
      'count_slides' => [],				
      'back_img' => [],				
        
   ], $data);
?>	

 <!-- counter-area -->
<div class="counter-area p-relative pt-120 pb-120" style="background: url('<?php echo esc_url($data['back_img']['url'])?>') no-repeat; background-position: center center;">
    <div class="container">
        <div class="row p-relative">
            <?php $i = 0; ?>
            <?php foreach ((array) $data['count_slides'] as $service_var): $i++; ?>
             <div class="col-lg-3 col-md-6 col-sm-12">
                 <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                    <div class="counter p-relative">
                        <span class="count"><?php echo esc_html($service_var['increment']) ?></span><span><?php echo html_entity_decode($service_var['symbols'] ) ?></span>    
                       <p><?php echo html_entity_decode($service_var['dec_text'] ) ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach ?> 
        </div>
    </div>
</div>
<!-- counter-area-end -->	