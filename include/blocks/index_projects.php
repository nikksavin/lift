<div class="project__items">
    <div class="swiper-wrapper">
        <?php
        $args = array(
            'posts_per_page' => 999,
            'order'          => 'ASC',
            'post_type'      => 'post_projects',
        );
        $loop = new WP_Query( $args );

        if( $loop->have_posts() ) {
            while( $loop->have_posts() ){
                $loop->the_post();
                ?>

                <div class="project__item swiper-slide">
                    <div class="project__item-img">
                        <? if(get_field('img')) : ?>
                            <img src="<? echo get_field('img'); ?>" alt="<? echo get_field('title'); ?>">
                        <? else : ?>
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<? echo get_field('title'); ?>">
                        <? endif; ?>
                    </div>
                    <div class="peoject__item-type"><? echo get_field('type'); ?></div>
                    <div class="project__item-text"><? echo get_field('title'); ?></div>
                </div>

                <?php
            }
            wp_reset_postdata();
        }
        ?>
    </div>
    <div class="projects__items-nav">
        <div class="button button-prev"><i class="far fa-arrow-left-long"></i></div>
        <div class="button button-next"><i class="far fa-arrow-right-long"></i></div>
    </div>
</div>
