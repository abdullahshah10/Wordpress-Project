<?php
/**
 * The template for displaying team pages
 *
 * @package meika
 */

get_header(); 
?>

<?php get_template_part('template-parts/breadcrumbs/page-single-breadcrumbs'); ?>

<!-- Team Detail -->
<section class="inner-blog team-area-content">
    <div class="container">

        <!-- Lower Content -->
        <div class="lower-content">
            <div class="row">
                 <div class="col-lg-4 col-md-12 col-sm-12 order-1">
                     <div class="team-img-box">
                          <?php the_post_thumbnail(); ?>
                     </div>
                      <div class="per-info">
                          <?php
                                $teaminfo = rwmb_meta('meikazc_post_team_info');
                                    echo html_entity_decode ($teaminfo);	
                                ?>             
                    </div>

                </div>

                <div class="text-column col-lg-8 col-md-12 col-sm-12 order-2">
                   <div class="s-about-content pl-30 wow fadeInRight" data-animation="fadeInRight" data-delay=".2s">  
                        <?php echo the_content();?>                     
                    </div>
                </div>


            </div>
        </div>

    </div>
</section>
<!--End Team Detail -->

<?php get_footer() ?>