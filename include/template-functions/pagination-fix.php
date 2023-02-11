<?php

/* ----------------------------------------------------------------
 * 404 pagination fix
 * ----------------------------------------------------------------
 */

add_rewrite_rule(
    '^news/page/(\d+)/?$',
    'index.php?pagename=news&paged=$matches[1]',
    'top'
);

add_rewrite_rule(
    '^projects/page/(\d+)/?$',
    'index.php?pagename=projects&paged=$matches[1]',
    'top'
);

add_rewrite_rule(
    '^calculate/page/(\d+)/?$',
    'index.php?pagename=calculate&paged=$matches[1]',
    'top'
);