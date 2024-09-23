  <!-- gallery-area -->
<section id="work" class="pt-120 pb-110 fix" style="background: url('<?php echo esc_url($back_img['url'])?>') no-repeat; background-size: cover;">
    <div class="container">   
        <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                  <div class="section-title p-relative text-center mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s">
                        <h5><span class="line"><img src="<?php echo esc_url($icon_img['url'])?>" alt="<?php echo esc_attr($icon_img['url'])?>"></span></h5>
                        <h2>
                           <?php echo html_entity_decode($text_heading)?>
                        </h2>
                        <p><?php echo html_entity_decode($text_description)?></p>
                    </div>
                </div>                           
        </div>
    </div>
    <div class="container-fluid">   
        <div class="portfolio ">

            <div class="portfolio-active wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                <?php $i = 0; ?>
                  <?php foreach ((array) $about_service_repeater as $price_var): $i++; ?> 
                 <div class="grid-item financial">

                        <figure class="gallery-image">
                          <img src="<?php echo esc_url ($price_var['main_image']['url'])?>" alt="<?php echo esc_attr($price_var['main_image']['url'])?>">
                           <figcaption>
                               <div class="date-home">
                                   <?php echo html_entity_decode($price_var['date'])?>
                                </div>
                               <a href="single-protfolio.html">       
                                  <p><?php echo html_entity_decode($price_var['category'])?></p>
                                 <h3><?php echo html_entity_decode($price_var['htext'])?></h3>
                              </a>                                           
                               <div class="slider-btn">
                                     <a href="<?php echo esc_url ( $price_var['button_link']['url'])?>" tabindex="0"><i class="fa-sharp fa-light fa-arrow-up"></i></a>					
                                </div>
                            </figcaption>
                        </figure>
                </div>
                  <?php endforeach ?>            
                </div>
            </div>
    </div>
</section>
<!-- gallery-area-end -->
           