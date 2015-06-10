<?
function create_timeline() {
	$labels = array(
		'name'                => 'Timeline',
		'singular_name'       => 'Timeline',
		'menu_name'           => 'Timeline',
		'parent_item_colon'   => 'Parent Timeline:',
		'all_items'           => 'All Events',
		'view_item'           => 'View Timeline',
		'add_new_item'        => 'Add New Event',
		'add_new'             => 'New Event',
		'edit_item'           => 'Edit Event',
		'update_item'         => 'Update Event',
		'search_items'        => 'Search Event',
		'not_found'           => 'No Events found',
		'not_found_in_trash'  => 'No Events found in Trash',
	);

	$args = array(
		'label'               => 'Timeline',
		'description'         => 'Timeline post type',
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail', 'revisions', 'page-attributes', 'editor'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'capability_type'     => 'page',
		//'menu_icon' => plugins_url( 'gm_icon_bw.png', __FILE__ ),
	);

	register_post_type( 'timeline', $args );
}

// Hook into the 'init' action
add_action( 'init', 'create_timeline', 0 );
?>