<? if (!is_front_page()) : ?>
    <div class="top-head">
        <div class="head-title">
            <div class="container">
                <div class="page-title">
                    <h1>
                        <? if(get_queried_object()->name) {
                            echo get_queried_object()->name;?>
                        <? } else { ?>
                            <? the_title(); ?>
                        <? } ?>

                    </h1>
                </div>
            </div>
        </div>
        <div class="breadcrumbs">
            <div class="container">
                <div class="breadcrumbs-wrapper">
                    <? if (function_exists('bcn_display')) {
                        bcn_display();
                    } ?>
                </div>
            </div>
        </div>
    </div>
<? endif;  ?>



