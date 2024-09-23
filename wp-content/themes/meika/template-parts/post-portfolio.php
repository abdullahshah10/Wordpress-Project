<?php
$defaults = [
    'wrap_in' => '',
];
$categories = array_filter((array) get_the_terms(get_the_ID(), 'category'));
?>

<div class="<?php echo esc_attr( $data['wrap_in'] ) ? esc_attr( $data['wrap_in'] ) : '' ?>">
    <?php $agrombg = get_the_post_thumbnail_url(); ?>
      <a class='gallery-link' href='<?php echo esc_html( $agrombg) ?>'>
        <figure class='gallery-image'>
           <?php the_post_thumbnail(); ?>
             <figcaption><?php the_title();  ?></figcaption>
        </figure>
      </a>
</div>