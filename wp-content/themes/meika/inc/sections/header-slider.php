<?php
	$data = meika_el()->merge_options([
        
    'ani_bg' => [],
    'hero_slides' => [],
		], $data);
?>
<!-- slider-area -->
<section id="parallax" class="slider-area slider-two fix p-relative">
    <div class="slider-shape ss-four layer" data-depth="0.40"><img src="<?php echo esc_url($data['ani_bg']['url'])?>" alt="<?php echo esc_attr($data['ani_bg']['url'])?>"></div>
    <div class="slider-active">
        <?php $i = 0; ?>
        <?php foreach ((array) $data['hero_slides'] as $testimonial): ?>        
            <div class="single-slider slider-bg slider-bg2 d-flex align-items-center" style="background: url('<?php echo esc_url($testimonial['hero_image']['url'])?>') no-repeat;  background-size:cover;">
            <div class="container">
               <div class="row justify-content-center align-items-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="slider-content s-slider-content pt-100">
                            <h5 data-animation="fadeInUp" data-delay=".4s"><?php echo html_entity_decode($testimonial['hero_subtitle']) ?></h5>
                             <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo html_entity_decode($testimonial['hero_heading']) ?></h2>

                             <div class="slider-btn mb-200">                                          
                               <a href="<?php echo esc_url($testimonial['button_link']['url']) ?>" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s"><?php echo html_entity_decode ($testimonial['button_text']) ?> <i class="fal fa-long-arrow-right"></i></a>                                         
                            </div>        

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4">

                    </div>
                </div>
            </div>
        </div>
        <?php $i++; endforeach; ?>  
        </div>
</section>
<!-- slider-area-end -->