<? get_header(); ?>
<?php
$seoText = get_field('seo_text');
?>
<div class="page__services">
    <div class="container">
        <div class="page__services-title">Перечень услуг</div>
        <div class="page__services-text">Используя накопленный богатый опыт в сфере реализации механизированных паркингов и лифтового оборудования наша компания предлагает следующие услуги</div>

        <div class="page__services-items">

            <?php
            $args = array(
                'posts_per_page' => 999,
                'order'          => 'ASC',
                'post_type'      => 'post_services',
            );
            $loop = new WP_Query( $args );

            if( $loop->have_posts() ) {
                while( $loop->have_posts() ){
                    $loop->the_post();
                    ?>

                    <a href="<? the_permalink(); ?>" class="page__services-item">
                        <div class="page__services-item-img">
                            <? if(get_field('img')) : ?>
                                <img src="<? echo get_field('img'); ?>" alt="<? echo get_field('title'); ?>">
                            <? else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/no_photo.png" alt="<? echo get_field('title'); ?>">
                            <? endif; ?>
                        </div>
                        <div class="page__services-item-title"><? the_title(); ?></div>
                    </a>

                    <?php
                }
                wp_reset_postdata();
            } else {
                echo "<div class='title-sm'>Не добавлено ни одного поста..</div>";
            }
            ?>
        </div>

        <? if($seoText) : ?>
            <div class="seo__section typography">
                <?php echo $seoText; ?>
            </div>
        <? endif; ?>
    </div>
</div>

<? get_footer(); ?>

