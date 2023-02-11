<div class="page__faq-items">

    <?php
    $args = array(
        'posts_per_page' => 999,
        'order'          => 'ASC',
        'post_type'      => 'post_faq',
    );
    $loop = new WP_Query( $args );

    if( $loop->have_posts() ) {
        while( $loop->have_posts() ){
            $loop->the_post();
            ?>

            <div class="b-faq">
                <div class="faq__item">
                    <div class="faq__title js-faq-title">
                        <div class="faq__spoiler js-faq-rotate">
                        <span class="faq__symbol">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/chevron-down-ic.svg" alt=""></span>
                        </div>
                        <span class="faq__text"><? the_field('quastion'); ?></span>
                    </div>
                    <div class="faq__content js-faq-content">
                        <? the_field('answer'); ?>
                    </div>
                </div>
            </div>

            <?php
        }
        wp_reset_postdata();
    } else {
        echo "<div class='title-sm'>Не добавлено ни одного поста..</div>";
    }
    ?>

</div>