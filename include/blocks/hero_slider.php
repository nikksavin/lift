<?php
$heroSlides = get_field('index_slider', 'index_page_info');
?>

<div class="hero-slider swiper">
    <div class="hero__wrapper swiper-wrapper">

        <? foreach ($heroSlides as $slide) :  ?>
            <div class="swiper-slide" style="background-image: url(<?=$slide['image'];?>">
            <div class="hero__slide">
                <h1 class="hero__slide-title"><?=$slide['title'];?></h1>
                <p class="hero__slide-text"><?=$slide['text'];?></p>
                <div class="hero__actions">
                    <a id="btn-get-request" class="button-style button-style--transparent" data-src="#popup-form">получить предложение</a>
                    <a href="<?=$slide['link'];?>" class="button-style button-style--blue">подробнее</a>
                </div>
            </div>
        </div>
        <? endforeach; ?>

    </div>
    <div class="hero-slider-pagination"></div>
</div>
<div class="hero__bottom">
    <div class="hero-slider-buttons">
        <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
        <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
    </div>
    <div class="hero-slider-desc">
        <p>Подъемно-транспортное оборудование</p>
    </div>
    <div id="hero-callback__btn" class="hero-callback" data-src="#popup-question" data-item="Кнопка под слайдером на главной Обратный звонок" >обратный звонок</div>
</div>
