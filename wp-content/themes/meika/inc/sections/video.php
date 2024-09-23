<?php
	$data = meika_el()->merge_options([
        
    'back_img' => [],	
    'icon_img' => [],	
    'sub_heading' => [],	
    'heading_text' => [],	
    'button_link' => [],	
    'video_link' => [],	
    'button_text' => [],	
    'decrip' => [],	
    'video_img' => [],	
    'ani_img' => [],	
    'ani_img_two' => [],	
			
    ], $data);
?>

<!-- video-area -->
<section id="video" class="video-area pt-150 pb-150 p-relative" style="background-image:url('<?php echo esc_url($data['back_img']['url'])?>'); background-repeat: no-repeat; background-position: center bottom; background-size:cover;">
<div class="animations-01"><img src="<?php echo esc_url($data['ani_img']['url'])?>" alt="<?php echo esc_attr($data['ani_img']['url'])?>"></div>
 <div class="animations-02"><img src="<?php echo esc_url($data['ani_img_two']['url'])?>" alt="<?php echo esc_attr($data['ani_img_two']['url'])?>"></div>
<div class="container">                   
     <div class="row">
        <div class="col-lg-7">                           
            <div class="section-title center-align">
               <h2><?php echo html_entity_decode($data['heading_text'])?></h2>
                <p> <?php echo html_entity_decode($data['decrip'])?></p>
            </div>
               <div class="slider-btn mt-15">                                          
                    <a href="<?php echo esc_url($data['button_link']['url'])?>" class="btn ss-btn mr-15" data-animation="fadeInRight" data-delay=".8s"><?php echo html_entity_decode($data['button_text'])?> <i class="fa-sharp fa-light fa-arrow-up"></i></a>	
                    <a href="<?php echo esc_url($data['video_link']['url'])?>" class="popup-video"><img src="<?php echo esc_url($data['video_img']['url'])?>" alt="<?php echo esc_attr($data['video_img']['url'])?>"></a>	
                </div>
        </div>
      <div class="col-lg-5">
        <div class="s-video-wrap2">
                <div class="s-video-content">
                    <a href="<?php echo esc_url($data['video_link']['url'])?>" class="popup-video"><img src="<?php echo esc_url($data['icon_img']['url'])?>" alt="<?php echo esc_attr($data['icon_img']['url'])?>"></a>

                </div>
            </div>
    </div>
    </div>

</div>
</section>
<!-- video-area-end -->