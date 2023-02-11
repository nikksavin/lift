<?php
/*
Template Name: Скачать
Template Post Type: page
*/
?>

<? get_header(); ?>

<div class="page__download">
    <div class="container">
        <div class="page__download-title">Материалы для скачивания</div>
        <div class="download__items">

            <?php
            $args = array(
                'posts_per_page' => 999,
                'order'          => 'ASC',
                'post_type'      => 'post_files',
            );
            $loop = new WP_Query( $args );

            if( $loop->have_posts() ) {
                while( $loop->have_posts() ){
                    $loop->the_post();
                    ?>
                    <? $iconType = get_field('icon_type'); ?>
                    <a href="<? the_field('file'); ?>" class="download__item" download>
                        <div class="download__item-icon">
                            <? if($iconType == 1 ) : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/file-pdf-ic.svg" >
                            <? else : ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/file-zipper-ic.svg" >
                            <? endif; ?>
                        </div>
                        <div class="download__item-content">
                            <div class="download__item-title"><? the_field('name'); ?></div>
                            <div class="download__item-format">
                                <span>Скачать</span>
                                <div>(<? echo the_field('fize');?>)</div>
                            </div>
                        </div>
                    </a>

                    <?php
                }
                wp_reset_postdata();
            } else {
                echo "<div class='title-sm'>Не добавлено ни одного поста..</div>";
            }
            ?>

        </div>
    </div>
</div>

<? get_footer(); ?>
