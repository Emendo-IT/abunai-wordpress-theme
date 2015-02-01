<?php
// Add Toolbar Menus
function abunai_toolbar() {
	global $wp_admin_bar;

	$args = array(
		'id'     => 'abunai_manual_id',
		'title'  => __( 'Handleiding Abunai Website', 'text_domain' ),
		'href'   => 'http://s.basg.nl/abunaihandleiding',
	);
	$wp_admin_bar->add_menu( $args );

}

// Hook into the 'wp_before_admin_bar_render' action
add_action( 'wp_before_admin_bar_render', 'abunai_toolbar', 999 );
?>
