<?php get_header(); ?>
<?php $cat = get_queried_object(); ?>

<div class="page__category">
    <div class="container">
        <div class="cat">
            <div class="cat__filter-mobile-btn button-style">выбрать фильтры</div>
            <div class="cat__aside">
                <div class="cat__aside-wrap">
                    <? get_template_part( 'include/blocks/products_sidebar_nav'); ?>
                    <? echo do_shortcode( '[fe_widget]' ); ?>
                </div>

            </div>
            <div class="cat__inner">

            <?php

            $taxonomy = 'products_cat';
            $args = array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false,
                'parent' => $cat->term_id
            );
            $terms = get_terms($args);
            if ( $terms && !is_wp_error( $terms ) ) {
                ?>
                    <div class="cat__top">

                    <?php  foreach ( $terms as $term ) { ?>

                        <a href="<?php echo get_term_link($term->slug, $taxonomy); ?>" class="cat__top-item ">
                            <div class="cat__top-item-img">
                                <? if(get_field('photo', $term)) : ?>
                                    <img src="<? echo get_field('photo', $term); ?>" alt="">
                                <? else : ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                                <? endif; ?>
                            </div>
                            <p><?php echo $term->name; ?></p>
                        </a>

                    <?php } ?>

                    </div>
                <?php } ?>

                <div class="cat__main">

                    <?
                    global $wp_query;

                    $post_per_page_global = 12;
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $count = wp_count_posts( 'products')->publish;

                    $args = array(
                        'post_type' => 'products',
                        'post_status' => 'publish',
                        'posts_per_page' => $post_per_page_global,
                        'paged' => $paged,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $cat->taxonomy,
                                'field' => 'slug',
                                'terms' => array($cat->slug),
            //            'operator' => 'IN',
                            )
                        )
                    );

                    $query = new WP_Query($args);
                    $GLOBALS['wp_query']->max_num_pages = $query->max_num_pages;
                    $max_pages = $query->max_num_pages;
                    $total_posts_count = $wp_query->found_posts;

                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post(); ?>

                                    <a href="<? the_permalink(); ?>" class="cat__item">
                                        <div class="cat__item-img">
                                            <? if(get_field('list_img')) : ?>
                                                <img src="<? echo get_field('list_img'); ?>" alt="">
                                            <? else : ?>
                                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                                            <? endif; ?>
                                        </div>
                                        <div class="cat__item-title"><? the_title(); ?></div>
                                    </a>

                                    <? }
                                } else {
                                    echo '<div class="cat__item cat__item--empty">Ничего не найдено</div>';
                            }
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
                                <div class="show-more__text"><?= $pageItems == $max_pages ? $total_posts_count : $paged * $post_per_page_global ?> из <? echo $count; ?> элементов</div>
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
        <?php
        $term = get_queried_object();
        $seoText = get_field('seo_text', $term);
        ?>
        <? if ( is_tax( 'products_cat', array('lifts', 'passenger-lifts', 'hospital-lifts', 'cargo-lifts', 'panoramic-lifts' )) ) :  ?>
            <? if($seoText) : ?>
                <div class="seo__section typography">
                    <? echo $seoText; ?>
                </div>
            <? endif; ?>
            <? get_template_part( 'include/blocks/lift_elements');?>
        <? else : ?>
            <? if($seoText) : ?>
                <div class="seo__section typography">
                    <? echo $seoText; ?>
                </div>
            <? endif; ?>
        <? endif; ?>
    </div>
</div>






<?php get_footer(); ?>
