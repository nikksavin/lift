<?php
    $taxonomy = 'products_cat';
    $args = array(
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
        // 'parent' => $cat->term_id
    );

    $terms = get_terms($args);
    if ( $terms && !is_wp_error( $terms ) ) {
        $sortedTerms = array();

        foreach ( $terms as $term ) {
            $order = get_field('section_sort', $term);
            $sortedTerms[$order] = (object) array(
                'name' => $term->name,
                'slug' => $term->slug,
                'term_id' => $term->term_id,
                'image' => get_field('photo', $term),
                'url' => get_term_link($term->slug, $taxonomy),
                'show_in_sections_list' =>  get_field('show_index', $term)
            );
        }

        ksort( $sortedTerms, SORT_NUMERIC );

        foreach ( $sortedTerms as $term ) {
            if($term->show_in_sections_list == 1){
            ?>

            <a href="<? echo $term->url ?>" class="production__item">
                <div class="production__item-img">
                    <img src="<? echo $term->image ?>" alt="">
                </div>
                <div class="production__item-title"><? echo $term->name ?></div>
            </a>

        <?
            }
        }
}
?>