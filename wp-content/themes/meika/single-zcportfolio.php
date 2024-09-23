<?php
/**
 * The template for displaying single pages
 *
 * @package meika
 */

get_header();
?>

<?php get_template_part('template-parts/breadcrumbs/page-single-breadcrumbs'); ?>


 <div class="servcies-img">
     <?php
        $images = rwmb_meta( 'meikazc_post_single_img', array( 'size' => 'large' ) );
        foreach ( $images as $image ) {
        echo '<figure class="image"><img src="', $image['url'],'" alt="', $image['url'],'"></figure>';
    }			  
    ?>
    
</div>
<!-- service-details-area -->
<div class="about-area5 about-p p-relative inner-blog">
    <div class="container pt-50 pb-90">
        <div class="row justify-content-center align-items-center">      
             <?php echo get_the_content(); ?>                      
        </div>
    </div>
</div>
<!-- service-details-area-end -->

<?php get_footer() ?>   