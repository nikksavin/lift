<?php
/*
Template Name: Проекты
Template Post Type: page
*/
?>

<? get_header(); ?>

<div class="page__projects">
    <div class="container">
        <div class="page__projects-title">Проекты</div>
        <div class="page__projects-items">


            <?
            global $wp_query;

            $post_per_page_global = 6;
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $count = wp_count_posts( 'post_projects')->publish;

            $args = array(
                'post_type' => 'post_projects',
                'posts_per_page' => $post_per_page_global,
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'DESC',
                'post_status' => 'publish'
            );

            $query = new WP_Query($args);
            $max_pages = $query->max_num_pages;
            $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
            $total_posts_count = $wp_query->found_posts;

            if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

            <div class="page__projects-item">
                <div class="page__projects-item-img">
                    <? if(get_field('img')) : ?>
                        <img src="<? echo get_field('img'); ?>" alt="">
                    <? else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                    <? endif; ?>
                </div>
                <div class="page__projects-item-type"><? echo get_field('type'); ?></div>
                <div class="page__projects-item-title"><? echo get_field('title'); ?></div>
                <div class="page__projects-item-text"><? echo get_field('text'); ?></div>
            </div>

    <?php
    endwhile;
    endif;

    wp_reset_postdata();

    ?>

        </div>
        <div class="page__pagination">
            <div class="page__pagination-wrapper">
                <? if( $paged < $max_pages ) : ?>
                    <div class="page__pagination-wrapp">
                        <button class="show-more__btn">
                            <span>Показать еще</span>
                            <i class="fas fa-arrow-down"></i>
                        </button>
                        <div class="show-more__text"><?= $pageItems == $max_pages ? $total_posts_count : $paged * $post_per_page_global ?> из <? echo $count; ?> проектов</div>
                    </div>
                <? endif; ?>
                <div class="navigation pagination">
                    <div class="nav-links"><?
                        // custom navigation
                        $big = 999999999;   // need an unlikely integer
                        $total_pages = $query->max_num_pages;
                        if ( $total_pages > 1 )
                        {
                            $current_page = max(1, get_query_var('paged') );
                            $nav_args = array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format'     => '/page/%#%/',
                                'current'     => $current_page,
                                'total'        => $total_pages,
                                'show_all'    => false,
                                'prev_text'    => 'Пред',
                                'next_text'    => 'След',
                            );
                            echo paginate_links( $nav_args );
                        }
                        ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page__rewievs">
    <div class="container">
        <div class="sertificates__title">Отзывы наших клиентов</div>
        <div class="seftificates__items">
            <div class="swiper-wrapper">

                <?php
                $args = array(
                    'posts_per_page' => 999,
                    'order'          => 'ASC',
                    'post_type'      => 'post_reviews',
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
                <div class="button button-next"><i class="far fa-arrow-right-long"> </i></div>
            </div>
        </div>
    </div>
</div>


<?php  wp_reset_postdata(); ?>

<? get_footer(); ?>
