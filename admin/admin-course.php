<?php 

/********************************************************************************** Courses ***************************************************************************************/

// Register Custom Post Type
function courses_post_type() {

	$labels = array(
		'name'                  => _x( 'Courses', 'Post Type General Name', 'Courses' ),
		'singular_name'         => _x( 'Course', 'Post Type Singular Name', 'Courses' ),
		'menu_name'             => __( 'Courses', 'Courses' ),
		'name_admin_bar'        => __( 'Courses', 'Courses' ),
		'archives'              => __( 'Course Archives', 'Courses' ),
		'attributes'            => __( 'Course Attributes', 'Courses' ),
		'parent_item_colon'     => __( 'Parent Course:', 'Courses' ),
		'all_items'             => __( 'All Courses', 'Courses' ),
		'add_new_item'          => __( 'Add New Course', 'Courses' ),
		'add_new'               => __( 'Add New', 'Courses' ),
		'new_item'              => __( 'New Course', 'Courses' ),
		'edit_item'             => __( 'Edit Course', 'Courses' ),
		'update_item'           => __( 'Update Course', 'Courses' ),
		'view_item'             => __( 'View Course', 'Courses' ),
		'view_items'            => __( 'View Courses', 'Courses' ),
		'search_items'          => __( 'Search Course', 'Courses' ),
		'not_found'             => __( 'Not found', 'Courses' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Courses' ),
		'featured_image'        => __( 'Featured Image', 'Courses' ),
		'set_featured_image'    => __( 'Set featured image', 'Courses' ),
		'remove_featured_image' => __( 'Remove featured image', 'Courses' ),
		'use_featured_image'    => __( 'Use as featured image', 'Courses' ),
		'insert_into_item'      => __( 'Insert into course', 'Courses' ),
		'uploaded_to_this_item' => __( 'Uploaded to this course', 'Courses' ),
		'items_list'            => __( 'Courses list', 'Courses' ),
		'items_list_navigation' => __( 'Courses list navigation', 'Courses' ),
		'filter_items_list'     => __( 'Filter courses list', 'Courses' ),
	);
	$args = array(
		'label'                 => __( 'Course', 'Courses' ),
		'description'           => __( 'Coures Post Type', 'Courses' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'courses', $args );

}
add_action( 'init', 'courses_post_type', 0 );

/********************************************************************************** Ebd Courses ***************************************************************************************/

 ?>