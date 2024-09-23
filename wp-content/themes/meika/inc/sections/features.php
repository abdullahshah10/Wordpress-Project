<?php
	$data = meika_el()->merge_options([        

      'feature_box_repeater' => [],			
        
   ], $data);
?>

<!-- service-area -->
<section class="service-details-three p-relative fix">
    <div class="container">
        <div class="row sbox">
            <?php $i = 0; ?>
                    <?php foreach ((array) $data['feature_box_repeater'] as $featurebox): ?>        
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="services-box mb-30 text-center wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">

                 <div class="sr-contner">
                    <div class="icon">
                        <i class="<?php echo html_entity_decode($featurebox['icon_font']) ?>"></i>
                    </div>
                    <div class="text">
                        <h3>  <a href="<?php echo esc_url($featurebox['button_link']['url']) ?>"><?php echo html_entity_decode($featurebox['heading']) ?></a> </h3>
                    </div>
                 </div>


                </div>
            </div>
           <?php $i++; endforeach; ?>  

        </div>
    </div>
</section>
<!-- service-details2-area-end -->
