<?php
	$data = meika_el()->merge_options([	
 
    'discretion' => '',  
    'text-heading' => '',    
    'icon' => '',    
    'button_url' => '',    
    'infinite_scroll' => false,
    'posts_per_page' => 9,
    'category' => [],
    'include' => [],   
    'paged' => 1,
    'query' => false,
        
		], $data);
	

	$args = [
		'paged' => $data['paged'],
		'posts_per_page' => $data['posts_per_page'],
	];

	// Filter by category.
	if ($data['category']) $args['category__in'] = $data['category'];

	// Only display the selected listings.
	if ($data['include']) $args['post__in'] = $data['include'];

	// WP Query.
	$query = $data['query'] ? : new WP_Query($args);
?>


<!-- blog-area -->
<section id="blog" class="blog-area p-relative fix pt-120 pb-90">
    <div class="container">
          <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="section-title p-relative text-center mb-50 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s">
                     <h5><span class="line"> <img src="<?php echo esc_url($data['icon']['url'])?>" alt="<?php echo esc_attr($data['icon']['url'])?>"></span></h5>
                    <h2>
                      <?php echo html_entity_decode($data['text_heading'])?>
                    </h2>
                    <p> <?php echo html_entity_decode($data['discretion'])?></p>
                </div>
                </div>

            </div>
             <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post();
                if (get_post_type() == 'meika') {
                    global $post;
                    $post->meika_options__wrap_in = 'col-md-4 col-sm-6 col-xs-12 reveal';
                    get_template_part( 'content','meika' );

                } else {
                meika_el()->get_partial('post-preview', [
                    'wrap_in' =>  [],
                ]);
                }
                endwhile; ?>
                <?php wp_reset_postdata() ?>
            <?php endif ?> 

    </div>
</section>
<!-- blog-area-end -->
