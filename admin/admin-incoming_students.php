<?php 

/********************************************************************************** Incoming Students ***************************************************************************************/

// Register Custom Post Type
function incoming_students_post_type() {

	$labels = array(
		'name'                  => _x( 'Incoming Students', 'Post Type General Name', 'incoming_students' ),
		'singular_name'         => _x( 'Incoming Student', 'Post Type Singular Name', 'incoming_students' ),
		'menu_name'             => __( 'Incoming Students', 'incoming_students' ),
		'name_admin_bar'        => __( 'Incoming Student', 'incoming_students' ),
		'archives'              => __( 'Incoming Student Archives', 'incoming_students' ),
		'attributes'            => __( 'Incoming Student Attributes', 'incoming_students' ),
		'parent_item_colon'     => __( 'Parent Incoming Student:', 'incoming_students' ),
		'all_items'             => __( 'All Incoming Students', 'incoming_students' ),
		'add_new_item'          => __( 'Add New Incoming Student', 'incoming_students' ),
		'add_new'               => __( 'Add New', 'incoming_students' ),
		'new_item'              => __( 'New Incoming Student', 'incoming_students' ),
		'edit_item'             => __( 'Edit Incoming Student', 'incoming_students' ),
		'update_item'           => __( 'Update Incoming Student', 'incoming_students' ),
		'view_item'             => __( 'View Incoming Student', 'incoming_students' ),
		'view_items'            => __( 'View Incoming Students', 'incoming_students' ),
		'search_items'          => __( 'Search Incoming Student', 'incoming_students' ),
		'not_found'             => __( 'Not found', 'incoming_students' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'incoming_students' ),
		'featured_image'        => __( 'Featured Image', 'incoming_students' ),
		'set_featured_image'    => __( 'Set featured image', 'incoming_students' ),
		'remove_featured_image' => __( 'Remove featured image', 'incoming_students' ),
		'use_featured_image'    => __( 'Use as featured image', 'incoming_students' ),
		'insert_into_item'      => __( 'Insert into incoming student', 'incoming_students' ),
		'uploaded_to_this_item' => __( 'Uploaded to this incoming student', 'incoming_students' ),
		'items_list'            => __( 'Incoming students list', 'incoming_students' ),
		'items_list_navigation' => __( 'Incoming students list navigation', 'incoming_students' ),
		'filter_items_list'     => __( 'Filter incoming students list', 'incoming_students' ),
	);
	$args = array(
		'label'                 => __( 'Incoming Student', 'incoming_students' ),
		'description'           => __( 'Incoming Students Description', 'incoming_students' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'incoming_students', $args );

}
add_action( 'init', 'incoming_students_post_type', 0 );

/********************************************************************************** Ebd Incoming Students ***************************************************************************************/

 ?>