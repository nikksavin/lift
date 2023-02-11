<? get_header(); ?>

<?
$seoText = get_field('seo_text');
?>

    <div class="page__calc">
        <div class="container">
            <div class="calc">
                <div>
                    <div class="calc-form">
                        <div class="calc-form__title"><? echo get_field('title'); ?></div>
                        <div class="calc-form__wrap">
                            <div class="calc-form__left">
                                <div class="calc-form__sliders">
                                    <div class="calc-form-row">
                                        <div class="calc-form__label">Грузоподъёмность</div>
                                        <div class="calc-form__slider input-slider-1">
                                            <div class="slider-ui"></div>
                                            <div class="slider-value"><span class="slider-value-min">450</span><span class="slider-value-max">1000</span></div>
                                        </div>
                                    </div>
                                    <div class="calc-form-row">
                                        <div class="calc-form__label">Количество остановок</div>
                                        <div class="calc-form__slider input-slider-2">
                                            <div class="slider-ui"></div>
                                            <div class="slider-value"><span class="slider-value-min">2</span><span class="slider-value-max">23</span></div>
                                        </div>
                                    </div>
                                    <div class="calc-form-row">
                                        <div class="calc-form__label">Скорость м/с</div>
                                        <div class="calc-form__slider input-slider-3">
                                            <div class="slider-ui"></div>
                                            <div class="slider-value"><span class="slider-value-min">1</span><span class="slider-value-max">3</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="calc__checkbox">
                                    <div class="calc-form-row">
                                        <div class="calc-form__label">Отделка кабины:</div>
                                        <div class="calc-form__checkbox">
                                            <div class="checkbox-select">
                                                <input id="r1" type="radio" name="radio_1" style="display: none" checked>
                                                <label for="r1">Неожавеющая сталь</label>
                                            </div>
                                            <div class="checkbox-select">
                                                <input id="r2" type="radio" name="radio_1" style="display: none">
                                                <label for="r2">ЛКП</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="calc-form-row">
                                        <div class="calc-form__label">Машинное отделение:</div>
                                        <div class="calc-form__checkbox">
                                            <div class="checkbox-select">
                                                <input id="r3" type="radio" name="radio_2" style="display: none">
                                                <label for="r3">Есть</label>
                                            </div>
                                            <div class="checkbox-select">
                                                <input id="r4" type="radio" name="radio_2" style="display: none" checked>
                                                <label for="r4">Отсутствует</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="calc-form-row">
                                        <div class="calc-form__label">Панели:</div>
                                        <div class="calc-form__checkbox">
                                            <div class="checkbox-select">
                                                <input id="r5" type="radio" name="radio_3" style="display: none" checked>
                                                <label for="r5">Аналоговые</label>
                                            </div>
                                            <div class="checkbox-select">
                                                <input id="r6" type="radio" name="radio_3" style="display: none">
                                                <label for="r6">Сенсорные</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="calc-form__right">
                                <div class="calc-form__image">
                                    <? if(get_field('img')) : ?>
                                        <img src="<? echo get_field('img'); ?>" alt="">
                                    <? else : ?>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                                    <? endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="calc-form__bottom">
                            <div id="get-calculate-btn" data-src="#popup-form-calculate" data-item="<? the_title(); ?>" class="button-style button-style--blue">Отправить запрос</div>
                        </div>
                    </div>
                </div>
            </div>

            <? if($seoText) : ?>
                <div class="seo__section typography">
                   <? echo $seoText; ?>
                </div>
            <? endif; ?>

        </div>
    </div>


<? get_footer(); ?>