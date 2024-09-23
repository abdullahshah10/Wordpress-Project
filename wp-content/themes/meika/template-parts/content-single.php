<?php 
/**
 * Template part for displaying posts
 *
 * @package meika
 */
get_header(); 
$des = get_option('description');
?>
<?php wp_link_pages(array(
					'before' => '<div class="inner-linke-page">' . esc_html__('Pages','meika'),
					'after' => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
                ));?>
					
<div class="tags">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="post__tag">       
                 <?php the_tags( '<h5>Post Tags </h5> <ul><li>', '</li><li>', '</li></ul>' ); ?>
            </div>
        </div>
    </div>
</div>
<!-- /.blog -->