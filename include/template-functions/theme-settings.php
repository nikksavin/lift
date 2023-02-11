<?php
/* ----------------------------------------------------------------
 * Отключить уведомления об обновлении ядра
 * ----------------------------------------------------------------
 */
if( ! current_user_can( 'edit_users' ) ){
    add_filter( 'auto_update_core', '__return_false' );   // обновление ядра

    add_filter( 'pre_site_transient_update_core', '__return_null' );
}

/* ----------------------------------------------------------------
 * Сортировка постов в админке по порядку
 * ----------------------------------------------------------------
 */
function set_post_order_in_admin( $wp_query ) {
    if ( is_admin() ) {
        $wp_query->set( 'orderby', 'menu_order' );
        $wp_query->set( 'order', 'ASC' );
    }
}
add_filter('pre_get_posts', 'set_post_order_in_admin' );


/* ----------------------------------------------------------------
 * Скрываем уведомление о необходимости обновить плагин ACF
 * ----------------------------------------------------------------
 */
function filter_plugin_updates( $value ) {
    unset( $value->response['4738_advanced-custom-fields-pro/acf.php'] );
//    unset( $value->response['wp-optimize-premium/wp-optimize.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

/* ----------------------------------------------------------------
 * Отключаем лишние пункты меню в админке
 * ----------------------------------------------------------------
 */
//function remove_admin_menu()
//{
//    // remove_menu_page('edit.php'); // Посты блога
//    // remove_menu_page('edit-comments.php'); // Комментарии
//    // remove_menu_page('upload.php'); // Медиабиблиотека
//    // remove_menu_page('tools.php'); // Инструменты
//    // remove_menu_page('options-general.php'); // Удаляем раздел Настройки
//    // remove_menu_page('users.php'); // Пользователи
//    // remove_menu_page('plugins.php'); // Плагины
//    // remove_menu_page('themes.php'); // Внешний вид
//    // remove_menu_page('edit.php?post_type=page'); // Страницы
//    // remove_menu_page('link-manager.php'); // Ссылки
//    // remove_menu_page('wpcf7');   // Contact form 7
//    // remove_menu_page('options-framework'); // Cherry Framework
//}
//add_action('admin_menu', 'remove_admin_menu');


function remove_admin_menus(){
    global $menu;

    $unset_titles = [
        __( 'Dashboard' ),
        __( 'Posts' ),
        __( 'Media' ),
        __( 'Links' ),
//        __( 'Pages' ),
        __( 'Appearance' ),
        __( 'Tools' ),
        __( 'Users' ),
//        __( 'Settings' ),
        __( 'Comments' ),
        __( 'Plugins' ),
    ];

    end( $menu );
    while( prev( $menu ) ){

        $value = explode( ' ', $menu[ key( $menu ) ][0] );
        $title = $value[0] ?: '';

        if( in_array( $title, $unset_titles, true ) ){
            unset( $menu[ key( $menu ) ] );
        }
    }

}
add_action( 'admin_menu', 'remove_admin_menus' );

/* ----------------------------------------------------------------
 * Изменение внутреннего логотипа админки.
 * ----------------------------------------------------------------
 */

function reset_admin_wplogo(  ){
    remove_action( 'admin_bar_menu', 'wp_admin_bar_wp_menu', 10 ); // удаляем стандартную панель (логотип)
    add_action( 'admin_bar_menu', 'my_admin_bar_wp_menu', 10 ); // добавляем свою
}
add_action('add_admin_bar_menus', 'reset_admin_wplogo');

function my_custom_login_logo(){

    echo '
	<style type="text/css">
	h1 a {  background-image:url('.get_bloginfo('template_directory').'/assets/images/Logo.svg) !important;  }
	</style>
	';
}
add_action( 'login_head', 'my_custom_login_logo' );

function my_admin_bar_wp_menu( $wp_admin_bar ) {
    $wp_admin_bar->add_menu( array(
        'id'    => 'wp-logo',
        'title' => '<img style="max-width:35px;height:30px;margin-bottom: 3px;" src="'. get_bloginfo('template_directory') .'/assets/images/footer-logo.svg" alt="" >', // иконка dashicon
        'href'  => home_url('/'),
        'meta'  => array(
            'title' => 'Главная',
        ),
    ) );
}
