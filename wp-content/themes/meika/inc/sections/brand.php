<?php
	$data = meika_el()->merge_options([
        
      'clogo_repeater' => [],				
        
   ], $data);
?>

<!-- brand-area -->
<div class="brand-area wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
    <div class="container">
        <div class="row brand-active">
            <?php $i = 0; ?>
                <?php foreach ((array) $data['clogo_repeater'] as $service_var): $i++; ?>
                    <div class="col-xl-2">
                        <div class="single-brand">
                             <img src="<?php echo esc_url($service_var['avtar']['url'])?>" alt="<?php echo esc_attr($service_var['avtar']['url'])?>">
                        </div>
                    </div>
             <?php endforeach ?>                     
        </div>
    </div>
</div>
<!-- brand-area-end -->        