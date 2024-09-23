<?php
	$data = meika_el()->merge_options([
        
    'service_repeater' => [],
    'icon' => [],
    'icon' => [],
    'text_heading' => [],
    'posts_per_page' => [],
        
		], $data);
?>

<!-- services-three-area -->
<section id="services" class="services-area services-bg  p-relative fix  pb-90">  
    <div class="container">
        <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="section-title p-relative text-center mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s">
                     <h5><span class="line"> <img src="<?php echo esc_url($data['icon']['url'])?>" alt="<?php echo esc_attr($data['icon']['url'])?>"></span></h5>
                     <h2>
                     <?php echo html_entity_decode($data['text_heading'])?>
                    </h2>
                    <p><?php echo html_entity_decode($data['description'])?></p>
                </div>
                </div>

            </div>
        <div class="row services-active2">
            <?php $i = 0; ?>
              <?php foreach ((array) $data['service_repeater'] as $price_var): $i++; ?>      
            <div class="col-lg-4 col-md-6">
               <div class="s-single-services mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                <div class="service-img">
                     <img src="<?php echo esc_url ( $price_var['feature_img']['url'])?>" alt="<?php echo esc_attr($price_var['feature_img']['url'])?>"/>           
                    <div class="services-icon3">
                           <img src="<?php echo esc_url ( $price_var['icon']['url'])?>" alt="<?php echo esc_attr($price_var['icon']['url'])?>"/>            
                        </div>
                </div>

                <div class="second-services-content">
                     <h5><a href="<?php echo esc_url ( $price_var['button_link']['url'])?>"><?php echo html_entity_decode($price_var['heading_text'])?></a></h5>
                    <p><?php echo html_entity_decode($price_var['description'])?></p>   
                    <a class="btn" href="<?php echo esc_url ( $price_var['button_link']['url'])?>"><i class="fa-sharp fa-light fa-arrow-up"></i></a>
                </div>
                   <div class="sr-h-bg">
                        <img src="<?php echo esc_url ( $price_var['box_img']['url'])?>" alt="<?php echo esc_attr($price_var['box_img']['url'])?>"/>   
                </div>
                </div>
            </div>
             <?php endforeach ?>   
        </div>
    </div>
</section>
<!-- services-three-area -->