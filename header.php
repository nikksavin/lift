<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> <? wp_title(); ?></title>

    <link rel="shortcut icon" href="/favicon.ico" >

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <? wp_head(); ?>
</head>
<body>

<div id="page">
    <!-- Header::Start-->
    <header class="header" id="header">
        <div class="container container--wide">
            <div class="header__inner">
                <div class="header__logo"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Logo.svg" alt="logo"></a></div>
                <nav class="nav">
                    <div class="nav__logo"><a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/Logo.svg" alt="logo"></a></div>
                    <?
                    wp_nav_menu(array(
                        'menu_class' => 'nav__menu', // класс элемента <ul>
                        'container' => false, // тег контейнера или false, если контейнер не нужен
                        'container_class' => false, // класс контейнера
                        'echo' => true, // вывести или вернуть
                        'depth' => 4, // количество уровней вложенности
                        'theme_location' => 'header_menu', // область меню
                    ));
                    ?>
                    <div class="hidden-navbar"><span>...</span>
                        <div class="hidden-list sub-menu"></div>
                    </div>
                    <div class="nav__phone"><a href="tel:<? echo get_field('phone', 'main_info_page'); ?>"><? echo get_field('phone', 'main_info_page'); ?></a></div>
                    <div class="nav__callback">
                        <button id="callback-mob-btn" class="button-style button-style--blue" data-src="#popup-question" data-item="Кнопка в мобильном меню Обратный звонок"><span>обратный звонок</span></button>
                    </div>
                </nav>
                <div class="nav-desc__phone"><a href="tel:<? echo get_field('phone', 'main_info_page'); ?>"><? echo get_field('phone', 'main_info_page'); ?></a></div>
                <div class="header__burger"><i class="fal fa-bars"></i><i class="fal fa-times"></i></div>
            </div>
        </div>
    </header>
    <!-- Header::End-->

    <!-- Main::Start-->
    <main id="main">
        <? get_template_part( 'include/blocks/breadcrumbs'); ?>
