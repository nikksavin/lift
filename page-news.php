<?php
/*
Template Name: Новости
Template Post Type: page
*/
?>

<? get_header(); ?>

<div class="page__news">
    <div class="container">
        <div class="page__news-items">

            <?
            global $wp_query;

            $post_per_page_global = 6;
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $count = wp_count_posts( 'post_news')->publish;

            $args = array(
                'post_type' => 'post_news',
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

                    <a href="<? the_permalink(); ?>" class="page__news-item">
                        <div class="page__news-item-img">
                            <? if(get_field('img')) : ?>
                                <img src="<? echo get_field('img'); ?>" alt="">
                            <? else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                            <? endif; ?>
                        </div>
                        <div class="page__news-item-date"> <? echo the_date();  ?> </div>
                        <div class="page__news-item-title"><? echo the_title();  ?></div>
                    </a>

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
                        <div class="show-more__text"><?= $pageItems == $max_pages ? $total_posts_count : $paged * $post_per_page_global ?> из <? echo $count; ?> новостей</div>
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



<? get_footer(); ?>
