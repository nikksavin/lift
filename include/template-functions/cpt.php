<?
/* ----------------------------------------------------------------
 * Register CPT
 * ----------------------------------------------------------------
 */

if ((!function_exists( 'register_post_type_product' ))) {
    function register_post_type_product() {

        $labels_custom_tax = array(
            'name'              => 'Разделы каталога',
            'singular_name'     => 'Раздел каталога',
            'all_items'         => 'Все разделы',
            'edit_item'         => 'Редактировать раздел',
            'update_item'       => 'Обновить раздел',
            'add_new_item'      => 'Добавить раздел',
            'new_item_name'     => 'Новый раздел',
            'search_items'      => 'Искать раздел',
            'menu_name'         => 'Разделы',
        );

        $args_custom_tax = array(
            'labels'                 => $labels_custom_tax, // определяется параметром $labels->name
            'hierarchical'          => true,
            'public'                => true,
            'show_in_rest'          => true, // Добавляет возможность выбора таксономии на странице редактирования поста
            'show_admin_column'     => true, // Автоматическое создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
            'rewrite'               => array(
                'slug'=>'products',
                'hierarchical' => true
            ),
            'query_var'    => true,
        );

        $labels_custom_post = array(
            'name'          => 'Товар',
            'singular_name' => 'Товар',
            'menu_name'     => 'Продукция / Каталог',
            'all_items'     => 'Все товары',
            'add_new'       => 'Добавить товар',
            'add_new_item'  => 'Добавить новый товар',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать товар',
            'new_item'      => 'Новый товар',
        );

        $args_custom_post = array(
            'labels'               => $labels_custom_post,
            'menu_icon'			  => 'dashicons-cart', // https://developer.wordpress.org/resource/dashicons/#buddicons-activity
            'menu_position'       => 3,
            'public'              => true,
            'rewrite'             => array(
                'slug' => 'products',
                'with_front' => false
            ),
            'show_in_rest'        => true,
            'hierarchical' => true,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'taxonomies'          => array( 'products_cat' ),
        );

        register_taxonomy( 'products_cat', array( 'products' ), $args_custom_tax);
        register_post_type('products', $args_custom_post);
    }
    add_action( 'init', 'register_post_type_product' );
}


if ((!function_exists('register_post_type_news'))) {
    function register_post_type_news() {

        $labels = array(
            'name' => 'Новости',
            'singular_name' => 'Новость',
            'add_new' => 'Добавить новость',
            'add_new_item' => 'Добавление новости',
            'edit_item' => 'Редактирование новости',
            'new_item' => 'Новость',
            'view_item' => 'Смотреть новость',
            'search_items' => 'Искать новость',
            'menu_name' => 'Новости',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 8,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'news',
            ),
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'date'],
        );
        register_post_type('post_news', $args);
    }
    add_action('init', 'register_post_type_news');
}


if ((!function_exists('register_post_type_services'))) {
    function register_post_type_services() {
        $labels = array(
            'name' => 'Услуги',
            'singular_name' => 'Услуга',
            'add_new' => 'Добавить услугу',
            'add_new_item' => 'Добавление услуги',
            'edit_item' => 'Редактирование услуги',
            'new_item' => 'Услуга',
            'view_item' => 'Смотреть услугу',
            'search_items' => 'Искать услугу',
            'menu_name' => 'Услуги',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'rewrite' => array(
                'slug' => 'services',
                'with_front' => false
            ),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        );
        register_post_type('post_services', $args);
    }
    add_action('init', 'register_post_type_services', 0);
}

if ((!function_exists('register_post_type_projects'))) {
    function register_post_type_projects() {
        $labels = array(
            'name' => 'Проекты',
            'singular_name' => 'Проект',
            'add_new' => 'Добавить проект',
            'add_new_item' => 'Добавление проекта',
            'edit_item' => 'Редактирование проекта',
            'new_item' => 'Проект',
            'view_item' => 'Смотреть проект',
            'search_items' => 'Искать проект',
            'menu_name' => 'Проекты',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 6,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'rewrite' => array(
                'slug' => 'projects',
                'with_front' => false
            ),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        );
        register_post_type('post_projects', $args);
    }
    add_action('init', 'register_post_type_projects', 0);
}

if ((!function_exists('register_post_type_certificates'))) {
    function register_post_type_certificates() {
        $labels = array(
            'name' => 'Сертификаты',
            'singular_name' => 'Сертификат',
            'add_new' => 'Добавить сертификат',
            'add_new_item' => 'Добавление сертификата',
            'edit_item' => 'Редактирование сертификата',
            'new_item' => 'Сертификат',
            'view_item' => 'Смотреть сертификат',
            'search_items' => 'Искать сертификат',
            'menu_name' => 'Сертификаты',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 7,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'rewrite' => array(
                'slug' => 'certificates',
                'with_front' => false
            ),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        );
        register_post_type('post_certificates', $args);
    }
    add_action('init', 'register_post_type_certificates', 0);
}

if ((!function_exists('register_post_type_files'))) {
    function register_post_type_files() {
        $labels = array(
            'name' => 'Файлы',
            'singular_name' => 'Файл',
            'add_new' => 'Добавить файл',
            'add_new_item' => 'Добавление файла',
            'edit_item' => 'Редактирование файла',
            'new_item' => 'Файл',
            'view_item' => 'Смотреть файл',
            'search_items' => 'Искать файл',
            'menu_name' => 'Скачать / Файлы',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 9,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'rewrite' => array(
                'slug' => 'files',
                'with_front' => false
            ),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        );
        register_post_type('post_files', $args);
    }
    add_action('init', 'register_post_type_files', 0);
}

if ((!function_exists('register_post_type_faq'))) {
    function register_post_type_faq() {
        $labels = array(
            'name' => 'faq',
            'singular_name' => 'Вопрос',
            'add_new' => 'Добавить вопрос',
            'add_new_item' => 'Добавление вопроса',
            'edit_item' => 'Редактирование вопроса',
            'new_item' => 'Вопрос',
            'view_item' => 'Смотреть вопрос',
            'search_items' => 'Искать вопрос',
            'menu_name' => 'FAQ',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 9,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'rewrite' => array(
                'slug' => 'faq',
                'with_front' => false
            ),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        );
        register_post_type('post_faq', $args);
    }
    add_action('init', 'register_post_type_faq', 0);
}

if ((!function_exists('register_post_type_reviews'))) {
    function register_post_type_reviews() {
        $labels = array(
            'name' => 'faq',
            'singular_name' => 'Отзыв',
            'add_new' => 'Добавить отзыв',
            'add_new_item' => 'Добавление отзыва',
            'edit_item' => 'Редактирование отзыва',
            'new_item' => 'Отзыв',
            'view_item' => 'Смотреть отзыв',
            'search_items' => 'Искать отзыв',
            'menu_name' => 'Отзывы',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-media-document',
            'public' => true,
            'rewrite' => array(
                'slug' => 'reviews',
            ),
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        );
        register_post_type('post_reviews', $args);
    }
    add_action('init', 'register_post_type_reviews', 0);
}

if ((!function_exists( 'register_post_type_product_inner' ))) {
    function register_post_type_product_inner() {

        $labels_custom_tax = array(
            'name'              => 'Разделы каталога привязанных товаров',
            'singular_name'     => 'Раздел каталога привязанных товаров',
            'all_items'         => 'Все разделы каталога привязанных товаров',
            'edit_item'         => 'Редактировать раздел каталога привязанных товаров',
            'update_item'       => 'Обновить раздел каталога привязанных товаров',
            'add_new_item'      => 'Добавить раздел каталога привязанных товаров',
            'new_item_name'     => 'Новый раздел каталога привязанных товаров',
            'search_items'      => 'Искать раздел каталога привязанных товаров',
            'menu_name'         => 'Разделы каталога привязанных товаров',
        );

        $args_custom_tax = array(
            'labels'                 => $labels_custom_tax, // определяется параметром $labels->name
            'hierarchical'          => true,
            'public'                => true,
            'show_in_rest'          => true, // Добавляет возможность выбора таксономии на странице редактирования поста
            'show_admin_column'     => true, // Автоматическое создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
            'rewrite'               => array(
                'slug'=>'products_inner',
                'hierarchical' => true
            ),
            'query_var'    => true,
        );

        $labels_custom_post = array(
            'name'          => 'Товар',
            'singular_name' => 'Товар',
            'menu_name'     => 'Каталог привязанных товаров',
            'all_items'     => 'Все товары',
            'add_new'       => 'Добавить товар',
            'add_new_item'  => 'Добавить новый товар',
            'edit'          => 'Редактировать',
            'edit_item'     => 'Редактировать товар',
            'new_item'      => 'Новый товар',
        );

        $args_custom_post = array(
            'labels'               => $labels_custom_post,
            'menu_icon'			  => 'dashicons-cart', // https://developer.wordpress.org/resource/dashicons/#buddicons-activity
            'menu_position'       => 3,
            'public'              => true,
            'rewrite'             => array(
                'slug' => 'products_inner',
            ),
            'show_in_rest'        => true,
            'hierarchical' => true,
            'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes' ),
            'taxonomies'          => array( 'products_cat_inner' ),
        );

        register_taxonomy( 'products_cat_inner', array( 'products_inner' ), $args_custom_tax);
        register_post_type('products_inner', $args_custom_post);
    }
    add_action( 'init', 'register_post_type_product_inner' );
}

if ((!function_exists('register_post_type_calculate'))) {
    function register_post_type_calculate() {

        $labels = array(
            'name' => 'Рассчитать / Калькулятор',
            'singular_name' => 'Калькулятор',
            'add_new' => 'Добавить калькулятор',
            'add_new_item' => 'Добавление калькулятор',
            'edit_item' => 'Редактирование калькулятор',
            'new_item' => 'Калькулятор',
            'view_item' => 'Смотреть калькулятор',
            'search_items' => 'Искать калькулятор',
            'menu_name' => 'Рассчитать / Калькуляторы',
        );
        $args = array(
            'labels' => $labels,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-calculator',
            'public' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'calculate',
            ),
            'supports' => ['title', 'editor', 'thumbnail', 'page-attributes', 'date'],
        );
        register_post_type('post_calculate', $args);
    }
    add_action('init', 'register_post_type_calculate');
}
