<?php
/**
 * Template part for Header Top Bar.
 *
 * @package meika
 */

$meika_data = get_option('meika_data'); ?>

<?php
$footer_copyright = $meika_data['meika__opt-copyright'];
?>
<?php if ( $footer_copyright == 1) : ?>

<div class="copyright-wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
              <?php echo wp_kses_post($meika_data['meika__copyright'] ); ?>
            </div>
           <div class="col-lg-6 text-right text-xl-right">
               <?php echo wp_kses_post($meika_data['meika__copyright_link'] ); ?>                 
            </div>
        </div>
    </div>
</div>

<?php endif; ?>