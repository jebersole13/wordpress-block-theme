<?p 

function add_post_meta( $post_id, $meta_key, $meta_value, $unique = false ) {
	// Make sure meta is added to the post, not a revision.
	$the_post = wp_is_post_revision( $post_id );
	if ( $the_post ) {
		$post_id = $the_post;
	}

	return add_metadata( 'post', $post_id, $meta_key, $meta_value, $unique );
}
