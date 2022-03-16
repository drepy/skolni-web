<?php 


function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'header' => __( 'Header Menu' ),
        'footer' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );

function get_wp_nav_menu() {
    ob_start(); // Start output buffering

    wp_nav_menu(array('theme_location' => 'header'));

    $list = ob_get_contents(); // Store buffer in variable

    ob_end_clean();
    return $list;
}

function get_wp_footer_menu() {
    ob_start(); // Start output buffering

    wp_nav_menu(array('theme_location' => 'footer'));

    $list = ob_get_contents(); // Store buffer in variable

    ob_end_clean();
    return $list;
}
function sortFunction( $a, $b ) {
  return strtotime($a["datum"]) - strtotime($b["datum"]);
}