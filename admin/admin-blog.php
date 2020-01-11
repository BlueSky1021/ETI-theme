<?php 

/********************************************************************************** Blogs ***************************************************************************************/

// Register Custom Post Type
function blogs_post_type() {

	$labels = array(
		'name'                  => _x( 'Blogs', 'Post Type General Name', 'Blogs' ),
		'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'Blogs' ),
		'menu_name'             => __( 'Blogs', 'Blogs' ),
		'name_admin_bar'        => __( 'Blogs', 'Blogs' ),
		'archives'              => __( 'Blog Archives', 'Blogs' ),
		'attributes'            => __( 'Blog Attributes', 'Blogs' ),
		'parent_item_colon'     => __( 'Parent Blog:', 'Blogs' ),
		'all_items'             => __( 'All Blogs', 'Blogs' ),
		'add_new_item'          => __( 'Add New Blog', 'Blogs' ),
		'add_new'               => __( 'Add New', 'Blogs' ),
		'new_item'              => __( 'New Blog', 'Blogs' ),
		'edit_item'             => __( 'Edit Blog', 'Blogs' ),
		'update_item'           => __( 'Update Blog', 'Blogs' ),
		'view_item'             => __( 'View Blog', 'Blogs' ),
		'view_items'            => __( 'View Blogs', 'Blogs' ),
		'search_items'          => __( 'Search Blog', 'Blogs' ),
		'not_found'             => __( 'Not found', 'Blogs' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Blogs' ),
		'featured_image'        => __( 'Featured Image', 'Blogs' ),
		'set_featured_image'    => __( 'Set featured image', 'Blogs' ),
		'remove_featured_image' => __( 'Remove featured image', 'Blogs' ),
		'use_featured_image'    => __( 'Use as featured image', 'Blogs' ),
		'insert_into_item'      => __( 'Insert into blog', 'Blogs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this blog', 'Blogs' ),
		'items_list'            => __( 'Blogs list', 'Blogs' ),
		'items_list_navigation' => __( 'Blogs list navigation', 'Blogs' ),
		'filter_items_list'     => __( 'Filter blogs list', 'Blogs' ),
	);
	$args = array(
		'label'                 => __( 'Blog', 'Blogs' ),
		'description'           => __( 'Blogs Post Type', 'Blogs' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'comments', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-document',
    		'taxonomies' => array('post_tag', 'category'),
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blogs', $args );

}
add_action( 'init', 'blogs_post_type', 0 );

/********************************************************************************** Ebd Blogs ***************************************************************************************/

 ?>