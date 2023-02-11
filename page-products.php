<?php
/*
Template Name: Продукция
Template Post Type: page
*/
?>

<? get_header(); ?>
<?php
$seoText = get_field('seo_text');
?>

<div class="page__products-section">
    <div class="container">
        <div class="page__products-title">Предоставляемая продукция</div>
        <div class="production__items">
            <? get_template_part( 'include/blocks/products_section_list');?>
        </div>
        <? if($seoText) : ?>
            <div class="seo__section typography">
                <?php echo $seoText; ?>
            </div>
        <? endif; ?>
    </div>
</div>


<? get_footer(); ?>


