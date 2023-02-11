<?php
/*
Template Name: Контакты
Template Post Type: page
*/
?>

<? get_header(); ?>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_ru" type="text/javascript"></script>

<div class="page__contacts">
    <div class="page__contacts-top">
        <div class="container">
            <div class="page__contacts-title">ООО "СЕВЕРО-ЗАПАДНАЯ ПРОМЫШЛЕННАЯ КОРПОРАЦИЯ"</div>
            <div class="page__contacts-items">
                <div class="page__contacts-item">
                    <div class="page__contacts-item-title">Контактные данные</div>
                    <a class="page__contacts-item-link" href="tel:<? echo get_field('phone', 'main_info_page'); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone-ic.svg" alt="">
                        <span><? echo get_field('phone', 'main_info_page'); ?></span></a>
                    <a class="page__contacts-item-link" href="tel:<? echo get_field('phone2', 'main_info_page'); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/phone-ic.svg" alt="">
                        <span><? echo get_field('phone2', 'main_info_page'); ?></span>
                    </a>
                    <a class="page__contacts-item-link" href="mailto:<? echo get_field('mail', 'main_info_page'); ?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/mail-ic.svg" alt="">
                        <span><? echo get_field('mail', 'main_info_page'); ?></span>
                    </a>
                </div>
                <div class="page__contacts-item">
                    <div class="page__contacts-item-title">Адрес на карте</div>
                    <a class="page__contacts-item-link" href="#">
                        <span>1<? echo get_field('adress', 'main_info_page'); ?></span>
                    </a>
                </div>
                <div class="page__contacts-item">
                    <div class="page__contacts-item-title">GPS координаты</div>
                    <div class="page__contacts-item-cords">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cords-ic.svg" alt="">
                        <span id="copy-coords"><? echo get_field('coords', 'main_info_page'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__contacts-bottom">
        <div class="container">
            <div class="page__contacts-bottom-wrapper">
                <div class="page__contacts-form">
                    <? echo do_shortcode('[contact-form-7 id="517" title="Контакты / Форма обратной связи"]'); ?>
                </div>
                <div class="page__contacts-map">
                    <div id="map"></div>
                    <div class="page__contacts-map-text">Угол Полюстровского пр. и Новолитовской улицы. Заезд транспорта с Новолитовской улицы.</div>
                </div>
            </div>
        </div>
    </div>
</div>



<? get_footer(); ?>
