<?php
$posts = get_posts([
    'post_type' => 'news',
    'post_status' => 'any',
]);

$the_une = [];

foreach ($posts as $post) {
    if ( get_post_meta($post->ID, 'news_une', 1) ) {
        $the_une = [
            'the_title'     => $post->post_title,
            'the_subtitle'  => get_post_meta($post->ID, 'news_email', 1),
            'the_caption'   => get_post_meta($post->ID, 'news_caption', 1),
            'the_link'      => get_post_meta($post->ID,'news_link_url', 1)
        ];
    } else {
        $the_news[] = [
            'the_title'     => $post->post_title,
            'the_subtitle'  => get_post_meta($post->ID, 'news_subtitle', 1),
            'the_caption'   => get_post_meta($post->ID, 'news_caption', 1),
            'the_link'      => get_post_meta($post->ID,'news_link_url', 1)
        ];
    }
}

bladerunner(
        'views.news',
        [
            'the_une'   => $the_une,
            'the_news'  => $the_news,
        ]
);
