<?php
/**
 * The template for displaying service pages
 *
 * @package meika
 */

get_header(); 
?>
<?php get_template_part('template-parts/breadcrumbs/page-single-breadcrumbs'); ?>
<!-- service-details-area -->
    <?php echo the_content();?>
<!-- service-details-area-end -->

<?php get_footer() ?>