<?php
// Replacement search page
add_action( 'genesis_before_loop', 'genesis_do_search_title' );
function genesis_do_search_title() {
	$title = sprintf( '<div class="archive-description"><h1 class="archive-title">%s %s</h1></div>', apply_filters( 'genesis_search_title_text', __( 'Search Results for:', 'genesis' ) ), get_search_query() );
	echo apply_filters( 'genesis_search_title_output', $title ) . "\n";
}

// Remove Genesis Version
remove_action( 'genesis_entry_content', 'genesis_do_post_content' );
add_action(    'genesis_entry_content', 'abunai_do_search_post_content');

function abunai_do_search_post_content() {
  global $post;
  the_excerpt();

}

genesis();
?>
