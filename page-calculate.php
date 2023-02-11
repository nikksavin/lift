<?php
/*
Template Name: Рассчитать
Template Post Type: page
*/
?>

<? get_header(); ?>

<div class="page__calculate page__services">

    <div class="container">

        <div class="page__services-title">Рассчитать стоимость продукции</div>

        <div class="page__services-text">Используя накопленный богатый опыт в сфере реализации механизированных паркингов и лифтового оборудования наша компания предлагает рассчитать стоимость следующей продукции</div>

        <div class="cat__main">

            <?php
            $args = array(
                'posts_per_page' => 999,
                'order'          => 'ASC',
                'post_type'      => 'post_calculate',
            );
            $loop = new WP_Query( $args );

            if( $loop->have_posts() ) {
                while( $loop->have_posts() ){
                    $loop->the_post();
                    ?>

                    <a href="<? the_permalink(); ?>" class="cat__item">
                        <div class="cat__item-img">
                            <? if(get_field('img')) : ?>
                                <img src="<? echo get_field('img'); ?>" alt="">
                            <? else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                            <? endif; ?>
                        </div>
                        <div class="cat__item-title"><? the_title(); ?></div>
                    </a>

                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<div class="cat__item">Ничего не найдено</div>';
            }
            ?>


        </div>

    </div>

</div>
















<? get_footer(); ?>
