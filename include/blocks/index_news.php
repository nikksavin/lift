<div class="news__items">
    <div class="swiper-wrapper">
        <?php
        $args = array(
            'posts_per_page' => 999,
            'order'          => 'ASC',
            'post_type'      => 'post_news',
        );
        $loop = new WP_Query( $args );

        if( $loop->have_posts() ) {
            while( $loop->have_posts() ){
                $loop->the_post();
                ?>

                <a href="<? the_permalink(); ?>" class="news__item swiper-slide">
                    <div class="news__item-img">
                        <? if(get_field('img')) : ?>
                            <img src="<? echo get_field('img'); ?>" alt="<? echo get_field('title'); ?>">
                        <? else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<? echo get_field('title'); ?>">
                        <? endif; ?>
                    </div>
                    <div class="news__item-date"><? echo the_date();  ?></div>
                    <div class="news__item-title"><? echo the_title();  ?></div>
                </a>

                <?php
            }
            wp_reset_postdata();
        }
        ?>
    </div>
    <div class="news__items-nav">
        <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
        <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
    </div>
</div>
