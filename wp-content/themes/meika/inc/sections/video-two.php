<?php
	$data = meika_el()->merge_options([
        
    'back_img' => [],	
    'icon_img' => [],	
    'button_link' => [],	
			
    ], $data);
?>
 <!-- video-area -->
<section id="video" class="video-area p-relative wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
   <div class="container-fluid">
         <div class="row">
            <div class="col-12">
                <div class="s-video-wrap" style="background-image:url('<?php echo esc_url($data['back_img']['url'])?>');">
                    <div class="s-video-content text-center">
                       <h6><a href="<?php echo esc_url($data['button_link']['url'])?>" class="popup-video mb-50"><img src="<?php echo esc_url($data['icon_img']['url'])?>" alt="<?php echo esc_attr($data['icon_img']['url'])?>"></a></h6> 

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- video-area-end -->
