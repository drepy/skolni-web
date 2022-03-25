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

/* Stránkování */
function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}

