<?php
	$data = meika_el()->merge_options([
        
    'ani_bg' => [],
    'hero_slides' => [],
		], $data);
?>
 <!-- slider-area -->
<section id="home" class="slider-area fix p-relative">
  <?php $i = 0; ?>
        <?php foreach ((array) $data['hero_slides'] as $testimonial): ?>   
    <div class="slider-active" style="background: #141b22;">
        <div class="single-slider slider-bg d-flex align-items-center" style="background-image: url('<?php echo esc_url($testimonial['hero_image']['url'])?>'); background-size: cover;">
            <div class="container">
               <div class="row">

                    <div class="col-lg-7 col-md-6">
                        <div class="slider-content s-slider-content">
                             <h5 data-animation="fadeInUp" data-delay=".4s"><?php echo html_entity_decode($testimonial['hero_subtitle']) ?></h5>
                             <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo html_entity_decode($testimonial['hero_heading']) ?></h2>
                             <p data-animation="fadeInUp" data-delay=".6s"><?php echo html_entity_decode($testimonial['hero_description']) ?></p>

                              <div class="slider-btn mt-30">     
                               <a href="<?php echo esc_url($testimonial['button_link']['url']) ?>" class="btn ss-btn mr-15" data-animation="fadeInLeft" data-delay=".4s"><?php echo html_entity_decode ($testimonial['button_text']) ?>  <i class="fal fa-long-arrow-right"></i></a>
                            </div>        

                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 p-relative">
                    </div>

                </div>
            </div>
        </div>
         <?php $i++; endforeach; ?>  
        </div>


</section>
<!-- slider-area-end -->