<?php

/* ----------------------------------------------------------------
 * Register menu
 * ----------------------------------------------------------------
 */
function theme_register_nav_menu() {
    $menus = array(
        'header_menu' => 'Меню в шапке',
        'footer_top_menu' => 'Меню в подвале top',
        'footer_bottom_menu' => 'Меню в подвале bottom',
        'products_sidebar' => 'Каталог sidebar',
    );
    register_nav_menus( $menus );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

/* ----------------------------------------------------
 * Add custom classes to header menu
 * ----------------------------------------------------
 */

// function add_additional_class_on_li($classes, $item, $args) {
//    if ( 'header_menu' === $args->theme_location ) {
//        // set all classes
//        if (isset($args->add_li_class)) {
//            $classes[] = $args->add_li_class;
//        }
//        // add active classes
//        if (in_array('current-menu-item', $classes)) {
//            $classes[] = $args->add_active_li_class;
//        }
//        return $classes;
//    }
//}
//add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function change_wp_nav_menu($classes, $args, $depth) {
    if ( 'header_menu' === $args->theme_location ) {
        foreach ($classes as $key => $class) {
            if ($class == 'sub-menu') {
                $classes[$key] = 'nav__submenu-second sub-menu';
            }
        }
        return $classes;
    }
}
add_filter('nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3);

function nav_menu_link_class(  $atts, $item, $args, $depth ) {

        if ( 0 == $depth ) {
            if ( 'header_menu' === $args->theme_location ) {
                $class = 'nav__menu-link';
                $atts['class'] = $class;
            }
        } elseif(1 == $depth) {
            if ( 'header_menu' === $args->theme_location ) {
                $class = 'nav__submenu-link';
                $atts['class'] = $class;
            }
        } elseif(2 == $depth) {
                if ( 'header_menu' === $args->theme_location ) {
                    $class = 'nav__submenu-link-third';
                    $atts['class'] = $class;
                }
        }
        return $atts;

}
add_filter( 'nav_menu_link_attributes', 'nav_menu_link_class', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
    if($depth == 0) {
        if ( 'header_menu' === $args->theme_location ) {
            array_push($classes, 'nav__menu-item');
        }
        return $classes;
    } elseif($depth == 1) {
        if ( 'header_menu' === $args->theme_location ) {
            array_push($classes, 'nav__submenu-item');
        }
        return $classes;
    } elseif($depth == 2) {
        if ( 'header_menu' === $args->theme_location ) {
            array_push($classes, 'nav__submenu-item-second ');
        }
        return $classes;
    }
}
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function nav_has_child_class ($classes, $item) {

    if (in_array('menu-item-has-children', $classes) ){
        $classes[] = 'has-child';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'nav_has_child_class' , 10 , 2 );


/* ----------------------------------------------------
 * Add custom classes to footer top menu
 * ----------------------------------------------------
 */

function add_footer_top_menu_li_class( $classes, $item, $args ) {
    if ( 'footer_top_menu' === $args->theme_location ) {
        $classes[] = "footer__top-nav-item";
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_footer_top_menu_li_class' , 10, 4 );


/* ----------------------------------------------------
 * Add custom classes to footer bottom menu
 * ----------------------------------------------------
 */

function add_footer_bottom_menu_li_class( $classes, $item, $args ) {
    if ( 'footer_bottom_menu' === $args->theme_location ) {
        $classes[] = 'footer__middle-nav-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_footer_bottom_menu_li_class' , 10, 4 );


/* ----------------------------------------------------
 * Add custom classes to products sidebar menu
 * ----------------------------------------------------
 */

function add_products_sidebar_menu_li_class( $classes, $item, $args ) {
    if ( 'products_sidebar' === $args->theme_location ) {
        $classes[] = 'cat__links-item';
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'add_products_sidebar_menu_li_class' , 10, 4 );


function add_products_sidebar_menu_active_class($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'add_products_sidebar_menu_active_class' , 10 , 2);

function add_products_sidebar_menu_active_class2($classes, $item) {
    if (in_array('current-menu-ancestor', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'add_products_sidebar_menu_active_class2' , 10 , 2);


function add_products_sidebar_menu_active_class3($classes, $item) {
    if (in_array('current-products-ancestor', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'add_products_sidebar_menu_active_class3' , 10 , 2);

function add_products_sidebar_menu_active_class4($classes, $item) {
    if (in_array('current-products_cat-ancestor', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'add_products_sidebar_menu_active_class4' , 10 , 2);


