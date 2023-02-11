<?php
/*
Template Name: Главная
Template Post Type: page
*/
?>

<? get_header(); ?>

<div class="main-page">
    <div class="hero">
        <div class="container container--wide">
            <? get_template_part( 'include/blocks/hero_slider');?>
        </div>
    </div>
    <div class="production">
        <div class="container">
            <div class="index-title">Продукция</div>
            <div class="production__items">
                <? get_template_part('include/blocks/products_section_list');?>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="about__content">
                    <div class="about-title">О компании</div>
                    <?=get_field('about_company', 'index_page_info');?>
                </div>
                <? get_template_part('include/blocks/index_advantages');?>
            </div>
        </div>
    </div>
    <div class="projects">
        <div class="container">
            <div class="index-section__nav">
                <div class="index-title">Проекты</div>
                <a href="/projects/" class="index-section__nav-link">Смотреть все проекты</a>
            </div>
            <? get_template_part('include/blocks/index_projects');?>
        </div>
    </div>
    <div class="news">
        <div class="container">
            <div class="index-section__nav">
                <div class="index-title">Новости</div>
                <a href="/news/" class="index-section__nav-link">Перейти в пресс-центр</a>
            </div>
            <? get_template_part('include/blocks/index_news');?>
        </div>
    </div>
</div>


<? get_footer(); ?>


