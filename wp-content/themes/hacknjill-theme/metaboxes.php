<?php
// Events CCT
//THESE ARE FUNCTIONS TO PRODUCE THE "EVENT" CONTENT TYPE FOR THE EVENTS MANAGER
add_action('init', 'events_register');
function events_register() {
 	//CREATE AN ARRAY OF TERMS THAT WILL CONTROL THE LANGUAGE ON THE ADMIN INTERFACE IN OUR NEW CCT
	$labels = array(
		'name' => _x('Events and Hackathons', 'post type general name'),
		'singular_name' => _x('Event', 'post type singular name'),
		'add_new' => _x('Add New Event', 'event'),
		'add_new_item' => __('Add New Event'),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event'),
		'view_item' => __('View Event'),
		'search_items' => __('Search Event'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);
 
 	//CREATE AN ARRAY OF ARGUMENTS THAT WILL CUSTOMIZE OUR NEW CCT
	//"entry" signifies what will go in the url
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'with_front' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'menu_position' => null,
		'supports' => array('title', 'thumbnail', 'excerpt',)
	  ); 
	  
 	//REGISTER THE POST TYPE WITH WORDPRESS
	register_post_type('events',$args);
}

function events_meta_callback($post) {
	wp_nonce_field( basename( __FILE__ ), 'events_nonce' );
	global $post;
	$events_stored_meta = get_post_meta( $post->ID );
} // end events_meta_callback()


/**
 * Saves the custom meta input
 */
function events_meta_save( $events_id ) {
    // Checks save status
    $is_autosave = wp_is_post_autosave( $events_id );
    $is_revision = wp_is_post_revision( $events_id );
    $is_valid_nonce = ( isset( $_POST[ 'events_nonce' ] ) && wp_verify_nonce( $_POST[ 'events_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
   	  global $post;   
	 
} // end events_meta_save()

add_action( 'save_post', 'events_meta_save' );
?>