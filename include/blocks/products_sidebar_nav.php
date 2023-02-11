<?
wp_nav_menu(array(
    'menu_class' => 'cat__links', // класс элемента <ul>
    'container' => false, // тег контейнера или false, если контейнер не нужен
    'container_class' => false, // класс контейнера
    'echo' => true, // вывести или вернуть
    'depth' => 1, // количество уровней вложенности
    'theme_location' => 'products_sidebar', // область меню
));
?>