<?php
/*
Template Name: О компании
Template Post Type: page
*/
?>

<? get_header(); ?>

<div class="page__about">
    <div class="container">

        <? echo get_field('content', 'about_page');  ?>

        <div class="page__about-items">
            <div class="page__about-item">
                <div class="page__about-item-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about1.svg" alt=""></div>
                <div class="page__about-item-title">Высокое качество</div>
            </div>
            <div class="page__about-item">
                <div class="page__about-item-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about2.svg" alt=""></div>
                <div class="page__about-item-title">Особый подход</div>
            </div>
            <div class="page__about-item">
                <div class="page__about-item-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about3.svg" alt=""></div>
                <div class="page__about-item-title">Прямые поставки</div>
            </div>
            <div class="page__about-item">
                <div class="page__about-item-icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about4.svg" alt=""></div>
                <div class="page__about-item-title">Поддержка на всех этапах</div>
            </div>
        </div>
    </div>
</div>

<? get_footer(); ?>
