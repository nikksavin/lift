<?php get_header(); ?>

<?
// ELEMENT ITEMS
$sliderItems = get_field('slider');
$topDescList = get_field('top_desc');
$mainDesc = get_field('main_desc');
$panelTypes = get_field('panel-types');
$doorTypes = get_field('door-types');
$handrailTypes = get_field('handrail-types');
$floorTypes = get_field('floor-types');
$ceilinglTypes = get_field('ceiling-types');

// CHARS LIFT
$loadcapacity = get_field('loadcapacity');
$engineroom = get_field('engineroom');
$sizes = get_field('sizes');
$panel = get_field('panel');
$speed = get_field('speed_ms');
$fireResistance = get_field('fire_resistance');
$doorTypeChar = get_field('door_type_char');
$numberOfStops = get_field('number_of_stops');

// CHARS TRAVELATORS
$carryingCapacity = get_field('provoznaya_sposobnost_chelchas');
$stepWidth = get_field('shirina_stupeni_mm');
$tiltAngle = get_field('ugol_naklona_gradus');
?>



    <div class="page__item">
        <div class="container">
            <div class="page-item-wrapper">
                <div class="cat__aside">
                    <div class="cat__aside-wrap">
                        <? get_template_part( 'include/blocks/products_sidebar_nav'); ?>
                    </div>
                </div>
                <div class="item__container">
                    <div class="item__container-wrap">
                        <div class="item__wrapper">
                            <div class="item__swiper">

                                <div class="item-swiper swiper">
                                    <div class="swiper-wrapper">
                                        <? if($sliderItems) : ?>

                                            <? foreach ($sliderItems as $sliderItem) : ?>
                                                <div class="swiper-slide">
                                                    <div class="item__block">
                                                        <img src="<? echo $sliderItem;  ?>" alt="<? the_title(); ?>">
                                                    </div>
                                                </div>
                                            <?  endforeach; ?>

                                        <? else :  ?>

                                            <div class="swiper-slide">
                                                <div class="item__block">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<? the_title(); ?>">
                                                </div>
                                            </div>

                                        <? endif;  ?>
                                    </div>
                                </div>
                                <div class="item-swiper-pagination swiper">
                                    <div class="swiper-wrapper">

                                        <? if($sliderItems) : ?>

                                            <? foreach ($sliderItems as $sliderItem) : ?>
                                                <div class="swiper-slide">
                                                    <div class="item__block">
                                                        <img src="<? echo $sliderItem;  ?>" alt="<? the_title(); ?>">
                                                    </div>
                                                </div>
                                            <?  endforeach; ?>

                                        <? else :  ?>

                                            <div class="swiper-slide">
                                                <div class="item__block">
                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<? the_title(); ?>">
                                                </div>
                                            </div>

                                        <? endif;  ?>

                                    </div>
                                </div>
                            </div>
                            <div class="item__description">
                                <div class="item__title"><? echo get_field('title'); ?></div>
                                <?  if($topDescList) :  ?>
                                    <ul class="item__desc-list">
                                        <? foreach ($topDescList as $listItem) :  ?>
                                            <li><? echo $listItem['list'];  ?></li>
                                        <?  endforeach;  ?>
                                    </ul>
                                <? endif; ?>
                                <div class="item__action">
                                    <div id="get-cp-detail" class="button-style button-style--blue"  data-src="#popup-form-detail" data-item="<? the_title(); ?>">получить кп</div>
                                    <div id="get-question-detail" class="button-style button-style--transparent"  data-src="#popup-form-detail-question" data-item="<? the_title(); ?>">Задать вопрос</div>
                                </div>
                            </div>
                        </div>

                        <? if($loadcapacity or $engineroom or $sizes or $panel or $speed or $fireResistance or $doorTypeChar or $numberOfStops or $carryingCapacity or $stepWidth or $tiltAngle ) : ?>
                        <section class="char-section">
                            <div class="section-title">Характеристики</div>

                            <div class="item__char-table">
                                <? if($loadcapacity) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Грузоподъемность</div>
                                        <div class="char-weight"><? echo $loadcapacity; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($engineroom) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Машинное помещение</div>
                                        <div class="char-weight"><? echo $engineroom; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($sizes) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Размеры (мм)</div>
                                        <div class="char-weight"><? echo $sizes; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($panel) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Панель</div>
                                        <div class="char-weight"><? echo $panel; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($speed) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Скорость (м/с)</div>
                                        <div class="char-weight"><? echo $speed;  ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($fireResistance) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Огнестойкость</div>
                                        <div class="char-weight"><? echo $fireResistance; ?></div>
                                    </div>
                                <?  endif; ?>
                                <? if($doorTypeChar) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Тип дверей</div>
                                        <div class="char-weight"><? echo $doorTypeChar; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($numberOfStops) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Количество остановок</div>
                                        <div class="char-weight"><? echo $numberOfStops; ?></div>
                                    </div>
                                <? endif; ?>


                                <? if($carryingCapacity) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Провозная способность, (чел/час)</div>
                                        <div class="char-weight"><? echo $carryingCapacity; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($stepWidth) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Ширина ступени, (мм)</div>
                                        <div class="char-weight"><? echo $stepWidth; ?></div>
                                    </div>
                                <? endif; ?>
                                <? if($tiltAngle) : ?>
                                    <div class="item__char-table-row">
                                        <div class="char-label">Угол наклона, (градус)</div>
                                        <div class="char-weight"><? echo $tiltAngle; ?></div>
                                    </div>
                                <? endif; ?>

                            </div>
                        </section>
                        <? endif; ?>



                        <?  if($mainDesc) : ?>
                            <section class="slider-desc typography">
                                <div class="section-title">Описание</div>
                                <?  echo $mainDesc; ?>
                            </section>
                        <?  endif; ?>


                        <? if($panelTypes) : ?>
                        <!-- SLIDER 1-->
                        <section class="slider-section">
                            <div class="item-head">
                                <div class="section-title">Виды панелей</div>
                                <div class="item__slider-arrows item__slider--1">
                                    <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                                    <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
                                </div>
                            </div>
                            <div class="item__slider item__slider--1">
                                <div class="swiper">
                                    <div class="swiper-wrapper">

                                        <?php foreach( $panelTypes as $item): ?>

                                            <div class="swiper-slide">
                                                <div class="item__slider-img">
                                                    <img src="<?php the_field('img', $item->ID); ?>" alt="img">
                                                </div>
                                                <div class="item__slider-label"><?php echo get_the_title($item->ID); ?></div>
                                                <div class="item__slider-type"><?php the_field('desc', $item->ID); ?></div>
                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <?  endif; ?>
                        <?  if($doorTypes) : ?>
                        <!-- SLIDER 2-->
                        <section class="slider-section">
                            <div class="item-head">
                                <div class="section-title">Виды дверей</div>
                                <div class="item__slider-arrows item__slider--2">
                                    <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                                    <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
                                </div>
                            </div>
                            <div class="item__slider item__slider--2">
                                <div class="swiper">
                                    <div class="swiper-wrapper">

                                        <?php foreach( $doorTypes as $item): ?>

                                            <div class="swiper-slide">
                                                <div class="item__slider-img">
                                                    <img src="<?php the_field('img', $item->ID); ?>" alt="img">
                                                </div>
                                                <div class="item__slider-label"><?php echo get_the_title($item->ID); ?></div>
                                                <div class="item__slider-type"><?php the_field('desc', $item->ID); ?></div>
                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <? endif; ?>
                        <? if($handrailTypes) : ?>
                        <!-- SLIDER 3-->
                        <section class="slider-section">
                            <div class="item-head">
                                <div class="section-title">Виды поручней</div>
                                <div class="item__slider-arrows item__slider--3">
                                    <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                                    <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
                                </div>
                            </div>
                            <div class="item__slider item__slider--3">
                                <div class="swiper">
                                    <div class="swiper-wrapper">

                                        <?php foreach( $handrailTypes as $item): ?>

                                            <div class="swiper-slide">
                                                <div class="item__slider-img">
                                                    <img src="<?php the_field('img', $item->ID); ?>" alt="img">
                                                </div>
                                                <div class="item__slider-label"><?php echo get_the_title($item->ID); ?></div>
                                                <div class="item__slider-type"><?php the_field('desc', $item->ID); ?></div>
                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <? endif; ?>
                        <? if($floorTypes) : ?>
                        <!-- SLIDER 4-->
                        <section class="slider-section">
                            <div class="item-head">
                                <div class="section-title">Виды полов</div>
                                <div class="item__slider-arrows item__slider--4">
                                    <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                                    <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
                                </div>
                            </div>
                            <div class="item__slider item__slider--4">
                                <div class="swiper">
                                    <div class="swiper-wrapper">

                                        <?php foreach( $floorTypes as $item): ?>

                                            <div class="swiper-slide">
                                                <div class="item__slider-img">
                                                    <img src="<?php the_field('img', $item->ID); ?>" alt="img">
                                                </div>
                                                <div class="item__slider-label"><?php echo get_the_title($item->ID); ?></div>
                                                <div class="item__slider-type"><?php the_field('desc', $item->ID); ?></div>
                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <? endif; ?>
                        <? if($ceilinglTypes) : ?>
                        <!-- SLIDER 5-->
                        <section class="slider-section">
                            <div class="item-head">
                                <div class="section-title">Виды потолков</div>
                                <div class="item__slider-arrows item__slider--5">
                                    <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                                    <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
                                </div>
                            </div>
                            <div class="item__slider item__slider--5">
                                <div class="swiper">
                                    <div class="swiper-wrapper">

                                        <?php foreach( $ceilinglTypes as $item): ?>

                                            <div class="swiper-slide">
                                                <div class="item__slider-img">
                                                    <img src="<?php the_field('img', $item->ID); ?>" alt="img">
                                                </div>
                                                <div class="item__slider-label"><?php echo get_the_title($item->ID); ?></div>
                                                <div class="item__slider-type"><?php the_field('desc', $item->ID); ?></div>
                                            </div>

                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <? endif; ?>
                        <a href="/products/" class="item__return-btn arrow-back button-style"><span>Назад к списку</span></a>
                    </div>


                                    <?php
                                    global $post;
                                    $related_tax = 'products_cat';
                                    $cats_tags_or_taxes = wp_get_object_terms( $post->ID, $related_tax, array( 'fields' => 'ids' ) );

                                    $args = array(
                                        'posts_per_page' => 20,
                                        'post__not_in' => array($post->ID),
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => $related_tax,
                                                'field' => 'id',
                                                'include_children' => false,
                                                'terms' => $cats_tags_or_taxes,
                                                'operator' => 'IN'
                                            )
                                        )
                                    );

                                    $similarProducts = new WP_Query( $args );

                                    if( $similarProducts->have_posts() ) : ?>
                                    <div class="another-section">
                                        <div class="item-head">
                                            <div class="section-title">Смотрите также</div>
                                            <div class="item__slider-arrows item__slider--6">
                                                <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                                                <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
                                            </div>
                                        </div>
                                        <div class="item__slider item__slider--6">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <? while( $similarProducts->have_posts() ) : $similarProducts->the_post();?>

                                                        <a href="<? echo get_permalink( $similarProducts->post->ID ); ?>" class="swiper-slide">
                                                            <div class="item__slider-img">
                                                                <?  if( get_field('list_img', $similarProducts->ID) ) :  ?>
                                                                    <img src="<?php echo get_field('list_img', $similarProducts->ID); ?>" alt="img">
                                                                <? else : ?>
                                                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<?php echo get_the_title($similarProducts->ID); ?>">
                                                                <?  endif; ?>
                                                            </div>
                                                            <div class="item__slider-label"><?php echo get_the_title($similarProducts->ID); ?></div>
                                                        </a>
                                                    <? endwhile; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?endif;

                            wp_reset_postdata();
                        ?>

                </div>
            </div>
        </div>
    </div>



<?php get_footer(); ?>