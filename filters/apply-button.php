<?php
/**
 * The Template for displaying Apply button.
 *
 * This template can be overridden by copying it to yourtheme/filters/apply-button.php.
 *
 * @see https://filtereverything.pro/resources/templates-overriding/
 */

if ( ! defined('WPINC') ) {
    wp_die();
}

$set_id = isset( $set['ID'] ) ? esc_html( $set['ID'] ) : 0;
?>
<div class="cat__filters-btn  wpc-filters-section-<?php echo $set_id; ?> ">

    <a class="button-style button-style--blue " href="<?php echo esc_url( $apply_url ); ?>">
        ПОКАЗАТЬ ТОВАРЫ
    </a>

    <a class="button-style button-style--gray " href="<?php echo esc_attr( $reset_url ) ?>">
        СБРОСИТЬ ФИЛЬТРЫ
    </a>
</div>
