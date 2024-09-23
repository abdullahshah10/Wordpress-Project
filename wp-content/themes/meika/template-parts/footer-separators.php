<?php
/**
 * Template part for the Footer Separators.
 *
 * @package meika
 */
 ?>
<?php
	$meika_data                 = get_option('meika_data');
	$footer_display              = 'yes';
	$footer_widgets_display_page = 'default';
	$footer_widgets_display      = $meika_data['meika__opt-footer-widgets'];
?>


<?php if ( ( $footer_widgets_display == 1 && $footer_widgets_display_page != 'no' ) ||  $footer_widgets_display_page == 'yes' ) :

					$footer_widgets_layout = $meika_data['meika__opt-footer-widgets-layout'];
					$footer_widget_1 = '';
					$footer_widget_2 = '';
					$footer_widget_3 = '';
					$footer_widget_4 = '';

					switch ($footer_widgets_layout) {
						case '1':
							$footer_widget_1 = 'col-xl-5 col-lg-5 col-sm-6 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6 redux-footer';
							$footer_widget_3 = 'col-xl-2 col-lg-2 col-sm-6 redux-footer';
							$footer_widget_4 = 'col-xl-2 col-lg-2 col-sm-6 redux-footer';
							break;
						case '2':
							$footer_widget_1 = 'col-xl-4 col-lg-4 col-sm-6 pt-70 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6 pt-70 redux-footer';
							$footer_widget_3 = 'col-xl-2 col-lg-2 col-sm-6 pt-70redux-footer';
							$footer_widget_4 = 'col-xl-4 col-lg-4 col-sm-6 redux-footer';
							break;
						case '3':
							$footer_widget_1 = 'col-xl-4 col-lg-4 col-sm-6 pt-70 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							$footer_widget_3 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							break;
						case '4':
							$footer_widget_1 = 'col-xl-4 col-lg-4 col-sm-6  pt-70 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							$footer_widget_3 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							break;
						case '5':
							$footer_widget_1 = 'col-xl-4 col-lg-4 col-sm-6  pt-70 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							$footer_widget_3 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							break;
						case '6':
							$footer_widget_1 = 'col-xl-4 col-lg-4 col-sm-6  pt-70 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6  pt-70 redux-footer';
							break;
						case '7':
							$footer_widget_1 = 'col-xl-4 col-lg-4 col-sm-6  pt-70 redux-footer';
							$footer_widget_2 = 'col-xl-2 col-lg-2 col-sm-6  pt-70redux-footer';
							break;
					} ?>


<div class="<?php echo esc_attr( $footer_widget_1 ); ?> ">
     <ul class="footer-widget weight mb-30">
	<?php
		if ( is_active_sidebar( 'footer1' ) ) {
			dynamic_sidebar( 'footer1' );
		}
	?>

    </ul>
</div>


<div class="<?php echo esc_attr( $footer_widget_2 ); ?>">
    <ul class="footer-widget f-menu-content footer-link mb-30">
         <?php
		if ( is_active_sidebar( 'footer2' ) ) {
			dynamic_sidebar( 'footer2' );
		}
	?>
        
    </ul>
</div>

<?php if( $footer_widgets_layout == 1 || $footer_widgets_layout == 2 || $footer_widgets_layout == 3  || $footer_widgets_layout == 4  || $footer_widgets_layout == 5 ): ?>
<div class="<?php echo esc_attr( $footer_widget_3 ); ?>">
    <ul class="footer-widget f-menu-content footer-link mb-30">
       
         <?php
		if ( is_active_sidebar( 'footer3' ) ) {
			dynamic_sidebar( 'footer3' );
		}
	?>
       
    </ul>
</div>
<?php endif; ?>

<?php if( $footer_widgets_layout == 1 || $footer_widgets_layout == 2 ): ?>
<div class="<?php echo esc_attr( $footer_widget_4 ); ?>">
    <ul class="footer-widget weight footer-link mb-30">
         <?php
		if ( is_active_sidebar( 'footer4' ) ) {
			dynamic_sidebar( 'footer4' );
		}
	?>
    </ul>
</div>
<?php endif; ?>

<?php endif; ?>