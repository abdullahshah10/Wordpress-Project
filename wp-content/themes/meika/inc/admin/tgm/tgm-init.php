<?php

/**
 * TGM Init Class
 */

include_once get_template_directory() . '/inc/admin/tgm/class-tgm-plugin-activation.php';

function meika_register_required_plugins() {

	$plugins = array(
	    array(
				'name' 	   => esc_html__('Redux Framework','meika'),
				'slug' 	   => 'redux-framework',
				'required' => true,
		),
		array(
				'name' 	   => esc_html__('Meta Box','meika'),
				'slug' 	   => 'meta-box',
				'required' => true,
		),
		array(
			'name' 		  => esc_html__('One Click Demo Import','meika'),
			'slug' 		  => 'one-click-demo-import',
			'required' 	=> true,
		),
		array(
			'name' 		  => esc_html__('Contact Form 7','meika'),
			'slug' 		  => 'contact-form-7',
			'required' 	=> true,
		),
		array(
			'name' 		  => esc_html__('MailChimp for WordPress','meika'),
			'slug' 		  => 'mailchimp-for-wp',
			'required' 	=> true,
		),
		array(
		'name'      => esc_html__('Elementor Page Builder','meika'),
		'slug'      => 'elementor',
		'required'  => true,
		),
        
        array(
		'name'      => esc_html__('Recent Posts Widget With Thumbnails','meika'),
		'slug'      => 'recent-posts-widget-with-thumbnails',
		'required'  => true,
		),
        
		array(
			'name'      => 'ZD Custom Post Types',
			'slug'      => 'zd-custom-post-types',
			'source'    => 'https://wpdemo.zcubethemes.com/meika/wp-content/plugins/zd-custom-post-types.zip',
			'required'  => true,
			'version'   => '1.0.1'
		),		
	);

	$config = array(
		'id'           => 'meika',                 // Unique ID for hashing notices for multiple instances of meika.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'meika-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                    // Automatically activate plugins after installation or not.
		'message'      => '',				   	          // Automatically activate plugins after installation or not
	);

	tgmpa( $plugins, $config );

}
add_action( 'meika_register', 'meika_register_required_plugins' );
