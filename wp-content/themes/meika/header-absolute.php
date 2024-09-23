<?php
/**
 * The header for our theme
 *
 *
 * @package meika
 */

$meika_data =get_option('meika_data');
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
         <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_template_part('template-parts/header-layout-two'); ?>
<div id="content" class="site-content">