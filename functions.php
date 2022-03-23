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

/* Widgety */
add_theme_support('widgets');

function my_sidebars() {
  register_sidebar(
      array(
         'name' => 'Page Sidebar',
         'id' => 'page-sidebar',
         'before-title' => '<h4 class="widget-title">',
         'after-title' => '</h4>' 
      )
  );

}
add_action('widgets_init', 'my_sidebars');