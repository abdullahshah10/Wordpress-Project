<?php
/**
 * The template for displaying the footer
 *
 * @package meika
 */
$meika_data =get_option('meika_data');
?>
</div><!-- #content -->
 <!-- footer -->
      <footer class="footer-bg footer-p pt-90">
         
       <?php if(isset ($meika_data['meika__opt-footer-text']) && $meika_data['meika__opt-footer-text'] !== '') { ?>	
         <?php $footer_text = $meika_data['meika__opt-footer-text'];?>            
                 
            <?php if ( $meika_data['meika__opt-footer-widgets'] == 1) { ?>
                 <div class="footer-top p-relative pt-60 pb-70">                  
                    <div class="container">
                        <div class="row justify-content-between">
                            <?php get_template_part('template-parts/footer-separators');?>
                        </div>                         
                    </div>
                 </div>
                <?php get_template_part('template-parts/footer-bar'); ?>
            <?php } else { ?>
                <div class="footer-top wpding p-relative">
                    <div class="container">
                        <div class="row justify-content-between">   
                            <?php get_template_part('template-parts/footer-weight');?>
                        </div>
                       
                    </div>
                </div>
            <?php } ?>
             <?php } else { ?>
                 <div class="footer-top wpding p-relative">
                    <div class="container">
                        <div class="row justify-content-between">   
                            <?php get_template_part('template-parts/footer-weight');?>
                        </div>
                    </div>
                 </div>
            <?php } ?> 
    </footer>
 <!-- footer-end -->
<?php wp_footer(); ?>
</div>
</body>

</html>


