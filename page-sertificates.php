<?php
/*
Template Name: Сертификаты
Template Post Type: page
*/
?>

<? get_header(); ?>


<div class="page__sertificates">
    <div class="container">
        <div class="sertificates__title">Разрешения и сертификаты</div>
        <div class="seftificates__items">
            <div class="swiper-wrapper">

            <?php
                $args = array(
                    'posts_per_page' => 999,
                    'order'          => 'ASC',
                    'post_type'      => 'post_certificates',
                );
                $loop = new WP_Query( $args );

                if( $loop->have_posts() ) {
                while( $loop->have_posts() ){
                $loop->the_post();
                ?>

                <a class="swiper-slide seftificates__item" href="<? echo get_field('img'); ?>">
                    <div class="seftificates__item-img">
                        <? if(get_field('img')) : ?>
                            <img src="<? echo get_field('img'); ?>" alt="<? echo get_field('title'); ?>">
                        <? else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<? echo get_field('title'); ?>">
                        <? endif; ?>
                        <div class="seftificates__item-img-icon">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/watch-ic.svg" alt="<? echo get_field('title'); ?>">
                        </div>
                    </div>
                    <div class="seftificates__item-type"><? echo get_field('type'); ?></div>
                    <div class="seftificates__item-title"><? echo get_field('title'); ?></div>
                </a>

                <?php
                }
                wp_reset_postdata();
                } else {
                    echo "<div class='title-sm'>Не добавлено ни одного поста..</div>";
                }
            ?>

            </div>
            <div class="hero-slider-buttons sertificates__btns">
                <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
                <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
            </div>
        </div>
    </div>
</div>







<? get_footer(); ?>
