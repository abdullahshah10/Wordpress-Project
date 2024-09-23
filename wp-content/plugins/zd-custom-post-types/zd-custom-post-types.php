<?php
/*
Plugin Name: Zcube Theme Plugin
Plugin URI: http://zcube.in
Description: This plugin creates a custom post types Portfolio and Shortcode is [advanced-portfolio]
Version: 1.0.1
Author: zcube
Author URI: http://zcube.in

*/

 
// Register Custom Post Type Team
function create_Team_cpt() {

	$labels = array(
		'name' => _x( 'Teams', 'Post Type General Name', 'luxia' ),
		'singular_name' => _x( 'Team', 'Post Type Singular Name', 'luxia' ),
		'menu_name' => _x( 'Teams', 'Admin Menu text', 'luxia' ),
		'name_admin_bar' => _x( 'Team', 'Add New on Toolbar', 'luxia' ),
		'archives' => __( 'Team Archives', 'luxia' ),
		'attributes' => __( 'Team Attributes', 'luxia' ),
		'parent_item_colon' => __( 'Parent Team:', 'luxia' ),
		'all_items' => __( 'All Teams', 'luxia' ),
		'add_new_item' => __( 'Add New Team', 'luxia' ),
		'add_new' => __( 'Add New', 'luxia' ),
		'new_item' => __( 'New Team', 'luxia' ),
		'edit_item' => __( 'Edit Team', 'luxia' ),
		'update_item' => __( 'Update Team', 'luxia' ),
		'view_item' => __( 'View Team', 'luxia' ),
		'view_items' => __( 'View Teams', 'luxia' ),
		'search_items' => __( 'Search Team', 'luxia' ),
		'not_found' => __( 'Not found', 'luxia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'luxia' ),
		'featured_image' => __( 'Featured Image', 'luxia' ),
		'set_featured_image' => __( 'Set featured image', 'luxia' ),
		'remove_featured_image' => __( 'Remove featured image', 'luxia' ),
		'use_featured_image' => __( 'Use as featured image', 'luxia' ),
		'insert_into_item' => __( 'Insert into Team', 'luxia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team', 'luxia' ),
		'items_list' => __( 'Teams list', 'luxia' ),
		'items_list_navigation' => __( 'Teams list navigation', 'luxia' ),
		'filter_items_list' => __( 'Filter Teams list', 'luxia' ),
	);
	$args = array(
		'label' => __( 'Team', 'luxia' ),
		'description' => __( 'post Teams', 'luxia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'Team', $args );

}
add_action( 'init', 'create_Team_cpt', 0 );


// Register Custom Post Type Service
function create_service_cpt() {

	$labels = array(
		'name' => _x( 'services', 'Post Type General Name', 'luxia' ),
		'singular_name' => _x( 'Service', 'Post Type Singular Name', 'luxia' ),
		'menu_name' => _x( 'services', 'Admin Menu text', 'luxia' ),
		'name_admin_bar' => _x( 'Service', 'Add New on Toolbar', 'luxia' ),
		'archives' => __( 'Service Archives', 'luxia' ),
		'attributes' => __( 'Service Attributes', 'luxia' ),
		'parent_item_colon' => __( 'Parent Service:', 'luxia' ),
		'all_items' => __( 'All services', 'luxia' ),
		'add_new_item' => __( 'Add New Service', 'luxia' ),
		'add_new' => __( 'Add New', 'luxia' ),
		'new_item' => __( 'New Service', 'luxia' ),
		'edit_item' => __( 'Edit Service', 'luxia' ),
		'update_item' => __( 'Update Service', 'luxia' ),
		'view_item' => __( 'View Service', 'luxia' ),
		'view_items' => __( 'View services', 'luxia' ),
		'search_items' => __( 'Search Service', 'luxia' ),
		'not_found' => __( 'Not found', 'luxia' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'luxia' ),
		'featured_image' => __( 'Featured Image', 'luxia' ),
		'set_featured_image' => __( 'Set featured image', 'luxia' ),
		'remove_featured_image' => __( 'Remove featured image', 'luxia' ),
		'use_featured_image' => __( 'Use as featured image', 'luxia' ),
		'insert_into_item' => __( 'Insert into Service', 'luxia' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'luxia' ),
		'items_list' => __( 'services list', 'luxia' ),
		'items_list_navigation' => __( 'services list navigation', 'luxia' ),
		'filter_items_list' => __( 'Filter services list', 'luxia' ),
	);
	$args = array(
		'label' => __( 'Service', 'luxia' ),
		'description' => __( 'post services', 'luxia' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', 'custom-fields'),
		'taxonomies' => array('category'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'create_service_cpt', 0 );

 // Register Custom Post Type zcportfolio


function create_zcportfolio_cpt() {

	$labels = array(
		'name' => _x( 'zcportfolios', 'Post Type General Name', 'zc' ),
		'singular_name' => _x( 'zcportfolio', 'Post Type Singular Name', 'zc' ),
		'menu_name' => _x( 'zcportfolios', 'Admin Menu text', 'zc' ),
		'name_admin_bar' => _x( 'zcportfolio', 'Add New on Toolbar', 'zc' ),
		'archives' => __( 'zcportfolio Archives', 'zc' ),
		'attributes' => __( 'zcportfolio Attributes', 'zc' ),
		'parent_item_colon' => __( 'Parent zcportfolio:', 'zc' ),
		'all_items' => __( 'All zcportfolios', 'zc' ),
		'add_new_item' => __( 'Add New zcportfolio', 'zc' ),
		'add_new' => __( 'Add New', 'zc' ),
		'new_item' => __( 'New zcportfolio', 'zc' ),
		'edit_item' => __( 'Edit zcportfolio', 'zc' ),
		'update_item' => __( 'Update zcportfolio', 'zc' ),
		'view_item' => __( 'View zcportfolio', 'zc' ),
		'view_items' => __( 'View zcportfolios', 'zc' ),
		'search_items' => __( 'Search zcportfolio', 'zc' ),
		'not_found' => __( 'Not found', 'zc' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'zc' ),
		'featured_image' => __( 'Featured Image', 'zc' ),
		'set_featured_image' => __( 'Set featured image', 'zc' ),
		'remove_featured_image' => __( 'Remove featured image', 'zc' ),
		'use_featured_image' => __( 'Use as featured image', 'zc' ),
		'insert_into_item' => __( 'Insert into zcportfolio', 'zc' ),
		'uploaded_to_this_item' => __( 'Uploaded to this zcportfolio', 'zc' ),
		'items_list' => __( 'zcportfolios list', 'zc' ),
		'items_list_navigation' => __( 'zcportfolios list navigation', 'zc' ),
		'filter_items_list' => __( 'Filter zcportfolios list', 'zc' ),
	);
	$args = array(
		'label' => __( 'zcportfolio', 'zc' ),
		'description' => __( 'Add NEW portfolio ', 'zc' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array('category', 'tag'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'zcportfolio', $args );

}
add_action( 'init', 'create_zcportfolio_cpt', 0 );

 
