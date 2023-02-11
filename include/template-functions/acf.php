<?php
/* ----------------------------------------------------------------
 * Регистарация ACF пунктов меню в админке
 * ----------------------------------------------------------------
 */

function acf_admin_pages_init() {
    // Check function exists.
    if( function_exists('acf_add_options_page') ) {
        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Настройки темы'),
            'menu_title'  => __('Настройки темы'),
            'redirect'    => true,
            'icon_url'   => 'dashicons-update-alt',
            'position' => 1
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Изменить номера, почты'),
            'menu_title'  => __('Изменить номера, почты'),
            'menu_slug'     => 'main_info_page',
            'post_id'     => 'main_info_page',
            'parent_slug' => $parent['menu_slug'],
        ));
        $child1 = acf_add_options_page(array(
            'page_title'  => __('Главная страница'),
            'menu_title'  => __('Главная страница'),
            'menu_slug'     => 'index_page_info',
            'post_id'     => 'index_page_info',
            'parent_slug' => $parent['menu_slug'],
        ));
//        $child2 = acf_add_options_page(array(
//            'page_title'  => __('Страница "О компании"'),
//            'menu_title'  => __('Страница "О компании"'),
//            'menu_slug'     => 'about_page',
//            'post_id'     => 'about_page',
//            'parent_slug' => $parent['menu_slug'],
//        ));
//        $child3 = acf_add_options_page(array(
//            'page_title'  => __('Страница Контакты'),
//            'menu_title'  => __('Страница Контакты'),
//            'menu_slug'     => 'contacts_page',
//            'post_id'     => 'contacts_page',
//            'parent_slug' => $parent['menu_slug'],
//        ));
    }
}
add_action('acf/init', 'acf_admin_pages_init');
