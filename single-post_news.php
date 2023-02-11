<? get_header(); ?>


<div class="page__news-detail">
    <div class="container">
        <div class="news-detail">
            <div class="news-detail__img">
                <? if(get_field('img')) : ?>
                    <img src="<? echo get_field('img'); ?>" alt="">
                <? else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="">
                <? endif; ?>
            </div>
            <div class="news-detail__content">
                <div class="news-detail__date"><? $post_date = get_the_date( 'F j Y' ); echo $post_date;  ?></div>
                <div class="news-detail__title"><? echo the_title(); ?></div>
                <div class="news-detail__text typography">
                    <? echo get_field('news_detail'); ?>
                </div>
                <a href="/news/" class="news-detail__btn">
                    <i class="fas fa-arrow-left"></i>
                    <span>Назад к списку</span>
                </a>
            </div>
        </div>
    </div>
</div>


<? get_footer(); ?>

