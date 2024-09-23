<?php
	$data = meika_el()->merge_options([  
        
    'feature_img' => '',  
    'text_heading' => '',  
    'tab_heading_one' => '',  
    'shortcode_one' => '',
    'tab_heading_two' => '',  
    'shortcode_two' => '',
    'tab_heading_three' => '',  
    'shortcode_three' => '',
        
    ], $data);
?>

 <!-- contact-area -->
<section id="contact" class="contact-area after-none contact-bg pb-120 p-relative fix">
    <div class="container">

        <div class="row">

             <div class="col-lg-6 col-md-12 order-1">
                <img src="<?php echo esc_url ( $data['feature_img']['url'])?>" alt="<?php echo esc_attr($data['feature_img']['url'])?>">
            </div>
             <div class="col-lg-6 col-md-12 order-2">
                 <div class="section-title p-relative pr-60 mb-30">
                    <h2  data-aos="fade-up" data-aos-duration="1000">
                       <?php echo html_entity_decode($data['text_heading'])?>
                     </h2>
                     <ul class="nav nav-tabs"  data-aos="fade-up" data-aos-duration="1400">
                      <li>
                        <span class="active" id="home-tab" data-bs-toggle="tab" data-bs-target="#voverview"><?php echo html_entity_decode($data['tab_heading_one'])?></span>
                      </li>
                      <li >
                        <span id="profile-tab" data-bs-toggle="tab" data-bs-target="#degre"><?php echo html_entity_decode($data['tab_heading_two'])?></span>
                      </li>
                      <li>
                        <span id="contact-tab" data-bs-toggle="tab" data-bs-target="#vgallery" aria-controls="vgallery"><?php echo html_entity_decode($data['tab_heading_three'])?></span>
                      </li>
                </ul>

                </div>
                  <div class="tab-content" id="myTabContent"  data-aos="fade-up" data-aos-duration="1600">
                  <div class="tab-pane fade show active" id="voverview" role="tabpanel">
                       <?php echo html_entity_decode ($data['shortcode_one']) ?>
                  </div>
                  <div class="tab-pane fade" id="degre" role="tabpanel">
                      <?php echo html_entity_decode ($data['shortcode_two']) ?>
                  </div>
                  <div class="tab-pane fade" id="vgallery" role="tabpanel">
                     <?php echo html_entity_decode ($data['shortcode_three']) ?>
                  </div>
                </div>

            </div>
            </div>

    </div>

</section>
<!-- contact-area-end -->