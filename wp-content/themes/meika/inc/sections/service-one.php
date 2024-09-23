<?php
	$data = meika_el()->merge_options([
        
    'service_repeater' => [],
    'background' => [],
    'sub_heading' => [],
    'text_heading' => [],
    'posts_per_page' => [],
        
		], $data);
?>

<!-- services-three-area -->
<section id="services" class="services-area services-bg  p-relative fix pt-120 pb-90">  
    <div class="container">                  
        <div class="row">
            <?php $i = 0; ?>
              <?php foreach ((array) $data['service_repeater'] as $price_var): $i++; ?>      
            <div class="col-lg-6 col-md-6">
               <div class="s-single-services s-single-services2 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                   <a href="<?php echo esc_url ( $price_var['button_link']['url'])?>" class="icon-plus"><i class="fa-light fa-plus"></i></a>
                <div class="services-icon">
                   <img src="<?php echo esc_url ( $price_var['icon']['url'])?>" alt="<?php echo esc_attr($price_var['icon']['url'])?>"/>
                    <img src="<?php echo esc_url ( $price_var['icon_hover']['url'])?>" alt="<?php echo esc_attr($price_var['icon_hover']['url'])?>" class="hover">
                </div>
                <div class="second-services-content">
                    <h5><a href="<?php echo esc_url ( $price_var['button_link']['url'])?>"><?php echo html_entity_decode($price_var['heading_text'])?></a></h5>
                    <p><?php echo html_entity_decode($price_var['description'])?></p>   
                </div>
                   <div class="sr-h-bg">
                   <img src="<?php echo esc_url($data['background']['url'])?>" alt="<?php echo esc_attr($data['background']['url'])?>"/>
                </div>
                </div>
            </div>
             <?php endforeach ?>   
        </div>
    </div>
</section>
<!-- services-three-area -->