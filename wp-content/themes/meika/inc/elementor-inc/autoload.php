<?php

$classes = [
	'integrations/elementor/helpers.php',	
	'integrations/elementor/elementor.php',
];

function meika_plugin_path() {

  // start gets the absolute path to this plugin directory

  return untrailingslashit( plugin_dir_path( __FILE__ ) );
}

foreach ($classes as $classPath) {
	require_once trailingslashit( wp_autoload ) . 'inc/elementor-inc/' . $classPath;
}