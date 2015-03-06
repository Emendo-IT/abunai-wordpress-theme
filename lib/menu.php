<?php
/* Unregister Secondary Menu */ 
add_theme_support( 'genesis-menus', array( 'primary' => __( 'Primary Navigation Menu', 'genesis' ) ) );
add_filter( 'wp_nav_menu_items', 'theme_menu_extras', 10, 2 );

/**
 * Filter menu items, appending either a search form or today's date.
 *
 * @param string   $menu HTML string of list items.
 * @param stdClass $args Menu arguments.
 *
 * @return string Amended HTML string of list items.
 */
function theme_menu_extras( $menu, $args ) {
  // Add Search Menu
  ob_start();
  get_search_form();
  $search = ob_get_clean();
  $menu  .= '<li class="right search">' . $search . '</li>';
  return $menu;
}

// Register responsive menu script
add_action( 'wp_enqueue_scripts', 'abunai_enqueue_scripts' );
/**
 * Enqueue responsive javascript
 * @author Ozzy Rodriguez
 * @todo Change 'prefix' to your theme's prefix
 */
function abunai_enqueue_scripts() {
  wp_enqueue_script( 'abunai-responsive-menu', get_stylesheet_directory_uri() . '/lib/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true ); 
  // Change 'prefix' to your theme's prefix
}
?>
