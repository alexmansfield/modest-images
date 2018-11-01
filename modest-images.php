<?php
/*
Plugin Name: Modest Images
Plugin URI: https://modularwp.com
Description: A modest approach to adding a custom post type for images.
Version: 0.1.0
Author: Alex Mansfield
Author URI: https://modularwp.com/
License: GPLv3 or later
Text Domain: modest_images_textdomain
*/



if ( ! function_exists('mdlr_images_cpt') ) {

	// Register Custom Post Type
	function mdlr_images_cpt() {

		$labels = array(
			'name'                  => _x( 'Images', 'Post Type General Name', 'modest_images_textdomain' ),
			'singular_name'         => _x( 'Image', 'Post Type Singular Name', 'modest_images_textdomain' ),
			'menu_name'             => __( 'Images', 'modest_images_textdomain' ),
			'name_admin_bar'        => __( 'Image', 'modest_images_textdomain' ),
			'archives'              => __( 'Image Archives', 'modest_images_textdomain' ),
			'attributes'            => __( 'Image Attributes', 'modest_images_textdomain' ),
			'parent_item_colon'     => __( 'Parent Image:', 'modest_images_textdomain' ),
			'all_items'             => __( 'All Images', 'modest_images_textdomain' ),
			'add_new_item'          => __( 'Add New Image', 'modest_images_textdomain' ),
			'add_new'               => __( 'Add New', 'modest_images_textdomain' ),
			'new_item'              => __( 'New Image', 'modest_images_textdomain' ),
			'edit_item'             => __( 'Edit Image', 'modest_images_textdomain' ),
			'update_item'           => __( 'Update Image', 'modest_images_textdomain' ),
			'view_item'             => __( 'View Image', 'modest_images_textdomain' ),
			'view_items'            => __( 'View Images', 'modest_images_textdomain' ),
			'search_items'          => __( 'Search Image', 'modest_images_textdomain' ),
			'not_found'             => __( 'Not found', 'modest_images_textdomain' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'modest_images_textdomain' ),
			'featured_image'        => __( 'Featured Image', 'modest_images_textdomain' ),
			'set_featured_image'    => __( 'Set featured image', 'modest_images_textdomain' ),
			'remove_featured_image' => __( 'Remove featured image', 'modest_images_textdomain' ),
			'use_featured_image'    => __( 'Use as featured image', 'modest_images_textdomain' ),
			'insert_into_item'      => __( 'Insert into image', 'modest_images_textdomain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this image', 'modest_images_textdomain' ),
			'items_list'            => __( 'Images list', 'modest_images_textdomain' ),
			'items_list_navigation' => __( 'Image list navigation', 'modest_images_textdomain' ),
			'filter_items_list'     => __( 'Filter images list', 'modest_images_textdomain' ),
		);
		$rewrite = array(
			'slug'                  => 'images',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Image', 'modest_images_textdomain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 25,
			'menu_icon'             => 'dashicons-format-image',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => false,
			'can_export'            => true,
			'has_archive'           => 'images',
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'post',
			'show_in_rest'          => true,
		);
		register_post_type( 'mdlr_image', $args );

	}
	add_action( 'init', 'mdlr_images_cpt', 0 );

}