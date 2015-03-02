<?php
/* Extra Settings */
function abunai_theme_defaults ( $defaults ) {
  $defaults['desktop_header_image_url'] = 'http://placehold.it/1200x400';
  $defaults['mobile_header_image_url'] = 'http://placehold.it/800x100';
  return $defaults;
}
add_filter( 'genesis_theme_settings_defaults', 'abunai_theme_defaults' );

function abunai_theme_sanitization_filters() {
  genesis_add_option_filter( 'no_html', GENESIS_SETTINGS_FIELD,
    array(
      'desktop_header_image_url',
      'mobile_header_image_url'
    )
  );
}
add_action( 'genesis_settings_sanitizer_init', 'abunai_theme_sanitization_filters');
 
function abunai_theme_settings_box( $_genesis_theme_settings_pagehook ) {
    add_meta_box('abunair_header_settings','Header Images', 'abunai_header_settings_box', $_genesis_theme_settings_pagehook, 'main', 'high');
}
add_action('genesis_theme_settings_metaboxes', 'abunai_theme_settings_box');
 
function abunai_header_settings_box() {
    ?>
 
  <p>Desktop Header URL:<br />
  <input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[desktop_header_image_url]" value="<?php echo esc_attr( genesis_get_option('desktop_header_image_url') ); ?>" size="50" /> </p>
  <p>Mobile Header URL:<br />
  <input type="text" name="<?php echo GENESIS_SETTINGS_FIELD; ?>[mobile_header_image_url]" value="<?php echo esc_attr( genesis_get_option('mobile_header_image_url') ); ?>" size="50" /> </p>
  <?php
}
