<?
define("THEME_DIR", get_template_directory_uri());
define('WP_DEFAULT_THEME', 'twentytwentythree');

/* ----------------------------------------------------------------
 * Debug
 * ----------------------------------------------------------------
 */

function printr($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

/* ----------------------------------------------------------------
 * Enqueue styles
 * ----------------------------------------------------------------
 */
function theme_styles() {
    wp_enqueue_style('plugins_styles', THEME_DIR . '/assets/css/plugins.min.css', array(), null);
    wp_enqueue_style('template_styles', THEME_DIR . '/assets/css/style.min.css', array(), null);
    wp_enqueue_style('typography_styles', THEME_DIR . '/assets/css/typography.css', array(), null);
    wp_enqueue_style('custom_styles', THEME_DIR . '/assets/css/custom.css', array(), null);
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/* ----------------------------------------------------------------
 * Enqueue scripts
 * ----------------------------------------------------------------
 */
function theme_scripts() {
    wp_enqueue_script( 'plugins_scripts', THEME_DIR . '/assets/js/plugins/plugins.min.js', array(), null, true );
    wp_enqueue_script( 'sliders_init_scripts', THEME_DIR . '/assets/js/slider.js', array(), null, true );
    wp_enqueue_script( 'maps_init_scripts', THEME_DIR . '/assets/js/map.js', array(), null, true );
    wp_enqueue_script( 'show_more_buttons_scripts', THEME_DIR . '/assets/js/show-more.js', array(), null, true );
    wp_enqueue_script( 'popups_scripts', THEME_DIR . '/assets/js/popups.js', array(), null, true );
    wp_enqueue_script( 'main_scripts', THEME_DIR . '/assets/js/main.js', array(), null, true );
    wp_enqueue_script( 'custom_scripts', THEME_DIR . '/assets/js/custom.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/* ----------------------------------------------------------------
 * Add menu functions
 * ----------------------------------------------------------------
 */
require get_parent_theme_file_path( '/include/template-functions/menu.php' );

/* ----------------------------------------------------------------
 * Add CPT
 * ----------------------------------------------------------------
 */
require get_parent_theme_file_path( '/include/template-functions/cpt.php' );

/* ----------------------------------------------------------------
 * Additional ACF functions
 * ----------------------------------------------------------------
 */
require get_parent_theme_file_path( '/include/template-functions/acf.php' );


/* ----------------------------------------------------------------
 * 404 pagination fix
 * ----------------------------------------------------------------
 */
require get_parent_theme_file_path( '/include/template-functions/pagination-fix.php' );

/* ----------------------------------------------------------------
 * Cf7 fix
 * ----------------------------------------------------------------
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/* ----------------------------------------------------------------
 * Theme personalize setting
 * ----------------------------------------------------------------
 */
require get_parent_theme_file_path( '/include/template-functions/theme-settings.php' );
