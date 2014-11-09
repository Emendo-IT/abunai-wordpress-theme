<?php
add_filter('genesis_header','abunai_header',9);
function abunai_header() { ?>
  <img class="desktopheader desktoponly" src="<?= genesis_get_option('desktop_header_image_url') ?>" />
  <img class="mobileheader mobileonly" src="<?= genesis_get_option('mobile_header_image_url') ?>" />
<?php } ?>
