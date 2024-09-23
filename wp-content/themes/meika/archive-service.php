<?php
/**
 * The template for displaying archive service
 *
 * @package meika
 */

get_header();
?>
<?php get_template_part('template-parts/breadcrumbs/archive-breadcrumbs'); ?>
<div class="inner-blog pt-120 pb-80">
    <div class="container">
        <div class="row">


		<?php if (  is_active_sidebar( 'sidebar-1' ) ){ ?>

						<!-- .blog -->
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="blog-deatails-box">
                    <?php if ( have_posts() ):?>

                    <?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_format() );
							endwhile;
							the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <?php meika_wordpress_numeric_post_nav();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #right side -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <aside class="sidebar-widget">
                    <?php get_sidebar();?>
                </aside>
            </div>
            <!-- #right side end -->


				<?php } else { ?>
				 <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="blog-deatails-box">
                    <?php if ( have_posts() ):?>

                    <?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', get_post_format() );
							endwhile;
							the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
                    <div class="col-sm-12 col-md-12">
                        <div class="row">
                            <?php meika_wordpress_numeric_post_nav();?>
                        </div>
                    </div>
                </div>
            </div>

			 <?php } ?>



        </div>
    </div>
</div>
<?php get_footer(); ?>
